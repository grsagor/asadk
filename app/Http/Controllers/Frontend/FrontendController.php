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
        return view('front.about');
    }

    public function contact() {
        return view('front.contact');
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

    public function templateShow() {
        return view('front.templates.show');
    }

    public function catchAll(){
        return view('frontend.pages.error');
    }
}
