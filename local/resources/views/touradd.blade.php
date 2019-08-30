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
                    <form name="myfrom" method="post" id="tourr" action="{{ route('touraddit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id">

                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <h5> ภาษาไทย</h5>
                            </div>
                            <div class="col-sm-4">
                                <h5> Englist</h5>
                            </div>
                            <div class="col-sm-4">
                                    <h5> Chaina</h5>
                                </div>
                        </div>
                        <div class="form-group row col-12">
                                <label class="col-sm-2 col-form-label">Exclusive Tour</label>
                                <div class="col-sm-12">
    
                                    {{-- select2 ajax query --}}
    
                                    <select name="tour_exclusive_status" id="tour_exclusive_status" class="form-control"
                                        required>
                                        <option value="0"><--- กรุณาเลือก ---></option>
                                        @foreach ($tourex as $r)
                                        <option value="{{$r->tour_ex_id}}">{{ $r->tour_ex_name_th}} :: {{$r->tour_ex_name_en}} :: {{$r->tour_ex_name_cn}}</option>  
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> แพ็คเกจ :</label>
                                <input type="text" class="form-control" name="tour_name_th" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                <label> Package :</label>
                                <input type="text" class="form-control" name="tour_name_en" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                    <label> Package :</label>
                                    <input type="text" class="form-control" name="tour_name_cn" required
                                        autocomplete="off">
                                </div>
                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <h5> รายละเอียด</h5>
                            </div>
                            <div class="col-sm-4">
                                <h5> Detail</h5>
                            </div>
                            <div class="col-sm-4">
                                    <h5> Detail</h5>
                                </div>

                        </div>
                        <div class="form-group row col-12">
                            <label class="col-sm-2 col-form-label">ทวีป / Continent</label>
                            <div class="col-sm-12">

                                {{-- select2 ajax query --}}

                                <select name="tour_conti_id" id="country_continent_id" class="form-control"
                                    required>
                                    <option value="">เลือกทวีป</option>
                                    @foreach($cont_all as $key => $r)
                                    <option value="{{ $r->continent_id }}">
                                        {{ $r->continent_name_th.' :: '.$r->continent_name_en.' :: '.$r->continent_name_cn  }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-12">
                            <label class="col-sm-2 col-form-label">ประเทศ / Country</label>
                            <div class="col-sm-12">

                                {{-- select2 ajax query --}}

                                <select name="tour_count_id" id="county" class="form-control" required>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-12">
                                <label class="col-sm-2 col-form-label">จังหวัด / County</label>
                                <div class="col-sm-12">
                                        <select name="tour_county_id" id="countyshow" class="form-control" required>

                                            </select>
                                </div>
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-4">
                                    <label> ราคา :</label>
                                    <input type="text" class="form-control" name="tour_pri_th" required
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-4">
                                    <label> Price :</label>
                                    <input type="text" class="form-control" name="tour_pri_en" required
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-4">
                                        <label> Price :</label>
                                        <input type="text" class="form-control" name="tour_pri_cn" required
                                            autocomplete="off">
                                    </div>
    
                            </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> สายการบิน :</label>
                                <input type="text" class="form-control" name="tour_airline_tn" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                <label> Airline :</label>
                                <input type="text" class="form-control" name="tour_airline_eh" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                    <label> Airline :</label>
                                    <input type="text" class="form-control" name="tour_airline_cn" required
                                        autocomplete="off">
                                </div>

                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> ระยะเวลา :</label>
                                <input type="text" class="form-control" name="tour_time_th" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                <label> Period Of Time :</label>
                                <input type="text" class="form-control" name="tour_time_en" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                    <label> Period Of Time :</label>
                                    <input type="text" class="form-control" name="tour_time_cn" required
                                        autocomplete="off">
                                </div>
    

                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> ช่วงเวลา :</label>
                                <input type="text" class="form-control" name="tour_duration_th" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                <label> Duration :</label>
                                <input type="text" class="form-control" name="tour_duration_en" required
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-4">
                                    <label> Duration :</label>
                                    <input type="text" class="form-control" name="tour_duration_cn" required
                                        autocomplete="off">
                                </div>

                        </div>

                        <div class="form-group row col-12">
                            <div class="col-sm">
                                <label>กำหนดการเดินทาง / อัตราค่าบริการ</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center  ">วันเดินทางไป - กลับ </th>
                                            <th class="text-center  ">ราคา</th>
                                            
                                            <th class="text-center  ">Travel - Return date</th>
                                            <th class="text-center " >Price</th>
                                            <th class="text-center  ">Travel - Return date</th>
                                            <th class="text-center  " >Price</th>
                                            <th class="text-center"  >
                                                <button type="button" class="btn btn-primary"
                                                    onclick="addexperitise()"><i class="fa fa-plus"></i></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="experitise">

                                    </tbody>
                                </table><br>
                                <input type="hidden" id="countexperitise" value="0">
                            </div>
                        </div>
                        {{-- <div class="form-group row col-12">

                            <div class="col-sm-6">
                                <h5> English </h5>
                            </div>

                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm">
                                <label>Itinerary / Service Rate</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th class="text-center" style="width:5%">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="addexperitise()"><i class="fa fa-plus"></i></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="experitise">

                                    </tbody>
                                </table><br>
                                <input type="hidden" id="countexperitise" value="0">
                            </div>
                        </div> --}}
                        <div class="form-group row col-12">
                                <div class="col-sm-4">
                                    <label> รายละเอียดทัวร์</label>
                                    <textarea rows="5" cols="5" class="form-control" name="tour_des_th" placeholder="" required>
                                    </textarea>
                                </div>
                                <div class="col-sm-4">
                                    <label> Detail Tour</label>
                                    <textarea rows="5" cols="5" class="form-control" name="tour_des_en" placeholder="" required>
                                    </textarea>
                                </div>
                                <div class="col-sm-4">
                                        <label> Detail Tour</label>
                                        <textarea rows="5" cols="5" class="form-control" name="tour_des_cn" placeholder="" required>
                                        </textarea>
                                    </div>
                            </div>


                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> รายละเอียดโปรแกรม</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_detail_th" placeholder="" required></textarea>
                            </div>
                            <div class="col-sm-4">
                                <label> Program Tour Detail</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_detail_en" placeholder="" required></textarea>
                            </div>
                            <div class="col-sm-4">
                                    <label> Program Tour Detail</label>
                                    <textarea rows="5" cols="5" class="form-control" name="tour_detail_cn" placeholder="" required></textarea>
                                </div>

                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> เงื่อนไขโปรแกรม</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_term_th" placeholder="" required></textarea>
                            </div>
                            <div class="col-sm-4">
                                <label> Term of Program</label>
                                <textarea rows="5" cols="5" class="form-control" name="tour_term_en" placeholder="" required></textarea>
                            </div>
                            <div class="col-sm-4">
                                    <label> Term of Program</label>
                                    <textarea rows="5" cols="5" class="form-control" name="tour_term_cn" placeholder="" required></textarea>
                                </div>
                        </div>
                        <div class="form-group">

                                <label>เพิ่มภาพหน้าปก</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
    
                                        <span class="btn btn-success btn-block btn-file">
                                            Browse… <input type="file" id="imgInp" name="imgInp" >
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <img id='img-upload1' width="200px" height="200px" />
                        </div>

                        
                        <div class="form-group">

                            <label>เพิ่มภาพประกอบ : *เลือกหลายรูปแบบคลุมดำ</label>
                            <div class="input-group">
                                <span class="input-group-btn">

                                    <span class="btn btn-success btn-block btn-file">
                                        Browse… <input type="file" id="imgInp2" name="imgInp2[]" multiple>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload2' width="200px" height="200px"/>
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
                        $('#county').empty();
                        $('#countyshow').empty();
                            item += '<option value="">เลือกประเทศ</option>';
                            $.each(data,function(k,v){
                               item += '<option value="'+v.country_id+'">'+v.country_name_th+' / '+v.country_name_en+' / '+v.country_name_cn+'</option>'; 
                            });
                            $('#county').append(item);
                        
                        
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
        
            $('#county').change(function(){
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
                                   item += '<option value="'+v.county_id+'">'+v.county_name_th+' / '+v.county_name_en+' / '+v.county_name_cn+'</option>'; 
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
                                $('#img-upload1').attr('src', e.target.result);
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
    function addexperitise(){
        var newcount = parseInt($('#countexperitise').val()) + 1;
        var row = '';
        row += '<tr id="rowb'+newcount+'">';
        row += '<td><input type="text" class="form-control " name="tr_date_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_pri_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_en[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_pri_en[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_cn[]"></td>';
        row += '<td><input type="text" class="form-control" name="tr_date_pri_cn[]"></td>';
        row+='<td class="text-center"><a href="javascript:;" onclick="delexperitise('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
        row += '</tr>';
        
        $('#countexperitise').val(newcount);
        
        $('#experitise').append(row);
    }
    
    function delexperitise(row){
        $('#rowb'+row).remove();
    }
</script>
@endsection