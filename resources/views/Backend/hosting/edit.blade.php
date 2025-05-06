@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('hostingsupdate',$edit_hosting->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title"value="{{ old('title',$edit_hosting->title ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="inputDescription" rows="3" placeholder="Description" name="description">{{ old('title',$edit_hosting->description ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="clouddatabases" class="col-sm-3 col-form-label">clouddatabases</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="clouddatabases" rows="3" placeholder="Description" name="clouddatabases"value="{{ old('title',$edit_hosting->clouddatabases ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="filestorage" class="col-sm-3 col-form-label">filestorage</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="filestorage" rows="3" placeholder="Description" name="filestorage"value="{{ old('title',$edit_hosting->filestorage ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="forextrading" class="col-sm-3 col-form-label">forextrading</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="forextrading" rows="3" placeholder="forextrading" name="forextrading"value="{{ old('title',$edit_hosting->forextrading ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="filebackups" class="col-sm-3 col-form-label">filebackups</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="filebackups" rows="3" placeholder="filebackups" name="filebackups"value="{{ old('title',$edit_hosting->filebackups ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="remotedesktop" class="col-sm-3 col-form-label">remotedesktop</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="remotedesktop" rows="3" placeholder="remotedesktop" name="remotedesktop"value="{{ old('title',$edit_hosting->remotedesktop ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="emailservers" class="col-sm-3 col-form-label">emailservers</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="emailservers" rows="3" placeholder="emailservers" name="emailservers"value="{{ old('title',$edit_hosting->emailservers ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="hybridcloud" class="col-sm-3 col-form-label">hybridcloud</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="hybridcloud" rows="3" placeholder="hybridcloud" name="hybridcloud"value="{{ old('title',$edit_hosting->hybridcloud ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
            <label for="filestorage" class="col-sm-3 col-form-label">filestorage</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="filestorage" rows="3" placeholder="filestorage" name="filestorage"value="{{ old('title',$edit_hosting->filestorage ?? '') }}">
            </div>
         </div>
         <div class="row mb-3">
          <label for="websitehosting" class="col-sm-3 col-form-label">websitehosting</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="websitehosting" rows="3" placeholder="filestorage" name="websitehosting"value="{{ old('title',$edit_hosting->websitehosting ?? '') }}">
          </div>
       </div>
           <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/hosting') }}/{{ $edit_hosting->photo }}" class="img-fluid" alt="Responsive image">
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
