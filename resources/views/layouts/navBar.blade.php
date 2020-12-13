{{-- Nav side bar  --}}
@if (Auth::user())
<nav class="navbar-fixed-top navbar navbar-expand navbar-dark bg-dark osahan-nav-top p-0">
    <div class="container">
        <a class="navbar-brand mr-2" href="#">
            <img src="{{asset('public/frontend/img/logo.svg')}}')}}" alt="" />
        </a>
        <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control shadow-none border-0" placeholder="Search people, jobs & more..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn" type="button"><i class="feather-search"></i></button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto d-flex align-items-center">
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather-search mr-2"></i> </a>
                <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search people, jobs and more..." aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <button class="btn" type="button"><i class="feather-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('author.home')}}"><i class="feather-home mr-2"></i><span class="d-none d-lg-inline">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="feather-briefcase mr-2"></i><span class="d-none d-lg-inline">Jobs</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="feather-users mr-2"></i><span class="d-none d-lg-inline">Connection</span></a>
            </li>
            <li class="nav-item dropdown no-arrow mx-1 osahan-list-dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="feather-message-square"></i>
                </a>
            </li>
            <li class="nav-item dropdown no-arrow mx-1 osahan-list-dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="feather-bell"></i>
                </a>
            </li>
  
            <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown">
                <a class="nav-link dropdown-toggle pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle" src="{{asset('public/frontend/img/user/'.Auth::user()->img)}}" />
                </a>
  
                <div class="dropdown-menu dropdown-menu-right shadow-sm">
                    <div class="p-3 d-flex align-items-center">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{asset('public/frontend/img/user/'.Auth::user()->img)}}" alt="" />
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">{{Auth::user()->name}}</div>
                            <div class="small text-gray-500">{{Auth::user()->occupation}}</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{url('edit-profile')}}"><i class="feather-user mr-1"></i> Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a
                        class="dropdown-item"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                    >
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
  </nav>
@endif
