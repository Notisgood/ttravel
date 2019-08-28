@extends('main')
@section('css')
<link rel="stylesheet" type="text/css" id="bootstrap-css" href="{{'//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'}}">
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

#img-upload{
    width: 100%;
}
</style>
@endsection


@section('content')
<div class="page-header">
        <div class="card-block">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item" style="margin-top: 20px;">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">เพิ่มภาพแบนเนอร์</a>
                </li>
            </ul>
          
        </div>
        <div class="card-block"> 
                <hr style="width: 95%;" style="margin-top: 20%;">
        </div> 
</div>
<div class="card-block">
<div class="container">
        <div class="col-md-6">
                <form name="myfrom" method="post" action="{{ route('upbanner') }}" id="imgup" enctype="multipart/form-data">
                        {{ csrf_field() }}
            <div class="form-group">
                
                <label>เพิ่มภาพแบนเนอร์หน้า Home :</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" name="imgInp" >
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img id='img-upload'/>
            </div>
        </form>
        </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="form-group">

       <button  type="submit" form="imgup" value="Submit" class="btn btn-primary btn-block">ยืนยัน</button>
            
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <!-- Block level buttons with icon -->
        <div class="form-group">
        <a href="{{ route('banner')}}"><button class="btn btn-danger btn-block">กลับหน้าหลัก</button></a>

        </div>
    </div>
</div>


</div>

@endsection
@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>

{{-- <script>
function checkui(){
    var product_amount = $("#product_amount").val.length;
    console.log(product_amount);
    if (product_amount > 11) {
       
        alert("กรุณาใช้เลขไม่เกิน 11 หลัก");
        $("#product_amount").val("");
        
    }
}
</script> --}}

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