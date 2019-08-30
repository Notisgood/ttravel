<!doctype html>
<html>

<head>
    @include('frontend.inc_header')
</head>
<style>
    .modal-dialog {
        max-width: 700px;
        margin: 6.75rem auto;
    }
</style>

<body class="fullpage_scroll body_overflow">

 
    @include('frontend.inc_menu')

    <div id="fullpage">
        <section class="section container-fluid">
            <div class="row pad-bg-contact">
                <div class="col-12 nopan img-bg-contact wow fadeInDown">
                    <h2>Career </h2>
                    <p>Welcome to join us.</p>
                    <img src="{{ asset('local/filesss/images/bg-career-1.jpg')}}" class="img-fluid" style="width: 100%;">
                </div>

                <div class="col-12 bg-about wow fadeInDown">
                    <div class="row">
                        <div class="col-12">
                            <div class="applying_career">
                                <h6>Applying for a job Scoot Travel Company Limited</h6>
                                <h5 style="color: #ff0000;">
                                    {{Session::get('lang') == 'th' ? 'ตำแหน่งงาน ว่าง!' : ' '}} 
                                    {{Session::get('lang') == 'en' ? 'Job Vacancy' : ''}}
                                    {{Session::get('lang') == 'cn' ? ' 職位空缺' : '  '}}                            
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-lg-1"></div>
                        <div class="col-12 col-md-10 col-lg-10">
                            <div class="panel_title_download">
                                <h4>
                                    {{Session::get('lang') == 'th' ? 'ตำแหน่งงาน ว่าง!' : ' '}} 
                                    {{Session::get('lang') == 'en' ? 'Job Vacancy' : ''}}
                                    {{Session::get('lang') == 'cn' ? ' 職位空缺' : '  '}}  

                                </h4>
                               
                                <div class="wrapper center-block">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            @foreach ($careerr as $r)
                                        <div class="panel panel-default">
                                        <div class="panel-heading active" role="tab" id="headingOne{{$r->career_id}}">
                                                <h4 class="panel-title">
                                                      

                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$r->career_id}}" aria-expanded="true" aria-controls="collapseOne">
                                                            {{Session::get('lang') == 'th' ? $r->position_th : ''}}  
                                                            {{Session::get('lang') == 'en' ? $r->position_en : ''}}  
                                                            {{Session::get('lang') == 'cn' ? $r->position_cn : ''}}  

                                        </a>
                                        <input type="hidden" name="id" value="{{$r->career_id}}">
                                                </h4>
                                            </div>
                                            
                                            <div id="collapseOne{{$r->career_id}}" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-12 col-md-7 col-lg-7">
                                                            <div class="text_download">
                                                                <h5>
                                                                    {{Session::get('lang') == 'th' ? 'หน้าที่และความรับผิดชอบ' : ''}} 
                                                                    {{Session::get('lang') == 'en' ? 'Responsibilities' : ''}} 
                                                                    {{Session::get('lang') == 'cn' ? '責任' : ''}} 

                                                                </h5>
                                                                <ul class="ul_text_download">
                                                                    @php
                                                                    $duty = DB::table('duty')->where('career_duty_id', $r->career_id)->get();   
                                                                    @endphp
                                                                    @foreach ($duty as $r2)
                                                                        
                                                                    
                                                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                                                     {{Session::get('lang') == 'th' ? $r2->duty_th : ''}} 
                                                                     {{Session::get('lang') == 'en' ? $r2->duty_en : ''}} 
                                                                     {{Session::get('lang') == 'cn' ? $r2->duty_cn : '' }} 

                                                                    </li>
                                                    
                                                                    @endforeach
                                                                </ul>
                                                                
                                                                <h5>
                                                                    {{Session::get('lang') == 'th' ? 'คุณสมบัติพื้นฐาน' :  ''}} 
                                                                    {{Session::get('lang') == 'en' ? 'Requirements' :  ''}} 
                                                                    {{Session::get('lang') == 'cn' ? '要求' :  ''}} 

                                                                </h5>
                                                                <ul class="ul_text_download">
                                                                        @php
                                                                        $property = DB::table('property')->where('property_career_id', $r->career_id)->get();   
                                                                        @endphp
                                                                         @foreach ($property as $r3)
                                                                <li><i class="fa fa-caret-right" aria-hidden="true"> </i>
                                                                    {{Session::get('lang') == 'th' ? $r3->property_name_th.' : '.$r3->property_detail_th : '' }} 
                                                                    {{Session::get('lang') == 'en' ? $r3->property_name_en.' : '.$r3->property_detail_en :  '' }} 
                                                                    {{Session::get('lang') == 'cn' ? $r3->property_name_cn.' : '.$r3->property_detail_cn :  '' }}
                                                            </li>
                                                                     
                                                                     @endforeach

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 col-md-2 col-lg-2">
                                                            <div class="applying">
                                                                <a href="" data-toggle="modal" data-target="#m1">
                                                                    <i class="fa fa-file" aria-hidden="true" ></i>
                                                                    
                                                                    {{Session::get('lang') == 'th' ? 'สมัครงาน' :  ''}} 
                                                                    {{Session::get('lang') == 'en' ? 'APPLY' :  ''}} 
                                                                    {{Session::get('lang') == 'cn' ? '應用' :  ''}} 

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 col-md-3 col-lg-3">
                                                            <div class="download-form">
                                                                <a href="{{ asset('local/filesss/images/download-form.doc')}}" download="filename"> <i class="fa fa-download" aria-hidden="true"></i> 
                                                                    {{Session::get('lang') == 'th' ? 'ดาวน์โหลดฟอร์ม' :  ''}}
                                                                    {{Session::get('lang') == 'en' ? 'Download Form' :  ''}}
                                                                    {{Session::get('lang') == 'cn' ? '下載表格' :  ''}}

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                     
                                    </div>
                                 
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col-md-1 col-lg-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-12 wow fadeInDown">
                            <div class="">
                                <h5>{{Session::get('lang') == 'th' ? 'สนใจกรุณาติดต่อ ฝ่ายทรัพยากรบุคคล' :  'Contact HR for more information'}} </h5>
                                <h6>{{Session::get('lang') == 'th' ?  'บริษัท สกู๊ด ทราเวล จำกัด' : 'Scoot Travel Co.,Ltd.' }}  </h6>
                                <ul class="icon-footer">
                                    <li><img src="{{ asset('local/filesss/images/icon-footer-1.png')}}" class="img-fluid"> : {{Session::get('lang') == 'th' ?  '28/42 ถนนมาเจริญ แขวงหนองแขม เขตหนองแขม กทม 10160' : '28/42 Ma Charoen Road, Nong Khaem Subdistrict, Nong Khaem District, Bangkok 10160' }}  </li>
                                    {{-- <li><img src="{{ asset('local/filesss/images/icon-footer-2.png')}}" class="img-fluid"> : 02-692-8404 ต่อ 500 </li> --}}
                                    <li><img src="{{ asset('local/filesss/images/icon-footer-3.png')}}" class="img-fluid"> : 086-948-7777 </li>
                                    <li><img src="{{ asset('local/filesss/images/icon-footer-4.png')}}" class="img-fluid"> : scoottravel.th@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
    </div>
    <div class="modal fade" id="m1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <button type="button" class="close-m1" data-dismiss="modal">&times;</button>

            <div class="modal-content">
                <div class="modal-body">
                <form name="myfrom" method="post" id="jobregis" action="{{ route('careerregis')}}">
                        {{ csrf_field() }}
                    <h5>{{Session::get('lang') == 'th' ? 'แบบฟอร์มสมัครงาน' :  'Job Application Form'}} </h5>
                    <div class="form-group">
                        <label for="exampleSelect1">{{Session::get('lang') == 'th' ? 'สมัครการตำแหน่ง' :  'Apply For'}}  </label>
                        <select class="form-control" id="exampleSelect1" name="career_register_career_id">
                                @foreach($careerr as $key => $r3)
                                <option value="{{ $r3->career_id }}">
                                        {{Session::get('lang') == 'th' ? $r3->position_th : $r3->position_en}}
                                </option>
                                @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputname">{{Session::get('lang') == 'th' ? 'ชื่อ - สกุล' : 'Name - Surname'}} </label>
                                <input type="name" class="form-control" id="exampleInputname" name="career_register_name" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputmail">{{Session::get('lang') == 'th' ? 'อีเมล' : 'E-mail'}} </label>
                                <input type="email" class="form-control" id="exampleInputmail" name="career_register_email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputtel">{{Session::get('lang') == 'th' ? 'โทรศัพท์' : 'Phone.'}}</label>
                                <input type="number" class="form-control" id="exampleInputtel" name="career_register_tel" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputline">{{Session::get('lang') == 'th' ? 'ไลน์' : 'Line'}}  </label>
                                <input type="text" class="form-control" id="exampleInputline" name="career_register_line" required>
                            </div>
                        </div>
                    </div>
                    <div class="row pad-footer-send">
                        <div class="col-4 col-md-4 col-lg-4"></div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <div class="footer-send">
                           {{-- <a  onclick="form_submit()">{{Session::get('lang') == 'th' ? 'ส่งข้อความ' : 'Send'}} </a> --}}
                           <button tpye="submit" form="jobregis" class="btn  btn-mat  btn-warning  ">{{Session::get('lang') == 'th' ? 'ส่งข้อความ' : 'Send'}}  </button>

                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4">
                            <div class="footer-close">
                                <a data-dismiss="modal">{{Session::get('lang') == 'th' ? 'ยกเลิก' : 'Cancel'}} </a>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                
            </div>

        </div>
    </div>
    <script>
        $('.panel-collapse').on('show.bs.collapse', function() {
            $(this).siblings('.panel-heading').addClass('active');
        });

        $('.panel-collapse').on('hide.bs.collapse', function() {
            $(this).siblings('.panel-heading').removeClass('active');
        });

        function form_submit(){
            console.log('ddddd');
            $('#jobregis').submit();
        }
    </script>
</body>

</html>