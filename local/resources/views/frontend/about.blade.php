<!doctype html>
<html>

<head>
    
    @include('frontend.inc_header')
    <link rel="stylesheet" type="text/css" href="{{asset('local/filesss/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('local/filesss/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}" />

</head>
    <style>
        .owl-dots{
            display: none;
        }
    </style>

<body class="fullpage_scroll body_overflow">

    @include('frontend.inc_menu')
    <div id="fullpage">
        <section class="section container-fluid">
            <div class="row pad-bg-contact">
                <div class="col-12 nopan img-bg-contact wow fadeInDown">
                    <h2>About us </h2>
                    <p>Contact us at any time</p>
                    <img src="{{asset('local/filesss/images/bg-about-1.jpg')}}" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-12 bg-about wow fadeInDown">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="pad-history">
                                <div class="text-history">
                                    <h6>History</h6>
                                </div>
                                <div class="history">
                                    <h2>Scoot Travel<br> Company Limited</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <p>when an unknown printer took a galley of not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{asset('local/filesss/images/img-about-1.jpg')}}" class="img-fluid" style="width: 100%;">
                        </div>
                    </div>
                    <div class="row pad-text-management wow fadeInDown">
                        <div class="col-12 col-md-6 col-lg-6">
                            <img src="{{asset('local/filesss/images/img-about-2.jpg')}}" class="img-fluid" style="width: 100%;">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 pad-text-mana">
                            <div class="pad-management">
                                <div class="text-management">
                                    <h6>Management philosophy</h6>
                                </div>
                                <div class="management">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>
                            <div class="pad-management">
                                <div class="text-management-1">
                                    <h6>vision</h6>
                                </div>
                                <div class="management">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>
                            <div class="pad-management">
                                <div class="text-management-2">
                                    <h6>Company goals</h6>
                                </div>
                                <div class="management">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>
                            <div class="pad-management">
                                <div class="text-management-3">
                                    <h6>Confident to travel with us</h6>
                                </div>
                                <div class="management-img">
                                    <img src="{{asset('local/filesss/images/img-about-3.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-team wow fadeInDown">
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="quality-team">Quality team</div>
                </div>
                <div class="col-12 col-md-9 col-lg-9">
                    <div class="owl-one owl-carousel owl-theme padding-bottom-bu" data-aos="fade-up">
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-3.jpg')}}" class="img-fluid">
                            <p>+ Balthazar Cruz</p>
                        </div>
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-2.jpg')}}" class="img-fluid">
                            <p>+ Lucien Paolo</p>
                        </div>
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-4.jpg')}}" class="img-fluid">
                            <p>+ Anthony Zeno</p>
                        </div>
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-1.jpg')}}" class="img-fluid">
                            <p>+ Anthony Zeno</p>
                        </div>
                        
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-3.jpg')}}" class="img-fluid">
                            <p>+ Anthony Zeno</p>
                        </div>
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-2.jpg')}}" class="img-fluid">
                            <p>+ Anthony Zeno</p>
                        </div>
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-4.jpg')}}" class="img-fluid">
                            <p>+ Anthony Zeno</p>
                        </div>
                        <div class="text-reviews">
                            <img src="{{asset('local/filesss/images/img-team-1.jpg')}}" class="img-fluid">
                            <p>+ Anthony Zeno</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{asset('local/filesss/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                center: true,
                items: 2,
                nav : false,
                loop: true,
                margin: 10,
                responsive: {
                    600: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>

</html>