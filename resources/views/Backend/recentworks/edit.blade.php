@extends('Backend.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="post"action="{{ route('recentproject.update',$data_edit->id) }}" enctype="multipart/form-data">
           @csrf 
           <div class="row mb-3">
             <label for="projecttitle" class="col-sm-3 col-form-label">Enter Your projecttitle</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="projecttitle" placeholder="Enter Your projecttitle" name="projecttitle"value="{{ old('projecttitle',$data_edit->projecttitle ?? '') }}">
             </div>
           </div>
           <div class="row mb-3">
              <label for="projectdescription" class="col-sm-3 col-form-label">projectdescription</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="projectdescription" rows="3" placeholder="projectdescription" name="projectdescription">{{ old('projectdescription',$data_edit->projectdescription ?? '') }}</textarea>
              </div>
           </div>
           <div class="row mb-3">
            <label for="detailstitle" class="col-sm-3 col-form-label">detailstitle</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="detailstitle" rows="3" placeholder="detailstitle" name="detailstitle">{{ old('detailstitle',$data_edit->detailstitle ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="detailsdescription" class="col-sm-3 col-form-label">detailsdescription</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="detailsdescription" rows="3" placeholder="detailsdescription" name="detailsdescription">{{ old('detailsdescription',$data_edit->detailsdescription ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="clientname" class="col-sm-3 col-form-label">clientname</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="clientname" rows="3" placeholder="clientname" name="clientname">{{ old('clientname',$data_edit->clientname ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="category" class="col-sm-3 col-form-label">clientname</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="category" rows="3" placeholder="category" name="category">{{ old('category',$data_edit->category ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="livepreview" class="col-sm-3 col-form-label">livepreview</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="livepreview" rows="3" placeholder="livepreview" name="livepreview">{{ old('livepreview',$data_edit->livepreview ?? '') }}</textarea>
            </div>
         </div>
         <div class="row mb-3">
            <label for="date" class="col-sm-3 col-form-label">date</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" id="date" rows="3" placeholder="date" name="date">{{ old('date',$data_edit->date ?? '') }}</textarea>
            </div>
         </div>
           <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  Photo</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/recentworks') }}/{{ $data_edit->photo }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  detailsphoto</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/recentworks') }}/{{ $data_edit->detailsphoto }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old  detailsphoto1</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/recentworks') }}/{{ $data_edit->detailsphoto1 }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" id="" class="col-sm-3 col-form-label">Old detailsphoto2</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/recentworks') }}/{{ $data_edit->detailsphoto2 }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
         <div class="row mb-3">
            <label for="detailsphoto3" id="" class="col-sm-3 col-form-label">Old  detailsphoto3</label>
            <div class="col-sm-9">
                <img style="height:120px;" src="{{ asset('uploads/recentworks') }}/{{ $data_edit->detailsphoto3 }}" class="img-fluid" alt="Responsive image">
            </div>
         </div>
           <div class="row mb-3">
              <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="new_detailsphoto" name="new_detailsphoto">
              </div>
           </div>
           <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="new_detailsphoto1" name="new_detailsphoto1">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="new_detailsphoto2" name="new_detailsphoto2">
            </div>
         </div>
         <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="new_detailsphoto3" name="new_detailsphoto3">
            </div>
         </div>
         <div class="row mb-3">
            <label for="new_photo" class="col-sm-3 col-form-label">Upload Photo</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" id="new_photo" name="new_photo">
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
