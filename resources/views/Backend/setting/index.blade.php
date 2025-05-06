@extends('Backend.master')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    {{--  <div class="ms-auto">
        <div class="btn-group">
            <a href="{{ route('banner.store') }}" class="btn btn-success custom-btn">Back Pages</a>
        </div>        
    </div>  --}}
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
                        <th>description</th>
                        <th>address</th>
                        <th>gmail</th>
                        <th>phone</th>
                        <th>facebook</th>
                        <th>youtube</th>
                        <th>whatsapp</th>
                        <th>instragram</th>
                        <th>linkdine</th>
                        <th>Photo</th>
                        <th>icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (  $setting as  $key=>  $items )
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $items->description }}</td>
                        <td>{{ $items->address }}</td>
                        <td>{{ $items->gmail }}</td>
                        <td>{{ $items->phone }}</td>
                        <td>{{ $items->facebook }}</td>
                        <td>{{ $items->youtube }}</td>
                        <td>{{ $items->whatsapp }}</td>
                        <td>{{ $items->instragram }}</td>
                        <td>{{ $items->linkdine }}</td>
                        <td>
                            <img src="{{ asset('uploads/settings') }}/{{ $items->photo }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img src="{{ asset('uploads/settings') }}/{{ $items->icon }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('settingedit',$items->id) }}" class="btn btn-info btn-sm mx-1"><i class="fa fa-edit"style="font-size:23px; text-align:center;color:white;"></i></a>
                            <a href="{{ route('sitting.delete',$items->id) }}" id="delete" class="btn btn-danger btn-sm "><i class="fa fa-trash"style="font-size:23px; text-align:center;color:white;"></i></a>
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
