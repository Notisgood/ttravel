@extends('main')
@section('content')
<div class="page-header">



    <div class="card-block">
        <div class="row col-12">
            <ul class="breadcrumb-title col-12">
                <li class="breadcrumb-item" style="margin-top: 20px;">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">แก้ไข ผู้ใช้งาน</a>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <hr style="width: 95%;" style="margin-top: 20%;">
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-12">
                <form name="myfrom" method="post" id="go" action="{{ route('staffupdate') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$staffall->id}}">

                        <div class="form-group row col-12">
                            <label>ชื่อ-นามสกุล :</label>
                            <span style="color:red">*</span>
                        <input type="text" class="form-control" name="name" value="{{$staffall->name}}" required autocomplete="off">
                        </div>
                        <div class="form-group row col-sm-12">
                            <label >E-mail : </label>
                            <span style="color:red">*</span>
                                <input type="text" class="form-control" name="email"  value="{{$staffall->email}}" required
                                    autocomplete="off">
                           
                        </div>
                        <div class="form-group row col-sm-12">
                            <label >Username :</label>
                            <span style="color:red">*</span>
                                <input type="text" class="form-control" name="username" value="{{$staffall->user_username}}" required
                                    autocomplete="off">
                           
                        </div>
                        <div class="form-group row col-sm-12">
                            <label >New Password :</label>
                          <span style="color:red">*</span>
                                <input type="text" class="form-control" name="password" required
                                    autocomplete="off">
                            
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

                <button tpye="submit" form="go" class="btn btn-primary btn-block">ยืนยัน</button>

            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <a href="{{ route('staffadd')}}"><button tpye="button"
                        class="btn btn-danger btn-block">กลับหน้าหลัก</button></a>

            </div>
        </div>
    </div>



</div>
@endsection
