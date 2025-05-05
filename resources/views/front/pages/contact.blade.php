@extends('front.layout.app')
@section('title', 'Contact')

@section('content')
    <section class="inner-banner">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Let's Collaborate<br>Together.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-eight">
        <div class="hero-main-rp container">
            <div class="row cntct-detail">
                <div class="col-md-4">
                    <div class="cntct-box">
                        <p>Ready to start collaborating?<br>Call our partnership team at</p>
                        <h3><a href="tel:2143216549" class="numbr">+1 (305) 395-6482</a>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cntct-box">
                        <p>Office 450 South Orange Avenue, 7th Floor, Orlando, FL 32807</p>
                        <h3><a href="https://goo.gl/maps/MjtLmAEyF3cUkgC77" target="blank" class="clck-here">Click Here</a>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cntct-box">
                        <p>Looking to explore partnership opportunities? Let's connect!</p>
                        <h3><a href="mailto:partnerships@fivepcmiracle.com"
                                class="numbr">partnerships@fivepcmiracle.com</a></h3>
                    </div>
                </div>
            </div>
            <div class="form-block">
                <form method="POST" action="/leads/">
                    <input type="hidden" name="route" value="/contact/">
                    <input type="hidden" name="brand" value="designlayeragency">
                    <input type="hidden" name="token"
                        value="86040d9e3993f170ce3a20759f8949a14e37e53eff140cabcafb9dd5d15d59af">
                    <input type="hidden" name="tag" value="contact page form">
                    <input type="hidden" name="price" value="null">
                    <input type="hidden" name="news" value="1">
                    <div class="row">
                        <div class="col-md-6">
                            <label>full name*</label><br>
                            <input type="text" name="name" placeholder="Your Name" id="name" required="">
                        </div>
                        <div class="col-md-6">
                            <label>Company</label><br>
                            <input type="text" name="company" placeholder="Your Company" id="company">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email Address*</label><br>
                            <input type="email" name="email" placeholder="Your Email" id="email" required="">
                        </div>
                        <div class="col-md-6">
                            <label>Phone</label><br>
                            <input type="phone" name="phone" placeholder="Your Phone" id="phone" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>What type of collaboration are you interested in?</label><br>
                            <textarea id="textarea_abt" name="textarea_abt"
                                placeholder="Tell us about your business needs and which partnership program interests you"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Which partnership program interests you most?</label><br>
                            <select name="hear_us" id="hear_us" required="">
                                <option value="">Select a partnership program</option>
                                <option value="Channel Partner Program">Channel Partner Program</option>
                                <option value="Distribution Projects">Distribution Projects</option>
                                <option value="Reseller Program">Reseller Program</option>
                                <option value="Wholesaler Program">Wholesaler Program</option>
                                <option value="digital-marketing">Digital Marketing Services</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>I would like to discuss an NDA before proceeding</p>
                            <div class="btn-container btn-pirple">
                                <button type="submit" value="submit" name="submit_mailer" id="form-submit"
                                    class="">Start Collaborating <img style="bottom: 10px;  "
                                        src="assets/images/submit.svg"></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="form-banner" style="background: url('assets/images/contact-bnner.png');">
        <div class="hero-main-rp container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Ready to Start a Partnership?</h2>
                    <p><a href="javascript:void(Tawk_API.toggle())">click here</a> to speak with one of our collaboration
                        specialists</p>
                </div>
            </div>
        </div>
    </section>

    <section class="find-us-section">
        <div class="hero-main-rp container">
            <h2><img src="assets/images/Group 198.png" alt="address" class="lazy"><br>Our Collaboration Centers</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="findus-box">
                        <h3>USA Branch</h3>
                        <p>Registered Office 450 South Orange Avenue, 7th Floor, Orlando, FL 32807</p>
                        <h4><a href="https://goo.gl/maps/MjtLmAEyF3cUkgC77" target="blank">show on map</a></h4>
                        <img src="assets/images/findus2.png" alt="find us" class="carer-img lazy">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="findus-box">
                        <h3>UK Branch</h3>
                        <p>Registered Office 4 Mann Island, Liverpool L3 1BP, UK</p>
                        <h4><a href="https://goo.gl/maps/GLLH8C9kZMuseZKU7" target="blank">show on map</a></h4>
                        <img src="assets/images/findus1.png" alt="find us" class="carer-img lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homepage-sectionone discuss-section lazy" style="background: url('assets/images/discuss.jpg');">
        <div class="hero-main-rp container">
            <div class="row scroll-visible">
                <div class="col-lg-10 col-md-12">
                    <h2 class="animate-in-future">
                        <span style="color: #2bc4f7; font-size: 23px; display: block; margin-bottom: 10px;">
                            Join Us in Building the Future</span>
                        FIVEPCMIRACLE invites you to be part of a collaborative journey that transforms challenges into
                        opportunities. Whether you’re looking to expand your market reach, enhance your brand value, or
                        streamline operations, we have the expertise and network to make it happen.
                    </h2>
                </div>
                <div class="col-lg-2 col-md-12">
                    <div class="btn-container btn-pirple chat">
                        <a href="javascript:void(Tawk_API.toggle())">Let’s work together—because at FIVEPCMIRACLE,
                            collaboration isn’t just a strategy; it’s the foundation of success.<img
                                src="{{ asset('assets/images/arrow2.svg') }}" class="lazy" alt="start partnership"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
