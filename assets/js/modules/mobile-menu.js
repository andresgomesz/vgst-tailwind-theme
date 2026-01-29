document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('mobile-menu');

  toggle.addEventListener('click', () => {
    menu.classList.toggle('show');
    menu.classList.toggle('hidden'); // opcional si querés usar hidden también
  });

  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      menu.classList.remove('show');
      menu.classList.add('hidden');
    });
  });
});
