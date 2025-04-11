<section id="services">
    <div class="overlay"></div>
    <div class="row section-intro">
        <div class="col-twelve">
            <h5>Services</h5>
            <h1>What Can I Do For You?</h1>
            <p class="lead">As a full-stack developer, I offer comprehensive web development solutions tailored
                to your needs. From creating responsive front-end interfaces to building robust back-end systems, I
                ensure high-quality, scalable, and efficient solutions for your digital projects.</p>
        </div>
    </div>

    <div class="row services-content">
        <div id="owl-slider" class="owl-carousel services-list">
            @foreach ($services as $service)
                <div class="service">
                    <span class="icon"><i class="{{ $service->icon }}"></i></span>
                    <div class="service-content">
                        <h3>{{ $service->title }}</h3>
                        <p class="desc">{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>