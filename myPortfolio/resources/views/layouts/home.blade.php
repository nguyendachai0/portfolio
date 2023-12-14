@extends('home')

@section('content')
  <!-- Add your site or app content here -->
<div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero-full-wrapper">
            <div class="text-content">
              <h1 class="suckable"><br>
                <span id="typed-strings">
                  <span>Hello,<br> I'm Nguyen Dac Hai</span>
                  <span>Full Stack Web Developer</span>
                  <span></span>
                </span>
                <span id="typed"></span>
              </h1>
              
             
              <form class="form-cv suckable" action="{{ route('download') }}" method="post">
                @csrf
                <button type="submit" name="download" onclick="showBlackhole()">Download CV</button>
            </form>

        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="blackhole hide">
    <div class="merga">
      <div class="black"></div>
    </div>
  </div>

@endsection