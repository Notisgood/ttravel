<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use PDF;
use DateTime;
use Response;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function uploadbanner(Request $request)
    {
        // $bannerimg = '';
        // if($request->hasFile('imgInp')){
        // $files    = $request->file('imgInp');
        // $filename       = $files->getClientOriginalName();
        // $extension   = $files->getClientOriginalExtension();
        // $size       = $files->getSize();
        // $bannerimg   = date('YmdHis').rand().'.'.$extension;
        // $destinationPath    = base_path()."/assets/images/banner/";
        // $files->move($destinationPath, $bannerimg);
        // }
        // $data = array(
        //     'banner_img' => $bannerimg,
        //     'banner_status' => 1,
        //     'created_at' => new DateTime,
        //     'updated_at' => new DateTime
        // );
        // DB::Table('banner')->insert($data);
        // return redirect('banner');
    }

    // public function banners()
    // {
    //     $banners = DB::table('banner')
    //         ->get();
    //     return view('banner',
    //         array(
    //             'banners' => $banners,
                
    //         ));
    // }

    // public function banneradd()
    // {
    //     return view('banneradd');
    // }

    // public function bannerdel($id)
    // {
    
    //     DB::table('banner')->where('banner_id', $id)->delete();
    //     return Response::json();
    // }

    public function wordbanner()
    {
        $bannerwords = DB::table('bannerword')
         
        ->get();
    return view('wordbanner',
        array(
            'bannerwords' => $bannerwords,
            
        ));
    }

    public function wordbanneradd()
    {
        return view('wordbanneradd');
    }

    public function wordbanneraddit(request $request)
    {

        $bannerimg = '';
        if($request->hasFile('imgInp')){
        $files    = $request->file('imgInp');
        $filename       = $files->getClientOriginalName();
        $extension   = $files->getClientOriginalExtension();
        $size       = $files->getSize();
        $bannerimg   = date('YmdHis').rand().'.'.$extension;
        $destinationPath    = base_path()."/assets/images/banner/";
        $files->move($destinationPath, $bannerimg);
        }
        $data = array(
            'bannerword_img' => $bannerimg,
            'bannerword_status' => 1,
            'bannerword_th' => $request->input('bannerword_th'),
            'bannerword_en' => $request->input('bannerword_en'),
            'bannerword_th1' => $request->input('bannerword_th1'),
            'bannerword_en1' => $request->input('bannerword_en1'),
            'bannerword_th2' => $request->input('bannerword_th2'),
            'bannerword_en2' => $request->input('bannerword_en2'),
            'bannerword_th3' => $request->input('bannerword_th3'),
            'bannerword_en3' => $request->input('bannerword_en3'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        );
        DB::Table('bannerword')->insert($data);
        return redirect('wordbanner')->with('insert', '1');
    }

    public function wordbanneredit($id)
    {
        $bannerwordsedit = DB::table('bannerword')->where('bannerword_id', $id)
        ->first();
       
    return view('wordbanneredit',
        array(
            'bannerwordsedit' => $bannerwordsedit,
        ));
    }

    public function wordbannereditupdate(request $request)
    {
       
        $bannerimg = '';
        if($request->hasFile('imgInp')){
            $files    = $request->file('imgInp');
            $filename       = $files->getClientOriginalName();
            $extension   = $files->getClientOriginalExtension();
            $size       = $files->getSize();
            $bannerimg   = date('YmdHis').rand().'.'.$extension;
            $destinationPath    = base_path()."/assets/images/banner/";
            $files->move($destinationPath, $bannerimg);

            $img = DB::table('bannerword')->where('bannerword_id', $request->input('id'))->select('bannerword_img')->first();
            $destinationPath2  = base_path()."/assets/images/banner/".$img->bannerword_img;
            if(is_file($destinationPath2)){              
                unlink($destinationPath2);
            }
        }
        else
        { 
            $bannerimg = $request->input('oldimg');
        }
        $data = array(
            'bannerword_img' => $bannerimg,
            'bannerword_status' => 1,
            'bannerword_th' => $request->input('bannerword_th'),
            'bannerword_en' => $request->input('bannerword_en'),
            'bannerword_th1' => $request->input('bannerword_th1'),
            'bannerword_en1' => $request->input('bannerword_en1'),
            'bannerword_th2' => $request->input('bannerword_th2'),
            'bannerword_en2' => $request->input('bannerword_en2'),
            'bannerword_th3' => $request->input('bannerword_th3'),
            'bannerword_en3' => $request->input('bannerword_en3'),
            'updated_at' => new DateTime,
        );
        DB::table('bannerword')->where('bannerword_id', $request->input('id'))->update($data);
        return redirect()->route('wordbanner');
    }

    public function worduse($id)
    {
        $data = array(
            'bannerword_status' => '1'
        );
        DB::table('bannerword')->where('bannerword_id', $id)->update($data);
        return Response::json();
    }

    public function wordunuse($id)
    {
        $data = array(
            'bannerword_status' => '0'
        );
        DB::table('bannerword')->where('bannerword_id', $id)->update($data);
        return Response::json();
    }

    public function wordbannerdel($id)
    {
        
        $img = DB::table('bannerword')->where('bannerword_id', $id)->select('bannerword_img')->first();
            $destinationPath2  = base_path()."/assets/images/banner/".$img->bannerword_img;
            if(unlink($destinationPath2)){              
                DB::table('bannerword')->where('bannerword_id', $id)->delete();
            }
        return Response::json();
    }
}