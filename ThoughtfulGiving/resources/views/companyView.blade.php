@extends('layout')

@section('content')
 <div class="col l9 s12 white">
<br>

<!-- Charity page content  -->


<img height="262" src={{ $company -> bannerURL }} alt="" class="responsive-img">

      <div class= "row valign-wrapper">
          <div class="col s12 m6 l2">
            <img src={{ $company -> logoURL}} alt="" class="z-depth-1 responsive-img left-align">
          </div>
      <div class="col s12 m12 l9 valign">
        <h1> {{ $company -> company }}</h1>
        <p class="left-align s12 m12" style="font-size:17px;">Mission: {{ $company-> mission }}.</p>
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
            <td>ITEMS LIST LOOP</td>
          </tr>
          
        </tbody>
      </table>
      <br>
      <a class="waves-effect waves-light btn" style="background-color:#ed4871;">Make a Monetary Donation </a>
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
              <p>For More Info: <br> {{ $company -> firstName }}<br> {{ $company -> email }}</p>
            </div>
            <div class="card-action">
              <a href={{ $company -> siteLink }} style="color:#479ac4 !important;">Official Website</a>
            </div>
        </div>
    </div>


</div>
@endsection
