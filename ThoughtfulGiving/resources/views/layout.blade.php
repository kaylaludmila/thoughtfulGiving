<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thoughtful Giving</title>

     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
      
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Slabo+27px" rel="stylesheet">

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body id="app-layout">

<!-- navigation bar -->
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" href="{{ url('/') }}">Thoughtful Giving</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a class="waves-effect waves-light btn modal-trigger" href=#loginModal>Login</a></li>
             <li><a class="waves-effect waves-light btn modal-trigger" href=#registerModal>Register</a></li>
             <!-- <li><a class="waves-effect waves-light btn" href="{{ url('/login') }}">Login</a></li>
             <li><a class="waves-effect waves-light btn" href="{{ url('/register') }}">Register</a></li> -->
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
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
          <nav>
          <form>
            <div class="input-field" style="margin-bottom:20px;">
              <input id="search" type="search" required>
              <label for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
          </nav>
          <br>
          <br>
          <div class="valign-wrapper">
            <img height="500" src="css/imgs/heart-pink.jpg" alt="heart" class="valign-wrapper z-depth-2 responsive-img center-align" style="margin: auto; width: 80%;">
          </div>
      </div>
    </search>
    <br>

    </div>

<!-- Where the right side of the content begins -->
    <div class="col l9 s12 white">
    



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
       @yield('login')
      </div>
    </div>
</div>


<div id="registerModal" class="modal">
    <div class="modal-content">
      <div class="row">
       @yield('register')
      </div>
    </div>
</div>

 style="color:" 

    <!-- JavaScripts -->
     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
  <script type="text/javascript" src="js/materialize.js"></script>
  
  <script src="js/app.js"></script>
          
</body>
</html>
