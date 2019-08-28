@extends('main')
@section('css')
{{-- <link rel="stylesheet" type="text/css" id="bootstrap-css" href="{{'//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'}}">
--}}
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload {
        width: 100%;
    }
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="card-block">
        <div class="row col-12">
            <ul class="breadcrumb-title col-12">
                <li class="breadcrumb-item" style="margin-top: 20px;">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">เพิ่ม Tour Package</a>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <hr style="width: 95%;" style="margin-top: 20%;">
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-12">
                    <form name="myfrom" method="post" id="tourr" action="{{ route('ticketupdate')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $tickedit[0]->ticket_id}}" >

                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <h5> ภาษาไทย</h5>
                            </div>
                            <div class="col-sm-6">
                                <h5> Englist</h5>
                            </div>

                        </div>
                        

                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> ตั๋ว :</label>
                                <input type="text" class="form-control" name="ticket_name_th" 
                            value="{{ $tickedit[0]->ticket_name_th}}"
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Ticket :</label>
                                <input type="text" class="form-control" name="ticket_name_en" 
                                value="{{ $tickedit[0]->ticket_name_th}}"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <h5> รายละเอียด</h5>
                            </div>
                            <div class="col-sm-6">
                                <h5> Detail</h5>
                            </div>

                        </div>
                    

                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> ราคา :</label>
                                <input type="text" class="form-control" name="ticket_pri_th" 
                                value="{{ $tickedit[0]->ticket_name_th}}"
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Price :</label>
                                <input type="text" class="form-control" name="ticket_pri_en" 
                                value="{{ $tickedit[0]->ticket_name_th}}"
                                    autocomplete="off">
                            </div>

                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm">
                                    <label>รายละเอียดตั๋ว /Ticket Detail</label>
                                    <table class="table table-bordered" id="detail">
                                        <thead>
                                            <tr>
                                                <th class="text-center">รายละเอียดตั๋ว</th>
                                                <th class="text-center">Ticket Detail</th>
                                                <th class="text-center" style="width:5%">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="addexperitise1()"><i class="fa fa-plus"></i></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="experitise1">
                                                @if(!empty($tickedit3))
                                                @php
                                                     $row3 = 0;
                                                 
                                                @endphp
                                                    @foreach ($tickedit3 as $item2)
                                                    @php
                                                         $row3 ++;
                                                    @endphp
                                                            <tr id="row{{$row3}}">
                                                                
                                                                <td><input type="text" value="{{$item2->ticket_detail_th}}" class="form-control" name="ticket_detail_th[]"></td>
                                                                <td><input type="text" value="{{$item2->ticket_detail_en}}" class="form-control" name="ticket_detail_en[]"></td>
                                                                <td class="text-center"><a href="javascript:;" id="{{ $item2->ticket_detail_id }}" onclick="ticketdetaildel({{$item2->ticket_detail_id}})"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>
                                                            </tr>
                                                     @endforeach
                                                @endif
                                           
                                        </tbody>
                                    </table><br>
                                    <input type="hidden" id="countexperitise1" value="0">
                                </div>
                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm">
                                <label>วันจอง / วันเดินทางไป</label>
                                <table class="table table-bordered" id="date">
                                    <thead>
                                        <tr>
                                            <th class="text-center">วันที่จอง</th>
                                            <th class="text-center">วันเดินทาง</th>
                                            <th class="text-center">Ticketing date</th>
                                            <th class="text-center" >Departure date</th>
                                            <th class="text-center" style="width:5%">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="addexperitise2()"><i class="fa fa-plus"></i></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="experitise2">
                                            @if(!empty($tickedit2))
                                            @php
                                                 $row2 = 0;
                                             
                                            @endphp
                                                @foreach ($tickedit2 as $item1)
                                                @php
                                                     $row2 ++;
                                                @endphp
                                                        <tr id="rowb{{$row2}}">
                                                            
                                                            <td><input type="text" value="{{$item1->ticket_date_th}}" class="form-control" name="ticket_date_th[]"></td>
                                                            <td><input type="text" value="{{$item1->ticket_date_depart_th}}" class="form-control" name="ticket_date_depart_th[]"></td>
                                                            <td><input type="text" value="{{$item1->ticket_date_en}}" class="form-control" name="ticket_date_en[]"></td>
                                                            <td><input type="text" value="{{$item1->ticket_date_depart_en}}" class="form-control" name="ticket_date_depart_en[]"></td>
                                                            <td class="text-center"><a href="javascript:;" id="{{ $item1->ticket_date_id }}" onclick="ticketdatedel({{$item1->ticket_date_id}})"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>
                                                        </tr>
                                                 @endforeach
                                            @endif
                                    </tbody>
                                </table><br>
                                <input type="hidden" id="countexperitise2" value="0">
                            </div>
                        </div>

                        <div class="form-group row col-12">
                                <div class="col-sm">
                                    <label>รายละเอียดโปรโมชั่น / Promotion Detail </label>
                                    <table class="table table-bordered" id="promo">
                                        <thead>
                                            <tr>
                                                <th class="text-center">รายละเอียดโปรโมชั่น</th>
                                                <th class="text-center">Promotion Detail</th>
                                                <th class="text-center" style="width:5%">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="addexperitise3()"><i class="fa fa-plus"></i></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="experitise3">
                                            @if(!empty($tickedit5))
                                            @php
                                                 $row4 = 0;
                                             
                                            @endphp
                                                @foreach ($tickedit5 as $item3)
                                                @php
                                                     $row4 ++;
                                                @endphp
                                                        <tr id="rowb2{{$row4}}">
                                                            
                                                            <td><input type="text" value="{{$item3->ticket_promo_name_th}}" class="form-control" name="ticket_promo_name_th[]"></td>
                                                            <td><input type="text" value="{{$item3->ticket_promo_name_en}}" class="form-control" name="ticket_promo_name_en[]"></td>

                                                            <td class="text-center"><a href="javascript:;" id="{{ $item3->ticket_promo_id }}" onclick="ticketpromodel({{$item3->ticket_promo_id}})"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>
                                                        </tr>
                                                 @endforeach
                                            @endif
                                        </tbody>
                                    </table><br>
                                    <input type="hidden" id="countexperitise3" value="0">
                                </div>
                            </div>
                     
                    
                        <div class="form-group">

                                <label>แก้ไขภาพหน้าปก</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
    
                                        <span class="btn btn-success btn-block btn-file">
                                            Browse… <input type="file" id="imgInp" name="imgInp" >
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div >
                                <div> <img id='img-upload'   src="{{asset('local/assets/images/ticket/'.$tickedit[0]->ticket_img) }}"  /></div>
                                {{-- <img src="{{asset('local/assets/images/ticket/'.$tickedit[0]->ticket_img) }}"
                                id='img-upload' height="200px" width="20%" /> --}}
                    
                                <input type="hidden" name="oldimg" value="{{$tickedit[0]->ticket_img}}">
                        </div>

                        <br>
                        <br>
                        <br>
                        <div class="form-group">

                            <label>เพิ่มภาพประกอบ : *เลือกหลายรูปแบบคลุมดำ</label>
                            <table class="table table-bordered" id="imggg">
                                    <tbody >
                            @if(!empty($tickedit4))
                                            @php
                                                 $row5 = 0;
                                             
                                            @endphp
                                                @foreach ($tickedit4 as $img)
                                                @php
                                                     $row5 ++;
                                                @endphp
                                                
                                                <tr id="rowb5{{$row5}}">
                                                       
                                                           <td>
                                                                <img id="preview"
                                                                src="{{asset('local/assets/images/ticket/'.$img->ticket_img)}}"
                                                                height="200px" width="200px" />
                                                                <input type="hidden" name="oldimg" value="{{$img->ticket_img}}">
                                                                <button type="button" id="{{ $img->ticket_image_id }}" class="btn btn-danger " onclick="ticketimgdel({{$img->ticket_image_id }})"><i
                                                                    class="fa fa-trash"></i> ลบ</button>
                                                                </td>
                                                                </tr>                                                        
                                                 @endforeach

                                            @endif
                            </table>
                            <div class="input-group">
                                <span class="input-group-btn">

                                    <span class="btn btn-success btn-block btn-file">
                                        Browse… <input type="file" id="imgInp2" name="imgInp2[]" multiple>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                           
                            <div> <img id='img-upload2' height="200px" width="200px"  /></div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 95%;">



    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group">

                <button tpye="submit" form="tourr" class="btn btn-primary btn-block">ยืนยัน</button>

            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <a href="{{ route('ticketpack')}}"><button tpye="button"
                        class="btn btn-danger btn-block">กลับหน้าหลัก</button></a>

            </div>
        </div>
    </div>




</div>
@endsection
@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>
<script>
    $(document).ready( function() {
                $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
                });
        
                $('.btn-file :file').on('fileselect', function(event, label) {
                    
                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;
                    
                    if( input.length ) {
                        input.val(log);
                    } else {
                        if( log ) alert(log);
                    }
                
                });
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#img-upload').attr('src', e.target.result);
                        }
                        
                        reader.readAsDataURL(input.files[0]);
                    }
                }

               
        
                $("#imgInp").change(function(){
                    readURL(this);
                }); 

        
            });
</script>
<script>
$(document).ready( function() {
                $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
                });
        
                $('.btn-file :file').on('fileselect', function(event, label) {
                    
                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;
                    
                    if( input.length ) {
                        input.val(log);
                    } else {
                        if( log ) alert(log);
                    }
                
                });
     

                function readURL2(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#img-upload2').attr('src', e.target.result);
                        }
                        
                        reader.readAsDataURL(input.files[0]);
                    }
                }
        
              

                $("#imgInp2").change(function(){
                    readURL2(this);
                }); 	
            });
</script>

<script>
    function addexperitise1(){
        var newcount = parseInt($('#countexperitise1').val()) + 1;
        var row = '';
        row += '<tr id="row'+newcount+'">';
        row += '<td><input type="text" class="form-control" name="ticket_detail_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="ticket_detail_en[]"></td>';
        row+='<td class="text-center"><a href="javascript:;" onclick="delexperitise1('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
        row += '</tr>';
        
        $('#countexperitise1').val(newcount);
        
        $('#experitise1').append(row);
    }
    
    function delexperitise1(row){
        $('#row'+row).remove();
    }
</script>
<script>
        function addexperitise2(){
            var newcount = parseInt($('#countexperitise2').val()) + 1;
            var row = '';
            row += '<tr id="rowb'+newcount+'">';
            row += '<td><input type="text" class="form-control" name="ticket_date_th[]"></td>';
            row += '<td><input type="text" class="form-control" name="ticket_date_depart_th[]"></td>';
            row += '<td><input type="text" class="form-control" name="ticket_date_en[]"></td>';
            row += '<td><input type="text" class="form-control" name="ticket_date_depart_en[]"></td>';
            row+='<td class="text-center"><a href="javascript:;" onclick="delexperitise2('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
            row += '</tr>';
            
            $('#countexperitise2').val(newcount);
            
            $('#experitise2').append(row);
        }
        
        function delexperitise2(row){
            $('#rowb'+row).remove();
        }
    </script>
    <script>
            function addexperitise3(){
                var newcount = parseInt($('#countexperitise3').val()) + 1;
                var row = '';
                row += '<tr id="rowb2'+newcount+'">';
                row += '<td><input type="text" class="form-control" name="ticket_promo_name_th[]"></td>';
                row += '<td><input type="text" class="form-control" name="ticket_promo_name_en[]"></td>';
                row+='<td class="text-center"><a href="javascript:;" onclick="delexperitise3('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
                row += '</tr>';
                
                $('#countexperitise3').val(newcount);
                
                $('#experitise3').append(row);
            }
            
            function delexperitise3(row){
                $('#rowb2'+row).remove();
            }
        </script>

<script>
    function ticketimgdel(id){
            swal({
            title: "ยืนยัน?",
            text: "คุณต้องการลบรายการนี้ หรือไม่?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "ยกเลิก",
            confirmButtonText: "ยืนยัน",
            closeOnConfirm: false
            },
            function(isConfirm) {
            if (isConfirm) {
                    $.get('{{url("ticketimgdel")}}' + '/' + id, function (data) {
                        $('#imggg').load(document.URL + ' #imggg');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }


        function ticketdatedel(id){
            swal({
            title: "ยืนยัน?",
            text: "คุณต้องการลบรายการนี้ หรือไม่?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "ยกเลิก",
            confirmButtonText: "ยืนยัน",
            closeOnConfirm: false
            },
            function(isConfirm) {
            if (isConfirm) {
                    $.get('{{url("ticketdatedel")}}' + '/' + id, function (data) {
                        $('#date').load(document.URL + ' #date');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }

        function ticketdetaildel(id){
            swal({
            title: "ยืนยัน?",
            text: "คุณต้องการลบรายการนี้ หรือไม่?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "ยกเลิก",
            confirmButtonText: "ยืนยัน",
            closeOnConfirm: false
            },
            function(isConfirm) {
            if (isConfirm) {
                    $.get('{{url("ticketdetaildel")}}' + '/' + id, function (data) {
                        $('#detail').load(document.URL + ' #detail');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }

        function ticketpromodel(id){
            swal({
            title: "ยืนยัน?",
            text: "คุณต้องการลบรายการนี้ หรือไม่?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "ยกเลิก",
            confirmButtonText: "ยืนยัน",
            closeOnConfirm: false
            },
            function(isConfirm) {
            if (isConfirm) {
                    $.get('{{url("ticketpromodel")}}' + '/' + id, function (data) {
                        $('#promo').load(document.URL + ' #promo');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }
    </script>
@endsection