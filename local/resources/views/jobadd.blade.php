@extends('main')
@section('content')
<div class="page-header">



    <div class="card-block">
        <div class="row col-12">
            <ul class="breadcrumb-title col-12">
                <li class="breadcrumb-item" style="margin-top: 20px;">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">เพิ่มตำแหน่งงานใหม่</a>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <hr style="width: 95%;" style="margin-top: 20%;">
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-12">
                <form name="myfrom" method="post" id="jobadd" action="{{ route('jobaddit')}}">
                        {{ csrf_field() }}
                        

                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> ภาษาไทย</label>
                            </div>
                            <div class="col-sm-6">
                                <label> Englist</label>
                            </div>

                        </div>

                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> ตำแหน่ง :</label>
                                <input type="text" class="form-control" name="position_th" 
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Position :</label>
                                <input type="text" class="form-control" name="position_en" 
                                    autocomplete="off">
                            </div>
                        </div>
                        
                        <div class="form-group row col-12">
                                <div class="col-sm">
                                    <label>หน้าที่และความรับผิดชอบ</label>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ภาษาไทย</th>
                                                <th class="text-center">English</th>
                                                <th class="text-center" style="width:5%">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="addexperitise()"><i class="fa fa-plus"></i></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="experitise">
    
                                        </tbody>
                                    </table><br>
                                    <input type="hidden" id="countexperitise" value="0">
                                </div>
                            </div>

                            <div class="form-group row col-12">
                                    <div class="col-sm">
                                        <label>คุณสมบัติพื้นฐาน</label>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">คุณสมบัติภาษาไทย</th>
                                                    <th class="text-center">รายละเอียดภาษาไทย</th>
                                                    <th class="text-center">Requirement English</th>
                                                    <th class="text-center">Detail English</th>
                                                    <th class="text-center" style="width:5%">
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="addexperitise2()"><i class="fa fa-plus"></i></button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="experitise2">
        
                                            </tbody>
                                        </table><br>
                                        <input type="hidden" id="countexperitise2" value="0">
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 95%;">



    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group">

                    <button tpye="submit" form="jobadd" class="btn btn-primary btn-block">ยืนยัน</button>

            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <a href="{{ route('jobmaneger')}}"><button tpye="button"
                        class="btn btn-danger btn-block">กลับหน้าหลัก</button></a>

            </div>
        </div>
    </div>



</div>
@endsection
@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>
<script>
    //table  duty
    function addexperitise(){
        var newcount = parseInt($('#countexperitise').val()) + 1;
        var row = '';
        row += '<tr id="rowb'+newcount+'">';
        row += '<td><input type="text" class="form-control" name="duty_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="duty_en[]"></td>';
        row+='<td class="text-center"><a href="javascript:;" onclick="delexperitise('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
        row += '</tr>';
        
        $('#countexperitise').val(newcount);
        
        $('#experitise').append(row);
    }
    
    function delexperitise(row){
        $('#rowb'+row).remove();
    }

    // table property

    function addexperitise2(){
        var newcount = parseInt($('#countexperitise2').val()) + 1;
        var row = '';
        row += '<tr id="rowb'+newcount+'">';
        row += '<td><input type="text" class="form-control" name="property_name_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="property_detail_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="property_name_en[]"></td>';
        row += '<td><input type="text" class="form-control" name="property_detail_en[]"></td>';
        row+='<td class="text-center"><a href="javascript:;" onclick="delexperitise2('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
        row += '</tr>';
        
        $('#countexperitise2').val(newcount);
        
        $('#experitise2').append(row);
    }
    
    function delexperitise2(row){
        $('#rowb'+row).remove();
    }
</script>
@endsection