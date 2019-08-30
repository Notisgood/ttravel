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
                <div class="col-12 nopan img-bg-contact">
                    <h2>Ticket </h2>
                    <p>Make your travel easy.</p>
                    <img src="{{ asset('local/filesss/images/bg-ticket.jpg')}}" class="img-fluid" style="width: 100%;">
                </div>

                <div class="col-12 bg-about">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="">
                                <div id="slider" class="flexslider">
                                    <ul class="slides">
                                            @foreach ($ticketimage as $item)
                                            
                                        
                                            <li>
                                                <img src="{{ asset('local/assets/images/ticket/'.$item->ticket_img)}}" />
                                            </li>
                                            @endforeach
                                        <!-- items mirrored twice, total of 12 -->
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider">
                                    <ul class="slides">
                                            @foreach ($ticketimage as $item)
                                            
                                        
                                            <li>
                                                <img src="{{ asset('local/assets/images/ticket/'.$item->ticket_img)}}" />
                                            </li>
                                            @endforeach
                                        <!-- items mirrored twice, total of 12 -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="text-readpackage">
                                <h6><i class="fa fa-calendar" aria-hidden="true"></i> {{substr($tickett[0]->created_at,0,10)}}</h6>
                                <h3>
                                    {{Session::get('lang') == 'th' ? $tickett[0]->ticket_name_th : '' }}
                                    {{Session::get('lang') == 'en' ? $tickett[0]->ticket_name_en : '' }}
                                    {{Session::get('lang') == 'cn' ? $tickett[0]->ticket_name_cn : '' }}

                                 </h3>
                                <p>
                                    {{Session::get('lang') == 'th' ? 'ราคาเริ่มต้น' :  ''}}
                                    {{Session::get('lang') == 'th' ? 'Price' :  ''}}
                                    {{Session::get('lang') == 'th' ? '價錢' :  ''}}
                                     <span>
                                        {{Session::get('lang') == 'th' ? $tickett[0]->ticket_pri_th :  ''}}
                                        {{Session::get('lang') == 'en' ? $tickett[0]->ticket_pri_en :  ''}}
                                        {{Session::get('lang') == 'cn' ? $tickett[0]->ticket_pri_cn :  ''}}
                                        </span></p>
                                <div class="row bg-description">
                                    <div class="col-12">
                                        <ul class="description">
                                            @foreach ($ticketdetail as $r)
                                                
                                            
                                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                                                {{Session::get('lang') == 'th' ? $r->ticket_detail_th : '' }}
                                                {{Session::get('lang') == 'en' ? $r->ticket_detail_en : '' }}
                                                {{Session::get('lang') == 'cn' ? $r->ticket_detail_en : '' }}

                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="itinerary">
                        <h6> 
                            {{Session::get('lang') == 'th' ? $tickett[0]->ticket_name_th :  ''}} 
                            {{Session::get('lang') == 'en' ? $tickett[0]->ticket_name_en :  ''}} 
                            {{Session::get('lang') == 'cn' ? $tickett[0]->ticket_name_cn :  ''}} 

                        </h6>
                    </div>
                    <div class="load-more-container">
                        <input type="checkbox" id="load-more" />
                        <ul>
                            <li style="background-color: #b58d42;">
                                <h6>
                                    {{Session::get('lang') == 'th' ?  'วันที่จอง' : ''}} 
                                    {{Session::get('lang') == 'en' ?  'Ticketing Date' : ''}} 
                                    {{Session::get('lang') == 'cn' ?  '票務日期' : ''}} 

                                </h6>
                            </li>
                            <li style="background-color: #b58d42;">
                                <h6>
                                    {{Session::get('lang') == 'th' ?  'วันเดินทาง' : ''}} 
                                    {{Session::get('lang') == 'en' ?  'Departure Date' : ''}} 
                                    {{Session::get('lang') == 'cn' ?  '出發日期' : ''}} 

                                </h6>
                            </li>
                            @foreach ($ticketdate as $r2)
                                
                           
                            <li>
                                <p>
                                    {{Session::get('lang') == 'th' ? $r2->ticket_date_th : ''}}
                                    {{Session::get('lang') == 'en' ? $r2->ticket_date_en : ''}}
                                    {{Session::get('lang') == 'cn' ? $r2->ticket_date_cn : ''}}

                                </p>
                            </li>
                            <li>
                                    <p>
                                        {{Session::get('lang') == 'th' ? $r2->ticket_date_depart_th : ''}} 
                                        {{Session::get('lang') == 'en' ? $r2->ticket_date_depart_en : ''}} 
                                        {{Session::get('lang') == 'cn' ? $r2->ticket_date_depart_cn : ''}} 

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
                                {{Session::get('lang') == 'th' ?  'ข้างบน' : ''}} 
                                {{Session::get('lang') == 'en' ?  'TOP' : ''}} 
                                {{Session::get('lang') == 'cn' ?  '最佳' : ''}} 
                         </span>
                      </label>
                    </div>
                    <div id="exTab1">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#5a" data-toggle="tab">
                                    {{Session::get('lang') == 'th' ? 'โปรโมชั่นนี้ระบุเที่ยวบิน' : ''}} 
                                    {{Session::get('lang') == 'en' ? 'Flight Promotions' : ''}} 
                                    {{Session::get('lang') == 'cn' ? '航班促銷' : ''}} 

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="5a">
                            <div class="description-1">
                                <ul class="description-time">
                                    @foreach ($ticketpromo as $r3)
                                        
                                    
                                    <li>
                                        {{Session::get('lang') == 'th' ? $r3->ticket_promo_name_th :  '' }} 
                                        {{Session::get('lang') == 'en' ? $r3->ticket_promo_name_en :  ''  }} 
                                        {{Session::get('lang') == 'cn' ? $r3->ticket_promo_name_cn :  ''  }} 

                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related-tour">
                        <h2>Suggest Tour packages</h2>
                    </div>
                    @php
                        $relatour = DB::table('tour')
                        ->orderBy('tour_id', 'decs')
                        ->offset(0)
                        ->limit(4)
                        ->get();
                    @endphp 
                    
                    <div class="row pad-readpackag">
                            @foreach ($relatour as $item2)
                            
                       
                            <div class="col-12 col-md-4 col-lg-4 col-xl-3 pad-read">
                                <a href="{{ route('readpackage_tour',array('cd'=>$item2->tour_id))}}" >
                                    <div class="hovereffect">
                                        <img class="img-fluid" src="{{ asset('local/assets/images/tour/'.$item2->tour_img)}}" alt="">
                                        <div class="overlay">
                                           <h2>
                                               {{Session::get('lang') == 'th' ? $item2->tour_name_th : ''}} 
                                               {{Session::get('lang') == 'en' ? $item2->tour_name_en : ''}} 
                                               {{Session::get('lang') == 'cn' ? $item2->tour_name_cn : ''}} 

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