<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use PDF;
use DateTime;
use Response;
use Mail;

class frontendController extends Controller{

    public function index()
    {
        $bannershow = DB::table('bannerword')
        ->get();
        return view('frontend.index',
        array(
            'bannershow' => $bannershow,
            
        ));
    }
    
    public function about()
    {
        return view('frontend.about');
    }

    public function career(request $request)
    {
        $idd = $request->input('id');
        $careerr = DB::table('career')
       
        ->get();
        $careerduty = DB::table('duty')
        ->where('career_duty_id', $idd )
        ->get();
        return view('frontend/career',
        array(
            'careerr' => $careerr,
            'careerduty' => $careerduty,
        ));
    }

    public function careerregis(Request $request)
    {
        $data = array(
            'career_register_name' => $request->input('career_register_name'),
            'career_register_email' => $request->input('career_register_email'),
            'career_register_tel' => $request->input('career_register_tel'),
            'career_register_line' => $request->input('career_register_line'),
            'career_register_career_id' => $request->input('career_register_career_id'),
            'created_at'       =>  new DateTime,
            
        );
        DB::table('career_register')->insert($data);
        return redirect('career')->with('insert', '1');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function emailIn(Request $request)
    {
        $data = array(
            'email_name' => $request->input('email_name'),
            'email_umail' => $request->input('email_umail'),
            'email_tel' => $request->input('email_tel'),
            'email_subject' => $request->input('email_subject'),
            'email_message' => $request->input('email_message'),
            'created_at'       =>  new DateTime,
            
        );
        DB::table('email')->insert($data);
        $data = DB::table('email')->latest()->first();
        $res = [$data->email_name,$data->email_umail,$data->email_tel,$data->email_subject,$data->email_message];
        $email = 'maxbaeiei@gmail.com';
        $name =  $request->input('email_name');
        $subject = $request->input('email_subject');
        Mail::send('frontend.mail', ['res' => $res], function ($m) use($email,$name,$subject){
            $m->from('scoottravelsent@gmail.com', 'Contact Us');

            $m->to($email,$name)->subject($subject);
        });

        return redirect('contact');
        
    }

    public function sendmail()
    {
        Mail::send('frontend.mail', ['email' => $mail], function ($m) use($email,$name){
            $m->from('scoottravelsent@gmail.com', 'Paysliplog');

            $m->to($email,$name)->subject('Alert Upload file Payroll');
        });
    }

    public function exclusive_tour()
    {
        $tourex = DB::table('tour')
        ->where('tour_exclusive_status', '=', '1')
        ->paginate(8);
        return view('frontend.exclusive_tour',
        array(
            'tourex' => $tourex,
        ));
    }

  

    public function package_tour($id)
    {

        $tourshow = DB::table('tour')

        ->where('tour_conti_id', $id)

        ->paginate(5);
      //dd($tourshow);
        // $imgtour = DB::table('image')
        // ->where('img_tour_id', $id)
        // ->get();
        // $cont_all = DB::table('continent')
        // ->get();
        $counti_all = DB::table('continent')
        ->where('continent_id', $id)
        ->get();
        $count_all = DB::table('country')
        ->where('country_continent_id', $id)
        ->get();
        //dd($count_all);
    return view('frontend.package_tour',
        array(
            'tourshow' => $tourshow,
            'count_all' => $count_all,
            'counti_all' => $counti_all,
            // 'cont_all' => $cont_all,
            // 'imgtour' => $imgtour,
        ));


    }

    public function readpackage_tour($id)
    {
        $tourdshow = DB::table('tour')
        ->join('continent', 'tour_conti_id', 'continent_id')
        ->join('country', 'tour_count_id', 'country_id')
        ->join('county', 'tour_county_id', 'county_id')
        ->join('traveldate', 'tour_id', 'tr_date_tour_id')
        ->where('tour_id', $id)
        ->get();
        //dd($tourdshow);
        $imgtour = DB::table('image')
        ->where('img_tour_id', $id)
        ->get();
        return view('frontend.readpackage_tour',
        array(
            'tourdshow' => $tourdshow,
            'imgtour'   => $imgtour,
        ));
    }


    public function read_ticket($id)
    {
        $tickett = DB::table('ticket')
        ->where('ticket_id', $id)
        ->get();
        $ticketdate = DB::table('ticket_date')
        ->where('ticket_date_ticket_id', $id)
        ->get();
        //dd($tickedit);
        $ticketdetail = DB::table('ticket_detail')
        ->where('ticket_detail_ticket_id', $id)
        ->get();
        //dd($tickedit3);
        $ticketimage = DB::table('ticket_image')
        ->where('ticket_image_ticket_id', $id)
        ->get();
        $ticketpromo = DB::table('ticket_promo')
        ->where('ticket_promo_ticket_id', $id)
        ->get();
        
        return view('frontend.read_ticket',
        array(
        
            'tickett'   => $tickett,
            'ticketdate'  => $ticketdate,
            'ticketdetail'  => $ticketdetail,
            'ticketimage'  => $ticketimage,
            'ticketpromo'  => $ticketpromo,
        ));
    }

    

    public function ticket()
    {
        $tickett = DB::table('ticket')
        ->orderBy('ticket_id', 'desc')
        ->limit(1)
        ->get();
        $tickett2 = DB::table('ticket')
        ->orderBy('ticket_id', 'desc')
        ->offset(1)
        ->limit(2)
        ->get();
        $tickett3 = DB::table('ticket')
        ->orderBy('ticket_id', 'desc')
        ->offset(3)
        ->limit(10)
        ->paginate(6);
        //dd($tickett3);
        return view('frontend.ticket',
        array(
        
            'tickett'   => $tickett,
            'tickett2'  => $tickett2,
            'tickett3'  => $tickett3,
        ));
    }



}