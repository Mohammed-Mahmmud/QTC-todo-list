    <!-- begin::header -->
    <div class="header d-print-none">

        <div class="header-left">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <div class="header-logo">
                 <h4>Todo List</h4>
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <div class="page-title">
                </div>
            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">
                    <!-- begin::header fullscreen -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
                    <!-- begin::settings -->
                    <li class="nav-item dropdown">
                        <a href="{{ route('user.index') }}" class="nav-link" title="Settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <!-- end::settings -->

                    <!-- begin::user menu -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                            <span class="mr-2 d-sm-inline d-none">{{auth()->user()->name}}</span>
                            <figure class="avatar avatar-sm">
                                <img src="{{asset('storage/' . auth()->user()->image ?? 'dashboard/demos/assets/media/image/user/women_avatar3.jpg')}}" class="rounded-circle" alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <!-- end::user menu -->
                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>
        </div>

    </div>
    <!-- end::header -->