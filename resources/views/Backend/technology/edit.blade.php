@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('techonology.techonologyupdate',$edit->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="inputName" class="col-sm-3 col-form-label">Enter Your Title</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title"value="{{ old('title',$edit->title ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="inputDescription" rows="3" placeholder="Description" name="description">{{ old('title',$edit->description ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="maintitle" class="col-sm-3 col-form-label">maintitle</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maintitle" rows="3" placeholder="maintitle" name="maintitle">{{ old('title',$edit->maintitle ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription" class="col-sm-3 col-form-label">maindescription</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription" rows="3" placeholder="maindescription" name="maindescription">{{ old('title',$edit->maindescription ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maintitle2" class="col-sm-3 col-form-label">maintitle2</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maintitle2" rows="3" placeholder="maintitle2" name="maintitle2">{{ old('title',$edit->maintitle2 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription2" class="col-sm-3 col-form-label">maindescription2</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription2" rows="3" placeholder="maindescription2" name="maindescription2">{{ old('title',$edit->maindescription2 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maintitle3" class="col-sm-3 col-form-label">maintitle3</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maintitle3" rows="3" placeholder="maintitle3" name="maintitle3">{{ old('title',$edit->maintitle3 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription3" class="col-sm-3 col-form-label">maindescription3</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription3" rows="3" placeholder="maindescription3" name="maindescription3">{{ old('title',$edit->maindescription3 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maintitle4" class="col-sm-3 col-form-label">maintitle4</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maintitle4" rows="3" placeholder="maintitle4" name="maintitle4">{{ old('title',$edit->maintitle4 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription4" class="col-sm-3 col-form-label">maindescription4</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription4" rows="3" placeholder="maindescription4" name="maindescription4">{{ old('title',$edit->maindescription4 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maintitle5" class="col-sm-3 col-form-label">maintitle5</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maintitle5" rows="3" placeholder="maintitle5" name="maintitle5">{{ old('title',$edit->maintitle5 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription5" class="col-sm-3 col-form-label">maindescription5</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription5" rows="3" placeholder="maindescription5" name="maindescription5">{{ old('title',$edit->maindescription5 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maintitle6" class="col-sm-3 col-form-label">maintitle6</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maintitle6" rows="3" placeholder="maintitle6" name="maintitle6">{{ old('title',$edit->maintitle6 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="maindescription6" class="col-sm-3 col-form-label">maindescription6</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="maindescription6" rows="3" placeholder="maindescription6" name="maindescription6">{{ old('title',$edit->maindescription6 ?? '') }}</textarea>
            </div>
         </div>
        <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/technology') }}/{{ $edit->photo }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/technology') }}/{{ $edit->photo_2 }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
          <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
          <div class="col-sm-9">
              <img style="height:120px;" src="{{ asset('uploads/technology') }}/{{ $edit->photo_3 }}" class="img-fluid" alt="Responsive image">
          </div>
       </div>
       <div class="row mb-3">
        <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
        <div class="col-sm-9">
            <img style="height:120px;" src="{{ asset('uploads/technology') }}/{{ $edit->photo_4 }}" class="img-fluid" alt="Responsive image">
        </div>
     </div>
     <div class="row mb-3">
      <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
      <div class="col-sm-9">
          <img style="height:120px;" src="{{ asset('uploads/technology') }}/{{ $edit->photo_5 }}" class="img-fluid" alt="Responsive image">
      </div>
   </div>
   <div class="row mb-3">
    <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
    <div class="col-sm-9">
        <img style="height:120px;" src="{{ asset('uploads/technology') }}/{{ $edit->photo_6 }}" class="img-fluid" alt="Responsive image">
    </div>
 </div>  
          <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputPhoto" name="new_photo">
              </div>
           </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputPhoto" name="new_photo_2">
              </div>
           </div>
           <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="inputPhoto" name="new_photo_3">
            </div>
         </div>
         <div class="row mb-3">
          <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
          <div class="col-sm-9">
            <input type="file" class="form-control" id="inputPhoto" name="new_photo_4">
          </div>
       </div>
           <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="inputPhoto" name="new_photo_5">
            </div>
         </div>
         <div class="row mb-3">
          <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
          <div class="col-sm-9">
            <input type="file" class="form-control" id="inputPhoto" name="new_photo_6">
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
