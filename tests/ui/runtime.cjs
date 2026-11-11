const fs=require('node:fs'),path=require('node:path');const {JSDOM,VirtualConsole}=require('jsdom');
(async()=>{const base='http://localhost/Ocean_DigiTech-main/';for(const page of ['index.php','custom-website-design.php','contact-us.php']){
 const html=await(await fetch(base+page)).text(),errors=[];const vc=new VirtualConsole();vc.on('jsdomError',e=>errors.push(e.message));
 const dom=new JSDOM(html,{url:base+page,runScripts:'outside-only',pretendToBeVisual:true,virtualConsole:vc}),w=dom.window;
 w.matchMedia=()=>({matches:false,addEventListener(){}});w.scrollTo=()=>{};
 const paths=[...w.document.querySelectorAll('script[src]')].map(e=>e.getAttribute('src')).filter(s=>s.startsWith('js/'));
 // Deferred shared controllers run after legacy synchronous libraries.
 paths.sort((a,b)=>Number(/theme.js|forms.js/.test(a))-Number(/theme.js|forms.js/.test(b)));
 for(const src of paths){try{w.eval(fs.readFileSync(path.resolve(__dirname,'../..',src.split('?')[0]),'utf8'));}catch(e){errors.push(src+': '+e.message);}}
 w.document.dispatchEvent(new w.Event('DOMContentLoaded'));w.dispatchEvent(new w.Event('load'));await new Promise(r=>setTimeout(r,150));console.log(page,JSON.stringify(errors));if(errors.length)process.exitCode=1;dom.window.close();
}})();
