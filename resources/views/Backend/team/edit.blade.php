@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('team.update',$team->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="name" class="col-sm-3 col-form-label">Enter Your Name</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" value="{{ old('name', $team->name ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="position" class="col-sm-3 col-form-label">Position</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="position" rows="3" placeholder="Position" name="position">{{ old('position', $team->position ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="maindescription" class="col-sm-3 col-form-label">Main Description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription" rows="3" placeholder="Main Description" name="maindescription">{{ old('maindescription', $team->maindescription ?? '') }}</textarea>
            </div>
         </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Old Photo</label>
              <div class="col-sm-9">
                  <img style="height:120px;" src="{{ asset('uploads/team/' . $team->photo) }}" class="img-fluid" alt="Responsive image">
              </div>
           </div>
        
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputPhoto" name="new_photo">
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
