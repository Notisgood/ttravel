<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use PDF;
use DateTime;
use Response;


class productTourController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ticketpack()
    {
        $ticket_all = DB::table('ticket')
        ->get();
            return view('ticketpack',
            array(
                'ticket_all' => $ticket_all,
            ));
    }

    public function ticketadd()
    {
            return view('ticketadd');
    }

    public function ticketedit($id)
    {
        $tickedit = DB::table('ticket')
        ->where('ticket_id', $id)
        // ->join('ticket_date', 'ticket_id', '=', 'ticket_date_ticket_id')
        // ->join('ticket_detail', 'ticket_id', '=', 'ticket_detail_ticket_id')
        // ->join('ticket_image', 'ticket_id', '=', 'ticket_image_ticket_id')
        // ->join('ticket_promo', 'ticket_id', '=', 'ticket_promo_ticket_id')
        ->get();
        
        $tickedit2 = DB::table('ticket_date')
        ->where('ticket_date_ticket_id', $id)
        ->get();
        //dd($tickedit);
        $tickedit3 = DB::table('ticket_detail')
        ->where('ticket_detail_ticket_id', $id)
        ->get();
        //dd($tickedit3);
        $tickedit4 = DB::table('ticket_image')
        ->where('ticket_image_ticket_id', $id)
        ->get();
        $tickedit5 = DB::table('ticket_promo')
        ->where('ticket_promo_ticket_id', $id)
        ->get();
            return view('ticketedit',
            array(
                'tickedit' => $tickedit,
                'tickedit2' => $tickedit2,
                'tickedit3' => $tickedit3,
                'tickedit4' => $tickedit4,
                'tickedit5' => $tickedit5,
            ));
    }

    public function ticketaddit(Request $request)
    {
        $tickimg = '';
        if($request->hasFile('imgInp')){
        $files    = $request->file('imgInp');
        $filename       = $files->getClientOriginalName();
        $extension   = $files->getClientOriginalExtension();
        $size       = $files->getSize();
        $tickimg   = date('YmdHis').rand().'.'.$extension;
        $destinationPath    = base_path()."/assets/images/ticket/";
        $files->move($destinationPath, $tickimg);
        }
        $data = array(
            'ticket_img' =>              $tickimg,
            'ticket_name_th'        => $request->input('ticket_name_th'),
            'ticket_name_en'        => $request->input('ticket_name_en'),
            'ticket_name_cn'        => $request->input('ticket_name_cn'),

            'ticket_pri_th'         => $request->input('ticket_pri_th'),
            'ticket_pri_en'         => $request->input('ticket_pri_en'),
            'ticket_pri_cn'         => $request->input('ticket_pri_cn'),

            'created_at'            =>  new DateTime,
            'updated_at'            =>  new DateTime,

        );
        DB::table('ticket')->insert($data);
        $lastcatid = DB::table('ticket')->latest()->first();
        if($request->input('ticket_detail_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('ticket_detail_th') as $key){
                $lastmainid = '';
                $val = array(
                    'ticket_detail_th'            =>  $key,
                    'ticket_detail_en'            =>  $request->input('ticket_detail_en')[$rowmain],
                    'ticket_detail_cn'            =>  $request->input('ticket_detail_cn')[$rowmain],

                    'ticket_detail_ticket_id'       =>  $lastcatid->ticket_id,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('ticket_detail')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        if($request->input('ticket_date_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('ticket_date_th') as $key){
                $lastmainid = '';
                $val = array(
                    'ticket_date_th'            =>  $key,
                    'ticket_date_en'            =>  $request->input('ticket_date_en')[$rowmain],
                    'ticket_date_cn'            =>  $request->input('ticket_date_cn')[$rowmain],
                    'ticket_date_depart_th'            =>  $request->input('ticket_date_depart_th')[$rowmain],
                    'ticket_date_depart_en'            =>  $request->input('ticket_date_depart_en')[$rowmain],
                    'ticket_date_depart_cn'            =>  $request->input('ticket_date_depart_cn')[$rowmain],
                    'ticket_date_ticket_id'       =>  $lastcatid->ticket_id,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('ticket_date')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        if($request->input('ticket_promo_name_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('ticket_promo_name_th') as $key){
                $lastmainid = '';
                $val = array(
                    'ticket_promo_name_th'            =>  $key,
                    'ticket_promo_name_en'            =>  $request->input('ticket_promo_name_en')[$rowmain],
                    'ticket_promo_name_cn'            =>  $request->input('ticket_promo_name_cn')[$rowmain],

                    'ticket_promo_ticket_id'       =>  $lastcatid->ticket_id,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('ticket_promo')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
            $fileimg = '';
            if($request->hasFile('imgInp2')){
               foreach($request->file('imgInp2') as $key => $value){
                   $filename         = $value->getClientOriginalName();
                   $extension        = $value->getClientOriginalExtension();
                   $size             = $value->getSize();
                   $fileimg          = date('YmdHis').rand().'.'.$extension;
                   $destinationPath  = base_path()."/assets/images/ticket/";
                   $value->move($destinationPath, $fileimg);
                  
                   $val = array(
                   'ticket_image_ticket_id' => $lastcatid->ticket_id,
                   'ticket_img'  => $fileimg,
                   'created_at' => new DateTime(),
                   'updated_at' => new DateTime()
                 );
                   DB::table('ticket_image')->insert($val);
               }
           }

        return redirect('ticketpack')->with('insert', '1');
    }


    public function ticketupdate(Request $request)
    {
        $tickimg = '';
        if($request->hasFile('imgInp')){
            $files    = $request->file('imgInp');
            $filename       = $files->getClientOriginalName();
            $extension   = $files->getClientOriginalExtension();
            $size       = $files->getSize();
            $tickimg   = date('YmdHis').rand().'.'.$extension;
            $destinationPath    = base_path()."/assets/images/ticket/";
            $files->move($destinationPath, $tickimg);
            $img = DB::table('ticket')->where('ticket_id', $request->input('id'))->select('ticket_img')->first();
            $destinationPath2  = base_path()."/assets/images/ticket/".$img->ticket_img;
            if(is_file($destinationPath2)){              
                unlink($destinationPath2);
            }
        }
        else
        { 
            $tickimg = $request->input('oldimg');
        }
        $data = array(
            'ticket_img' =>              $tickimg,
            'ticket_name_th'        => $request->input('ticket_name_th'),
            'ticket_name_en'        => $request->input('ticket_name_en'),
            'ticket_pri_th'         => $request->input('ticket_pri_th'),
            'ticket_pri_en'         => $request->input('ticket_pri_en'),
            'ticket_name_cn'        => $request->input('ticket_name_cn'),
            'ticket_pri_cn'         => $request->input('ticket_pri_cn'),
            'updated_at'            =>  new DateTime,


        );
        DB::table('ticket')->where('ticket_id', $request->input('id'))->update($data);
        $lastcatid = $request->input('id');
        DB::table('ticket_detail')->where('ticket_detail_ticket_id',$request->input('id'))->delete();
        if($request->input('ticket_detail_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('ticket_detail_th') as $key){
                $lastmainid = '';
                $val = array(
                    'ticket_detail_th'            =>  $key,
                    'ticket_detail_en'            =>  $request->input('ticket_detail_en')[$rowmain],
                    'ticket_detail_cn'            =>  $request->input('ticket_detail_cn')[$rowmain],

                    'ticket_detail_ticket_id'       =>  $lastcatid,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('ticket_detail')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        DB::table('ticket_date')->where('ticket_date_ticket_id',$request->input('id'))->delete();
        if($request->input('ticket_date_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('ticket_date_th') as $key){
                $lastmainid = '';
                $val = array(
                    'ticket_date_th'            =>  $key,
                    'ticket_date_en'            =>  $request->input('ticket_date_en')[$rowmain],
                    'ticket_date_cn'            =>  $request->input('ticket_date_cn')[$rowmain],
                    'ticket_date_depart_th'            =>  $request->input('ticket_date_depart_th')[$rowmain],
                    'ticket_date_depart_en'            =>  $request->input('ticket_date_depart_en')[$rowmain],
                    'ticket_date_depart_cn'            =>  $request->input('ticket_date_depart_cn')[$rowmain],
                    'ticket_date_ticket_id'       =>  $lastcatid,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('ticket_date')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        DB::table('ticket_promo')->where('ticket_promo_ticket_id',$request->input('id'))->delete();
        if($request->input('ticket_promo_name_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('ticket_promo_name_th') as $key){
                $lastmainid = '';
                $val = array(
                    'ticket_promo_name_th'            =>  $key,
                    'ticket_promo_name_en'            =>  $request->input('ticket_promo_name_en')[$rowmain],
                    'ticket_promo_name_cn'            =>  $request->input('ticket_promo_name_cn')[$rowmain],

                    'ticket_promo_ticket_id'       =>  $lastcatid,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('ticket_promo')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
            $fileimg = '';
            if($request->hasFile('imgInp2')){
               foreach($request->file('imgInp2') as $key => $value){
                   $filename         = $value->getClientOriginalName();
                   $extension        = $value->getClientOriginalExtension();
                   $size             = $value->getSize();
                   $fileimg          = date('YmdHis').rand().'.'.$extension;
                   $destinationPath  = base_path()."/assets/images/ticket/";
                   $value->move($destinationPath, $fileimg);
                   
                   $val = array(
                   'ticket_image_ticket_id' => $lastcatid,
                   'ticket_img'  => $fileimg,
                   'created_at' => new DateTime(),
                   'updated_at' => new DateTime()
                 );
                   DB::table('ticket_image')->insert($val);
               }
           }
       
       
        return redirect()->route('ticketpack');
    }

    public function ticketimgdel($id)
    {
    
        $img1= DB::table('ticket_image')->where('ticket_image_ticket_id', $id)->select('ticket_img')->first();
        $destinationPath1  = base_path()."/assets/images/ticket/".$img1->ticket_img;
        if(unlink($destinationPath1)){              
            DB::table('ticket_image')->where('ticket_image_ticket_id', $id)->delete();
        }
        return Response::json();
    }

    public function ticketdatedel($id)
    {
    
        DB::table('ticket_date')->where('ticket_date_id', $id)->delete();
        return Response::json();
    }

    public function ticketdetaildel($id)
    {
    
        DB::table('ticket_detail')->where('ticket_detail_id', $id)->delete();
        return Response::json();
    }

    public function ticketpromodel($id)
    {
    
        DB::table('ticket_promo')->where('ticket_promo_id', $id)->delete();
        return Response::json();
    }

    public function ticketdel($id)
    {
        $img2= DB::table('ticket_image')->where('ticket_image_ticket_id', $id)->select('ticket_image.ticket_img')->first();
        $destinationPath1  = base_path()."/assets/images/ticket/".$img2->ticket_img;
        if(unlink($destinationPath1)){        
            DB::table('ticket')->where('ticket_id', $id)->delete();      
            DB::table('ticket_image')->where('ticket_image_ticket_id', $id)->delete();
            DB::table('ticket_date')->where('ticket_date_id', $id)->delete();
            DB::table('ticket_detail')->where('ticket_detail_id', $id)->delete();
            DB::table('ticket_promo')->where('ticket_promo_id', $id)->delete();
        }
        return Response::json();
       
    }

    // public function tourdel($id)
    // {
    //     $img3 = DB::table('image')->where('img_tour_id', $id)->select('img_image')->first();
    //         $destinationPath3  = base_path()."/assets/images/tour/".$img3->img_image;
    //         if(unlink($destinationPath3)){              
    //             DB::table('tour')->where('tour_id', $id)
    //             ->delete();
    //             DB::table('traveldate')->where('tr_date_tour_id', $id)
    //             ->delete();         
    //             DB::table('image')->where('img_tour_id', $id)
    //             ->delete();
    //         }
        
    //     return Response::json();
    // }




// --------------------------------------------------------- package ---------------------------->>
    public function tourpack()
    {
        $tour_all = DB::table('tour')
        ->join('continent', 'tour_conti_id', 'continent_id')
        ->join('country', 'tour_count_id', 'country_id')
        ->join('tour_ex', 'tour_exclusive_status', 'tour_ex_id')
        ->get();
            return view('tourpack',
            array(
                'tour_all' => $tour_all,
            ));
    }

    public function touredit($id)
    {
        $tourredit = DB::table('tour')
        ->where('tour_id', $id)
        ->join('continent', 'tour_conti_id', 'continent_id')
        ->join('country', 'tour_count_id', 'country_id')
        ->join('county', 'tour_county_id', 'county_id')
        ->join('tour_ex', 'tour_exclusive_status', 'tour_ex_id')
        ->get();
        $tourredit2 = DB::table('traveldate')
        ->where('tr_date_tour_id', $id)
        ->get();
        //dd($tourredit2);
        $imgtour = DB::table('image')
        ->where('img_tour_id', $id)
        ->get();
        $cont_all = DB::table('continent')
        ->get();
        $count_all = DB::table('country')
        ->get();
    return view('touredit',
        array(
            'tourredit' => $tourredit,
            'count_all' => $count_all,
            'cont_all' => $cont_all,
            'tourredit2' => $tourredit2,
            'imgtour' => $imgtour,
        ));
    }
    
    public function touradd()
    {
        $count_all = DB::table('country')
            ->get();
        $cont_all = DB::table('continent')
            ->get();
        $tourex = DB::table('tour_ex')
        ->get();
            return view('touradd',
            array(
                'count_all' => $count_all,
                'cont_all' => $cont_all,
                'tourex' => $tourex,
               
            ));
    }

    public function touraddit(Request $request)
    {
        $tourimg = '';
        if($request->hasFile('imgInp')){
        $files    = $request->file('imgInp');
        $filename       = $files->getClientOriginalName();
        $extension   = $files->getClientOriginalExtension();
        $size       = $files->getSize();
        $tourimg   = date('YmdHis').rand().'.'.$extension;
        $destinationPath    = base_path()."/assets/images/tour/";
        $files->move($destinationPath, $tourimg);
        }
        $data = array(
            'tour_img' =>              $tourimg,
            'tour_exclusive_status' => $request->input('tour_exclusive_status'),
            'tour_name_th'          => $request->input('tour_name_th'),
            'tour_name_en'          => $request->input('tour_name_en'),
            'tour_conti_id'         => $request->input('tour_conti_id'),
            'tour_count_id'         => $request->input('tour_count_id'),
            'tour_county_id'        => $request->input('tour_county_id'),
            'tour_pri_th'           => $request->input('tour_pri_th'),
            'tour_pri_en'           => $request->input('tour_pri_en'),
            'tour_airline_en'       => $request->input('tour_airline_en'),
            'tour_airline_th'       => $request->input('tour_airline_th'),
            'tour_time_th'          => $request->input('tour_time_th'),
            'tour_time_en'          => $request->input('tour_time_en'),
            'tour_duration_th'      => $request->input('tour_duration_th'),       
            'tour_des_th'           => $request->input('tour_des_th'),
            'tour_des_en'           => $request->input('tour_des_en'),
            'tour_duration_en'      => $request->input('tour_duration_en'),
            'tour_detail_th'        => $request->input('tour_detail_th'),
            'tour_detail_en'        => $request->input('tour_detail_en'),
            'tour_term_th'          => $request->input('tour_term_th'),
            'tour_term_en'          => $request->input('tour_term_en'),
            'tour_name_cn'          => $request->input('tour_name_cn'),
            'tour_pri_cn'           => $request->input('tour_pri_cn'),
            'tour_airline_cn'       => $request->input('tour_airline_cn'),
            'tour_time_cn'          => $request->input('tour_time_cn'),
            'tour_duration_cn'      => $request->input('tour_duration_cn'),
            'tour_des_cn'           => $request->input('tour_des_cn'),
            'tour_detail_cn'        => $request->input('tour_detail_cn'),
            'tour_term_cn'          => $request->input('tour_term_cn'),
            'created_at'            =>  new DateTime,
            'updated_at'            =>  new DateTime,

        );
        DB::table('tour')->insert($data);
        $lastcatid = DB::table('tour')->latest()->first();
        if($request->input('tr_date_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('tr_date_th') as $key){
                $lastmainid = '';
                $val = array(
                    'tr_date_th'            =>  $key,
                    'tr_date_en'            =>  $request->input('tr_date_en')[$rowmain],
                    'tr_date_pri_th'        =>  $request->input('tr_date_pri_th')[$rowmain],
                    'tr_date_pri_en'        =>  $request->input('tr_date_pri_en')[$rowmain],
                    'tr_date_cn'            =>  $request->input('tr_date_cn')[$rowmain],
                    'tr_date_pri_cn'        =>  $request->input('tr_date_pri_cn')[$rowmain],
                    'tr_date_tour_id'       =>  $lastcatid->tour_id,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('traveldate')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
            $fileimg = '';
            if($request->hasFile('imgInp2')){
               foreach($request->file('imgInp2') as $key => $value){
                   $filename         = $value->getClientOriginalName();
                   $extension        = $value->getClientOriginalExtension();
                   $size             = $value->getSize();
                   $fileimg          = date('YmdHis').rand().'.'.$extension;
                   $destinationPath  = base_path()."/assets/images/tour/";
                   $value->move($destinationPath, $fileimg);
                  
                   $val = array(
                   'img_tour_id' => $lastcatid->tour_id,
                   'img_image'  => $fileimg,
                   'created_at' => new DateTime(),
                   'updated_at' => new DateTime()
                 );
                   DB::table('image')->insert($val);
               }
           }

        return redirect('tourpack')->with('insert', '1');
    }

    public function tourupdate(Request $request)
    {
        $tourimg = '';
        if($request->hasFile('imgInp')){
            $files    = $request->file('imgInp');
            $filename       = $files->getClientOriginalName();
            $extension   = $files->getClientOriginalExtension();
            $size       = $files->getSize();
            $tourimg   = date('YmdHis').rand().'.'.$extension;
            $destinationPath    = base_path()."/assets/images/tour/";
            $files->move($destinationPath, $tourimg);
        $img = DB::table('tour')->where('tour_id', $request->input('id'))->select('tour_img')->first();
            $destinationPath2  = base_path()."/assets/images/tour/".$img->tour_img;
            if(is_file($destinationPath2)){              
                unlink($destinationPath2);
            }
        }
        else
        { 
            $tourimg = $request->input('oldimg');
        }
        $data = array(
            'tour_img'              => $tourimg,
            'tour_exclusive_status' => $request->input('tour_exclusive_status'),
            'tour_name_th'          => $request->input('tour_name_th'),
            'tour_name_en'          => $request->input('tour_name_en'),
            'tour_conti_id'         => $request->input('tour_conti_id'),
            'tour_count_id'         => $request->input('tour_count_id'),
            'tour_county_id'        => $request->input('tour_county_id'),
            'tour_pri_th'           => $request->input('tour_pri_th'),
            'tour_pri_en'           => $request->input('tour_pri_en'),
            'tour_airline_en'       => $request->input('tour_airline_en'),
            'tour_airline_th'       => $request->input('tour_airline_th'),
            'tour_time_th'          => $request->input('tour_time_th'),
            'tour_time_en'          => $request->input('tour_time_en'),
            'tour_des_th'           => $request->input('tour_des_th'),
            'tour_des_en'           => $request->input('tour_des_en'),
            'tour_duration_th'      => $request->input('tour_duration_th'),
            'tour_duration_en'      => $request->input('tour_duration_en'),
            'tour_detail_th'        => $request->input('tour_detail_th'),
            'tour_detail_en'        => $request->input('tour_detail_en'),
            'tour_term_th'          => $request->input('tour_term_th'),
            'tour_term_en'          => $request->input('tour_term_en'),
            'tour_name_cn'          => $request->input('tour_name_cn'),
            'tour_pri_cn'           => $request->input('tour_pri_cn'),
            'tour_airline_cn'       => $request->input('tour_airline_cn'),
            'tour_time_cn'          => $request->input('tour_time_cn'),
            'tour_duration_cn'      => $request->input('tour_duration_cn'),
            'tour_des_cn'           => $request->input('tour_des_cn'),
            'tour_detail_cn'        => $request->input('tour_detail_cn'),
            'tour_term_cn'          => $request->input('tour_term_cn'),
            'updated_at'            =>  new DateTime,

        );
        DB::table('tour')->where('tour_id', $request->input('id'))->update($data);
        $lastcatid = $request->input('id');
        DB::table('traveldate')->where('tr_date_tour_id',$request->input('id'))->delete();
        if($request->input('tr_date_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('tr_date_th') as $key){
                $lastmainid = '';
                $val = array(
                    'tr_date_th'            =>  $key,
                    'tr_date_en'            =>  $request->input('tr_date_en')[$rowmain],
                    'tr_date_pri_th'        =>  $request->input('tr_date_pri_th')[$rowmain],
                    'tr_date_pri_en'       =>  $request->input('tr_date_pri_en')[$rowmain],
                    'tr_date_cn'            =>  $request->input('tr_date_cn')[$rowmain],
                    'tr_date_pri_cn'        =>  $request->input('tr_date_pri_cn')[$rowmain],
                    'tr_date_tour_id'       =>  $lastcatid,
                    'created_at'            =>  new DateTime,
                    'updated_at'            =>  new DateTime,
                );

                DB::table('traveldate')->insert($val);
                //$row++;
                $rowmain++;
            }
        }
        // DB::table('image')->where('img_tour_id',$request->input('id'))->delete();
        if($request->hasFile('imgInp2')){
           foreach($request->file('imgInp2') as $key => $value){
               $filename         = $value->getClientOriginalName();
               $extension        = $value->getClientOriginalExtension();
               $size             = $value->getSize();
               $fileimg          = date('YmdHis').rand().'.'.$extension;
               $destinationPath  = base_path()."/assets/images/tour/";
               $value->move($destinationPath, $fileimg);
               $val = array(
               'img_tour_id' => $lastcatid,
               'img_image'  => $fileimg,
               'updated_at' => new DateTime()
             );
               DB::table('image')->insert($val);
           }
       }
       
       
        return redirect()->route('tourpack');
    }



    public function imgdel($id)
    {
    
        $img1= DB::table('image')->where('img_tour_id', $id)->select('img_image')->first();
        $destinationPath1  = base_path()."/assets/images/tour/".$img1->img_image;
        if(unlink($destinationPath1)){              
            DB::table('image')->where('img_id', $id)->delete();
        }
        return Response::json();
    }

    public function traveldel($id)
    {
    
        DB::table('traveldate')->where('tr_date_id', $id)->delete();
        return Response::json();
    }

    public function tourdel($id)
    {
        $img3 = DB::table('image')->where('img_tour_id', $id)->select('img_image')->first();
            $destinationPath3  = base_path()."/assets/images/tour/".$img3->img_image;
            if(unlink($destinationPath3)){              
                DB::table('tour')->where('tour_id', $id)
                ->delete();
                DB::table('traveldate')->where('tr_date_tour_id', $id)
                ->delete();         
                DB::table('image')->where('img_tour_id', $id)
                ->delete();
            }
        
        return Response::json();
    }









    // ---------------------------------------------- ทวีป ------------------------------------------ //
    public function continent()
    {
        $cont_all = DB::table('continent')
            ->get();
       
            return view('continent',
            array(
                'cont_all' => $cont_all,

            ));
       
    }

    public function getcontinent()
    {
        $cont_all = DB::table('continent')->where('id', $id)
        ->first();
       
            return view('continent',
            array(
                'cont_all' => $cont_all,

            ));
       
    }
    

    public function addcont(Request $request)
    {
        $data = array(
            'continent_name_th'     => $request->input('continent_name_th'),
            'continent_name_en'     => $request->input('continent_name_en'),
            'continent_name_des_th' => $request->input('continent_name_des_th'),
            'continent_name_des_en' => $request->input('continent_name_des_en'),
            'continent_name_cn'     => $request->input('continent_name_cn'),
            'continent_name_des_cn' => $request->input('continent_name_des_cn'),
            'created_at'            =>  new DateTime,
            'updated_at'            =>  new DateTime,
            
        );
        DB::table('continent')->insert($data);
        return redirect('continent')->with('insert', '1');
    }

    public function contupdate(Request $request)
    {
        $data = array(
            'continent_name_th'     => $request->input('continent_name_th'),
            'continent_name_en'     => $request->input('continent_name_en'),
            'continent_name_des_th' => $request->input('continent_name_des_th'),
            'continent_name_des_en' => $request->input('continent_name_des_en'),
            'continent_name_cn'     => $request->input('continent_name_cn'),
            'continent_name_des_cn' => $request->input('continent_name_des_cn'),
            'updated_at'            =>  new DateTime,
        );
        DB::table('continent')->where('continent_id', $request->input('id'))->update($data);
        return redirect()->route('continent');
    }


    public function contdel($id)
    {
    
        DB::table('continent')->where('continent_id', $id)->delete();
        return Response::json();
    }
    // ---------------------------------------------- ประเทศ ------------------------------------------ //
    public function country()
    {
        $count_all = DB::table('country')
            ->join('continent', 'country_continent_id', '=', 'continent_id')
            ->get();
        $cont_all = DB::table('continent')
            ->get();
            return view('country',
            array(
                'count_all' => $count_all,
                'cont_all' => $cont_all,
            ));
       
    }

    public function countadd(Request $request)
    {
        $data = array(
            'country_continent_id'  => $request->input('country_continent_id'),
            'country_name_th'       => $request->input('country_name_th'),
            'country_name_en'       => $request->input('country_name_en'),
            'country_des_th'        => $request->input('country_des_th'),
            'country_des_en'        => $request->input('country_des_en'),
            'country_name_cn'       => $request->input('country_name_cn'),
            'country_des_cn'        => $request->input('country_des_cn'),

            'created_at'            =>  new DateTime,
            'updated_at'            =>  new DateTime,
            
        );
        DB::table('country')->insert($data);
        return redirect('country')->with('insert', '1');
    }

    public function countupdate(Request $request)
    {
        $data = array(
            'country_continent_id'  => $request->input('country_continent_id'),
            'country_name_th'       => $request->input('country_name_th'),
            'country_name_en'       => $request->input('country_name_en'),
            'country_des_th'        => $request->input('country_des_th'),
            'country_des_en'        => $request->input('country_des_en'),
            'country_name_cn'       => $request->input('country_name_cn'),
            'country_des_cn'        => $request->input('country_des_cn'),
            'updated_at'            =>  new DateTime,
        );
        DB::table('country')->where('country_id', $request->input('id'))->update($data);
        return redirect()->route('country');
    }

    public function getcountry(Request $request){
        $county_country_id = DB::table('country')
        ->where('country_continent_id',$request->input('country_continent_id'))
        ->get();
        return Response::json($county_country_id);
    }

    public function getcounty(Request $request){
        $county_country_id = DB::table('county')
        ->where('county_country_id',$request->input('county_country_id'))
        ->get();
        return Response::json($county_country_id);
    }

    public function countdel($id)
    {
    
        DB::table('country')->where('country_id', $id)->delete();
        return Response::json();
    }

    // ---------------------------------------------- จังหวัด ------------------------------------------ //
    public function county()
    {
        $county_all = DB::table('county')
        ->join('country', 'county_country_id', '=', 'country_id')
        ->join('continent', 'country.country_continent_id', '=', 'continent_id')
        ->get();
        $count_all = DB::table('country')
           
            ->get();
        $cont_all = DB::table('continent')
            ->get();
            return view('county',
            array(
                'count_all' => $count_all,
                'cont_all' => $cont_all,
                'county_all'=> $county_all,
            ));
       
    }

    public function countyadd(Request $request)
    {
        $data = array(
            'county_country_id' => $request->input('county'),
            'county_name_th' => $request->input('county_name_th'),
            'county_name_en' => $request->input('county_name_en'),
            'county_des_th' => $request->input('county_des_th'),
            'county_des_en' => $request->input('county_des_en'),
            'county_name_cn' => $request->input('county_name_cn'),
            'county_des_cn' => $request->input('county_des_cn'),
            'created_at'       =>  new DateTime,
            'updated_at'       =>  new DateTime,
            
        );
        DB::table('county')->insert($data);
        return redirect('county')->with('insert', '1');
    }

    public function countyupdate(Request $request)
    {
        $data = array(
            'county_country_id' => $request->input('county2'),
            'county_name_th' => $request->input('county_name_th'),
            'county_name_en' => $request->input('county_name_en'),
            'county_des_th' => $request->input('county_des_th'),
            'county_des_en' => $request->input('county_des_en'),
            'county_name_cn' => $request->input('county_name_cn'),
            'county_des_cn' => $request->input('county_des_cn'),
            'created_at'       =>  new DateTime,
            'updated_at'       =>  new DateTime,
        );
        DB::table('county')->where('county_id', $request->input('id'))->update($data);
        return redirect()->route('county');
    }

    
    public function countydel($id)
    {
    
        DB::table('county')->where('county_id', $id)->delete();
        return Response::json();
    }
}