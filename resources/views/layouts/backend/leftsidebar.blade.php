<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
            <div class="email">{{Auth::user()->email}}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="}"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            <i class="material-icons">input</i>Log Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if(Request::is('admin*'))
                <li class="{{Request::is('admin/dashbord')?'active': ''}}">
                    <a href="{{route('admin.dashbord')}}">
                        <i class="material-icons">home</i>
                        <span>Dashbord</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/addpos/create')?'active': ''}}">
                    <a href="{{route('admin.addpost.create')}}">
                        <i class="material-icons">home</i>
                        <span>Post A Add</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/addpos/')?'active': ''}}">
                    <a href="{{route('admin.addpost.index')}}">
                        <i class="material-icons">home</i>
                        <span>All Add</span>
                    </a>
                </li>



             @endif



{{--            @if(Request::is('author*'))--}}
{{--                <li class="{{Request::is('author/dashbord')?'active': ''}}">--}}
{{--                    <a href="{{route('author.dashbord')}}">--}}
{{--                        <i class="material-icons">home</i>--}}
{{--                        <span>Dashbord</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="{{Request::is('author/post*')?'active': ''}}">--}}
{{--                    <a href="{{route('author.post.index')}}">--}}
{{--                        <i class="material-icons">library_books</i>--}}
{{--                        <span>Posts</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="header">System</li>--}}
{{--                <li class="{{Request::is('author/seting')?'active': ''}}">--}}
{{--                    <a href="{{route('author.setting')}}">--}}
{{--                        <i class="material-icons">settings</i>--}}
{{--                        <span>Author Settings</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}

{{--                        <i class="material-icons">input</i>Log Out--}}
{{--                    </a>--}}

{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--                </li>--}}
{{--            @endif--}}


        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
