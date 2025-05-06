@extends('Backend.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Testimonial Data Upload</h5>
                <form id="uploadForm" method="POST" action="{{ route('testmonail.store') }}" enctype="multipart/form-data">
                    @csrf 
                    
                    <!-- Client Name -->
                    <div class="row mb-3">
                        <label for="inputName" class="col-sm-3 col-form-label">Enter Your Name</label>
                        <div class="col-sm-9">
                            <input 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                id="inputName" 
                                placeholder="Client Name" 
                                name="title" 
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Review -->
                    <div class="row mb-3">
                        <label for="review" class="col-sm-3 col-form-label">Review</label>
                        <div class="col-sm-9">
                            <input class="form-control @error('review') is-invalid @enderror" id="review" placeholder="Write your review here..." name="review" rows="2">
                            @error('review')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <div class="row mb-3">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"  placeholder="Detailed description"  name="description" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Photo Upload -->
                    <div class="row mb-3">
                        <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
                        <div class="col-sm-9">
                            <input type="file"  class="form-control @error('photo') is-invalid @enderror" id="inputPhoto" name="photo" accept="image/*">
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
