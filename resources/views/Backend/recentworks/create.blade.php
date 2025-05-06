@extends('Backend.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Recent Work</h5>
                <form id="uploadForm" method="POST" action="{{ route('recent.store') }}" enctype="multipart/form-data">
                    @csrf
                   
                    <!-- Project Title -->
                    <div class="row mb-3">
                        <label for="projecttitle" class="col-sm-3 col-form-label">Project Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('projecttitle') is-invalid @enderror" id="projecttitle" placeholder="Project Title" name="projecttitle">
                            @error('projecttitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Project Description -->
                    <div class="row mb-3">
                        <label for="projectdescription" class="col-sm-3 col-form-label @error('title') is-invalid @enderror">Project Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control @error('projectdescription') is-invalid @enderror" id="projectdescription" rows="3" placeholder="Project Description" name="projectdescription"></textarea>
                            @error('projectdescription')
                               <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Details Title -->
                    <div class="row mb-3">
                        <label for="detailstitle" class="col-sm-3 col-form-label @error('title') is-invalid @enderror">Details Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control  @error('detailstitle') is-invalid @enderror" id="detailstitle" placeholder="Details Title" name="detailstitle">
                            @error('detailstitle')
                               <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Details Description -->
                    <div class="row mb-3">
                        <label for="detailsdescription" class="col-sm-3 col-form-label @error('title') is-invalid @enderror">Details Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control @error('detailsdescription') is-invalid @enderror" id="detailsdescription" rows="3" placeholder="Details Description" name="detailsdescription"></textarea>
                            @error('detailsdescription')
                               <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Client Name -->
                    <div class="row mb-3">
                        <label for="clientname" class="col-sm-3 col-form-label">Client Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('clientname') is-invalid @enderror" id="clientname" placeholder="Client Name" name="clientname">
                            @error('clientname')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Category -->
                    <div class="row mb-3">
                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="Category" name="category">
                            @error('category')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Date -->
                    <div class="row mb-3">
                        <label for="date" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
                            @error('date')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Live Preview -->
                    <div class="row mb-3">
                        <label for="livepreview" class="col-sm-3 col-form-label">Live Preview</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control @error('livepreview') is-invalid @enderror" id="livepreview" placeholder="Live Preview URL" name="livepreview">
                            @error('livepreview')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Upload Photo -->
                    <div class="row mb-3">
                        <label for="inputPhoto" class="col-sm-3 col-form-label @error('title') is-invalid @enderror">Upload Photo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="inputPhoto" name="photo">
                            @error('photo')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Upload Details Photo -->
                    <div class="row mb-3">
                      <label for="detailsphoto" class="col-sm-3 col-form-label">Upload Details Photo</label>
                      <div class="col-sm-9">
                          <input type="file"class="form-control @error('detailsphoto.*') is-invalid @enderror" id="detailsphoto" name="detailsphoto">
                          @error('detailsphoto.*')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label for="detailsphoto1" class="col-sm-3 col-form-label">Upload detailsphoto1 Photo</label>
                    <div class="col-sm-9">
                        <input type="file"class="form-control @error('detailsphoto1.*') is-invalid @enderror" id="detailsphoto1" name="detailsphoto1">
                        @error('detailsphoto1.*')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="detailsphoto2" class="col-sm-3 col-form-label">Upload detailsphoto2 Photo</label>
                    <div class="col-sm-9">
                        <input type="file"class="form-control @error('detailsphoto2.*') is-invalid @enderror" id="detailsphoto2" name="detailsphoto2">
                        @error('detailsphoto2.*')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="detailsphoto3" class="col-sm-3 col-form-label">Upload detailsphoto3 Photo</label>
                    <div class="col-sm-9">
                        <input type="file"class="form-control @error('detailsphoto3.*') is-invalid @enderror" id="detailsphoto3" name="detailsphoto3">
                        @error('detailsphoto3.*')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                    <!-- Submit Button -->
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary px-4" id="submitBtn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
