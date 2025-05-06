@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">About Upload</h5>
         <form id="uploadForm" method="post" action="{{route('about.update',$edit_data->id)}}" enctype="multipart/form-data">
           @csrf
           <div class="row mb-3">
             <label for="about_us" class="col-sm-3 col-form-label">Enter Your About Us</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="about_us" placeholder="Enter your about us" name="about_us" value="{{ $edit_data->about_us }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="description" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{ $edit_data->description }}">
              </div>
           </div>
           <div class="row mb-3">
            <label for="our_history" class="col-sm-3 col-form-label">Our History</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="our_history" placeholder="Enter our history" name="our_history" value="{{ $edit_data->our_history }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="history_description" class="col-sm-3 col-form-label">History Description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="history_description" placeholder="Enter history description" name="history_description" value="{{ $edit_data->history_description }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="our_mission" class="col-sm-3 col-form-label">Our Mission</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="our_mission" placeholder="Enter our mission" name="our_mission" value="{{ $edit_data->our_mission }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="mission_description" class="col-sm-3 col-form-label">Mission Description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="mission_description" placeholder="Enter mission description" name="mission_description" value="{{ $edit_data->mission_description }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="who_we_are" class="col-sm-3 col-form-label">Who We Are</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="who_we_are" placeholder="Enter who we are" name="who_we_are" value="{{ $edit_data->who_we_are }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="who_we_are_description" class="col-sm-3 col-form-label">Who We Are Description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="who_we_are_description" placeholder="Enter who we are description" name="who_we_are_description" value="{{ $edit_data->who_we_are_description }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="old_photo" class="col-sm-3 col-form-label">Old Photo</label>
            <div class="col-sm-9">
              <img src="{{ asset('uploads/about/' . $edit_data->photo) }}" style="height: 70px; width: 70px;" alt="Old Photo">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="inputPhoto" name="new_photo">
            </div>
         </div>
           <div class="row">
             <div class="col-sm-9 offset-sm-3">
               <button type="submit" class="btn btn-primary px-4" id="submitBtn">Submit</button>
               <!-- Progress Bar -->
               <div class="progress mt-3 d-none">
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
