document.addEventListener('DOMContentLoaded', function () {
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const mainNav = document.querySelector('.main-nav');
    const dropdowns = document.querySelectorAll('.dropdown');

    // Toggle mobile navigation
    mobileNavToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        mainNav.classList.toggle('active');
        this.classList.toggle('active');
    });

    // Handle dropdown clicks
    dropdowns.forEach((dropdown) => {
        const link = dropdown.querySelector('a');
        link.addEventListener('click', function (e) {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                e.stopPropagation();
                const isActive = dropdown.classList.contains('active');
                dropdowns.forEach((d) => d.classList.remove('active'));
                if (!isActive) {
                    dropdown.classList.add('active');
                }
            }
        });
    });

    // Close nav when clicking outside
    document.addEventListener('click', function (e) {
        if (
            window.innerWidth <= 1024 &&
            !mainNav.contains(e.target) &&
            !mobileNavToggle.contains(e.target)
        ) {
            mainNav.classList.remove('active');
            mobileNavToggle.classList.remove('active');
            dropdowns.forEach((d) => d.classList.remove('active'));
        }
    });

    // Handle resize
    window.addEventListener('resize', function () {
        if (window.innerWidth > 1024) {
            mainNav.classList.remove('active');
            mobileNavToggle.classList.remove('active');
            dropdowns.forEach((d) => d.classList.remove('active'));
        }
    });
    const elevatedValue = document.querySelector('.elevated-value');
    const container = document.querySelector('.container');

    function checkContainerInView() {
        const rect = container.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        const halfWindowHeight = windowHeight / 3;

        if (rect.top <= halfWindowHeight && rect.bottom > 350) {
            elevatedValue.classList.add('visible');
        } else {
            elevatedValue.classList.remove('visible');
        }
    }

    window.addEventListener('scroll', checkContainerInView);
    checkContainerInView();
    // carousel
    const carousel = document.querySelector('.carousel');
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');
    const itemWidth = document.querySelector('.carousel-item').offsetWidth;
    const itemCount = document.querySelectorAll('.carousel-item').length;

    let currentPosition = 0;
    const visibleItems = 3;
    const maxPosition = itemCount - visibleItems;

    // Function to update carousel position
    function updateCarouselPosition() {
        carousel.style.transform = `translateX(-${currentPosition * itemWidth}px)`;
    }

    // Click event for left arrow
    leftArrow.addEventListener('click', function () {
        if (currentPosition > 0) {
            currentPosition--;
            updateCarouselPosition();
        }
    });

    // Click event for right arrow
    rightArrow.addEventListener('click', function () {
        if (currentPosition < maxPosition) {
            currentPosition++;
            updateCarouselPosition();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function () {
        // Recalculate item width after resize
        const newItemWidth = document.querySelector('.carousel-item').offsetWidth;
        currentPosition = Math.min(currentPosition, maxPosition);
        carousel.style.transform = `translateX(-${currentPosition * newItemWidth}px)`;
    });
});