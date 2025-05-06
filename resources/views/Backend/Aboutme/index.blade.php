@extends('Backend.master')

@section('content')
<!--breadcrumb-->
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">About Me</h6>
<hr>
<a href="{{ route('aboutme.create') }}" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add </a>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>About Title</th>
                        <th>About Description</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>Zip</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Project Text</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aboutme as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->about_title }}</td>
                        <td>{{ $item->about_description }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->date_of_brith }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->zip }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->project_text }}</td>
                        <td>
                            <img src="{{ asset('uploads/aboutme/' . $item->photo) }}" class="img-fluid" style="width: 80px;" alt="About Photo">
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('aboutme.edit', $item->id) }}" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-edit" style="font-size: 18px; color: white;"></i>
                            </a>
                            <form action="{{ route('aboutme.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
    });
</script>
@endsection
