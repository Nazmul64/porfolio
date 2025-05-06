@extends('Backend.master')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('skill.create') }}" class="btn btn-success custom-btn"><i class="fa fa-plus"></i> Add</a>
        </div>        
    </div>
</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Banner Data List</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Skills Title</th>
                            <th>Skills Description</th>
                            <th>Skills Name</th>
                            <th>Skills Count</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($skill as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->skills_title }}</td>
                        <td>{{ $item->skills_description }}</td>
                        <td>{{ $item->skills_name }}</td>
                        <td>{{ $item->skills_count }}</td>
                        <td class="d-flex">
                            {{-- Edit Button --}}
                            <a href="{{ route('skill.edit', $item->id) }}" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-edit" style="font-size: 18px; color: white;"></i>
                            </a>
                
                            {{-- Delete Form --}}
                            <form action="{{ route('skill.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash" style="font-size: 18px; color: white;"></i>
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
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
 </script>
@endsection
