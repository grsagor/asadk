<style>
    .menu-item.active {
        background-color: #444;
        /* Change background color when active */
        border-left: 3px solid #ffcc00;
        /* Add a border to the left */
    }
</style>
<section class="main-menu-nav" style=" background: #1a1a1a">
    <div class="hero-main-rp container">
        <div class="cancel-btn">
            <a href="javascript:void(0)">Menu<img src="{{ asset('assets/images/cancel.svg') }}" alt="cancel button"
                    class="lazy"></a>
        </div>
        <div class="row h-100">
            <div class="col-md-12 h-100 d-flex flex-column">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}"
                            alt="navigation" class="lazy" width="300"></a>
                </div>
                <div class="menu-nav flex-grow-1 overflow-y-auto">
                    <ul class="fancy-menu ">
                        <li><a href="{{ route('front.index') }}">Home</a></li>

                        <!-- New Programs Menu -->
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Programs <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="#">Raise funds for your startup</a></li>
                                <li><a href="#">Quest for Tech CoFounder</a></li>
                                <li><a href="#">Business Franchise</a></li>
                                <li><a href="#">Start and Launch your business worldwide</a></li>
                                <li><a href="#">Grow your Startup</a></li>
                                <li><a href="#">All-encompassing technical development for startups</a></li>
                                <li><a href="#">Identify New Markets</a></li>
                                <li><a href="#">Scheme for outcome</a></li>
                                <li><a href="#">Growth Program multi-level</a></li>
                                <li><a href="#">Start-up launchers</a></li>
                                <li><a href="#">Do not let your idea die</a></li>
                                <li><a href="#">Build a Virtual company</a></li>
                                <li><a href="#">Swap work load</a></li>
                                <li><a href="#">Borderless collaboration</a></li>
                                <li><a href="#">Fully Collaborated Network</a></li>
                                <li><a href="#">Mutually Beneficial Relationship</a></li>
                                <li><a href="#">Resource sharing</a></li>
                                <li><a href="#">General Facilities</a></li>
                                <li><a href="#">Community based facilities</a></li>
                                <li><a href="#">Joint Ownership</a></li>
                                <li><a href="#">Learning Management Solution</a></li>
                                <li><a href="#">Free Education Program</a></li>
                                <li><a href="#">Build your own Umbrella</a></li>
                            </ul>
                        </li>


                        {{-- Service --}}
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Services <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="#">Talk to SME - Consultation</a></li>
                                <li><a href="#">Business Plans for everyone</a></li>
                                <li><a href="#">Design and Development Management</a></li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Managed Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Collaboration as a service</a></li>
                                        <li><a href="#">Marketing as a Service</a></li>
                                        <li><a href="#">Technology as a Service</a></li>
                                        <li><a href="#">Sales as a Service</a></li>
                                        <li><a href="#">Maintenance as a Service</a></li>
                                        <li><a href="#">Software as a Service</a></li>
                                        <li><a href="#">Workforce as a Service</a></li>
                                        <li><a href="#">Work Swap as a Service</a></li>
                                        <li><a href="#">Outsourcing as a Service</a></li>
                                        <li><a href="#">Technopreneur as a service</a></li>
                                        <li><a href="#">CTO as a Service</a></li>
                                        <li><a href="#">Teams as a Service</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Fully Managed Services</a></li>
                                <li><a href="#">Business Health Checkup</a></li>
                                <li><a href="#">Supervision and Reporting Services</a></li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding Sources <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Venture Capital Funding</a></li>
                                        <li><a href="#">Startup Business Loans</a></li>
                                        <li><a href="#">Startup Grants</a></li>
                                        <li><a href="#">Crowdfunding Platforms</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding for <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Advertisement Projects</a></li>
                                        <li><a href="#">Contact Center Projects</a></li>
                                        <li><a href="#">SMB Startups</a></li>
                                        <li><a href="#">Education empowerment</a></li>
                                        <li><a href="#">Digital Space projects</a></li>
                                        <li><a href="#">E-commerce at its best</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding Steps <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Startup Valuation</a></li>
                                        <li><a href="#">Planning for Raising Capital</a></li>
                                        <li><a href="#">Negotiations with VCs</a></li>
                                        <li><a href="#">Pitch your Startup</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">How to Fund your Startup <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Funding Tech Startups</a></li>
                                        <li><a href="#">Business Growth Capital</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Review Materials <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Write your Business Plan</a></li>
                                        <li><a href="#">Startup Pitch Deck</a></li>
                                        <li><a href="#">Financial Speculation</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding for Different Stages <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Early Funding</a></li>
                                        <li><a href="#">Series A, B and C Funding</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Real Estate Funding</a></li>
                                <li><a href="#">Real Estate Projects Funding</a></li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Business Empowerment <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Business Hacks</a></li>
                                        <li><a href="#">Hotel and Restaurant business development</a></li>
                                        <li><a href="#">Schools business development</a></li>
                                        <li><a href="#">Healthcare Facility development</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Franchise Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Franchise Business Opportunities</a></li>
                                        <li><a href="#">Franchise Business Development</a></li>
                                        <li><a href="#">Franchise Establishment Guidance</a></li>
                                        <li><a href="#">Franchise Market Trends</a></li>
                                        <li><a href="#">Franchise Business Models</a></li>
                                        <li><a href="#">Franchise Revenue Generation</a></li>
                                        <li><a href="#">Franchise Expansion Strategies</a></li>
                                        <li><a href="#">Franchise Business Plan Development</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Idea Validation <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Proof of Concept</a></li>
                                        <li><a href="#">Software Prototype</a></li>
                                        <li><a href="#">MVP Development</a></li>
                                        <li><a href="#">Product Costing</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Tech Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Software Design and Development</a></li>
                                        <li><a href="#">Web Site and Applications</a></li>
                                        <li><a href="#">Mobile Application Design</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Sales Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Sales as a Service</a></li>
                                        <li><a href="#">Sales Consulting</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Step up Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Business Development Services</a></li>
                                        <li><a href="#">Business Growth Services</a></li>
                                        <li><a href="#">Business Development</a></li>
                                        <li><a href="#">Market Research Services</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        {{-- Community --}}
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Community <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Our Team <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Get to know our team!</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Entrepreneur <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Entrepreneurs we have worked with</a></li>
                                        <li><a href="#">Our Entrepreneurs Network</a></li>
                                        <li><a href="#">Join us as an Entrepreneur</a></li>
                                        <li><a href="#">Supporting Women Entrepreneurs</a></li>
                                        <li><a href="#">Join Us as a Female Founder</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Partner <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Partnerships, co-investments, and more</a></li>
                                        <li><a href="#">Our Partners Network</a></li>
                                        <li><a href="#">Join us as a Partner</a></li>
                                        <li><a href="#">Our global representatives network</a></li>
                                        <li><a href="#">Representatives Network</a></li>
                                        <li><a href="#">Join us as a Representative</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Investor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Our Investors network</a></li>
                                        <li><a href="#">Investors Network</a></li>
                                        <li><a href="#">Join us as an Investor</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Mentor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Our Mentors Network</a></li>
                                        <li><a href="#">Join us as a Mentor</a></li>
                                        <li><a href="#">Find a mentor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Centralized Learning Program <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">About Learning Centre <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="#">Content region</a></li>
                                        <li><a href="#">Design and Develop</a></li>
                                        <li><a href="#">Best Keywords to lookout for</a></li>
                                        <li><a href="#">Entrepreneurs blog</a></li>
                                        <li><a href="#">Subject Matter Experts</a></li>
                                        <li><a href="#">Catchwords</a></li>
                                        <li><a href="#">Discussions</a></li>
                                        <li><a href="#">Q&A</a></li>
                                        <li><a href="#">Data Visualization</a></li>
                                        <li><a href="#">Blogs</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Media <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Observants Declaration about us</a></li>
                                <li><a href="#">Success Stories</a></li>
                                <li><a href="#">Companies collaborated to our learning portal</a></li>
                                <li><a href="#">How we calculate and offer help</a></li>
                                <li><a href="#">Read about our activities</a></li>
                                <li><a href="#">Investments</a></li>
                                <li><a href="#">Videos - Press and BizNews</a></li>
                                <li><a href="#">References</a></li>
                                <li><a href="#">Accomplishments</a></li>
                                <li><a href="#">Tech meeting program</a></li>
                                <li><a href="#">Pitch your idea</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Join us <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="#">Get Funded</a></li>
                                <li><a href="#">Build MMP</a></li>
                                <li><a href="#">Our SLC Model</a></li>
                                <li><a href="#">Grow Sales</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Partner Now</a></li>
                        <li><a href="#">AI for All</a></li>
                        <li><a href="#">Get All Access Pass</a></li>
                        <!-- <li><a href="/blogs/">digital trends</a></li> -->
                        <li><a href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="social-icons-head">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/designlayeragencyllc"><img
                                    src="{{ asset('assets/images/facebook-head.svg') }}" alt="facebook"
                                    class="lazy"></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/83519829/"><img
                                    src="{{ asset('assets/images/linkedin.svg') }}" alt="linkedin"
                                    class="lazy"></a>
                        </li>
                        <li><a target="_blank" href="https://www.instagram.com/designlayeragency/"><img
                                    src="{{ asset('assets/images/instagram.svg') }}" alt="instagram"
                                    class="lazy"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.menu-toggle').on('click', function(event) {
            event.preventDefault();
            const $menu = $(this).next('.submenu');
            const $icon = $(this).find('i');
            const $parent = $(this).parent();

            if ($menu.height() === 0) {
                $menu.css('height', $menu.prop('scrollHeight') + 'px');
                $icon.css('transform', 'rotate(180deg)');
                $parent.addClass('active'); // Add 'active' class to parent
            } else {
                $menu.css('height', '0px');
                $icon.css('transform', 'rotate(0deg)');
                $parent.removeClass('active'); // Remove 'active' class from parent
            }

            const $parentSubmenu = $parent.parent();
            if ($parentSubmenu.hasClass('submenu')) {
                if ($menu.height() === 0) {
                    const totalHeight = $parentSubmenu.height() + $menu.prop('scrollHeight');
                    $parentSubmenu.css('height', totalHeight + 'px');
                } else {
                    const totalHeight = $parentSubmenu.height() - $menu.prop('scrollHeight');
                    $parentSubmenu.css('height', totalHeight + 'px');
                }
            }
        });
    });
</script>
