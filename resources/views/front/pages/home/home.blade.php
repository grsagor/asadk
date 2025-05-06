@extends('front.layout.app')
@section('title', 'Home')
@section('content')
    {{-- Updated --}}
    <section class="homepage-banner">
        <div id="scene_wrap" class="container">
            <div class="" id="scene"
                style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative;">
                <div class="layer" data-depth=".6"
                    style="transform: translate3d(-40.8114px, -21.36px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                    <img src="{{ asset('assets/images/Group1.png') }}" alt="business collaboration" class="lazy">
                </div>
                <div class="layer" data-depth=".5"
                    style="transform: translate3d(-34.0095px, -17.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                    <img src="{{ asset('assets/images/Group1.png') }}" alt="partnership programs" class="lazy">
                </div>
                <div class="layer" data-depth=".4"
                    style="transform: translate3d(-27.2076px, -14.24px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                    <img src="{{ asset('assets/images/Vectors.png') }}" alt="business growth solutions" class="lazy">
                </div>
                <div class="layer" data-depth=".3"
                    style="transform: translate3d(-20.4057px, -10.68px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                    <img src="{{ asset('assets/images/Vectors.png') }}" alt="FIVEPCMIRACLE LIMITED" class="lazy">
                </div>
                <div class="layer" data-depth=".2"
                    style="transform: translate3d(-13.6038px, -7.12px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                    <img src="{{ asset('assets/images/Frame.png') }}" alt="collaborative business solutions" class="lazy">
                </div>
            </div>
        </div>
        <div class="hero-main-rp container">
            <div class="row">
                <div class=" col-lg-6 col-md-10 col-sm-12">
                    <h1 class="">
                        <div class="animate-in-future clip-animate">Welcome to FIVEPCMIRACLE LIMITED: Unlocking Business Potential Through Collaboration</div>
                        <div class="anmiation-wrapper animate-in-future clip-animate">Building <div class="string">
                                <div class="building three">Partnerships.</div>
                                <div class="building four">Success.</div>
                                <div class="building one">Growth.</div>
                                <div class="building two">Networks.</div>
                            </div>
                        </div>
                    </h1>
                    <p class="animate-in-future clip-animate">At <b>FIVEPCMIRACLE LIMITED</b>, we believe that "Collaboration is the Key" to driving innovation, growth, and profitability. We specialize in connecting businesses and customers, fostering partnerships, and integrating operations to unlock new opportunities. By providing comprehensive digital services and tailored programs, we empower organizations to work closely and achieve shared success.</p>
                    <div class="btn-container btn-blue">
                        <a href="programs/">Our Programs<img src="{{ asset('assets/images/arrow.png') }}"
                                alt="business programs" class="lazy"></a>
                    </div>
                    <ul class="headr-icon">
                        <li><img src="{{ asset('assets/images/clutch.svg') }}" alt="business certification" class="lazy">
                        </li>
                        <li><img src="{{ asset('assets/images/yext.svg') }}" alt="partnership certification" class="lazy">
                        </li>
                        <li><img src="{{ asset('assets/images/google-partner.svg') }}" alt="business partner"
                                class="lazy"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="particle-image" data-params-src="assets/js/params.json"><canvas class="particle-image-canvas-el"
                style="width: 100%; height: 100%;" width="0" height="0"></canvas></div>
        <div id="wrapper"></div>
    </section>

    {{-- Updated --}}
    <section class="homepage-sectionone">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-lg-10 col-md-12">
                    <h2 class="animate-in-future clip-animate">Our Mission: Building Collaborative Ecosystems</h2>
                    <p class="p-left animate-in-future clip-animate">FIVEPCMIRACLE LIMITED is dedicated to creating a business ecosystem where collaboration thrives. Whether it’s connecting businesses with customers or enabling partnerships between enterprises, we focus on fostering relationships that drive mutual growth. Our approach revolves around integrating resources, expertise, and strategies to deliver impactful results.</p>
                    <div class="btn-container btn-blue">
                        <a href="portfolio/">Explore Programs<img src="{{ asset('assets/images/arrow2.svg') }}"
                                alt="learn more" class="lazy"></a>
                    </div>
                </div>
            </div>
        </div>
        @include('front.shared.owl-case-study')
    </section>

    @include('front.pages.home.homepage-sectionsecond')

    {{-- Updated --}}
    {{-- <section class="homepage-sectionthree">
        <div class="hero-main-rp">
            <h2><span class="animate-in-future">Trusted Global Partners </span>Building Success<div
                    class="animate-in-future">Through Strategic Collaboration</div>
            </h2>
            <div id="continuous-slider">
                <div class="continuous-slider--wrap">
                    <ul id="" class="continuous-slider--list clearfix " style="width: 1800px;">
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-159.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-160.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-161.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-162.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-163.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-164.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-165.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-166.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-167.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-168.png') }}" alt="">
                        </li>
                    </ul>
                    <ul id="" class="continuous-slider--list clearfix " style="width: 1800px;">
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-169.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-170.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-171.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-172.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-173.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-174.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-175.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-176.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-182.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-183.png') }}" alt="">
                        </li>
                    </ul>
                    <ul id="" class="continuous-slider--list clearfix " style="width: 1800px;">
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-184.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-185.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-186.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-187.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Group-189.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Mask-group.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Rectangle-174.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Rectangle-177.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Rectangle-179.png') }}" alt="">
                        </li>
                        <li class="item" style="margin-left: 0px;">
                            <img src="{{ asset('assets/images/Rectangle-182.png') }}" alt="">
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- Updated --}}
    <section class="homepage-sectionfour">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 upper-spacing">
                    <h2 class="animate-in-future">The Power of<br> Collaboration</h2>
                    <p class="animate-in-future">
                        <strong>1. Innovation Through Shared Expertise</strong><br>
                        By pooling resources and exchanging ideas, businesses can develop creative solutions that drive industry advancements.
                        
                        <br><strong>2. Expanded Networks</strong><br>
                        Collaborative efforts open doors to new markets, customer segments, and professional relationships that fuel growth.
                        
                        <br><strong>3. Cost Efficiency</strong><br>
                        Sharing infrastructure, marketing budgets, and operational resources reduces costs while increasing scalability.
                        
                        <br><strong>4. Accelerated Growth</strong><br>
                        Partnerships enable faster product development, streamlined workflows, and quicker time-to-market for new offerings.
                        
                        <br><strong>5. Competitive Advantage</strong><br>
                        Working together allows businesses to stay ahead of market trends by combining strengths and leveraging collective capabilities.</p>
                    <div class="btn-container btn-pirple">
                        <a href="javascript:void(Tawk_API.toggle())">let's chat<img
                                src="{{ asset('assets/images/arrow2.svg') }}" alt="lets chat" class="lazy"></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <img src="{{ asset('assets/images/team.png') }}" alt="team"
                        class="tem-img lazy animate-in-future" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Updated --}}
    <section class="homepage-sectionfour copy">
        <div class="hero-main-rp container">
            <div class="row flex-row-reverse">
                <div class="col-12 col-lg-6 col-md-6 upper-spacing">
                    <h2 class="animate-in-future">How We Work</h2>
                    <p class="animate-in-future">
                        At SKY7P7, we grow alongside our connected networks. Our approach is simple yet impactful:
                        <br><strong>1. Identify Opportunities</strong><br>
                        We identify opportunities for collaboration between businesses or with customers.
                        
                        <br><strong>2. Seamless Integration</strong><br>
                        We integrate resources seamlessly using advanced technologies.
                        
                        <br><strong>3. Establish Partnerships</strong><br>
                        We establish long-term partnerships that drive profitability for all parties involved.</p>
                    <div class="btn-container btn-pirple">
                        <a href="javascript:void(Tawk_API.toggle())">let's chat<img
                                src="{{ asset('assets/images/arrow2.svg') }}" alt="lets chat" class="lazy"></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <img src="{{ asset('assets/images/team.png') }}" alt="team"
                        class="tem-img lazy animate-in-future" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="homepage-sectionfour copy2">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 upper-spacing">
                    <h2 class="animate-in-future">Why Choose Sky7P7?</h2>
                    <p class="animate-in-future">
                        Businesses choose us because:
                        <br><strong>1. Mutual Growth</strong><br>
                        We prioritize mutual growth over individual gains.
                        
                        <br><strong>2. Flexibility and Scalability</strong><br>
                        Our programs are designed for flexibility and scalability.
                        
                        <br><strong>3. Data-Driven Strategies</strong><br>
                        We use data-driven strategies to ensure measurable results.
                        
                        <br><strong>4. Trust and Transparency</strong><br>
                        Our commitment to collaboration fosters trust and transparency.</p>
                    <div class="btn-container btn-pirple">
                        <a href="javascript:void(Tawk_API.toggle())">let's chat<img
                                src="{{ asset('assets/images/arrow2.svg') }}" alt="lets chat" class="lazy"></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <img src="{{ asset('assets/images/team.png') }}" alt="team"
                        class="tem-img lazy animate-in-future" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    @include('front.shared.discuss-section')
    {{-- @include('front.shared.homepage-testimonials') --}}
    
@endsection
