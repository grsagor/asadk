@extends('front.layout.app')

@section('content')
<div class="banner position-relative mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://picsum.photos/1920/400?blur=2') no-repeat center center; background-size: cover; height: 300px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-4 fw-bold">About Us</h1>
                <p class="lead">Delivering Excellence in Web Development</p>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <h2 class="mb-4">Our Story</h2>
            <p class="mb-4">With years of experience in web development, we've built a reputation for delivering high-quality, innovative solutions that help businesses succeed in the digital world. Our team of skilled developers and designers work together to create exceptional web experiences.</p>
            <p>We specialize in modern web technologies and frameworks, ensuring that our clients receive cutting-edge solutions that are both scalable and maintainable.</p>
        </div>
        <div class="col-lg-6">
            <img src="https://picsum.photos/800/600" alt="About Us" class="img-fluid rounded shadow-lg">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="mb-4">Our Mission</h2>
            <p class="lead">To empower businesses with innovative web solutions that drive growth and success in the digital age.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-code fa-3x mb-3 text-primary"></i>
                    <h3 class="h4 mb-3">Clean Code</h3>
                    <p class="text-muted">We write maintainable, efficient, and scalable code following best practices.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-mobile-alt fa-3x mb-3 text-primary"></i>
                    <h3 class="h4 mb-3">Responsive Design</h3>
                    <p class="text-muted">Our websites work flawlessly across all devices and screen sizes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-rocket fa-3x mb-3 text-primary"></i>
                    <h3 class="h4 mb-3">Performance</h3>
                    <p class="text-muted">We optimize every aspect to ensure lightning-fast loading speeds.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection