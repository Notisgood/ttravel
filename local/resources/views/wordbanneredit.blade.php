@extends('main')
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload {
        width: 100%;
    }
</style>
@section('content')
<div class="page-header">



    <div class="card-block">
        <div class="row col-12">
            <ul class="breadcrumb-title col-12">
                <li class="breadcrumb-item" style="margin-top: 20px;">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">แก้ไขคำบน Banner</a>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <hr style="width: 95%;" style="margin-top: 20%;">
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-12">
                    <form name="myfrom" method="post" id="banup" action="{{ route('wordbannereditupdate')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$bannerwordsedit->bannerword_id}}">
                        <div class="form-group row col-12">
                                <div class="col-sm-4">
                                    <h1>ภาษาไทย</h1>
                          
                                </div>
                                <div class="col-sm-4">
                                    <h1>English</h1>
                                    
                                </div>
                                <div class="col-sm-4">
                                        <h1>China</h1>
                                        
                                    </div>
    
                            </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> หัวข้อตัวใหญ่ </label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_th"
                                    required>{{$bannerwordsedit->bannerword_th}}</textarea>
                            </div>
                            <div class="col-sm-4">
                                <label> หัวข้อตัวใหญ่ </label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_en"
                                    required>{{$bannerwordsedit->bannerword_en}}</textarea>
                            </div>
                            <div class="col-sm-4">
                                    <label> หัวข้อตัวใหญ่ </label>
                                    <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_cn"
                                        required>{{$bannerwordsedit->bannerword_cn}}</textarea>
                                </div>

                        </div>
                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> หัวข้อตัวใหญ่สีทอง </label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_th1"
                                    required>{{$bannerwordsedit->bannerword_th1}}</textarea>
                            </div>
                            <div class="col-sm-4">
                                <label> หัวข้อตัวใหญ่สีทอง </label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_en1"
                                    required>{{$bannerwordsedit->bannerword_en1}}</textarea>
                            </div>
                            <div class="col-sm-4">
                                    <label> หัวข้อตัวใหญ่สีทอง </label>
                                    <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_cn1"
                                        required>{{$bannerwordsedit->bannerword_cn1}}</textarea>
                                </div>

                        </div>

                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> รายละเอียด บรรทัด 1</label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_th2"
                                    required>{{$bannerwordsedit->bannerword_th2}}</textarea>
                            </div>
                            <div class="col-sm-4">
                                <label> รายละเอียด บรรทัด 1 </label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_en2"
                                    required>{{$bannerwordsedit->bannerword_en2}}</textarea>
                            </div>

                            <div class="col-sm-4">
                                    <label> รายละเอียด บรรทัด 1 </label>
                                    <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_cn2"
                                        required>{{$bannerwordsedit->bannerword_cn2}}</textarea>
                                </div>
                        </div>

                        <div class="form-group row col-12">
                            <div class="col-sm-4">
                                <label> รายละเอียด บรรทัด 2 </label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_th3"
                                    required>{{$bannerwordsedit->bannerword_th3}}</textarea>
                            </div>
                            <div class="col-sm-4">
                                <label> รายละเอียด บรรทัด 2 </label>
                                <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_en3"
                                    required>{{$bannerwordsedit->bannerword_en3}}</textarea>
                            </div>
                            <div class="col-sm-4">
                                    <label> รายละเอียด บรรทัด 2 </label>
                                    <textarea rows="5" cols="5" class="form-control" value="" name="bannerword_cn3"
                                        required>{{$bannerwordsedit->bannerword_cn3}}</textarea>
                                </div>
    

                        </div>
                        <div class="form-group">

                            <label>เพิ่มภาพ </label>
                            <div class="input-group">

                                <span class="input-group-btn">

                                    <span class="btn btn-success btn-block btn-file">
                                        Browse… <input type="file" id="imgInp" name="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img src="{{asset('local/assets/images/banner')}}/{{$bannerwordsedit->bannerword_img}}"
                                id='img-upload' />
                            <input type="hidden" name="oldimg" value="{{$bannerwordsedit->bannerword_img}}">
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

                <button tpye="submit" form="banup" class="btn btn-primary btn-block">ยืนยัน</button>

            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <a href="{{ route('wordbanner')}}"><button tpye="button"
                        class="btn btn-danger btn-block">กลับหน้าหลัก</button></a>

            </div>
        </div>
    </div>



</div>
@endsection
@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>
<script>
    $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
            });
    
            $('.btn-file :file').on('fileselect', function(event, label) {
                
                var input = $(this).parents('.input-group').find(':text'),
                    log = label;
                
                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }
            
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }
    
            $("#imgInp").change(function(){
                readURL(this);
            }); 	
        });
</script>
@endsection