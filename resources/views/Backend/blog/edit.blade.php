@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('blogd.update',$data_edit->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="title" class="col-sm-3 col-form-label">Enter Your title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="title" placeholder="Enter Your title" name="title"value="{{ old('title',$data_edit->title ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="description" class="col-sm-3 col-form-label">description</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="description" rows="3" placeholder="description" name="description">{{ old('description',$data_edit->description ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="details_title" class="col-sm-3 col-form-label">details_title</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="details_title" rows="3" placeholder="details_title" name="details_title">{{ old('details_title',$data_edit->details_title ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="details_description" class="col-sm-3 col-form-label">details_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="details_description" rows="3" placeholder="details_description" name="details_description">{{ old('details_description',$data_edit->details_description ?? '') }}</textarea>
            </div>
         </div>

         <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  main_photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/blog') }}/{{ $data_edit->main_photo }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  details_photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/blog') }}/{{ $data_edit->details_photo }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="new_main_photo" name="new_main_photo">
              </div>
           </div>
           <div class="row mb-3">
            <label for="new_details_photo" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="new_details_photo" name="new_details_photo">
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
