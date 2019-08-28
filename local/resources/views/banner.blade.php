@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">จัดการแบนเนอร์</a>
            </li>
        </ul>

        <div class="text-right">
        <a href="{{ url('banneradd')}}"><button type="button" class="btn btn-primary waves-effect"> เพิ่มแบนเนอร์</button></a>
        </div>
    </div>
    <hr style="width: 95%;">

</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="banners">
            <thead>
                <tr>
                    <th class="text-center">สถานะภาพ</th>
                    <th class="text-center">รูป</th>
                    <th class="text-center">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($banners as $key => $r)
                <tr >
                    
                    <td class="text-center" style="text-align:center">
                        <div class="checkbox-fade fade-in-primary ">
                                <label >
                                    <input type="checkbox" value="">
                                    <span class="cr">
                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                    </span>
                                </label>
                        </div>
                     </td>   

                    <td class="text-center" style="text-align:center">
                    <img src="{{asset('local/assets/images/banner')}}/{{$r->banner_img}}" width="50%" >    
                    </td>

                    <td class="text-center " style="text-align:center">
                            <button type="button" id="{{ $r->banner_id }}" class="btn btn-danger " onclick="del({{ $r->banner_id }})"><i
                                class="fa fa-trash"></i> ลบ</button>
                    </td>    
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
<script src="{{asset('/files/myscript.js')}}"></script>
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
                    $.get('{{url("bannerdel")}}' + '/' + id, function (data) {
                        $('#banners').load(document.URL + ' #banners');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }
    </script>