@extends('front.layout.app')
@section('content')
    <section class="inner-banner work-banner">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Portfolio</h1>
                    <p>At FIVEPCMIRACLE LIMITED, we believe in blending creativity with purpose. Our dedicated team of developers, designers, and strategists collaborates closely to craft impactful digital solutions that not only inspire but also drive real business outcomes. Every design we create is a reflection of thoughtful innovation and shared vision.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="casestudy-secone">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-md-12">
                    <h2><img src="{{asset('assets/images/Group-198.png')}}" class="lazy"><br>Partnership Showcases</h2>
                </div>
            </div>
        </div>
        
        @include('front.shared.owl-case-study')
    </section>
    @include('front.pages.portfolio.case-study-sectwo')
    @include('front.shared.about-section-three')
    @include('front.shared.discuss-section')
@endsection
