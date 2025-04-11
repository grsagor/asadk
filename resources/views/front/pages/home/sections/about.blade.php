<section id="about">
    <div class="row section-intro">
        <div class="col-twelve">
            <h5>About</h5>
            <h1>Let me introduce myself.</h1>
            <div class="intro-info">
                <img src="{{ asset('assets/images/profile-pic.jpg') }}" alt="Profile Picture">
                <p class="lead">I am deeply passionate about software engineering, thriving in the ever-evolving
                    world of technology. Debugging is one of my greatest joys; I approach every issue as a challenge
                    waiting to be unraveled, often finding solutions where others see dead ends.

                    My experience spans multiple frameworks and technologies, allowing me to adapt quickly to
                    diverse project requirements. Whether it's crafting dynamic web applications, optimizing backend
                    systems, or integrating innovative solutions, I take pride in delivering efficient and scalable
                    results.

                    Driven by a relentless curiosity, I enjoy exploring new tools and methodologies, constantly
                    honing my skills to stay ahead of the curve. For me, software engineering is more than a
                    profession—it's a craft that blends logic, creativity, and persistence into building impactful
                    solutions.</p>
            </div>
        </div>
    </div>

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>
            <p>I am a dedicated and passionate software engineer with a strong foundation in building efficient,
                user-focused applications. I thrive on solving complex problems, continuously exploring innovative
                solutions, and learning new technologies to enhance my expertise. My work reflects a commitment to
                excellence and a keen eye for detail, ensuring every project is both functional and impactful.</p>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>Golam Rahman Sagor</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>23, August</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>Software Engineer</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>grsagor08@gmail.com</span>
                </li>
            </ul>
        </div>

        <div class="col-six tab-full">
            <h3>Skills</h3>
            <p>I have a versatile skill set honed through years of experience in software development. My expertise
                spans multiple frameworks, languages, and tools, enabling me to craft robust and scalable solutions.
                From front-end development to backend engineering, I’m committed to writing clean, efficient, and
                maintainable code. Here’s a breakdown of my core competencies:</p>

            <ul class="skill-bars">
                @foreach ($technologies as $technology)
                    <li>
                        <strong>{{ $technology->name }}</strong>
                        <div class="position-relative">
                            <div class="progress percent{{ $technology->skill }}">
                                <span>{{ $technology->skill }}%</span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            {{-- <a href="#" title="Download CV" class="button button-primary">Download CV</a> --}}
        </div>
    </div>
</section>
