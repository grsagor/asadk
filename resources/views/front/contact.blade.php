@extends('front.layout.app')

@section('content')
<div class="banner position-relative mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://picsum.photos/1920/400?blur=2') no-repeat center center; background-size: cover; height: 300px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-4 fw-bold">Contact Us</h1>
                <p class="lead">Get in touch with our team</p>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h2 class="h3 mb-4">Send us a message</h2>
                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h2 class="h3 mb-4">Contact Information</h2>
                    <div class="d-flex mb-3">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                        <div>
                            <h3 class="h5">Address</h3>
                            <p class="text-muted mb-0">123 Web Street, Digital City, 12345</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-phone fa-2x text-primary me-3"></i>
                        <div>
                            <h3 class="h5">Phone</h3>
                            <p class="text-muted mb-0">+1 (123) 456-7890</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                        <div>
                            <h3 class="h5">Email</h3>
                            <p class="text-muted mb-0">contact@example.com</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="h5 mb-3">Follow Us</h3>
                        <a href="#" class="text-primary me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-primary me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-primary me-3"><i class="fab fa-linkedin fa-2x"></i></a>
                        <a href="#" class="text-primary"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30596073366!2d-74.25987368715491!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1644262712021!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection