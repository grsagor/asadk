<section class="main-menu-nav" style=" background: #1a1a1a">
    <div class="hero-main-rp container">
        <div class="cancel-btn">
            <a href="javascript:void(0)">Menu<img src="{{ asset('assets/images/cancel.svg') }}" alt="cancel button"
                    class="lazy"></a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}"
                            alt="navigation" class="lazy" width="300"></a>
                </div>
                <div class="menu-nav">
                    <ul class="fancy-menu ">
                        <li><a href="{{ route('front.index') }}">Home</a></li>
                        <li><a href="{{ route('front.portfolio') }}">portfolio</a></li>
                        <li><a href="{{ route('front.services') }}">services</a></li>
                        <li><a href="{{ route('front.about') }}">about</a></li>
                        <!-- <li><a href="/blogs/">digital trends</a></li> -->
                        <li><a href="{{ route('front.contact') }}">contact</a></li>
                    </ul>
                </div>
                <div class="social-icons-head">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/designlayeragencyllc"><img
                                    src="{{ asset('assets/images/facebook-head.svg') }}" alt="facebook"
                                    class="lazy"></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/83519829/"><img
                                    src="{{ asset('assets/images/linkedin.svg') }}" alt="linkedin" class="lazy"></a>
                        </li>
                        <li><a target="_blank" href="https://www.instagram.com/designlayeragency/"><img
                                    src="{{ asset('assets/images/instagram.svg') }}" alt="instagram"
                                    class="lazy"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>