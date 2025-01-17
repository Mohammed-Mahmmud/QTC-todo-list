<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
{{-- <div class="content-wrapper">

        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-menu-tab">
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Ecommerce" data-nav-target="#ecommerce">
                            <i data-feather="shopping-cart"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Analytics" data-nav-target="#analytics">
                            <i data-feather="activity"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Projects" data-nav-target="#projects">
                            <i data-feather="briefcase"></i>
                        </a>
                    </li>
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
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Components" data-nav-target="#components">
                            <i data-feather="layers"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Forms" data-nav-target="#forms">
                            <i data-feather="edit-3"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Plugins" data-nav-target="#plugins">
                            <i data-feather="gift"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Pages" data-nav-target="#pages">
                            <i data-feather="copy"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navigation-menu-body">
                <div class="navigation-menu-group">
                    <div id="ecommerce">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="shopping-cart"></i> E-commerce
                            </li>
                            <li>
                                <a href="ecommerce-dashboard.html">Dashboard</a></li>
                            <li>
                                <a href="orders.html">Orders</a></li>
                            <li>
                                <a href="product-list.html">Product List</a></li>
                            <li>
                                <a href="product-grid.html">Product Grid</a></li>
                            <li>
                                <a href="product-detail.html">Product Detail</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-warning rounded">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Total Orders</h6>
                                        <h4 class="mb-0 font-weight-bold">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-success rounded">
                                    <i class="ti-trash"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>New Products</h6>
                                        <h4 class="mb-0">100</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-3">
                                <span class="avatar-title bg-danger rounded">
                                    <i class="ti-reload"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6>Refund</h6>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="analytics">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="activity"></i> Analytics
                            </li>
                            <li>
                                <a href="analytics-dashboard.html">Dashboard</a></li>
                            <li>
                                <a href="customers.html">Customers</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="projects">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="briefcase"></i> Projects
                            </li>
                            <li>
                                <a href="projects-dashboard.html">Dashboard</a></li>
                            <li>
                                <a href="project-list.html">Project List</a></li>
                            <li>
                                <a href="project-grid.html">Project Grid</a></li>
                            <li>
                                <a href="project-detail.html">Project Detail</a></li>
                            <li>
                                <a href="clients.html">Clients</a></li>
                            <li class="navigation-divider">Summary</li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-warning rounded-circle">
                                    <i class="ti-bar-chart-alt"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Sales</h6>
                                        <p class="text-muted mb-0 small">This Mounth</p>
                                        <h4 class="mb-0">$50.958</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-success rounded-circle">
                                    <i class="ti-world"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Projects</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">35</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex align-items-start">
                                    <div>
                                        <figure class="avatar mr-2">
                                <span class="avatar-title bg-info rounded-circle">
                                    <i class="ti-user"></i>
                                </span>
                                        </figure>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Total Visitor</h6>
                                        <p class="text-muted mb-0 small">Today</p>
                                        <h4 class="mb-0">5.301</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="apps">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="globe"></i> Apps
                            </li>
                            <li>
                                <a href="chat.html">
                                    <span>Chat</span>
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                            <li>
                                <a href="mail.html">
                                    <span>Mail</span>
                                </a>
                            </li>
                            <li>
                                <a class="active" href="todo-list.html">
                                    <span>Todo List</span>
                                    <span class="badge badge-warning">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="file-manager.html">
                                    <span>File Manager</span>
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="gallery.html">
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">Invoice</a></li>
                            <li class="navigation-divider">Recent Contacts</li>
                            <li>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Valentine Maton</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Holmes Cherryman</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar4.jpg" class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Kenneth Hune</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Holmes Cherryman</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>Kenneth Hune</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="user">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="users"></i> User
                            </li>
                            <li>
                                <a href="profile.html">Profile</a></li>
                            <li>
                                <a href="user-list.html">User List</a></li>
                            <li>
                                <a href="user-edit.html">User Edit</a></li>
                            <li><a href="login.html" target="_blank">Login</a></li>
                            <li><a href="register.html" target="_blank">Register</a></li>
                            <li><a href="recovery-password.html" target="_blank">Recovery Password</a>
                            </li>
                            <li><a href="lock-screen.html" target="_blank">Lock Screen</a></li>
                            <li class="navigation-divider">Followers</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar4.jpg" class="rounded-circle" alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                            <span class="avatar-title bg-info rounded-circle">R</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Avery Hampshire" data-toggle="tooltip">
                                            <span class="avatar-title bg-warning rounded-circle">A</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Rozella Baskerfield" data-toggle="tooltip">
                                            <span class="avatar-title bg-success rounded-circle">R</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Other" data-toggle="tooltip">
                                            <span class="avatar-title bg-dark rounded-circle">+5</span>
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li class="navigation-divider">Following</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Krisha McAlees" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Darby Croci" data-toggle="tooltip">
                                            <span class="avatar-title bg-danger rounded-circle">D</span>
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Hilton Dew" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mellie Smittoune" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="avatar">
                                        </a>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <a href="#" title="Mahalia Lemme" data-toggle="tooltip">
                                            <span class="avatar-title bg-secondary rounded-circle">M</span>
                                        </a>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="components">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="layers"></i> Components
                            </li>
                            <li>
                                <a href="#">Basic Components</a>
                                <ul>
                                    <li>
                                        <a href="alert.html">Alerts</a></li>
                                    <li>
                                        <a href="accordion.html">Accordion</a></li>
                                    <li>
                                        <a href="buttons.html">Buttons</a></li>
                                    <li>
                                        <a href="dropdown.html">Dropdown</a></li>
                                    <li>
                                        <a href="list-group.html">List Group</a></li>
                                    <li>
                                        <a href="pagination.html">Pagination</a></li>
                                    <li>
                                        <a href="typography.html">Typography</a></li>
                                    <li>
                                        <a href="media-object.html">Media Object</a>
                                    </li>
                                    <li>
                                        <a href="progress.html">Progress</a></li>
                                    <li>
                                        <a href="modal.html">Modal</a></li>
                                    <li>
                                        <a href="spinners.html">Spinners</a></li>
                                    <li>
                                        <a href="navs.html">Navs</a></li>
                                    <li>
                                        <a href="tab.html">Tab</a></li>
                                    <li>
                                        <a href="tooltip.html">Tooltip</a></li>
                                    <li>
                                        <a href="popovers.html">Popovers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Cards</a>
                                <ul>
                                    <li>
                                        <a href="basic-cards.html">Basic Cards </a></li>
                                    <li>
                                        <a href="image-cards.html">Image Cards </a></li>
                                    <li>
                                        <a href="scroll-cards.html">Scroll Cards </a></li>
                                    <li>
                                        <a href="other-cards.html">Others Cards</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                                <ul>
                                    <li>
                                        <a href="basic-tables.html">Basic Tables</a></li>
                                    <li>
                                        <a href="dataTable.html">Datatable</a></li>
                                    <li>
                                        <a href="responsive-tables.html">Responsive Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Charts</a>
                                <ul>
                                    <li>
                                        <a href="apexchart.html">Apex Chart</a></li>
                                    <li>
                                        <a href="chartjs.html">Chartjs</a></li>
                                    <li>
                                        <a href="justgage.html">Justgage</a></li>
                                    <li>
                                        <a href="morsis.html">Morsis</a></li>
                                    <li>
                                        <a href="peity.html">Peity</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Maps</a>
                                <ul>
                                    <li>
                                        <a href="google-map.html">Google Map</a></li>
                                    <li>
                                        <a href="vector-map.html">Vector Map</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="avatar.html">Avatar</a></li>
                            <li>
                                <a href="icons.html">Icons</a></li>
                            <li>
                                <a href="colors.html">Colors</a></li>
                        </ul>
                    </div>
                    <div id="forms">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="edit-3"></i> Forms
                            </li>
                            <li>
                                <a href="basic-forms.html">Basic Forms</a></li>
                            <li>
                                <a href="custom-forms.html">Custom Forms</a></li>
                            <li>
                                <a href="advanced-forms.html">Advanced Forms</a></li>
                            <li>
                                <a href="form-validation.html">Form Validation</a></li>
                            <li>
                                <a href="form-wizard.html">Form Wizard</a></li>
                            <li>
                                <a href="file-upload.html">File Upload</a></li>
                            <li>
                                <a href="datepicker.html">Datepicker</a></li>
                            <li>
                                <a href="timepicker.html">Timepicker</a></li>
                            <li>
                                <a href="colorpicker.html">Colorpicker</a></li>
                        </ul>
                    </div>
                    <div id="plugins">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="gift"></i> Plugins
                            </li>
                            <li>
                                <a href="sweet-alert.html">Sweet Alert</a></li>
                            <li>
                                <a href="lightbox.html">Lightbox</a></li>
                            <li>
                                <a href="toast.html">Toast</a></li>
                            <li>
                                <a href="tour.html">Tour</a></li>
                            <li>
                                <a href="slick-slide.html">Slick Slide</a></li>
                            <li>
                                <a href="nestable.html">Nestable</a></li>
                        </ul>
                    </div>
                    <div id="pages">
                        <ul>
                            <li class="navigation-divider d-flex align-items-center">
                                <i class="mr-2" data-feather="copy"></i> Pages
                            </li>
                            <li>
                                <a href="timeline.html">Timeline</a></li>
                            <li>
                                <a href="pricing-table.html">Pricing Table</a></li>

                            <li>
                                <a href="pricing-table-2.html">Pricing Table 2</a></li>
                            <li>
                                <a href="search-result.html">Search Result</a></li>
                            <li>
                                <a href="mailing.html">Mailing</a></li>
                            <li>
                                <a href="#">Error Pages</a>
                                <ul>
                                    <li><a href="404.html" target="_blank">404</a></li>
                                    <li><a href="503.html" target="_blank">503</a></li>
                                    <li><a href="mean-at-work.html" target="_blank">Mean at
                                            Work</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blank-page.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="#">Menu Level</a>
                                <ul>
                                    <li>
                                        <a href="#">Menu Level</a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Level </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::navigation -->

        <div class="content-body">

            <div class="content">


    <div class="row app-block">
        <div class="col-md-3 app-sidebar">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-secondary btn-block" data-toggle="modal" data-target="#newTaskModal">
                        New Task
                    </button>
                </div>
                <div class="app-sidebar-menu">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item active d-flex align-items-center">
                            <i data-feather="mail" class="mr-2 width-15 height-15"></i>
                            All
                        </a>
                        <a href="#" class="list-group-item">
                            <i data-feather="send" class="mr-2 width-15 height-15"></i>
                            My Task
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0">Tags</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <span class="text-warning fa fa-circle mr-2"></span>
                            Theme Support
                            <span class="small ml-auto">5</span>
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <span class="text-success fa fa-circle mr-2"></span>
                            Freelance
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <span class="text-danger fa fa-circle mr-2"></span>
                            Social
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <span class="text-info fa fa-circle mr-2"></span>
                            Friends
                        </a>
                        <a href="#" class="list-group-item d-flex align-items-center">
                            <span class="text-secondary fa fa-circle mr-2"></span>
                            Coding
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 app-content">
            <div class="app-content-overlay"></div>
            <div class="app-action">
                <div class="action-left">
                    <ul class="list-inline">
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                Filter
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Favourites</a>
                                <a class="dropdown-item" href="#">Done</a>
                                <a class="dropdown-item" href="#">Deleted</a>
                            </div>
                        </li>
                        <li class="list-inline-item mb-0">
                            <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                Sort
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Ascending</a>
                                <a class="dropdown-item" href="#">Descending</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="action-right">
                    <form class="d-flex mr-3">
                        <a href="#" class="app-sidebar-menu-button btn btn-outline-light">
                            <i data-feather="menu" class="width-15 height-15"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Task search" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="button" id="button-addon1">
                                    <i class="ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="app-pager d-flex align-items-center">
                        <div class="mr-3">1-50 of 253</div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i data-feather="chevron-left" class="width-15 height-15"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i data-feather="chevron-right" class="width-15 height-15"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card card-body app-content-body">
                <div class="app-lists">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item task-list active">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">How To Protect Your Computer Very
                                        Useful Tips
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-danger">Social</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Jo Hugill" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Cullie Philcott" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list active">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                                    <label class="custom-control-label" for="customCheck2"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star font-size-16 text-warning"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">How Hypnosis Can Help You
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-warning">Theme Support</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Jo Hugill" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Cullie Philcott" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star font-size-16 text-warning"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Dealing With Technical Support 10
                                        Useful Tips
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-info">Friends</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                    <span class="avatar-title bg-primary rounded-circle">P</span>
                                                </div>
                                                <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                    <span class="avatar-title bg-success rounded-circle">G</span>
                                                </div>
                                                <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Jo Hugill" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Cullie Philcott" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list active">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" checked="">
                                    <label class="custom-control-label" for="customCheck4"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Get The Boot A Birds Eye Look Into
                                        Mcse Boot Camps
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-warning">Social</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                    <span class="avatar-title bg-success rounded-circle">G</span>
                                                </div>
                                                <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Buying Used Electronic Test
                                        Equipment.
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-success">Freelance</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                    <span class="avatar-title bg-primary rounded-circle">P</span>
                                                </div>
                                                <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                    <span class="avatar-title bg-success rounded-circle">G</span>
                                                </div>
                                                <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Fix Responsiveness
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-warning">Theme Support</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                    <span class="avatar-title bg-warning rounded-circle">G</span>
                                                </div>
                                                <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                    <span class="avatar-title bg-info rounded-circle">P</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star font-size-16 text-warning"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">
                                        Hypnotherapy For Motivation Getting The Drive Back
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-secondary">Coding</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Are You Struggling In Life
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-warning">Theme Support</div>
                                        </div>
                                        <div class="mr-3">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                    <span class="avatar-title bg-primary rounded-circle">P</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                    <label class="custom-control-label" for="customCheck9"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Believing Is The Absence Of Doubt
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-success">Freelance</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label" for="customCheck10"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Success Steps For Your Personal Or
                                        Business Life
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-danger">Social</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                    <span class="avatar-title bg-primary rounded-circle">P</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                    <label class="custom-control-label" for="customCheck11"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">Don't Let The Outtakes Take You
                                        Out
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-warning">Theme Support</div>
                                        </div>
                                        <div class="mr-3">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                    <span class="avatar-title bg-success rounded-circle">G</span>
                                                </div>
                                                <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item task-list">
                            <div class="mr-3">
                                <a href="#" class="app-sortable-handle">
                                    <i data-feather="move" class="width-15 height-15"></i>
                                </a>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                                    <label class="custom-control-label" for="customCheck12"></label>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="add-star mr-3" title="Add stars">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex align-items-center justify-content-between">
                                    <div class="app-list-title text-truncate">It is a good idea to think of your
                                        PC as an office.
                                    </div>
                                    <div class="pl-3 d-flex align-items-center">
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="badge badge-warning">Theme Support</div>
                                        </div>
                                        <div class="mr-3 d-sm-inline d-none">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                    <span class="avatar-title bg-success rounded-circle">G</span>
                                                </div>
                                                <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                    <span class="avatar-title bg-primary rounded-circle">P</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" title="Delete" data-toggle="tooltip">
                                            <i data-feather="trash-2" class="width-15 height-15"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end::app-lists -->

                <!-- begin:app-detail -->
                <div class="card app-detail">
                    <div class="card-header">
                        <div class="app-detail-action-left">
                            <a class="app-detail-close-button" href="#">
                                <i data-feather="arrow-left" class="mr-3"></i>
                            </a>
                            <h5 class="mb-0">Draw design and presentation for customers. </h5>
                        </div>
                        <div class="app-detail-action-right">
                            <div>
                                <a href="#" class="btn btn-success" data-toggle="tooltip" title="2:44 AM">
                                    <i data-feather="check" class="mr-2"></i>
                                    Completed
                                </a>
                                <span data-toggle="modal" data-target="#editTaskModal">
                                        <a href="#" class="btn btn-outline-light ml-2" title="Edit Task" data-toggle="tooltip">
                                            <i data-feather="edit-3"></i>
                                        </a>
                                    </span>
                                <a href="#" class="btn btn-outline-light ml-2" data-toggle="tooltip" title="Delete Task">
                                    <i data-feather="trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="app-detail-article">
                        <div class="card-body">
                            <div class="d-flex align-items-center p-l-r-0 m-b-20">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-group">
                                        <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                            <span class="avatar-title bg-primary rounded-circle">P</span>
                                        </div>
                                        <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                            <span class="avatar-title bg-success rounded-circle">G</span>
                                        </div>
                                        <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                        </figure>
                                        <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                            <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <span class="badge bg-warning badge-pill mr-2">Theme Support</span>
                                    <a href="#" data-toggle="tooltip" title="Files" class="mr-2">
                                        <i class="fa fa-paperclip"></i>
                                    </a>
                                    <a href="#" class="mr-2">
                                        <i class="fa fa-star font-size-16 text-warning"></i>
                                    </a>
                                    <span class="text-muted">4:14 AM</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis
                                incidunt labore modi numquam omnis pariatur possimus suscipit vitae
                                voluptas?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam
                                asperiores
                                error esse fugiat fugit laboriosam necessitatibus officia, placeat, quam quis
                                reprehenderit similique soluta suscipit tempore! Consequuntur eligendi hic in
                                libero
                                nostrum rem ut? At itaque laboriosam natus provident reprehenderit.</p>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <h6 class="mb-3 font-size-11 text-uppercase">Files</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="small">
                                    <a href="#">
                                        <i data-feather="paperclip" class="mr-1 width-15 height-15"></i>
                                        uikit-design.psd
                                    </a>
                                </li>
                                <li class="small">
                                    <a href="#">
                                        <i data-feather="paperclip" class="mr-1 width-15 height-15"></i>
                                        uikit-design.sketch
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <h6 class="mb-3 font-size-11 text-uppercase">Comment</h6>
                            <div class="reply-email-quill-editor mb-3"></div>
                            <div class="d-flex justify-content-between">
                                <div class="reply-email-quill-toolbar">
                                        <span class="ql-formats mr-0">
                                          <button class="ql-bold"></button>
                                          <button class="ql-italic"></button>
                                          <button class="ql-underline"></button>
                                          <button class="ql-link"></button>
                                          <button class="ql-image"></button>
                                        </span>
                                </div>
                                <button class="btn btn-primary">
                                    <i data-feather="send" class="mr-2"></i>
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Task title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tags</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single" multiple="">
                                    <option value="Theme Support">Theme Support</option>
                                    <option value="Freelance">Freelance</option>
                                    <option selected="" value="Social">Social</option>
                                    <option selected="" value="Friends">Friends</option>
                                    <option value="Coding">Coding</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row row-sm">
                            <label class="col-sm-3 col-form-label">Deadline</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control create-event-datepicker" placeholder="Date">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control create-event-demo" placeholder="Time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Participate</label>
                            <div class="col-sm-9">
                                <div class="avatar-group">
                                    <figure class="avatar avatar-sm">
                                        <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <span class="avatar-title bg-danger rounded-circle">S</span>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </div>
                                <button type="button" class="btn btn-outline-light btn-sm btn-floating" title="Add User" data-toggle="dropdown">
                                    <i class="ti-plus"></i>
                                </button>
                                <div class="dropdown-menu p-0">
                                    <div class="p-3">
                                        <h6 class="text-uppercase font-size-11 mb-3">Add User</h6>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="Search User" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-light" type="button" id="button-addon2">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush mt-2">
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <span class="avatar-title bg-primary rounded-circle">V</span>
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <img src="../../assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Task title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Title" value="Draw design and presentation for customers.">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tags</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single" multiple="">
                                    <option selected="" value="Theme Support">Theme Support</option>
                                    <option value="Freelance">Freelance</option>
                                    <option value="Social">Social</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Coding">Coding</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row row-sm">
                            <label class="col-sm-3 col-form-label">Deadline</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control create-event-datepicker" placeholder="Date" value="10/31/2019">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control create-event-demo" value="11:57" placeholder="Time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Participate</label>
                            <div class="col-sm-9">
                                <div class="avatar-group">
                                    <figure class="avatar avatar-sm">
                                        <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <span class="avatar-title bg-danger rounded-circle">S</span>
                                    </figure>
                                    <figure class="avatar avatar-sm">
                                        <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                </div>
                                <button type="button" class="btn btn-outline-light btn-sm btn-floating" title="Add User" data-toggle="dropdown">
                                    <i class="ti-plus"></i>
                                </button>
                                <div class="dropdown-menu p-0">
                                    <div class="p-3">
                                        <h6 class="text-uppercase font-size-11 mb-3">Add User</h6>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="Search User" aria-describedby="button-addon3">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-light" type="button" id="button-addon3">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush mt-2">
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <span class="avatar-title bg-primary rounded-circle">V</span>
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                <div class="mr-2">
                                                    <figure class="avatar avatar-sm">
                                                        <img src="../../assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Valentine Maton</h6>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="plus"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis incidunt labore modi numquam omnis pariatur possimus suscipit vitae voluptas?</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <i data-feather="check" class="mr-2"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
