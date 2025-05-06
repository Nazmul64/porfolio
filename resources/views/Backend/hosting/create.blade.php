@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('hostingsstore') }}" enctype="multipart/form-data">
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
            <label for="clouddatabases" class="col-sm-3 col-form-label">High Quality Services</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="clouddatabases" rows="3" placeholder="High Quality Services" name="clouddatabases">
            </div>
         </div>
         <div class="row mb-3">
            <label for="websitehosting" class="col-sm-3 col-form-label">100%Client Satisfaction</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="websitehosting" rows="3" placeholder="100%Client Satisfaction" name="websitehosting">
            </div>
         </div>
         <div class="row mb-3">
            <label for="filestorage" class="col-sm-3 col-form-label">7 Day Money Back Guarantee</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="filestorage" rows="3" placeholder="7 Day Money Back Guarantee" name="filestorage">
            </div>
         </div>
         <div class="row mb-3">
            <label for="forextrading" class="col-sm-3 col-form-label">24/7 customer suppor</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="forextrading" rows="3" placeholder="24/7 customer suppor" name="forextrading">
            </div>
         </div>
         <div class="row mb-3">
            <label for="filebackups" class="col-sm-3 col-form-label">filebackups</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="filebackups" rows="3" placeholder="filebackups" name="filebackups">
            </div>
         </div>
         <div class="row mb-3">
            <label for="remotedesktop" class="col-sm-3 col-form-label">remotedesktop</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="remotedesktop" rows="3" placeholder="remotedesktop" name="remotedesktop">
            </div>
         </div>
         <div class="row mb-3">
            <label for="emailservers" class="col-sm-3 col-form-label">emailservers</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="emailservers" rows="3" placeholder="emailservers" name="emailservers">
            </div>
         </div>
         <div class="row mb-3">
            <label for="hybridcloud" class="col-sm-3 col-form-label">hybridcloud</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="hybridcloud" rows="3" placeholder="hybridcloud" name="hybridcloud">
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
