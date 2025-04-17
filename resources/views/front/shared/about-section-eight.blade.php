<section class="about-section-eight">
    <div class="hero-main-rp container">
        <div class="row cntct-detail">
            <div class="col-md-4">
                <div class="cntct-box">
                    <p>Is your need urgent? <br>If so, call our receptionist at</p>
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
                    <p>Looking to kick-off your projects? Let’s start planning!</p>
                    <h3><a href="mailto:info@designlayeragency.com" class="numbr">info@designlayeragency.com</a></h3>
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
                        <label>How can we help you?</label><br>
                        <textarea id="textarea_abt" name="textarea_abt"
                            placeholder="tell us about your product and your nearest plans on the design engagement"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>How did you hear about us?</label><br>
                        <select name="hear_us" id="hear_us" required="">
                            <option value="">How did you hear about us?</option>
                            <option value="graphic">Google</option>
                            <option value="web-Development">Social Media</option>
                            <option value="app-development">News</option>
                            <option value="devops">Friends</option>
                            <option value="digital-marketing">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>I need to sign the NDA first</p>
                        <div class="btn-container btn-pirple">
                            <button type="submit" value="submit" name="submit_mailer" id="form-submit"
                                class="">let’s talk <img style="bottom: 10px;  "
                                    src="assets/images/submit.svg"></button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
