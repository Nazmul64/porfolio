@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Gallery Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('gallery.update',$edit_data->id) }}" enctype="multipart/form-data">
           @csrf
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                  <img style="height:70px;" src="{{asset('uploads/gallery/')}}/{{$edit_data->photo}}">
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
