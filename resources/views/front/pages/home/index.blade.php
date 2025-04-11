@extends('front.layout.app')
@section('content')
    <main>
        <div class="hero-content">
            <div class="brand-logo">
                <img src="{{ asset('assets/images/nmwLargeLogo.webp') }}" alt="Fabuwood" class="fabuwood-text" />
            </div>
            <div class="hero-text">
                <div class="tagline">
                    <h1>America's most<br />desired kitchen.</h1>
                    <p>Wanted by homeowners. Recommended by friends. Requested by name.</p>
                </div>
                <div class="button_container">
                    <button class="button_container2">
                        <span class="whiteStyleButton cursor-pointer">+</span>
                        <span class="text-lg">Where to buy</span>
                    </button>
                    <button class="button_container2">
                        <span class="whiteStyleButton cursor-pointer">+</span>
                        <span class="text-lg">Order Door Sample</span>
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
            <h1 class="main-title">Quality made attainable.</h1>
            <p class="subtitle">
                Our startup mentality means we never stop improving materials, build, and
                finishes.
            </p>
        </div>

        <div class="elevated-value">Elevated Value</div>

        <div class="content-wrapper">
            <div class="image-container">
                <img src="{{ asset('assets/images/worker_edited.webp') }}" alt="Worker with safety equipment" />
            </div>
        </div>

        <div class="content-wrapper2">
            <div class="image-container2">
                <img src="{{ asset('assets/images/shutterstock_2365006123_-_RESIZED_2') }}.webp" alt="Worker with safety equipment" />
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
            <h1 class="main-title">Impossibly Reliable Speed.</h1>
            <p class="subtitle">
                The industry ‘impossible’ is our ‘sure,’ with as little as 5-day lead time on
                semi-custom.
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
            <h1 class="main-title">More at every budget.</h1>
            <p class="subtitle2">
                We have a proven record of delivering the absolute highest quality-to-cost
                ratio.
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
        <h2>A dozen ways we outperform.</h2>
        <p>
            You demand more from a Fabuwood kitchen. So do we. Q12 ensures our products are
            materially better—from first impression to lasting performance:
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
                <div class="caption">Q1 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q2_New.webp') }}" alt="Image 2" />
                <div class="caption">Q2 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q3_New.webp') }}" alt="Image 3" />
                <div class="caption">Q3 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q4_New.webp') }}" alt="Image 4" />
                <div class="caption">Q4 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q5_New.webp') }}" alt="Image 5" />
                <div class="caption">Q5 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q6_New.webp') }}" alt="Image 6" />
                <div class="caption">Q6 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q7_New.webp') }}" alt="Image 7" />
                <div class="caption">Q7 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q8_New.webp') }}" alt="Image 8" />
                <div class="caption">Q8 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q9_New.webp') }}" alt="Image 9" />
                <div class="caption">Q9 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q10_New.webp') }}" alt="Image 10" />
                <div class="caption">Q10 <span>Title</span></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Q11_New.webp') }}" alt="Image 11" />
                <div class="caption">Q11 <span>Title</span></div>
            </div>
        </div>
        <div class="left-arrow arrow">←</div>
        <div class="right-arrow arrow">→</div>
    </div>

    <div class="certification">
        <span class="blackStyleButton cursor-pointer">+</span>
        <p>Q12 Certification</p>
    </div>
@endsection
