@extends('layouts.app')

@section('content')



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
                <a href="dashboard.html" class="b-danger" title="Dashboard">
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
                <a href="dashboard.html" class="b-primary" title="Teachers">
                  <span class="nav-icon text-white no-fade">
                    <i class="ion-ios-people"></i>
                  </span>
                  <span class="nav-text">Teachers</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/classroom') }}" class="b-danger" title="Class Rooms">
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


              <li class="nav-header hidden-folded m-t">
                <span class="text-xs">UI Elements</span>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="ion-plus-circled"></i>
                  </span>
                  <span class="nav-text">UI kit</span>
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
                      </li>
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

  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Dashboard</div>
                <!-- nabar right -->
                <ul class="nav navbar-nav pull-right">
                  <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-search w-24"></i>
                    </a>
                    <div class="dropdown-menu text-color w-md animated fadeInUp pull-right">
                      <!-- search form -->
                      <form class="navbar-form form-inline navbar-item m-a-0 p-x v-m" role="search">
                        <div class="form-group l-h m-a-0">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search projects...">
                            <span class="input-group-btn">
                              <button type="submit" class="btn white b-a no-shadow"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </div>
                      </form>
                      <!-- / search form -->
                    </div>
                  </li>
                  <li class="nav-item dropdown pos-stc-xs">
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
                                <img src="{{asset('images/a0.jpg')}}" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                Use awesome <a href="#" class="text-primary">animate.css</a><br>
                                <small class="text-muted">10 minutes ago</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="{{asset('images/a1.jpg')}}" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                <a href="#" class="text-primary">Joe</a> Added you as friend<br>
                                <small class="text-muted">2 hours ago</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white text-color box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="{{asset('images/a2.jpg')}}" alt="..." class="w-40 img-circle">
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
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link clear" data-toggle="dropdown">
                      <span class="avatar w-32">
                        <img src="{{asset('images/a3.jpg')}}" class="w-full rounded" alt="...">
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
                  </li>
                </ul>
                <!-- / navbar right -->
          </div>
    </div>
    <div class="app-footer white bg p-a b-t">
      <div class="pull-right text-sm text-muted">Version 1.0.1</div>
      <span class="text-sm text-muted">&copy; Copyright.</span>
    </div>
    <div class="app-body">

<!-- ############ PAGE START-->
<div class="row-col">
  <div class="col-lg b-r">
    <div class="row no-gutter">
      <div class="col-xs-6 col-sm-3 b-r b-b">
        <div class="padding">
          <div>
            <span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
            <span class="text-muted l-h-1x"><i class="ion-university text-muted"></i></span>
          </div>
          <div class="text-center">
            <h2 class="text-center _600">851</h2>
            <p class="text-muted m-b-md">Total Students</p>
            <div>
              <span data-ui-jp="sparkline" data-ui-options="[2,3,2,2,1,3,6,3,2,1], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
            </div>
          </div>
        </div>
          </div>
          <div class="col-xs-6 col-sm-3 b-r b-b">
        <div class="padding">
          <div>
            <span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
            <span class="text-muted l-h-1x"><i class="ion-android-people text-muted"></i></span>
          </div>
          <div class="text-center">
            <h2 class="text-center _600">219</h2>
            <p class="text-muted m-b-md">Total Teachers</p>
            <div>
              <span data-ui-jp="sparkline" data-ui-options="[1,1,0,2,3,4,2,1,2,2], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
            </div>
          </div>
        </div>
          </div>
          <div class="col-xs-6 col-sm-3 b-r b-b">
        <div class="padding">
          <div>
            <span class="pull-right"><i class="fa fa-caret-down text-danger m-y-xs"></i></span>
            <span class="text-muted l-h-1x"><i class="ion-cash text-muted"></i></span>
          </div>
          <div class="text-center">
            <h2 class="text-center _600">Ghs80,000</h2>
            <p class="text-muted m-b-md">Total Fees Paid</p>
            <div>
              <span data-ui-jp="sparkline" data-ui-options="[9,2,5,5,7,4,4,3,2,2], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
            </div>
          </div>
        </div>
          </div>
          <div class="col-xs-6 col-sm-3 b-b">
        <div class="padding">
          <div>
            <span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
            <span class="text-muted l-h-1x"><i class="ion-android-sad text-muted"></i></span>
          </div>
          <div class="text-center">
            <h2 class="text-center _600">36</h2>
            <p class="text-muted m-b-md">Total Students Owing Fees</p>
            <div>
              <span data-ui-jp="sparkline" data-ui-options="[3,3,1,62,4,3,7,3,2,5], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
            </div>
          </div>
        </div>
          </div>
        </div>
    <div class="padding">
      <div class="row">
          <div class="col-sm-6">
              <div class="box">
                <div class="box-header">
                  <h3>Student Perfomance</h3>
                  <small>A general overview of your students performace</small>
                </div>
                <div class="box-tool">
                <ul class="nav">
                  <li class="nav-item inline">
                    <a class="nav-link">
                      <i class="ion-android-sync m-x-xs"></i>
                    </a>
                  </li>
                  <li class="nav-item inline dropdown">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-menu m-x-xs"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                      {{-- pull classess here --}}
                      <a class="dropdown-item" href="#">JHS 3</a>
                      <a class="dropdown-item" href="#">JHS 2</a>
                      <a class="dropdown-item" href="#">JHS 1</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item">P 6</a>
                    </div>
                  </li>
                </ul>
              </div>
                <div>
                  <canvas data-ui-jp="chart" data-ui-options="
                    {
                      type: 'line',
                      data: {
                          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                          datasets: [
                              {
                                  label: 'Dataset',
                                  data: [25, 21, 18, 20, 30, 40, 45],
                                  fill: true,
                                  backgroundColor: '#2196f3',
                                  borderColor: '#2196f3',
                                  borderWidth: 2,
                                  borderCapStyle: 'butt',
                                  borderDash: [],
                                  borderDashOffset: 0.0,
                                  borderJoinStyle: 'miter',
                                  pointBorderColor: '#2196f3',
                                  pointBackgroundColor: '#fff',
                                  pointBorderWidth: 2,
                                  pointHoverRadius: 4,
                                  pointHoverBackgroundColor: '#2196f3',
                                  pointHoverBorderColor: '#fff',
                                  pointHoverBorderWidth: 2,
                                  pointRadius: [0,4,4,4,4,4,0],
                                  pointHitRadius: 10,
                                  spanGaps: false
                              }
                          ]
                      },
                      options: {
                        scales: {
                          xAxes: [{
                             display: false
                          }],
                          yAxes: [{
                             display: false,
                             ticks:{
                               min: 0,
                               max: 60
                             }
                          }]
                        },
                        legend: {
                          display: false
                        }
                      }
                    }
                    " height="150">
                    </canvas>
                </div>
                <div class="box-body info text-center p-b-md">
                  <span class="dark-white rounded m-r p-x p-y-xs text-info"><i class="fa fa-caret-up"></i> 20%</span>
                  {{-- either increase or decrease  --}}
                  <span>Increase</span>
                </div>
              </div>
          </div>
          <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                  <h3>Payment Performance</h3>
                  <small>A general overview of your payment performace</small>
                </div>
                <div class="box-tool">
                <ul class="nav">
                  <li class="nav-item inline">
                    <a class="nav-link">
                      <i class="ion-android-sync m-x-xs"></i>
                    </a>
                  </li>
                  <li class="nav-item inline dropdown">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-menu m-x-xs"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                      <a class="dropdown-item" href="#">This week</a>
                      <a class="dropdown-item" href="#">This month</a>
                      <a class="dropdown-item" href="#">This week</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item">Today</a>
                    </div>
                  </li>
                </ul>
              </div>
                <div>
                  <canvas data-ui-jp="chart" data-ui-options="
                    {
                      type: 'line',
                      data: {
                          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                          datasets: [
                              {
                                  label: 'Dataset',
                                  data: [63, 57, 40, 25, 20, 22, 26],
                                  fill: true,
                                  backgroundColor: '#ef193c',
                                  borderColor: '#ef193c',
                                  borderWidth: 2,
                                  borderCapStyle: 'butt',
                                  borderDash: [],
                                  borderDashOffset: 0.0,
                                  borderJoinStyle: 'miter',
                                  pointBorderColor: '#ef193c',
                                  pointBackgroundColor: '#fff',
                                  pointBorderWidth: 2,
                                  pointHoverRadius: 4,
                                  pointHoverBackgroundColor: '#ef193c',
                                  pointHoverBorderColor: '#fff',
                                  pointHoverBorderWidth: 2,
                                  pointRadius: [0,4,4,4,4,4,0],
                                  pointHitRadius: 10,
                                  spanGaps: false
                              }
                          ]
                      },
                      options: {
                        scales: {
                          xAxes: [{
                             display: false
                          }],
                          yAxes: [{
                             display: false,
                             ticks:{
                               min: 0,
                               max: 100
                             }
                          }]
                        },
                        legend: {
                          display: false
                        }
                      }
                    }
                    " height="150">
                    </canvas>
                </div>
                <div class="box-body danger text-center p-b-md">
                  <span class="dark-white rounded m-r p-x p-y-xs text-danger"><i class="fa fa-caret-down"></i> 25%</span>
                  <span>Over last Month</span>
                </div>
              </div>
          </div>
          {{-- <div class="col-sm-4">
            <div class="box">
                <div class="box-header">
                  <h3>Deposit</h3>
                  <small>Calculated in last 7 days</small>
                </div>
                <div class="box-tool">
                <ul class="nav">
                  <li class="nav-item inline">
                    <a class="nav-link">
                      <i class="ion-android-sync m-x-xs"></i>
                    </a>
                  </li>
                  <li class="nav-item inline dropdown">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-menu m-x-xs"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                      <a class="dropdown-item" href="#">This week</a>
                      <a class="dropdown-item" href="#">This month</a>
                      <a class="dropdown-item" href="#">This week</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item">Today</a>
                    </div>
                  </li>
                </ul>
              </div>
                <div>
                  <canvas data-ui-jp="chart" data-ui-options="
                    {
                      type: 'line',
                      data: {
                          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                          datasets: [
                              {
                                  label: 'Dataset',
                                  data: [10, 15, 25, 40, 60, 75, 80],
                                  fill: true,
                                  backgroundColor: '#22b66e',
                                  borderColor: '#22b66e',
                                  borderWidth: 2,
                                  borderCapStyle: 'butt',
                                  borderDash: [],
                                  borderDashOffset: 0.0,
                                  borderJoinStyle: 'miter',
                                  pointBorderColor: '#22b66e',
                                  pointBackgroundColor: '#fff',
                                  pointBorderWidth: 2,
                                  pointHoverRadius: 4,
                                  pointHoverBackgroundColor: '#22b66e',
                                  pointHoverBorderColor: '#fff',
                                  pointHoverBorderWidth: 2,
                                  pointRadius: [0,4,4,4,4,4,0],
                                  pointHitRadius: 10,
                                  spanGaps: false
                              }
                          ]
                      },
                      options: {
                        scales: {
                          xAxes: [{
                             display: false
                          }],
                          yAxes: [{
                             display: false,
                             ticks:{
                               min: 0,
                               max: 120
                             }
                          }]
                        },
                        legend: {
                          display: false
                        }
                      }
                    }
                    " height="150">
                    </canvas>
                </div>
                <div class="box-body success text-center p-b-md">
                  <span class="dark-white rounded m-r p-x p-y-xs text-success"><i class="fa fa-caret-up"></i> 85%</span>
                  <span>Over last Month</span>
                </div>
              </div>
          </div> --}}
      </div>

          {{-- <div class="box">
            <div class="box-header b-b">
              <h3>System status</h3>
            </div>
            <div class="box-tool">
          <div class="dropdown">
                  <a data-toggle="dropdown" class="btn btn-xs rounded white dropdown-toggle">Today</a>
                  <div class="dropdown-menu pull-right">
                    <a class="dropdown-item" href="#">Last 24 hours</a>
                    <a class="dropdown-item" href="#">Last 7 days</a>
                    <a class="dropdown-item" href="#">Last month</a>
                    <a class="dropdown-item" href="#">Last Year</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item">Today</a>
                  </div>
               </div>
            </div>
            <div>
              <div class="row-col">
                <div class="col-sm-4 b-r light lt">
                  <div class="p-a-md">
                        <span class="pull-right text-success">40%</span>
                        <small>Consulting</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar success" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                      </div>
                      <span class="pull-right text-info">25%</span>
                      <small>Online tutorials</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar info" data-toggle="tooltip" data-original-title="25%" style="width: 25%"></div>
                      </div>
                      <span class="pull-right text-danger">15%</span>
                      <small>EDU management</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%"></div>
                      </div>
                      <p class="text-muted m-t-md text-sm">Morbi id neque quam. Dales nisi nec adipiscing elit. ADales nisi nec adipiscing elit. liquam sollicitudin venenatis</p>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="p-a">
                    <canvas data-ui-jp="chart" data-ui-options="
                        {
                          type: 'bar',
                          data: {
                              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                              datasets: [
                                {
                                    label: 'Dataset1',
                                    type: 'bubble',
                                    data: [
                                      {
                                          x: 10,
                                          y: 30,
                                          r: 25
                                      },
                                      {
                                          x: 20,
                                          y: 20,
                                          r: 8
                                      },
                                      {
                                          x: 30,
                                          y: 12,
                                          r: 5
                                      },
                                      {
                                          x: 40,
                                          y: 37,
                                          r: 4
                                      },
                                      {
                                          x: 50,
                                          y: 30,
                                          r: 10
                                      },
                                      {
                                          x: 60,
                                          y: 20,
                                          r: 8
                                      },
                                      {
                                          x: 70,
                                          y: 30,
                                          r: 15
                                      }
                                    ],
                                    backgroundColor: [
                                        '#22b66e',
                                        '#FF6384',
                                        '#4BC0C0',
                                        '#E7E9ED',
                                        '#36A2EB',
                                        '#FFCE56',
                                        '#FF6384',
                                        '#36A2EB'
                                    ]
                                },
                                {
                                    label: 'Dataset2',
                                    type: 'bar',
                                    data: [9, 10, 31, 14, 12, 8, 10],
                                    backgroundColor: 'rgba(120,130,140,0.2)',
                                    borderColor: 'rgba(120,130,140,0.2)',
                                    borderWidth: 1,
                                    borderJoinStyle: 'miter'
                                }
                              ]
                          },
                          options: {
                            scales: {
                              xAxes:[
                                {
                                  barPercentage: 0.4
                                }
                              ],
                              yAxes:[
                                {
                                  display: false
                                }
                              ]
                          },
                          legend: {
                            position: 'bottom'
                          }
                          }
                        }
                        " height="200">
                      </canvas>
                    </div>
                </div>
              </div>
            </div>
          </div> --}}
      {{-- <div class="row">
          <div class="col-sm-6">
              <div class="box">
                  <div class="box-header">
                    <span class="label success pull-right">52</span>
                    <h3>Members</h3>
                  </div>
                  <div class="p-b-sm">
                    <ul class="list no-border m-a-0">
                      <li class="list-item">
                        <a href="#" class="list-left">
                          <span class="w-40 avatar danger">
                            <span>C</span>
                            <i class="on b-white bottom"></i>
                          </span>
                        </a>
                        <div class="list-body">
                          <div><a href="#">Chris Fox</a></div>
                          <small class="text-muted text-ellipsis">Designer, Blogger</small>
                        </div>
                      </li>
                      <li class="list-item">
                        <a href="#" class="list-left">
                          <span class="w-40 avatar purple">
                            <span>M</span>
                            <i class="on b-white bottom"></i>
                        </span>
                        </a>
                        <div class="list-body">
                          <div><a href="#">Mogen Polish</a></div>
                          <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                        </div>
                      </li>
                      <li class="list-item">
                        <a href="#" class="list-left">
                          <span class="w-40 avatar info">
                            <span>J</span>
                            <i class="off b-white bottom"></i>
                        </span>
                        </a>
                        <div class="list-body">
                          <div><a href="#">Joge Lucky</a></div>
                          <small class="text-muted text-ellipsis">Art director, Movie Cut</small>
                        </div>
                      </li>
                      <li class="list-item">
                        <a href="#" class="list-left">
                          <span class="w-40 avatar warning">
                            <span>F</span>
                            <i class="on b-white bottom"></i>
                        </span>
                        </a>
                        <div class="list-body">
                          <div><a href="#">Folisise Chosielie</a></div>
                          <small class="text-muted text-ellipsis">Musician, Player</small>
                        </div>
                      </li>
                      <li class="list-item">
                        <a href="#" class="list-left">
                          <span class="w-40 avatar success">
                            <span>P</span>
                            <i class="away b-white bottom"></i>
                          </span>
                        </a>
                        <div class="list-body">
                          <div><a href="#">Peter</a></div>
                          <small class="text-muted text-ellipsis">Musician, Player</small>
                        </div>
                      </li>
                    </ul>
                  </div>
              </div>
          </div>
          <div class="col-sm-6">
          <div class="box">
            <div class="box-header">
              <h3>Tasks</h3>
              <small>20 finished, 5 remaining</small>
            </div>
            <div class="box-tool">
                  <ul class="nav">
                    <li class="nav-item inline dropdown">
                      <a class="nav-link text-muted p-x-xs" data-toggle="dropdown">
                        <i class="fa fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-scale pull-right">
                        <a class="dropdown-item" href="#">New task</a>
                        <a class="dropdown-item" href="#">Make all finished</a>
                        <a class="dropdown-item" href="#">Make all unfinished</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">Settings</a>
                      </div>
                    </li>
                  </ul>
              </div>
            <div class="box-body">
                <div class="streamline">
                    <div class="sl-item b-success">
                      <div class="sl-content">
                        <div class="sl-date text-muted">8:30</div>
                        <div>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail about the AP project.</div>
                      </div>
                    </div>
                    <div class="sl-item">
                      <div class="sl-content">
                        <div class="sl-date text-muted">Sat, 5 Mar</div>
                        <div>Prepare for presentation</div>
                      </div>
                    </div>
                    <div class="sl-item">
                      <div class="sl-content">
                        <div class="sl-date text-muted">Sun, 11 Feb</div>
                        <div><a href="#" class="text-info">Jessi</a> assign you a task <a href="#" class="text-info">Mockup Design</a>.</div>
                      </div>
                    </div>
                </div>
            </div>
              <div class="box-footer">
                <a href="#" class="btn btn-xs white rounded">More</a>
              </div>
            </div>
        </div> --}}
          {{-- <div class="col-sm-12">
            <div class="row-col b-a white m-b">
              <div class="col-md-8">
                <div class="box-header b-b"><h3>World Market</h3></div>
                <div class="box-body">
                  <p class="m-b-lg text-muted">Worldwide data visualization</p>
                  <div class="m-b-md" style="height:240px;" data-ui-jp="vectorMap" data-ui-options="{
                    map: 'world_mill_en',
                    markers: [{latLng: [52.5167, 13.3833], name: 'Berlin'}, {latLng: [48.8567, 2.3508], name: 'Paris'}, {latLng: [35.6833, 139.6833], name: 'Tokyo'}, {latLng: [40.7127, -74.0059], name: 'New York City'},{latLng: [49.2827, -123.1207], name: 'City of Vancouver'},{latLng: [22.2783, 114.1747], name: 'Hong Kong'},{latLng: [55.7500, 37.6167], name: 'Moscow'},{latLng: [37.7833, -122.4167], name: 'San Francisco'},{latLng: [39.9167, 116.3833], name: 'Beijing'}],
                    normalizeFunction: 'polynomial',
                    backgroundColor: 'transparent',
                    regionsSelectable: true,
                    markersSelectable: true,
                    regionStyle: {
                      initial: {
                        fill: 'rgba(120,130,140,0.3)'
                      },
                      hover: {
                        fill: 'rgba(120,130,140,0.3)',
                        stroke: '#fff'
                      },
                    },
                    markerStyle: {
                      initial: {
                        fill: '#f3c111',
                        stroke: '#fff'
                      },
                      hover: {
                        fill: 'rgba(120,130,140,0.3)',
                        stroke: '#fff'
                      }
                    },
                    series: {
                      markers: [{
                        attribute: 'fill',
                        scale: ['#22b66e','#f3c111', '#ef193c'],
                        values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
                      },{
                        attribute: 'r',
                        scale: [5, 20],
                        values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
                      }]
                    }
                  }" >
                  </div>
                </div>
              </div>
              <div class="col-md-4 b-l no-border-sm">
                <div class="box-header b-b"><h3>Infomation</h3></div>
                <div class="list-group no-border no-radius">
                  <div class="list-group-item">
                    <span class="pull-right text-muted">293,200</span>
                    <i class="label label-xs red m-r-sm"></i>
                    New York City
                  </div>
                  <div class="list-group-item">
                    <span class="pull-right text-muted">203,000</span>
                    <i class="label label-xs orange m-r-sm"></i>
                    Berlin
                  </div>
                  <div class="list-group-item">
                    <span class="pull-right text-muted">180,230</span>
                    <i class="label label-xs yellow m-r-sm"></i>
                    Paris
                  </div>
                  <div class="list-group-item">
                    <span class="pull-right text-muted">130,100</span>
                    <i class="label label-xs green m-r-sm"></i>
                    Maldives
                  </div>
                  <div class="list-group-item">
                    <span class="pull-right text-muted">98,000</span>
                    <i class="label label-xs teal m-r-sm"></i>
                    Palau
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
      {{-- </div> --}}
      {{-- <div class="row">
        <div class="col-sm-6">
          <div class="box">
            <div class="box-header">
              <h3>Messages</h3>
            </div>
            <ul class="list-group no-border m-b">
                  <li class="list-group-item">
                    <a href="#" class="pull-left w-40 m-r"><img src="{{asset('images/a8.jpg')}}" class="img-responsive img-circle" alt="."></a>
                    <div class="clear">
                      <a href="#" class="_500 block">Jonathan Doe</a>
                      <span class="text-muted text-ellipsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <a href="" class="pull-left w-40 m-r"><img src="{{asset('images/a2.jpg')}}" class="img-responsive img-circle" alt="."></a>
                    <div class="clear">
                      <a href="#" class="_500 block">Jack Michale</a>
                      <span class="text-muted text-ellipsis">Sectetur adipiscing elit</span>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <a href="" class="pull-left w-40 m-r"><img src="{{asset('images/a3.jpg')}}" class="img-responsive img-circle" alt="."></a>
                    <div class="clear">
                      <a href="#" class="_500 block">Jessi</a>
                      <span class="text-muted text-ellipsis">Sectetur adipiscing elit</span>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <a href="" class="pull-left w-40 m-r"><img src="{{asset('images/a4.jpg')}}" class="img-responsive img-circle" alt="."></a>
                    <div class="clear">
                      <a href="#" class="_500 block">Sodake</a>
                      <span class="text-muted text-ellipsis">Vestibulum ullamcorper sodales nisi nec condimentum</span>
                    </div>
                  </li>
              </ul>
            </div>
        </div>
        <div class="col-sm-6">
              <div class="box">
                  <div class="box-header b-b">
                    <h3>News</h3>
                  </div>
                  <ul class="list">
                    <li class="list-item">
                      <div class="list-body">
                        <div class="text-ellipsis">Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </div>
                        <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 minuts ago</small>
                      </div>
                    </li>
                    <li class="list-item">
                      <div class="list-body">
                        <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                        <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 1 hour ago</small>
                      </div>
                    </li>
                    <li class="list-item">
                      <div class="list-body">
                        <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam</p>
                        <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 hours ago</small>
                      </div>
                    </li>
                  </ul>
              </div>
        </div>
      </div> --}}
    </div>
  </div>
  <div class="col-lg w-lg w-auto-md white bg">
    <div>
      <div class="p-a">
        <h6 class="text-muted m-a-0">Quick chat</h6>
      </div>
      <div class="list inset">
        <a class="list-item" data-toggle="modal" data-target="#chat" data-dismiss="modal">
                <span class="list-left">
                  <span class="avatar">
                    <i class="on avatar-center no-border"></i>
                      <img src="{{asset('images/a1.jpg')}}" class="w-20" alt=".">
                    </span>
                </span>
                <span class="list-body text-ellipsis">
                  Jonathan Morina
                </span>
              </a>
              <a class="list-item" data-toggle="modal" data-target="#chat" data-dismiss="modal">
                <span class="list-left">
                  <span class="avatar">
                    <i class="on avatar-center no-border"></i>
                      <img src="{{asset('images/a2.jpg')}}" class="w-20" alt=".">
                    </span>
                </span>
                <span class="list-body text-ellipsis">
                  Crystal Guerrero
                </span>
              </a>
              <a class="list-item" data-toggle="modal" data-target="#chat" data-dismiss="modal">
                <span class="list-left">
                  <span class="avatar">
                    <i class="on avatar-center no-border"></i>
                      <img src="{{asset('images/a3.jpg')}}" class="w-20" alt=".">
                    </span>
                </span>
                <span class="list-body text-ellipsis">
                  Judith Garcia
                </span>
              </a>
              <a class="list-item" data-toggle="modal" data-target="#chat" data-dismiss="modal">
                <span class="list-left">
                  <span class="avatar">
                    <i class="away avatar-center no-border"></i>
                      <img src="{{asset('images/a4.jpg')}}" class="w-20" alt=".">
                    </span>
                </span>
                <span class="list-body text-ellipsis">
                  Melissa Garza
                </span>
              </a>
              <a class="list-item" data-toggle="modal" data-target="#chat" data-dismiss="modal">
                <span class="list-left">
                  <span class="avatar">
                    <i class="off avatar-center no-border"></i>
                      <img src="{{asset('images/a5.jpg')}}" class="w-20" alt=".">
                    </span>
                </span>
                <span class="list-body text-ellipsis">
                  Douglas Torres
                </span>
              </a>
          </div>
          <div class="p-a">
            <h6 class="text-muted m-a-0">Activities</h6>
          </div>
          <div class="streamline streamline-theme m-b">
            <div class="sl-item b-success">
              <div class="sl-content">
                <div>Finished task <a href="#" class="text-info">#features 4</a>.</div>
                <div class="sl-date text-muted">Just now</div>
              </div>
            </div>
            <div class="sl-item b-success active">
              <div class="sl-content">
                <div><a href="#">@Jessi</a> uploaded a file <a href="#" class="text-info">documentation.pdf</a></div>
                <div class="sl-date text-muted">11:30</div>
              </div>
            </div>
            <div class="sl-item b-info">
              <div class="sl-content">
                <div>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</div>
                <div class="sl-date text-muted">10:30</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-content">
                <div><a href="#" class="text-info">Jessi</a> commented your post.</div>
                <div class="sl-date text-muted">3 days ago</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-content">
                <div><a href="#" class="text-info">Jessi</a> report a issue #2122.</div>
                <div class="sl-date text-muted">Thu, 10 Mar</div>
              </div>
            </div>
            <div class="sl-item">
              <div class="sl-content">
                <div>Prepare for presentation</div>
                <div class="sl-date text-muted">Sat, 5 Mar</div>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>

<div class="modal fade inactive" id="chat" data-backdrop="false">
  <div class="modal-right w-xxl dark-white b-l">
      <div class="row-col">
        <a data-dismiss="modal" class="pull-right text-muted text-lg p-a-sm m-r-sm">&times;</a>
        <div class="p-a b-b">
          <span class="h5">Chat</span>
        </div>
        <div class="row-row light">
          <div class="row-body scrollable hover">
            <div class="row-inner">
              <div class="p-a-md">
                <div class="m-b">
                  <a href="#" class="pull-left w-40 m-r-sm"><img src="{{asset('images/a2.jpg')}}" alt="..." class="w-full img-circle"></a>
                  <div class="clear">
                    <div class="p-a p-y-sm dark-white inline r">
                      Hi John, What's up...
                    </div>
                    <div class="text-muted text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 2 minutes ago</div>
                  </div>
                </div>
                <div class="m-b">
                  <a href="#" class="pull-right w-40 m-l-sm"><img src="{{asset('images/a3.jpg')}}" class="w-full img-circle" alt="..."></a>
                  <div class="clear text-right">
                    <div class="p-a p-y-sm success inline text-left r">
                      Lorem ipsum dolor soe rooke..
                    </div>
                    <div class="text-muted text-xs m-t-xs">1 minutes ago</div>
                  </div>
                </div>
                <div class="m-b">
                  <a href="#" class="pull-left w-40 m-r-sm"><img src="{{asset('images/a2.jpg')}}" alt="..." class="w-full img-circle"></a>
                  <div class="clear">
                    <div class="p-a p-y-sm dark-white inline r">
                      Good!
                    </div>
                    <div class="text-muted text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 5 seconds ago</div>
                  </div>
                </div>
                <div class="m-b">
                  <a href="#" class="pull-right w-40 m-l-sm"><img src="{{asset('images/a3.jpg')}}" class="w-full img-circle" alt="..."></a>
                  <div class="clear text-right">
                    <div class="p-a p-y-sm success inline text-left r">
                      Dlor soe isep..
                    </div>
                    <div class="text-muted text-xs m-t-xs">Just now</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-a b-t">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Say something">
              <span class="input-group-btn">
                <button class="btn white b-a no-shadow" type="button">SEND</button>
              </span>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->


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
@endsection
