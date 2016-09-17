<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
      <!--CSS-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      
      <link href="https://fonts.googleapis.com/css?family=Pacifico|Slabo+27px" rel="stylesheet">

      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">


      <!--Let browser know website is optimized for mobile-->
<!--       <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->

    </head>

    <body>

<!-- navigation -->
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Thoughtful Giving</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Learn More</a></li>
        <li><a class="modal-trigger" href="#modal2">Login</a></li>
        </ul>
      </div>
    </nav>


<!--     <div class="row">
        <div class="carousel carousel-slider col l12" data-indicators="true">
        <a class="carousel-item" href="#one!"><img src="css/imgs/music.jpg"></a>
        <a class="carousel-item" href="#two!"><img src="css/imgs/dog.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="css/imgs/orphan.jpg"></a>
        <a class="carousel-item" href="#two!"><img src="css/imgs/foodbank.jpg"></a>
      </div>
    </div>
 -->
<!-- search -->

      <div class="row container center">
        <h1> Giving that counts</h1>
        <div class="col s12 center">
          <div class="row center">
            <div class="input-field col s12">
              <input type="text" id="autocomplete-input" class="autocomplete center">
              <label for="autocomplete-input">What would you like to donate?</label>
            </div>
          </div>
        </div>
      </div>

<!-- charity of week -->
     <!--  <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2">Learn More</a>
        </div>
        <a <div class="carousel-item red white-text" href="#one!"><img src="css/imgs/foodbank.jpg">
              <h2>This week's Charity Feature:</h2>
              <h1>PAWS of Austin</h1>
        </div> >
        <div class="carousel-item amber white-text" href="#two!">
              <p>This week's Charity Feature:</p>
              <h1>PAWS of Austin</h1>
        </div>
        <div class="carousel-item green white-text" href="#three!">
              <p>This week's Charity Feature:</p>
              <h1>PAWS of Austin</h1>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
              <p>This week's Charity Feature:</p>
              <h1>PAWS of Austin</h1>
        </div>
      </div> -->

<!--     <div class="row">
     <div class="carousel carousel-slider col l6" data-indicators="true">
        <a class="carousel-item" href="#one!"><img src="css/imgs/music.jpg"></a>
        <a class="carousel-item" href="#two!"><img src="css/imgs/dog.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="css/imgs/orphan.jpg"></a>
        <a class="carousel-item" href="#two!"><img src="css/imgs/foodbank.jpg"></a>
      </div>
    </div> -->
        

  <!-- Sign Up Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Create your account</h4>
        <p>You'll be swapping in minutes!</p>
          <form>
          <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
           </div>
           <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">E-mail</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div> 
          </form>
          <div class="modal-footer">
            <button class="btn waves-effect waves-light left" type="submit" name="action">Sign Up
            </button>
            <a class="right modal-trigger" href="#modal2"> <p>Login to Existing Account</p></a>
          </div>
      </div>
    </div>

    <!-- Login Modal Structure -->
    <div id="modal2" class="modal">
      <div class="modal-content">
        <h4>Login to your account</h4>
        <p>You'll be swapping in minutes!</p>
          <form>
           <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">E-mail</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div> 
          </form>
          <div class="modal-footer">
            <button class="btn waves-effect waves-light left" type="submit" name="action">Login
            </button>
            <a class="right modal-trigger" href="#modal1"> <p>Sign up</p></a>
          </div>
      </div>
    </div>

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Thoughtful Giving</h5>
            <p class="grey-text text-lighten-4">About us stuff. Blah Blah Blah. We great!</p>
          </div>
          <div class="col l6 s12 right">
            <img src="#">
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container pinkT">
        </div>
      </div>
    </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
       <script src="js/app.js"></script>
    </body>
  </html>
