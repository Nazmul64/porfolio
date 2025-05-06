@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body p-4">
            <h5 class="mb-4">Banner Data Upload</h5>
            <form id="uploadForm" method="post" action="{{ route('clinet.update', $edite->id) }}" enctype="multipart/form-data">
               @csrf

               <div class="row mb-3">
                  <label for="oldPhoto1" class="col-sm-3 col-form-label">Old Photo 1</label>
                  <div class="col-sm-9">
                     <img style="height:120px;" src="{{ asset('uploads/client/' . $edite->photo_1) }}" class="img-fluid" alt="Old Photo 1">
                  </div>
               </div>

               <div class="row mb-3">
                  <label for="oldPhoto2" class="col-sm-3 col-form-label">Old Photo 2</label>
                  <div class="col-sm-9">
                     <img style="height:120px;" src="{{ asset('uploads/client/' . $edite->photo_2) }}" class="img-fluid" alt="Old Photo 2">
                  </div>
               </div>

               <div class="row mb-3">
                  <label for="newPhoto1" class="col-sm-3 col-form-label">Upload New Photo 1</label>
                  <div class="col-sm-9">
                     <input type="file" class="form-control" id="newPhoto1" name="new_photo_1">
                  </div>
               </div>

               <div class="row mb-3">
                  <label for="newPhoto2" class="col-sm-3 col-form-label">Upload New Photo 2</label>
                  <div class="col-sm-9">
                     <input type="file" class="form-control" id="newPhoto2" name="new_photo_2">
                  </div>
               </div>

               <div class="row">
                  <div class="col-sm-9 offset-sm-3">
                     <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4" id="submitBtn">Submit</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--end row-->
@endsection
