
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-user-circle"></i> <span>Patients</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/patient')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li ><a href="{{url('/patient/add')}}"><i class="fa fa-circle-o"></i> Add</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-plus-square"></i> <span>Treatment</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/treatment')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li ><a href="{{url('/treatment/treat')}}"><i class="fa fa-circle-o"></i> Treat</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/summary')}}">
                    <i class="fa fa-address-book-o"></i> <span> Summary</span>

                </a>
            </li>
            <li>
                <a href="{{url('/appointment')}}">
                    <i class="fa fa-calendar"></i> <span>Appointment</span>
                    <span class="pull-right-container">
                <small class="label pull-right bg-red-gradient">3</small>
                <small class="label pull-right bg-yellow-gradient">10</small>

            </span>
                </a>
            </li>
            <li>
                <a href="{{url('/report')}}">
                    <i class="fa fa-calendar"></i> <span>Report</span>

                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-stethoscope"></i>
                    <span>Diagnosis</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/diagnosis')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="{{url('/diagnosis/add')}}"><i class="fa fa-circle-o"></i> Add</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-thermometer"></i>
                    <span>Symptom</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/symptom')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="{{url('/symptom/add')}}"><i class="fa fa-circle-o"></i> Add</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-medkit"></i>
                    <span>Regiment</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/regiment')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="{{url('/regiment/add')}}"><i class="fa fa-circle-o"></i> Add</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-md"></i>
                    <span>Doctor</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/doctor')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="{{url('/doctor/add')}}"><i class="fa fa-circle-o"></i> Add</a></li>
                </ul>
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-users"></i>--}}
                    {{--<span>User</span>--}}
                    {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="{{url('/user')}}"><i class="fa fa-circle-o"></i> List</a></li>--}}
                    {{--<li><a href="{{url('/user/add')}}"><i class="fa fa-circle-o"></i> Add</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

