<!doctype html>
<html>

<head>
    @include('frontend.inc_header')

</head>
<style>
    .flexslider {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        border: 0px;
        overflow: hidden;
        border-radius: 0;
    }

    .flex-control-nav {
        bottom: 80px;
        z-index: 1;
        text-align: center;
        left: 50px;
    }

    .flex-direction-nav .flex-prev {
        display: none;
    }

    .flex-direction-nav .flex-next {
        display: none;
    }

    .flex-control-paging li a.flex-active {
        display: block;
        background: #fff;
        width: 13px;
        height: 13px;
        line-height: 28px;
    }

    .flex-control-paging li a {
        background: #ffffff7d;
        text-align: left;
    }

    .nav-pills li {
        padding: 0 15px 0;
    }

    .nav-pills li.active a {
        color: #000;
        font-weight: 600;

    }

    .nav-pills li a:hover {
        color: #000;
    }

    .nav-pills li a {
        color: #666;
        text-decoration: none;
        letter-spacing: 0.5px;
    }

    .nav-pills {
        padding: 0 0 45px;
    }

    .nav {
        width: 100%;
        justify-content: center;
    }

    @media (max-width: 767px) {
        .nav-pills {
            padding: 0 0 5px;
            font-size: 14px;
        }

        .flex-control-paging li a.flex-active {
            width: 10px;
            height: 10px;
            line-height: 26px;
        }

        .flex-control-nav {
            bottom: 10px;
            left: 0px;
        }

        .flex-control-nav li {
            margin: 0 3px;
        }

        .flex-control-paging li a {
            width: 9px;
            height: 9px;
        }
    }
</style>

<body class="fullpage_scroll body_overflow">

    @include('frontend.inc_menu')

    <div id="fullpage">
        <section class="section container-fluid">
            <div class="row pad-bg-contact">
                <div class="col-12 nopan wow fadeInDown">
                    <div id="flexslider" class="flexslider">
                        <div class="overseas">
                            <h2>Overseas tour </h2>
                            <p>Travel around the world with us.</p>
                        </div>
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('local/filesss/images/img-package_tour-1.jpg')}}" class="img-fluid"
                                    style="width: 100%;" />
                            </li>
                            <li>
                                <img src="{{ asset('local/filesss/images/img-package_tour-3.jpg')}}" class="img-fluid"
                                    style="width: 100%;" />
                            </li>
                            <li>
                                <img src="{{ asset('local/filesss/images/img-package_tour-4.jpg')}}" class="img-fluid"
                                    style="width: 100%;" />
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-12 bg-about">
                    <div class="row">
                        <div class="col-12">
                            <div class="tour-program">
                                <h4><span>
                                        {{Session::get('lang') == 'th' ? $counti_all[0]->continent_name_th : ''}}
                                        {{Session::get('lang') == 'en' ? $counti_all[0]->continent_name_en : ''}}
                                        {{Session::get('lang') == 'cn' ? $counti_all[0]->continent_name_cn : ''}}

                                    </span> 
                                    {{Session::get('lang') == 'th' ? 'โปรแกรม ทัวร์' :  ''}}
                                    {{Session::get('lang') == 'en' ? 'Tour Program' :  ' '}}
                                    {{Session::get('lang') == 'cn' ? '旅遊計劃' :  ' '}}

                                </h4>
                            </div>


                            <div id="exTab1">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a href="#a0" data-toggle="tab">
                                            {{Session::get('lang') == 'th' ? 'ทั้งหมด' :  ''}}
                                            {{Session::get('lang') == 'en' ? 'All' :  ''}}
                                            {{Session::get('lang') == 'cn' ? '所有' :  ''}}

                                        </a>
                                    </li>
                                    @foreach ($count_all as $key => $item)
                                    <li><a href="#a{{ $key+1 }}" data-toggle="tab">
                                            {{Session::get('lang') == 'th' ?  $item->country_name_th :   ''}}
                                            {{Session::get('lang') == 'en' ?  $item->country_name_en :   ''}}
                                            {{Session::get('lang') == 'cn' ?  $item->country_name_cn :   ''}}

                                        </a>
                                    </li>
                                    @endforeach


                                </ul>

                            </div>

                        </div>
                        <div class="col-12">
                            {{-- active --}}
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="a0">
                                    @foreach ($tourshow as $r)
                                    <div class="row pad-package wow fadeInDown">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="images-package">
                                                <img src="{{ asset('local/assets/images/tour/'.$r->tour_img)}}"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-8">
                                            <div class="text-package">
                                                <h6><i class="fa fa-calendar" aria-hidden="true"></i>
                                                    {{ substr($r->created_at,0,10)}}</h6>
                                                <h3>
                                                    {{Session::get('lang') == 'th' ? $r->tour_name_th :  ''}}
                                                    {{Session::get('lang') == 'en' ? $r->tour_name_en :  ''}}
                                                    {{Session::get('lang') == 'cn' ? $r->tour_name_cn :  ''}}

                                                </h3>
                                                <p>
                                                    {{Session::get('lang') == 'th' ? $r->tour_des_th :  ''}}
                                                    {{Session::get('lang') == 'en' ? $r->tour_des_en :  ''}}
                                                    {{Session::get('lang') == 'cn' ? $r->tour_des_cn :  ''}}

                                                </p>
                                                <div class="view-details">
                                                    <a href="{{ route('readpackage_tour',array('cd'=>$r->tour_id))}}">
                                                            {{Session::get('lang') == 'th' ? 'ดูรายละเอียด' :  ''}}
                                                            {{Session::get('lang') == 'en' ? 'View Details' :  ''}}
                                                            {{Session::get('lang') == 'cn' ? '查看詳情' :  ''}}

                                                         </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @foreach ($count_all as $key => $item)
                                <div class="tab-pane" id="a{{ $key+1 }}">
                                    @foreach ($tourshow as $r)
                                    @if ( $item->country_id == $r->tour_count_id )
                                    <div class="row pad-package wow fadeInDown">
                                        <div class="col-12 col-md-4 col-lg-4">

                                            <div class="images-package">
                                                <img src="{{ asset('local/assets/images/tour/'.$r->tour_img)}}"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-8">
                                            <div class="text-package">
                                                <h6><i class="fa fa-calendar" aria-hidden="true"></i>
                                                    {{substr($r->created_at,0,10)}}</h6>
                                                <h3>
                                                    {{Session::get('lang') == 'th' ? $r->tour_name_th :  ''}}
                                                    {{Session::get('lang') == 'en' ? $r->tour_name_en :  ''}}
                                                    {{Session::get('lang') == 'cn' ? $r->tour_name_cn :  ''}}

                                                </h3>
                                                <p>{{ $r->tour_des_th}}</p>
                                                <div class="view-details">
                                                    <a href="{{ route('readpackage_tour',array('cd'=>$r->tour_id))}}">
                                                            {{Session::get('lang') == 'th' ? 'ดูรายละเอียด' :  ''}}
                                                            {{Session::get('lang') == 'en' ? 'View Details' :  ''}}
                                                            {{Session::get('lang') == 'cn' ? '查看詳情' :  ''}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @endforeach
                                    {{-- <div>
                                        <ul class="pagination">
                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a href="#">2</a>
                                            </li>
                                            <li class="next">
                                                <a href="#">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div> --}}

                                </div>
                                @endforeach
                                {{$tourshow->links()}}
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
    <script type="text/javascript">
        $(window).on("load", function() {
            $('#flexslider').flexslider({
                animation: "slide",
                animationSpeed: 800,
                slideshow: true,
            });
        });
    </script>
</body>

</html>