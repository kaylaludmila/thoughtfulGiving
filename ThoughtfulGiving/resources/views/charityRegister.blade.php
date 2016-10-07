@extends('layout')

@section('content')
<div class="col l9 s12 white">
<br>


<div class="col l10 s12 white">

<div class="panel-heading"><h3>Register a Non-Profit</h3></div>
<p> It's easy to do! Simply fill out the form below to create your free page.</p>

<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
{{ csrf_field() }}

<div class="row">
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
          <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}">
          <label for="company" class="control-label">Non-Profit Name</label>
            @if ($errors->has('company'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('company') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('siteLink') ? ' has-error' : '' }}">
          <input id="siteLink" type="text" class="form-control" name="siteLink" value="{{ old('siteLink') }}">
          <label for="siteLink" class="control-label">External Website</label>
            @if ($errors->has('siteLink'))
            <span class="help-block">
                <strong>{{ $errors->first('siteLink') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <div class="form-group{{ $errors->has('mission') ? ' has-error' : '' }}">
          <input id="mission" type="text" class="form-control" name="mission" value="{{ old('mission') }}">
          <label for="mission" class="control-label">Mission Statment</label>
            @if ($errors->has('mission'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('mission') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="input-field col s12" style="margin-bottom:30px;">
        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
        <p> What type of donations do you primarily need?</p>
          <input class="with-gap form-control" name="category" type="radio" value="clothing" id="clothing" />
          <label style="margin-left:10px;" for="clothing">Clothing</label>

          <input class="with-gap form-control" name="category" value="food" type="radio" id="food" />
          <label style="margin-left:10px;" for="food">Food</label>

          <input class="with-gap form-control" name="category" value="petSupplies" type="radio" id="petSupplies"  />
          <label style="margin-left:10px;" for="petSupplies">Pet Supplies</label>

          <input class="with-gap form-control" name="category" value="other" type="radio" id="other"  />
          <label style="margin-left:10px;" for="other">Other</label>

        @if ($errors->has('category'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('category') }}</strong>
            </span>
        @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="input-field file-field col s6">
        <div class="form-group{{ $errors->has('logoURL') ? ' has-error' : '' }}">
        <div class="btn tgBlue">
            <span>upload logo</span>
            <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input id="logoURL" type="text" class="form-control file-path validate" name="logoURL" value="{{ old('logoURL') }}">
          <label for="logoURL" class="control-label"></label>
            @if ($errors->has('logoURL'))
            <span class="help-block">
                <strong>{{ $errors->first('logoURL') }}</strong>
            </span>
            @endif
        </div>
        </div>
    </div>
    <div class="input-field file-field col s6">
        <div class="form-group{{ $errors->has('bannerURL') ? ' has-error' : '' }}">
        <div class="btn tgBlue">
            <span>upload banner</span>
            <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input id="bannerURL" type="text" class="form-control file-path validate" name="bannerURL" value="{{ old('bannerURL') }}">
          <label for="bannerURL" class="control-label"></label>
            @if ($errors->has('bannerURL'))
            <span class="help-block">
                <strong>{{ $errors->first('bannerURL') }}</strong>
            </span>
            @endif
        </div>
        </div>
    </div>
</div>

<!-- <div class="row">
  <form action="#">
    <div class="file-field input-field col s6">
      <div class="btn tgBlue">
        <span>upload</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload your logo">
      </div>
    </div>
  </form>

  <form action="#">
    <div class="file-field input-field col s6">
      <div class="btn tgBlue">
        <span>upload</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload your banner image">
      </div>
    </div>
  </form>

</div> -->


<div class="row">
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
          <input id="name" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}">
          <label for="firstName" class="control-label"> Contact's First Name</label>
            @if ($errors->has('firstName'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('firstName') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
          <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}">
          <label for="lastName" class="control-label">Contact's Last Name</label>
            @if ($errors->has('lastName'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('lastName') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
          <label for="email" class="control-label">E-Mail Address</label>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
          <input id="phoneNumber" type="text" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}">
          <label for="phoneNumber" class="control-label">Contact Number</label>
            @if ($errors->has('phoneNumber'))
            <span class="help-block">
                <strong>{{ $errors->first('phoneNumber') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}">
          <label for="password" class="control-label">Password</label>
            @if ($errors->has('password'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
          <label for="password_confirmation" class="control-label">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong class="tgPink">{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4" style="margin-bottom:25px;">
        <button type="submit" class="btn-large tgPinkBG">
            <i class="fa fa-btn fa-user"></i> Register
        </button>
    </div>
</div>




<!-- <div class="row">
  <form action="#">
    <div class="file-field input-field col s6">
      <div class="btn tgBlue">
        <span>upload</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload your logo">
      </div>
    </div>
  </form> -->

<!-- <div class="row">
    <div class="input-field col s6">
        <div class="form-group{{ $errors->has('logoURL') ? ' has-error' : '' }}">
          <input id="logoURL" type="text" class="form-control" name="logoURL" value="{{ old('logoURL') }}">
          <label for="logoURL" class="control-label">Logo Image</label>
            @if ($errors->has('logoURL'))
            <span class="help-block">
                <strong>{{ $errors->first('logoURL') }}</strong>
            </span>
            @endif
        </div>
    </div>
        <div class="input-field col s6">
        <div class="form-group{{ $errors->has('bannerURL') ? ' has-error' : '' }}">
          <input id="bannerURL" type="text" class="form-control" name="bannerURL" value="{{ old('bannerURL') }}">
          <label for="bannerURL" class="control-label">Banner Image</label>
            @if ($errors->has('bannerURL'))
            <span class="help-block">
                <strong>{{ $errors->first('bannerURL') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div> -->


</form>

</div>
</div>

@endsection