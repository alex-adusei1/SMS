@extends('layouts.module_app')

@section('content')

<!-- content -->
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
  <div class="app-header white bg b-b">
        <div class="navbar" data-pjax>
              <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                <i class="ion-navicon"></i>
              </a>
              <div class="navbar-item pull-left h5" id="pageTitle">Welcome {{ucwords(Auth::user()->username)}}</div>
              <!-- nabar right -->
              <div class="navbar-item pull-right h5" id="pageTitle">
                <ul>
                    <li style="list-style:none">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="ion-power"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
              </div>
              <ul class="nav navbar-nav pull-right">
                {{-- <li class="nav-item dropdown pos-stc-xs">
                  <a class="nav-link" data-toggle="dropdown">
                    <i class="ion-android-search w-24"></i>
                  </a> --}}
                  {{-- <div class="dropdown-menu text-color w-md animated fadeInUp pull-right"> --}}
                    <!-- search form -->
                    {{-- <form class="navbar-form form-inline navbar-item m-a-0 p-x v-m" role="search">
                      <div class="form-group l-h m-a-0">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search projects...">
                          <span class="input-group-btn">
                            <button type="submit" class="btn white b-a no-shadow"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                      </div>
                    </form> --}}
                    <!-- / search form -->
                  {{-- </div> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item dropdown pos-stc-xs">
                  <a class="nav-link clear" data-toggle="dropdown">
                    <i class="ion-android-notifications-none w-24"></i>
                    <span class="label up p-a-0 danger"></span>
                  </a>
                  <!-- dropdown -->
                  <div class="dropdown-menu pull-right w-xl animated fadeIn no-bg no-border no-shadow">
                      <div class="scrollable" style="max-height: 220px">
                        <ul class="list-group list-group-gap m-a-0">
                          <li class="list-group-item dark-white box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="images/a0.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              Use awesome <a href="#" class="text-primary">animate.css</a><br>
                              <small class="text-muted">10 minutes ago</small>
                            </span>
                          </li>
                          <li class="list-group-item dark-white box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="images/a1.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              <a href="#" class="text-primary">Joe</a> Added you as friend<br>
                              <small class="text-muted">2 hours ago</small>
                            </span>
                          </li>
                          <li class="list-group-item dark-white text-color box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="images/a2.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              <a href="#" class="text-primary">Danie</a> sent you a message<br>
                              <small class="text-muted">1 day ago</small>
                            </span>
                          </li>
                        </ul>
                      </div>
                  </div>
                  <!-- / dropdown -->
                </li> --}}
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link clear" data-toggle="dropdown">
                    <span class="avatar w-32">
                      <img src="images/a3.jpg" class="w-full rounded" alt="...">
                    </span>
                  </a>
                  <div class="dropdown-menu w dropdown-menu-scale pull-right">
                    <a class="dropdown-item" href="profile.html">
                      <span>Profile</span>
                    </a>
                    <a class="dropdown-item" href="setting.html">
                      <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="app.inbox.html">
                      <span>Inbox</span>
                    </a>
                    <a class="dropdown-item" href="app.message.html">
                      <span>Message</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="docs.html">
                      Need help?
                    </a>
                    <a class="dropdown-item" href="signin.html">Sign out</a>
                  </div>
                </li> --}}
              </ul>
              <!-- / navbar right -->
        </div>
  </div>


  <div class="app-footer white bg p-a b-t">
    <div class="pull-right text-sm text-muted">Version 1.0.1</div>
    <span class="text-sm text-muted">&copy; Copyright. {{date('Y')}}</span>
  </div>
  <div class="app-body">
<!-- ############ PAGE START-->
<!-- only need a height for layout 4 -->
<div style="min-height: 50px">
  <div class="padding" style="padding-top: -100px">
    <h4>Select School</h4>

    <div class="row m-b">
    @foreach($schools as $sch)
      <div class="col-sm-4">
        <a href="{{route($sch->url)}}" style="cursor: crosshair">
          <div class="box">
            <div class="box-header purple">
              <h3>{{$sch->name}}</h3>
              <small>School for pupil age {{$sch->age_range}}</small>
            </div>
            <div class="box-body purple">
              <p class="m-a-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam-a-0 m-b-smitudin egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementu</p>
            </div>
          </div>
        </a>
      </div>
        @endforeach
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

  </div>
</div>
<!-- / -->

@endsection
