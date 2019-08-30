<!doctype html>
<html>

<head>
    @include('frontend.inc_header')

</head>
<style>
    input {
        box-sizing: border-box;
        width: 20px;
        height: 20px;
        border: 2px solid #ffffff;
        border-radius: 50%;
        background: none;
        color: #fff;
        font-size: 7px;
        font-weight: 400;
        font-family: Roboto;
        outline: 0;
        -webkit-transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
        padding 0.2s;
        transition: width 0.4s ease-in-out, border-radius 0.8s ease-in-out,
        padding 0.2s;
        -webkit-transition-delay: 0.4s;
        transition-delay: 0.4s;
        -webkit-transform: translate(-100%, -50%);
        -ms-transform: translate(-100%, -50%);
        transform: translate(-100%, -50%);
    }
    .flex-control-paging li a.flex-active {
        background: #fff;
        width: 15px;
        height: 15px;
        line-height: 28px;
    }

    .flex-direction-nav .flex-next {
        display: none;
    }

    .flex-control-nav {
        bottom: 20px;
        right: 40px;
        z-index: 9999;
        text-align: right;
    }

    .flex-control-paging li a {
        background: #ffffff7d;
        text-align: left;
    }

    .flex-control-paging li a.flex-active {
        display: block;
        background: #fff;
        width: 13px;
        height: 13px;
        line-height: 28px;
    }

    .wrap_slidecaption {
        position: absolute;
        top: 47%;
        right: 3%;
        width: 100%;
        text-align: center;
        -ms-transform: translate( 0, -50%);
        /* IE 9 */
        -webkit-transform: translate( 0, -50%);
        /* Safari */
        transform: translate( 0, -50%);
    }


    .flex-direction-nav a:before {
        display: none;
    }



    .flexslider {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        border: 0px;
        overflow: hidden;
        border-radius: 0;
    }

    .flexslider-container,
    .flexslider .slides,
    .flex-viewport {
        height: 100%;
    }

    .flexslider .slides>li {
        background-position: center;
        height: 100%;
        width: 100%;
        display: none;
        -webkit-backface-visibility: hidden;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        position: relative;
    }
    
    /* .slidecaption {
        position: relative;
        color: #FFF;
        font-size: 72px;
        opacity: 0;
        font-family: 'Caveat Brush', cursive;
    }

    .slidecaption2 {
        position: relative;
        color: #FFF;
        font-size: 72px;
        opacity: 0;
        font-family: 'kanit', cursive;
    } */

    .slideleft.actioncaption {
        -webkit-animation-name: slideInLeft;
        -moz-animation-name: slideInLeft;
        -o-animation-name: slideInLeft;
        animation-name: slideInLeft;
        -webkit-animation-duration: 1.5s;
        -moz-animation-duration: 1.5s;
        -o-animation-duration: 1.5s;
        animation-duration: 1.5s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
    }

    .slideright.actioncaption {
        -webkit-animation-name: slideInRight;
        -moz-animation-name: slideInRight;
        -o-animation-name: slideInRight;
        animation-name: slideInRight;
        -webkit-animation-duration: 1.5s;
        -moz-animation-duration: 1.5s;
        -o-animation-duration: 1.5s;
        animation-duration: 1.5s;
        animation-timing-function: ease-in-out;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
        animation-delay: 0.5s;
    }

    @-webkit-keyframes slideInLeft {
        0% {
            left: -10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    @-moz-keyframes slideInLeft {
        0% {
            left: -10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    @-o-keyframes slideInLeft {
        0% {
            left: -10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    @keyframes slideInLeft {
        0% {
            left: -10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    @-webkit-keyframes slideInRight {
        0% {
            left: 10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    @-moz-keyframes slideInRight {
        0% {
            left: 10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    @-o-keyframes slideInRight {
        0% {
            left: 10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        0% {
            left: 10%;
            opacity: 0;
        }
        100% {
            left: 0%;
            opacity: 1;
        }
    }

    .wrap_slidecaption h1 {
        color: #fff;
        font-size: 110px;
        margin-bottom: 40px;
        text-align: right;
        line-height: 47px;
        text-shadow: 1.5px 1.5px 1px #3333337d;
    }

    .wrap_slidecaption span {
        color: #d0b258;
    }

    .wrap_slidecaption h2 {
        color: #fff;
        font-size: 60px;
        line-height: 70px;
        text-align: right;
        letter-spacing: 1px;
        text-shadow: 1.5px 1.5px 1px #3333337d;
    }

    
    @media (max-width: 767px) {
        .wrap_slidecaption h2{
            font-size: 25px;
            line-height: 30px;
        }
        #flexslider .flex-direction-nav .flex-prev {
            display: none;
        }
        .wrap_slidecaption h1{
            line-height: 14px;
            font-size: 60px;
        }

    }

    @media (max-width: 375px) {
        .wrap_slidecaption h2 {
            font-size: 14px;
        }

    }
</style>
@if(Session::get('lang') == 'th')
<style>

.slidecaption {
position: relative;
color: #FFF;
font-size: 72px;
opacity: 0;
font-family: 'kanit', cursive;
}
</style>
@else
<style>
      .slidecaption {
position: relative;
color: #FFF;
font-size: 72px;
opacity: 0;
font-family: 'Caveat Brush', cursive;
}

</style>
@endif

<body class="fullpage_scroll body_overflow">

    @include('frontend.inc_menu')

    <div id="fullpage">
        <section class="section container-fluid">
            <div class="row rowh100">
                <div class="col-12 nopan wrap_banner bannerhome">

                    <div class="indexslide flexslider">
                        <div class="social-Media">
                                
                                @if(Session::get('lang') == 'en')
                                <div class="dropdown">
                                
                                <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('local/filesss/images/flag_en.jpg')}}">  <a href="{{url('/en')}}" >En
                                        </a>
                                </button>                   
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start">
                                        <button class="dropdown-item" type="button">
                                                <img src="{{ asset('local/filesss/images/flag_th.jpg')}}"><a href="{{url('/th')}}"> Th
                                                </a>
                                        </button>
                                        <button class="dropdown-item" type="button">
                                            <img src="{{ asset('local/filesss/images/flag_en.jpg')}}">  <a href="{{url('/cn')}}" >Cn
                                            </a></button>     
                                </div> 
                                </div>  
                                @elseif(Session::get('lang') == 'th')
                                <div class="dropdown">
                                
                                        <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('local/filesss/images/flag_th.jpg')}}"><a href="{{url('/th')}}"> Th
                                                </a> </button>     
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start">
                                                <button class="dropdown-item" type="button">
                                                        <img src="{{ asset('local/filesss/images/flag_en.jpg')}}">  <a href="{{url('/cn')}}" >Cn
                                                        </a></button>   
                                                <button class="dropdown-item" type="button">
                                                                <img src="{{ asset('local/filesss/images/flag_en.jpg')}}">  <a href="{{url('/en')}}" >En
                                                                </a></button>  
                                                                
                                                                  
                                       </div> 
                                    </div>
                                @elseif(Session::get('lang') == 'cn')
                                <div class="dropdown">
                                
                                    <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('local/filesss/images/flag_en.jpg')}}">  <a href="{{url('/cn')}}" >Cn
                                            </a> </button>     
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start">
                                           
                                            <button class="dropdown-item" type="button">
                                                            <img src="{{ asset('local/filesss/images/flag_en.jpg')}}">  <a href="{{url('/en')}}" >En
                                                            </a></button> 
                                                            <button class="dropdown-item" type="button">
                                                                <img src="{{ asset('local/filesss/images/flag_th.jpg')}}"><a href="{{url('/th')}}"> Th
                                                                </a>
                                                        </button>     
                                   </div> 
                                </div>
                                
                                @endif
                               
                        
                           
                            <form id="content">
                                <input type="text" name="input" class="input" id="search-input">
                                <button type="reset" class="search" id="search-btn"></button>
                                <a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                            </form>
                        </div>
                        
                        
                        <div class="row button">
                            <div class="col-6 col-md-6 col-lg-6">

                                <div class="button-product">
                                    <a href="{{ url('exclusive_tour')}}">
                                          <img src="{{ asset('local/filesss/images/package_tour.jpg')}}" alt="Avatar" class="button-product-image" style="width: 100%;">
                                          <div class="button-product-overlay">
                                            <div class="button-product-text">
                                                {{Session::get('lang') == 'th' ? 'ทัวร์พิเศษ' :  ' '}}
                                                {{Session::get('lang') == 'en' ? 'Exclusive Tour' :  ' '}}
                                                {{Session::get('lang') == 'cn' ? '獨家旅遊' :  ' '}}

                                                 <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                          </div>
                                      </a>
                                </div>

                            </div>
                            <div class="col-6 col-md-6 col-lg-6">

                                <div class="button-product">
                                    <a href="{{ url('ticket')}}">
                                          <img src="{{asset('local/filesss/images/ticket.jpg')}}" alt="Avatar" class="button-product-image" style="width: 100%;">
                                          <div class="button-product-overlay">
                                            <div class="button-product-text">
                                                {{Session::get('lang') == 'th' ? 'ตั๋วเดินทาง' :  ' '  }} 
                                                {{Session::get('lang') == 'en' ? 'Ticket' :  ' '  }} 
                                                {{Session::get('lang') == 'cn' ? '票' :  ' '  }} 

                                                <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                          </div>
                                      </a>
                                </div>

                            </div>

                        </div>
                        <div id="flexslider" class="flexslider">
                          
                            <ul class="slides">
                                    @foreach ($bannershow as $r)
                                    
                            <li style="background-image: url(local/assets/images/banner/{{ $r->bannerword_img }}">
                                    <div class="wrap_slidecaption">
                                        <div class="slidecaption slideleft">
                                            <h1>
                                                {{Session::get('lang') == 'th' ? $r->bannerword_th : '' }} 
                                                {{Session::get('lang') == 'en' ? $r->bannerword_en : '' }} 
                                                {{Session::get('lang') == 'cn' ? $r->bannerword_cn  : '' }}
                                                <span>
                                                {{Session::get('lang') == 'th' ? $r->bannerword_th1 :  ''}}
                                                {{Session::get('lang') == 'en' ? $r->bannerword_en1 :  ''}}
                                                {{Session::get('lang') == 'cn' ? $r->bannerword_cn1 :  ''}}
                                                </span>
                                            </h1>
                                        </div>
                                        <div class="slidecaption slideright">
                                            <h2> 
                                                {{Session::get('lang') == 'th' ? $r->bannerword_th2 :  ''}} 
                                                {{Session::get('lang') == 'th' ? $r->bannerword_en2 :  ''}} 
                                                {{Session::get('lang') == 'th' ? $r->bannerword_cn2 :  ''}} 
                                                <br>
                                                {{Session::get('lang') == 'th' ? $r->bannerword_th3 :  ''}}
                                                {{Session::get('lang') == 'th' ? $r->bannerword_en3 :  ''}}
                                                {{Session::get('lang') == 'th' ? $r->bannerword_cn3 :  ''}}

                                            </h2>
                                        </div>
                                    </div>
                            </li>
                                @endforeach

                            </ul>
                            

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
                //animationLoop: false,
                start: function(slider) {
                    $('.slidecaption, .btn_slide ').removeClass('actioncaption');
                    $('.flex-active-slide').find('.slidecaption, .btn_slide').addClass('actioncaption');
                },
                after: function(slider) {
                    $('.slidecaption, .btn_slide ').removeClass('actioncaption');
                    $('.flex-active-slide').find('.slidecaption, .btn_slide').addClass('actioncaption');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors: ['HOME', 'Profile', 'Services', 'Stories', 'Gallery', 'Contact'],
                //scrollOverflow: true,
                responsiveWidth: 1025,
                responsiveHeight: 580,
                afterLoad: function(anchorLink, index) {
                    var loadedSection = $(this);
                    //using index
                    if (index == 1) {
                        $('.wrap_mainmenu').removeClass('active');
                        $('.wrap_mainmenu ul li').removeClass('active');
                        $('.tel_no').fadeIn();
                        $('.navbar_bg').removeClass('sticky');
                    } else {
                        $('.wrap_mainmenu').addClass('active');
                        $('.wrap_mainmenu ul li').removeClass('active');
                        $('.wrap_mainmenu ul li').eq(index - 2).addClass('active');
                        $('.tel_no').fadeOut();
                        $('.navbar_bg').addClass('sticky');
                    }

                    var slh = $('.fp-slides').outerHeight();
                    //$('.slide .fp-tableCell').css('height', slh);
                },
                afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
                    var leavingSlide = $(this);
                }
            });
        });
    </script>
    <script>
        // updated
        const input = document.getElementById("search-input");
        const searchBtn = document.getElementById("search-btn");

        const expand = () => {
            searchBtn.classList.toggle("close");
            input.classList.toggle("square");
        };

        searchBtn.addEventListener("click", expand);




        //  old version
        //
        // function expand() {
        //   $(".search").toggleClass("close");
        //   $(".input").toggleClass("square");
        //   if ($('.search').hasClass('close')) {
        //     $('input').focus();
        //   } else {
        //     $('input').blur();
        //   }
        // }
        // $('button').on('click', expand);
        //
    </script>
</body>

</html>