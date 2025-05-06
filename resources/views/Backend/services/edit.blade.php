@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('servicesupdate',$services_edit->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title"value="{{ old('title',$services_edit->title ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="subtitle" class="col-sm-3 col-form-label">subtitle</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="subtitle" rows="3" placeholder="Description" name="subtitle">{{ old('title',$services_edit->subtitle ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="maintitle" class="col-sm-3 col-form-label">maintitle</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maintitle" rows="3" placeholder="maintitle" name="maintitle">{{ old('title',$services_edit->maintitle ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription" class="col-sm-3 col-form-label">maindescription</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription" rows="3" placeholder="maindescription" name="maindescription">{{ old('title',$services_edit->maindescription ?? '') }}</textarea>
            </div>
         </div>
           <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/services') }}/{{ $services_edit->photo }}" class="img-fluid" alt="Responsive image">
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
