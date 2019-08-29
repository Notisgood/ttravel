@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">จัดการทวีป</a>
            </li>
        </ul>

        <div class="text-right">

            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">เพิ่มทวีป</button>
        </div>

    </div>
    <hr style="width: 95%;">

</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="contre">
            <thead>
                <tr>
                    <th class="text-center">ลำดับ</th>
                    <th class="text-center">ทวีป</th>
                    <th class="text-center">continent</th>
                    <th class="text-center">รายละเอียด</th>
                    <th class="text-center">detail</th>
                    <th  >#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cont_all as $key => $r)
                <tr>
                    <td class="text-center">{{  $key+1 }}</td>
                    <td class="text-center">{{ $r->continent_name_th }}</td>
                    <td class="text-center">{{ $r->continent_name_en }}</td>
                    <td class="text-center">{{ $r->continent_name_des_th }}</td>
                    <td class="text-center">{{ $r->continent_name_des_en }}</td>


                    <td class=" icon-btn">

                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                            data-target="#edit-Modal_{{$r->continent_id}}"><i class="fa fa-pencil"></i> </button>
                        {{-- data-target="#edit-Modal_{{$r->uid_product_type}}" --}}
                        <button type="button" id="{{ $r->continent_id }}" class="btn btn-danger btn-sm " onclick="del({{ $r->continent_id }})">
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
                <h4 class="modal-title">เพิ่มเพิ่มทวีป</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('addcont')}}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">ทวีป</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_th" required
                                    autocomplete="off">
                            </div>
                            <label class="col-sm-2 col-form-label text-center text-middle">continent</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_en" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">รายละเอียด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_des_th" 
                                    autocomplete="off">
                            </div><label class="col-sm-2 col-form-label text-center text-middle">detail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_des_en" 
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
@if(!empty($cont_all))
@foreach($cont_all as $key => $r)
<div class="modal fade" id="edit-Modal_{{$r->continent_id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">แก้ไขทวีป</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('contupdate')}}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$r->continent_id}}" name="id">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">ทวีป</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_th"
                                    value="{{$r->continent_name_th}}" required autocomplete="off">
                            </div>
                            <label class="col-sm-2 col-form-label text-center text-middle">Continent</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_en"
                                    value="{{$r->continent_name_en}}" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-center text-middle">รายละเอียด</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_des_th"
                                    value="{{$r->continent_name_des_th}}" required autocomplete="off">
                            </div><label class="col-sm-2 col-form-label text-center text-middle">Detail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="continent_name_des_en"
                                    value="{{$r->continent_name_des_en}}" required autocomplete="off">
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
                    $.get('{{url("contdel")}}' + '/' + id, function (data) {
                        $('#contre').load(document.URL + ' #contre');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }
    </script>