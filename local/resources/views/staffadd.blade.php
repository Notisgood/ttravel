@extends ('main')

@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">เพิ่มผู้ใช้งาน</a>
            </li>
        </ul>

        <div class="text-right">

            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">เพิ่มผู้ใช้งาน</button>
        </div>

    </div>
    <hr style="width: 95%;">

</div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover" id="staff">
                <thead>
                    <tr>
                        <th class="text-center">ลำดับ</th>
                        <th class="text-center">ชื่อ</th>
                        <th class="text-center">username</th>
                        <th class="text-center">อีเมล</th>
                        <th class="text-center">##</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($staffall as $key => $r)
                <tr>
                        <td>{{ $key+ 1}}</td>
                        <td>{{ $r-> name}}</td>
                        <td>{{ $r-> user_username}}</td>
                        <td>{{ $r-> email}}</td>
                        <td class="text-center">
                            <a href="{{ url('staffedit/'.$r->id)}}"> <button type="button" class="btn btn-warning btn-sm"><i
                                class="fa fa-pencil"></i>แก้ไข</button></a>
                            <button type="button" id="{{ $r->id }}" class="btn btn-danger btn-sm" onclick="del({{ $r->id }})"><i
                                class="fa fa-trash"></i> ลบ</button>
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
                    <h4 class="modal-title">เพิ่มผู้ใช้งาน</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-block">
                        <form name="myfrom" method="post" action="{{ route('add') }}">
                            {{ csrf_field() }}
                            <div class="form-group row col-12">
                                <label>ชื่อ-นามสกุล :</label>
                                <span style="color:red">*</span>
                                <input type="text" class="form-control" name="name" required autocomplete="off">
                        </div>
                                <div class="form-group row col-sm-12">
                                    <label>E-mail : </label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" name="email" required autocomplete="off">

                        </div>
                                    <div class="form-group row col-sm-12">
                                        <label>Username :</label>
                                        <span style="color:red">*</span>
                                        <input type="text" class="form-control" name="username" required autocomplete="off">

                        </div>
                                        <div class="form-group row col-sm-12">
                                            <label>Password :</label>
                                            <span style="color:red">*</span>
                                            <input type="text" class="form-control" name="password" required autocomplete="off">

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
<script src="{{ asset('/files/bootbox.min.js') }}"></script>
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
                $.get('{{url("staffdel")}}' + '/' + id, function (data) {
                    $('#staff').load(document.URL + ' #staff');
                });
                // window.location.href="staffdel/"+id+"";

            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
    }
</script>