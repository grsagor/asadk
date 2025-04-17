@extends('front.layout.app')
@section('content')
<section class="inner-banner">
    <div class="hero-main-rp container">
        <div class="row">
            <div class="col-md-12">
                <h1>I Need To Talk To An <br>Expert.</h1>
            </div>
        </div>
    </div>
    @include('front.shared.about-section-eight')
    <section class="form-banner" style="background: url('assets/images/contact-bnner.png');">
		<div class="hero-main-rp container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Don’t Like Forms?</h2>
					<p><a href="javascript:void(Tawk_API.toggle())">click here</a> to speak to one of our solutions specialist</p>
				</div>
			</div>
		</div>
	</section>
    <section class="find-us-section">
		<div class="hero-main-rp container">
			<h2><img src="assets/images/Group 198.png" alt="address" class="lazy"><br>Where To Find Us</h2>
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
    @include('front.shared.discuss-section')
</section>
@endsection
