document.addEventListener('DOMContentLoaded', function () {
    const currentPath = window.location.pathname + window.location.hash;
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .navbar-nav .dropdown-item');

    navLinks.forEach(link => {
        const target = link.getAttribute('data-target');
        if (currentPath === target) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});
