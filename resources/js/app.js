import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    var currentPath = window.location.pathname;
    var navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    var navbar = document.querySelector('.container-navbar');
    if(!navbar){
        console.log('navbar not found')
    }
    window.addEventListener('scroll', function() {
        console.log('scrollY', this.window.scrollY)
      if (window.scrollY > 100) {
        navbar.classList.add('navbar-scrolled');
      } else {
        navbar.classList.remove('navbar-scrolled');
      }
    });
});


