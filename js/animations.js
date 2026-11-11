/* Once-only viewport entrances. Safe without IntersectionObserver or animation support. */
(() => {
  const preference = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (preference.matches || !('IntersectionObserver' in window)) return;
  const selector = '.why-intro, .why-visual, .why-feature, .why-bottom, .od-faq-heading, .od-proof-stat, .section-heading, .showcase-heading, .premium-hero-copy, .premium-hero-art, .inner-hero-copy, .inner-hero-visual, .service-card-pro, .growth-card, .showcase-card, .team-card-modern, .blog-card-modern, .single-promo-card, .counter-modern-box, .detail-text-section, .detail-next-step, .call-to-action .container';
  const elements = [...document.querySelectorAll(selector)];
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting || preference.matches) return;
      const element = entry.target;
      observer.unobserve(element);
      element.classList.add('od-motion-enter');
      element.addEventListener('animationend', () => {
        element.classList.remove('od-motion-enter');
        element.style.removeProperty('--od-motion-delay');
      }, {once:true});
    });
  }, {threshold:0.08,rootMargin:'0px 0px -16px 0px'});
  elements.forEach(element => {
    const index = [...element.parentElement.children].indexOf(element);
    element.style.setProperty('--od-motion-delay', `${Math.min(index,3)*65}ms`);
    observer.observe(element);
  });
  preference.addEventListener('change', event => {
    if (!event.matches) return;
    observer.disconnect();
    elements.forEach(element => {
      element.classList.remove('od-motion-enter');
      element.style.removeProperty('--od-motion-delay');
    });
  });
})();
