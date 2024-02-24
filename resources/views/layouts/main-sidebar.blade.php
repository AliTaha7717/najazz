<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('assets/img/360_F_400478854_eAL87XQTJyakxh1XSadIxSojtBjm7z8b.jpg')}}"
             alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mazad</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('assets/img/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg')}}" class="img-circle elevation-3" alt="Userrrr Image">
                    </div>

                                        <div class="info">
                                            <a href="#" class="nav-link">

                                                <p>
                                                    {{Auth::User()->name}}
{{--                                                    <i class="fas fa-angle-left right"></i>--}}
                                                    <span class="badge badge-info right">1</span>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <form method="POST" action="{{route('logout') }}">
                                                        @csrf
                                                        <a href="{{ route('logout') }}" class="nav-link"
                                                           onclick="event.preventDefault();
                                                                this.closest('form').submit();">

                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>LogOut</p>
                                                        </a>
                                                    </form>
                                                </li>                                            </ul>
                                        </div>

                </div>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Orders And Offers
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">1</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('offer.order')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>offer and order</p>
                                    </a>
                                </li>



                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    User
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">4</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('user.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display All User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('dealer')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display Dealer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('driver')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display Driver</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('user.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Order
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">3</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('order.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display All Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('order.waiting')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display Wiating Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('order.done')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display Done Orders</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('order.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>create</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Offer
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">3</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('offer')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display All Offer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('offer.waiting')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display UnAccpted Offer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('offer.done')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Display Accpted Offer</p>
                                    </a>
                                </li>



                            </ul>
                        </li>
                    </ul>
                </li>





                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
