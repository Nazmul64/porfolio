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
                        <th>Title</th>
                        <th>Description</th>
                        <th>communication_title</th>
                        <th>communication_description</th>
                        <th>experience_title</th>
                        <th>experience_description</th>
                        <th>safeSecure_title</th>
                        <th>safeSecure_description</th>
                        <th>passionfortesting_title</th>
                        <th>passionfortesting_description</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (  $item_show as  $key=>  $items )
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $items->title }}</td>
                        <td>{{ $items->description }}</td>
                        <td>{{ $items->communication_title }}</td>
                        <td>{{ $items->communication_description }}</td>
                        <td>{{ $items->experience_title }}</td>
                        <td>{{ $items->experience_description }}</td>
                        <td>{{ $items->safeSecure_title }}</td>
                        <td>{{ $items->safeSecure_description }}</td>
                        <td>{{ $items->passionfortesting_title }}</td>
                        <td>{{ $items->passionfortesting_description }}</td>
                        <td>
                            <img src="{{ asset('uploads/whyspicel') }}/{{ $items->photo }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('whyspeciledit',$items->id) }}" class="btn btn-info btn-sm mx-1"><i class="fa fa-edit"style="font-size:23px; text-align:center;color:white;"></i></a>
                            <a href="{{ route('whyspecildelete',$items->id) }}" id="delete" class="btn btn-danger btn-sm "><i class="fa fa-trash"style="font-size:23px; text-align:center;color:white;"></i></a>
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
