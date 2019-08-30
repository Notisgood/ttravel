<link rel="stylesheet" type="text/css" href="{{asset('/local/filesss/fancybox-master/dist/jquery.fancybox.min.css')}}">
<style>
	.wrap_menu{
		width: 88px;
		background: #ffffffe8;
		height: 100%;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 99;
		text-align: center;
	}
    .logo{
        padding: 17px 11px;
        margin-top: 3px;
    }
	.logo img{
		width: 100%;
		height: auto;
	}
    .wrap_btn_menu{
        position: absolute;
        left: 50%;
        width: 35px;
        top: 50%;
        transform: translate(-50% , -50%);
        margin-bottom: 5px;
        cursor: pointer;
    }
    .btn_menu{
        overflow: hidden;
    }
    .btn_menu span{
        display: block;
        height: 3px;
        width: 100%;
        background-color: #333333;
        margin-bottom: 5px;
        transition: all .5s ease-in;
        border-radius: 3px;
    }
    .text_btn_menu{
        display: block;
        font-size: 0.75rem;
        font-weight: 600;
        transition: all .5s ease-in;
        color: #333;
		margin-top: 3px;
    }
    .wrap_btn_menu:hover .btn_menu span{
        background-color: #f96c1d;
    }
    .wrap_btn_menu:hover .btn_menu span:first-child, .wrap_btn_menu.active .btn_menu span:first-child{
        transform: translate(50% , 0);
    }
    .wrap_btn_menu:hover .btn_menu span:last-child, .wrap_btn_menu.active .btn_menu span:last-child{
        transform: translate(-50% , 0);
    }
    .wrap_btn_menu:hover .text_btn_menu{
        color: #f96c1d;
    }
    .bg_mainmenu{
        position: fixed;
        background-color: #fffffff0;
        z-index: 89;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        display: none;
        padding-left: 0;
    }
    .btn_close_menu{
        position: absolute;
        right: 50px;
        top: 45px;
        color: #FFF;
        cursor: pointer;
    }
    .wrap_mainmenu{
        width: 35%;
        display: inline-block;
		vertical-align: top;
    }
    .mainmenu{
        display: none;
		padding-top: 130px;
    }
    .wrap_right_menu{
        width: 40%;
        display: inline-block;
		vertical-align: top;
    }
    .right_menu{
        display: none;
    }
	.menu_social{
		position: absolute;
		bottom: 20px;
		width: 50px;
		margin: 0 auto;
		text-align: center;
        left: 19px;
	}
	.menu_social a{
		display: block;
		font-size: 1.4rem;
		margin-top: 7px;
		color: #9e9e9e;
		transition: 0.5s;
	}
	.menu_social a.icon_facebook:hover {
		color: #3a559f;
	}
	.menu_social a.icon_twitter:hover {
		color: #55acee;
	}
	.menu_social a.icon_ig:hover {
		color: #c01977;
	}
    .menu_social a.icon_youtube:hover {
		color: #f00;
	}
	.menu_logocompany{
		width: 80px;
		height: auto;
		margin-bottom: 40px;
	}
	.list_mainmenu a{
		display: block;
		text-transform: uppercase;
		color: #666;
		font-size: 1.5rem;
		font-weight: 600;
		transition: 0.5s;
		text-align: left;
		margin-bottom: 5px;
	}
	.list_mainmenu a:hover{
		color: #fb6c1e;
		text-decoration: none;
	}
	.sub_listmenu{
		text-align: left;
		margin: 5px 0 5px 20px;
        display: none;
	}
	.sub_listmenu a{
		display: inline-block;
		font-size: 1.1rem;
		text-transform: none;
		font-weight: 500;
		position: relative;
		padding: 0 30px 0 15px;
	}
	.sub_listmenu a:before{
		content: "";
		width: 5px;
		height: 5px;
		background-color: #666;
		border-radius: 50%;
		position: absolute;
		top: 11px;
		left: 0;
	}
	.box_selectlang{
		text-align: left;
		position: relative;
		color: #666;
        margin-top: 25px;
        padding-top: 25px;
        font-size: 1rem;
	}
	.box_selectlang:before{
		content: "";
		background-color: #666;
		width: 50px;
		height: 3px;
		position: absolute;
		top: 0;
		left: 0;
	}
	.box_selectlang div{
		display: inline-block;
	}
	.list_lang{
		padding-left: 30px;
	}
	.icon_circle{
		background-color: #666;
		width: 5px;
		height: 5px;
		border-radius: 50%;
		margin: 10px 20px 0;
		vertical-align: top;
	}
	.list_lang a{
		color: #666;
		transition: 0.5s;
		font-weight: 500;
	}
	.list_lang a.active{
		color: #fff;
		text-decoration: underline;
	}
	.list_lang a:hover{
		color: #fff;
	}
	.menu_desccontact{
		border-left: 1px solid #2f2f2f;
        color: #666;
        font-weight: 500;
        text-align: left;
        margin-top: 219px;
        padding: 30px 50px 30px 80px;
        line-height: 2.5;
	}
	.menu_desccontact a{
		color: #666;
		font-size: 1.4rem;
		padding: 0 10px;
		transition: 0.5s;
	}
	.menu_desccontact a:hover{
		color: #fff;
	}
	.menu_sendenquiry a{
		margin-top: 30px;
		font-size: 1.2rem;
		display: block;
		padding-left: 0;
		position: relative;
	}
	.menu_sendenquiry a:before{
		content: "";
		background-color: #666;
		width: 70px;
		height: 2px;
		position: absolute;
		bottom: 0;
		left: 0;
		transition: 0.5s;
	}
	.menu_sendenquiry a:hover{
		text-decoration: none;
		color: #fb6c1e;
	}
	.menu_sendenquiry a:hover:before{
		background-color: #fff;
	}
    .menu_maps a{
        font-size: 1rem;
    }
    .list_mainmenu a.menu_services:hover{
        cursor: pointer;
        color: #fb6c1e;
    }
    address{
        margin-bottom: 0rem;
    }
    a:not([href]):not([tabindex]) {
        color: #666;
        text-decoration: none;
    }
    /*responsive*/
    
    .sub_listmenu a.asia{
        padding: 0;
    }
    .sub_listmenu a.asia:before{
        display: none;
    }
    @media (max-width: 991px){
        .wrap_right_menu{
            display: none;
        }
        
        .wrap_mainmenu{
            width: 100%;
            padding-left: 70px;
        }
    }
    @media (max-width: 767px){
        .wrap_menu{
            width: 100%;
            height: 54px;
            text-align: left;
        }
        .logo img{
            width: 50px;
            height: auto;
        }
        .wrap_btn_menu{
            right: 0;
            left: auto;
        }
        .menu_social{
            display: none;
        }
        .text_btn_menu{
            display: none;
        }
        .logo {
            padding: 0px 11px 0;
        }
        .btn_menu{
            padding-top: 5px;
        }
        .wrap_mainmenu{
            padding-left: 30px;
        }
        .mainmenu{
            padding-top: 30px;
        }
        .list_mainmenu a{
            font-size: 1.2rem;
        }
        .menu_logocompany{
            margin-bottom: 20px;
        }
        .sub_listmenu a{
            font-size: 1rem;
            display: block;
        }
		.btn_close_menu{
			top: 20px;
			right: 20px;
		}
    }
     @media (max-width: 575px){
         .wrap_btn_menu{
             width: 25px;
         }
         .wrap_menu{
             background-color: #ffffffe8;
         }
    }
    
    @media (min-width: 1025px)and (max-height: 750px){
        .mainmenu{
            padding-top: 100px;
        }
        .list_mainmenu a{
            font-size: 1.3rem;
        }
        
}
   
</style>

<nav class="wrap_menu">
	<div class="logo">
		<a href="{{ url('index')}}"><img src="{{asset('local/filesss/images/logo-pap-1.png')}}" alt=""></a>
        <div class="wrap_btn_menu">
            <div class="btn_menu"><span></span><span></span><span></span></div>
            <div class="text_btn_menu">{{Session::get('lang') == 'th' ? 'เมนู' :  ' '}}
                    {{Session::get('lang') == 'en' ? 'MENU' :  ' '}}
                {{Session::get('lang') == 'cn' ? '菜單' :  ' '}}</div>
        </div>
        
        <div class="bg_mainmenu">
            <div class="btn_close_menu">Close</div>
            <div class="wrap_mainmenu">
                <div class="mainmenu">
                	<div class="menu_logocompany"><img src="{{asset('local/filesss/images/logo-pap-1.png')}}" alt=""></div>
                    <div class="list_mainmenu"><a href="
                        {{url('index')}}">{{Session::get('lang') == 'th' ? 'หน้าหลัก' :  ''}}
                         {{Session::get('lang') == 'en' ? 'HOME' :  ' '}}
                         {{Session::get('lang') == 'cn' ? '家' :  ' '}}

                    </a></div>
                    <div class="list_mainmenu"><a href="{{url('about')}}">
                        {{Session::get('lang') == 'th' ? 'เกี่ยวกับ' :  ''}}
                        {{Session::get('lang') == 'en' ? 'ABOUT US' :  ' '}}
                        {{Session::get('lang') == 'cn' ? '關於我們' :  ' '}}

                    </a></div>
                	<div class="list_mainmenu">
                		<a class="menu_services">
                            {{Session::get('lang') == 'th' ? 'แพ็คเกจ ทัวร์' :  ''}}
                            {{Session::get('lang') == 'en' ? 'PACKAGE TOUR' :  ' '}}
                            {{Session::get('lang') == 'cn' ? '包裹旅遊' :  ' '}}

                        </a>
                        <div class="sub_listmenu">
                            @php
                                $tawep = DB::table('continent')
                                ->get();
                            @endphp
                            @foreach ($tawep as $key => $r)
                                
                            
                            <a href="{{ route('package_tour',array('cd'=>$r->continent_id) )}}" class="asia"><i class="fa fa-caret-right" aria-hidden="true"></i> 
                                {{Session::get('lang') == 'th' ? $r->continent_name_th : '' }}
                                {{Session::get('lang') == 'en' ? $r->continent_name_en : '' }}
                                {{Session::get('lang') == 'cn' ? $r->continent_name_cn : '' }}

                            </a>
                            <div class="sub_listmenu">
                                @php
                                $pated = DB::table('country')
                                    ->join('continent', 'country_continent_id', '=', 'continent_id')
                                    ->where('country_continent_id', $r->continent_id)
                                    ->get();
                                @endphp
                                @foreach ($pated as $r2)
                                    
                                
                                <a href="{{ route('package_tour',array('cd'=>$r->continent_id))}}"> 
                                    {{Session::get('lang') == 'th' ? $r2->country_name_th :  ''}}
                                    {{Session::get('lang') == 'en' ? $r2->country_name_en :  ''}}
                                    {{Session::get('lang') == 'cn' ? $r2->country_name_cn :  ''}}

                                </a>
                                @endforeach
                                
                            </div>
                            @endforeach
                            
                		</div>
                	</div>
                    <div class="list_mainmenu"><a href="{{ url('exclusive_tour')}}">
                        {{Session::get('lang') == 'th' ? 'ทัวร์พิเศษ' : ' '}}
                        {{Session::get('lang') == 'en' ? 'EXCLUSIVE TOUR' : ''}} 
                        {{Session::get('lang') == 'cn' ? '獨家旅遊' : ' '}}

                    </a></div>
                    <div class="list_mainmenu"><a href="{{ url('ticket')}}">
                        {{Session::get('lang') == 'th' ? 'ตั๋วเดินทาง' : ' '}}
                        {{Session::get('lang') == 'en' ? 'TICKET' : ' '}}
                        {{Session::get('lang') == 'cn' ? '票' : ' '}}
                    </a></div>
                    <div class="list_mainmenu"><a href="{{ url('career')}}">
                        {{Session::get('lang') == 'th' ? 'ตำแหน่งงาน' : ' '}}
                        {{Session::get('lang') == 'en' ? 'CAREER' : ''}}
                        {{Session::get('lang') == 'cn' ? '事業' : ''}}

                    </a></div>
                    <div class="list_mainmenu"><a href="{{ url('contact')}}">
                        {{Session::get('lang') == 'th' ? 'ติดต่อเรา' : ''}}
                        {{Session::get('lang') == 'en' ? 'CONTACT US' : ''}}
                        {{Session::get('lang') == 'cn' ? '聯繫我們' : ' '}}
                        
                        </a></div>
                	<div class="box_selectlang">
                		<div>Copyright © 2019  Scoot Travel | All Rights Reserved</div>
                	</div>
                </div>
            </div><div class="wrap_right_menu">
                <div class="right_menu">
                	<div class="menu_desccontact">
                		<address>{{Session::get('lang') == 'th' ?  '28/42 ถนนมาเจริญ แขวงหนองแขม เขตหนองแขม กทม. 10160' : '28/42 Ma Charoen Road, Nong Khaem Subdistrict, Nong Khaem District, Bangkok 10160' }}</address>
                        <div>Tel. :   086-948-7777</div>
                		<div>Email. : scoottravel.th@gmail.com</div>
                		<div class="menu_maps">
                		    Location Maps : <a href="{{asset('https://goo.gl/maps/FwEmyR9iX2xVfSYK6')}}" target="_blank">View on Google Map</a> <span></span>
                            {{-- <a href="{{asset('local/filesss/images/map-1.jpg')}}" data-fancybox="images">Graphic Maps</a> --}}
                            
                		</div>
                		<div>
                			Follow Us : 
                			<a href="{{asset('https://www.facebook.com/iasignature')}}" class="icon_facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="{{asset('https://twitter.com/iasignature')}}" class="icon_twitter" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="{{asset('https://www.instagram.com/IASignature')}}" class="icon_ig" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{asset('https://www.youtube.com/channel/UCnFzdok78gLIk3nq0QLuWNQ')}}" class="icon_youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                		</div>
                		<div class="menu_sendenquiry">
                			<a href="{{url('contact')}}">Send Enquiry</a>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <div class="menu_social">
        	<a href="{{asset('https://www.facebook.com/iasignature')}}" class="icon_facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
        	<a href="{{asset('https://twitter.com/iasignature')}}" class="icon_twitter" target="_blank"><i class="fab fa-twitter"></i></a>
        	<a href="{{asset('https://www.instagram.com/IASignature/')}}" class="icon_ig" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="{{asset('https://www.youtube.com/channel/UCnFzdok78gLIk3nq0QLuWNQ')}}" class="icon_youtube" target="_blank"><i class="fab fa-youtube"></i></a>
            
        </div>
	</div>
</nav>
<script src="{{asset('local/filesss/fancybox-master/dist/jquery.fancybox.min.js')}}"></script>
    <script>
        $('[data-fancybox="images"]').fancybox({
            afterLoad: function(instance, current) {
                var pixelRatio = window.devicePixelRatio || 1;

                if (pixelRatio > 1.5) {
                    current.width = current.width / pixelRatio;
                    current.height = current.height / pixelRatio;
                }
            }
        });
    </script>
<script>
$(document).ready(function(){    
    $( '.wrap_btn_menu' ).click(function (event) {
	  if (  $( ".bg_mainmenu" ).is( ":hidden" ) ) {
            $(this).addClass("active");
            $('.bg_mainmenu').fadeIn({
                complete: function(){
                    $('.mainmenu').show("fade", {direction: "left" }, "1000");
                    $('.right_menu').show("fade", {direction: "right" }, "1000");
                }
            });
	  } else {
	  }
	  event.stopPropagation();
	});
    
    $( '.menu_services' ).click(function (event) {
	  if (  $( ".sub_listmenu" ).is( ":hidden" ) ) {
            $(this).addClass("active");
            $('.sub_listmenu').show("fade", "2000");
	  } else {
            $(this).addClass("active");
            $('.sub_listmenu').hide("fade", "1000");
	  }
	  event.stopPropagation();
	});
    
     $( '.btn_close_menu' ).click(function (event) {
         $('.wrap_btn_menu').removeClass("active");
         $('.mainmenu').hide("fade", {direction: "left" }, "1000");
         $('.right_menu').hide("fade", {direction: "right" }, "1000");
         $('.bg_mainmenu').fadeOut();
     });
});
</script>