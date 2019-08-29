@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" >
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" ><a href="#!">Tour Package</a>
            </li>
        </ul>

        <div class="text-right">
                        <a href="{{ route('touradd')}}"><button type="button" class="btn btn-primary waves-effect"> เพิ่มทัวร์</button></a>   
        </div>

    </div>
    <hr style="width: 95%; margin-top: 20px;">

</div>

        <div class="card-block table-border-style">
                <div class="dt-responsive table-responsive">
                        <table id="multi-colum-dt" class="table table-striped table-bordered nowrap" >
                    <thead>
                        <tr>
                            <th class="text-center">ลำดับ</th>
                            <th class="text-center">ชื่อทัวร์ / Tour</th>
                            <th class="text-center">ทวีป / Continent</th>
                            <th class="text-center">ประเทศ / Country</th>
                            <th class="text-center">#.</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($tour_all as $key => $r)
                        <tr>
                            <th class="text-center" scope="row">{{$key+1}}</th>
                        <td>{{ $r->tour_name_th}} / {{ $r->tour_name_en}}</td>
                        
                        <td>{{ $r->continent_name_th}} / {{$r->continent_name_en}}</td>
                        <td>{{ $r->tour_ex_name_th}} / {{ $r->tour_ex_name_en}}</td>
                            <td class="icon-btn">
                            <a href="{{ url('touredit/'.$r->tour_id)}}" class="btn btn-warning btn-sm  waves-effect waves-light"><i class="fa fa-pencil  "></i> </a>                            
                            <button type="button" id="{{ $r->tour_id }}" class="btn btn-danger btn-sm " onclick="del({{ $r->tour_id }})">
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
                <h4 class="modal-title">เพิ่มประเภทสินค้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">นับเป็น</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_code" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ตัวคูณ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_multiply" required
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
                    $.get('{{url("tourdel")}}' + '/' + id, function (data) {
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