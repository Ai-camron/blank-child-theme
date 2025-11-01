(function () {
  'use strict';

  const root = document.documentElement;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  function updateMotionClass(event) {
    const shouldReduce = typeof event.matches === 'boolean' ? event.matches : prefersReducedMotion.matches;
    root.classList.toggle('prefers-reduced-motion', shouldReduce);
  }

  updateMotionClass(prefersReducedMotion);
  prefersReducedMotion.addEventListener('change', updateMotionClass);

  function handleFirstTab(event) {
    if (event.key === 'Tab') {
      root.classList.add('user-is-tabbing');
      window.removeEventListener('keydown', handleFirstTab);
      window.addEventListener('mousedown', handleMouseDownOnce);
    }
  }

  function handleMouseDownOnce() {
    root.classList.remove('user-is-tabbing');
    window.removeEventListener('mousedown', handleMouseDownOnce);
    window.addEventListener('keydown', handleFirstTab);
  }

  window.addEventListener('keydown', handleFirstTab);

  document.addEventListener('click', (event) => {
    const target = event.target;
    if (!(target instanceof HTMLAnchorElement)) {
      return;
    }

    const hash = target.hash ? target.hash.slice(1) : '';
    if (!hash) {
      return;
    }

    const destination = document.getElementById(hash);
    if (!destination) {
      return;
    }

    window.requestAnimationFrame(() => {
      destination.focus({ preventScroll: true });
      destination.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });
})();
