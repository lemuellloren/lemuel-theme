(function () {
  const btn = document.getElementById('hamburger-btn');
  const menu = document.getElementById('mobile-menu');

  if (!btn || !menu) return;

  btn.addEventListener('click', function () {
    const isOpen = menu.classList.contains('is-open');

    if (isOpen) {
      menu.classList.remove('is-open');
      btn.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-hidden', 'true');
      btn.classList.remove('hamburger-open');
    } else {
      menu.classList.add('is-open');
      btn.setAttribute('aria-expanded', 'true');
      menu.setAttribute('aria-hidden', 'false');
      btn.classList.add('hamburger-open');
    }
  });

  // Reset if screen is resized to desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 768) {
      menu.classList.remove('is-open');
      btn.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-hidden', 'true');
      btn.classList.remove('hamburger-open');
    }
  });
})();
