document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.filter-button');
  const sidebar = document.querySelector('.filter-sidebar');
  const overlay = document.querySelector('.filter-sidebar-overlay');
  const closeBtn = document.querySelector('.close-filter-btn');
  const applyBtn = document.querySelector('.apply-filter-btn');
  const projects = [...document.querySelectorAll('.project')];
  
  if (!toggle || !sidebar) return;

  function openSidebar() {
    sidebar.hidden = false;
    overlay.hidden = false;
  }

  function closeSidebar() {
    sidebar.hidden = true;
    overlay.hidden = true;
  }

  toggle.addEventListener('click', openSidebar);
  closeBtn.addEventListener('click', closeSidebar);
  overlay.addEventListener('click', closeSidebar);

  applyBtn.addEventListener('click', () => {
    const checkedBoxes = [...sidebar.querySelectorAll('input[type="checkbox"]:checked')].map(cb => cb.value);
    
    projects.forEach(project => {
      if (checkedBoxes.length === 0) {
        project.hidden = false;
      } else {
        project.hidden = !checkedBoxes.includes(project.dataset.category);
      }
    });

    closeSidebar();
  });
});
