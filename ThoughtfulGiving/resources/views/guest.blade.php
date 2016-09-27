@extends('layout')

@section('content')
 <div class="col l9 s12 white">
<br>

<!-- Charity page content  -->


<img height="262" src="css/imgs/bentley.jpg" alt="" class="z-depth-2 responsive-img">

<div class= "row valign-wrapper">
    <div class="col s12 m6 l2">
        <img src="css/imgs/fidos2.png" alt="" class="z-depth-2 responsive-img left-align">
    </div>
    <div class="col s12 m12 l9 valign">
        <div>
            <h1> {{ $users()->company }}</h1>
        </div>
        <p class="left-align s12 m12" style="font-size:17px;">Mission: To rescue all the pups in the world and find them happy homes.</p>
    </div>
</div>

<div class="row">
    <div class="col s12 l3"></div>

        <div class="col s12 m4 l4">
        <table class="striped">
            <thead>
                <tr>
                  <th data-field="id" style="font-size:30px; color:#479ac4;">Wish List</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dog Kibble</td>
                </tr>
                <tr>
                    <td>Leashes</td>
                </tr>
                <tr>
                    <td>Paper Towels</td>
                </tr>
            </tbody>
        </table>
    <br>
        <a class="waves-effect waves-light btn" style="background-color:#ed4871;">Donate Funds</a>
        </div>

    <div class="col s12 m1 l1"></div>

    <div class="col s12 m4 l3">
        <div class="card">
            <div class="card-image">
                <img src="css/imgs/maps.jpg">
            </div>
            <div class="card-content">
                <p>Contact: <br>{{ Auth::user()->name }}<br>{{ Auth::user()->email }}</p>
            </div>
            <div class="card-action">
                <a href="#" style="color:#479ac4 !important;">This is a link</a>
            </div>
        </div>
    </div>


</div>
@endsection
