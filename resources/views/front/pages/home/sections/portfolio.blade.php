<section id="portfolio">
    <div class="row section-intro">
        <div class="col-twelve">
            <h5>Portfolio</h5>
            <h1>Check Out Some of My Works.</h1>

            <p class="lead">Explore a selection of projects showcasing my expertise in web development, including
                custom Next.js templates, WordPress customizations, and dynamic web applications built with React,
                Laravel, and Angular. Each project reflects my commitment to quality and innovation.</p>

        </div>
    </div>

    <div class="row portfolio-content">

        <div class="col-twelve">
            <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('assets/images/portfolio/abmgsac.png') }}" alt="Liberty">
                        <a href="#modal-01" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">AMB Graduate School and College</h3>
                                    <span class="folio-types">
                                        Backend Development
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('assets/images/portfolio/unipuler.png') }}" alt="Liberty">
                        <a href="#modal-02" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Unipuler</h3>
                                    <span class="folio-types">
                                        Full-Stack Development
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div id="modal-01" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('assets/images/portfolio/modals/abmgsac.png') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>AMB Graduate School and College</h4>
                        <p>I transform static website content into fully dynamic, interactive, and user-friendly
                            experiences tailored to meet your specific needs.</p>

                        <div class="categories">Backend Development</div>
                    </div>

                    <div class="link-box">
                        <a href="https://abmgsac.com">Visit</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div>
                <div id="modal-02" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('assets/images/portfolio/modals/unipuler.png') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Unipuler</h4>
                        <p>This was a Codecanyon project where I fully customized the website to meet the client's
                            specific requirements. I revamped the features, including integrating a payment gateway
                            and adding product variations, making it a dynamic and tailored solution for the
                            client’s needs.</p>

                        <div class="categories">Full-Stack Development</div>
                    </div>

                    <div class="link-box">
                        <a href="https://unipuler.com">Visit</a>
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>