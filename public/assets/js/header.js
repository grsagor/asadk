document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    const scrollThreshold = 50;

    // Handle scroll-based header transition
    const handleScroll = () => {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Check initial scroll position

    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const mainNav = document.querySelector('.main-nav');
    const dropdowns = document.querySelectorAll('.dropdown');

    // Mobile menu toggle
    mobileNavToggle.addEventListener('click', function() {
        mainNav.classList.toggle('active');
        this.classList.toggle('active');

        // Animate hamburger menu
        const spans = this.querySelectorAll('span');
        if (this.classList.contains('active')) {
            spans[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
        } else {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    });

    // Mobile dropdown toggle
    if (window.innerWidth <= 991) {
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function(e) {
                if (e.target.closest('a')) {
                    e.preventDefault();
                    this.classList.toggle('active');
                }
            });
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.main-nav') && !e.target.closest('.mobile-nav-toggle')) {
            mainNav.classList.remove('active');
            mobileNavToggle.classList.remove('active');
            const spans = mobileNavToggle.querySelectorAll('span');
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    });
});