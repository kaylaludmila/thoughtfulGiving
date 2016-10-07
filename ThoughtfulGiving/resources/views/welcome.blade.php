@extends('layout')

@section('content')
 <div class="col l9 s12">

  <div class="carousel carousel-slider center l12" data-indicators="true">
    <div class="carousel-fixed-item center">
      <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
    </div>
    <div class="carousel-item music white-text">
      <h1>Music for Many</h1>
      <p class="white-text" style="letter-spacing: .75px;">Bringing music to under privileged youth around the world</p>
      <a class="btn waves-effect tgPinkBG white-text darken-text-2" href="/music" style="bottom: -365px;">Learn More</a>
    </div>
    <div class="carousel-item dog white-text" href="#two!">
      <h1>Finding Fido</h1>
      <p class="white-text" style="letter-spacing: .75px;">Rescuing one pup at a time</p>
      <a class="btn waves-effect tgPinkBG white-text darken-text-2" href= "/dog" style="bottom: -365px;">Learn More</a>
    </div>
    <div class="carousel-item orphan white-text" href="#three!">
      <h1>Hopeful Beginning</h1>
      <p class="white-text" style="letter-spacing: .75px;">Clothing for children whose families cannont afford it</p>
      <a class="btn waves-effect tgPinkBG white-text darken-text-2" href="/orphan" style="bottom: -365px;">Learn More</a>
    </div>
  </div>

@endsection
