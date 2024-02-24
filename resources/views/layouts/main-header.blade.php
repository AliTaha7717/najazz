<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="{{route('dashboard')}}" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('dashboard')}}" class="nav-link">Home</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{asset('assets/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{asset('assets/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{asset('assets/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">

                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{Auth::User()->unreadNotifications->count()}} </span>
            </a>

{{--            --}}

            <ul class="dropdown-menu">
                <li class="head text-light bg-dark">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            @php

                                use Illuminate\Support\Facades\Auth;

                                    $admin_id=Auth::User()->id;
                                         $getid= DB::table('notifications')->where('notifiable_id','=',$admin_id )
                                             ->where( 'data->order_type2','=','order')
                                             ->where( 'read_at','=','NULL')->get();

                                         //return $getid;
    //                                      DB::table('notifications')->where('notifiable_id','=',$admin_id )
    //                                          ->where( 'id','=',$getid)->update(['read_at'=>now()]);
    //                                      $users=Order::where('id',$id)->get();
    //                                      return view('order.index',compact('users'));
                             @endphp
                            <span>Orders Notifications ({{Auth::User()->unreadNotifications
->where('type','=','App\Notifications\OrderNotification')->count()}})</span>
                            <a href="{{route('order.deletenot')}}" class="float-right text-light">Mark all as read</a>
                        </div>
                    </div>
                </li>



@foreach(Auth::User()->unreadNotifications->where('type','=','App\Notifications\OrderNotification') as $not)
                    <li class="notification-box">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 col-3 text-center">
{{--                                <img src="{{asset('assets/img/')}}" class="img-circle elevation-3" alt="Userrrr Image">--}}

                                <img src="{{asset('assets/img/images (1).png')}}" class="w-50 rounded-circle">
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8">
                                <strong class="text-info"> {{$not->data['order_name']??''}}</strong>
                                <div>
                                    Order Type:
                                    <span style="padding-left:10px">
                                        {{$not->data['order_type']}}
                                    </span>
                                    <span style="padding-left: 20px">
                                 <a href="{{route('order.show',$not->data['order_id'])}}">
                                          Show Details    </a>

                                    </span>
                                </div>
                                <small class="text-warning">{{$not->created_at??''}}</small>
                            </div>
                        </div>
                    </li>


                @endforeach
                <li class="footer bg-dark text-center">
                    <a href="" class="text-light">View All</a>
                </li>

                <li class="head text-light bg-dark">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <span>Offer Notifications ({{Auth::User()->unreadNotifications
->where('type','=','App\Notifications\OfferNotification')->count()}})</span>
                            <a href="{{route('offer.deletenot')}}" class="float-right text-light">Mark all as read</a>
                        </div>
                    </div>
                </li>



                @foreach(Auth::User()->unreadNotifications->where('type','=','App\Notifications\OfferNotification') as $not)
                    <li class="notification-box">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 col-3 text-center">
                                {{--                                <img src="{{asset('assets/img/')}}" class="img-circle elevation-3" alt="Userrrr Image">--}}

                                <img src="{{asset('assets/img/images (1).png')}}" class="w-50 rounded-circle">
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8">
                                <strong class="text-info"> {{$not->data['driver_id']??''}}</strong>
                                <div>
                                    Offer Price:
                                    <span style="padding-left:10px">
                                        {{$not->data['offer_price']}}
                                    </span>
                                    <span style="padding-left: 30px">
                                 <a href="{{route('offer.show',$not->data['offer_id'])}}">
                                          Show Details    </a>

                                    </span>
                                </div>
                                <small class="text-warning">{{$not->created_at??''}}</small>
                            </div>
                        </div>
                    </li>


                @endforeach
                <li class="footer bg-dark text-center">
                    <a href="" class="text-light">View All</a>
                </li>


    </ul>
{{--            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                <span class="dropdown-item dropdown-header"><h5>{{Auth::User()->unreadNotifications->count()}} Orders</h5> </span>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                @foreach(Auth::User()->unreadNotifications as $not)--}}

{{--                    <a href="{{route('order.index')}}" class="dropdown-item">--}}
{{--                        <i class="fas fa-envelope mr-2"></i> {{$not->data['order_name']??''}}--}}
{{--                        <span class="float-right text-muted text-sm">{{$not->data['order_type']??''}}</span>--}}
{{--                    </a>--}}
{{--                    --}}{{--                    <div class="dropdown-divider"></div>--}}

{{--                @endforeach--}}

{{--                <span class="dropdown-item dropdown-header"><h5>{{Auth::User()->unreadNotifications->count()}} Offers Accpted</h5></span>--}}
{{--                <div class="dropdown-divider"></div>--}}


{{--                <a href="#" class="dropdown-item">--}}
{{--                    <i class="fas fa-envelope mr-2"></i> {{Auth::User()->unreadNotifications->count()}}new Offer--}}
{{--                    <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}


{{--                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--            </div>--}}
        </li>


        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
