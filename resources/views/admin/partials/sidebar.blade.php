<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('assets/admin')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{route('admin.index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.users.index')}}"><i class="fa fa-circle-o"></i> Users View</a></li>
            <li><a href="{{route('admin.users.create')}}"><i class="fa fa-circle-o"></i> Users Create</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Media Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.media.index')}}"><i class="fa fa-circle-o"></i>View Media Links</a></li>
            <li><a href="{{route('admin.media.create')}}"><i class="fa fa-circle-o"></i>Media Links Create</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Youtube Videos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.videos.show')}}"><i class="fa fa-circle-o"></i> Videos Link View</a></li>
            <li><a href="{{route('admin.videos.make')}}"><i class="fa fa-circle-o"></i> Videos Link Create</a></li>
          </ul>
        </li>

        <li>
        <a href="{{route('auth.logout')}}">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
    
    </section>
    <!-- /.sidebar -->
  </aside>