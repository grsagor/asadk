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
                            alt="navigation" class="lazy" width="100" height="80"></a>
                </div>
                <div class="menu-nav flex-grow-1 overflow-y-auto">
                    <ul class="fancy-menu ">
                        <li><a href="{{ route('front.index') }}">Home</a></li>

                        <!-- New Programs Menu -->
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Programs <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="/programs/raise-fund">Raise funds for your startup</a></li>
                                <li><a href="/programs/tech-cofounder">Quest for Tech CoFounder</a></li>
                                <li><a href="/programs/franchise">Business Franchise</a></li>
                                <li><a href="/programs/launch-business">Start and Launch your business worldwide</a></li>
                                <li><a href="/programs/grow-startup">Grow your Startup</a></li>
                                <li><a href="/programs/technical-development">All-encompassing technical development for startups</a></li>
                                <li><a href="/programs/new-markets">Identify New Markets</a></li>
                                <li><a href="/programs/scheme-outcome">Scheme for outcome</a></li>
                                <li><a href="/programs/growth-program">Growth Program multi-level</a></li>
                                <li><a href="/programs/startup-launchers">Start-up launchers</a></li>
                                <li><a href="/programs/idea-survival">Do not let your idea die</a></li>
                                <li><a href="/programs/virtual-company">Build a Virtual company</a></li>
                                <li><a href="/programs/workload-swap">Swap work load</a></li>
                                <li><a href="/programs/collaboration">Borderless collaboration</a></li>
                                <li><a href="/programs/network">Fully Collaborated Network</a></li>
                                <li><a href="/programs/mutual-relationship">Mutually Beneficial Relationship</a></li>
                                <li><a href="/programs/resource-sharing">Resource sharing</a></li>
                                <li><a href="/programs/general-facilities">General Facilities</a></li>
                                <li><a href="/programs/community-facilities">Community based facilities</a></li>
                                <li><a href="/programs/joint-ownership">Joint Ownership</a></li>
                                <li><a href="/programs/lms">Learning Management Solution</a></li>
                                <li><a href="/programs/free-education">Free Education Program</a></li>
                                <li><a href="/programs/umbrella">Build your own Umbrella</a></li>
                            </ul>
                        </li>


                        {{-- Service --}}
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Services <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="/services/talk-to-sme">Talk to SME - Consultation</a></li>
                                <li><a href="/services/business-plans">Business Plans for everyone</a></li>
                                <li><a href="/services/design-development">Design and Development Management</a></li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Managed Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="/services/managed-services/collaboration">Collaboration as a service</a></li>
                                        <li><a href="/services/managed-services/marketing">Marketing as a Service</a></li>
                                        <li><a href="/services/managed-services/technology">Technology as a Service</a></li>
                                        <li><a href="/services/managed-services/sales">Sales as a Service</a></li>
                                        <li><a href="/services/managed-services/maintenance">Maintenance as a Service</a></li>
                                        <li><a href="/services/managed-services/software">Software as a Service</a></li>
                                        <li><a href="/services/managed-services/workforce">Workforce as a Service</a></li>
                                        <li><a href="/services/managed-services/workswap">Work Swap as a Service</a></li>
                                        <li><a href="/services/managed-services/outsourcing">Outsourcing as a Service</a></li>
                                        <li><a href="/services/managed-services/technopreneur">Technopreneur as a service</a></li>
                                        <li><a href="/services/managed-services/cto">CTO as a Service</a></li>
                                        <li><a href="/services/managed-services/teams">Teams as a Service</a></li>
                                    </ul>
                                </li>
                                <li><a href="/services/fully-managed">Fully Managed Services</a></li>
                                <li><a href="/services/business-health-checkup">Business Health Checkup</a></li>
                                <li><a href="/services/supervision-reporting">Supervision and Reporting Services</a></li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding Sources <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="/services/funding-sources/venture-capital">Venture Capital Funding</a></li>
                                        <li><a href="/services/funding-sources/business-loans">Startup Business Loans</a></li>
                                        <li><a href="/services/funding-sources/grants">Startup Grants</a></li>
                                        <li><a href="/services/funding-sources/crowdfunding">Crowdfunding Platforms</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding for <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="/services/funding-for/advertisement">Advertisement Projects</a></li>
                                        <li><a href="/services/funding-for/contact-center">Contact Center Projects</a></li>
                                        <li><a href="/services/funding-for/smb-startups">SMB Startups</a></li>
                                        <li><a href="/services/funding-for/education">Education empowerment</a></li>
                                        <li><a href="/services/funding-for/digital-space">Digital Space projects</a></li>
                                        <li><a href="/services/funding-for/ecommerce">E-commerce at its best</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding Steps <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="/services/funding-steps/valuation">Startup Valuation</a></li>
                                        <li><a href="/services/funding-steps/planning">Planning for Raising Capital</a></li>
                                        <li><a href="/services/funding-steps/negotiations">Negotiations with VCs</a></li>
                                        <li><a href="/services/funding-steps/pitch">Pitch your Startup</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">How to Fund your Startup <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="/services/fund-your-startup/tech-startups">Funding Tech Startups</a></li>
                                        <li><a href="/services/fund-your-startup/business-growth">Business Growth Capital</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Review Materials <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="/services/review-materials/business-plan">Write your Business Plan</a></li>
                                        <li><a href="/services/review-materials/pitch-deck">Startup Pitch Deck</a></li>
                                        <li><a href="/services/review-materials/financial">Financial Speculation</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Funding for Different Stages <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="/services/funding-stages/early">Early Funding</a></li>
                                        <li><a href="/services/funding-stages/series">Series A, B and C Funding</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Real Estate Funding<i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.pages.services.real-estate-funding.real-estate-projects')}}">Real Estate Projects Funding</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Business Empowerment <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.services.business-empowerment.business-hacks')}}">Business Hacks</a></li>
                                        <li><a href="{{route('front.services.business-empowerment.hotel-development')}}">Hotel and Restaurant business development</a></li>
                                        <li><a href="{{route('front.services.business-empowerment.schools-development')}}">Schools business development</a></li>
                                        <li><a href="{{route('front.services.business-empowerment.healthcare-development')}}">Healthcare Facility development</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Franchise Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.services.franchise-services.franchise-opportunities')}}">Franchise Business Opportunities</a></li>
                                        <li><a href="{{route('front.services.franchise-services.franchise-development')}}">Franchise Business Development</a></li>
                                        <li><a href="{{route('front.services.franchise-services.franchise-guidance')}}">Franchise Establishment Guidance</a></li>
                                        <li><a href="{{route('front.services.franchise-services.franchise-trends')}}">Franchise Market Trends</a></li>
                                        <li><a href="{{route('front.services.franchise-services.franchise-models')}}">Franchise Business Models</a></li>
                                        <li><a href="{{route('front.services.franchise-services.franchise-revenue')}}">Franchise Revenue Generation</a></li>
                                        <li><a href="{{route('front.services.franchise-services.franchise-expansion')}}">Franchise Expansion Strategies</a></li>
                                        <li><a href="{{route('front.services.franchise-services.franchise-plan')}}">Franchise Business Plan Development</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Idea Validation <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.services.idea-validation.proof-of-concept')}}">Proof of Concept</a></li>
                                        <li><a href="{{route('front.services.idea-validation.software-prototype')}}">Software Prototype</a></li>
                                        <li><a href="{{route('front.services.idea-validation.mvp-development')}}">MVP Development</a></li>
                                        <li><a href="{{route('front.services.idea-validation.product-costing')}}">Product Costing</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Tech Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.services.tech-services.software-design')}}">Software Design and Development</a></li>
                                        <li><a href="{{route('front.services.tech-services.web-applications')}}">Web Site and Applications</a></li>
                                        <li><a href="{{route('front.services.tech-services.mobile-design')}}">Mobile Application Design</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Sales Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.services.sales-services.sales-service')}}">Sales as a Service</a></li>
                                        <li><a href="{{route('front.services.sales-services.sales-consulting')}}">Sales Consulting</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Step up Services <i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.services.step-up-services.business-development-services')}}">Business Development Services</a></li>
                                        <li><a href="{{route('front.services.step-up-services.business-growth')}}">Business Growth Services</a></li>
                                        <li><a href="{{route('front.services.step-up-services.business-development')}}">Business Development</a></li>
                                        <li><a href="{{route('front.services.step-up-services.market-research')}}">Market Research Services</a></li>
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
                                        <li><a href="{{route('front.community.our-team.get-to-know')}}">Get to know our team!</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Entrepreneur <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.community.entrepreneur.worked-with')}}">Entrepreneurs we have worked with</a></li>
                                        <li><a href="{{route('front.community.entrepreneur.network')}}">Our Entrepreneurs Network</a></li>
                                        <li><a href="{{route('front.community.entrepreneur.join')}}">Join us as an Entrepreneur</a></li>
                                        <li><a href="{{route('front.community.entrepreneur.women-support')}}">Supporting Women Entrepreneurs</a></li>
                                        <li><a href="{{route('front.community.entrepreneur.female-founder')}}">Join Us as a Female Founder</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Partner <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.community.partner.partnerships-more')}}">Partnerships, co-investments, and more</a></li>
                                        <li><a href="{{route('front.community.partner.partners-network')}}">Our Partners Network</a></li>
                                        <li><a href="{{route('front.community.partner.join-as-partner')}}">Join us as a Partner</a></li>
                                        <li><a href="{{route('front.community.partner.global-network')}}">Our global representatives network</a></li>
                                        <li><a href="{{route('front.community.partner.representatives-network')}}">Representatives Network</a></li>
                                        <li><a href="{{route('front.community.partner.join-as-representative')}}">Join us as a Representative</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Investor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.community.investor.our-investors-network')}}">Our Investors network</a></li>
                                        <li><a href="{{route('front.community.investor.investors-network')}}">Investors Network</a></li>
                                        <li><a href="{{route('front.community.investor.join-as-investor')}}">Join us as an Investor</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-toggle">Mentor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu"
                                        style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                        <li><a href="{{route('front.community.mentor.our-mentors')}}">Our Mentors Network</a></li>
                                        <li><a href="{{route('front.community.mentor.join-as-mentor')}}">Join us as a Mentor</a></li>
                                        <li><a href="{{route('front.community.mentor.find-mentor')}}">Find a mentor</a></li>
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
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.content-region')}}">Content region</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.design-develop')}}">Design and Develop</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.best-keywords')}}">Best Keywords to lookout for</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.entrepreneurs-blog')}}">Entrepreneurs blog</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.subject-matter-experts')}}">Subject Matter Experts</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.catchwords')}}">Catchwords</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.discussions')}}">Discussions</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.q&a')}}">Q&A</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.data-visualization')}}">Data Visualization</a></li>
                                        <li><a href="{{route('front.centralized-learning-program.learning-center.blogs')}}">Blogs</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Media <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="{{route('front.media.testimonials')}}">Testimonials</a></li>
                                <li><a href="{{route('front.media.observants-declaration')}}">Observants Declaration about us</a></li>
                                <li><a href="{{route('front.media.success-stories')}}">Success Stories</a></li>
                                <li><a href="{{route('front.media.companies-collaborated')}}">Companies collaborated to our learning portal</a></li>
                                <li><a href="{{route('front.media.offer-help')}}">How we calculate and offer help</a></li>
                                <li><a href="{{route('front.media.our-activities')}}">Read about our activities</a></li>
                                <li><a href="{{route('front.media.investments')}}">Investments</a></li>
                                <li><a href="{{route('front.media.videos-press')}}">Videos - Press and BizNews</a></li>
                                <li><a href="{{route('front.media.references')}}">References</a></li>
                                <li><a href="{{route('front.media.accomplishments')}}">Accomplishments</a></li>
                                <li><a href="{{route('front.media.tech-program')}}">Tech meeting program</a></li>
                                <li><a href="{{route('front.media.pitch-your-idea')}}">Pitch your idea</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-toggle">Join us <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"
                                style="height: 0; overflow: hidden; transition: height 0.5s ease; position: relative;">
                                <li><a href="{{route('front.join-us.get-funded')}}">Get Funded</a></li>
                                <li><a href="{{route('front.join-us.build-mmp')}}">Build MMP</a></li>
                                <li><a href="{{route('front.join-us.slc-model')}}">Our SLC Model</a></li>
                                <li><a href="{{route('front.join-us.grow-sales')}}">Grow Sales</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('front.partner-now')}}">Partner Now</a></li>
                        <li><a href="{{route('front.ai-for-all')}}">AI for All</a></li>
                        <li><a href="{{route('front.get-access')}}">Get All Access Pass</a></li>
                        <!-- <li><a href="/blogs/">digital trends</a></li> -->
                        <li><a href="{{ route('front.contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="social-icons-head">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/designlayeragencyllc">
                            {{-- <img
                                    src="{{ asset('assets/images/facebook-head.svg') }}" alt="facebook"
                                    class="lazy"> --}}
                                    <i class="fa-brands fa-facebook-f "></i>
                                </a></li>
                        <li>
                            <a target="_blank" href="https://www.whatsapp.com">
                            <i class="fa-brands fa-whatsapp"></i>
                            </a>
                      </li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/83519829/">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        </li>
                        <li><a target="_blank" href="https://www.instagram.com/designlayeragency/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
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
