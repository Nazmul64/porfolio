@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('contact.update',$edite->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="number_1" class="col-sm-3 col-form-label">Enter Your Number 1</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="number_1" placeholder="Enter Your number_1" name="number_1"value="{{ old('number_1',$edite->number_1 ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="number_2" class="col-sm-3 col-form-label">number_2</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="number_2" rows="3" placeholder="number_2" name="number_2">{{ old('number_2',$edite->number_2 ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="address" class="col-sm-3 col-form-label">address</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="address" rows="3" placeholder="address" name="address">{{ old('address',$edite->address ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="email_1" class="col-sm-3 col-form-label">email_1</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="email_1" rows="3" placeholder="email_1" name="email_1">{{ old('email_1',$edite->email_1 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="email_2" class="col-sm-3 col-form-label">email_2</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="email_2" rows="3" placeholder="email_2" name="email_2">{{ old('email_2',$edite->email_2 ?? '') }}</textarea>
            </div>
         </div>
           <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" 
                src="{{ $edite->photo ? asset('uploads/contact/' . $edite->photo) : asset('default-image.jpg') }}" 
                class="img-fluid" alt="Responsive image">
           
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
