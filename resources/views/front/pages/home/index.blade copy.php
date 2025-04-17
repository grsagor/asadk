// this was my design

@extends('front.layout.app')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-white py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://picsum.photos/1920/1080?blur=2') no-repeat center center; background-size: cover; min-height: 500px; display: flex; align-items: center;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 hero-content">
                    <h1 class="display-4 fw-bold mb-4">Premium Website Templates</h1>
                    <p class="lead mb-4">High-Quality, Responsive Templates for Your Next Project</p>
                    <a href="#templates" class="btn btn-light btn-lg px-4">Browse Templates</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Templates Section -->
    <section id="templates" class="featured-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Templates</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://picsum.photos/800/600?random=1" class="card-img-top" alt="Template Preview">
                        <div class="card-body">
                            <h3 class="h5">Business Pro</h3>
                            <p class="text-muted">Modern business template with sleek design</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">$59</span>
                                <a href="#" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://picsum.photos/800/600?random=2" class="card-img-top" alt="Template Preview">
                        <div class="card-body">
                            <h3 class="h5">E-Commerce Plus</h3>
                            <p class="text-muted">Complete e-commerce solution with shopping cart</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">$79</span>
                                <a href="#" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://picsum.photos/800/600?random=3" class="card-img-top" alt="Template Preview">
                        <div class="card-body">
                            <h3 class="h5">Portfolio Master</h3>
                            <p class="text-muted">Showcase your work with style</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">$49</span>
                                <a href="#" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Choose Your Plan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="card-title">Basic</h3>
                            <div class="display-4 my-4">$29</div>
                            <ul class="list-unstyled">
                                <li class="mb-3">1 Template Download</li>
                                <li class="mb-3">3 Months Support</li>
                                <li class="mb-3">Basic Documentation</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow border-primary">
                        <div class="card-body text-center">
                            <h3 class="card-title">Professional</h3>
                            <div class="display-4 my-4">$79</div>
                            <ul class="list-unstyled">
                                <li class="mb-3">3 Template Downloads</li>
                                <li class="mb-3">6 Months Support</li>
                                <li class="mb-3">Premium Documentation</li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h3 class="card-title">Enterprise</h3>
                            <div class="display-4 my-4">$149</div>
                            <ul class="list-unstyled">
                                <li class="mb-3">Unlimited Downloads</li>
                                <li class="mb-3">1 Year Support</li>
                                <li class="mb-3">Premium Documentation</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Customers Say</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://picsum.photos/400/400?random=1" class="rounded-circle mb-4" alt="Customer" width="100">
                            <p class="mb-4">"The templates are beautifully designed and easy to customize. Excellent support team!"</p>
                            <h5 class="mb-1">Sarah Johnson</h5>
                            <p class="text-muted">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://picsum.photos/400/400?random=2" class="rounded-circle mb-4" alt="Customer" width="100">
                            <p class="mb-4">"Professional templates that saved us time and money. Highly recommended!"</p>
                            <h5 class="mb-1">Michael Chen</h5>
                            <p class="text-muted">Business Owner</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://picsum.photos/400/400?random=3" class="rounded-circle mb-4" alt="Customer" width="100">
                            <p class="mb-4">"Great value for money. The code quality is exceptional!"</p>
                            <h5 class="mb-1">Emily Davis</h5>
                            <p class="text-muted">Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Need Help?</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="contact-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
