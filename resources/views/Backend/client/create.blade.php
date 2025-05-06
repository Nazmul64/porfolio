@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Our Client</h5>
         <form id="uploadForm" method="post" action="{{ route('clinet.store') }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
              <label for="photo_1" class="col-sm-3 col-form-label">Photo 1</label>
              <div class="col-sm-9">
                  <input type="file" class="form-control" id="photo_1" name="photo_1">
              </div>
           </div>
           <div class="row mb-3">
              <label for="photo_2" class="col-sm-3 col-form-label">Photo 2</label>
              <div class="col-sm-9">
                  <input type="file" class="form-control" id="photo_2" name="photo_2">
              </div>
           </div>
           <div class="row">
             <label class="col-sm-3 col-form-label"></label>
             <div class="col-sm-9">
               <div class="d-md-flex d-grid align-items-center gap-3">
                 <button type="submit" class="btn btn-primary px-4">Submit</button>
               </div>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
</div>
@endsection
