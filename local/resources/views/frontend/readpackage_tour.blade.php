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
                                <h3>{{Session::get('lang') == 'th' ? $tourdshow[0]->tour_name_th : $tourdshow[0]->tour_name_en}}  </h3>
                                <p>{{Session::get('lang') == 'th' ? 'ติดต่อสอบถามโปรแกรมทัวร์' :  'Contact for information '}}   </p>
                                <div class="img-readpackage">
                                    <a href=""><img src="{{ asset('local/filesss/images/icon-footer-5.png')}}" class="img-fluid"></a><a href=""><img src="{{ asset('local/filesss/images/icon-footer-6.png')}}" class="img-fluid"></a>
                                </div>
                                <p>{{Session::get('lang') == 'th' ? 'ราคาเริ่มต้น' : 'Price'}} <span>{{Session::get('lang') == 'th' ?  $tourdshow[0]->tour_pri_th :   $tourdshow[0]->tour_pri_en}}</span></p>
                                <div class="row bg-description">
                                    <div class="col-12 col-md-5 col-lg-5">
                                        <ul class="description">
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>{{Session::get('lang') == 'th' ? 'ประเทศ' :  'Country'}}<span>{{Session::get('lang') == 'th' ? $tourdshow[0]->country_name_th :  $tourdshow[0]->country_name_en}} </span></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>{{Session::get('lang') == 'th' ? 'ระยะเวลา' :  'Time'}} : <span>{{Session::get('lang') == 'th' ? $tourdshow[0]->tour_time_th :  $tourdshow[0]->tour_time_en}}</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-7 col-lg-7">
                                        <ul class="description">
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> {{Session::get('lang') == 'th' ? 'สายการบิน' : 'Airline'}} : <span>{{Session::get('lang') == 'th' ? $tourdshow[0]->tour_airline_th :  $tourdshow[0]->tour_airline_en}}</span></li>
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> {{Session::get('lang') == 'th' ? 'ช่วงเวลา' :  'Duration' }} : <span>{{Session::get('lang') == 'th' ? $tourdshow[0]->tour_duration_th :  $tourdshow[0]->tour_duration_en}} </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-7">
                                        <ul class="description">
                                            
                                            <li>{{Session::get('lang') == 'th' ? $tourdshow[0]->tour_des_th :  $tourdshow[0]->tour_des_en}} </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-5" style="border-left: 1px solid #ebebeb;">
                                        <ul class="description">
                                            <li>{{Session::get('lang') == 'th' ? 'ดาวน์โหลดไฟล์โปรแกรม' :  'Download file Program Tour' }} </li>
                                            <a href="{{ asset('local/filesss/images/download-form.doc')}}" download="filename"><img src="{{asset('local/filesss/images/pdf.png')}}" class="img-fluid"></a>
                                        </ul>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="itinerary">
                        <h6>{{Session::get('lang') == 'th' ?  'กำหนดการเดินทาง / อัตราค่าบริการ' : 'Itinerary / Service Rate'}} </h6>
                    </div>
                    <div class="load-more-container">
                        <input type="checkbox" id="load-more" />
                        <ul>
                            <li style="background-color: #b58d42;">
                                <h6>{{Session::get('lang') == 'th' ? 'วันเดินทางไป - กลับ' : 'Travel Date - Return Date'}} </h6>
                            </li>
                            <li style="background-color: #b58d42;">
                                <h6>{{Session::get('lang') == 'th' ? 'ราคา' : 'Price'}}</h6>
                            </li>
                            @foreach ($tourdshow as $trdate)
                                
                           
                            <li>
                                <p>{{Session::get('lang') == 'th' ? $trdate->tr_date_th : $trdate->tr_date_en}}</p>
                            </li>
                            <li>
                                <p>{{Session::get('lang') == 'th' ?  $trdate->tr_date_pri_th :   $trdate->tr_date_pri_en}} </p>
                            </li>
                            @endforeach
                        </ul>
                        <label class="load-more-btn" for="load-more">
                        <span class="unloaded">{{Session::get('lang') == 'th' ? 'ดูเพิ่มเติม' : 'MORE'}} </span>
                        <span class="loaded">{{Session::get('lang') == 'th' ? 'ข้างบน' : 'Top'}}</span>
                      </label>
                    </div>
                    <div id="exTab1">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#5a" data-toggle="tab">{{Session::get('lang') == 'th' ? 'รายละเอียดโปรแกรม' : 'Program Detail'}} </a>
                            </li>
                            <li><a href="#6a" data-toggle="tab">{{Session::get('lang') == 'th' ? 'เงื่อนไขโปรแกรม' : 'Term of Program'}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="5a">
                            <div class="description-1">
                                <ul class="description-time">
                                   
                                    <li>{{Session::get('lang') == 'th' ? $tourdshow[0]->tour_detail_th :  $tourdshow[0]->tour_detail_en}} </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="6a">
                            <div class="description-1">
                                <ul class="description-time">
                                    <li>{{Session::get('lang') == 'th' ? $tourdshow[0]->tour_term_th :  $tourdshow[0]->tour_term_en}}  </li>
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
                                       <h2>{{Session::get('lang') == 'th' ? $item2->tour_name_th :  $item2->tour_name_en}} </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        {{-- <div class="col-12 col-md-4 col-lg-4 col-xl-3 pad-read">
                            <a href="readpackage_tour.php">
                                <div class="hovereffect">
                                    <img class="img-fluid" src="images/readpackag-2.jpg" alt="">
                                    <div class="overlay">
                                       <h2>OSAKA TAKAYAMA</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 pad-read">
                            <a href="readpackage_tour.php">
                                <div class="hovereffect">
                                    <img class="img-fluid" src="images/readpackag-3.jpg" alt="">
                                    <div class="overlay">
                                       <h2>OSAKA TAKAYAMA</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 pad-read">
                            <a href="readpackage_tour.php">
                                <div class="hovereffect">
                                    <img class="img-fluid" src="images/readpackag-4.jpg" alt="">
                                    <div class="overlay">
                                       <h2>OSAKA TAKAYAMA</h2>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
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