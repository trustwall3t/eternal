<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\Faq;
use App\Models\Testimony;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\TermsPrivacy;
use Illuminate\Support\Facades\DB;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\User_plans;
use App\Models\Tp_Transaction;
use App\Mail\NewRoi;
use App\Mail\endplan;
use App\Models\Mt4Details;
use App\Traits\BinanceApi;
use App\Traits\Coinpayment;
use Carbon\Carbon;

class HomePageController extends Controller
{
    public function index(){
        $settings=Settings::where('id', '=', '1')->first();
        //sum total deposited
        $total_deposits = Deposit::where('status','processed')->sum('amount');
        
        $this->automaticRoi();
        
        //sum total withdrawals
        $total_withdrawals = Withdrawal::where('status','processed')->sum('amount');
        
        
        
      
        return view('home.index')->with(array(
            'settings' => $settings,
            'total_users' => User::count(),
            'plans' => Plans::all(),
            'total_deposits' => $total_deposits,
            'total_withdrawals' => $total_withdrawals,
            'faqs'=> Faq::orderby('id', 'desc')->get(),
            'test'=> Testimony::orderby('id', 'desc')->get(),
            'withdrawals' => Withdrawal::orderby('id','DESC')->take(7)->get(),
            'deposits' => Deposit::orderby('id','DESC')->take(7)->get(),
            'title' => $settings->site_title,
            'mplans' => Plans::where('type','Main')->get(),
            'pplans' => Plans::where('type','Promo')->get(),
        ));
    }
    public function futures(){
        return view('home.futuretrading');
    }
    public function forex(){
        return view('home.forextrading');
    }
    public function stocks(){
        return view('home.stocktrading');
    }
      public function advancetrading(){
        return view('home.advancetrading');
    }
     public function oilandgas(){
        return view('home.oilandgastrading');
    }
      public function livetrading(){
        return view('home.livetrading');
    }
      public function softwares(){
        return view('home.softwares');
    }
      public function optioncopy(){
        return view('home.optioncopytarding');
    }
public function investment(){
        $settings=Settings::where('id', '=', '1')->first();
        //sum total deposited
        $total_deposits = Deposit::where('status','processed')->sum('amount');
        
        
        
        //sum total withdrawals
        $total_withdrawals = Withdrawal::where('status','processed')->sum('amount');
        
        
        
      
        return view('home.investment')->with(array(
            'settings' => $settings,
            'total_users' => User::count(),
            'plans' => Plans::all(),
            'total_deposits' => $total_deposits,
            'total_withdrawals' => $total_withdrawals,
            'faqs'=> Faq::orderby('id', 'desc')->get(),
            'test'=> Testimony::orderby('id', 'desc')->get(),
            'withdrawals' => Withdrawal::orderby('id','DESC')->take(7)->get(),
            'deposits' => Deposit::orderby('id','DESC')->take(7)->get(),
            'title' => $settings->site_title,
            'mplans' => Plans::where('type','Main')->get(),
            'pplans' => Plans::where('type','Promo')->get(),
        ));
    }


public function statistics(){
        $settings=Settings::where('id', '=', '1')->first();
        //sum total deposited
        $total_deposits = Deposit::where('status','processed')->sum('amount');
        
        
        
        //sum total withdrawals
        $total_withdrawals = Withdrawal::where('status','processed')->sum('amount');
        
        
        
      
        return view('home.statistics')->with(array(
            'settings' => $settings,
            'total_users' => User::count(),
            'plans' => Plans::all(),
            'total_deposits' => $total_deposits,
            'total_withdrawals' => $total_withdrawals,
            'faqs'=> Faq::orderby('id', 'desc')->get(),
            'test'=> Testimony::orderby('id', 'desc')->get(),
            'withdrawals' => Withdrawal::orderby('id','DESC')->take(7)->get(),
            'deposits' => Deposit::orderby('id','DESC')->take(7)->get(),
            'title' => $settings->site_title,
            'mplans' => Plans::where('type','Main')->get(),
            'pplans' => Plans::where('type','Promo')->get(),
        ));
    }



    //Licensing and registration route
    public function licensing(){
        
        return view('home.licensing')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
            'pplans' => Plans::where('type','Promo')->get(),
            'title' => 'Licensing, regulation and registration',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //Terms of service route
    public function terms(){
        
        return view('home.terms')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
            'title' => 'Terms of Service',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //Privacy policy route
    public function privacy(){
        $terms = TermsPrivacy::find(1);
        if ($terms->useterms == 'no') {
           return redirect()->back();
        }
        return view('home.privacy')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
            'title' => 'Privacy Policy',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //FAQ route
    public function faq(){
        
        return view('home.faq')
        ->with(array(
            'title' => 'FAQs',
            'faqs'=> Faq::orderby('id', 'desc')->get(),
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //about route
    public function about(){
        
        return view('home.about')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
                
            'title' => 'About',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //Contact route
    public function contact(){
        return view('home.contact')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
                'pplans' => Plans::where('type','Promo')->get(),
                
            'title' => 'Contact',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

  
 public function verify(Request $request){
        
$n1 = rand(0,9);
$n2 = rand(0,9);
$n3 = rand(0,9);
$n4 = rand(0,9);
$n5 = rand(0,9);
$n6 = rand(0,9);

$captcha = "$n1$n2$n3$n4$n5$n6";
  $request->session()->put('code',$captcha);

        return view('home.verify')
        ->with(array(
          
            'captcha'=> $captcha,
            'title' => 'verify',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }
    
    
    
     public function codeverify(Request $request){
      $code =  $request->session()->get('code');
      if($code == $request->code){
          
           return redirect()->route('register');
      }
       
       
       return redirect()->back()->with('success', 'Invalid Code Supplied');

    }
    //send contact message to admin email
    public function sendcontact(Request $request){

        $settings=Settings::where('id','1')->first();
        $message = substr(wordwrap($request['message'],70),0,350);
        $subject = "$request->subject, my email $request->email";

        Mail::to($settings->contact_email)->send(new NewNotification($message, $subject, 'Admin'));
        return redirect()->back()
        ->with('success', ' Your message was sent successfully!');
    }
    
    public function automaticRoi()
    {
        $settings = Settings::find(1);

        if ($settings->trade_mode == 'on') {
            //get user plans
            $usersPlans = User_plans::where('active', 'yes')->get();

            //get current date and time to be used for calculations of ROI
            $now = now();
            //return $now;

            //logic to add auto roi
            foreach ($usersPlans as $plan) {
                //get plan
                $dplan = Plans::firstWhere('id', $plan->plan);

                //get user
                $user = User::firstWhere('id', $plan->user);

                //know the plan increment interval
                if ($dplan->increment_interval == "Monthly") {
                    $nextDrop = $plan->last_growth->addDays(27);
                } elseif ($dplan->increment_interval == "Weekly") {
                    $nextDrop = $plan->last_growth->addDays(6);
                } elseif ($dplan->increment_interval == "Daily") {
                    $nextDrop = $plan->last_growth->addHours(23);
                } elseif ($dplan->increment_interval == "Hourly") {
                    $nextDrop = $plan->last_growth->addMinutes(54);
                } elseif ($dplan->increment_interval == "Every 30 Minutes") {
                    $nextDrop = $plan->last_growth->addMinutes(24);
                } else {
                    $nextDrop = $plan->last_growth->addMinutes(7);
                }

                //conditions
                $condition = $now->lessThanOrEqualTo($plan->expire_date) && $user->trade_mode == 'on';

                $condition2 = $now->greaterThan($plan->expire_date);

                //calculate increment
                if ($dplan->increment_type == "Percentage") {
                    $increment = (intval($plan->amount)  * $dplan->increment_amount) / 100;
                } else {
                    $increment = $plan->increment_amount;
                }

                if ($condition) {

                    if ($now->isWeekday() or $settings->weekend_trade == 'on') {

                        if ($now->greaterThanOrEqualTo($plan->last_growth)) {

                            User::where('id', $plan->user)
                                ->update([
                                    'roi' => $user->roi + $increment,
                                    'account_bal' => $user->account_bal + $increment,
                                ]);

                            //save to transactions history
                            $th = new Tp_Transaction();
                            $th->plan = $dplan->name;
                            $th->user = $user->id;
                            $th->amount = $increment;
                            $th->user_plan_id = $plan->id;
                            $th->type = "ROI";
                            $th->save();

                            User_plans::where('id', $plan->id)
                                ->update([
                                    'last_growth' => $nextDrop,
                                    'profit_earned' => $plan->profit_earned + $increment,
                                ]);

                            if ($user->sendroiemail == 'Yes') {
                                //send email notification
                                $date = Carbon::now()->toDateTimeString();
                                Mail::to($user->email)->send(new NewRoi($user, $dplan->name, $increment, $date, 'New Return on Investment(ROI)'));
                            }
                        }
                    }
                    if ($now->isWeekend() and $settings->weekend_trade != 'on') {
                        if ($now->greaterThanOrEqualTo($plan->last_growth)) {
                            User_plans::where('id', $plan->id)
                                ->update([
                                    'last_growth' => $nextDrop,
                                ]);
                        }
                    }
                }

                if ($condition2) {
                    //release capital
                    if ($settings->return_capital) {

                        User::where('id', $plan->user)
                            ->update([
                                'account_bal' => $user->account_bal + $plan->amount,
                            ]);

                        //save to transactions history
                        $th = new Tp_transaction();
                        $th->plan = $dplan->name;
                        $th->user = $plan->user;
                        $th->amount = $plan->amount;
                        $th->type = "Investment capital";
                        $th->save();
                    }


                    //plan expiredP
                    User_plans::where('id', $plan->id)
                        ->update([
                            'active' => "expired",
                        ]);

                    if ($user->sendinvplanemail == "Yes") {
                        //send email notification
                        $objDemo = new \stdClass();
                        $objDemo->receiver_email = $user->email;
                        $objDemo->receiver_plan = $dplan->name;
                        $objDemo->received_amount = "$settings->currency$plan->amount";
                        $objDemo->sender = $settings->site_name;
                        $objDemo->receiver_name = $user->name;
                        $objDemo->date = \Carbon\Carbon::Now();
                        $objDemo->subject = "Investment plan closed";
                        Mail::to($user->email)->send(new endplan($objDemo));
                    }
                }
            }
        }
    }
}
