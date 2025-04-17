@extends('front.layout.app')
@section('content')
    <section class="inner-banner work-banner">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Portfolio</h1>
                    <p>We Believe In Creativity And Effectiveness, And For That Reason, Our Team Of Developers, Designers,
                        And Strategists At The Creative Digital Agency Have Worked Tirelessly To Provide Our Clients With
                        Designs That You Can Ponder Upon.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="casestudy-secone">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-md-12">
                    <h2><img src="{{asset('assets/images/Group-198.png')}}" class="lazy"><br>Case Studies</h2>
                </div>
            </div>
        </div>
        
        @include('front.shared.owl-case-study')
    </section>
    @include('front.pages.portfolio.case-study-sectwo')
    @include('front.shared.about-section-three')
    @include('front.shared.discuss-section')
@endsection
