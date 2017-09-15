@extends('layouts.app')

@section('content')

  <div class="app" id="app" >

<!-- ############ LAYOUT START-->

  <div class="padding">
    <div class="navbar">
      <div class="pull-center">
        <!-- brand -->
        <a href="index.html" class="navbar-brand">
        	<div data-ui-include="'images/logo.svg'"></div>
        	<img src="images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">Login</span>
        </a>
        <!-- / brand -->
      </div>
    </div>
  </div>
  <div class="b-t">
    <div class="center-block w-xxl w-auto-xs p-y-md text-center">
      <div class="p-a-md">
        <div>

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                    <input id="user-name" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="m-b-md">
              <label class="md-check">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <i class="primary"></i><span> Remember Me</span>

              </label>
            </div>

                    <button type="submit" class="btn btn-lg white p-x-lg">
                        Sign In
                    </button>

                    <div class="m-y">
                      <a href="{{ route('password.request') }}" class="_600">Forgot password?</a>
                    </div>
        </form>
      </div>
    </div>
  </div>

<!-- ############ LAYOUT END-->
  </div>
@endsection
