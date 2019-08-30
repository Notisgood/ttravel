<!doctype html>
<html>

<head>
    @include('frontend.inc_header')

</head>
<style>
    .nav-pills li {
        background-color: #c4c4c499;
        padding: 4px 20px;
        margin-right: 7px;
    }

    .nav-pills li a {
        color: #666;
        font-size: 16px;
        text-decoration: none;
    }

    .flexslider {
        margin: 0 0 5px;
        border: none;
        border-radius: 0px;
    }

    .flex-direction-nav .flex-next {
        right: 30px;
        text-align: right;
        line-height: 42px;
    }

    .flex-direction-nav .flex-prev {
        left: 30px;
        text-align: left;
        line-height: 42px;
    }

    #carousel .flex-direction-nav .flex-next {
        background-image: url(images/flex-right.png);
        right: 40px;
        opacity: 1;
        line-height: 1;
        text-indent: -999px;
        text-align: left;
        background-size: contain;
        background-repeat: no-repeat;
    }

    #carousel .flex-direction-nav .flex-prev {
        background-image: url(images/flex-left.png);
        left: 40px;
        opacity: 1;
        line-height: 1;
        text-indent: -999px;
        text-align: left;
        background-size: contain;
        background-repeat: no-repeat;
    }

    #slider .flex-direction-nav .flex-next {
        background-image: url(images/flex-right.png);
        right: 40px;
        opacity: 1;
        line-height: 1;
        text-indent: -999px;
        text-align: left;
        background-size: contain;
        background-repeat: no-repeat;
    }

    #slider .flex-direction-nav .flex-prev {
        background-image: url(images/flex-left.png);
        left: 40px;
        opacity: 1;
        line-height: 1;
        text-indent: -999px;
        text-align: left;
        background-size: contain;
        background-repeat: no-repeat;
    }
    @media (max-width: 1200px){
        #slider .flex-direction-nav .flex-next{
            right: 26px;
        }
        #slider .flex-direction-nav .flex-prev{
            left: 26px;
        }
        .flex-direction-nav a{
            width: 25px;
            height: 25px;
        }
    }
</style>

<body class="fullpage_scroll body_overflow">
@include('frontend.inc_menu')

    <div id="fullpage">
        <section class="section container-fluid">
            <div class="row pad-bg-contact">
                <div class="col-12 nopan img-bg-contact wow fadeInDown">
                    <h2>{{$tourdshow[0]->country_name_en}} Tour Program </h2>
                    <p>Travel around the world with us.</p>
                    <img src="{{ asset('local/filesss/images/bg-packagetour-1.jpg')}}" class="img-fluid" style="width: 100%;">
                </div>

                <div class="col-12 bg-about wow fadeInDown">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-6">
                            <div class="">
                                <div id="slider" class="flexslider">
                                    <ul class="slides">
                                        @foreach ($imgtour as $item)
                                            
                                        
                                        <li>
                                            <img src="{{ asset('local/assets/images/tour/'.$item->img_image)}}" />
                                        </li>
                                        @endforeach
                                        <!-- items mirrored twice, total of 12 -->
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider">
                                    <ul class="slides">
                                            @foreach ($imgtour as $item)
                                        <li>
                                            <img src="{{ asset('local/assets/images/tour/'.$item->img_image)}}" />
                                        </li>
                                        @endforeach
                                        
                                        <!-- items mirrored twice, total of 12 -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-6">
                            <div class="text-readpackage">
                                <h6><i class="fa fa-calendar" aria-hidden="true"></i> {{substr($tourdshow[0]->created_at,0,10)}}</h6>
                                <h3>
                                    {{Session::get('lang') == 'th' ? $tourdshow[0]->tour_name_th :  ''}}  
                                    {{Session::get('lang') == 'en' ? $tourdshow[0]->tour_name_en :  ''}}  
                                    {{Session::get('lang') == 'cn' ? $tourdshow[0]->tour_name_cn :  ''}}  

                                </h3>
                                <p>
                                    {{Session::get('lang') == 'th' ? 'ติดต่อสอบถามโปรแกรมทัวร์' :  ' '}}
                                    {{Session::get('lang') == 'en' ? 'Contact for information' :  ' '}} 
                                    {{Session::get('lang') == 'cn' ? '聯繫以獲取信息' :  ' '}} 

                                </p>
                                <div class="img-readpackage">
                                    <a href=""><img src="{{ asset('local/filesss/images/icon-footer-5.png')}}" class="img-fluid"></a><a href=""><img src="{{ asset('local/filesss/images/icon-footer-6.png')}}" class="img-fluid"></a>
                                </div>
                                <p>
                                    {{Session::get('lang') == 'th' ? 'ราคาเริ่มต้น' : ''}} 
                                    {{Session::get('lang') == 'en' ? 'Price' : ''}} 
                                    {{Session::get('lang') == 'cn' ? '價錢' : ''}} 

                                    <span>
                                        {{Session::get('lang') == 'th' ?  $tourdshow[0]->tour_pri_th :   ''}}
                                        {{Session::get('lang') == 'en' ?  $tourdshow[0]->tour_pri_en :   ''}}
                                        {{Session::get('lang') == 'cn' ?  $tourdshow[0]->tour_pri_cn :   ''}}

                                    </span>
                                </p>
                                <div class="row bg-description">
                                    <div class="col-12 col-md-5 col-lg-5">
                                        <ul class="description">
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                {{Session::get('lang') == 'th' ? 'ประเทศ' :  ''}} 
                                                {{Session::get('lang') == 'en' ? 'Country' :  ''}} 
                                                {{Session::get('lang') == 'cn' ? '國家' :  ''}} :
                                                
                                                <span>
                                                    {{Session::get('lang') == 'th' ? $tourdshow[0]->country_name_th :   ''}}
                                                    {{Session::get('lang') == 'en' ? $tourdshow[0]->country_name_en :   ''}}
                                                    {{Session::get('lang') == 'cn' ? $tourdshow[0]->country_name_cn :   ''}}
 
                                                </span>
                                            </li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                {{Session::get('lang') == 'th' ? 'ระยะเวลา' :  ''}} 
                                                {{Session::get('lang') == 'en' ? 'Time' :  ' '}} 
                                                {{Session::get('lang') == 'cn' ? '時間' :  ''}} :

                                                <span>
                                                    {{Session::get('lang') == 'th' ? $tourdshow[0]->tour_time_th :   ''}}
                                                    {{Session::get('lang') == 'en' ? $tourdshow[0]->tour_time_en :   ''}}
                                                    {{Session::get('lang') == 'cn' ? $tourdshow[0]->tour_time_cn :   ''}}

                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-7 col-lg-7">
                                        <ul class="description">
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                 {{Session::get('lang') == 'th' ? 'สายการบิน' : ''}} 
                                                 {{Session::get('lang') == 'en' ? 'Airline' : ''}} 
                                                 {{Session::get('lang') == 'cn' ? '航空公司' : ''}} : 

                                                 <span>
                                                     {{Session::get('lang') == 'th' ? $tourdshow[0]->tour_airline_th :   ''}}
                                                    {{Session::get('lang') == 'en' ? $tourdshow[0]->tour_airline_en :   ''}}
                                                    {{Session::get('lang') == 'cn' ? $tourdshow[0]->tour_airline_cn :   ''}}
                                                    </span>
                                            </li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> 
                                                {{Session::get('lang') == 'th' ? 'ช่วงเวลา' :  '' }} 
                                                {{Session::get('lang') == 'en' ? 'Duration' :  '' }}  
                                                {{Session::get('lang') == 'cn' ? '持續時間' :  '' }} : 

                                                <span>
                                                    {{Session::get('lang') == 'th' ? $tourdshow[0]->tour_duration_th :   ''}}
                                                    {{Session::get('lang') == 'en' ? $tourdshow[0]->tour_duration_en :   ''}}
                                                    {{Session::get('lang') == 'cn' ? $tourdshow[0]->tour_duration_cn :   ''}}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-7">
                                        <ul class="description">
                                            <li>
                                                {{Session::get('lang') == 'th' ? $tourdshow[0]->tour_des_th :   ''}}
                                                {{Session::get('lang') == 'en' ? $tourdshow[0]->tour_des_en :   ''}}
                                                {{Session::get('lang') == 'cn' ? $tourdshow[0]->tour_des_cn :   ''}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-5" style="border-left: 1px solid #ebebeb;">
                                        <ul class="description">
                                            <li>
                                                {{Session::get('lang') == 'th' ? 'ดาวน์โหลดไฟล์โปรแกรม' :  '' }} 
                                                {{Session::get('lang') == 'en' ? 'Download file Program Tour' :   '' }} 
                                                {{Session::get('lang') == 'cn' ? '下載文件程序導覽' :  '' }} 

                                            </li>
                                            <a href="{{ asset('local/filesss/images/download-form.doc')}}" download="filename"><img src="{{asset('local/filesss/images/pdf.png')}}" class="img-fluid"></a>
                                        </ul>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="itinerary">
                        <h6>
                            {{Session::get('lang') == 'th' ?  'กำหนดการเดินทาง / อัตราค่าบริการ' : ''}} 
                            {{Session::get('lang') == 'en' ?  'กำหนดการเดินทาง / อัตราค่าบริการ' : ''}} 
                            {{Session::get('lang') == 'cn' ?  '行程 / 服務費率' : ''}} 

                        </h6>
                    </div>
                    <div class="load-more-container">
                        <input type="checkbox" id="load-more" />
                        <ul>
                            <li style="background-color: #b58d42;">
                                <h6>
                                    {{Session::get('lang') == 'th' ? 'วันเดินทางไป - กลับ' : ''}} 
                                    {{Session::get('lang') == 'en' ? 'Travel Date - Return Date' : ' '}} 
                                    {{Session::get('lang') == 'cn' ? ' 旅行日期 - 退貨日期' : ''}} 

                                </h6>
                            </li>
                            <li style="background-color: #b58d42;">
                                <h6>
                                    {{Session::get('lang') == 'th' ? 'ราคา' : ''}}
                                    {{Session::get('lang') == 'en' ? 'Price' : ''}}
                                    {{Session::get('lang') == 'cn' ? '價錢' : ''}}

                                </h6>
                            </li>
                            @foreach ($tourdshow as $trdate)
                                
                           
                            <li>
                                <p>
                                    {{Session::get('lang') == 'th' ? $trdate->tr_date_th : ''}}
                                    {{Session::get('lang') == 'en' ? $trdate->tr_date_en : ''}}
                                    {{Session::get('lang') == 'cn' ? $trdate->tr_date_cn : ''}}

                                </p>
                            </li>
                            <li>
                                <p>
                                    {{Session::get('lang') == 'th' ?  $trdate->tr_date_pri_th :    ''}} 
                                    {{Session::get('lang') == 'en' ?  $trdate->tr_date_pri_en :    ''}} 
                                    {{Session::get('lang') == 'cn' ?  $trdate->tr_date_pri_cn :    ''}} 

                                </p>
                            </li>
                            @endforeach
                        </ul>
                        <label class="load-more-btn" for="load-more">
                        <span class="unloaded">
                            {{Session::get('lang') == 'th' ? 'ดูเพิ่มเติม' : ''}} 
                            {{Session::get('lang') == 'en' ? 'MORE' : ''}} 
                            {{Session::get('lang') == 'cn' ? '更多' : ''}} 

                        </span>
                        <span class="loaded">
                            {{Session::get('lang') == 'th' ? 'ข้างบน' : ''}}
                            {{Session::get('lang') == 'en' ? 'Top' : ''}}
                            {{Session::get('lang') == 'cn' ? '最佳' : ''}}

                        </span>
                      </label>
                    </div>
                    <div id="exTab1">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#5a" data-toggle="tab">
                                    {{Session::get('lang') == 'th' ? 'รายละเอียดโปรแกรม' : ''}}
                                    {{Session::get('lang') == 'en' ? 'Program Detail' : ''}}
                                    {{Session::get('lang') == 'cn' ? '計劃細節' : ''}}

                                 </a>
                            </li>
                            <li><a href="#6a" data-toggle="tab">
                                {{Session::get('lang') == 'th' ? 'เงื่อนไขโปรแกรม' : ''}}
                                {{Session::get('lang') == 'en' ? 'Term of Program' : ''}}
                                {{Session::get('lang') == 'cn' ? '計劃期限' : ''}}

                            </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="5a">
                            <div class="description-1">
                                <ul class="description-time">
                                   
                                    <li>
                                        {{Session::get('lang') == 'th' ? $tourdshow[0]->tour_detail_th :   ''}} 
                                        {{Session::get('lang') == 'en' ? $tourdshow[0]->tour_detail_en :   ''}} 
                                        {{Session::get('lang') == 'cn' ? $tourdshow[0]->tour_detail_cn :   ''}} 

                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="6a">
                            <div class="description-1">
                                <ul class="description-time">
                                    <li>
                                        {{Session::get('lang') == 'th' ? $tourdshow[0]->tour_term_th :  ''}}  
                                        {{Session::get('lang') == 'en' ? $tourdshow[0]->tour_term_en :  ''}}  
                                        {{Session::get('lang') == 'cn' ? $tourdshow[0]->tour_term_cn :  ''}}  

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related-tour">
                        <h2>Related tour packages</h2>
                    </div>
                    @php
                        $relatour = DB::table('tour')
                        ->where('tour_count_id', $tourdshow[0]->country_id)
                        ->offset(0)
                        ->limit(4)
                        ->get();
                    @endphp 
                    
                    <div class="row pad-readpackag wow fadeInDown">
                        @foreach ($relatour as $item2)
                            
                       
                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 pad-read">
                            <a href="{{ route('readpackage_tour',array('cd'=>$item2->tour_id))}}" >
                                <div class="hovereffect">
                                    <img class="img-fluid" src="{{ asset('local/assets/images/tour/'.$item2->tour_img)}}" alt="">
                                    <div class="overlay">
                                       <h2>
                                           {{Session::get('lang') == 'th' ? $item2->tour_name_th :  ''}} 
                                           {{Session::get('lang') == 'en' ? $item2->tour_name_en :  ''}} 
                                           {{Session::get('lang') == 'cn' ? $item2->tour_name_cn :  ''}} 

                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                         
                    </div>
                </div>

            </div>

        </section>
    </div>
    <script>
        $(window).on("load", function() {
            // The slider being synced must be initialized first
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
            });
        });
    </script>
</body>

</html>