<!doctype html>
<html>

<head>
    @include('frontend.inc_header')
</head>

<body class="fullpage_scroll body_overflow">

    @include('frontend.inc_menu')

    <div id="fullpage">
        <section class="section container-fluid">
            <div class="row pad-bg-contact">
                <div class="col-12 nopan img-bg-contact wow fadeInDown">
                    <h2>Contact us </h2>
                    <p>Contact us at any time</p>
                    <img src="{{asset('local/filesss/images/bg-contact-1.jpg')}}" class="img-fluid" style="width: 100%;">
                </div>
            </div>
            <div class="row rowh100 bg-contact">
                <div class="col-12 wow fadeInDown">
                    <div class="text-contact">
                        <div class="from-contact-1">
                            <h4>{{Session::get('lang') == 'th' ? 'รายละเอียดการติดต่อ' : 'Contact Information' }}</h4>
                        </div>
                    </div>
                    <div class="row padding_icon_contact wow fadeInDown">
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-4">
                                    <div class="padding-bottomimages">
                                        <img src="{{ asset('local/filesss/images/icon-contact-1.png')}}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-9 col-md-8 col-lg-8 map_contact">
                                    <div class="text_map">
                                        <p>{{Session::get('lang') == 'th' ?  '28/42 ถนนมาเจริญ แขวงหนองแขม เขตหนองแขม กทม 10160' : '28/42 Ma Charoen Road, Nong Khaem Subdistrict, Nong Khaem District, Bangkok 10160' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-4">
                                    <div class="padding-bottomimages">
                                        <img src="{{asset('local/filesss/images/icon-contact-2.png')}}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-9 col-md-8 col-lg-8 map_contact">
                                    <div class="text_map">
                                        <p>086-948-7777 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="row">
                                <div class="col-3 col-md-4 col-lg-4">
                                    <div class="">
                                        <img src="{{asset('local/filesss/images/icon-contact-3.png')}}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-9 col-md-8 col-lg-8 map_contact">
                                    <div class="text_map">
                                        <p>scoottravel.th@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-12 wow fadeInDown">
                    <div class="from-contact-2">
                        <h4>{{Session::get('lang') == 'th' ? 'ที่อยู่ของเรา' : 'Where We Located' }} </h4>
                    </div>
                    <div class="map-contact">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.5416427848018!2d100.34104221482971!3d13.685612290390326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2be044bdc88b9%3A0xa1339cb0682d1e29!2z4Liq4Li04Lij4Li0IOC4reC5gOC4p-C4meC4tOC4pyDguYDguJ7guIrguKPguYDguIHguKnguKEgODEgOiBTaXJpIEF2ZW51ZSBQaGV0a2FzZW0gODE!5e0!3m2!1sth!2sth!4v1566455480381!5m2!1sth!2sth" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>
                </div>
                
          
                <div class="col-12 wow fadeInDown">
                        <form name="myfrom" method="post" id="emailin" action="{{ route('emailIn')}}">
                                {{ csrf_field() }}
                    <div class="from-contact-3">
                        <h4>{{Session::get('lang') == 'th' ? 'ที่อยู่ของเรา' : 'Where We Located' }} </h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="text-form-contact">
                                <p>{{Session::get('lang') == 'th' ? 'ชื่อของคุณ' : 'Your Name*' }} <span>*</span></p>
                                <input type="text" name="email_name" class="form-contact" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="text-form-contact">
                                <p>{{Session::get('lang') == 'th' ? 'อีเมลของคุณ' : 'Your Email*' }} <span>*</span></p>
                                <input type="email" name="email_umail" class="form-contact" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="text-form-contact">
                                <p>{{Session::get('lang') == 'th' ? 'เบอร์โทรของคุณ' : 'Your Tel*' }} <span>*</span></p>
                                <input type="text" class="form-contact" name="email_tel" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="text-form-contact">
                                <p>{{Session::get('lang') == 'th' ? 'หัวข้อ' : 'Subject*' }} <span>*</span></p>
                                <input type="text" class="form-contact" name="email_subject" required autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="text-form-contact">
                        <p>{{Session::get('lang') == 'th' ? 'ข้อความ' : 'Message' }}</p>
                        <textarea rows="9" cols="5" class="form-control" name="email_message" placeholder="" required autocomplete="off"></textarea>

                        
                    </div>
                    <div class="text-form-contact">
                    <div class="send-contact">
                            <button tpye="submit" form="emailin" class="btn btn-mat btn-warning  ">{{Session::get('lang') == 'th' ? 'ส่ง' : 'Send' }}   </button>
                               
                         </div>
                    </div>
                </form>
                </div>
    
            </div>
        </section>
    </div>


</body>

</html>
