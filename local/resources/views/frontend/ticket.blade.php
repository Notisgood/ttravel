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
            <div class="row pad-bg-contact wow fadeInDown">
                <div class="col-12 nopan img-bg-contact">
                    <h2>Ticket </h2>
                    <p>Make your travel easy.</p>
                    <img src="{{ asset('local/filesss/images/bg-ticket.jpg')}}" class="img-fluid" style="width: 100%;">
                </div>

                <div class="col-12 bg-about">
                    
                        <div class="col-12 pad-img-ticket">
                            <div class="row pad-ticket">
                                <div class="col-12 col-md-8 col-lg-8 wow fadeInDown">
                                    <div class="img_ticket">
                                      <img src="{{ asset('local/assets/images/ticket/'.$tickett[0]->ticket_img)}}" alt="Avatar" class="image_ticket" style="width:100%">
                                      <div class="middle_ticket">
                                      <a href="{{url('read_ticket/'.$tickett[0]->ticket_id)}}"><div class="text_ticket">{{Session::get('lang') == 'th' ? 'อ่านเพิ่มเติม' : 'ReadMore'}} </div></a>
                                      </div>
                                    </div>
                                </div>
                                    
                                
                                <div class="col-12 col-md-4 col-lg-4 wow fadeInDown">
                                        @foreach ($tickett2 as $r)
                                    <div class="pad-ticket">
                                        <div class="img_ticket">
                                          <img src="{{ asset('local/assets/images/ticket/'.$r->ticket_img)}}" alt="Avatar" class="image_ticket" style="width:100%">
                                          <div class="middle_ticket">
                                             <a href="{{url('read_ticket/'.$r->ticket_id)}}"><div class="text_ticket">{{Session::get('lang') == 'th' ? 'อ่านเพิ่มเติม' : 'ReadMore'}} </div></a>
                                          </div>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                    {{-- <div class="pad-ticket">
                                        <div class="img_ticket">
                                          <img src="{{asset('local/filesss/images/imgticket_1.jpg')}}" alt="Avatar" class="image_ticket" style="width:100%">
                                          <div class="middle_ticket">
                                             <a href="read_ticket.php"><div class="text_ticket">ReadMore</div></a>
                                          </div>
                                        </div>
                                        
                                    </div> --}}
                                </div>

                          
                            </div>
                            <div class="row wow fadeInDown">
                                @foreach ($tickett3 as $r2)
                                    
                               
                                <div class="col-12 col-md-4 col-lg-4 fadeInRight">
                                    <div class="pad-ticket">
                                        <div class="img_ticket">
                                          <img src="{{ asset('local/assets/images/ticket/'.$r2->ticket_img)}}" alt="Avatar" class="image_ticket" style="width:100%">
                                          <div class="middle_ticket">
                                             <a href="{{url('read_ticket/'.$r2->ticket_id)}}"><div class="text_ticket">{{Session::get('lang') == 'th' ? 'อ่านเพิ่มเติม' : 'ReadMore'}} </div></a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="col-12 col-md-4 col-lg-4">
                                    <div class="pad-ticket">
                                        <div class="img_ticket">
                                          <img src="{{ asset('local/filesss/images/imgticket_1.jpg')}}" alt="Avatar" class="image_ticket" style="width:100%">
                                          <div class="middle_ticket">
                                             <a href="read_ticket.php"><div class="text_ticket">ReadMore</div></a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="pad-ticket">
                                        <div class="img_ticket">
                                          <img src="{{ asset('local/filesss/images/imgticket_1.jpg')}}" alt="Avatar" class="image_ticket" style="width:100%">
                                          <div class="middle_ticket">
                                             <a href="read_ticket.php"><div class="text_ticket">ReadMore</div></a>
                                          </div>
                                        </div>
                                    </div>
                                </div> --}}
                                
                            </div>
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
                    {{$tickett3->links()}}
                </div>

            </div>

        </section>
    </div>
    <script>
        $('.panel-collapse').on('show.bs.collapse', function() {
            $(this).siblings('.panel-heading').addClass('active');
        });

        $('.panel-collapse').on('hide.bs.collapse', function() {
            $(this).siblings('.panel-heading').removeClass('active');
        });
    </script>
</body>

</html>