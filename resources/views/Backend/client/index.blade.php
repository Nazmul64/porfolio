@extends('Backend.master')
@section('content')
<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"></div>
<h6 class="mb-0 text-uppercase">Banner Data List</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Photo 1</th>
                        <th>Photo 2</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datashow as $key => $items)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if (!empty($items->photo_1) && file_exists(public_path('uploads/client/' . $items->photo_1)))
                                <img src="{{ asset('uploads/client/' . $items->photo_1) }}" 
                                     class="img-fluid" alt="Photo 1" style="width:100px; height:auto;">
                            @else
                                <img src="{{ asset('placeholder.jpg') }}" 
                                     class="img-fluid" alt="No Image" style="width:100px; height:auto;">
                            @endif
                        </td>
                        <td>
                            @if (!empty($items->photo_2) && file_exists(public_path('uploads/client/' . $items->photo_2)))
                                <img src="{{ asset('uploads/client/' . $items->photo_2) }}" 
                                     class="img-fluid" alt="Photo 2" style="width:100px; height:auto;">
                            @else
                                <img src="{{ asset('placeholder.jpg') }}" 
                                     class="img-fluid" alt="No Image" style="width:100px; height:auto;">
                            @endif
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('clinet.clientedit', $items->id) }}" 
                               class="btn btn-info btn-sm mx-1">
                               <i class="fa fa-edit" style="font-size:23px; text-align:center;color:white;"></i>
                            </a>
                            <a href="{{ route('client.delete', ['id' => $items->id]) }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash" style="font-size:23px; text-align:center;color:white;"></i>
                            </a>
                       
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
