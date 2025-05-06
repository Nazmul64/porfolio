@extends('Frontent.master')
@section('content')



<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="container mt-5">
 
            <div class="row project-images text-center mb-4">
                <div class="col-md-6">
                    <img src="{{ asset('uploads/recentworks') }}/{{ $portfolio->detailsphoto ?? '' }}" alt="Screenshot 1">
                    <img src="{{ asset('uploads/recentworks') }}/{{ $portfolio->detailsphoto1 ?? '' }}" alt="Screenshot 2">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('uploads/recentworks') }}/{{ $portfolio->detailsphoto3 ?? '' }}" alt="Screenshot 4">
                    <img src="{{ asset('uploads/recentworks') }}/{{ $portfolio->detailsphoto2 ?? '' }}" alt="Screenshot 3">
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12 project-text text-center mb-4">
                   <h2> {{ $portfolio->projecttitle ?? '' }}</h2>
                </div>
            </div>
          
            <div class="row text-center">
                <div class="col-md-3"><strong>Happy Client</strong><br> {{ $portfolio->clientname ?? '' }}</div>
                <div class="col-md-3"><strong>Category</strong><br>{{ $portfolio->category ?? '' }}</div>
                <div class="col-md-3"><strong>Date</strong><br>{{ $portfolio->date ?? '' }}</div>
                <div class="col-md-3">
                    <a href="{{ $portfolio->livepreview ?? '#' }}" class="btn btn-live mt-2">Live Preview</a>
                </div>
            </div>
        </div>
        
        <style>
            .project-images img {
                width: 100%;
                height: auto;
                margin-bottom: 15px;
            }
            .project-text {
                font-size: 16px;
                color: #444;
                line-height: 1.8;
            }
            .btn-live {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                text-transform: uppercase;
                font-weight: bold;
            }
        </style>
    </div>
  </section>
@endsection
