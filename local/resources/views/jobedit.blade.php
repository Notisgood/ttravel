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
                <form name="myfrom" method="post" id="jobup" action="{{ route('jobupdate')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$jobEdit[0]->career_id}}">

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
                                value="{{$jobEdit[0]->position_th}}"
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Position :</label>
                                <input type="text" class="form-control" name="position_en" 
                                value="{{$jobEdit[0]->position_en}}"
                                    autocomplete="off">
                            </div>
                        </div>
                        
                        <div class="form-group row col-12">
                            <div class="col-sm">
                                <label>หน้าที่และความรับผิดชอบ</label>
                                <table class="table table-bordered" id="dutyy">
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
                                           @if(!empty($jobEdit2))
                                           @php
                                                $row = 0;
                                            
                                           @endphp
                                                @foreach ($jobEdit2 as $item1)
                                                @php
                                                    $row ++;
                                                @endphp
                                                        <tr id="rowb{{$row}}">
                                                           
                                                            <td><input type="text" value="{{$item1->duty_th}}" class="form-control" name="duty_th[]"></td>
                                                            <td><input type="text" value="{{$item1->duty_en}}" class="form-control" name="duty_en[]"></td>
                                                        <td class="text-center"><a href="javascript:;" id="{{$item1->duty_id}}" onclick="delduty({{$item1->duty_id}})"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>
                                                        </tr>
                                                @endforeach
                                           @endif
                                    </tbody>
                                </table><br>
                            <input type="hidden" id="countexperitise" value="{{$row}}">
                            </div>
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm">
                                    <label>คุณสมบัติพื้นฐาน</label>
                                    <table class="table table-bordered" id="prop">
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
                                                @if(!empty($jobEdit3))
                                                @php
                                                     $row2 = 0;
                                                 
                                                @endphp
                                                    @foreach ($jobEdit3 as $item2)
                                                    @php
                                                         $row2 ++;
                                                    @endphp
                                                            <tr id="rowb2{{$row2}}">
                                                                
                                                                <td><input type="text" value="{{$item2->property_name_th}}" class="form-control" name="property_name_th[]"></td>
                                                                <td><input type="text" value="{{$item2->property_detail_th}}" class="form-control" name="property_detail_th[]"></td>
                                                                <td><input type="text" value="{{$item2->property_name_en}}" class="form-control" name="property_name_en[]"></td>
                                                                <td><input type="text" value="{{$item2->property_detail_en}}" class="form-control" name="property_detail_en[]"></td>
                                                                <td class="text-center"><a href="javascript:;" id="{{ $item2->property_id }}" onclick="del({{$item2->property_id}})"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>
                                                            </tr>
                                                     @endforeach
                                                @endif
                                         </tbody>
                                    </table><br>
                                    <input type="hidden" id="countexperitise2" value="{{$row}}">
                                </div>
                            </div>
                            {{-- <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> คุณสมบัติพื้นฐาน</label>
                                </div>
    
                            </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-6">
                                <label> ประเภทของงาน</label>
                                <input type="text" class="form-control" name="job_type_th"
                                value="{{$jobEdit[0]->job_type_th}}" 
                                    autocomplete="off">
                            </div>
                            <div class="col-sm-6">
                                <label> Job Type:</label>
                                <input type="text" class="form-control" name="job_type_en" 
                                value="{{$jobEdit[0]->job_type_en}}"
                                    autocomplete="off">
                            </div>

                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> เพศ :</label>
                                    <input type="text" class="form-control" name="sex_th" 
                                    value="{{$jobEdit[0]->sex_th}}"
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label> Sex :</label>
                                    <input type="text" class="form-control" name="sex_en"
                                    value="{{$jobEdit[0]->sex_en}}" 
                                        autocomplete="off">
                                </div>
    
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> เงินเดือน (Bath) :</label>
                                    <input type="text" class="form-control" name="salary_th" 
                                    value="{{$jobEdit[0]->salary_th}}"
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label> Salary (Bath) :</label>
                                    <input type="text" class="form-control" name="salary_en" 
                                    value="{{$jobEdit[0]->salary_en}}"
                                        autocomplete="off">
                                </div>
    
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> ประสบการณ์ :</label>
                                    <input type="text" class="form-control" name="experience_th" 
                                    value="{{$jobEdit[0]->experience_th}}"
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label> Experience :</label>
                                    <input type="text" class="form-control" name="experience_en"
                                    value="{{$jobEdit[0]->experience_en}}" 
                                        autocomplete="off">
                                </div>
    
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> สถานที่ :</label>
                                    <input type="text" class="form-control" name="location_th" 
                                    value="{{$jobEdit[0]->location_th}}"
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label> Location :</label>
                                    <input type="text" class="form-control" name="location_en" 
                                    value="{{$jobEdit[0]->location_en}}"
                                        autocomplete="off">
                                </div>
    
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> การศึกษา :</label>
                                    <input type="text" class="form-control" name="education_th" 
                                    value="{{$jobEdit[0]->education_th}}"
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label> Education :</label>
                                    <input type="text" class="form-control" name="education_en" 
                                    value="{{$jobEdit[0]->education_en}}"
                                        autocomplete="off">
                                </div>
    
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-6">
                                    <label> คณะ :</label>
                                    <input type="text" class="form-control" name="faculties_th"
                                    value="{{$jobEdit[0]->faculties_th}}" 
                                        autocomplete="off">
                                </div>
                                <div class="col-sm-6">
                                    <label> Faculties :</label>
                                    <input type="text" class="form-control" name="faculties_en" 
                                    value="{{$jobEdit[0]->faculties_en}}"
                                        autocomplete="off">
                                </div>
    
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 95%;">



    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group">

                    <button tpye="submit" form="jobup" class="btn btn-primary btn-block">ยืนยัน</button>

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
        // table duty
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
        row += '<tr id="rowb2'+newcount+'">';
        row += '<td><input type="text" class="form-control" name="property_name_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="property_detail_th[]"></td>';
        row += '<td><input type="text" class="form-control" name="property_name_en[]"></td>';
        row += '<td><input type="text" class="form-control" name="property_detail_en[]"></td>';
        row+='<td class="text-center"><a href="javascript:;"  onclick="delexperitise2('+newcount+')"><i class="fa fa-trash text-danger" data-popup="tooltip" title="Delete"></i></a></td>';
        row += '</tr>';
        
        $('#countexperitise2').val(newcount);
        
        $('#experitise2').append(row);
    }
    
    function delexperitise2(row){
        $('#rowb2'+row).remove();
    }

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
                    $.get('{{url("jobpropdel")}}' + '/' + id, function (data) {
                        $('#prop').load(document.URL + ' #prop');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }

        function delduty(id){
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
                    $.get('{{url("jobdutydel")}}' + '/' + id, function (data) {
                        $('#dutyy').load(document.URL + ' #dutyy');
                    });
                    // window.location.href="staffdel/"+id+"";
    
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
        }
</script>
@endsection