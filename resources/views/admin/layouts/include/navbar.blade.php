@php
    error_reporting(0);
    use Illuminate\Support\Facades\Auth;
    use App\Notification;

    $notifications = Notification::where('type', 'Admin')->get();
@endphp

<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url(strtolower(auth()->user()->role).'/profile') }}" data-toggle="tooltip" data-placement="top" title="Profile"><i class="ficon" data-feather="user"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url(strtolower(auth()->user()->role).'/password') }}" data-toggle="tooltip" data-placement="top" title="Update Password"><i class="ficon" data-feather="lock"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url(strtolower(auth()->user()->role).'/application') }}" data-toggle="tooltip" data-placement="top" title="Applications"><i class="ficon" data-feather="activity"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ url(strtolower(auth()->user()->role).'/logout') }}" data-toggle="tooltip" data-placement="top" title="Logout"><i class="ficon" data-feather="power"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
           

            

            <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-warning badge-up">{{ count($notifications) }}</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                            <div class="badge badge-pill badge-light-primary">{{ count($notifications) }} New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                        @forelse ($notifications as $notification)
                            <a class="d-flex" href="{{ url('/admin/notification/delete/'.$notification->id) }}">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">{!! $notification->message !!}</p>
                                        <small class="notification-text"> {{ date('d M Y, h:i A', strtotime($notification->created_at)) }}</small>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <a class="d-flex" href="javascript::">
                                <div class="media d-flex align-items-start">
                                    <div class="media-body">
                                        <p class="media-heading">No new notifications...</p>
                                    </div>
                                </div>
                            </a>
                        @endforelse
                    </li>
                    @if (count($notifications) > 0)
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="{{ url('/admin/notification/all/delete') }}">Read all notifications</a></li>
                    @endif
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span><span class="user-status text-success">Online</span></div><span class="avatar">
                        @if (!empty(auth()->user()->image))
                            <img class="round" height="40" width="40" src="{{ asset('/backend/user/profile/'.auth()->user()->image) }}" />
                        @else
                            <img class="round" height="40" width="40" src="{{ asset('/placeholder.jpg') }}" />
                        @endif
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{ url(strtolower(auth()->user()->role).'/profile') }}">
                        <i class="mr-50" data-feather="user"></i> Profile
                    </a>

                    <a class="dropdown-item" href="{{ url(strtolower(auth()->user()->role).'/password') }}">
                        <i class="mr-50" data-feather="lock"></i> Update Password
                    </a>
                    <a class="dropdown-item" href="{{ url(strtolower(auth()->user()->role).'/logout') }}">
                        <i class="mr-50" data-feather="power"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>