@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('settingstore') }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Description</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="description">
                @error('description')
                     <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>
           </div>
           <div class="row mb-3">
              <label for="address" class="col-sm-3 col-form-label">address</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="address" rows="3" placeholder="address" name="address">
                @error('address')
                   <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
           </div>
           <div class="row mb-3">
            <label for="address" class="col-sm-3 col-form-label">gmail</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="gmail" rows="3" placeholder="gmail" name="gmail">
              @error('gmail')
                <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
         </div>
           <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">phone</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="phone" rows="3" placeholder="phone" name="phone">
              @error('phone')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>
         <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">facebook</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="facebook" rows="3" placeholder="facebook" name="facebook">
              @error('facebook')
                 <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>
         <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">youtube</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="youtube" rows="3" placeholder="youtube" name="youtube">
              @error('youtube')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>
         <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">whatsapp</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="whatsapp" rows="3" placeholder="whatsapp" name="whatsapp">
              @error('whatsapp')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>
         <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">instragrams</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="instragram" rows="3" placeholder="instragram" name="instragram">
              @error('instragram')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>
         <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">linkdine</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="linkdine" rows="3" placeholder="linkdine" name="linkdine">
              @error('linkdine')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
         </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputPhoto" name="photo">
                @error('photo')
                   <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
           </div>
           <div class="row mb-3">
            <label for="icon" class="col-sm-3 col-form-label">Upload icon</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="icon" name="icon">
                 @error('icon')
                   <span class="text-danger">{{ $message }}</span>
                @enderror
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
