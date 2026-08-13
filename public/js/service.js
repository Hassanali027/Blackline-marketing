document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.site-header #burger');
  const nav = document.querySelector('.site-header #nav');

  burger?.addEventListener('click', () => {
    const open = nav.classList.toggle('is-open');
    burger.setAttribute('aria-expanded', String(open));
  });
});
