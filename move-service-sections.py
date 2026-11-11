from pathlib import Path
import re

def div_end(s,start):
 depth=0
 for m in re.finditer(r'</?div\b[^>]*>',s[start:],re.I):
  depth+=-1 if m[0].startswith('</') else 1
  if depth==0:return start+m.end()
 raise ValueError('Unbalanced block')
changed=[]
for p in Path('.').glob('*.php'):
 s=p.read_text(encoding='utf-8')
 if '<section class="od-faq-section"' not in s or '<!--services details end-->' not in s:continue
 faq=re.search(r'<section class="od-faq-section"[^>]*>(.*?)</section>',s,re.S)
 if not faq:continue
 body=faq[1]
 body=body.replace('<p>Useful answers before we get started.</p>','<p>Clear answers to help you plan your project with confidence.</p><a class="btn secondary-solid-btn service-faq-contact" href="contact-us.php#contact-form">Have another question?</a>')
 body=re.sub(r'(<details\b[^>]*)(>)',r'\1 open\2',body,count=1)
 faq_html='<section class="od-faq-section service-faq-band" aria-label="Frequently asked questions"><div class="container service-faq-layout">'+body+'</div></section>'
 s=s[:faq.start()]+s[faq.end():]
 proof=re.search(r'<section class="od-proof-section"[^>]*>(.*?)</section>',s,re.S)
 proof_html=''
 if proof:
  proof_html='<section class="od-proof-section service-proof-band" aria-label="Agency at a glance"><div class="container">'+proof[1]+'</div></section>'
  s=s[:proof.start()]+s[proof.end():]
 s=re.sub(r'<div class="row mt-5">\s*<div class="col-md-12">\s*</div>\s*</div>','',s)
 review_html=''
 comment=s.find('<!-- Client Testimonials -->')
 if comment>=0:
  start=s.find('<div',comment);end=div_end(s,start);fragment=s[start:end];quote=re.search(r'<blockquote[^>]*>(.*?)</blockquote>',fragment,re.S)
  if quote:
   review_html='<section class="service-review-band"><div class="container service-review-layout"><div><span class="premium-eyebrow">Client perspective</span><h2>What our clients say</h2></div><blockquote class="service-review-quote">'+quote[1]+'</blockquote></div></section>'
   s=s[:start]+s[end:]
 s=s.replace('<!--services details end-->','<!--services details end-->\n'+proof_html+'\n'+faq_html+'\n'+review_html,1)
 p.write_text(s,encoding='utf-8');changed.append(p.name)
print('Moved FAQ and metrics out of the article/sidebar columns:',len(changed),'pages')
