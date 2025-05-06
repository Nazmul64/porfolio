@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('success.update',$edit->id) }}" enctype="multipart/form-data">
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
            <label for="count1" class="col-sm-3 col-form-label">count1</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="count1" rows="3" placeholder="count1" name="count1">{{ old('count1',$edit->count1 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="counttitle1" class="col-sm-3 col-form-label">count1</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="counttitle1" rows="3" placeholder="counttitle1" name="counttitle1">{{ old('counttitle1',$edit->counttitle1 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="count2" class="col-sm-3 col-form-label">count2</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="count2" rows="3" placeholder="count2" name="count2">{{ old('count2',$edit->count2 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="counttitle2" class="col-sm-3 col-form-label">count1</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="counttitle2" rows="3" placeholder="counttitle2" name="counttitle2">{{ old('counttitle2',$edit->counttitle2 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="count3" class="col-sm-3 col-form-label">count3</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="count3" rows="3" placeholder="count3" name="count3">{{ old('count3',$edit->count3 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="counttitle3" class="col-sm-3 col-form-label">counttitle3</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="counttitle3" rows="3" placeholder="counttitle3" name="counttitle3">{{ old('counttitle3',$edit->counttitle3 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="count4" class="col-sm-3 col-form-label">count4</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="count4" rows="3" placeholder="count4" name="count4">{{ old('count4',$edit->count4 ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="counttitle4" class="col-sm-3 col-form-label">counttitle4</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="counttitle4" rows="3" placeholder="count4" name="counttitle4">{{ old('counttitle4',$edit->counttitle4 ?? '') }}</textarea>
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
