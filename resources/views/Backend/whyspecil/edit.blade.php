@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('whyspecilupdate',$item_edit->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title"value="{{ old('title',$item_edit->title ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="description" class="col-sm-3 col-form-label">description</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="description" rows="3" placeholder="description" name="description">{{ old('description',$item_edit->description ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="communication_title" class="col-sm-3 col-form-label">communication_title</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="communication_title" rows="3" placeholder="communication_title" name="communication_title">{{ old('communication_title',$item_edit->communication_title ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="communication_description" class="col-sm-3 col-form-label">communication_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="communication_description" rows="3" placeholder="communication_description" name="communication_description">{{ old('communication_description',$item_edit->communication_description ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="experience_title" class="col-sm-3 col-form-label">experience_title</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="experience_title" rows="3" placeholder="experience_title" name="experience_title">{{ old('experience_title',$item_edit->experience_title ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="experience_description" class="col-sm-3 col-form-label">experience_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="experience_description" rows="3" placeholder="experience_description" name="experience_description">{{ old('experience_description',$item_edit->experience_description ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="safeSecure_title" class="col-sm-3 col-form-label">safeSecure_title</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="safeSecure_title" rows="3" placeholder="safeSecure_title" name="safeSecure_title">{{ old('safeSecure_title',$item_edit->safeSecure_title ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="safeSecure_description" class="col-sm-3 col-form-label">safeSecure_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="safeSecure_description" rows="3" placeholder="safeSecure_description" name="safeSecure_description">{{ old('safeSecure_description',$item_edit->safeSecure_description ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="passionfortesting_title" class="col-sm-3 col-form-label">passionfortesting_title</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="passionfortesting_title" rows="3" placeholder="passionfortesting_title" name="passionfortesting_title">{{ old('safeSecure_description',$item_edit->passionfortesting_title ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="passionfortesting_description" class="col-sm-3 col-form-label">passionfortesting_description</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="passionfortesting_description" rows="3" placeholder="passionfortesting_description" name="passionfortesting_description">{{ old('passionfortesting_description',$item_edit->passionfortesting_description ?? '') }}</textarea>
            </div>
         </div>
           <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/whyspicel') }}/{{ $item_edit->photo }}" class="img-fluid" alt="Responsive image">
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
