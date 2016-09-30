<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thoughtful Giving</title>

     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Slabo+27px" rel="stylesheet">

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body id="app-layout">

<!-- navigation bar -->
<nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Thoughtful Giving</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <!-- Authentication Links -->
        @if (Auth::guest())
          <ul id="dropdown1" class="dropdown-content tgPink">
            <li><a class="modal-trigger tgGreen" href=#loginModal>Login</a></li>
            <li><a class="modal-trigger tgGreen" href=#registerModal>Register</a></li>
          </ul>
            <!-- <li><a class="waves-effect waves-light btn modal-trigger" href=#loginModal>Login</a></li>
             <li><a class="waves-effect waves-light btn modal-trigger" href=#registerModal>Register</a></li> -->
             <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Charity Portal<i class="material-icons right">arrow_drop_down</i></a></li>
             <!-- <li><a class="waves-effect waves-light btn" href="{{ url('/login') }}">Login</a></li>
             <li><a class="waves-effect waves-light btn" href="{{ url('/register') }}">Register</a></li> -->
        @else
           <li><a href="{{ url('/charityPortal') }}"> {{ Auth::user()->company }} </li></a>
           <li><a class="waves-effect waves-light btn modal-trigger tgBlue" href="{{ url('/logout') }}">Logout</a></li>
        @endif
      </ul>
    </div>
  </nav>


<!-- Main Content -->
  <div class="row">

    <div class="col l3 s12">

<!-- Search panel -->
     <search>
      <div class="nav-wrapper tgBlue">
        <br><br>
        <h3 class="givingTxt center-align" style="margin-top:20%;">Giving Made Easy</h3>
        <br>
        <p class="center-align" style="font-size:20px; color:white;">What would you like to donate? </p>

        <div class="input-field" style="color:white;">
          <select>
            <option value="" disabled selected>Donation Options</option>
            <option href="/searchResults{{petsupplies}}">Clothing</option>
            <option value="2">Food</option>
            <option value="3">Pet Supplies</option>
          </select>
        </div>

<!--           <nav>
          <form>
            <div class="input-field" style="margin-bottom:20px;">
              <input id="search" type="search" required>
              <label for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
          </nav> -->
          <div class="valign-wrapper">
            <img height="500" src="css/imgs/heart-pink.jpg" alt="heart" class="valign-wrapper z-depth-2 responsive-img center-align" style="margin: auto; width: 80%;">
          </div>
      </div>
    </search>
    <br>

    </div>

<!-- Where the right side of the content begins -->

    
    @yield('content')


    </div>

<!-- Ends right side of content -->

  </div>

<!-- footer -->
    <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container pinkT">
            </div>
          </div>
    </footer>


<!-- modals -->

<div id="loginModal" class="modal">
    <div class="modal-content">
      <div class="row">
       <br>
      <div class="panel-heading">Non-Profit Login</div>
      <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 control-label">Password</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password">

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

  <!--             <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" name="remember"> Remember Me
                          </label>
                      </div>
                  </div>
              </div> -->

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-btn fa-sign-in"></i> Login
                      </button>

                     <!--  <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                  </div>
              </div>
          </form>
      </div>
      </div>
    </div>
</div>


<div id="registerModal" class="modal">
    <div class="modal-content">
      <div class="row">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="col-md-4 control-label">Non-Profit Name</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}">

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Contact First Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}">

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">Contact Last Name</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}">

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Contact Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                            <label for="phoneNumber" class="col-md-4 control-label">Contact Phone Number</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="text" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}">

                                @if ($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('mission') ? ' has-error' : '' }}">
                            <label for="mission" class="col-md-4 control-label">Non-Profit's Mission Statement</label>

                            <div class="col-md-6">
                                <input id="mission" type="text" class="form-control" name="mission" value="{{ old('mission') }}">

                                @if ($errors->has('mission'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mission') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('logoURL') ? ' has-error' : '' }}">
                            <label for="logoURL" class="col-md-4 control-label">Non-Profit's Logo Image</label>

                            <div class="col-md-6">
                                <input id="logoURL" type="text" class="form-control" name="logoURL" value="{{ old('logoURL') }}">

                                @if ($errors->has('logoURL'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logoURL') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bannerURL') ? ' has-error' : '' }}">
                            <label for="bannerURL" class="col-md-4 control-label">Non-Profit's Banner Image</label>

                            <div class="col-md-6">
                                <input id="bannerURL" type="text" class="form-control" name="bannerURL" value="{{ old('bannerURL') }}">

                                @if ($errors->has('bannerURL'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bannerURL') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('siteLink') ? ' has-error' : '' }}">
                            <label for="siteLink" class="col-md-4 control-label">Non-Profit's Website</label>

                            <div class="col-md-6">
                                <input id="siteLink" type="text" class="form-control" name="siteLink" value="{{ old('siteLink') }}">

                                @if ($errors->has('siteLink'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('siteLink') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
</div>


    <!-- JavaScripts -->
     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
  <script type="text/javascript" src="js/materialize.js"></script>
  
  <script src="js/app.js"></script>
          
</body>
</html>
