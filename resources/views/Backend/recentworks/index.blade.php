@extends('Backend.master')
@section('content')
<!--breadcrumb-->
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Recent Project Data List</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>projecttitle</th>
                        <th>projectdescription</th>
                        <th>detailstitle</th>
                        <th>detailsdescription</th>
                        <th>clientname</th>
                        <th>category</th>
                        <th>date</th>
                        <th>livepreview</th>
                        <th>detailsphoto</th>
                        <th>detailsphoto1</th>
                        <th>detailsphoto2</th>
                        <th>detailsphoto3</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (  $datashow as  $key=>  $items )
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $items->projecttitle }}</td>
                        <td>{{ $items->projectdescription }}</td>
                        <td>{{ $items->detailstitle }}</td>
                        <td>{{ $items->detailsdescription }}</td>
                        <td>{{ $items->clientname }}</td>
                        <td>{{ $items->category }}</td>
                        <td>{{ $items->date }}</td>
                        <td>{{ $items->livepreview }}</td>
                       
                        <td>
                            <img src="{{ asset('uploads/recentworks') }}/{{ $items->detailsphoto }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img src="{{ asset('uploads/recentworks') }}/{{ $items->detailsphoto1 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img src="{{ asset('uploads/recentworks') }}/{{ $items->detailsphoto2 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img src="{{ asset('uploads/recentworks') }}/{{ $items->detailsphoto3 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img src="{{ asset('uploads/recentworks') }}/{{ $items->photo }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('recentproject.edit',$items->id) }}" class="btn btn-info btn-sm mx-1"><i class="fa fa-edit"style="font-size:23px; text-align:center;color:white;"></i></a>
                            <a href="{{ route('recentproject.delete',$items->id) }}" id="delete" class="btn btn-danger btn-sm "><i class="fa fa-trash"style="font-size:23px; text-align:center;color:white;"></i></a>
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
