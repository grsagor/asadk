<section id="contact">

    <div class="row section-intro">
        <div class="col-twelve">
            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>
            <p class="lead">Feel free to reach out for collaborations, inquiries, or any web development needs.
                Let’s work together to bring your ideas to life and create something amazing!</p>
        </div>
    </div>
    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
                <fieldset>

                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value=""
                            minlength="2" required="">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email"
                            value="" required="">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject"
                            value="">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform">Submit</button>
                        <div id="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
            <div id="message-warning">
            </div>
            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>
        </div>
    </div>

    <div class="row contact-info">

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>Where to find me</h5>

            <p>Dhaka, Bangladesh
            </p>

        </div>

        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>grsagor08@gmail.com
            </p>

        </div>

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-phone"></i>
            </div>

            <h5>Call Me At</h5>

            <p>Phone: (+880) 1710 38 44 79
            </p>
        </div>
    </div>
</section>
