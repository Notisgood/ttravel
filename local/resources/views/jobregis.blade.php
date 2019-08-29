@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" >
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" ><a href="#!">รายชื่อผู้สมัครงาน</a>
            </li>
        </ul>

        <div class="text-right">
                        {{-- <a href="{{ route('jobadd')}}"><button type="button" class="btn btn-primary waves-effect"> เพิ่มตำแหน่งงาน</button></a>    --}}
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
                            <th class="text-center">ตำแหน่ง</th>
                            <th class="text-center">ชื่อ</th>
                            <th class="text-center">อีเมล</th>
                            <th class="text-center">เบอร์โทร</th>
                            <th class="text-center">ไลน์</th>                  
                            <th class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($job as $key => $r)
                            
                                
                           
                        <tr>
                            <th class="text-center" scope="row">{{ $key+1}}</th>
                            <td>{{ $r->position_th }} / {{ $r->position_en }}</td>
               
                            <td>{{ $r->career_register_name }}</td>
                            <td>{{ $r->career_register_email }}</td>
                            <td>{{ $r->career_register_tel }}</td>
                            <td>{{ $r->career_register_line }}</td>

                            <td>{{ $r->regis_created_at}}</td>
                            
                            
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
function deljob(id){
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
                    $.get('{{url("jobdel")}}' + '/' + id, function (data) {
                        $('#jobre').load(document.URL + ' #jobre');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }

        
</script>