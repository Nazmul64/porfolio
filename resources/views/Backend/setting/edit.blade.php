@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Settting Edit</h5>
         <form id="uploadForm" method="post"action="{{ route('settinupdate',$setting_edite->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your description</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your description" name="description"value="{{ old('description',$setting_edite->description ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="address" class="col-sm-3 col-form-label">address</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="address" rows="3" placeholder="address" name="address">{{ old('address',$setting_edite->address ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="gmail" class="col-sm-3 col-form-label">gmail</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="gmail" rows="3" placeholder="gmail" name="gmail">{{ old('gmail',$setting_edite->gmail ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="phone" class="col-sm-3 col-form-label">phone</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="phone" rows="3" placeholder="phone" name="phone">{{ old('phone',$setting_edite->phone ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="facebook" class="col-sm-3 col-form-label">facebook</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="facebook" rows="3" placeholder="facebook" name="facebook">{{ old('facebook',$setting_edite->facebook ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="youtube" class="col-sm-3 col-form-label">youtube</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="youtube" rows="3" placeholder="youtube" name="youtube">{{ old('youtube',$setting_edite->youtube ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="whatsapp" class="col-sm-3 col-form-label">whatsapp</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="whatsapp" rows="3" placeholder="whatsapp" name="whatsapp">{{ old('whatsapp',$setting_edite->whatsapp ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="instragram" class="col-sm-3 col-form-label">instragram</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="instragram" rows="3" placeholder="instragram" name="instragram">{{ old('instragram',$setting_edite->instragram ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="linkdine" class="col-sm-3 col-form-label">linkdine</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="linkdine" rows="3" placeholder="linkdine" name="linkdine">{{ old('linkdine',$setting_edite->linkdine ?? '') }}</textarea>
            </div>
         </div>
           <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/settings') }}/{{ $setting_edite->photo }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old icon Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/settings') }}/{{ $setting_edite->icon }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">New  Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputPhoto" name="new_photo">
              </div>
           </div>
           <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-3 col-form-label">Icon New  Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="inputPhoto" name="icon_new_photo">
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
