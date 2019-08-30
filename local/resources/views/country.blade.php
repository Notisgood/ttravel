@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">จัดการประเทศ</a>
            </li>
        </ul>

        <div class="text-right">

            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">เพิ่มประเทศ</button>
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
                    <th>ประเทศ</th>
                    <th>Country</th>
                    <th>Country cn</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($count_all as $key => $r)
                <tr>
                    <td class="text-center">{{  $key+1 }}</td>
                <td>{{ $r->continent_name_th }} / {{ $r->continent_name_en}}</td>
                    <td>{{ $r->country_name_th }}</td>
                    <td>{{ $r->country_name_en }}</td>
                    <td>{{ $r->country_name_cn }}</td>

                    <td class=" icon-btn">

                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                            data-target="#edit-Modal_{{$r->country_id}}"><i class="fa fa-pencil"></i> </button>
                        {{-- data-target="#edit-Modal_{{$r->uid_product_type}}" --}}
                        <button type="button" id="{{ $r->country_id }}" class="btn btn-danger btn-sm " onclick="del({{ $r->country_id }})">
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
                <h4 class="modal-title">เพิ่มประเทศ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('countadd')}}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">ทวีป</label>
                                {{-- select2 ajax query --}}
                                
                                <select name="country_continent_id" class="form-control col-sm-10" required>
                                <option value="">---- กรุณาเลือก ----</option>
                                @foreach($cont_all as $key => $r)
                                <option value="{{ $r->continent_id }}">
                                    {{ $r->continent_name_th.' :: '.$r->continent_name_en.' :: '.$r->continent_name_cn  }}
                                </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">ประเทศ</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_name_th" required
                                    autocomplete="off" required>
                            </div>
                            <label class="col-sm-2 col-form-label text-center text-middle">รายละเอียด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_des_th" 
                                    autocomplete="off">
                        </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">Country</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="country_name_en" required
                                        autocomplete="off" required>
                                </div>
                           
                             <label class="col-sm-2 col-form-label text-center text-middle">Detail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_des_en"  
                                    autocomplete="off">
                            </div>

                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">Country cn</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="country_name_cn" required
                                        autocomplete="off" required>
                                </div>
                           
                             <label class="col-sm-2 col-form-label text-center text-middle">Detail cn</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_des_cn"  
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
@if(!empty($count_all))
@foreach($count_all as $key => $r)
<div class="modal fade" id="edit-Modal_{{$r->country_id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">แก้ไขประเทศ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('countupdate')}}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$r->country_id}}" name="id">
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">ทวีป</label>
                                {{-- select2 ajax query --}}
                                
                                <select name="country_continent_id" class="form-control col-sm-10" required>
                                <option value="{{ $r->country_continent_id }}">{{ $r->continent_name_th.' :: '.$r->continent_name_en  }}</option>
                                <option>---- กรุณาเลือก ----</option>
                               @foreach($cont_all as $key => $r2)
                                <option value="{{ $r2->continent_id }}">
                                    {{ $r2->continent_name_th.' :: '.$r2->continent_name_en.' :: '.$r->continent_name_cn  }}
                                </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">ประเทศ</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_name_th" required
                                    value="{{$r->country_name_th}}" required autocomplete="off">
                            </div>
                            <label class="col-sm-2 col-form-label text-center text-middle">รายละเอียด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_des_th"
                                    value="{{$r->country_des_th}}"   autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">Country</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="country_name_en" required
                                        value="{{$r->country_name_en}}" required autocomplete="off">
                                </div>
                           
                            <label class="col-sm-2 col-form-label text-center text-middle">Detail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_des_en"
                                    value="{{$r->country_des_en}}"   autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-center text-middle">Country cn</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="country_name_cn" required
                                        value="{{$r->country_name_cn}}" required autocomplete="off">
                                </div>
                           
                            <label class="col-sm-2 col-form-label text-center text-middle">Detail cn</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="country_des_cn"
                                    value="{{$r->country_des_cn}}"   autocomplete="off">
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
<script>
// $(document).ready(function(){
//     $('#subdepartments').change(function(){
//             var item = '';
//             var subdepartment = $(this).val();
//             $.ajaxSetup({
//                 async: false
//             });
//             $.ajax("{{url('getcategory')}}",{
//                 type: 'POST',
//                 data:{
//                     'subdepartment': subdepartment,
//                     '_token': "{{ csrf_token() }}"
//                 },
//                 success: function(data){
//                     $('#category').empty();
//                     if(data.length != 0){
//                         item += '<label>Category :</label>';
//                         item += '<select class="form-control" name="category">';
//                         item += '<option value="">Please Select...</option>';
//                         $.each(data,function(k,v){
//                            item += '<option value="'+v.category_id+'">'+v.category_name_th+' / '+v.category_name_en+'</option>'; 
//                         });
//                         $('#category').append(item);
//                     }
                    
//                 }
//             });
//         });
// });
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
                    $.get('{{url("countdel")}}' + '/' + id, function (data) {
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