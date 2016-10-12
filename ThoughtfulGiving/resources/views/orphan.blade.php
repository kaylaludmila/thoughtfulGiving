@extends('layout')

@section('content')
 <div class="col l9 s12 white">
<br>

<!-- Charity page content  -->


<img height="262" src="https://raw.githubusercontent.com/kaylaludmila/thoughtfulGiving/master/ThoughtfulGiving/public/companyView/css/imgs/banners/projectHope.jpg" alt="" class="responsive-img">

      <div class= "row valign-wrapper">
          <div class="col s12 m6 l2">
            <img src="css/imgs/logos/projectHope.jpg" alt="" class="z-depth-1 responsive-img left-align">
          </div>
      <div class="col s12 m12 l9 valign">
        <h1>Project Hope</h1>
        <p class="left-align s12 m12" style="font-size:17px;"><b>Mission: </b>Project HOPE delivers essential medicines and supplies, health expertise and medical training to respond to disaster, prevent disease, promote wellness and save lives around the globe. </p>
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
            <td>Girl's Shirts</td>
          </tr>
          <tr>
            <td>Boy's Pants</td>
          </tr>
          <tr>
            <td>PJs</td>
          </tr>
          <tr>
            <td>Diapers</td>
          </tr>
          <tr>
            <td>Toys</td>
          </tr>
        </tbody>
      </table>
      <br>
      <a class="waves-effect waves-light btn" href="https://www.paypal.com/home" target="_blank" style="background-color:#ed4871;">Donate Funds</a>
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
              <p><b>For more info: </b> <br>Sharon Stone<br>sharon@projecthope.org</p>
            </div>
            <div class="card-action">
              <a href="https://www.google.com" target="_blank" style="color:#479ac4 !important;">Official Website</a>
            </div>
        </div>
    </div>


</div>
@endsection
