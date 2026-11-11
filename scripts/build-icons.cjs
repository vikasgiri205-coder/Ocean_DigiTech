const fs=require('node:fs'),path=require('node:path'),crypto=require('node:crypto');
const projectRoot=path.resolve(__dirname,'..');process.chdir(projectRoot);
const lucideDir=path.join(projectRoot,'tests/ui/node_modules/lucide-static');
const brands=require('../tests/ui/node_modules/@fortawesome/free-brands-svg-icons');
const map={
 'ti-check-box':'circle-check','ti-angle-up':'chevron-up','ti-arrow-right':'arrow-right','ti-email':'mail','ti-mobile':'smartphone','ti-control-forward':'chevrons-right','ti-location-pin':'map-pin','ti-check':'check','ti-lock':'lock-keyhole','ti-light-bulb':'lightbulb','ti-user':'user-round','ti-headphone-alt':'headset','ti-receipt':'receipt-text','ti-announcement':'megaphone','ti-shopping-cart':'shopping-cart','ti-time':'clock-3','ti-comments':'messages-square','ti-gallery':'images','ti-wallet':'wallet','ti-send':'send','ti-widget':'layout-dashboard','ti-bolt':'zap','ti-desktop':'monitor','ti-target':'target','ti-bar-chart':'chart-no-axes-combined','ti-vector':'pen-tool','ti-cloud':'cloud','ti-world':'globe','ti-heart':'heart','ti-medall':'award','ti-layers-alt':'layers','ti-search':'search','ti-arrow-up':'arrow-up','ti-palette':'palette','ti-stats-up':'trending-up','ti-pie-chart':'chart-pie','ti-shield':'shield-check','ti-bell':'bell','ti-briefcase':'briefcase-business','ti-link':'link','ti-control-play':'play',
 'fa-star':'star','fa-times-circle':'circle-x','fa-arrow-right':'arrow-right','fa-check-circle':'circle-check','fa-clock':'clock-3','fa-calendar-alt':'calendar-days','fa-quote-right':'quote','fa-check':'check','fa-rocket':'rocket','fa-chart-line':'chart-no-axes-combined','fa-envelope':'mail','fa-code':'code-xml','fa-bullseye':'target','fa-video':'video','fa-gift':'gift','fa-search':'search','fa-file-alt':'file-text','fa-map-marker-alt':'map-pin','fa-phone-alt':'phone','fa-users-cog':'users-round','fa-chart-bar':'chart-no-axes-column','fa-lock':'lock-keyhole','fa-chevron-left':'chevron-left','fa-chevron-right':'chevron-right','fa-layer-group':'layers','fa-search-dollar':'search-check','fa-cogs':'settings-2','fa-shopping-cart':'shopping-cart'
};
const brandMap={'ti-facebook':'faFacebookF','ti-instagram':'faInstagram','ti-dribbble':'faDribbble','ti-linkedin':'faLinkedinIn','fa-linkedin-in':'faLinkedinIn','fa-facebook-f':'faFacebookF','fa-twitter':'faTwitter','fa-shopify':'faShopify','fa-hubspot':'faHubspot','fa-amazon':'faAmazon','fa-meta':'faMeta','fa-google':'faGoogle'};
for(const [key,value]of Object.entries(brandMap))map[key]='brand-'+value;
const names=new Set([...Object.values(map),'arrow-up-right','arrow-left','sparkles','users','heart-handshake','briefcase-business','award','star','circle-help']);
const symbols=[];
for(const name of names){
 if(name.startsWith('brand-')){const data=brands[name.slice(6)];if(!data)throw Error(name);const [w,h,,,paths]=data.icon;symbols.push(`<symbol id="${name}" viewBox="0 0 ${w} ${h}" fill="currentColor" stroke="none">${[paths].flat().map(d=>`<path d="${d}"/>`).join('')}</symbol>`);}
 else{const svg=fs.readFileSync(path.join(lucideDir,'icons',name+'.svg'),'utf8');const inner=svg.match(/<svg\b[^>]*>([\s\S]*?)<\/svg>/)[1];symbols.push(`<symbol id="${name}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">${inner}</symbol>`);}
}
fs.mkdirSync('img/icons',{recursive:true});
const sprite='<svg xmlns="http://www.w3.org/2000/svg">'+symbols.join('\n')+'</svg>';fs.writeFileSync('img/icons.svg',sprite);const hash=crypto.createHash('sha256').update(sprite).digest('hex').slice(0,12);
fs.copyFileSync(path.join(lucideDir,'LICENSE'),'img/icons/LUCIDE-LICENSE.txt');fs.copyFileSync('tests/ui/node_modules/@fortawesome/free-brands-svg-icons/LICENSE.txt','img/icons/FONT-AWESOME-LICENSE.txt');
function icon(name,attrs=''){return `<svg class="od-icon" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" ${attrs}><use href="img/icons.svg?v=${hash}#${name}" width="100%" height="100%"></use></svg>`;}
let count=0;const missing=new Set();
for(const file of fs.readdirSync('.').filter(f=>f.endsWith('.php'))){let s=fs.readFileSync(file,'utf8');
 s=s.replace(/<(span|i)\b([^>]*\bclass=(['"])(.*?)\3[^>]*)>\s*<\/\1>/g,(all,tag,attrs,q,classes)=>{
  const key=classes.split(/\s+/).find(c=>/^(ti|fa)-/.test(c));if(!key)return all;if(!map[key]){missing.add(key);return all;}
  const retained=classes.split(/\s+/).filter(c=>!/^ti-|^fa-|^(fa|fas|far|fab)$/.test(c));
  let a=attrs.replace(/\bclass=(['"]).*?\1/,'').replace(/\baria-hidden=(['"]).*?\1/,'').replace(/\bfocusable=(['"]).*?\1/,'');
  count++;return icon(map[key],a).replace('class="od-icon"',`class="od-icon ${retained.join(' ')}"`);
 });
 const arrows={'↗':'arrow-up-right','→':'arrow-right','←':'arrow-left','✦':'sparkles'};
 s=s.replace(/<span aria-hidden="true">([↗→←✦])<\/span>/g,(_,char)=>icon(arrows[char]));
 s=s.replace(/([↗→←])(?=\s*<\/a>)/g,(_,char)=>icon(arrows[char]));
 s=s.replace(/img\/icons\.svg(?:\?v=[a-f0-9]+)?#/g,`img/icons.svg?v=${hash}#`);
 s=s.replace(/\s*<link[^>]*href="(?:css\/(?:themify-icons|all\.min)\.css|https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/font-awesome[^\"]*)"[^>]*>/g,'');
 s=s.replace('<button class="scroll-top scroll-to-target"','<button type="button" aria-label="Back to top" class="scroll-top scroll-to-target"');
 if(file==='chatbot-widget.php')s=s.replace('id="od-chatbot-send-btn"','id="od-chatbot-send-btn" aria-label="Send message"');
 fs.writeFileSync(file,s);
}
if(missing.size)throw Error('Unmapped icons: '+[...missing]);
fs.writeFileSync('img/icons/README.md','Local SVG icons\n\nGeneral interface icons: Lucide 0.468.0 (ISC/MIT). Brand marks: Font Awesome Free Brands 6.7.2 (CC BY 4.0). See the bundled license files. Source packages are pinned in tests/ui/package.json.\n\nhttps://lucide.dev/license\nhttps://fontawesome.com/license/free\n');
console.log('Replaced',count,'icon-font elements; sprite contains',names.size,'SVG symbols.');
