<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	@php
		use App\Models\Seometa;
		$seometa = Seometa::first();
	@endphp

	<title>{{ $seometa->meta_title ?? $websetting->webtitle_text ?? 'Default Title' }}</title>
	<meta name="description" content="{{ $seometa->meta_description ?? 'Default description' }}">
	<meta name="keywords" content="{{ $seometa->meta_keywords ?? 'default, keywords' }}">
	<meta name="focuskeywords" content="{{ $seometa->meta_focus_keywords ?? 'default focus' }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Frontent/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontent/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('Frontent/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontent/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontent/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('Frontent/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('Frontent/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Frontent/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontent/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontent/css/style.css') }}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">mahadidigital</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
