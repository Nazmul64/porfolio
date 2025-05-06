@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">About  Upload</h5>
         <form id="uploadForm" method="post" action="{{route('about.store')}}" enctype="multipart/form-data">
           @csrf
           <div class="row mb-3">
             <label for="about_us" class="col-sm-3 col-form-label">Enter Your About Us</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="about_us" placeholder="Enter Your about_us" name="about_us">
             </div>
           </div>
           <div class="row mb-3">
              <label for="description" class="col-sm-3 col-form-label">description</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="description" rows="3" placeholder="description" name="description"></textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="our_history" class="col-sm-3 col-form-label">our_history</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="our_history" rows="3" placeholder="our_history" name="our_history"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="history_description" class="col-sm-3 col-form-label">history_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="history_description" rows="3" placeholder="history_description" name="history_description"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="our_mission" class="col-sm-3 col-form-label">our_mission</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="our_mission" rows="3" placeholder="our_mission" name="our_mission"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="mission_description" class="col-sm-3 col-form-label">mission_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="mission_description" rows="3" placeholder="mission_description" name="mission_description"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="who_we_are" class="col-sm-3 col-form-label">who_we_are</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="who_we_are" rows="3" placeholder="who_we_are" name="who_we_are"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="who_we_are_description" class="col-sm-3 col-form-label">who_we_are_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="who_we_are_description" rows="3" placeholder="who_we_are_description" name="who_we_are_description"></textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="who_we_are_description" class="col-sm-3 col-form-label">who_we_are_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="who_we_are_description" rows="3" placeholder="who_we_are_description" name="who_we_are_description"></textarea>
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
