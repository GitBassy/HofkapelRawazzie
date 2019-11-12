@extends('layouts.app')
@include('layouts.alerts')

@section('content')
<!-- <header class="gradient-hero">
    <div class="header-content">

    </div>
</header> -->
<header class="masthead text-white text-center" id="homePageHeader">
  <div class="container d-flex align-items-center flex-column">

    <!-- Masthead Avatar Image -->
    <img class="masthead-avatar mb-5" src="{{ asset('img/homepage/bmo.jpg') }}" alt="">

    <div class="opacityHeader">

    <!-- Masthead Heading -->
    <h1 class="masthead-heading mb-0">Blaaskapel Rawazzie</h1>

    <!-- Icon Divider -->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <button onclick="window.location.href='/contact'" class="navbar-toggler" type="button" data-toggle="collapse" 
		data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
		id="homebtnContact">Neem contact op!</button>
      </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- Masthead Subheading -->
    <p class="masthead-subheading font-weight-light mb-0">Lorem Ipsum - Lorem Ipsum - Lorem Ipsum</p>

    </div>
  </div>
</header>

<div class="container">

</div>
@endsection
