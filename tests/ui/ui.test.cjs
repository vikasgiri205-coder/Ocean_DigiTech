const { test, before } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const { JSDOM } = require('jsdom');
const root = path.resolve(__dirname, '../..');
const base = process.env.SITE_URL || 'http://localhost/Ocean_DigiTech-main/';
let home, contact;
before(async () => { home = await (await fetch(base+'index.php')).text(); contact = await (await fetch(base+'contact-us.php')).text(); });
function setup(mobile=false, html=home) {
 const dom = new JSDOM(html, { url:base, runScripts:'outside-only', pretendToBeVisual:true });
 const media = {matches:mobile,addEventListener(type,fn){this.change=fn;}};
 dom.window.matchMedia = () => media;
 dom.window.eval(fs.readFileSync(path.join(root,'js/theme.js'),'utf8'));
 return {dom,w:dom.window,d:dom.window.document,media};
}
function pointer(w,el,type) { const e=new w.Event(type);Object.defineProperty(e,'pointerType',{value:'mouse'});el.dispatchEvent(e); }
test('mobile navigation opens, expands two levels, and closes on a leaf link',()=>{
 const {dom,d}=setup(true);const menu=d.querySelector('.site-menu-toggle');menu.click();assert.equal(menu.getAttribute('aria-expanded'),'true');
 d.querySelector('[aria-controls="services-menu"]').click();d.querySelector('[aria-controls="service-group-1"]').click();
 assert.equal(d.querySelector('#service-group-1').parentElement.classList.contains('is-open'),true);
 d.querySelector('#service-group-1 a').dispatchEvent(new dom.window.MouseEvent('click',{bubbles:true,cancelable:true}));
 assert.equal(menu.getAttribute('aria-expanded'),'false');dom.window.close();
});
test('Escape closes the deepest mobile submenu before the parent panel',()=>{
 const {dom,w,d}=setup(true);d.querySelector('.site-menu-toggle').click();d.querySelector('[aria-controls="services-menu"]').click();
 const child=d.querySelector('[aria-controls="service-group-1"]');child.click();child.focus();
 d.dispatchEvent(new w.KeyboardEvent('keydown',{key:'Escape',bubbles:true}));
 assert.equal(child.getAttribute('aria-expanded'),'false');assert.equal(d.querySelector('.site-menu-panel').dataset.open,'true');dom.window.close();
});
test('desktop dropdown closes on page scroll even when Services retains focus',()=>{
 const {dom,w,d}=setup();const item=d.querySelector('.site-nav-dropdown');item.querySelector('a').focus();pointer(w,item,'pointerenter');
 assert.ok(item.classList.contains('is-open'));w.dispatchEvent(new w.Event('scroll'));assert.ok(!item.classList.contains('is-open'));dom.window.close();
});
test('desktop Escape closes a hovered dropdown without keyboard focus inside it',()=>{
 const {dom,w,d}=setup();const item=d.querySelector('.site-nav-dropdown');pointer(w,item,'pointerenter');d.dispatchEvent(new w.KeyboardEvent('keydown',{key:'Escape'}));assert.ok(!item.classList.contains('is-open'));dom.window.close();
});
test('hovering another service category closes the previous category',()=>{
 const {dom,w,d}=setup();const items=[...d.querySelectorAll('#services-menu>.site-nav-dropdown')];pointer(w,items[0],'pointerenter');pointer(w,items[1],'pointerenter');assert.ok(!items[0].classList.contains('is-open'));assert.ok(items[1].classList.contains('is-open'));dom.window.close();
});
test('the entire category name is an accessible toggle',()=>{
 const {dom,d}=setup(true);const button=d.querySelector('[aria-controls="service-group-1"]');assert.match(button.textContent,/Design & Build/);assert.equal(button.tagName,'BUTTON');dom.window.close();
});
test('clicking outside closes the mobile panel and resets every submenu',()=>{
 const {dom,w,d}=setup(true);d.querySelector('.site-menu-toggle').click();d.querySelector('[aria-controls="services-menu"]').click();d.querySelector('main,.main').dispatchEvent(new w.MouseEvent('click',{bubbles:true}));assert.equal(d.querySelector('.site-menu-panel').dataset.open,'false');assert.equal(d.querySelectorAll('.site-nav-dropdown.is-open').length,0);dom.window.close();
});
test('resizing between mobile and desktop resets menu state',()=>{
 const {dom,d,media}=setup(true);d.querySelector('.site-menu-toggle').click();media.matches=false;media.change();assert.equal(d.querySelector('.site-menu-panel').dataset.open,'false');dom.window.close();
});
function forms(html=home) {
 const dom = new JSDOM(html,{url:base,runScripts:'outside-only'});
 const w=dom.window,d=w.document;
 w.eval(fs.readFileSync(path.join(root,'js/forms.js'),'utf8'));
 return {dom,w,d};
}
const tick=()=>new Promise(resolve=>setImmediate(resolve));
function submit(w,form) { form.dispatchEvent(new w.Event('submit',{bubbles:true,cancelable:true})); }
function fillContact(d,withService=true) {
 for(const [name,value] of Object.entries({name:'UI Test',phone:'1234567890',email:'test@example.com',message:'Mocked form test'}))d.querySelector(`[name="${name}"]`).value=value;
 d.querySelector('[name="not_robot"]').checked=true;
 if(withService)d.querySelector('[name="services[]"]').checked=true;
}
test('ArrowDown opens a category and focuses its first service',()=>{
 const {dom,w,d}=setup();const button=d.querySelector('[aria-controls="service-group-1"]');button.dispatchEvent(new w.KeyboardEvent('keydown',{key:'ArrowDown',bubbles:true,cancelable:true}));assert.equal(d.activeElement,d.querySelector('#service-group-1 a'));dom.window.close();
});
test('desktop flyouts reverse direction when the right edge would be clipped',()=>{
 const {dom,w,d}=setup();const item=d.querySelector('#service-group-1').parentElement;item.querySelector(':scope>.site-submenu').getBoundingClientRect=()=>({right:5000});pointer(w,item,'pointerenter');item.dispatchEvent(new w.Event('pointerover',{bubbles:true}));assert.ok(item.classList.contains('opens-left'));dom.window.close();
});
test('quick proposal accepts Enter/form submit and blocks duplicate requests while pending',async()=>{
 const {dom,w,d}=forms();const form=d.querySelector('[data-async-form="quick-proposal"]');form.querySelector('input').value='example.com';let calls=0,complete;
 w.fetch=()=>{calls++;return new Promise(resolve=>complete=resolve);};submit(w,form);submit(w,form);
 assert.equal(calls,1);assert.equal(form.getAttribute('aria-busy'),'true');assert.ok(form.querySelector('button').disabled);
 complete({ok:true,text:async()=>'OK'});await tick();assert.equal(form.querySelector('input').value,'');assert.equal(form.querySelector('.form-feedback').dataset.state,'success');assert.ok(!form.querySelector('button').disabled);dom.window.close();
});
test('whitespace-only quick requests do not submit',()=>{
 const {dom,w,d}=forms();const form=d.querySelector('[data-async-form]');form.querySelector('input').value='   ';let calls=0;w.fetch=()=>{calls++;};submit(w,form);assert.equal(calls,0);dom.window.close();
});
test('a failed quick proposal retains entered details and offers a retry',async()=>{
 const {dom,w,d}=forms();const form=d.querySelector('[data-async-form]');form.querySelector('input').value='example.com';w.fetch=async()=>({ok:false,text:async()=>'ERR'});submit(w,form);await tick();assert.equal(form.querySelector('input').value,'example.com');assert.equal(form.querySelector('.form-feedback').dataset.state,'error');assert.ok(!form.querySelector('button').disabled);dom.window.close();
});
test('contact fields have persistent labels and service options are grouped',()=>{
 const {dom,d}=forms(contact);const form=d.querySelector('#proposalForm');for(const field of form.querySelectorAll('input:not([type=hidden]),textarea'))assert.ok(field.labels.length,field.name);assert.ok(form.querySelector('[role=group][aria-labelledby]'));dom.window.close();
});
test('contact submission requires at least one selected service',()=>{
 const {dom,w,d}=forms(contact);fillContact(d,false);let calls=0;w.fetch=()=>{calls++;};submit(w,d.querySelector('#proposalForm'));assert.equal(calls,0);assert.equal(d.querySelector('[name="services[]"]').validity.customError,true);dom.window.close();
});
test('contact success uses inline confirmation and clears the form',async()=>{
 const {dom,w,d}=forms(contact);fillContact(d);w.fetch=async()=>({ok:true,json:async()=>({status:'success'})});const form=d.querySelector('#proposalForm');submit(w,form);await tick();assert.equal(form.querySelector('.form-feedback').dataset.state,'success');assert.equal(form.querySelector('[name=name]').value,'');dom.window.close();
});
test('malformed server responses retain contact details and restore the submit button',async()=>{
 const {dom,w,d}=forms(contact);fillContact(d);w.fetch=async()=>({ok:false,json:async()=>{throw new Error('Invalid JSON');}});const form=d.querySelector('#proposalForm');submit(w,form);await tick();assert.equal(form.querySelector('.form-feedback').dataset.state,'error');assert.equal(form.querySelector('[name=name]').value,'UI Test');assert.ok(!form.querySelector('button[type=submit]').disabled);dom.window.close();
});
test('contact website input accepts a bare domain by normalizing on blur',()=>{
 const {dom,w,d}=forms(contact);const field=d.querySelector('[name=website]');field.value='example.com';field.dispatchEvent(new w.Event('blur'));assert.equal(field.value,'https://example.com');assert.ok(field.checkValidity());dom.window.close();
});
test('footer actions have a real destination instead of an inert newsletter form',()=>{
 const {dom,d}=forms();assert.equal(d.querySelectorAll('.premium-footer a[href="#"]').length,0);assert.equal(d.querySelectorAll('.newsletter-form').length,0);assert.ok(d.querySelector('.footer-contact-link[href="contact-us.php"]'));dom.window.close();
});
test('invalid contact submissions return structured errors without sending mail',async()=>{
 const r=await fetch(base+'send_proposal.php',{method:'POST',body:new URLSearchParams({name:'',email:'invalid',not_robot:'0'})});assert.equal(r.status,400);assert.match(r.headers.get('content-type'),/application\/json/);const data=await r.json();assert.equal(data.status,'error');assert.ok(data.errors.length>=3);
});
test('malformed contact field types fail validation instead of crashing',async()=>{
 const r=await fetch(base+'send_proposal.php',{method:'POST',body:new URLSearchParams({'name[]':'invalid','email[]':'invalid','services[][]':'invalid'})});assert.equal(r.status,400);assert.equal((await r.json()).status,'error');
});
test('quick proposal endpoint rejects empty and multiline submissions before mail delivery',async()=>{
 for(const businessName of ['', '   ', 'bad\nheader', 'x'.repeat(251)]){
  const r=await fetch(base+'send_proposal_simple.php',{method:'POST',body:new URLSearchParams({businessName})});assert.equal(r.status,400);assert.equal((await r.text()).trim(),'NO');
 }
});
test('proposal endpoints reject GET requests',async()=>{
 for(const file of ['send_proposal.php','send_proposal_simple.php'])assert.equal((await fetch(base+file)).status,405);
});
test('unknown or malformed editorial slugs return 404 pages',async()=>{
 for(const file of ['blog-details.php','case-study.php'])for(const query of ['slug=missing-page','slug[]=invalid']){
  const r=await fetch(base+file+'?'+query);assert.equal(r.status,404);const html=await r.text();assert.match(html,/Page not found/);assert.match(html,/css\/premium\.css/);
 }
});
test('Enter in the website field normalizes a bare domain before native validation',()=>{
 const {dom,w,d}=forms(contact);const field=d.querySelector('[name=website]');field.value='example.com';field.dispatchEvent(new w.KeyboardEvent('keydown',{key:'Enter'}));assert.equal(field.value,'https://example.com');dom.window.close();
});
test('navigation chevrons use decorative SVG paths instead of font glyphs',()=>{
 const {dom,d}=setup();const toggles=[...d.querySelectorAll('.nav-submenu-toggle')];assert.equal(toggles.length,5);for(const button of toggles){const svg=button.querySelector('svg.nav-chevron');assert.ok(svg);assert.equal(svg.getAttribute('aria-hidden'),'true');assert.equal(svg.getAttribute('focusable'),'false');assert.ok(svg.querySelector('path[stroke-linecap="round"]'));assert.ok(!button.textContent.includes('⌄'));}dom.window.close();
});
test('each service category has a separate icon and readable label',()=>{
 const {dom,d}=setup();for(const button of d.querySelectorAll('.nav-category-toggle')){assert.ok(button.querySelector('.nav-category-icon svg'));assert.ok(button.querySelector('.nav-category-text').textContent.trim());}assert.ok(d.querySelector('.site-nav-cta .nav-cta-arrow'));dom.window.close();
});
test('every editorial detail page shares the service-page hero and content/sidebar layout',async()=>{
 const groups=[['blog-details.php',['scalable-web-architecture','technical-seo-checklist','reduce-ppc-waste','custom-software-vs-saas','mobile-checkout','ai-customer-acquisition']],['case-study.php',['saas-platform','d2c-storefront','legal-search','healthcare-portal','b2b-growth','hospitality']]];
 for(const [file,slugs] of groups)for(const slug of slugs){
  const response=await fetch(base+file+'?slug='+slug);assert.equal(response.status,200);const html=await response.text();assert.ok(html.startsWith('<!doctype html>')||html.trimStart().startsWith('<!doctype html>'));const dom=new JSDOM(html,{url:base+file+'?slug='+slug});const d=dom.window.document;
  assert.ok(d.querySelector('main>.inner-hero'));assert.ok(d.querySelector('.service-details-section .col-lg-8>.service-details-wrap'));assert.ok(d.querySelector('.col-lg-4 .sidebar-right .all-service-list'));assert.equal(d.querySelectorAll('h1').length,1);
  const toc=[...d.querySelectorAll('.detail-toc a')];assert.equal(toc.length,4);for(const a of toc)assert.ok(d.querySelector(a.getAttribute('href')));
  const related=[...d.querySelectorAll('.detail-related a')];assert.equal(related.length,2);for(const a of related)assert.notEqual(new URL(a.href).searchParams.get('slug'),slug);
  if(file==='case-study.php')assert.ok(d.querySelector('.detail-disclosure'));
  dom.window.close();
 }
});
test('section entrances animate once and clean up so card hover remains available',()=>{
 const {dom,w,d}=forms();let callback,observed=[],unobserved=[];
 w.matchMedia=()=>({matches:false,addEventListener(){}});
 w.IntersectionObserver=class{constructor(fn){callback=fn;}observe(el){observed.push(el);}unobserve(el){unobserved.push(el);}disconnect(){}};
 w.eval(fs.readFileSync(path.join(root,'js/animations.js'),'utf8'));
 assert.ok(observed.length>10);const card=d.querySelector('.growth-card');assert.ok(!card.classList.contains('od-motion-enter'));
 callback([{isIntersecting:true,target:card}]);assert.ok(card.classList.contains('od-motion-enter'));assert.ok(unobserved.includes(card));
 card.dispatchEvent(new w.Event('animationend'));assert.ok(!card.classList.contains('od-motion-enter'));assert.equal(card.style.getPropertyValue('--od-motion-delay'),'');dom.window.close();
});
test('reduced-motion preference skips viewport animations',()=>{
 const {dom,w,d}=forms();let count=0;w.matchMedia=()=>({matches:true});w.IntersectionObserver=class{constructor(){count++;}};
 w.eval(fs.readFileSync(path.join(root,'js/animations.js'),'utf8'));assert.equal(count,0);assert.equal(d.querySelectorAll('.od-motion-enter').length,0);dom.window.close();
});
test('content stays visible when IntersectionObserver is unavailable',()=>{
 const {dom,w,d}=forms();w.matchMedia=()=>({matches:false});delete w.IntersectionObserver;
 assert.doesNotThrow(()=>w.eval(fs.readFileSync(path.join(root,'js/animations.js'),'utf8')));assert.equal(d.querySelectorAll('.od-motion-enter').length,0);dom.window.close();
});
test('hero caption is separate from the image and both actions use SVG icons',()=>{
 const {dom,d}=forms();assert.equal(d.querySelector('.premium-photo-index'),null);const card=d.querySelector('.premium-art-card');assert.ok(card.querySelector('.premium-art-copy strong'));assert.ok(!d.querySelector('.premium-photo-frame').contains(card));assert.equal(d.querySelectorAll('.premium-hero-actions a .od-icon').length,2);dom.window.close();
});
test('service FAQs use native accessible disclosures and structured metric cards',async()=>{
 const html=await(await fetch(base+'custom-website-design.php')).text();const dom=new JSDOM(html);const d=dom.window.document;
 const items=[...d.querySelectorAll('.od-faq-item')];assert.equal(items.length,6);for(const details of items){const summary=details.querySelector('summary');assert.ok(summary.querySelector('.od-faq-question').textContent.trim());assert.ok(details.querySelector('.od-faq-answer').textContent.trim());const initiallyOpen=details.open;summary.click();assert.equal(details.open,!initiallyOpen);summary.click();assert.equal(details.open,initiallyOpen);}
 assert.equal(d.querySelectorAll('.od-stat-grid [role=listitem]').length,5);assert.equal(d.querySelector('.od-proof-value').textContent,'100+');assert.equal(d.querySelector('.trust-ribbon'),null);dom.window.close();
});
test('SVG icons resolve locally without legacy icon-font classes',()=>{
 const {dom,d}=forms();const xml=new JSDOM(fs.readFileSync(path.join(root,'img/icons.svg'),'utf8'),{contentType:'image/svg+xml'});const ids=new Set([...xml.window.document.querySelectorAll('symbol')].map(el=>el.id));assert.ok(ids.size>60);
 const uses=[...d.querySelectorAll('.od-icon use')];assert.ok(uses.length>30);for(const use of uses){assert.ok(ids.has(new URL(use.getAttribute('href'),base).hash.slice(1)));assert.equal(use.getAttribute('width'),'100%');}
 assert.equal(d.querySelectorAll('i[class*="fa-"],span[class*="ti-"]').length,0);xml.window.close();dom.window.close();
});
test('why-choose-us, footer contacts and blog cards retain clear content structure',async()=>{
 const {dom,d}=forms();assert.equal(d.querySelectorAll('.why-feature').length,4);assert.match(d.querySelector('.why-features').textContent,/Language is not a barrier/);assert.equal(d.querySelectorAll('.why-stats dd').length,3);assert.equal(d.querySelectorAll('.od-footer-contact-icon svg').length,3);assert.ok(d.querySelector('#od-chatbot-toggle-btn svg use'));
 const blog=new JSDOM(await(await fetch(base+'blog.php')).text());assert.equal(blog.window.document.querySelectorAll('.blog-card-modern').length,6);for(const card of blog.window.document.querySelectorAll('.blog-card-modern'))assert.match(card.querySelector('img').getAttribute('src'),/^img\/editorial\//);blog.window.close();dom.window.close();
});

test('service FAQs, metrics and reviews sit outside the narrow article/sidebar columns',async()=>{
 const pages=['custom-website-design','custom-website-development','ecommerce-web-development','mobile-app-development','social-media-management','social-media-advertising','google-ads-management','paid-social-advertising','amazon-ppc-management','amazon-dsp-advertising','seo-services','local-seo-services','ecommerce-seo-services'];
 for(const page of pages){
  const response=await fetch(base+page+'.php');assert.equal(response.status,200);const dom=new JSDOM(await response.text());const d=dom.window.document;
  const faq=d.querySelector('.service-faq-band');assert.ok(faq,page);assert.equal(faq.parentElement.className,'main',page);assert.equal(faq.closest('.service-details-wrap,.sidebar-right,[class*="col-lg-"]'),null,page);assert.ok(faq.querySelector(':scope>.container.service-faq-layout'));
  const items=[...faq.querySelectorAll('details')];assert.ok(items.length>=4,page);assert.equal(items[0].open,true);assert.equal(items.filter(item=>item.open).length,1);
  const proof=d.querySelector('.service-proof-band');assert.ok(proof,page);assert.equal(proof.parentElement.className,'main',page);assert.equal(proof.querySelectorAll('.od-proof-stat').length,5,page);assert.equal(d.querySelectorAll('.service-details-wrap .od-faq-section,.service-details-wrap .od-proof-section').length,0,page);
  const review=d.querySelector('.service-review-band');if(review)assert.equal(review.parentElement.className,'main',page);
  dom.window.close();
 }
});
