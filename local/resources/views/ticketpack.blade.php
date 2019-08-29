@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" >
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" ><a href="#!">Ticket</a>
            </li>
        </ul>

        <div class="text-right">
                        <a href="{{ route('ticketadd')}}"><button type="button" class="btn btn-primary waves-effect"> เพิ่มตั๋ว</button></a>   
        </div>

    </div>
    <hr style="width: 95%; margin-top: 20px;">

</div>

        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover" id="tourtb">
                    <thead>
                        <tr>
                            <th class="text-center">ลำดับ</th>
                            <th class="text-center">ตั๋ว / Ticket</th>
                            <th class="text-center">ราคา / price</th>
                                <th class="text-center">#.</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($ticket_all as $key => $r)
                        <tr>
                            <th class="text-center" scope="row">{{$key+1}}</th>
                        <td>{{ $r->ticket_name_th}} / {{ $r->ticket_name_en}}</td>
                        
                        <td>{{ $r->ticket_pri_th}} / {{$r->ticket_pri_en}}</td>
                            <td class="icon-btn">
                            <a href="{{ url('ticketedit/'.$r->ticket_id)}}" class="btn btn-warning btn-sm  waves-effect waves-light"><i class="fa fa-pencil  "></i> </a>                            
                            <button type="button" id="{{ $r->ticket_id }}" class="btn btn-danger btn-sm " onclick="ticketdel({{ $r->ticket_id }})">
                                <i class="fa fa-trash"></i> </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection

<script>
        function ticketdel(id){
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
                    $.get('{{url("ticketdel")}}' + '/' + id, function (data) {
                        $('#tourtb').load(document.URL + ' #tourtb');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }
    </script>