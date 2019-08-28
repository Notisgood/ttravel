@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">สินค้าใกล้หมดอายุ</a>
            </li>
        </ul>

       
    </div>
    <hr style="width: 95%; margin-top: 50px;">

</div>
<div class="card-block">
    <div class="dt-responsive table-responsive">
        <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>LOT</th>
                    <th>รายการสินค้า</th>
                    <th>สถานะสินค้า</th>
                    <th>จำนวน</th>
                    <th>วันที่</th>
                    <th>โดย</th>

                </tr>
            </thead>
            <tbody>
                @foreach($productOutList as $key => $r)
                <tr style="background-color:#FA8072">
                    <td>{{  $key+1 }}</td>
                    <td>{{ $r->product_log_detail }}</td>
                    <td>{{ $r->product_barcode }}</td>
                    <td>{{ $r->product_status_detail }}</td>
                    <td>{{ $r->product_log_amount }}</td>
                    <td>{{ $r->product_log_date }}</td>
                    <td>{{ $r->product_log_by }}</td>

                    </tr>


                    @endforeach
            </tbody>
            <tfoot>
                <th>ลำดับ</th>
                    <th>LOT</th>
                    <th>รายการสินค้า</th>
                    <th>สถานะสินค้า</th>
                    <th>จำนวน</th>
                    <th>วันที่</th>
                    <th>โดย</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
{{-- 
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
                    <form name="myfrom" method="post" action="{{ url('inProductType') }}">
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