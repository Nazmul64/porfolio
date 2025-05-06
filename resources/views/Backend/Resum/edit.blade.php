@extends('Backend.master')

@section('content')

{{-- Back Button --}}
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="ms-auto">
    <div class="btn-group">
      <a href="{{ route('resum.index') }}" class="btn btn-success mb-2">
        <i class="fa fa-arrow-left"></i> Back
      </a>
    </div>
  </div>
</div>

{{-- Resume Update Form --}}
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body p-4">
        <h5 class="mb-4">Resume Data Update</h5>

        <form id="uploadForm" method="POST" action="{{ route('resum.update', $resum->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          {{-- Resume Title --}}
          <div class="row mb-3">
            <label for="resum_title" class="col-sm-3 col-form-label">Enter Your Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="resum_title" name="resum_title" placeholder="Enter Your Title" value="{{ old('resum_title', $resum->resum_title) }}">
              @error('resum_title')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>

          {{-- Resume Description --}}
          <div class="row mb-3">
            <label for="resum_description" class="col-sm-3 col-form-label">Resume Description</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="resum_description" name="resum_description" rows="3" placeholder="Resume Description">{{ old('resum_description', $resum->resum_description) }}</textarea>
              @error('resum_description')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>

          {{-- Date of Birth --}}
          <div class="row mb-3">
            <label for="date_of_brith" class="col-sm-3 col-form-label">Date of Birth</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="date_of_brith" name="date_of_brith" value="{{ old('date_of_brith', $resum->date_of_brith) }}">
              @error('date_of_brith')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>

          {{-- Submit Button --}}
          <div class="row">
            <div class="col-sm-9 offset-sm-3">
              <button type="submit" class="btn btn-primary px-4" id="submitBtn">Update</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
