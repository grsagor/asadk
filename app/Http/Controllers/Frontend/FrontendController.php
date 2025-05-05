<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index() {
        $technologies = [
            (object)['name' => 'Laravel', 'skill' => '99.99'],
            (object)['name' => 'ReactJS', 'skill' => '90'],
            (object)['name' => 'Next.js', 'skill' => '85'],
            (object)['name' => 'PHP', 'skill' => '75'],
            (object)['name' => 'Wordpress', 'skill' => '60'],
            (object)['name' => 'WooCommerce & WordPress Development', 'skill' => '55'],
            (object)['name' => 'JavaScript (Vanilla JS, ES6+)', 'skill' => '90'],
            (object)['name' => 'jQuery', 'skill' => '90'],
            (object)['name' => 'Bootstrap & Tailwind CSS', 'skill' => '90'],
            (object)['name' => 'HTML5', 'skill' => '90'],
            (object)['name' => 'CSS3', 'skill' => '90'],
            (object)['name' => 'Node.js', 'skill' => '70'],
        ];

        $services = [
            (object) [
                'title' => 'Next.js Development',
                'description' => 'I specialize in developing high-performance, SEO-friendly web applications using Next.js. By leveraging its powerful features like server-side rendering, static site generation, and API routes, I create fast, scalable, and dynamic websites that provide an exceptional user experience and improve search engine rankings.',
                'icon' => 'fa fa-cogs',
            ],
            (object) [
                'title' => 'WordPress Customization',
                'description' => 'I offer complete WordPress website customization, including theme design, plugin development, and full site functionality enhancements. Whether you need a custom WordPress theme or modifications to existing ones, I ensure your site is tailored to your business needs, with a focus on performance, usability, and SEO.',
                'icon' => 'fa fa-wordpress',
            ],
            (object) [
                'title' => 'JavaScript Solutions',
                'description' => 'I provide expert JavaScript development, optimizing site performance and adding interactive features. From debugging issues to writing custom JavaScript for dynamic functionalities, I ensure smooth and responsive behavior for web applications, enhancing user engagement with modern JavaScript techniques and libraries.',
                'icon' => 'fa fa-code',
            ],
            (object) [
                'title' => 'Responsive Web Design',
                'description' => 'I design websites that are fully responsive, ensuring they look and work flawlessly on all devices. By using a mobile-first approach, I create websites that automatically adjust to different screen sizes, offering users a consistent and engaging experience whether they’re on smartphones, tablets, or desktops.',
                'icon' => 'fa fa-mobile',
            ],
            (object) [
                'title' => 'API Integration',
                'description' => 'I integrate third-party APIs into websites to extend their functionality. From payment gateways to social media services, I ensure that external services are seamlessly incorporated into your web applications. My expertise in API integration allows your website to offer dynamic and real-time features, enhancing its value and usability.',
                'icon' => 'fa fa-plug',
            ],
        ];

        $data = [
            'technologies' => $technologies,
            'services' => $services,
        ];
        return view('front.pages.home.index', $data);
    }
    public function registration() {
        App::setLocale(Session::get('language'));
        return view('auth.registration');
    }

    public function login() {
        App::setLocale(Session::get('language'));
        return view('auth.login');
    }

    public function forgotPassword() {
        App::setLocale(Session::get('language'));
        return view('auth.forgotPassword');
    }

    public function resetOtpSend(Request $request){

        if(User::where('email', $request->email)->exists()){
            $email = $request->email;
            $otps = random_int(100000, 999999);
            $subject = 'Password Reset';
            $data['user'] = User::where('email', $request->email)->first();
            $data['otp'] = $otps;
            $data['message'] = 'Your confirmation code is below — enter it in your open browser window and we will help you get changed password. Please do not share the code others';
            Helper::sendEmail($email, $subject, $data, 'resetpassword');

            $otp = new Otp();
            $otp->email = $request->email;
            $otp->otp = $otps;
            $otp->save();

            return view('auth.otp', compact('email'));
        }else{
            return redirect()->back()->withErrors(['message' => 'There is no account with this email!']);
        }
    }

    public function otp(Request $request) {
        App::setLocale(Session::get('language'));
        if ($request->email && $request->otp) {
            Validator::make($request->all(), [
                'email' => 'required',
                'otp' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required_with:password|same:password|min:6',
            ]);

            if (Helper::checkotp($request->email, $request->otp)) {
                $email = $request->email;
                $user = User::where('email', $request->email)->first();
                $user->password = Hash::make($request->password);
                if ($user->save()) {
                    $otp = Otp::where('email', $request->email)->where('otp', $request->otp)->first();
                    $otp->status = 1;
                    $otp->save();
                    return redirect()->route('admin')->with(['message' => 'Password changed successfully!']);
                }else{
                    return view('auth.otp', compact('email'))->with(['message' => 'OTP invalid or expaired!']);
                }
            }else{
                return view('auth.otp', compact('email'))->with(['message' => 'OTP invalid or expaired!']);
            }
        }else{
            return view('auth.otp');
        }
    }
    
    public function changeLanguage(Request $request){
        $language = $request->input('language');
        Session::put('language', $language);
        return true;
    }

    public function about() {
        return view('front.pages.about.index');
    }
    public function programsRaiseFund() {
        return view('front.pages.programs.raise-fund');
    }
    public function programstechCofounder() {
        return view('front.pages.programs.tech-cofounder');
    }
    public function programsFranchise() {
        return view('front.pages.programs.franchise');
    }
    public function programsLaunchBusiness() {
        return view('front.pages.programs.launch-business');
    }
    public function programsGrowStartup() {
        return view('front.pages.programs.grow-startup');
    }
    public function programsTechnicalDevelopment() {
        return view('front.pages.programs.technical-development');
    }
    public function programsNewMarkets() {
        return view('front.pages.programs.new-markets');
    }
    public function programsSchemeOutcome() {
        return view('front.pages.programs.scheme-outcome');
    }
    public function programsGrowthProgram() {
        return view('front.pages.programs.growth-program');
    }
    public function programsStartupLaunchers() {
        return view('front.pages.programs.startup-launchers');
    }
    public function programsIdeaSurvival() {
        return view('front.pages.programs.idea-survival');
    }
    public function programsVirtualCompany() {
        return view('front.pages.programs.virtual-company');
    }
    public function programsWorkloadSwap() {
        return view('front.pages.programs.workload-swap');
    }
    public function programsCollaboration() {
        return view('front.pages.programs.collaboration');
    }
    public function programsNetwork() {
        return view('front.pages.programs.network');
    }
    public function programsMutualRelationship() {
        return view('front.pages.programs.mutual-relationship');
    }
    public function programsResourceSharing() {
        return view('front.pages.programs.resource-sharing');
    }
    public function programsGeneralFacilities() {
        return view('front.pages.programs.general-facilities');
    }
    public function programsCommunityFacilities() {
        return view('front.pages.programs.community-facilities');
    }
    public function programsJointOwnership() {
        return view('front.pages.programs.joint-ownership');
    }
    public function programsLMS() {
        return view('front.pages.programs.lms');
    }
    public function programsFreeEducation() {
        return view('front.pages.programs.free-education');
    }
    public function programsUmbrella() {
        return view('front.pages.programs.umbrella');
    }



    public function services() {
        return view('front.pages.services.index');
    }

    public function servicesTalkToSme() {
        return view('front.pages.services.talk-to-sme');
    }
    public function servicesBusinessPlans() {
        return view('front.pages.services.business-plans');
    }
    public function servicesDesignDevelopment() {
        return view('front.pages.services.design-development');
    }
    public function servicesCollaborationService() {
        return view('front.pages.services.managed-services.collaboration');
    }
    public function servicesMarketingService() {
        return view('front.pages.services.managed-services.marketing');
    }
    public function servicesTechnologyService() {
        return view('front.pages.services.managed-services.technology');
    }
    public function servicesSalesService() {
        return view('front.pages.services.managed-services.sales');
    }
    public function servicesMaintenanceService() {
        return view('front.pages.services.managed-services.maintenance');
    }
    public function servicesSoftwareService() {
        return view('front.pages.services.managed-services.software');
    }
    public function servicesWorkforceService() {
        return view('front.pages.services.managed-services.workforce');
    }
    public function servicesWorkSwapService() {
        return view('front.pages.services.managed-services.workswap');
    }
    public function servicesOutsourcingService() {
        return view('front.pages.services.managed-services.outsourcing');
    }
    public function servicesTechnopreneurService() {
        return view('front.pages.services.managed-services.technopreneur');
    }
    public function servicesCTOService() {
        return view('front.pages.services.managed-services.cto');
    }
    public function servicesTeamsService() {
        return view('front.pages.services.managed-services.teams');
    }
    public function servicesVentureCapital() {
        return view('front.pages.services.funding-sources.venture-capital');
    }
    public function servicesBusinessLoans() {
        return view('front.pages.services.funding-sources.business-loans');
    }
    public function servicesGrants() {
        return view('front.pages.services.funding-sources.grants');
    }
    public function servicesCrowdfunding() {
        return view('front.pages.services.funding-sources.crowdfunding');
    }
    public function servicesFundingAdvertisement() {
        return view('front.pages.services.funding-for.advertisement');
    }
    public function servicesFundingContactCenter() {
        return view('front.pages.services.funding-for.contact-center');
    }
    public function servicesFundingSmb() {
        return view('front.pages.services.funding-for.smb-startups');
    }
    public function servicesFundingEducation() {
        return view('front.pages.services.funding-for.education');
    }
    public function servicesFundingDigital() {
        return view('front.pages.services.funding-for.digital-space');
    }
    public function servicesFundingEcommerce() {
        return view('front.pages.services.funding-for.ecommerce');
    }

    public function servicesStartupValuation() {
        return view('front.pages.services.funding-steps.valuation');
    }
    public function servicesPlanningCapital() {
        return view('front.pages.services.funding-steps.planning');
    }
    public function servicesNegotiations() {
        return view('front.pages.services.funding-steps.negotiations');
    }
    public function servicesPitchStartup() {
        return view('front.pages.services.funding-steps.pitch');
    }

    public function servicesFundingTech() {
        return view('front.pages.services.fund-your-startup.tech-startups');
    }
    public function servicesFundingGrowth() {
        return view('front.pages.services.fund-your-startup.business-growth');
    }

    public function servicesBusinessPlan() {
        return view('front.pages.services.review-materials.business-plan');
    }
    public function servicesPitchDeck() {
        return view('front.pages.services.review-materials.pitch-deck');
    }
    public function servicesFinancialSpeculation() {
        return view('front.pages.services.review-materials.financial');
    }

    public function servicesEarlyFunding() {
        return view('front.pages.services.funding-stages.early');
    }
    public function servicesSeriesFunding() {
        return view('front.pages.services.funding-stages.series');
    }

    public function servicesrealEstate() {
        return view('front.pages.services.real-estate');
    }
    public function servicesrealEstateProjects() {
        return view('front.pages.services.real-estate-projects');
    }

    public function servicesBusinessHacks() {
        return view('front.pages.services.business-empowerment.business-hacks');
    }
    public function servicesHotelDevelopment() {
        return view('front.pages.services.business-empowerment.hotel-development');
    }
    public function servicesSchoolsDevelopment() {
        return view('front.pages.services.business-empowerment.schools-development');
    }
    public function servicesHealthcareDevelopment() {
        return view('front.pages.services.business-empowerment.healthcare-development');
    }

    public function servicesFranchiseOpportunities() {
        return view('front.pages.services.franchise-services.franchise-opportunities');
    }
    public function servicesFranchiseDevelopment() {
        return view('front.pages.services.franchise-services.franchise-development');
    }
    public function servicesFranchiseGuidance() {
        return view('front.pages.services.franchise-services.franchise-guidance');
    }
    public function servicesFranchiseTrends() {
        return view('front.pages.services.franchise-services.franchise-trends');
    }
    public function servicesFranchiseModels() {
        return view('front.pages.services.franchise-services.franchise-models');
    }
    public function servicesFranchiseRevenue() {
        return view('front.pages.services.franchise-services.franchise-revenue');
    }
    public function servicesFranchiseExpansion() {
        return view('front.pages.services.franchise-services.franchise-expansion');
    }
    public function servicesFranchisePlan() {
        return view('front.pages.services.franchise-services.franchise-plan');
    }

    public function servicesProofOfConcept() {
        return view('front.pages.services.idea-validation.proof-of-concept');
    }
    public function servicesSoftwarePrototype() {
        return view('front.pages.services.idea-validation.software-prototype');
    }
    public function servicesMVPDevelopment() {
        return view('front.pages.services.idea-validation.mvp-development');
    }
    public function servicesProductCosting() {
        return view('front.pages.services.idea-validation.product-costing');
    }

    public function servicesSoftwareDesign() {
        return view('front.pages.services.tech-services.software-design');
    }
    public function servicesWebApplications() {
        return view('front.pages.services.tech-services.web-applications');
    }
    public function servicesMobileDesign() {
        return view('front.pages.services.tech-services.mobile-design');
    }

    public function servicesSalesAsService() {
        return view('front.pages.services.sales-services.sales-service');
    }
    public function servicesSalesConsulting() {
        return view('front.pages.services.sales-services.sales-consulting');
    }

    public function servicesBusinessDevelopmentServices() {
        return view('front.pages.services.step-up-services.business-development-services');
    }
    public function servicesBusinessGrowth() {
        return view('front.pages.services.step-up-services.business-growth');
    }
    public function servicesBusinessDevelopment() {
        return view('front.pages.services.step-up-services.business-development');
    }
    public function servicesMarketResearch() {
        return view('front.pages.services.step-up-services.market-research');
    }

    public function communityGetToKnow() {
        return view('front.pages.community.our-team.get-to-know');
    }

    public function communityEntrepreneurWorkedWith() {
        return view('front.pages.community.Entrepreneur.worked-with');
    }
    public function communityEntrepreneurNetwork() {
        return view('front.pages.community.Entrepreneur.network');
    }
    public function communityJoinEntrepreneur() {
        return view('front.pages.community.Entrepreneur.join');
    }
    public function communitySupportWomenEntrepreneurs() {
        return view('front.pages.community.Entrepreneur.women-support');
    }
    public function communityFemaleFounder() {
        return view('front.pages.community.Entrepreneur.female-founder');
    }

    public function communityPartnershipsMore() {
        return view('front.pages.community.Partner.partnerships-more');
    }
    public function communityPartnersNetwork() {
        return view('front.pages.community.Partner.partners-network');
    }
    public function communityJoinAsPartner() {
        return view('front.pages.community.Partner.join-as-partner');
    }
    public function communityGlobalNetwork() {
        return view('front.pages.community.Partner.global-network');
    }
    public function communityRepresentativesNetwork() {
        return view('front.pages.community.Partner.representatives-network');
    }
    public function communityJoinAsRepresentative() {
        return view('front.pages.community.Partner.join-as-representative');
    }

    public function communityOurInvestorsNetwork() {
        return view('front.pages.community.investor.our-investors-network');
    }
    public function communityInvestorsNetwork() {
        return view('front.pages.community.investor.investors-network');
    }
    public function communityJoinAsInvestor() {
        return view('front.pages.community.investor.join-as-investor');
    }

    public function communityOurMentors() {
        return view('front.pages.community.mentor.our-mentors');
    }
    public function communityJoinAsMentor() {
        return view('front.pages.community.mentor.join-as-mentor');
    }
    public function communityFindMentor() {
        return view('front.pages.community.mentor.find-mentor');
    }


    public function servicesFullyManaged() {
        return view('front.pages.services.fully-managed');
    }
    public function servicesBusinessHealthCheckup() {
        return view('front.pages.services.business-health-checkup');
    }
    public function servicesSupervisionReporting() {
        return view('front.pages.services.supervision-reporting');
    }

    public function contact() {
        return view('front.pages.contact.index');
    }

    public function submitContact(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Here you can add your email sending logic
        // For example:
        /*
        Mail::send('emails.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ], function($message) use ($request) {
            $message->to('your-email@example.com')
                    ->subject('New Contact Form Submission: ' . $request->subject);
        });
        */

        Session::flash('success', 'Thank you for contacting us. We will get back to you soon!');
        return redirect()->back();
    }

    public function templates() {
        return view('front.templates.index');
    }
    public function portfolio() {
        return view('front.pages.portfolio.index');
    }

    public function templateShow() {
        return view('front.templates.show');
    }

    public function catchAll(){
        return view('frontend.pages.error');
    }
}
