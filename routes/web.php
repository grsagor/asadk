<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LicenseTypeController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\TemplateController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontendController::class)->group(function() {
    Route::get('/', 'index')->name('front.index');
    Route::get('/portfolio', 'portfolio')->name('front.portfolio');
    Route::get('/about', 'about')->name('front.about');
    Route::get('/programs/raise-fund', 'programsRaiseFund')->name('front.programs.raise-fund');
    Route::get('/programs/tech-cofounder', 'programstechCofounder')->name('front.programs.tech-cofounder');
    Route::get('/programs/franchise', 'programsFranchise')->name('front.programs.franchise');
    Route::get('/programs/launch-business', 'programsLaunchBusiness')->name('front.programs.launch-business');
    Route::get('/programs/grow-startup', 'programsGrowStartup')->name('front.programs.grow-startup');
    Route::get('/programs/technical-development', 'programsTechnicalDevelopment')->name('front.programs.technical-development');
    Route::get('/programs/new-markets', 'programsNewMarkets')->name('front.programs.new-markets');
    Route::get('/programs/scheme-outcome', 'programsSchemeOutcome')->name('front.programs.scheme-outcome');
    Route::get('/programs/growth-program', 'programsGrowthProgram')->name('front.programs.growth-program');
    Route::get('/programs/startup-launchers', 'programsStartupLaunchers')->name('front.programs.startup-launchers');
    Route::get('/programs/idea-survival', 'programsIdeaSurvival')->name('front.programs.idea-survival');
    Route::get('/programs/virtual-company', 'programsVirtualCompany')->name('front.programs.virtual-company');
    Route::get('/programs/workload-swap', 'programsWorkloadSwap')->name('front.programs.workload-swap');
    Route::get('/programs/collaboration', 'programsCollaboration')->name('front.programs.collaboration');
    Route::get('/programs/network', 'programsNetwork')->name('front.programs.network');
    Route::get('/programs/mutual-relationship', 'programsMutualRelationship')->name('front.programs.mutual-relationship');
    Route::get('/programs/resource-sharing', 'programsResourceSharing')->name('front.programs.resource-sharing');
    Route::get('/programs/general-facilities', 'programsGeneralFacilities')->name('front.programs.general-facilities');
    Route::get('/programs/community-facilities', 'programsCommunityFacilities')->name('front.programs.community-facilities');
    Route::get('/programs/joint-ownership', 'programsJointOwnership')->name('front.programs.joint-ownership');
    Route::get('/programs/lms', 'programsLMS')->name('front.programs.lms');
    Route::get('/programs/free-education', 'programsFreeEducation')->name('front.programs.free-education');
    Route::get('/programs/umbrella', 'programsUmbrella')->name('front.programs.umbrella');

    Route::get('/services', 'services')->name('front.services');

    Route::get('/services/talk-to-sme', 'servicesTalkToSme')->name('front.services.talk-to-sme');
    Route::get('/services/business-plans', 'servicesBusinessPlans')->name('front.services.business-plans');
    Route::get('/services/design-development', 'servicesDesignDevelopment')->name('front.services.design-development');
    Route::get('/services/managed-services/collaboration', 'servicesCollaborationService')->name('front.services.managed-services.collaboration');
    Route::get('/services/managed-services/marketing', 'servicesMarketingService')->name('front.services.managed-services.marketing');
    Route::get('/services/managed-services/technology', 'servicesTechnologyService')->name('front.services.managed-services.technology');
    Route::get('/services/managed-services/sales', 'servicesSalesService')->name('front.services.managed-services.sales');
    Route::get('/services/managed-services/maintenance', 'servicesMaintenanceService')->name('front.services.managed-services.maintenance');
    Route::get('/services/managed-services/software', 'servicesSoftwareService')->name('front.services.managed-services.software');
    Route::get('/services/managed-services/workforce', 'servicesWorkforceService')->name('front.services.managed-services.workforce');
    Route::get('/services/managed-services/workswap', 'servicesWorkSwapService')->name('front.services.managed-services.workswap');
    Route::get('/services/managed-services/outsourcing', 'servicesOutsourcingService')->name('front.services.managed-services.outsourcing');
    Route::get('/services/managed-services/technopreneur', 'servicesTechnopreneurService')->name('front.services.managed-services.technopreneur');
    Route::get('/services/managed-services/cto', 'servicesCTOService')->name('front.services.managed-services.cto');
    Route::get('/services/managed-services/teams', 'servicesTeamsService')->name('front.services.managed-services.teams');
    Route::get('/services/funding-sources/venture-capital', 'servicesVentureCapital')->name('front.services.funding-sources.venture-capital');
    Route::get('/services/funding-sources/business-loans', 'servicesBusinessLoans')->name('front.services.funding-sources.business-loans');
    Route::get('/services/funding-sources/grants', 'servicesGrants')->name('front.services.funding-sources.grants');
    Route::get('/services/funding-sources/crowdfunding', 'servicesCrowdfunding')->name('front.services.funding-sources.crowdfunding');
    Route::get('/services/funding-for/advertisement', 'servicesFundingAdvertisement')->name('front.services.funding-for.advertisement');
    Route::get('/services/funding-for/contact-center', 'servicesFundingContactCenter')->name('front.services.funding-for.contact-center');
    Route::get('/services/funding-for/smb-startups', 'servicesFundingSmb')->name('front.services.funding-for.smb-startups');
    Route::get('/services/funding-for/education', 'servicesFundingEducation')->name('front.services.funding-for.education');
    Route::get('/services/funding-for/digital-space', 'servicesFundingDigital')->name('front.services.funding-for.digital-space');
    Route::get('/services/funding-for/ecommerce', 'servicesFundingEcommerce')->name('front.services.funding-for.ecommerce');


    Route::get('/services/funding-steps/valuation', 'servicesStartupValuation')->name('front.services.funding-steps.valuation');
    Route::get('/services/funding-steps/planning', 'servicesPlanningCapital')->name('front.services.funding-steps.planning');
    Route::get('/services/funding-steps/negotiations', 'servicesNegotiations')->name('front.services.funding-steps.negotiations');
    Route::get('/services/funding-steps/pitch', 'servicesPitchStartup')->name('front.services.funding-steps.pitch');

    Route::get('/services/fund-your-startup/tech-startups', 'servicesFundingTech')->name('front.services.fund-your-startup.tech-startups');
    Route::get('/services/fund-your-startup/business-growth', 'servicesFundingGrowth')->name('front.services.fund-your-startup.business-growth');

    Route::get('/services/review-materials/business-plan', 'servicesBusinessPlan')->name('front.services.review-materials.business-plan');
    Route::get('/services/review-materials/pitch-deck', 'servicesPitchDeck')->name('front.services.review-materials.pitch-deck');
    Route::get('/services/review-materials/financial', 'servicesFinancialSpeculation')->name('front.services.review-materials.financial');


    Route::get('/services/funding-stages/early', 'servicesEarlyFunding')->name('front.services.funding-stages.early');
    Route::get('/services/funding-stages/series', 'servicesSeriesFunding')->name('front.services.funding-stages.series');

    Route::get('/services/real-estate', 'servicesrealEstate')->name('front.services.real-estate');
    Route::get('/services/real-estate-projects', 'servicesrealEstateProjects')->name('front.services.real-estate-projects');

    Route::get('/services/business-empowerment/business-hacks', 'servicesBusinessHacks')->name('front.services.business-empowerment.business-hacks');
    Route::get('/services/business-empowerment/hotel-development', 'servicesHotelDevelopment')->name('front.services.business-empowerment.hotel-development');
    Route::get('/services/business-empowerment/schools-development', 'servicesSchoolsDevelopment')->name('front.services.business-empowerment.schools-development');
    Route::get('/services/business-empowerment/healthcare-development', 'servicesHealthcareDevelopment')->name('front.services.business-empowerment.healthcare-development');

    Route::get('/services/franchise-services/franchise-opportunities', 'servicesFranchiseOpportunities')->name('front.services.franchise-services.franchise-opportunities');
    Route::get('/services/franchise-services/franchise-development', 'servicesFranchiseDevelopment')->name('front.services.franchise-services.franchise-development');
    Route::get('/services/franchise-services/franchise-guidance', 'servicesFranchiseGuidance')->name('front.services.franchise-services.franchise-guidance');
    Route::get('/services/franchise-services/franchise-trends', 'servicesFranchiseTrends')->name('front.services.franchise-services.franchise-trends');
    Route::get('/services/franchise-services/franchise-models', 'servicesFranchiseModels')->name('front.services.franchise-services.franchise-models');
    Route::get('/services/franchise-services/franchise-revenue', 'servicesFranchiseRevenue')->name('front.services.franchise-services.franchise-revenue');
    Route::get('/services/franchise-services/franchise-expansion', 'servicesFranchiseExpansion')->name('front.services.franchise-services.franchise-expansion');
    Route::get('/services/franchise-services/franchise-plan', 'servicesFranchisePlan')->name('front.services.franchise-services.franchise-plan');

    Route::get('/services/idea-validation/proof-of-concept', 'servicesProofOfConcept')->name('front.services.idea-validation.proof-of-concept');
    Route::get('/services/idea-validation/software-prototype', 'servicesSoftwarePrototype')->name('front.services.idea-validation.software-prototype');
    Route::get('/services/idea-validation/mvp-development', 'servicesMVPDevelopment')->name('front.services.idea-validation.mvp-development');
    Route::get('/services/idea-validation/product-costing', 'servicesProductCosting')->name('front.services.idea-validation.product-costing');

    Route::get('/services/tech-services/software-design', 'servicesSoftwareDesign')->name('front.services.tech-services.software-design');
    Route::get('/services/tech-services/web-applications', 'servicesWebApplications')->name('front.services.tech-services.web-applications');
    Route::get('/services/tech-services/mobile-design', 'servicesMobileDesign')->name('front.services.tech-services.mobile-design');

    Route::get('/services/sales-services/sales-service', 'servicesSalesAsService')->name('front.services.sales-services.sales-service');
    Route::get('/services/sales-services/sales-consulting', 'servicesSalesConsulting')->name('front.services.sales-services.sales-consulting');

    Route::get('/services/step-up-services/business-development-services', 'servicesBusinessDevelopmentServices')->name('front.services.step-up-services.business-development-services');
    Route::get('/services/step-up-services/business-growth', 'servicesBusinessGrowth')->name('front.services.step-up-services.business-growth');
    Route::get('/services/step-up-services/business-development', 'servicesBusinessDevelopment')->name('front.services.step-up-services.business-development');
    Route::get('/services/step-up-services/market-research', 'servicesMarketResearch')->name('front.services.step-up-services.market-research');
    
    Route::get('/community/our-team/get-to-know', 'communityGetToKnow')->name('front.community.our-team.get-to-know');

    Route::get('/community/Entrepreneur/worked-with', 'communityEntrepreneurWorkedWith')->name('front.community.Entrepreneur.worked-with');
    Route::get('/community/Entrepreneur/network', 'communityEntrepreneurNetwork')->name('front.community.Entrepreneur.network');
    Route::get('/community/Entrepreneur/join', 'communityJoinEntrepreneur')->name('front.community.Entrepreneur.join');
    Route::get('/community/Entrepreneur/women-support', 'communitySupportWomenEntrepreneurs')->name('front.community.Entrepreneur.women-support');
    Route::get('/community/Entrepreneur/female-founder', 'communityFemaleFounder')->name('front.community.Entrepreneur.female-founder');

    Route::get('/community/Partner/partnerships-more', 'communityPartnershipsMore')->name('front.community.Partner.partnerships-more');
    Route::get('/community/Partner/partners-network', 'communityPartnersNetwork')->name('front.community.Partner.partners-network');
    Route::get('/community/Partner/join-as-partner', 'communityJoinAsPartner')->name('front.community.Partner.join-as-partner');
    Route::get('/community/Partner/global-network', 'communityGlobalNetwork')->name('front.community.Partner.global-network');
    Route::get('/community/Partner/representatives-network', 'communityRepresentativesNetwork')->name('front.community.Partner.representatives-network');
    Route::get('/community/Partner/join-as-representative', 'communityJoinAsRepresentative')->name('front.community.Partner.join-as-representative');

    Route::get('/community/investor/our-investors-network', 'communityOurInvestorsNetwork')->name('front.community.investor.our-investors-network');
    Route::get('/community/investor/investors-network', 'communityInvestorsNetwork')->name('front.community.investor.investors-network');
    Route::get('/community/investor/join-as-investor', 'communityJoinAsInvestor')->name('front.community.investor.join-as-investor');

    Route::get('/community/mentor/our-mentors', 'communityOurMentors')->name('front.community.mentor.our-mentors');
    Route::get('/community/mentor/join-as-mentor', 'communityJoinAsMentor')->name('front.community.mentor.join-as-mentor');
    Route::get('/community/mentor/find-mentor', 'communityFindMentor')->name('front.community.mentor.find-mentor');

    Route::get('/centralized-learning-program/learning-center/content-region', 'centralizedProgramContentRegion')->name('front.centralized-learning-program.learning-center.content-region');
    Route::get('/centralized-learning-program/learning-center/design-develop', 'centralizedProgramDesignDevelop')->name('front.centralized-learning-program.learning-center.design-develop');
    Route::get('/centralized-learning-program/learning-center/best-keywords', 'centralizedProgramBestKeywords')->name('front.centralized-learning-program.learning-center.best-keywords');
    Route::get('/centralized-learning-program/learning-center/entrepreneurs-blog', 'centralizedProgramEntrepreneursBlog')->name('front.centralized-learning-program.learning-center.entrepreneurs-blog');
    Route::get('/centralized-learning-program/learning-center/subject-matter-experts', 'centralizedProgramSubjectMatterExperts')->name('front.centralized-learning-program.learning-center.subject-matter-experts');
    Route::get('/centralized-learning-program/learning-center/catchwords', 'centralizedProgramCatchwords')->name('front.centralized-learning-program.learning-center.catchwords');
    Route::get('/centralized-learning-program/learning-center/discussions', 'centralizedProgramDiscussions')->name('front.centralized-learning-program.learning-center.discussions');
    Route::get('/centralized-learning-program/learning-center/q&a', 'centralizedProgramQA')->name('front.centralized-learning-program.learning-center.q&a');
    Route::get('/centralized-learning-program/learning-center/data-visualization', 'centralizedProgramDataVisualization')->name('front.centralized-learning-program.learning-center.data-visualization');
    Route::get('/centralized-learning-program/learning-center/blogs', 'centralizedProgramBlogs')->name('front.centralized-learning-program.learning-center.blogs');

    Route::get('/media/testimonials', 'mediaTestimonials')->name('front.media.testimonials');
    Route::get('/media/observants-declaration', 'mediaObservantsDeclaration')->name('front.media.observants-declaration');
    Route::get('/media/success-stories', 'mediaSuccessStories')->name('front.media.success-stories');
    Route::get('/media/companies-collaborated', 'mediaCompaniesCollaborated')->name('front.media.companies-collaborated');
    Route::get('/media/offer-help', 'mediaOfferHelp')->name('front.media.offer-help');
    Route::get('/media/our-activities', 'mediaOurActivities')->name('front.media.our-activities');
    Route::get('/media/investments', 'mediaInvestments')->name('front.media.investments');
    Route::get('/media/videos-press', 'mediaVideos')->name('front.media.videos-press');
    Route::get('/media/references', 'mediaReferences')->name('front.media.references');
    Route::get('/media/accomplishments', 'mediaAccomplishments')->name('front.media.accomplishments');
    Route::get('/media/tech-program', 'mediaTechProgram')->name('front.media.tech-program');
    Route::get('/media/pitch-your-idea', 'mediaPitchYourIdea')->name('front.media.pitch-your-idea');

    Route::get('/join-us/get-funded', 'joinUsGetFunded')->name('front.join-us.get-funded');
    Route::get('/join-us/build-mmp', 'joinUsBuildMMP')->name('front.join-us.build-mmp');
    Route::get('/join-us/slc-model', 'joinUsOurSLCModel')->name('front.join-us.slc-model');
    Route::get('/join-us/grow-sales', 'joinUsGrowSales')->name('front.join-us.grow-sales');

    Route::get('/partner-now', 'partnerNow')->name('front.partner-now');
    Route::get('/ai-for-all', 'aiForAll')->name('front.ai-for-all');
    Route::get('/get-access', 'GetAccess')->name('front.get-access');


    Route::get('/services/fully-managed', 'servicesFullyManaged')->name('front.services.fully-managed');
    Route::get('/services/business-health-checkup', 'servicesBusinessHealthCheckup')->name('front.services.business-health-checkup');
    Route::get('/services/supervision-reporting', 'servicesSupervisionReporting')->name('front.services.supervision-reporting');

    Route::get('/contact', 'contact')->name('front.contact');
    Route::post('/contact/submit', 'submitContact')->name('contact.submit');
    Route::get('/templates', 'templates')->name('front.templates');
    Route::get('/templates/business-template', 'templateShow')->name('front.templates.show');
    Route::get('/templates/portfolio-template', 'templateShow')->name('front.templates.show');
    Route::get('/templates/ecommerce-template', 'templateShow')->name('front.templates.show');
});

Route::controller(FrontendController::class)->group(function(){
    Route::get('reset-password', 'forgotPassword');
    Route::any('reset-otp-send', 'resetOtpSend');
    Route::any('change-password', 'otp');
    Route::get('login', 'login')->name('login');
    Route::get('registration', 'registration');
});

// Auth route
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('signup', [LoginController::class, 'signup'])->name('registration.post');

// admin route start
Route::get('/admin', function () {return view('backend.auth.login');})->name('admin');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('profile', [LoginController::class, 'adminProfile'])->name('admin.profile');
    Route::post('profile/update', [LoginController::class, 'adminProfileUpdate'])->name('admin.profile.update');
    Route::get('profile/setting', [LoginController::class, 'adminProfileSetting'])->name('admin.profile.setting');
    Route::post('profile/change/password', [LoginController::class, 'adminChangePassword'])->name('admin.change.password');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('/get/list', [UserController::class, 'getList']);
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::any('/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
        Route::post('/change', [UserController::class, 'changePassword'])->name('admin.user.changepassword');
    });

    Route::group(['prefix' => '/role'], function () {
        Route::get('/generate/right/{mdule_name}', [RoleController::class, 'generate'])->name('admin.role.right.generate');
        Route::get('/', [RoleController::class, 'index'])->name('admin.role');
        Route::get('/get/role/list', [RoleController::class, 'getRoleList']);
        Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.role.edit');
        Route::any('/update/{id}', [RoleController::class, 'update'])->name('admin.role.update');
        Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('admin.role.delete');
        Route::get('/right', [RoleController::class, 'right'])->name('admin.role.right');
        Route::get('/get/right/list', [RoleController::class, 'getRightList']);
        Route::post('/right/store', [RoleController::class, 'rightStore'])->name('admin.role.right.store');
        Route::get('/right/edit/{id}', [RoleController::class, 'editRight'])->name('admin.role.right.edit');
        Route::any('/right/update/{id}', [RoleController::class, 'roleRightUpdate'])->name('admin.role.right.update');
        Route::get('/right/delete/{id}', [RoleController::class, 'rightDelete'])->name('admin.role.right.delete');
    });

    Route::group(['prefix' => '/setting'], function () {
        Route::get('/general', [SettingController::class, 'general'])->name('admin.setting.general');
        Route::get('/static-content', [SettingController::class, 'staticContent'])->name('admin.setting.static.content');
        Route::get('/legal-content', [SettingController::class, 'legalContent'])->name('admin.setting.legal.content');
        Route::post('/update', [SettingController::class, 'update'])->name('admin.setting.update');
        Route::get('/change-language', [SettingController::class, 'changeLanguage'])->name('admin.setting.change.language');
    });

    Route::controller(SkillController::class)->prefix('skills')->name('admin.skills.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/list', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });

    // Template Marketplace Routes
    Route::prefix('templates')->controller(TemplateController::class)->name('admin.templates.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/list', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
        Route::delete('/image/{id}', 'deleteImage')->name('image.delete');
        Route::put('/status/{id}', 'updateStatus')->name('status');
        Route::post('/feature/add', 'addFeature')->name('feature.add');
        Route::delete('/feature/{id}', 'deleteFeature')->name('feature.delete');
        Route::post('/license/add', 'addLicense')->name('license.add');
        Route::delete('/license/{id}', 'deleteLicense')->name('license.delete');
        Route::delete('/license/{id}', 'deleteLicense')->name('license.delete');
        Route::get('templates/download/{id}', 'download')->name('templates.download');
    });

    Route::prefix('categories')->controller(CategoryController::class)->name('admin.categories.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/list', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });
    Route::prefix('license-types')->controller(LicenseTypeController::class)->name('admin.license.types.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/list', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('orders')->controller(OrderController::class)->name('admin.orders.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/list', 'list')->name('list');
        Route::get('/create', 'index')->name('create');
        Route::get('/show/{id}', 'show')->name('show');
        Route::put('/status/{id}', 'updateStatus')->name('status');
    });

    Route::prefix('tags')->controller(TagController::class)->name('admin.tags.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/list', 'list')->name('list');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'delete')->name('delete');
    });
});

Route::get('admin/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('admin/logout', [LoginController::class, 'logout'])->name('logout');