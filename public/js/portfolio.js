document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.filter-button');
  const menu = document.querySelector('.filter-menu');
  const projects = [...document.querySelectorAll('.project')];
  if (!toggle || !menu) return;

  toggle.addEventListener('click', () => {
    const open = menu.hidden;
    menu.hidden = !open;
    toggle.setAttribute('aria-expanded', String(open));
  });

  menu.addEventListener('click', event => {
    const button = event.target.closest('[data-filter]');
    if (!button) return;
    const filter = button.dataset.filter;
    projects.forEach(project => project.hidden = filter !== 'all' && project.dataset.category !== filter);
    toggle.firstChild.textContent = button.textContent + ' ';
    menu.hidden = true;
    toggle.setAttribute('aria-expanded', 'false');
  });
});
