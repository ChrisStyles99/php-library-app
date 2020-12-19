document.addEventListener('DOMContentLoaded', () => {
  const toggleMenu = document.querySelector('#toggle-menu');
  const navList = document.querySelector('#nav-list');

  toggleMenu.addEventListener('click', () => {
    navList.classList.toggle('active');
  });
});