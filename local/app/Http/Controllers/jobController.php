<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use PDF;
use DateTime;
use Response;

class jobController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function emailcontact()
    {
        $email = DB::table('email')
       
        ->get();
        return view('emailcontact',
        array(
            'email' => $email,
        ));
    }

    public function jobmaneger()
    {
        $job = DB::table('career')
       
        ->get();
        return view('jobmaneger',
        array(
            'job' => $job,
        ));
    }

    public function jobregis()
    {
        $job = DB::table('career_register')
        ->join('career', 'career_register.career_register_career_id', 'career.career_id')
        ->get();
        
        // dd($job);
        return view('jobregis',
        array(
            'job' => $job,
     
        ));
    }

    public function jobedit($id)
    {
        $jobEdit = DB::table('career')
        // ->join('duty', 'career.career_id', 'duty.career_duty_id')
        // ->join('property', 'career.career_id','property.property_career_id')
        ->where('career_id', $id)
        ->get();
        //dd($jobEdit);
        $jobEdit2 = DB::table('duty')
       
        ->where('career_duty_id', $id)
        ->get();
        $jobEdit3 = DB::table('property')
       
        ->where('property_career_id', $id)
        ->get();
        return view('jobedit',
            array(
            'jobEdit'   => $jobEdit,
            'jobEdit2'  => $jobEdit2,
            'jobEdit3'  => $jobEdit3,
            ));
    }

    public function jobadd()
    {
        return view('jobadd');
    }

    public function jobaddit(Request $request)
    {
        $data = array(
            'position_th'       => $request->input('position_th'),
            'position_en'       => $request->input('position_en'),
            'position_cn'       => $request->input('position_cn'),

            'created_at'        =>  new DateTime,
            'updated_at'        =>  new DateTime,

        );
        DB::table('career')->insert($data);
        $lastcatid = DB::table('career')->latest()->first();
        if($request->input('duty_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('duty_th') as $key){
                $lastmainid = '';
                $val = array(
                    'duty_th'          =>  $key,
                    'duty_en'          =>  $request->input('duty_en')[$rowmain],
                    'duty_cn'          =>  $request->input('duty_cn')[$rowmain],
                    'career_duty_id'   =>  $lastcatid->career_id,
                    'created_at'       =>  new DateTime,
                    'updated_at'       =>  new DateTime,
                );

                DB::table('duty')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        if($request->input('property_name_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('property_name_th') as $key){
                $lastmainid = '';
                $val = array(
                    'property_name_th'          =>  $key,
                    'property_detail_th'        =>  $request->input('property_detail_th')[$rowmain],
                    'property_name_en'          =>  $request->input('property_name_en')[$rowmain],
                    'property_detail_en'        =>  $request->input('property_detail_en')[$rowmain],
                    'property_name_cn'          =>  $request->input('property_name_cn')[$rowmain],
                    'property_detail_cn'        =>  $request->input('property_detail_cn')[$rowmain],
                    'property_career_id'        =>  $lastcatid->career_id,
                    'created_at'                =>  new DateTime,
                    'updated_at'                =>  new DateTime,
                );

                DB::table('property')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        return redirect('jobmaneger')->with('insert', '1');
    }

    public function jobupdate(Request $request)
    {
        $data = array(
            'position_th'       => $request->input('position_th'),
            'position_en'       => $request->input('position_en'),
            'position_cn'       => $request->input('position_cn'),
            'updated_at'        =>  new DateTime,
        );
        DB::table('career')->where('career_id', $request->input('id'))->update($data);
        $lastcatid = $request->input('id');
        DB::table('duty')->where('career_duty_id',$request->input('id'))->delete();
        if($request->input('duty_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('duty_th') as $key){
                $lastmainid = '';
                $val = array(
                    'duty_th'          =>  $key,
                    'duty_en'          =>  $request->input('duty_en')[$rowmain],
                    'duty_cn'          =>  $request->input('duty_cn')[$rowmain],

                    'career_duty_id'   =>  $lastcatid,
                    'updated_at'       =>  new DateTime,
                );

                DB::table('duty')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        DB::table('property')->where('property_career_id',$request->input('id'))->delete();
        if($request->input('property_name_th')){
            $rowmain = 0;
            $row=1;
            foreach($request->input('property_name_th') as $key){
                $lastmainid = '';
                $val = array(
                    'property_name_th'          =>  $key,
                    'property_detail_th'        =>  $request->input('property_detail_th')[$rowmain],
                    'property_name_en'          =>  $request->input('property_name_en')[$rowmain],
                    'property_detail_en'        =>  $request->input('property_detail_en')[$rowmain],
                    'property_name_cn'          =>  $request->input('property_name_cn')[$rowmain],
                    'property_detail_cn'        =>  $request->input('property_detail_cn')[$rowmain],
                    'property_career_id'        =>  $lastcatid,
                    'created_at'                =>  new DateTime,
                    'updated_at'                =>  new DateTime,
                );

                DB::table('property')->insert($val);
                
                //$row++;
                $rowmain++;
            }
        }
        return redirect()->route('jobmaneger');
    }

    public function jobpropdel($id)
    {
    
        DB::table('property')->where('property_id', $id)->delete();
        return Response::json();
    }

    public function jobdutydel($id)
    {
    
        DB::table('duty')->where('duty_id', $id)->delete();
        return Response::json();
    }

    public function jobdel($id)
    {
    
        DB::table('career')->where('career_id', $id)
        ->delete();
        DB::table('duty')->where('career_duty_id', $id)
        ->delete();
        DB::table('property')->where('property_career_id', $id)
        ->delete();
        return Response::json();
    }
    
}
