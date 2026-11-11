(() => {
  const video = document.querySelector('.hero-technology-video');
  const toggle = document.querySelector('.hero-video-toggle');
  if (!video || !toggle) return;
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  const sync = () => {
    const playing = !video.paused;
    toggle.textContent = playing ? 'Pause video' : 'Play video';
    toggle.setAttribute('aria-label', playing ? 'Pause technology video' : 'Play technology video');
    toggle.setAttribute('aria-pressed', String(playing));
  };
  const play = () => { video.play().catch(sync); };
  toggle.addEventListener('click', () => video.paused ? play() : video.pause());
  video.addEventListener('play', sync);
  video.addEventListener('pause', sync);
  reducedMotion.addEventListener('change', event => { if (event.matches) video.pause(); });
  if (!reducedMotion.matches && !navigator.connection?.saveData) play();
})();
