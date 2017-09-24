@extends('layouts.app');
@section('content')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Profile</div>
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
                                <img src="{{url('images/a0.jpg')}}" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                Use awesome <a href="#" class="text-primary">animate.css</a><br>
                                <small class="text-muted">10 minutes ago</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="{{url('images/a1.jpg')}}" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                <a href="#" class="text-primary">Joe</a> Added you as friend<br>
                                <small class="text-muted">2 hours ago</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white text-color box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="{{url('images/a2.jpg')}}" alt="..." class="w-40 img-circle">
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
                        <img src="{{url('images/a3.jpg')}}" class="w-full rounded" alt="...">
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

  <div class="item">
    <div class="item-bg">
      <img src="images/a2.jpg" class="blur opacity-3">
    </div>
    <div class="p-a-md">
      <div class="row m-t">
        <div class="col-sm-7">
          <a href="{{url('images/a2.jpg')}}" class="pull-left m-r-md">
            <span class="avatar w-96">
              <img src="{{url('images/a2.jpg')}}">
              <i class="on b-white"></i>
            </span>
          </a>
          <div class="clear m-b">
            <h4 class="m-a-0 m-b-sm">{{ $teacher->first_name ." ". $teacher->last_name}}</h4>
            <p class="text-muted"><span class="m-r">{{$teacher->teacher->current_edu_level ." ". $teacher->teacher->course}}</span></p>

              {{-- <div class="block clearfix m-b">
                @foreach ($school_subject as $subj)
                   <a href="" class="btn btn-icon btn-social rounded b-a btn-sm">
                     <i class="fa fa-facebook"></i>
                     <i class="">{{substr($subj->subject,0,1)}}</i>
                   </a>
              @endforeach
                 </div> --}}
         {{-- <div class="block clearfix m-b">
              <a href="" class="btn btn-icon btn-social rounded b-a btn-sm">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-facebook indigo"></i>
              </a>
              <a href="" class="btn btn-icon btn-social rounded b-a btn-sm">
                <i class="fa fa-twitter"></i>
                <i class="fa fa-twitter light-blue"></i>
              </a>
              <a href="" class="btn btn-icon btn-social rounded b-a btn-sm">
                <i class="fa fa-google-plus"></i>
                <i class="fa fa-google-plus red"></i>
              </a>
              <a href="" class="btn btn-icon btn-social rounded b-a btn-sm">
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-linkedin cyan-600"></i>
              </a>
            </div> --}}
            <a href="#" class="btn btn-sm warn rounded success active m-b" data-ui-toggle-class="success">
              <span class="inline">Follow</span>

              <span class="none">{{ ucwords($teacher_classroom->name)}} Teacher</span>
            </a>
          </div>
        </div>
        <div class="col-sm-5">
          <p class="text-md profile-status">Subjects</p>
          @foreach ($school_subject as $subj)
            <button class="btn btn-sm rounded btn-outline b-success" data-toggle="collapse" data-target="#editor">{{$subj->subject}}</button>
        @endforeach

          <div class="collapse box m-t-sm" id="editor">
            <textarea class="form-control no-border" rows="2" placeholder="Type something..."></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="white bg b-b p-x">
    <div class="row">
      <div class="col-sm-6 push-sm-6">
        <div class="p-y text-center text-sm-right">
          <a href="#" class="inline p-x text-center">
            <span class="h4 block m-a-0">2k</span>
            <small class="text-xs text-muted">Followers</small>
          </a>
          <a href="#" class="inline p-x b-l b-r text-center">
            <span class="h4 block m-a-0">250</span>
            <small class="text-xs text-muted">Following</small>
          </a>
          <a href="#" class="inline p-x text-center">
            <span class="h4 block m-a-0">89</span>
            <small class="text-xs text-muted">Activities</small>
          </a>
        </div>
      </div>
      <div class="col-sm-6 pull-sm-6">
        <div class="p-y-md clearfix nav-active-info">
          <ul class="nav nav-pills nav-sm">
            <li class="nav-item active">
              <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_1">Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_2">Stream</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_3">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_4">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- <div class="padding">
    <div class="row">
      <div class="col-sm-8 col-lg-9">
        <div class="tab-content">
          <div class="tab-pane p-v-sm active" id="tab_1">
            <div class="streamline m-b">
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a0.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">2 minutes ago</div>
                  <div class="sl-author">
                    <a href="#">Peter Joo</a>
                  </div>
                  <div>
                    <p>Check your Internet connection</p>
                  </div>
                  <div class="sl-footer">
                    <a href="#" data-ui-toggle-class class="btn white btn-xs">
                      <i class="fa fa-fw fa-star-o text-muted inline"></i>
                      <i class="fa fa-fw fa-star text-danger none"></i>
                    </a>
                    <a href="#" class="btn white btn-xs" data-toggle="collapse" data-target="#reply-1">
                      <i class="fa fa-fw fa-mail-reply text-muted"></i>
                    </a>
                  </div>
                  <div class="box collapse m-a-0" id="reply-1">
                    <form>
                      <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
                    </form>
                    <div class="box-footer clearfix">
                      <button class="btn btn-info pull-right btn-sm">Post</button>
                      <ul class="nav nav-pills nav-sm">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-camera text-muted"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-video-camera text-muted"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a1.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">9:30</div>
                  <div class="sl-author">
                    <a href="#">Mike</a>
                  </div>
                  <div>
                    <p>Meeting with tech leader</p>
                  </div>
                  <div class="sl-footer">
                    <a href="#" data-ui-toggle-class class="btn white btn-xs">
                      <i class="fa fa-fw fa-star-o text-muted inline"></i>
                      <i class="fa fa-fw fa-star text-danger none"></i>
                    </a>
                    <a href="#" class="btn white btn-xs" data-toggle="collapse" data-target="#reply-2">
                      <i class="fa fa-fw fa-mail-reply text-muted"></i>
                    </a>
                  </div>
                  <div class="box collapse in m-a-0" id="reply-2">
                    <form>
                      <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
                    </form>
                    <div class="box-footer clearfix">
                      <button class="btn btn-info pull-right btn-sm">Post</button>
                      <ul class="nav nav-pills nav-sm">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-camera text-muted"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-video-camera text-muted"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a2.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">8:30</div>
                  <div class="sl-author">
                    <a href="#">Moke</a>
                  </div>
                  <div>
                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                  </div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a3.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">Wed, 25 Mar</div>
                  <p>Finished task <a href="#" class="text-info">Testing</a>.</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a4.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">Thu, 10 Mar</div>
                  <p>Trip to the moon</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a3.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">Sat, 5 Mar</div>
                  <p>Prepare for presentation</p>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante soe aiea ose dos soois.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a2.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">Sun, 11 Feb</div>
                  <p><a href="#" class="text-info">Jessi</a> assign you a task <a href="#" class="text-info">Mockup Design</a>.</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img src="{{url('images/a5.jpg')}}" class="img-circle">
                </div>
                <div class="sl-content">
                  <div class="sl-date text-muted">Thu, 17 Jan</div>
                  <p>Follow up to close deal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-v-sm" id="tab_2">
            <div class="streamline">
              <div class="sl-item">
                <div class="sl-content">
                  <div class="sl-date text-muted">2 minutes ago</div>
                  <p>Check your Internet connection</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-content">
                  <div class="sl-date text-muted">9:30</div>
                  <p>Meeting with tech leader</p>
                </div>
              </div>
              <div class="sl-item b-success">
                <div class="sl-content">
                  <div class="sl-date text-muted">8:30</div>
                  <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-content">
                  <div class="sl-date text-muted">Wed, 25 Mar</div>
                  <p>Finished task <a href="#" class="text-info">Testing</a>.</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-content">
                  <div class="sl-date text-muted">Thu, 10 Mar</div>
                  <p>Trip to the moon</p>
                </div>
              </div>
              <div class="sl-item b-info">
                <div class="sl-content">
                  <div class="sl-date text-muted">Sat, 5 Mar</div>
                  <p>Prepare for presentation</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-content">
                  <div class="sl-date text-muted">Sun, 11 Feb</div>
                  <p><a href="#" class="text-info">Jessi</a> assign you a task <a href="#" class="text-info">Mockup Design</a>.</p>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-content">
                  <div class="sl-date text-muted">Thu, 17 Jan</div>
                  <p>Follow up to close deal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-v-sm" id="tab_3">
              <div class="row row-sm">
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a0.jpg')}}" alt="...">
                        <i class="on b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Crystal Guerrero</a></div>
                      <small class="text-muted text-ellipsis">Designer, Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a1.jpg')}}" alt="...">
                        <i class="on b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">James Garcia</a></div>
                      <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a2.jpg')}}" alt="...">
                        <i class="away b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Jean Schneider</a></div>
                      <small class="text-muted text-ellipsis">Designer, Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a3.jpg')}}" alt="...">
                        <i class="busy b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Joe Holmes</a></div>
                      <small class="text-muted text-ellipsis">Designer, Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a4.jpg')}}" alt="...">
                        <i class="on b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Judith Garcia</a></div>
                      <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a5.jpg')}}" alt="...">
                        <i class="on b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Judy Woods</a></div>
                      <small class="text-muted text-ellipsis">Designer, Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a6.jpg')}}" alt="...">
                        <i class="on b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">OlsJesse Russell</a></div>
                      <small class="text-muted text-ellipsis">Designer, Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a7.jpg')}}" alt="...">
                        <i class="away b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Richard Carr</a></div>
                      <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 avatar">
                        <img src="{{url('images/a8.jpg')}}" alt="...">
                        <i class="busy b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Sara King</a></div>
                      <small class="text-muted text-ellipsis">Designer, Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 circle amber avatar">
                        D
                        <i class="busy b-white bottom"></i>
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Douglas Torres</a></div>
                      <small class="text-muted text-ellipsis">Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 circle blue">
                        J
                      </span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Jeremy Scott</a></div>
                      <small class="text-muted text-ellipsis">Blogger</small>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                  <div class="list-item box r m-b">
                    <a herf="" class="list-left">
                      <span class="w-40 circle green">M</span>
                    </a>
                    <div class="list-body">
                      <div class="text-ellipsis"><a href="#">Melissa Garza</a></div>
                      <small class="text-muted text-ellipsis">Blogger</small>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="tab-pane p-v-sm" id="tab_4">
            <div class="row m-b">
              <div class="col-xs-6">
                <small class="text-muted">Cell Phone</small>
                <div class="_500">1243 0303 0333</div>
              </div>
              <div class="col-xs-6">
                <small class="text-muted">Family Phone</small>
                <div class="_500">+32(0) 3003 234 543</div>
              </div>
            </div>
            <div class="row m-b">
              <div class="col-xs-6">
                <small class="text-muted">Reporter</small>
                <div class="_500">Coch Jose</div>
              </div>
              <div class="col-xs-6">
                <small class="text-muted">Manager</small>
                <div class="_500">James Richo</div>
              </div>
            </div>
            <div>
              <small class="text-muted">Bio</small>
              <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div>
          <div class="box">
              <div class="box-header">
                <h3>Who to follow</h3>
              </div>
              <div class="box-divider m-a-0"></div>
              <ul class="list no-border p-b">
                <li class="list-item">
                  <a herf class="list-left">
                    <span class="w-40 avatar">
                      <img src="{{url('images/a4.jpg')}}" alt="...">
                      <i class="on b-white bottom"></i>
                    </span>
                  </a>
                  <div class="list-body">
                    <div><a href="#">Chris Fox</a></div>
                    <small class="text-muted text-ellipsis">Designer, Blogger</small>
                  </div>
                </li>
                <li class="list-item">
                  <a herf class="list-left">
                    <span class="w-40 circle green avatar">
                      P
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
          <div class="box info">
            <div class="box-body">
              <a href="#" class="pull-left m-r">
                <img src="{{url('images/a0.jpg')}}" class="img-circle w-40">
              </a>
              <div class="clear">
                <a href="#">@Mike Mcalidek</a>
                <small class="block text-muted">2,415 followers / 225 tweets</small>
                <a href="#" class="btn btn-sm btn-rounded btn-info m-t-xs"><i class="fa fa-twitter m-t-xs"></i> Follow</a>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="box-header">
              <h2>Latest Tweets</h2>
            </div>
            <div class="box-divider m-a-0"></div>
            <ul class="list">
              <li class="list-item">
                <div class="list-body">
                  <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
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
                  <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                  <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 hours ago</small>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  @endsection
