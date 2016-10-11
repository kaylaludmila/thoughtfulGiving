@extends('layout')

@section('content')
 <div class="col l9 s12 white">
<br>

<!-- Charity page content  -->


<img height="262" src="css/imgs/music-hero.jpg" alt="" class="responsive-img">

      <div class= "row valign-wrapper">
          <div class="col s12 m6 l2">
            <img src="css/imgs/logos/musicMatters.jpg" alt="" class="z-depth-1 responsive-img left-align">
          </div>
      <div class="col s12 m12 l9 valign">
        <h1> Music for Many</h1>
        <p class="left-align s12 m12" style="font-size:17px;"><strong>Mission: </strong> Our mission at Music for Many, Inc. has been providing artist in residency programs to students in temporary housing. We believe all students deserve and need music in their life.</p>
        </div>
      </div>

      <div class="row">

        <div class="col s12 l3">
        </div>

        <div class="col s12 m4 l4">
         <table class="striped">
        <thead>
          <tr>
              <th data-field="id" style="font-size:30px; color:#479ac4;">In need of:</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Keyboards</td>
          </tr>
          <tr>
            <td>Headphones</td>
          </tr>
          <tr>
            <td>Drum Set</td>
          </tr>
          <tr>
            <td>Headphones</td>
          </tr>
          <tr>
            <td>Flute</td>
          </tr>
        </tbody>
      </table>
      <br>
      <a class="waves-effect waves-light btn" href= "https://www.paypal.com/home" target="_blank" style="background-color:#ed4871;">Donate Funds</a>
        </div>

        <div class="col s12 m1 l1">
        </div>

        <div class="col s12 m4 l3">
        <h5 style="color:#479ac4;"> Item drop off location</h5>
          <div class="card">
            <div class="card-image">
              <img src="css/imgs/maps.jpg">
            </div>
            <div class="card-content">
              <p><strong>For more info: </strong> <br>Karyn Sue<br>Karyn@gmail.com</p>
            </div>
            <div class="card-action">
              <a href="https://www.google.com" target="_blank" style="color:#479ac4 !important;">Official Website</a>
            </div>
        </div>
    </div>


</div>
@endsection
