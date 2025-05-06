@extends('Backend.master')

@section('content')

<a href="{{ route('seometa.create') }}" class="mb-0 btn btn-outline-success">
    <i class="fas fa-plus"></i> Add Meta Data
</a>
<hr>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Meta Keywords</th>
                        <th>Meta Focus Keywords (Tag)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($metakeyword as $index => $metakeywords)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $metakeywords->meta_title }}</td>
                            <td>{{ $metakeywords->meta_description }}</td>
                            
                            <!-- Meta Keywords -->
                            <td>
                                @php
                                    $metaKeywords = json_decode($metakeywords->meta_keywords, true) ?? [];
                                @endphp
                                
                                @if (!empty($metaKeywords))
                                    @foreach ($metaKeywords as $keyword)
                                        <span class="size-badge">
                                            {{ is_array($keyword) ? $keyword['value'] ?? '' : $keyword }}
                                        </span>
                                    @endforeach
                                @else
                                    <span class="size-badge">No keywords available.</span>
                                @endif
                            </td>
                            
                            <!-- Meta Focus Keywords -->
                            <td>
                                @php
                                    $metaFocusKeywords = json_decode($metakeywords->meta_focus_keywords, true) ?? [];
                                @endphp
                                
                                @if (!empty($metaFocusKeywords))
                                    @foreach ($metaFocusKeywords as $keyword)
                                        <span class="size-badge">
                                            {{ is_array($keyword) ? $keyword['value'] ?? '' : $keyword }}
                                        </span>
                                    @endforeach
                                @else
                                    <span class="size-badge">No focus keywords available.</span>
                                @endif
                            </td>
                            
                            <!-- Action Buttons -->
                            <td class="d-flex">
                                <a href="{{ route('seometa.edit', $metakeywords->id) }}" class="btn btn-outline-success mx-1">
                                    <i class="far fa-edit"></i>
                                </a>

                                <form action="{{ route('seometa.destroy', $metakeywords->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- DataTables Script -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<!-- Custom Styles -->
<style>
    .size-badge {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border: 1px solid #d9534f;
        border-radius: 15px;
        background-color: #fff;
        color: #d9534f;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
    }
</style>

@endsection
