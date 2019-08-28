@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" >
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" ><a href="#!">จัดการคำบน Banner</a>
            </li>
        </ul>

        <div class="text-right">
                        <a href="{{ route('wordbanneradd')}}"><button type="button" class="btn btn-primary waves-effect"> เพิ่มคำบน Banner</button></a>   
        </div>

    </div>
    <hr style="width: 95%; margin-top: 20px;">

</div>

        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover" id="bannerre">
                    <thead>
                        <tr>
                            <th class="text-center">id</th>
                            <th  class="text-center" >Banner ไทย</th>
                            <th  class="text-center">Banner English</th>
                           
                            <th  class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($bannerwords as $key => $r)
                        <tr>
                            <th scope="row">{{  $key+1 }}</th>
                            <td class="text-center" style="text-align:center">
                                <img src="{{asset('local/assets/images/banner')}}/{{$r->bannerword_img}}" width="50%" >    
                                </td>
                    <td style="white-space:pre-wrap; word-wrap:break-word">{{ $r->bannerword_th }}</td>
                    <td style="white-space:pre-wrap; word-wrap:break-word">{{ $r->bannerword_en }}</td>       
                            <td class="icon-btn">
                                    <a href="{{ url('wordbanneredit/'.$r->bannerword_id)}}" class="btn btn-warning btn-sm waves-effect waves-light"><i class="fa fa-pencil  "></i></a>                            

                                   <button class="btn btn-danger btn-sm waves-effect waves-light " onclick="delban({{$r->bannerword_id}})"><i class="icofont icofont-trash "></i></button>                          
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



{{-- <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
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
</div> --}}
@endsection

<script>
    

                function delban(id){
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
                    $.get('{{url("wordbannerdel")}}' + '/' + id, function (data) {
                        $('#bannerre').load(document.URL + ' #bannerre');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }
        
                
        </script>