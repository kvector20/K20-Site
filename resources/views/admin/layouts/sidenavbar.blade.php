  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="@if (Auth::user()->image == '')
        {{ asset('/admin_style/images/avatar.jpg') }}
        @else
        {{ App\Helpers\Helpers::storage(Auth::user()->image) }}
              @endif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        @can('topics.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Topics</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('topics.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('topics.create', Auth::user())
                <li><a href="{{ route('topics.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('headlines.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Headlines</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('headlines.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('headlines.create', Auth::user())
                <li><a href="{{ route('headlines.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('workshops.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-graduation-cap"></i> <span>Workshops</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('workshops.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('workshops.create', Auth::user())
                <li><a href="{{ route('workshops.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('events.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Events</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('events.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('events.create', Auth::user())
                <li><a href="{{ route('events.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan
        
        @can('headsDescription.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Heads Description</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('headsDescription.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('headsDescription.create', Auth::user())
                <li><a href="{{ route('headsDescription.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('career6.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Career Launcher 6</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('career6.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('career6.session', Auth::user())
                <li><a href="{{ route('career6.session') }}"><i class="fa text-purple fa-circle-o"></i> Sessions</a></li>
                <li><a href="{{ route('career6.session.create') }}"><i class="fa text-blue fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('highway.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Highway</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('highway19.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            </ul>
          </li>
        @endcan
        
        @can('highboard20.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>High Board</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('highboard20.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            </ul>
          </li>
        @endcan

        @can('participants19.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Participants</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('participants19.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              <li><a href="{{ route('participants19.rejected') }}"><i class="fa text-purple fa-circle-o"></i> Rejected</a></li>
            </ul>
          </li>
        @endcan

        @can('memberssecond.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Members 20</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('members20.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            </ul>
          </li>
        @endcan

        @can('memberssecond.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Members Second Phase</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('memberssecond19.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            </ul>
          </li>
        @endcan

        @can('Opening19.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Opening 19</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('opening19.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('Opening19.mail', Auth::user())
                <li><a href="{{ route('opening19.mail') }}"><i class="fa text-purple fa-circle-o"></i> Email</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('admins.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Admins</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('admins.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('admins.create', Auth::user())
                <li><a href="{{ route('admins.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('roles.view', Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Roles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{ route('roles.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            @can('roles.create', Auth::user())
              <li><a href="{{ route('roles.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
            @endcan
          </ul>
        </li>
        @endcan

        @can('permissions.view', Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-circle"></i> <span>Permissions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{ route('permissions.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            @can('permissions.create', Auth::user())
              <li><a href="{{ route('permissions.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
            @endcan
          </ul>
        </li>
        @endcan

        @can('contact.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-phone"></i> <span>Contact</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('contact.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('contact.create', Auth::user())
                <li><a href="{{ route('contact.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>