@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('team.store') }}" enctype="multipart/form-data">
           @csrf 
           {{--  <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title">
             </div>
           </div>  --}}
           {{--  <div class="row mb-3">
              <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputDescription" rows="3" placeholder="Description" name="description">
              </div>
           </div>  --}}
           <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Developer Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" rows="3" placeholder="name" name="name">
            </div>
         </div>
         <div class="row mb-3">
            <label for="position" class="col-sm-3 col-form-label">Developer Position</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="position" rows="3" placeholder="position" name="position">
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription" class="col-sm-3 col-form-label">Developer Description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="maindescription" rows="3" placeholder="maindescription" name="maindescription">
            </div>
         </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputPhoto" name="photo">
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
