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
                        <th>about_us</th>
                        <th>description</th>
                        <th>our_history</th>
                        <th>history_description</th>
                        <th>our_mission</th>
                        <th>mission_description</th>
                        <th>who_we_are</th>
                        <th>who_we_are_description</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (  $show as  $key=>  $items )
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $items->about_us }}</td>
                        <td>{{ $items->description }}</td>
                        <td>{{ $items->our_history }}</td>
                        <td>{{ $items->history_description }}</td>
                        <td>{{ $items->our_mission }}</td>
                        <td>{{ $items->mission_description }}</td>
                        <td>{{ $items->who_we_are }}</td>
                        <td>{{ $items->who_we_are_description }}</td>

                        <td>
                            <img src="{{ asset('uploads/about') }}/{{ $items->photo }}" class="img-fluid" alt="Responsive image">
                        </td>

                        <td class="d-flex">
                            <a href="{{ route('about.edit',$items->id) }}" class="btn btn-info btn-sm mx-1"><i class="fa fa-edit"style="font-size:23px; text-align:center;color:white;"></i></a>
                            <a href="{{ route('about.delete',$items->id) }}" id="delete" class="btn btn-danger btn-sm "><i class="fa fa-trash"style="font-size:23px; text-align:center;color:white;"></i></a>
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
