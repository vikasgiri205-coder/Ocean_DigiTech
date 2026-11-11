/* Shared navigation: works independently of Bootstrap and carousel libraries. */
(() => {
  'use strict';
  const nav = document.querySelector('.site-navigation');
  if (!nav) return;
  const mobile = window.matchMedia('(max-width: 1199px)');
  const trigger = nav.querySelector('.site-menu-toggle');
  const panel = nav.querySelector('.site-menu-panel');
  const dropdowns = [...nav.querySelectorAll('.site-nav-dropdown')];
  const setDropdown = (item, open) => {
    if (open) {
      [...item.parentElement.children].filter(sibling => sibling !== item && sibling.classList.contains('site-nav-dropdown')).forEach(sibling => setDropdown(sibling, false));
    }
    item.classList.toggle('is-open', open);
    const control = item.querySelector(':scope > .site-nav-row > .nav-submenu-toggle');
    control?.setAttribute('aria-expanded', String(open));
    if (control?.hasAttribute('aria-label')) control.setAttribute('aria-label', control.getAttribute('aria-label').replace(/^(Show|Hide)/, open ? 'Hide' : 'Show'));
    item.classList.remove('opens-left');
    if (open && !mobile.matches && item.parentElement.classList.contains('site-submenu')) {
      const submenu = item.querySelector(':scope > .site-submenu');
      if (submenu.getBoundingClientRect().right > window.innerWidth - 16) item.classList.add('opens-left');
    }
    if (!open) item.querySelectorAll('.site-nav-dropdown').forEach(child => setDropdown(child, false));
  };
  const closeDropdowns = () => dropdowns.forEach(item => setDropdown(item, false));
  const setMenu = open => {
    panel.dataset.open = String(open);
    trigger.setAttribute('aria-expanded', String(open));
    trigger.querySelector('.menu-toggle-label').textContent = open ? 'Close' : 'Menu';
    nav.classList.remove('navbar-hidden');
    if (!open) closeDropdowns();
  };
  trigger.addEventListener('click', () => setMenu(panel.dataset.open !== 'true'));
  dropdowns.forEach(item => {
    const button = item.querySelector(':scope > .site-nav-row > .nav-submenu-toggle');
    button.addEventListener('click', () => {
      const open = !item.classList.contains('is-open');
      [...item.parentElement.children].filter(sibling => sibling !== item && sibling.classList.contains('site-nav-dropdown')).forEach(sibling => setDropdown(sibling, false));
      setDropdown(item, open);
    });
    item.addEventListener('pointerenter', event => {
      if (!mobile.matches && event.pointerType === 'mouse') setDropdown(item, true);
    });
    item.addEventListener('pointerleave', event => {
      if (!mobile.matches && event.pointerType === 'mouse') setDropdown(item, false);
    });
    item.addEventListener('focusout', event => {
      if (!mobile.matches && !item.contains(event.relatedTarget)) setDropdown(item, false);
    });
  });
  document.addEventListener('click', event => {
    if (!nav.contains(event.target)) setMenu(false);
  });
  document.addEventListener('keydown', event => {
    if (event.key !== 'Escape') return;
    const focusedDropdown = document.activeElement?.closest('.site-nav-dropdown.is-open');
    if (focusedDropdown) {
      setDropdown(focusedDropdown, false);
      focusedDropdown.querySelector(':scope > .site-nav-row > .nav-submenu-toggle').focus();
    } else if (!mobile.matches && nav.querySelector('.site-nav-dropdown.is-open')) {
      closeDropdowns();
    } else if (panel.dataset.open === 'true') {
      setMenu(false);
      trigger.focus();
    }
  });
  panel.addEventListener('click', event => {
    if (event.target.closest('a') && mobile.matches) setMenu(false);
  });
  mobile.addEventListener('change', () => setMenu(false));
  window.addEventListener('scroll', () => { if (!mobile.matches) closeDropdowns(); }, { passive:true });
  // Keep desktop flyouts within the viewport on narrower laptop displays.
  const fitFlyouts = () => {
    nav.querySelectorAll('.site-submenu .site-nav-dropdown.is-open').forEach(item => {
      const submenu = item.querySelector(':scope > .site-submenu');
      item.classList.remove('opens-left');
      if (submenu.getBoundingClientRect().right > window.innerWidth - 16) item.classList.add('opens-left');
    });
  };
  nav.addEventListener('pointerover', () => { if (!mobile.matches) fitFlyouts(); });
  nav.addEventListener('click', () => { if (!mobile.matches) fitFlyouts(); });
  nav.addEventListener('keydown', event => {
    if (event.key !== 'ArrowDown' || !event.target.matches('.nav-submenu-toggle')) return;
    event.preventDefault();
    const item = event.target.closest('.site-nav-dropdown');
    setDropdown(item, true);
    item.querySelector(':scope > .site-submenu a, :scope > .site-submenu button')?.focus();
  });
  // Give the shared skip link a destination on legacy templates too.
  const main = document.querySelector('main, .main');
  if (main && !document.getElementById('main-content')) {
    main.id = 'main-content';
    main.tabIndex = -1;
  }
})();
