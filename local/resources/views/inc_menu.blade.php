{{-- @php
$permission = DB::table('access_role')->where('roles_id_no',Auth::user()->id)->first();
@endphp --}}
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigation-label">เมนูหลัก</div>
        <ul class="pcoded-item pcoded-left-item">
            {{-- @if($permission->access_menu1 == 'Y') --}}
                <div class="pcoded-navigation-label">การจัดการ</div>
                <li class="">
                    <a href="{{route('staffadd')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-contact-add"></i><b>N</b></span>
                        <span class="pcoded-mtext">ผู้ใช้งาน</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                {{-- <li class="">
                    <a href="{{route('access')}}">
                        <span class="pcoded-micon"><i class="icofont icofont-id-card"></i><b>N</b></span>
                        <span class="pcoded-mtext">จัดการสิทธิ์</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li> --}}
            {{-- @endif
            @if($permission->access_menu2 == 'Y') --}}
                <div class="pcoded-navigation-label">จัดการ Website</div>
                {{-- <li class="">
                    <a href="{{ url('banner')}}">
                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                        <span class="pcoded-mtext">จัดการ Banner</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li> --}}
                <li class="">
                        <a href="{{ url('wordbanner')}}">
                            <span class="pcoded-micon"><i class="icofont icofont-billboard"></i></span>
                            <span class="pcoded-mtext">จัดการ Banner</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                </li>
                <li class="">
                        <a href="{{ url('tourpack')}}">
                            <span class="pcoded-micon"><i class="icofont icofont-airplane-alt"></i></span>
                            <span class="pcoded-mtext">จัดการ Tour Package</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                </li>
                <li class="">
                        <a href="{{ url('ticketpack')}}">
                            <span class="pcoded-micon"><i class="icofont icofont-plane-ticket"></i></span>
                            <span class="pcoded-mtext">จัดการ Ticket</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
               
                
                    </li>
                <li class="">
                        <a href="{{ url('jobmaneger')}}">
                            <span class="pcoded-micon"><i class="icofont icofont-list"></i></span>
                            <span class="pcoded-mtext">จัดการตำแหน่งงาน</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
               
                
                    </li>
            {{-- @endif
            @if($permission->access_menu3 == 'Y') --}}
                <div class="pcoded-navigation-label">การทำรายการ</div>
           
            <li class="">
                    <a href="{{ url('continent')}}">
                        <span class="pcoded-micon"><i class="ti-world"></i></span>
                        <span class="pcoded-mtext">จัดการทวีป</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
            </li>
  
        <li class="">
                <a href="{{ url('country')}}">
                    <span class="pcoded-micon"><i class="ti-world"></i></span>
                    <span class="pcoded-mtext">จัดการประเทศ</span>
                    <span class="pcoded-mcaret"></span>
                </a>
        </li>

    <li class="">
            <a href="{{ url('county')}}">
                <span class="pcoded-micon"><i class="ti-world"></i></span>
                <span class="pcoded-mtext">จัดการจังหวัด</span>
                <span class="pcoded-mcaret"></span>
            </a>
    </li>
            {{-- @endif
            @if($permission->access_menu4 == 'Y') --}}
                {{-- <div class="pcoded-navigation-label">จัดการหมวดหมู่สินค้า</div> --}}
                
            {{-- @endif
            @if($permission->access_menu5 == 'Y') --}}
                <div class="pcoded-navigation-label">รายงาน</div>
                <li class="">
                        <a href="{{ url('jobregis')}}">
                            <span class="pcoded-micon"><i class="icofont icofont-users"></i></span>
                            <span class="pcoded-mtext">รายชื่อผู้สมัครงาน</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                </li>
                <li class="">
                        <a href="{{ url('emailcontact')}}">
                            <span class="pcoded-micon"><i class="icofont icofont-ui-message"></i></span>
                            <span class="pcoded-mtext">รายชื่อผู้ส่งอีเมล</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                </li>
            {{-- @endif --}}
        </ul>


    </div>
</nav>
{{-- ////////////////////////////////////////////////////////////////////////////////////////////// --}}
{{-- @php
$permission = DB::table('permission')->where('permission_position_id',Auth::user()->position)->get();
@endphp
<div class="sidebar-category sidebar-category-visible">
<div class="category-content no-padding">
<ul class="navigation navigation-main navigation-accordion">
<!-- Main -->
<li class="navigation-header"><span></span> <i class="icon-menu" title="Main pages"></i></li>
<li class="{{Request::segment(1) == 'dashboard' ? 'active' : ''}}"><a href="{{url('dashboard')}}"><i
        class="icon-home4"></i> <span>Dashboard</span></a></li>
@if($permission)
@foreach($permission AS $key)
@if($key->permission_menu_id == 1)
<li class="{{(Request::segment(1) == 'users' || Request::segment(1) == 'position') ? 'active' : ''}}"><a
        href="{{url('users')}}"><i class="icon-user"></i> <span>ผู้ใช้งาน</span></a>
    <ul>
        <li class="{{Request::segment(1) == 'users' ? 'active' : ''}}"><a href="{{url('users')}}"> ข้อมูลผู้ใช้งาน</a>
        </li>
        <li class="{{Request::segment(1) == 'position' ? 'active' : ''}}"><a href="{{url('position')}}"> Position</a>
        </li>
    </ul>
</li>
@elseif($key->permission_menu_id == 2)
<li class="{{Request::segment(1) == 'import' ? 'active' : ''}}"><a href="{{url('import')}}"><i
            class="fa fa-download"></i> <span> Import File Excel Payroll</span></a></li>
@elseif($key->permission_menu_id == 3)
<li class="{{Request::segment(1) == 'quit' ? 'active' : ''}}"><a href="{{url('quit')}}"><i class="fa fa-download"></i>
        <span> Import File Excel สถานะลาออก</span></a>
</li>
@elseif($key->permission_menu_id == 4)


<li><a href="{{url('employee')}}"><i class="fa fa-book"></i> <span> Manager</span></a>
    @php
    $branch =
    DB::table('manabranchper')->join('branch','manabranchper.manabranchper_branchid','branch.branch_id')->where('manabranchper_positionid',Auth::user()->position)->get();
    @endphp
    @if($branch)
    @foreach($branch AS $key)
    <ul>
        <li class="{{Request::segment(1) == 'employee/manager/$key->branch_id' ? 'active' : ''}}"><a
                href="{{url('employee/manager')}}/{{$key->branch_id}}">{{$key->branch_name}}</a></li>
    </ul>
    @endforeach
    @endif
</li>
@elseif($key->permission_menu_id == 5)
<li><a><i class="fa fa-book"></i> <span> พนักงานรายวัน</span></a>
    @php
    $semibranch =
    DB::table('semimonthlybranchper')->join('branch','semimonthlybranchper.semimonthlybranchper_branchID','branch.branch_id')->where('semimonthlybranchper_positionID',Auth::user()->position)->get();
    @endphp
    @if($semibranch)
    <ul>
        @foreach($semibranch AS $key)
        <li><a href="{{url('employee/daily')}}/{{$key->branch_id}}">{{$key->branch_name}}</a></li>
        @endforeach
    </ul>
    @endif
</li>
@elseif($key->permission_menu_id == 6)
<li><a><i class="fa fa-book"></i> <span> พนักงานรายเดือน</span></a>
    @php
    $monthbranch =
    DB::table('monthlybranchper')->join('branch','monthlybranchper.monthlybranchper_branchID','branch.branch_id')->where('monthlybranchper_positionID',Auth::user()->position)->get();
    @endphp
    @if($monthbranch)
    <ul>
        @foreach($monthbranch AS $key)
        <li><a href="{{url('employee/monthly')}}/{{$key->branch_id}}">{{$key->branch_name}}</a></li>
        @endforeach
    </ul>
    @endif
</li>
<!--
            <ul>
            @php
                $branch = DB::table('empbranchper')->join('branch','empbranchper.empbranchper_branchid','branch.branch_id')->where('empbranchper_positionid',Auth::user()->position)->get();
            @endphp
                @if($branch)
                    @foreach($branch AS $key)
                        <li><a>{{$key->branch_name}}</a>
                            <ul>
                                <li><a href="{{url('employee/monthly')}}/{{$key->branch_id}}">รายเดือน (Monthly)</a></li>
                                <li><a href="{{url('employee/daily')}}/{{$key->branch_id}}">รายวัน (Daily)</a></li>
                            </ul>
                        </li>
                    @endforeach
                @endif
            </ul>
-->
<!--                    </li>-->
@elseif($key->permission_menu_id ==7)
<li><a href="{{url('branch')}}"><i class="fa fa-university"></i> <span> ข้อมูลสาขา</span></a></li>
@elseif($key->permission_menu_id == 8)
<li><a href="{{url('employee/employreport')}}"><i class="fa fa-file-excel-o"></i> รายงานข้อมูลพนักงาน</a></li>
@elseif($key->permission_menu_id == 9)
<li><a href="{{url('logmail')}}"><i class="fa fa-cc"></i> แก้ไข E-mail รับ log</a></li>
@endif
@endforeach
@endif --}}