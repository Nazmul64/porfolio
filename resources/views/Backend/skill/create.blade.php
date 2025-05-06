@extends('Backend.master')

@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="ms-auto">
      <div class="btn-group"><a href="{{ route('skill.index') }}" class="btn btn-success mb-2"><i class="fa fa-arrow-left"></i> Back</a>
      </div>        
  </div>
</div>
<div class="row">
   <div class="col-lg-12">
     <div class="card">
       <div class="card-body p-4">
         <h5 class="mb-4">Banner Data Upload</h5>
         <form id="uploadForm" method="POST" action="{{ route('skill.store') }}" enctype="multipart/form-data">
           @csrf

           {{-- Banner Title --}}
           <div class="row mb-3">
             <label for="skills_title" class="col-sm-3 col-form-label">Enter Your Skills</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="skills_title" name="skills_title" placeholder="Enter Your Title" value="{{ old('skills_title') }}">
               @error('skills_title')
                 <span class="text-danger">{{ $message }}</span>
               @enderror
             </div>
           </div>

           {{-- Banner Description --}}
           <div class="row mb-3">
             <label for="skills_description" class="col-sm-3 col-form-label">Skills Description</label>
             <div class="col-sm-9">
               <textarea class="form-control" id="skills_description" name="skills_description" rows="3" placeholder="Skills Description">{{ old('skills_description') }}</textarea>
               @error('skills_description')
                 <span class="text-danger">{{ $message }}</span>
               @enderror
             </div>
           </div>

           {{-- Date of Birth --}}
           <div class="row mb-3">
             <label for="skills_name" class="col-sm-3 col-form-label">Skills Name</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" id="skills_name" name="skills_name" value="{{ old('skills_name') }}"placeholder="Skills Name">
               @error('skills_name')
                 <span class="text-danger">{{ $message }}</span>
               @enderror
             </div>
           </div>
           <div class="row mb-3">
            <label for="skills_count" class="col-sm-3 col-form-label">Skills Count</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="skills_count" name="skills_count" value="{{ old('skills_count') }}"placeholder=" Skills Count">
              @error('skills_count')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>

           {{-- Submit Button --}}
           <div class="row">
             <div class="col-sm-9 offset-sm-3">
               <button type="submit" class="btn btn-primary px-4" id="submitBtn">Submit</button>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
</div>
@endsection
