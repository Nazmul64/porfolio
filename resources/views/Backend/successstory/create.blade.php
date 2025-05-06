@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post" action="{{ route('successstory.store') }}">
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
             <label for="count1" class="col-sm-3 col-form-label">count1</label>
             <div class="col-sm-9">
               <input type="text" class="form-control @error('count1') is-invalid @enderror" id="count1" rows="3" placeholder="count1" name="count1">
               @error('count1')
                  <span class="text-danger">{{ $message }}</span>
               @enderror
             </div>
           </div>
          <div class="row mb-3">
            <label for="counttitle1" class="col-sm-3 col-form-label">Counttitle1</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('counttitle1') is-invalid @enderror" id="counttitle1" rows="3" placeholder="counttitle1" name="counttitle1">
              @error('counttitle1')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="count2" class="col-sm-3 col-form-label">Count2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('count2') is-invalid @enderror" id="count2" rows="3" placeholder="count2" name="count2">
              @error('count2')
               <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="counttitle2" class="col-sm-3 col-form-label">Counttitle2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('counttitle2') is-invalid @enderror" id="counttitle2" rows="3" placeholder="counttitle2" name="counttitle2">
              @error('counttitle2')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="count3" class="col-sm-3 col-form-label">Count3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('count3') is-invalid @enderror" id="count3" rows="3" placeholder="count3" name="count3">
              @error('count3')
                 <span class="text-danger">{{ $message }}</span>
             @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="counttitle3" class="col-sm-3 col-form-label">Counttitle3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('counttitle3') is-invalid @enderror" id="counttitle3" rows="3" placeholder="counttitle3" name="counttitle3">
              @error('counttitle3')
                 <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="count4" class="col-sm-3 col-form-label">count4</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('count4') is-invalid @enderror" id="count4" rows="3" placeholder="count4" name="count4">
              @error('counttitle3')
                 <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="counttitle4" class="col-sm-3 col-form-label">counttitle4</label>
            <div class="col-sm-9">
              <input type="text" class="form-control @error('counttitle4') is-invalid @enderror" id="counttitle4" rows="3" placeholder="counttitle4" name="counttitle4">
              @error('counttitle4')
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
