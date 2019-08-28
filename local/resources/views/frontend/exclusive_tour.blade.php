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
                            <h2>Exclusive tour </h2>
                            <p>Travel around the exclusive with us.</p>
                        </div>
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('local/filesss/images/img-package_tour-6.jpg')}}" class="img-fluid"
                                    style="width: 100%;" />
                            </li>
                            <li>
                                <img src="{{ asset('local/filesss/images/img-package_tour-4.jpg')}}" class="img-fluid"
                                    style="width: 100%;" />
                            </li>
                            <li>
                                <img src="{{ asset('local/filesss/images/img-package_tour-1.jpg')}}" class="img-fluid"
                                    style="width: 100%;" />
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-12 bg-about wow fadeInDown">
                    <div class="row">
                        @foreach ($tourex as $r2)
                            
                    
                        <div class="col-12 col-md-3 col-lg-3 ">
                            <div class="text-exclusive">
                                <div class="images-exclusive">
                                    <img src="{{ asset('local/assets/images/tour/'.$r2->tour_img)}}" class="img-fluid">
                                </div>
                                <h6><i class="fa fa-calendar" aria-hidden="true"></i> {{substr($r2->created_at,0,10)}}</h6>
                                <h3>{{Session::get('lang') == 'th' ? $r2->tour_name_th :  $r2->tour_name_en}} </h3>
                                <p> {{Session::get('lang') == 'th' ? $r2->tour_des_th :  $r2->tour_des_en}} </p>
                                <div class="view-exclusive">
                                    <a href="{{ route('readpackage_tour',array('cd'=>$r2->tour_id))}}">{{Session::get('lang') == 'th' ? 'ดูรายละเอียด' :  'View Details'}} </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
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
                    {{$tourex->links()}}
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