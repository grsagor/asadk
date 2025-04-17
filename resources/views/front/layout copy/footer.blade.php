<footer class="modern-footer">
    <div class="footer-content">
        <div class="row">
            <div class="col-md-4 footer-section">
                <div class="footer-logo mb-4">
                    <img src="{{ asset('assets/images/utils/logo-white.png') }}" alt="Logo" class="img-fluid">
                </div>
                <p>We are dedicated to delivering exceptional solutions and services to our clients. Our commitment to excellence drives everything we do.</p>
            </div>
            
            <div class="col-md-4 footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 footer-section">
                <h3>Connect With Us</h3>
                <ul class="footer-social">
                    <li><a target="_blank" href="https://facebook.com/iamgrsagor" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="https://github.com/grsagor" class="social-icon"><i class="fa-brands fa-github"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/in/iamgrsagor/" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a target="_blank" href="https://medium.com/@iamgrsagor" class="social-icon"><i class="fa-brands fa-medium"></i></a></li>
                    <li><a target="_blank" href="https://dev.to/iamgrsagor" class="social-icon"><i class="fa-brands fa-dev"></i></a></li>
                    <li><a target="_blank" href="https://x.com/iamgrsagor" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="copyright">
            <span>© Copyright 2024 </span>
            <span>All Rights Reserved by <a href="http://www.grsagor.com/">Golam Rahman Sagor</a></span>
        </div>
        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>
    </div>
</footer>

<style>
.modern-footer {
    background-color: #1a1a1a;
    color: #ffffff;
    padding: 60px 0 20px;
    position: relative;
}

.footer-content {
    padding: 0 30px;
    margin-bottom: 40px;
}

.footer-section {
    margin-bottom: 30px;
}

.footer-section h3 {
    color: #ffffff;
    font-size: 1.4rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
}

.footer-section h3:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background: #4a90e2;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #4a90e2;
}

.footer-social {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background: #4a90e2;
    transform: translateY(-3px);
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 20px 30px;
    text-align: center;
}

.copyright {
    font-size: 0.9rem;
    color: #888;
}

.copyright a {
    color: #4a90e2;
    text-decoration: none;
}

#go-top {
    position: fixed;
    right: 30px;
    bottom: 30px;
    z-index: 600;
}

#go-top a {
    background-color: #4a90e2;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    transition: all 0.3s ease;
}

#go-top a:hover {
    background-color: #357abd;
    transform: translateY(-3px);
}

@media screen and (max-width: 768px) {
    .footer-section {
        text-align: center;
    }

    .footer-section h3:after {
        left: 50%;
        transform: translateX(-50%);
    }

    .footer-social {
        justify-content: center;
    }
}
</style>