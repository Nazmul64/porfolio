@extends('Backend.master')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet">

<!-- Tagify JS -->
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

<style>
    /* Customizing the placeholder text color to white */
    .form-control::placeholder {
        color: white;
    }
</style>

<section>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 anchor" id="basic" style="float: right;">
                <a href="{{ route('seometa.index') }}" class="btn btn-success">Back to SEO Page</a>
            </h5>
            
            <div>
                <form method="POST" action="{{ route('seometa.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Meta Title -->
                    <div class="mb-3">
                        <label for="meta_title" class="form-label">Enter Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title') is-invalid @enderror" placeholder="Enter Meta Title" value="{{ old('meta_title') }}">
                        @error('meta_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Meta Description -->
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Enter Meta Description</label>
                        <input type="text" id="meta_description" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" placeholder="Enter Meta Description" value="{{ old('meta_description') }}">
                        @error('meta_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Meta Keywords -->
                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label">Enter Meta Keywords</label>
                        <input type="text" id="meta_keywords" name="meta_keywords[]" class="form-control @error('meta_keywords') is-invalid @enderror" placeholder="Enter Meta Keywords" value="{{ old('meta_keywords') }}">
                        @error('meta_keywords')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Meta Focus Keywords (Tags) -->
                    <div class="mb-3">
                        <label for="meta_focus_keywords" class="form-label">Enter Meta Focus Keywords (Tags)</label>
                        <input type="text" id="meta_focus_keywords" name="meta_focus_keywords[]" data-role="tagsinput" class="form-control @error('meta_focus_keywords') is-invalid @enderror" placeholder="Enter Your Meta Focus Keywords (Tags)" value="{{ old('meta_focus_keywords') }}">
                        @error('meta_focus_keywords')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Initialize Tagify for meta_keywords (for tags)
    var metaKeywordsInput = document.querySelector("#meta_keywords");
    new Tagify(metaKeywordsInput);

    // Initialize Tagify for meta_focus_keywords_tags (focus keywords as tags)
    var metaFocusKeywordsInput = document.querySelector("#meta_focus_keywords");
    new Tagify(metaFocusKeywordsInput);
</script>
@endsection
