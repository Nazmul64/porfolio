@extends('Frontent.master')
@section('content')

<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="container mt-5">
 
            <div class="row project-images text-center mb-4">
                <div class="col-12">
                    <img src="{{ asset('uploads/blog') }}/{{ $blogdetails->details_photo ?? '' }}" alt="Screenshot 1" class="img-fluid">
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12 project-text mb-4 text-start">
                   <h2 class="fw-bold">{{ $blogdetails->details_title ?? '' }}</h2>
                </div>
                <div class="col-md-12 project-text mb-4 text-justify">
                    <p style="color:white;">{{ $blogdetails->details_description ?? '' }}</p>
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
                font-size: 18px;
                color: #333;
                line-height: 1.9;
            }
            .btn-live {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                text-transform: uppercase;
                font-weight: bold;
            }
            .text-justify {
                text-align: justify;
            }
        </style>
    </div>
</section>
@endsection
