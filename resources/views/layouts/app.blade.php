


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="images/logo.png">

  <!-- style -->
    <link rel="stylesheet" href="{{ asset('css_old/app.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/animate.css/animate.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/glyphicons/glyphicons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/material-design-icons/material-design-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/ionicons/css/ionicons.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/custom.css')}}" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="{{ asset('css/styles/app.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/styles/style.css')}}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{{ asset('css/styles/font.css')}}" type="text/css" />
</head>
<body style="background-image: url(image/bg/grads.jpg);
background-repeat: no-repeat; background-position: center">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <!--<li><a href="{{ route('login') }}">Login</a></li>-->
                            <!--<li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


          <div class="app" id="app">

        <!-- ############ LAYOUT START-->
        <!-- aside -->
        <div id="aside" class="app-aside fade nav-dropdown black">
          <!-- fluid app aside -->
          <div class="navside dk" data-layout="column">
            <div class="navbar no-radius">
              <!-- brand -->
              <a href="index.html" class="navbar-brand">
                <div data-ui-include="{{asset('images/logo.svg')}}"></div>
                <img src="{{asset('images/logo1.png')}}" alt="." class="hide">
                <span class="hidden-folded inline">aside</span>
              </a>
              <!-- / brand -->
            </div>
            <div data-flex class="hide-scroll">
                <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

                  <ul class="nav" data-ui-nav>
                    <li class="nav-header hidden-folded">
                      <span class="text-xs">Main</span>
                    </li>
                    <li>
                      <a href="{{url('/home')}}" class="b-danger" title="Dashboard">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-filing"></i>
                        </span>
                        <span class="nav-text" alt="Dashboard">Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a href="app.project.html" class="b-success" title="Projects">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-android-apps"></i>
                        </span>
                        <span class="nav-text">Projects</span>
                      </a>
                    </li>
                    <li>
                      <a href="app.inbox.html" class="b-info" title="Mail">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-email"></i>
                        </span>
                        <span class="nav-text">Inbox</span>
                      </a>
                    </li>

                    <li>
                      <a href="{{ url('/student') }}" class="b-warning" title="Students">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-university"></i>
                          {{-- ion-ios-book --}}
                        </span>
                        <span class="nav-text">Students</span>
                      </a>
                    </li>

                    <li>
                      <a href="{{url('/teacher')}}" class="b-primary" title="Teachers">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-ios-people"></i>
                        </span>
                        <span class="nav-text">Teachers</span>
                      </a>
                    </li>
                    <li>
                      <a href="dashboard.html" class="b-danger" title="Class Rooms">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-ios-home"></i>
                        </span>
                        <span class="nav-text">Class Rooms</span>
                      </a>
                    </li>

                    <li>
                      <a href="dashboard.html" class="b-info">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-ios-list"></i>
                        </span>
                        <span class="nav-text">Report System</span>
                      </a>
                    </li>

                    <li>
                      <a href="dashboard.html" class="b-warning">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-ios-paperplane"></i>
                        </span>
                        <span class="nav-text">Promotional System</span>
                      </a>
                    </li>

                    <li>
                      <a href="dashboard.html" class="b-info">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-cash"></i>
                        </span>
                        <span class="nav-text">Finance</span>
                      </a>
                    </li>

                    <li>
                      <a href="app.message.html" class="b-default" title="Messaging">
                        <span class="nav-label">
                          <b class="label label-xs rounded danger"></b>
                        </span>
                        <span class="nav-icon">
                          <i class="ion-chatbubble-working"></i>
                        </span>
                        <span class="nav-text">Messages</span>
                      </a>
                    </li>

                    <li>
                      <a href="app.contact.html" class="b-default" title="Contact">
                        <span class="nav-icon">
                          <i class="ion-person"></i>
                        </span>
                        <span class="nav-text">Contacts</span>
                      </a>
                    </li>

                    <li>
                      <a href="dashboard.html" class="b-default" title="Settings">
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-ios-settings-strong"></i>
                        </span>
                        <span class="nav-text">Settings</span>
                      </a>
                    </li>

{{--
                    <li class="nav-header hidden-folded m-t">
                      <span class="text-xs">UI Elements</span>
                    </li>
                    <li>
                      <a class="b-warning">
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-icon text-white no-fade">
                          <i class="ion-ios-people"></i>
                        </span>
                        <span class="nav-text">Teacher</span>
                      </a>
                      <ul class="nav-sub nav-mega nav-mega-3">
                        <li>
                          <a href="ui.arrow.html" >
                            <span class="nav-text">Arrow</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.box.html" >
                            <span class="nav-text">Box</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.button.html" >
                            <span class="nav-text">Button</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.color.html" >
                            <span class="nav-text">Color</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.dropdown.html" >
                            <span class="nav-text">Dropdown</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.grid.html" >
                            <span class="nav-text">Grid</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.icon.html" >
                            <span class="nav-text">Icon</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.label.html" >
                            <span class="nav-text">Label</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.list.html" >
                            <span class="nav-text">List Group</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.modal.html" >
                            <span class="nav-text">Modal</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.nav.html" >
                            <span class="nav-text">Nav</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.progress.html" >
                            <span class="nav-text">Progress</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.social.html" >
                            <span class="nav-text">Social</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.sortable.html" >
                            <span class="nav-text">Sortable</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.streamline.html" >
                            <span class="nav-text">Streamline</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.timeline.html" >
                            <span class="nav-text">Timeline</span>
                          </a>
                        </li>
                        <li>
                          <a href="map.vector.html" >
                            <span class="nav-text">Vector Map</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui.widget.html" >
                            <span class="nav-text">Widget</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-icon">
                          <i class="ion-ios-photos"></i>
                        </span>
                        <span class="nav-text">Pages</span>
                      </a>
                      <ul class="nav-sub nav-mega">
                        <li>
                          <a href="profile.html" >
                            <span class="nav-text">Profile</span>
                          </a>
                        </li>
                        <li>
                          <a href="setting.html" >
                            <span class="nav-text">Setting</span>
                          </a>
                        </li>
                        <li>
                          <a href="search.html" >
                            <span class="nav-text">Search</span>
                          </a>
                        </li>
                        <li>
                          <a href="faq.html" >
                            <span class="nav-text">FAQ</span>
                          </a>
                        </li>
                        <li>
                          <a href="gallery.html" >
                            <span class="nav-text">Gallery</span>
                          </a>
                        </li>
                        <li>
                          <a href="invoice.html" >
                            <span class="nav-text">Invoice</span>
                          </a>
                        </li>
                        <li>
                          <a href="price.html" >
                            <span class="nav-text">Price</span>
                          </a>
                        </li>
                        <li>
                          <a href="blank.html" >
                            <span class="nav-text">Blank</span>
                          </a>
                        </li>
                        <li>
                          <a href="signin.html" >
                            <span class="nav-text">Sign In</span>
                          </a>
                        </li>
                        <li>
                          <a href="signup.html" >
                            <span class="nav-text">Sign Up</span>
                          </a>
                        </li>
                        <li>
                          <a href="forgot-password.html" >
                            <span class="nav-text">Forgot Password</span>
                          </a>
                        </li>
                        <li>
                          <a href="lockme.html" >
                            <span class="nav-text">Lockme Screen</span>
                          </a>
                        </li>
                        <li>
                          <a href="404.html" >
                            <span class="nav-text">Error 404</span>
                          </a>
                        </li>
                        <li>
                          <a href="505.html" >
                            <span class="nav-text">Error 505</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-icon">
                          <i class="ion-checkmark-circled"></i>
                        </span>
                        <span class="nav-text">Form</span>
                      </a>
                      <ul class="nav-sub">
                        <li>
                          <a href="form.layout.html" >
                            <span class="nav-text">Form Layout</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.element.html" >
                            <span class="nav-text">Form Element</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.validation.html" >
                            <span class="nav-text">Form Validation</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.select.html" >
                            <span class="nav-text">Select</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.editor.html" >
                            <span class="nav-text">Editor</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.picker.html">
                            <span class="nav-text">Picker</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.wizard.html">
                            <span class="nav-text">Wizard</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.dropzone.html" class="no-ajax" >
                            <span class="nav-text">File Upload</span>
                          </a>
                        </li>
                        <li>
                          <a href="form.calendar.html">
                            <span class="nav-text">Calendar</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-icon">
                          <i class="ion-ios-grid-view"></i>
                        </span>
                        <span class="nav-text">Tables</span>
                      </a>
                      <ul class="nav-sub">
                        <li>
                          <a href="static.html" >
                            <span class="nav-text">Static table</span>
                          </a>
                        </li>
                        <li>
                          <a href="datatable.html" >
                            <span class="nav-text">Datatable</span>
                          </a>
                        </li>
                        <li>
                          <a href="footable.html" >
                            <span class="nav-text">Footable</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-icon">
                          <i class="ion-pie-graph"></i>
                        </span>
                        <span class="nav-text">Charts</span>
                      </a>
                      <ul class="nav-sub">
                        <li>
                          <a href="chart.html" >
                            <span class="nav-text">Chart</span>
                          </a>
                        </li>
                        <li>
                          <a href="chartjs.html" >
                            <span class="nav-text">Chartjs</span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="nav-caret">
                              <i class="fa fa-caret-down"></i>
                            </span>
                            <span class="nav-text">Echarts</span>
                          </a>
                          <ul class="nav-sub">
                            <li>
                              <a href="echarts-line.html" >
                                <span class="nav-text">line</span>
                              </a>
                            </li>
                            <li>
                              <a href="echarts-bar.html" >
                                <span class="nav-text">Bar</span>
                              </a>
                            </li>
                            <li>
                              <a href="echarts-pie.html" >
                                <span class="nav-text">Pie</span>
                              </a>
                            </li>
                            <li>
                              <a href="echarts-scatter.html" >
                                <span class="nav-text">Scatter</span>
                              </a>
                            </li>
                            <li>
                              <a href="echarts-radar-chord.html" >
                                <span class="nav-text">Radar &amp; Chord</span>
                              </a>
                            </li>
                            <li>
                              <a href="echarts-gauge-funnel.html" >
                                <span class="nav-text">Gauges &amp; Funnel</span>
                              </a>
                            </li>
                            <li>
                              <a href="echarts-map.html" >
                                <span class="nav-text">Map</span>
                              </a>
                            </li> --}}
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
            </div>
            <div data-flex-no-shrink>
              <div class="nav-fold dropup">
                <a data-toggle="dropdown">
                    <div class="pull-left">
                      <div class="inline"><span class="avatar w-40 grey">JR</span></div>
                      <img src="{{asset('images/a0.jpg')}}" alt="..." class="w-40 img-circle hide">
                    </div>
                    <div class="clear hidden-folded p-x">
                      <span class="block _500 text-muted">Jean Reyes</span>
                      <div class="progress-xxs m-y-sm lt progress">
                          <div class="progress-bar info" style="width: 15%;">
                          </div>
                      </div>
                    </div>
                </a>
                <div class="dropdown-menu w dropdown-menu-scale ">
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
              </div>
            </div>
          </div>
        </div>
        <!-- / -->

        @yield('content')
        <!-- ############ SWITHCHER START-->
          <div id="switcher">
            <div class="switcher dark-white" id="sw-theme">
              <a href="#" data-ui-toggle-class="active" data-ui-target="#sw-theme" class="dark-white sw-btn">
                <i class="fa fa-gear text-muted"></i>
              </a>
              <div class="box-header">
                {{-- <a href="https://themeforest.net/item/aside-dashboard-ui-kit/17903768?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a> --}}
                <strong>Theme Switcher</strong>
              </div>
              <div class="box-divider"></div>
              <div class="box-body">
                <p id="settingLayout" class="hidden-md-down">
                  <label class="md-check m-y-xs" data-target="folded">
                    <input type="checkbox">
                    <i></i>
                    <span>Folded Aside</span>
                  </label>
                  <label class="m-y-xs pointer" data-ui-fullscreen data-target="fullscreen">
                    <span class="fa fa-expand fa-fw m-r-xs"></span>
                    <span>Fullscreen Mode</span>
                  </label>
                </p>
                <p>Colors:</p>
                <p data-target="color">
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="primary">
                    <i class="primary"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="accent">
                    <i class="accent"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="warn">
                    <i class="warn"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="success">
                    <i class="success"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="info">
                    <i class="info"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="warning">
                    <i class="warning"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="danger">
                    <i class="danger"></i>
                  </label>
                </p>
                <p>Themes:</p>
                <div data-target="bg" class="clearfix">
                  <label class="radio radio-inline m-a-0 ui-check ui-check-lg">
                    <input type="radio" name="theme" value="">
                    <i class="light"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-lg">
                    <input type="radio" name="theme" value="grey">
                    <i class="grey"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-lg">
                    <input type="radio" name="theme" value="dark">
                    <i class="dark"></i>
                  </label>
                  <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-lg">
                    <input type="radio" name="theme" value="black">
                    <i class="black"></i>
                  </label>
                </div>
              </div>
            </div>
          </div>
        <!-- ############ SWITHCHER END-->

      <!-- ############ LAYOUT END-->
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/screenfull.min.js') }}"></script>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="{{ asset('libs/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap -->
  <script src="{{ asset('libs/tether/dist/js/tether.min.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- core -->
  <script src="{{ asset('libs/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
  <script src="{{ asset('libs/PACE/pace.min.js') }}"></script>
  <script src="{{ asset('libs/jquery-pjax/jquery.pjax.js') }}"></script>
  <script src="{{ asset('libs/blockUI/jquery.blockUI.js') }}"></script>
  <script src="{{ asset('libs/jscroll/jquery.jscroll.min.js') }}"></script>
  {{-- <script src="{{ asset('libs/screenfull/dist/screenfull.min.js') }}"></script> --}}


  <script src="{{ asset('scripts/config.lazyload.js') }}"></script>
  <script src="{{ asset('scripts/ui-load.js') }}"></script>
  <script src="{{ asset('scripts/ui-jp.js') }}"></script>
  <script src="{{ asset('scripts/ui-include.js') }}"></script>
  <script src="{{ asset('scripts/ui-device.js') }}"></script>
  <script src="{{ asset('scripts/ui-form.js') }}"></script>
  <script src="{{ asset('scripts/ui-modal.js') }}"></script>
  <script src="{{ asset('scripts/ui-nav.js') }}"></script>
  <script src="{{ asset('scripts/ui-list.js') }}"></script>
  <script src="{{ asset('scripts/ui-screenfull.js') }}"></script>
  <script src="{{ asset('scripts/ui-scroll-to.js') }}"></script>
  <script src="{{ asset('scripts/ui-toggle-class.js') }}"></script>
  <script src="{{ asset('scripts/ui-taburl.js') }}"></script>
  <script src="{{ asset('scripts/app.js') }}"></script>
  <script src="{{ asset('scripts/ajax.js') }}"></script>
</body>
</html>
