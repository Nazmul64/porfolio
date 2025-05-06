@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('whyspecilstore') }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title">
             </div>
           </div>
           <div class="row mb-3">
              <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="inputDescription" rows="3" placeholder="Description" name="description"></textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="communication_title" class="col-sm-3 col-form-label">communication_title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="communication_title" rows="3" placeholder="communication_title" name="communication_title">
            </div>
         </div>
         <div class="row mb-3">
            <label for="communication_description" class="col-sm-3 col-form-label">communication_description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="communication_description" rows="3" placeholder="communication_description" name="communication_description">
            </div>
         </div>
         <div class="row mb-3">
            <label for="experience_title" class="col-sm-3 col-form-label">experience_title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="experience_title" rows="3" placeholder="experience_title" name="experience_title">
            </div>
         </div>
         <div class="row mb-3">
            <label for="experience_description" class="col-sm-3 col-form-label">experience_description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="experience_description" rows="3" placeholder="experience_description" name="experience_description">
            </div>
         </div>
         <div class="row mb-3">
            <label for="safeSecure_title" class="col-sm-3 col-form-label">safeSecure_title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="safeSecure_title" rows="3" placeholder="safeSecure_title" name="safeSecure_title">
            </div>
         </div>
         <div class="row mb-3">
            <label for="safeSecure_description" class="col-sm-3 col-form-label">safeSecure_title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="safeSecure_description" rows="3" placeholder="safeSecure_description" name="safeSecure_description">
            </div>
         </div>
         <div class="row mb-3">
            <label for="passionfortesting_title" class="col-sm-3 col-form-label">passionfortesting_title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="passionfortesting_title" rows="3" placeholder="passionfortesting_title" name="passionfortesting_title">
            </div>
         </div>
         <div class="row mb-3">
            <label for="passionfortesting_description" class="col-sm-3 col-form-label">passionfortesting_description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="passionfortesting_description" rows="3" placeholder="passionfortesting_description" name="passionfortesting_description">
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
