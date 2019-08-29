@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" >
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" ><a href="#!">รายการอีเมล</a>
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
                            <th class="text-center">ชื่อ</th>
                            <th class="text-center">อีเมล</th>
            
                            <th class="text-center">เบอร์โทร</th>
                            <th class="text-center">หัวข้อเรื่อง</th>     
                            <th class="text-center">วันที่</th>                 
                          
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($email as $key => $r)
                        <tr>
                            <th class="text-center" scope="row">{{ $key+1}}</th>
                            <td>{{ $r->email_name }} </td>
               
                            <td>{{ $r->email_umail }}</td>
                            <td>{{ $r->email_tel }}</td>
                            <td>{{ $r->email_subject }}</td>
                            {{-- <td>{{ $r->email_message }}</td> --}}
                            <td>{{ $r->created_at }}</td>
                            
                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
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