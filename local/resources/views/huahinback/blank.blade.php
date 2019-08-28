@extends('main')
@yield('css')
@section('content')
<div class="card-header">
    <h5>Basic Form Inputs</h5>
    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
    <h4 class="sub-title">Basic Inputs</h4>
    <div class="row">
        <div class="col-sm-6 mobile-inputs">
            <h4 class="sub-title">Text-color</h4>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control form-txt-primary" placeholder=".form-txt-primary">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-txt-warning" placeholder=".form-txt-warning">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-txt-default" placeholder=".form-txt-default">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-txt-danger" placeholder=".form-txt-danger">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-txt-success" placeholder=".form-txt-success">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-txt-inverse" placeholder=".form-txt-inverse">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-txt-info" placeholder=".form-txt-info">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6 mobile-inputs">
            <h4 class="sub-title">Background-color</h4>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control form-bg-primary" placeholder=".form-bg-primary">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-warning" placeholder=".form-bg-warning">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-default" placeholder=".form-bg-default">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-danger" placeholder=".form-bg-danger">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-success" placeholder=".form-bg-success">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-inverse" placeholder=".form-bg-inverse">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-info" placeholder=".form-bg-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@yield('scripts')
@endsection