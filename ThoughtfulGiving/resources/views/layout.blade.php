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
    <u1><a href="/" class="brand-logo logoBack">Thoughtful Giving</a></u1>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
    <!-- Authentication Links -->
      @if (Auth::guest())
        <ul id="dropdown1" class="dropdown-content tgPink">
          <li><a class="modal-trigger tgGreen" href=#loginModal>Login</a></li>
          <li><a class="tgGreen" href="/charityRegister">Register</a></li>
        </ul>
          <li><a class="modal-trigger" href="#about">How It Works</a></li>
           <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Non-Profit Portal<i class="material-icons right">arrow_drop_down</i></a></li>
      @else
         <li><a href="{{ url('/charityPortal') }}"> {{ Auth::user()->company }} </li></a>
         <li><a class="waves-effect waves-light btn modal-trigger tgBlue" href="{{ url('/logout') }}">Logout</a></li>
      @endif
    </ul>
  </div>
</nav>

<!-- home div-->
<div class="row" style="margin-bottom:0px !important;">

@yield('homeAbout')

</div>

<!-- Main Content -->
<div class="row" style="margin-bottom:0px !important;">

<div class="col l3 s12">

<!-- Search panel -->
  <div class="nav-wrapper tgBlue">
  <br><br>
  <h3 id="searchBar" class="givingTxt center-align" style="margin-top:15%;">Giving Made Easy</h3>
  <br>
  <div class="input-field col s12" style="color:white">
  <form id="search" action='/searchResults' method="GET">
    <select id="searchForm" name="category">
      <option value="" disabled selected>What would you like to donate?</option>
      <option class="tgGreen" value="food">Food</option>
      <option class="tgGreen" value="clothing">Clothing</option>
      <option class="tgGreen" value="petSupplies">Pet Supplies</option>
      <option class="tgGreen" value="other">Other</option>
    </select>
    <label></label>
    </form>
    <br><br><br>
    <div class="valign-wrapper col s12 m6 l12">
      <img height="500" src="css/imgs/heart-pink.jpg" alt="heart" class="valign-wrapper responsive-img right" style="margin: auto; width: 80%;">
    </div>

  </div>

  </div>



<br>

</div>

<!-- Where the right side of the content begins -->

    
    @yield('content')


    </div>

<!-- Ends right side of content -->

  </div>

<!-- footer -->
<footer class="page-footer">
  <div class="container">
    <div class="row valign-wrapper valign">
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    Thoughtful Giving © 2016
     <img src="css/imgs/facebook-icon.png" class="socialIcon right right-align" href="#">
     <img src="css/imgs/instagramIcon.png" class="socialIcon right right-align" href="#">
     <img src="css/imgs/twitter-icon.png" class="socialIcon right-align right" href="#">
      <a class="grey-text text-lighten-4 right center-align modal-trigger" href="#about" style="margin-right:20px;">About TG</a>
      <a class="modal-trigger grey-text text-lighten-4 right center-align" style="margin-right:20px;" href=#loginModal>Login</a>
      <a class="grey-text text-lighten-4 right center-align" href="/charityRegister" style="margin-right:20px;">Register</a>
    </div>
  </div>
</footer>


<!-- Login modal -->

<div id="loginModal" class="modal">
    <div class="modal-content">
    <button class="modal-close btn-flat" style="position:absolute;top:0;right:0;">X</button>
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
              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-btn fa-sign-in"></i> Login
                      </button>
                  </div>
              </div>
          </form>
      </div>
      </div>
    </div>
</div>

<!-- About us modal -->
<div id="about" class="modal">
  <div class="modal-content">
  <button class="modal-close btn-flat" style="position:absolute;top:0;right:0;">X</button>
    <h4>About Thoughtful Giving</h4>
    <p>A platform that connects people with the needs of non-profit organizations</p>
    <br>

    <div class="col s12 m8 offset-m2 l6 offset-l3">
      <div class="grey lighten-5">
        <div class="row valign-wrapper">
          <div class="col s2">
            <img src="css/imgs/cat-food.jpg" alt="" class="circle responsive-img">
          </div>
          <div class="col s10">
            <span class="black-text">
              Find an item you want to donate.
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m8 offset-m2 l6 offset-l3">
      <div class="grey lighten-5">
        <div class="row valign-wrapper">
          <div class="col s2">
            <img src="css/imgs/kitty.jpg" alt="" class="circle responsive-img"> 
          </div>
          <div class="col s10">
            <span class="black-text">
              Search for a non-profit that needs that item.
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m8 offset-m2 l6 offset-l3">
      <div class="grey lighten-5">
        <div class="row valign-wrapper">
          <div class="col s2">
            <img src="css/imgs/heart-pink.jpg" alt="" class="circle responsive-img">
          </div>
          <div class="col s10">
            <span class="black-text">
              Donate your things, and feel great doing it! 
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="/charityRegister" class=" modal-action modal-close waves-effect waves-green btn-flat">Are you a non-profit? Get connected!</a>
  </div>
</div>


<!-- JavaScripts -->
<!-- Compiled and minified JavaScript -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<!--   <script type="text/javascript" src="js/materialize.js"></script>  -->
  <script type="text/javascript" src="/js/app.js"></script>
          
</body>
</html>
