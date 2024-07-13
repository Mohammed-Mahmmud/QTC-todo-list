<div class="navigation">
            <div class="navigation-menu-tab">
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Apps" data-nav-target="#apps">
                            <i data-feather="globe"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="User" data-nav-target="#user">
                            <i data-feather="users"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="navigation-menu-body">
                <div class="navigation-menu-group">
                    <div id="apps">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="globe"></i> Apps
                            </li>
                            <li>
                                <a class="@yield('listsActive')" href="{{ route('list.index') }}">
                                    <span>Todo List</span>
                                    <span class="badge badge-warning">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="user">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="users"></i> User
                            </li>
                            <li>
                                <a class="@yield('usersActive')" href="{{ route('user.index') }}">Users List</a>
                            </li>
                            <li>
                                <a class="@yield('newUserActive')" href="{{ route('user.create') }}">New User</a>
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>