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
                <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">แก้ไข Tour Package</a>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <hr style="width: 95%;" style="margin-top: 20%;">
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-12">
                <form name="myfrom" method="post" id="tourr" action="{{ route('tourupdate')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$tourredit[0]->tour_id}}">

                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <h5> ภาษาไทย</h5>
                            </div>
                            <div class="col-sm-6">
                                <h5> Englist</h5>
                            </div>

                        </div>

                        <div class="form-group row col-12">
                                <label class="col-sm-2 col-form-label">Exclusive Tour</label>
                                <div class="col-sm-12">
    
                                    {{-- select2 ajax query --}}
    
                                    <select name="tour_exclusive_status" id="tour_exclusive_status" class="form-control"
                                        required>
                                <option value="{{$tourredit[0]->tour_ex_id}}"> {{$tourredit[0]->tour_ex_name_th }} / {{$tourredit[0]->tour_ex_name_en}}</option>
                                        <option value="0"><--- กรุณาเลือก ---></option>

                                        <option value="2"> ทัวร์ธรรมดา / Normal Tour</option>
                                        <option value="1"> ทัวร์พิเศษ / Exclusive Tour</option>
                                    </select>
                                </div>
                            </div>


                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> แพ็คเกจ :</label>
                                <input type="text" class="form-control" name="tour_name_th" 
                                value="{{$tourredit[0]->tour_name_th}}"
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Package :</label>
                                <input type="text" class="form-control" name="tour_name_en" 
                                value="{{$tourredit[0]->tour_name_en}}"    autocomplete="off">
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
                            <label class="col-sm-2 col-form-label">ทวีป / Continent</label>
                            <div class="col-sm-12">

                                {{-- select2 ajax query --}}

                                <select name="tour_conti_id" id="country_continent_id" class="form-control"
                                    required>
                                    <option value="{{$tourredit[0]->tour_conti_id}}">{{$tourredit[0]->continent_name_th}} / {{$tourredit[0]->continent_name_en}}</option>
                                    <option value="">เลือกทวีป</option>
                                    @foreach($cont_all as $key => $r)
                                    <option value="{{ $r->continent_id }}">
                                        {{ $r->continent_name_th.' :: '.$r->continent_name_en  }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-12">
                            <label class="col-sm-2 col-form-label">ประเทศ / Country</label>
                            <div class="col-sm-12">

                                {{-- select2 ajax query --}}
                                <select name="tour_count_id" id="tour_count_id" class="form-control col-sm-12" required >
                                        <option value="{{ $tourredit[0]->tour_count_id}}">{{ $tourredit[0]->country_name_th.' :: '.$tourredit[0]->country_name_en  }}</option>
                                        <option>---- กรุณาเลือก ----</option>
                               

                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-12">
                                <label class="col-sm-2 col-form-label">จังหวัด / County</label>
                                <div class="col-sm-12">
                                        <select name="tour_county_id" id="countyshow" class="form-control" required>
                                                <option value="{{ $tourredit[0]->tour_county_id}}">{{ $tourredit[0]->county_name_th.' :: '.$tourredit[0]->county_name_en  }}</option>
                                                <option>---- กรุณาเลือก ----</option>
                                        </select>
                                </div>
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> ราคา :</label>
                                    <input type="text" class="form-control" name="tour_pri_th" 
                                    value="{{$tourredit[0]->tour_pri_th}}"   autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label> Price :</label>
                                    <input type="text" class="form-control" name="tour_pri_en" 
                                    value="{{$tourredit[0]->tour_pri_en}}"    autocomplete="off">
                                </div>
    
                            </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> สายการบิน :</label>
                                <input type="text" class="form-control" name="tour_airline_en" 
                                value="{{$tourredit[0]->tour_airline_th}}"   autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Airline :</label>
                                <input type="text" class="form-control" name="tour_airline_th" 
                                value="{{$tourredit[0]->tour_airline_en}}"    autocomplete="off">
                            </div>

                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> ระยะเวลา :</label>
                                <input type="text" class="form-control" name="tour_time_th" 
                                value="{{$tourredit[0]->tour_time_th}}"    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Period Of Time :</label>
                                <input type="text" class="form-control" name="tour_time_en" 
                                value="{{$tourredit[0]->tour_time_en}}"    autocomplete="off">
                            </div>

                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> ช่วงเวลา :</label>
                                <input type="text" class="form-control" name="tour_duration_th" 
                                value="{{$tourredit[0]->tour_duration_th}}"    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Duration :</label>
                                <input type="text" class="form-control" name="tour_duration_en" 
                                value="{{$tourredit[0]->tour_duration_en}}"    autocomplete="off">
                            </div>

                        </div>

                        <div class="form-group row col-12">
                            <div class="col-sm">
                                <label>กำหนดการเดินทาง / อัตราค่าบริการ</label>
                                <table class="table table-bordered" id="travel">
                                    <thead>
                                        <tr>
                                            <th class="text-center">วันเดินทางไป - กลับ</th>
                                            <th class="text-center">ราคา</th>
                                            <th class="text-center">Travel date - Return date</th>
                                            <th class="text-center" >Price</th>
                                            <th class="text-center" style="width:5%">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="addexperitise()"><i class="fa fa-plus"></i></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="experitise">
                                            @if(!empty($tourredit2))
                                            @php
                                                 $row2 = 0;
                                             
                                            @endphp
                                                @foreach ($tourredit2 as $item2)
                                                @php
                                                     $row2 ++;
                                                @endphp
                                                        <tr id="rowb2{{$row2}}">
                                                            
                                                            <td><input type="text" value="{{$item2->tr_date_th}}" class="form-control" name="tr_date_th[]"></td>
                                                            <td><input type="text" value="{{$item2->tr_date_pri_th}}" class="form-control" name="tr_date_pri_th[]"></td>
                                                            <td><input type="text" value="{{$item2->tr_date_en}}" class="form-control" name="tr_date_en[]"></td>
                                                            <td><input type="text" value="{{$item2->tr_date_pri_en}}" class="form-control" name="tr_date_pri_en[]"></td>
                                                            <td class="text-center"><a href="javascript:;" id="{{ $item2->tr_date_id }}" onclick="tradel({{$item2->tr_date_id}})"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>
                                                        </tr>
                                                 @endforeach
                                            @endif
                                    </tbody>
                                </table><br>
                                <input type="hidden" id="countexperitise" value="0">
                            </div>
                        </div>
                    
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> รายละเอียดทัวร์</label>
                                    <textarea rows="5" cols="5" class="form-control" name="tour_des_th" placeholder="">
                                        {{$tourredit[0]->tour_des_th}}
                                    </textarea>
                                </div>
                                <div class="col-sm-6">
                                    <label> Detail Tour</label>
                                    <textarea rows="5" cols="5" class="form-control" name="tour_des_en" placeholder="">
                                            {{$tourredit[0]->tour_des_en}}
                                    </textarea>
                                </div>
                            </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> รายละเอียดโปรแกรม</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_detail_th" placeholder="">
                                        {{$tourredit[0]->tour_detail_th}}
                                </textarea>
                            </div>
                            <div class="col-sm-6">
                                <label> Program Tour Detail</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_detail_en" placeholder="">
                                        {{$tourredit[0]->tour_detail_en}}
                                </textarea>
                            </div>


                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> เงื่อนไขโปรแกรม</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_term_th" placeholder="">
                                    {{$tourredit[0]->tour_term_th}}
                                </textarea>
                            </div>
                            <div class="col-sm-6">
                                <label> Term of Program</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_term_en" placeholder="">
                                        {{$tourredit[0]->tour_term_en}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">

                                <label>แก้ภาพหน้าปก</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
    
                                        <span class="btn btn-success btn-block btn-file">
                                            Browse… <input type="file" id="imgInp" name="imgInp" >
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id="preview"
                                                                src="{{asset('local/assets/images/tour/'.$tourredit[0]->tour_img)}}"
                                                                height="200px" width="200px" />
                                                                <input type="hidden" name="oldimg" value="{{$tourredit[0]->tour_img}}">
                                                               
                        </div>



                        <div class="form-group">

                            <label>เพิ่มภาพประกอบ : *เลือกหลายรูปกรุณาคลุมดำ</label>
                            <table class="table table-bordered" id="imggg">
                                    <tbody >
                            @if(!empty($imgtour))
                                            @php
                                                 $row3 = 0;
                                             
                                            @endphp
                                                @foreach ($imgtour as $img)
                                                @php
                                                     $row3 ++;
                                                @endphp
                                                
                                                <tr id="rowb2{{$row3}}">
                                                       
                                                           <td>
                                                                <img id="preview"
                                                                src="{{asset('local/assets/images/tour/'.$img->img_image)}}"
                                                                height="200px" width="200px" />
                                                                <input type="hidden" name="oldimg" value="{{$img->img_image}}">
                                                                <button type="button" id="{{ $img->img_id }}" class="btn btn-danger " onclick="del({{$img->img_id }})"><i
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
                            <img id='img-upload2' height="200px"  width="200px" />
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
                <a href="{{ route('tourpack')}}"><button tpye="button"
                        class="btn btn-danger btn-block">กลับหน้าหลัก</button></a>

            </div>
        </div>
    </div>




</div>
@endsection
@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>

<script>
    $(document).ready(function(){
    
        // $('#country_continent_id').change(function(){
        //     var country_continent_id = $(this).val();
        //     console.log(country_continent_id);
        // });
    
        $('#country_continent_id').change(function(){
                var item = '';
                var country_continent_id = $(this).val();
                $.ajaxSetup({
                    async: false
                });
                $.ajax("{{url('getcountry')}}",{
                    type: 'POST',
                    data:{
                        'country_continent_id': country_continent_id,
                        '_token': "{{ csrf_token() }}"
                    },
                    success: function(data){
                        // $('#county_country_id').empty();
                        $('#tour_count_id').empty();
                        $('#countyshow').empty();
                            item += '<option value="">เลือกประเทศ</option>';
                            $.each(data,function(k,v){
                               item += '<option value="'+v.country_id+'">'+v.country_name_th+' / '+v.country_name_en+'</option>'; 
                            });
                            $('#tour_count_id').append(item);
                        
                        
                    }
                });
            });
        });
    
        
       
    
</script>

<script>
        $(document).ready(function(){
        
            // $('#country_continent_id').change(function(){
            //     var country_continent_id = $(this).val();
            //     console.log(country_continent_id);
            // });
        
            $('#tour_count_id').change(function(){
                    var item = '';
                    var county_country_id = $(this).val();
                    $.ajaxSetup({
                        async: false
                    });
                    $.ajax("{{url('getcounty')}}",{
                        type: 'POST',
                        data:{
                            'county_country_id': county_country_id,
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function(data){
                            // $('#county_country_id').empty();
                            $('#countyshow').empty();
                                item += '<option value="">เลือกจังหวัด</option>';
                                $.each(data,function(k,v){
                                   item += '<option value="'+v.county_id+'">'+v.county_name_th+' / '+v.county_name_en+'</option>'; 
                                });
                                $('#countyshow').append(item);
                            
                            
                        }
                    });
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
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#preview').attr('src', e.target.result);
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
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        
                        reader.onload = function (e) {
                            $('#img-upload2').attr('src', e.target.result);
                        }
                        
                        reader.readAsDataURL(input.files[0]);
                    }
                }
        
                $("#imgInp2").change(function(){
                    readURL(this);
                }); 	
            });
</script>




<script>
    function addexperitise(){
        var newcount = parseInt($('#countexperitise').val()) + 1;
        var row = '';
        row += '<tr id="rowb2'+newcount+'">';
        row += '<td><input type="text" class="form-control" name="tr_date_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_pri_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_en[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_pri_en[]"></td>';
        row+='<td class="text-center"><a href="javascript:;" onclick="delexperitise('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
        row += '</tr>';
        
        $('#countexperitise').val(newcount);
        
        $('#experitise').append(row);
    }
    
    function delexperitise(row){
        $('#rowb2'+row).remove();
    }
</script>

<script>
        function del(id){
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
                    $.get('{{url("imgdel")}}' + '/' + id, function (data) {
                        $('#imggg').load(document.URL + ' #imggg');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }
    </script>

<script>
        function tradel(id){
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
                    $.get('{{url("traveldel")}}' + '/' + id, function (data) {
                        $('#travel').load(document.URL + ' #travel');
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