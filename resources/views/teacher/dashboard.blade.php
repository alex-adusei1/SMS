@extends('layouts.app')

@section('content')


  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Teacher Module</div>
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
                  </li>
                  <li class="nav-item dropdown">
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
  <div class="padding">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box p-a">
          <div class="pull-left m-r">
            <span class="avatar w-40 text-center rounded primary">
              <span class="fa fa-dollar"></span>
            </span>
          </div>
          <div class="clear">
            <h4 class="m-a-0 text-md"><a href="#">219 <span class="text-sm">Teachers</span></a></h4>
            <small class="text-muted">Total Teachers</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box p-a">
          <div class="pull-right m-l">
            <span data-ui-jp="sparkline" data-ui-options="[40,60], {type:'pie', height:36, sliceColors:['#f0f0f0','#4BC0C0']}" class="sparkline inline"></span>
          </div>
          <div class="clear">
            <h4 class="m-a-0 text-md"><a href="#">60% <span class="text-sm">Increase</span></a></h4>
            <small class="text-muted">In Performance.</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box p-a">
          <div class="pull-right m-l">
            <span class="m-y-sm inline" data-ui-jp="sparkline" data-ui-options="[[2,8],[4,6],[6,4],[8,2],[10,0],[8,2],[6,4],[4,6],[2,8]], {type:'bar', height:24, barWidth:4, barSpacing:2, stackedBarColor:['#4BC0C0', 'rgba(255,255,255,0.2)']}"></span>
          </div>
          <div class="clear">
            <h4 class="m-a-0 text-md"><a href="#">5% <span class="text-sm">Decrease</span></a></h4>
            <small class="text-muted">Student Relationship</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box p-a">
          <div class="pull-right m-l">
            <span class="m-y-sm inline" data-ui-jp="sparkline" data-ui-options="[1,1,0,1,-1,-1,1,-1,0,0,1,1], {type:'tristate', height:24, width: 'auto', type: 'tristate', colorMap: {'-1': '#4BC0C0', '1': '#4BC0C0'}}"></span>
          </div>
          <div class="clear">
            <h4 class="m-a-0 text-md"><a href="#">10% <span class="text-sm">up</span></a></h4>
            <small class="text-muted">Accountability.</small>
          </div>
        </div>
      </div>


    </div>

    <div class="box">
      <div class="box-header">
        <h3>Table with elements</h3>
      </div>
      <div class="row p-a">
        <div class="col-sm-5">
          <select class="custom-select w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk email</option>
            <option value="3">Bulk sms</option>
            <option value="4">Export to PDF</option>
            <option value="5">Export to Excel</option>
          </select>
          <button class="btn white">Apply</button>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn white" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="ui-check m-a-0">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Full Name</th>
              <th>Classroom</th>
              <th>Edu Level</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th style="width:50px;"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><label class="ui-check m-a-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
              <td>Alex Adomako Adusei</td>
              <td>4c</td>
              <td>Teacher Training</td>
              <td>alex@gmail.com</td>
              <td>024958885</td>
              <td>
                <a href="#" class="active" data-ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
              </td>
            </tr>
            <tr>
              <td><label class="ui-check m-a-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td>
              <td>Doris Boateng</td>
              <td>4a</td>
              <td>Teacher Training</td>
              <td>doris@gmail.com</td>
              <td>0239488459</td>
              <td>
                <a href="#" class="active" data-ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <footer class="light lt p-a">
        <div class="row">
          <div class="col-sm-4 hidden-xs">
            <select class="custom-select w-sm inline v-middle">
              <option value="0">Bulk action</option>
              <option value="1">Delete selected</option>
              <option value="2">Bulk edit</option>
              <option value="3">Export</option>
            </select>
            <button class="btn white">Apply</button>
          </div>
          <div class="col-sm-4 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-4 text-right text-center-xs">
            <ul class="pagination m-a-0">
              <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>




  </div>

  <!-- ############ PAGE END-->

    </div>
  </div>


@endsection
