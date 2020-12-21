document.addEventListener('DOMContentLoaded', () => {
  const toggleMenu = document.querySelector('#toggle-menu');
  const navList = document.querySelector('#nav-list');
  const themeToggle = document.querySelector('#theme-toggle');

  toggleMenu.addEventListener('click', () => {
    console.log('click');
    navList.classList.toggle('active');
  });

  themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    let theme = 'light';

    if (document.body.classList.contains('dark-mode')) {
      theme = 'dark';
    }

    document.cookie = 'theme=' + theme;
  });
});
