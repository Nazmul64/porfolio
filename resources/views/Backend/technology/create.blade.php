@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body p-4">
            <h5 class="mb-4">Banner Data Upload</h5>
            <form id="uploadForm" method="post" action="{{ route('techonology.store') }}" enctype="multipart/form-data">
               @csrf 
               <div class="row mb-3">
                  <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputName" placeholder="Enter Your Title" name="title">
                     @error('title')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                  <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control @error('description') is-invalid @enderror" id="inputDescription" rows="3" placeholder="Description" name="description">
                     @error('description')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                  <label for="maintitle" class="col-sm-3 col-form-label">Main Title</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control @error('maintitle') is-invalid @enderror" id="maintitle" rows="3" placeholder="maintitle" name="maintitle">
                     @error('maintitle')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                  <label for="maindescription" class="col-sm-3 col-form-label">Main maindescription</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control @error('maindescription') is-invalid @enderror" id="maindescription" rows="3" placeholder="maintitle" name="maindescription">
                     @error('maindescription')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                  <label for="maintitle2" class="col-sm-3 col-form-label">maintitle2</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control @error('maintitle2') is-invalid @enderror" id="maintitle2" rows="3" placeholder="maintitle2" name="maintitle2">
                     @error('maintitle2')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                  <label for="maindescription2" class="col-sm-3 col-form-label">maindescription2</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control @error('maindescription2') is-invalid @enderror" id="maindescription2" rows="3" placeholder="maindescription2" name="maindescription2">
                     @error('maindescription2')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                <label for="maintitle3" class="col-sm-3 col-form-label">maintitle3</label>
                <div class="col-sm-9">
                   <input type="text" class="form-control @error('maintitle3') is-invalid @enderror" id="maintitle3" rows="3" placeholder="maintitle3" name="maintitle3">
                   @error('maintitle3')
                   <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
             </div>
             <div class="row mb-3">
              <label for="maindescription3" class="col-sm-3 col-form-label">maindescription3</label>
              <div class="col-sm-9">
                 <input type="text" class="form-control @error('maindescription3') is-invalid @enderror" id="maindescription3" rows="3" placeholder="maindescription3" name="maindescription3">
                 @error('maindescription3')
                 <span class="text-danger">{{ $message }}</span>
                 @enderror
              </div>
           </div>
           <div class="row mb-3">
            <label for="maindescription3" class="col-sm-3 col-form-label">maintitle4</label>
            <div class="col-sm-9">
               <input type="text" class="form-control @error('maintitle4') is-invalid @enderror" id="maintitle4" rows="3" placeholder="maintitle4" name="maintitle4">
               @error('maintitle4')
               <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
         </div>
         <div class="row mb-3">
          <label for="maindescription4" class="col-sm-3 col-form-label">maindescription4</label>
          <div class="col-sm-9">
             <input type="text" class="form-control @error('maindescription4') is-invalid @enderror" id="maindescription4" rows="3" placeholder="maindescription4" name="maindescription4">
             @error('maindescription4')
             <span class="text-danger">{{ $message }}</span>
             @enderror
          </div>
       </div>
       <div class="row mb-3">
        <label for="maintitle5" class="col-sm-3 col-form-label">maintitle5</label>
        <div class="col-sm-9">
           <input type="text" class="form-control @error('maintitle5') is-invalid @enderror" id="maintitle5" rows="3" placeholder="maintitle5" name="maintitle5">
           @error('maintitle5')
           <span class="text-danger">{{ $message }}</span>
           @enderror
        </div>
     </div>
     <div class="row mb-3">
      <label for="maindescription5" class="col-sm-3 col-form-label">maindescription5</label>
      <div class="col-sm-9">
         <input type="text" class="form-control @error('maintitle5') is-invalid @enderror" id="maindescription5" rows="3" placeholder="maindescription5" name="maindescription5">
         @error('maindescription5')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
   </div>
   <div class="row mb-3">
    <label for="maintitle6" class="col-sm-3 col-form-label">maintitle6</label>
    <div class="col-sm-9">
       <input type="text" class="form-control @error('maintitle6') is-invalid @enderror" id="maintitle6" rows="3" placeholder="maintitle6" name="maintitle6">
       @error('maintitle6')
       <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
 </div>
 <div class="row mb-3">
  <label for="maindescription6" class="col-sm-3 col-form-label">maindescription6</label>
  <div class="col-sm-9">
     <input type="text" class="form-control @error('maindescription6') is-invalid @enderror" id="maindescription6" rows="3" placeholder="maindescription6" name="maindescription6">
     @error('maindescription6')
     <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
</div>
<div class="row mb-3">
  <label for="photo_2" class="col-sm-3 col-form-label">photo_2</label>
  <div class="col-sm-9">
     <input type="file" class="form-control @error('photo_2') is-invalid @enderror" id="photo_2" rows="3" placeholder="photo_2" name="photo_2">
     @error('photo_2')
     <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
</div>
<div class="row mb-3">
  <label for="photo_3" class="col-sm-3 col-form-label">photo_3</label>
  <div class="col-sm-9">
     <input type="file" class="form-control @error('photo_3') is-invalid @enderror" id="photo_3" rows="3" placeholder="photo_3" name="photo_3">
     @error('photo_3')
     <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
</div>
<div class="row mb-3">
  <label for="photo_4" class="col-sm-3 col-form-label">photo_4</label>
  <div class="col-sm-9">
     <input type="file" class="form-control @error('photo_4') is-invalid @enderror" id="photo_4" rows="3" placeholder="photo_4" name="photo_4">
     @error('photo_4')
     <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
</div>
<div class="row mb-3">
  <label for="photo_5" class="col-sm-3 col-form-label">photo_5</label>
  <div class="col-sm-9">
     <input type="file" class="form-control @error('photo_5') is-invalid @enderror" id="photo_5" rows="3" placeholder="photo_5" name="photo_5">
     @error('photo_5')
     <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
</div>
<div class="row mb-3">
  <label for="photo_6" class="col-sm-3 col-form-label">photo_6</label>
  <div class="col-sm-9">
     <input type="file" class="form-control @error('photo_6') is-invalid @enderror" id="photo_6" rows="3" placeholder="photo_6" name="photo_6">
     @error('photo_6')
     <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
</div>
<div class="row mb-3">
  <label for="photo" class="col-sm-3 col-form-label">photo</label>
  <div class="col-sm-9">
     <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" rows="3" placeholder="photo" name="photo">
     @error('photo')
     <span class="text-danger">{{ $message }}</span>
     @enderror
  </div>
</div>
         </div>
         <div class="row">
             <label class="col-sm-3 col-form-label"></label>
             <div class="col-sm-9">
             <div class="d-md-flex d-grid align-items-center gap-3 ">
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