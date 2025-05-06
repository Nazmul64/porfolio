@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
            @csrf
          
            {{-- Title --}}
            <div class="row mb-3">
              <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputName" name="title" placeholder="Enter Your Title" value="{{ old('title') }}" required>
              </div>
            </div>
          
            {{-- Description --}}
            <div class="row mb-3">
              <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="inputDescription" name="description" rows="3" placeholder="Description" required>{{ old('description') }}</textarea>
              </div>
            </div>
          
            {{-- Details Title --}}
            <div class="row mb-3">
              <label for="detailstitle" class="col-sm-3 col-form-label">Details Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="detailstitle" name="details_title" placeholder="Details Title" value="{{ old('details_title') }}">
              </div>
            </div>
          
            {{-- Details Description --}}
            <div class="row mb-3">
              <label for="detailsdescription" class="col-sm-3 col-form-label">Details Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="detailsdescription" name="details_description" rows="3" placeholder="Details Description">{{ old('details_description') }}</textarea>
              </div>
            </div>
          
            {{-- Main Photo --}}
            <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Main Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputPhoto" name="main_photo" required>
              </div>
            </div>
          
            {{-- Details Photo --}}
            <div class="row mb-3">
              <label for="detail_sphoto" class="col-sm-3 col-form-label">Upload Details Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="detail_sphoto" name="details_photo">
              </div>
            </div>
          
            {{-- Submit Button --}}
            <div class="row">
              <label class="col-sm-3 col-form-label"></label>
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary px-4" id="submitBtn">Submit</button>
              </div>
            </div>
          </form>
          
       </div>
     </div>
   </div>
</div>
@endsection
