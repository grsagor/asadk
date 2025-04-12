@extends('front.layout.app')
@section('content')
    <main>
        <div class="hero-content">
            <div class="brand-logo">
                <img src="{{ asset('assets/images/nmwLargeLogo.webp') }}" alt="Fabuwood" class="fabuwood-text" />
            </div>
            <div class="hero-text">
                <div class="tagline">
                    <h1>Professional HTML<br />Templates for Developers</h1>
                    <p>Premium quality, responsive templates built with modern web standards.</p>
                </div>
                <div class="button_container">
                    <button class="button_container2">
                        <span class="whiteStyleButton cursor-pointer">+</span>
                        <span class="text-lg">Browse Templates</span>
                    </button>
                    <button class="button_container2">
                        <span class="whiteStyleButton cursor-pointer">+</span>
                        <span class="text-lg">Start Free Trial</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- elevated section -->
    <div class="container">
        <div class="elevated_title">
            <div class="check-icon">
                <svg stroke="black" fill="black" stroke-width="0" version="1.1" viewBox="0 0 17 17" height="25"
                    width="25" xmlns="http://www.w3.org/2000/svg">
                    <g></g>
                    <path d="M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z">
                    </path>
                </svg>
            </div>
            <h1 class="main-title">Clean & Modern Code</h1>
            <p class="subtitle">
                Built with the latest web technologies and following best practices for optimal performance.
            </p>
        </div>

        <div class="elevated-value">Premium Features</div>

        <div class="content-wrapper">
            <div class="image-container">
                <img src="{{ asset('assets/images/worker_edited.webp') }}" alt="Worker with safety equipment" />
            </div>
        </div>

        <div class="content-wrapper2">
            <div class="image-container2">
                <img src="{{ asset('assets/images/shutterstock_2365006123_-_RESIZED_2') }}.webp"
                    alt="Worker with safety equipment" />
            </div>
        </div>
        <div class="elevated_title2">
            <div class="check-icon">
                <svg stroke="black" fill="black" stroke-width="0" version="1.1" viewBox="0 0 17 17" height="25"
                    width="25" xmlns="http://www.w3.org/2000/svg">
                    <g></g>
                    <path d="M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z">
                    </path>
                </svg>
            </div>
            <h1 class="main-title">Responsive Design</h1>
            <p class="subtitle">
                Perfect display across all devices - mobile, tablet, and desktop screens.
            </p>
        </div>

        <div class="content-wrapper">
            <div class="image-container">
                <img src="{{ asset('assets/images/RESIZED_-_KONA') }}.webp" alt="Worker with safety equipment" />
            </div>
        </div>

        <div class="elevated_title4">
            <div class="check-icon">
                <svg stroke="black" fill="black" stroke-width="0" version="1.1" viewBox="0 0 17 17" height="25"
                    width="25" xmlns="http://www.w3.org/2000/svg">
                    <g></g>
                    <path d="M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z">
                    </path>
                </svg>
            </div>
            <h1 class="main-title">Developer Friendly</h1>
            <p class="subtitle2">
                Well-documented code with easy customization options and regular updates.
            </p>
        </div>

        <div class="content-wrapper3">
            <div class="image-container2">
                <img src="{{ asset('assets/images/image__9_.webp') }}" alt="Worker with safety equipment" />
            </div>
            <div class="elevated_title2">
                <div class="check-icon">
                    <svg stroke="black" fill="black" stroke-width="0" version="1.1" viewBox="0 0 17 17" height="25"
                        width="25" xmlns="http://www.w3.org/2000/svg">
                        <g></g>
                        <path d="M15.418 1.774l-8.833 13.485-4.918-4.386 0.666-0.746 4.051 3.614 8.198-12.515 0.836 0.548z">
                        </path>
                    </svg>
                </div>
                <h1 class="main-title">More at every budget.</h1>
                <p class="subtitle">
                    We have a proven record of delivering the absolute highest quality-to-cost
                    ratio.
                </p>
            </div>
        </div>
    </div>
    <div class="watermark-container">
        <h2>Template Categories</h2>
        <p>
            Explore our diverse collection of professional templates designed for various needs and industries.
        </p>
        <div class="watermark-image">
            <img src="{{ asset('assets/images/Group_159.webp') }}" alt="Fabuwood" class="fabuwood-text" />
        </div>
    </div>
    <!-- caroucel  -->
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q1_New.webp') }}" alt="Image 1" />
                <div class="caption">Business <span>Template</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q2_New.webp') }}" alt="Image 2" />
                <div class="caption">Portfolio <span>Template</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q3_New.webp') }}" alt="Image 3" />
                <div class="caption">E-commerce <span>Template</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q1_New.webp') }}" alt="Image 1" />
                <div class="caption">Business <span>Template</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q2_New.webp') }}" alt="Image 2" />
                <div class="caption">Portfolio <span>Template</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q3_New.webp') }}" alt="Image 3" />
                <div class="caption">E-commerce <span>Template</span></div>
            </div>
        </div>
        <div class="left-arrow arrow">←</div>
        <div class="right-arrow arrow">→</div>
    </div>

    <div class="certification">
        <span class="blackStyleButton cursor-pointer">+</span>
        <p>Start Creating Today</p>
    </div>
@endsection
