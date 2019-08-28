@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">จัดการจังหวัด</a>
            </li>
        </ul>

        <div class="text-right">

            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">เพิ่มจังหวัด</button>
        </div>

    </div>
    <hr style="width: 95%;">

</div>
<div class="card-block table-border-style">
        <div class="dt-responsive table-responsive">
                <table id="multi-colum-dt" class="table table-striped table-bordered nowrap" >
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ทวีป / Continent</th>
                    <th>ประเทศ / Country</th>
                    <th>จังหวัด</th>
                    <th>County</th>
                    <th>รายละเอียด</th>
                    <th>detail</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($county_all as $key => $r)
                <tr>
                    <td>{{  $key+1 }}</td>
                <td>{{ $r->continent_name_th }} / {{ $r->continent_name_en}}</td>
                    <td>{{ $r->country_name_th }} / {{ $r->country_name_en }}</td>
                    <td>{{ $r->county_name_th }}</td>
                    <td>{{ $r->county_name_en }}</td>
                    <td>{{ $r->county_des_th }}</td>
                    <td>{{ $r->county_des_en }}</td>

                    <td class=" icon-btn">

                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                            data-target="#edit-Modal_{{$r->county_id}}"><i class="fa fa-pencil"></i> </button>
                        {{-- data-target="#edit-Modal_{{$r->uid_product_type}}" --}}
                        <button type="button" id="{{ $r->county_id }}" class="btn btn-danger btn-sm " onclick="del({{ $r->county_id }})">
                                <i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
           
        </table>
    </div>
</div>

<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">เพิ่มจังหวัด</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('countyadd')}}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">ทวีป</label>
                                {{-- select2 ajax query --}}
                                
                                <select name="country_continent_id" id="country_continent_id" class="form-control col-sm-10" required>
                                <option value="">เลือกทวีป</option>
                                @foreach($cont_all as $key => $r)
                                <option value="{{ $r->continent_id }}">
                                    {{ $r->continent_name_th.' :: '.$r->continent_name_en  }}
                                </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">ประเทศ</label>
                                {{-- select2 ajax query --}}
                                
                                <select name="county" id="county" class="form-control col-sm-10" required>
                                {{-- <option value="">เลือกประเทศ</option> --}}
                                {{-- @foreach($count_all as $key => $r)
                                <option value="{{ $r->county_country_id	 }}">
                                    {{ $r->country_name_th.' :: '.$r->country_name_th  }}
                                </option>
                                @endforeach --}}
                                </select>
                                
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">จังหวัด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_name_th" required
                                    autocomplete="off">
                            </div>
                            <label class="col-sm-2 col-form-label text-center text-middle">County</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_name_en" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">รายละเอียด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_des_th"  
                                    autocomplete="off">
                            </div><label class="col-sm-2 col-form-label text-center text-middle">Detail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_des_en"  
                                    autocomplete="off">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect col md-close" id="prooo">บันทึก</button>
                <button type="button" class="btn btn-default waves-effect col " data-dismiss="modal">ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- **************************************modal edit*************************************************** --}}
@if(!empty($county_all))
@foreach($county_all as $key => $r)
<div class="modal fade" id="edit-Modal_{{$r->county_id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">แก้ไขจังหวัด</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('countyupdate')}}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$r->county_id}}" name="id">
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">ทวีป</label>
                                {{-- select2 ajax query --}}
                                
                                <select name="country_continent_id2" id="country_continent_id2"  data-id="{{$r->county_id}}" class="form-control col-sm-10" required >
                                <option value="{{ $r->country_continent_id }}">{{ $r->continent_name_th.' :: '.$r->continent_name_en  }}</option>
                                <option>---- กรุณาเลือก ----</option>
                                @foreach($cont_all as $key => $r2)
                                <option value="{{ $r2->continent_id }}">
                                    {{ $r2->continent_name_th.' :: '.$r2->continent_name_en  }}
                                </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">ประเทศ</label>
                                {{-- select2 ajax query --}}
                                
                                <select name="county2" id="county{{$r->county_id}}" class="form-control col-sm-10 county2" required >
                                <option value="{{ $r->county_country_id}}">{{ $r->country_name_th.' :: '.$r->country_name_en  }}</option>
                                <option>---- กรุณาเลือก ----</option>

                                {{-- @foreach($count_all as $key => $r3)
                                
                                <option value="{{ $r3->country_id}}">
                                    {{ $r3->country_name_th.' :: '.$r3->country_name_en  }}
                                </option>
                                @endforeach --}}
                                </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">จังหวัด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_name_th" required
                                    value="{{$r->county_name_th}}" required autocomplete="off">
                            </div>
                            <label class="col-sm-2 col-form-label text-center text-middle">County</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_name_en" required
                                    value="{{$r->county_name_en}}" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">รายละเอียด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_des_th"
                                    value="{{$r->county_des_th}}" required autocomplete="off">
                            </div><label class="col-sm-2 col-form-label text-center text-middle">Detail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="county_des_en"
                                    value="{{$r->county_des_en}}" required autocomplete="off">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect col md-close" id="prooo">บันทึก</button>
                <button type="button" class="btn btn-default waves-effect col " data-dismiss="modal">ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endif

@endsection
@section('scripts')
<script>
$(document).ready(function(){
    //ช่องเพิ่ม เลือกทวีป ขึ้นประเทศ 
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
                    //$('#county_country_id').empty();
                    $('#county').empty();
                        item += '<option value="">เลือกประเทศ</option>';
                        $.each(data,function(k,v){
                           item += '<option value="'+v.country_id+'">'+v.country_name_th+' / '+v.country_name_en+'</option>'; 
                        });
                        $('#county').append(item);
                        
                    
                }
            });
        });
    });

    
   

</script>

<script>
// $(document).ready(function(){
//     $("#country_continent_id2").change(country_chnge).change();

    
// });
//     function country_chnge(){
//         var item = '';
//         var country_continent_id2 = $(this).val();
//         $.ajaxSetup({
//             async: false
//         });
//         $.ajax("{{url('getcountry')}}",{
//             type: 'POST',
//             data:{
//                 'country_continent_id': country_continent_id2,
//                 '_token': "{{ csrf_token() }}"
//             },
//             success: function(data){
//                 //$('#county_country_id').empty();
//                 $('#county2').empty();
//                     item += '<option value="">เลือกประเทศ</option>';
//                     $.each(data,function(k,v){
//                         item += '<option value="'+v.country_id+'">'+v.country_name_th+' / '+v.country_name_en+'</option>'; 
//                     });
//                     $('#county2').append(item);
                
                
//             }
//         });
//     }

$(document).on('change', "#country_continent_id2", function() {
            //ช่องแก้ไข เลือกทวีป ขึ้นประเทศ 
            
            //$('#country_continent_id2').change(function(){
                    var item = '';
                    var country_continent_id2 = $(this).val();
                    //console.log(country_continent_id2);
                    var county_id=$(this).attr('data-id');
                    console.log(county_id);
                    $.ajaxSetup({
                        async: false
                    });
                    $.ajax("{{url('getcountry')}}",{
                        type: 'POST',
                        data:{
                            'country_continent_id': country_continent_id2,
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function(data){
                            //$('#county_country_id').empty();
                            $('#county'+county_id).empty();
                                item += '<option value="">เลือกประเทศ</option>';
                                $.each(data,function(k,v){
                                   item += '<option value="'+v.country_id+'">'+v.country_name_th+' / '+v.country_name_en+'</option>'; 
                                });
                                $('#county'+county_id).append(item);
                            
                            
                        }
                    });
                });
        
            
           
// function showcount(id) {
        
//         var item = '';
//         var country_continent_id2 = $(this).val();
//         $.ajax({
//             url: "{{ route('getcountry') }}",
//             data: {
//                 "_token": "{{ csrf_token() }}",
//                 'country_continent_id': country_continent_id2,
//             },
//             type: "POST",
//             async: false,
//             success: function(data) {
//                 $('#county'+county_id).empty();
//                                 item += '<option value="">เลือกประเทศ</option>';
//                                 $.each(data,function(k,v){
//                                    item += '<option value="'+v.country_id+'">'+v.country_name_th+' / '+v.country_name_en+'</option>'; 
//                                 });
//                                 $('#county'+county_id).append(item);


//             }
//         });
//     }   
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
                    $.get('{{url("countydel")}}' + '/' + id, function (data) {
                        $('#multi-colum-dt').load(document.URL + ' #multi-colum-dt');
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