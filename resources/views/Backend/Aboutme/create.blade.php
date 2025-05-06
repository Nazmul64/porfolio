@extends('Backend.master')

@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">About Upload</h5>
         <a href="{{ route('aboutme.index') }}" class="btn btn-success mb-2">
            <i class="fa fa-arrow-left"></i> Back
          </a>
          
         <form id="uploadForm" method="post" action="{{ route('aboutme.store') }}" enctype="multipart/form-data">
           @csrf

           <div class="row mb-3">
             <label for="about_title" class="col-sm-3 col-form-label">Enter Your About Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="about_title" placeholder="Enter Your About Title" name="about_title" value="{{ old('about_title') }}">
               @error('about_title')
                   <span class="text-danger">{{ $message }}</span>
               @enderror
             </div>
           </div>

           <div class="row mb-3">
              <label for="about_description" class="col-sm-3 col-form-label">Enter Your About Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="about_description" rows="3" placeholder="Enter Your About Description" name="about_description">{{ old('about_description') }}</textarea>
                @error('about_description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
           </div>

           <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Enter Your Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
              @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>

         <div class="row mb-3">
            <label for="date_of_birth" class="col-sm-3 col-form-label">Enter Your Date of Birth</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="date_of_birth" name="date_of_brith" value="{{ old('date_of_birth') }}">
              @error('date_of_birth')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>

         <div class="row mb-3">
            <label for="address" class="col-sm-3 col-form-label">Enter Your Address</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="address" placeholder="Enter Your Address" name="address" value="{{ old('address') }}">
              @error('address')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>

         <div class="row mb-3">
            <label for="zip" class="col-sm-3 col-form-label">Enter Your Zip Code</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="zip" placeholder="Enter Your Zip Code" name="zip" value="{{ old('zip') }}">
              @error('zip')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>

         <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">Enter Your Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" value="{{ old('email') }}">
              @error('email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>

         <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">Enter Your Phone</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="phone" placeholder="Enter Your Phone" name="phone" value="{{ old('phone') }}">
              @error('phone')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>

         <div class="row mb-3">
            <label for="project_text" class="col-sm-3 col-form-label">Enter Your Project Text</label>
            <div class="col-sm-9">
              <textarea class="form-control" type="text" id="project_text" rows="3" placeholder="Enter Your Project Text" name="project_text">{{ old('project_text') }}</textarea>
              @error('project_text')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>

           <div class="row mb-3">
              <label for="photo" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="photo" name="photo">
                @error('photo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
           </div>

           <div class="row">
             <label class="col-sm-3 col-form-label"></label>
             <div class="col-sm-9">
               <div class="d-md-flex d-grid align-items-center gap-3">
                 <button type="submit" class="btn btn-primary px-4" id="submitBtn">Submit</button>
               </div>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
</div><!--end row-->

@endsection
