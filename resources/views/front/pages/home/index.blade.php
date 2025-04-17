@extends('front.layout.app')
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
                        <div class="animate-in-future clip-animate">Collaboration is the Key</div>
                        <div class="anmiation-wrapper animate-in-future clip-animate">Building <div class="string">
                                <div class="building three">Partnerships.</div>
                                <div class="building four">Success.</div>
                                <div class="building one">Growth.</div>
                                <div class="building two">Networks.</div>
                            </div>
                        </div>
                    </h1>
                    <p class="animate-in-future clip-animate">At <b>FIVEPCMIRACLE LIMITED</b>, we specialize in
                        connecting businesses and customers, fostering partnerships, and integrating operations to
                        unlock new opportunities. Through comprehensive digital services and tailored programs, we
                        empower organizations to achieve shared success.</p>
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
    <section class="homepage-sectionone ">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-lg-10 col-md-12">
                    <h2 class="animate-in-future clip-animate">Unlocking Business Potential Through Collaboration</h2>
                    <p class="p-left animate-in-future clip-animate">At FIVEPCMIRACLE LIMITED, we believe that
                        collaboration is the key to driving innovation, growth, and profitability. We specialize in
                        connecting businesses and customers, fostering partnerships, and integrating operations to
                        unlock new opportunities. Our mission is to create a business ecosystem where collaboration
                        thrives, enabling partnerships between enterprises that drive mutual growth. Through
                        comprehensive digital services and tailored programs, we empower organizations to work closely
                        and achieve shared success.</p>
                    <div class="btn-container btn-blue">
                        <a href="portfolio/">Explore Programs<img src="{{ asset('assets/images/arrow2.svg') }}"
                                alt="learn more" class="lazy"></a>
                    </div>
                </div>
            </div>
        </div>
        @include('front.shared.owl-case-study')
    </section>

    {{-- Updated --}}

    <section class="homepage-sectionsecond">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="animate-in-future clip-animate">Solutions That Drive Business Growth</h2>
                    <p class="p-center animate-in-future clip-animate">Professional business solutions that transform
                        your operations and accelerate growth through strategic partnerships and innovative programs.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 gsap-fixed-sidebar">
                    <canvas id="canvas" height="605" width="970"></canvas>
                </div>
                <div class="col-lg-6 gsap-scrollable">
                    <div class="services-home">
                        <div class="text-blck">
                            <span class="animate-in-future clip-animate">01</span>
                            <h3 class="animate-in-future clip-animate"><a href="channel-partnerships/">Channel
                                    Partnerships</a></h3>
                            <p class="animate-in-future clip-animate">FIVEPCMIRACLE LIMITED specializes in building and
                                managing strategic channel partnerships that expand market reach and drive revenue
                                growth. We create tailored partnership programs that align with your business objectives
                                and facilitate successful collaborations between organizations.</p>
                            <ul class="service-list-home">
                                <li class="animate-in-future">Partner Recruitment</li>
                                <li class="animate-in-future">Program Development</li>
                                <li class="animate-in-future">Revenue Sharing Models</li>
                                <li class="animate-in-future">Partner Training</li>
                                <li class="animate-in-future">Performance Tracking</li>
                                <li class="animate-in-future">Partnership Analytics</li>
                            </ul>
                            <ul class="service-technology">
                                <li class="animate-in-future"><img src="{{ asset('assets/images/xd-img.svg') }}"
                                        alt="xd design" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/diamond-img.svg') }}"
                                        alt="diamond design" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/figma-img.svg') }}"
                                        alt="figma design" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/link-img.svg') }}"
                                        alt="logo designing" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/ps-img.svg') }}"
                                        alt="photoshop design" class="lazy"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-home">
                        <div class="text-blck">
                            <span class="animate-in-future">02</span>
                            <h3 class="animate-in-future"><a href="distribution-solutions/">Distribution Solutions</a>
                            </h3>
                            <p class="animate-in-future">Our distribution solutions help businesses optimize their
                                reach and efficiency in delivering products and services to end customers. We design and
                                implement comprehensive distribution strategies that leverage technology and
                                partnerships to create seamless delivery networks.</p>
                            <ul class="service-list-home">
                                <li class="animate-in-future">Network Development</li>
                                <li class="animate-in-future">Supply Chain Optimization</li>
                                <li class="animate-in-future">Logistics Management</li>
                                <li class="animate-in-future">Distribution Analytics</li>
                                <li class="animate-in-future">Market Expansion</li>
                                <li class="animate-in-future">Performance Monitoring</li>
                            </ul>
                            <ul class="service-technology">
                                <li class="animate-in-future"><img src="{{ asset('assets/images/googledrive.svg') }}"
                                        alt="googledrive marketing" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/moz.svg') }}"
                                        alt="moz marketing" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/analytics.svg') }}"
                                        alt="analytics marketing" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/emailchimp.svg') }}"
                                        alt="mailchimp marketing" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/hubspot-s.svg') }}"
                                        alt="hubspot marketing" class="lazy"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-home">
                        <div class="text-blck">
                            <span class="animate-in-future">03</span>
                            <h3 class="animate-in-future"><a href="business-integration/">Business Integration</a>
                            </h3>
                            <p class="animate-in-future">We excel in creating seamless business integrations that
                                connect systems, processes, and organizations. Our integration solutions enable
                                efficient collaboration, data sharing, and operational optimization across partner
                                networks and business ecosystems.</p>
                            <ul class="service-list-home">
                                <li class="animate-in-future">System Integration</li>
                                <li class="animate-in-future">Process Automation</li>
                                <li class="animate-in-future">Data Management</li>
                                <li class="animate-in-future">API Development</li>
                                <li class="animate-in-future">Workflow Optimization</li>
                                <li class="animate-in-future">Integration Analytics</li>
                            </ul>
                            <ul class="service-technology">
                                <li class="animate-in-future"><img src="{{ asset('assets/images/shopify-s.svg') }}"
                                        alt="shopify development" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/magento-s.svg') }}"
                                        alt="magento development" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/laravel-s.svg') }}"
                                        alt="laravel development" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/wordpress-s.svg') }}"
                                        alt="wordpress development" class="lazy"></li>
                                <li class="animate-in-future"><img src="{{ asset('assets/images/js-s.svg') }}"
                                        alt="javascript development" class="lazy"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="readmore-sec-home stop-sticky">
                <h2><span class="animate-in-future">Transform Your Business With </span>Our Comprehensive<div
                        class="animate-in-future">Partnership Solutions</div>
                </h2>
                <div class="btn-container btn-blue">
                    <a href="/services/">Explore All Solutions<img src="{{ asset('assets/images/arrow.png') }}"
                            alt="read more" class="lazy"></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Updated --}}
    <section class="homepage-sectionthree">
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
    </section>

    {{-- Updated --}}
    <section class="homepage-sectionfour">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-lg-6 col-md-6 upper-spacing">
                    <h2 class="animate-in-future">Comprehensive Business<br> Partnership Solutions</h2>
                    <p class="animate-in-future">As a leading business solutions provider, FIVEPCMIRACLE LIMITED
                        delivers comprehensive partnership and integration services that transform how businesses
                        collaborate and grow. Our expertise spans across channel partnerships, distribution networks,
                        and business integration, helping organizations optimize their operations and maximize market
                        opportunities through strategic collaborations.</p>
                    <div class="btn-container btn-pirple">
                        <a href="javascript:void(Tawk_API.toggle())">let's chat<img
                                src="{{ asset('assets/images/arrow2.svg') }}" alt="lets chat" class="lazy"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('assets/images/team.png') }}" alt="team"
                        class="tem-img lazy animate-in-future" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Updated --}}
    <section class="homepage-sectionfive">
        <div class="hero-main-rp container">
            <h2 class="animate-in-future">Success Stories & Partnerships</h2>
            <p class="">Discover how our collaborative approach has transformed businesses across industries. Our
                portfolio showcases successful partnerships and innovative solutions that have helped companies achieve
                their strategic goals through our comprehensive integration programs.</p>
            <div class="row">
                <div class="col-md-6 col-lg-6 animate-in-future">
                    <div class="work-boxes-home work-boxes-one">
                        <div class="inner-row">
                            <div class="col-md-7">
                                <a href="#" class="res"><img
                                        src="{{ asset('assets/images/worklogoone1.png') }}" alt="Channel Partner Program"
                                        class="lazy"></a>
                                <h3>Channel Partner Success</h3>
                                <a href="#" class="btn-website">View Case Study <img
                                        src="{{ asset('assets/images/whitearrow.svg') }}" alt="our work"
                                        class="lazy"></a>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/maskone1.png') }}" alt="mockup" class="myLazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 animate-in-future" data-delay="100">
                    <div class="work-boxes-home work-boxes-two lazy">
                        <div class="inner-row">
                            <div class="col-md-7">
                                <a href="#" class="res"><img src="{{ asset('assets/images/worklogotwo.png') }}"
                                        alt="Distribution Project" class="lazy"></a>
                                <h3>Global Distribution Network</h3>
                                <a href="#" class="btn-website">View Case Study <img
                                        src="{{ asset('assets/images/whitearrow.svg') }}" alt="our work"
                                        class="lazy"></a>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/masktwo.png') }}" alt="mockup" class="myLazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 animate-in-future" data-delay="200">
                    <div class="work-boxes-home work-boxes-three lazy">
                        <div class="inner-row">
                            <div class="col-md-7">
                                <a href="#" class="res"><img
                                        src="{{ asset('assets/images/worklogothree.svg') }}" alt="White Label Solution"
                                        class="lazy"></a>
                                <h3>White Label Excellence</h3>
                                <a href="#" class="btn-website">View Case Study <img
                                        src="{{ asset('assets/images/whitearrow.svg') }}" alt="our work"
                                        class="lazy"></a>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/cratemask.png') }}" alt="mockup" class="myLazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 animate-in-future" data-delay="300">
                    <div class="work-boxes-home work-boxes-four lazy">
                        <div class="inner-row">
                            <div class="col-md-7">
                                <a href="#" class="res"><img
                                        src="{{ asset('assets/images/worklogofour.svg') }}" alt="Reseller Program"
                                        class="lazy"></a>
                                <h3>Reseller Program Impact</h3>
                                <a href="#" class="btn-website">View Case Study <img
                                        src="{{ asset('assets/images/whitearrow.svg') }}" alt="our work"
                                        class="lazy"></a>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/maskfive.png') }}" alt="mockup" class="myLazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 animate-in-future" data-delay="400">
                    <div class="work-boxes-home work-boxes-five">
                        <div class="inner-row">
                            <div class="col-md-7">
                                <a href="#" class="res"><img
                                        src="{{ asset('assets/images/worklogofive.svg') }}" alt="Wholesale Program"
                                        class="lazy"></a>
                                <h3>Wholesale Program Success</h3>
                                <a href="#" class="btn-website">View Case Study <img
                                        src="{{ asset('assets/images/whitearrow.svg') }}" alt="our work"
                                        class="lazy"></a>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/maskfour.png') }}" alt="mockup" class="myLazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 animate-in-future" data-delay="500">
                    <div class="work-boxes-home work-boxes-six">
                        <div class="inner-row">
                            <div class="col-md-7">
                                <a href="#" class="res"><img
                                        src="{{ asset('assets/images/worklogosix1.png') }}" alt="Integration Solution"
                                        class="lazy"></a>
                                <h3>Digital Integration Excellence</h3>
                                <a href="#" class="btn-website">View Case Study <img
                                        src="{{ asset('assets/images/whitearrow.svg') }}" alt="our work"
                                        class="lazy"></a>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/maskthree1.png') }}" alt="mockup" class="myLazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="readmore-sec-home">
                <div class="btn-container btn-blue">
                    <a href="portfolio/">View All Case Studies <img src="{{ asset('assets/images/arrow.png') }}"
                            alt="read more" class="lazy"></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Updated --}}
    <section class="homepage-sectionsix">
        <div class="hero-main-rp container">
            <h2 class="animate-in-future">Our 7-Step Partnership Development Process: Building Successful Business
                Collaborations</h2>

            <div class="ovrflow">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active" role="presentation">
                        <button class="nav-link active" id="one-tab" data-toggle="tab" data-target="#one"
                            type="button" role="tab" aria-controls="one" aria-selected="true"
                            aria-expanded="true"><span>01</span><br>Initial Consultation</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="two-tab" data-toggle="tab" data-target="#two" type="button"
                            role="tab" aria-controls="two" aria-selected="false"
                            aria-expanded="false"><span>02</span><br>Partnership Strategy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="three-tab" data-toggle="tab" data-target="#three" type="button"
                            role="tab" aria-controls="three" aria-selected="false"
                            aria-expanded="false"><span>03</span><br>Program Design</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="four-tab" data-toggle="tab" data-target="#four" type="button"
                            role="tab" aria-controls="four" aria-selected="false"
                            aria-expanded="false"><span>04</span><br>Integration Planning</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="five-tab" data-toggle="tab" data-target="#five" type="button"
                            role="tab" aria-controls="five" aria-selected="false"
                            aria-expanded="false"><span>05</span><br>Implementation</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="six-tab" data-toggle="tab" data-target="#six" type="button"
                            role="tab" aria-controls="six" aria-selected="false"
                            aria-expanded="false"><span>06</span><br>Quality Assurance</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="seven-tab" data-toggle="tab" data-target="#seven" type="button"
                            role="tab" aria-controls="seven" aria-selected="false"
                            aria-expanded="false"><span>07</span><br>Growth & Optimization</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active in" id="one" role="tabpanel" aria-labelledby="one-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/kickoff-img.jpg') }}" alt="Initial Consultation"
                                class="myLazy">
                        </div>
                        <div class="col-md-6">
                            <h3 class="animate-in-future">Initial Consultation</h3>
                            <p class="animate-in-future">We begin with a comprehensive consultation to understand your
                                business objectives, market position, and partnership goals. Our team works closely with
                                you to identify opportunities for collaboration and growth through our various
                                partnership programs. This phase establishes the foundation for a successful long-term
                                business relationship.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/DigitalStrategy.jpg') }}" alt="Partnership Strategy"
                                class="myLazy">
                        </div>
                        <div class="col-md-6">
                            <h3 class="animate-in-future">Partnership Strategy</h3>
                            <p class="animate-in-future">Our team develops a customized partnership strategy aligned
                                with your business goals. We analyze market opportunities, identify potential synergies,
                                and design a strategic framework for collaboration. This includes defining partnership
                                models, revenue sharing structures, and growth objectives.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/InformationArchitecture.jpg') }}" alt="Program Design"
                                class="myLazy">
                        </div>
                        <div class="col-md-6">
                            <h3 class="animate-in-future">Program Design</h3>
                            <p class="animate-in-future">We create detailed program structures tailored to your
                                specific needs, whether it's channel partnerships, distribution networks, or white-label
                                solutions. This phase includes developing operational frameworks, communication
                                protocols, and resource allocation plans.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/DesignMockups.jpg') }}" alt="Integration Planning"
                                class="myLazy">
                        </div>
                        <div class="col-md-6">
                            <h3 class="animate-in-future">Integration Planning</h3>
                            <p class="animate-in-future">Our integration experts develop comprehensive plans for
                                seamlessly connecting systems, processes, and teams. We focus on creating efficient
                                workflows, establishing data sharing protocols, and ensuring smooth operational
                                integration between partners.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="five-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/CodingDevelopment.jpg') }}" alt="Implementation"
                                class="myLazy">
                        </div>
                        <div class="col-md-6">
                            <h3 class="animate-in-future">Implementation</h3>
                            <p class="animate-in-future">We execute the partnership program with precision,
                                implementing all planned systems, processes, and protocols. Our team manages the rollout
                                process, provides necessary training, and ensures all stakeholders are aligned and
                                prepared for successful collaboration.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="six" role="tabpanel" aria-labelledby="six-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/QualityAssurance.jpg') }}" alt="Quality Assurance"
                                class="myLazy">
                        </div>
                        <div class="col-md-6">
                            <h3 class="animate-in-future">Quality Assurance</h3>
                            <p class="animate-in-future">Our quality assurance team monitors the partnership program's
                                performance, ensuring all aspects meet our high standards. We conduct regular audits,
                                gather feedback, and make necessary adjustments to optimize collaboration effectiveness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seven" role="tabpanel" aria-labelledby="seven-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/LaunchOptimization.jpg') }}" alt="Growth & Optimization"
                                class="myLazy">
                        </div>
                        <div class="col-md-6">
                            <h3 class="animate-in-future">Growth & Optimization</h3>
                            <p class="animate-in-future">We continuously monitor partnership performance, identify
                                growth opportunities, and implement optimization strategies. Our team provides regular
                                performance reports, market insights, and recommendations for scaling the partnership
                                program to achieve greater success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('front.shared.discuss-section')

    {{-- Updated --}}
    <section class="homepage-testimonials">
        <div class="hero-main-rp container">
            <h2 class="animate-in-future">Partner Success Stories</h2>
            <div class="testimonials">
                <div class="owl-carousel owl-theme owl-testimonials">
                    <!-- Testimonial Item 1 -->
                    <div class="testimonials-box">
                        <div class="row">
                            <img src="{{ asset('assets/images/quote-right.svg') }}" alt="reviews" class="quote-right">
                            <p class="testi-txt">FIVEPCMIRACLE's channel partner program transformed our distribution
                                capabilities. Their strategic approach and seamless integration helped us expand our
                                market reach by 150% within the first year.
                                <span class="hidden-content">The dedicated support and innovative solutions they
                                    provided made the entire process smooth and highly profitable.</span>
                                <a href="javascript:void(0)" class="readmore">Read more</a>
                            </p>
                            <div class="col-md-6">
                                <div class="person-info">
                                    <div class="img-testi">
                                        <img src="{{ asset('assets/images/author.png') }}" alt="client reviews"
                                            class="myLazy">
                                    </div>
                                    <div class="details-testi">
                                        <h3>James Richardson</h3>
                                        <p>Distribution Director, Global Tech Solutions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>01 / 05</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 2 -->
                    <div class="testimonials-box">
                        <div class="row">
                            <img src="{{ asset('assets/images/quote-right.svg') }}" alt="reviews" class="quote-right">
                            <p class="testi-txt">The white label solution provided by FIVEPCMIRACLE enabled us to
                                launch our branded services within weeks. Their attention to detail and comprehensive
                                support system exceeded our expectations.
                                <span class="hidden-content">The integration was flawless, and our customers are highly
                                    satisfied with the enhanced service offerings.</span>
                                <a href="javascript:void(0)" class="readmore">Read more</a>
                            </p>
                            <div class="col-md-6">
                                <div class="person-info">
                                    <div class="img-testi">
                                        <img src="{{ asset('assets/images/author.png') }}" alt="client reviews"
                                            class="myLazy">
                                    </div>
                                    <div class="details-testi">
                                        <h3>Sarah Chen</h3>
                                        <p>CEO, Innovation Partners Ltd</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>02 / 05</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 3 -->
                    <div class="testimonials-box">
                        <div class="row">
                            <img src="{{ asset('assets/images/quote-right.svg') }}" alt="reviews" class="quote-right">
                            <p class="testi-txt">As a reseller, partnering with FIVEPCMIRACLE has been a game-changer.
                                Their comprehensive program structure and ongoing support have helped us achieve
                                consistent growth and expand our service portfolio significantly.</p>
                            <div class="col-md-6">
                                <div class="person-info">
                                    <div class="img-testi">
                                        <img src="{{ asset('assets/images/author.png') }}" alt="client reviews"
                                            class="myLazy">
                                    </div>
                                    <div class="details-testi">
                                        <h3>Michael Foster</h3>
                                        <p>Managing Partner, Enterprise Solutions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>03 / 05</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 4 -->
                    <div class="testimonials-box">
                        <div class="row">
                            <img src="{{ asset('assets/images/quote-right.svg') }}" alt="reviews" class="quote-right">
                            <p class="testi-txt">The wholesale program from FIVEPCMIRACLE revolutionized our supply
                                chain operations. Their strategic approach and technical expertise helped us optimize
                                our distribution network effectively.
                                <span class="hidden-content">The ROI we've achieved through this partnership has been
                                    remarkable, and their ongoing support ensures continuous improvement.</span>
                                <a href="javascript:void(0)" class="readmore">Read more</a>
                            </p>
                            <div class="col-md-6">
                                <div class="person-info">
                                    <div class="img-testi">
                                        <img src="{{ asset('assets/images/author.png') }}" alt="client reviews"
                                            class="myLazy">
                                    </div>
                                    <div class="details-testi">
                                        <h3>David Thompson</h3>
                                        <p>Operations Director, Global Trade Network</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>04 / 05</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 5 -->
                    <div class="testimonials-box">
                        <div class="row">
                            <img src="{{ asset('assets/images/quote-right.svg') }}" alt="reviews" class="quote-right">
                            <p class="testi-txt">FIVEPCMIRACLE's business integration solutions have been instrumental
                                in our digital transformation journey. Their expertise in creating seamless system
                                integrations has significantly improved our operational efficiency.</p>
                            <div class="col-md-6">
                                <div class="person-info">
                                    <div class="img-testi">
                                        <img src="{{ asset('assets/images/author.png') }}" alt="client reviews"
                                            class="myLazy">
                                    </div>
                                    <div class="details-testi">
                                        <h3>Emily Martinez</h3>
                                        <p>CTO, Digital Innovations Corp</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>05 / 05</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
