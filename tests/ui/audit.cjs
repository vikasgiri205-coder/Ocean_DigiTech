const fs=require('node:fs');const path=require('node:path');const {JSDOM}=require('jsdom');
const base=process.env.SITE_URL||'http://localhost/Ocean_DigiTech-main/';
const core=['index','about-us','services','project','project-details','case-studies','blog','contact-us','team','faq','review','privacy-policy','terms-and-conditions','services-details','custom-website-design','custom-website-development','ecommerce-web-development','mobile-app-development','social-media-management','social-media-advertising','google-ads-management','paid-social-advertising','amazon-ppc-management','amazon-dsp-advertising','seo-services','local-seo-services','ecommerce-seo-services','free-audit-landing','growth-audit','booking-landing','audit-thank-you','basic-login','basic-sign-up','change-password','password-reset','coming-soon','thank-you'];
const urls=core.map(s=>s+'.php');
const cases=['saas-platform','d2c-storefront','legal-search','healthcare-portal','b2b-growth','hospitality'];const articles=['scalable-web-architecture','technical-seo-checklist','reduce-ppc-waste','custom-software-vs-saas','mobile-checkout','ai-customer-acquisition'];
urls.push(...cases.map(s=>'case-study.php?slug='+s),...articles.map(s=>'blog-details.php?slug='+s));
(async()=>{
const docs=new Map(),issues=[],targets=new Map();
const sprite=new JSDOM(fs.readFileSync(path.join(__dirname,'../../img/icons.svg'),'utf8'),{contentType:'image/svg+xml'}).window.document;
const symbolIds=new Set([...sprite.querySelectorAll('symbol')].map(el=>el.id));
for(const url of urls){
 const res=await fetch(base+url);const html=await res.text();if(res.status!==200)issues.push({page:url,issue:'HTTP '+res.status});
 const dom=new JSDOM(html,{url:base+url});const d=dom.window.document;docs.set(new URL(base+url).href,d);
 for(const [test,ok]of [['viewport',d.querySelector('meta[name=viewport]')],['one h1',d.querySelectorAll('h1').length===1],['theme loaded',d.querySelectorAll('link[href*="css/premium.css"]').length===1]])if(!ok)issues.push({page:url,issue:test});
 for(const use of d.querySelectorAll('svg use[href]')) { const href=use.getAttribute('href');const u=new URL(href,base);if(!symbolIds.has(u.hash.slice(1)))issues.push({page:url,issue:'missing SVG symbol '+href});const asset=new URL(u);asset.hash='';targets.set(asset.href,{source:url,anchor:''}); }
 const ids=new Set();d.querySelectorAll('[id]').forEach(e=>{if(ids.has(e.id))issues.push({page:url,issue:'duplicate ID '+e.id});ids.add(e.id);});
 d.querySelectorAll('img:not([alt])').forEach(e=>issues.push({page:url,issue:'image without alt '+e.getAttribute('src')}));
 for(const el of d.querySelectorAll('a[href],img[src],script[src],link[rel=stylesheet]')){
  const raw=el.getAttribute(el.tagName==='A'||el.tagName==='LINK'?'href':'src');
  if(!raw||raw==='#'){if(el.tagName==='A')issues.push({page:url,issue:'inert link: '+el.textContent.trim().slice(0,55)});continue;}
  const target=new URL(raw,base+url);if(target.origin!==new URL(base).origin)continue;
  if(!targets.has(target.href))targets.set(target.href,{source:url,anchor:target.hash});
 }
}
for(const [url,origin]of targets){
 const target=new URL(url);target.hash='';let d=docs.get(target.href);
 if(!d){const r=await fetch(target);if(r.status>=400){issues.push({page:origin.source,issue:'broken target '+url+' ('+r.status+')'});continue;}if(r.headers.get('content-type')?.includes('text/html')){d=new JSDOM(await r.text()).window.document;docs.set(target.href,d);}}
 if(origin.anchor&&d){const id=decodeURIComponent(origin.anchor.slice(1));if(!d.getElementById(id)&&!d.querySelector(`[name="${id}"]`)&&!(id==='main-content'&&d.querySelector('main,.main')))issues.push({page:origin.source,issue:'missing anchor '+url});}
}
const result={pages:urls.length,localTargets:targets.size,issues};fs.writeFileSync(path.join(__dirname,'audit-results.json'),JSON.stringify(result,null,2));console.log(JSON.stringify(result,null,2));if(issues.length)process.exitCode=1;
})().catch(e=>{console.error(e);process.exitCode=1;});
