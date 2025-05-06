@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('servicesstore') }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title">
               @error('title')
                    <span class="text-danger">{{ $message }}</span>
               @enderror
             </div>
           </div>
           <div class="row mb-3">
              <label for="subtitle" class="col-sm-3 col-form-label">subtitle</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="subtitle" rows="3" placeholder="subtitle" name="subtitle">
                @error('subtitle')
                    <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
           </div>
           <div class="row mb-3">
            <label for="maintitle" class="col-sm-3 col-form-label">maintitle</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="maintitle" rows="3" placeholder="maintitle" name="maintitle">
              @error('maintitle')
                 <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription" class="col-sm-3 col-form-label">maindescription</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="maindescription" rows="3" placeholder="maindescription" name="maindescription">
           @error('maindescription')
              <span class="text-danger">{{ $message }}</span>
           @enderror
            </div>
         </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="photo" rows="3" placeholder="photo" name="photo">
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
               <!-- Progress Bar -->
               <div class="progress mt-3" style="display:none;">
                 <div class="progress-bar" role="progressbar" style="width: 0%;" id="progressBar"></div>
               </div>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
</div><!--end row-->

@endsection
