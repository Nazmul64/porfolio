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
                        <th>maintitle</th>
                        <th>maindescription</th>
                        <th>maintitle2</th>
                        <th>maindescription2</th> 
                        <th>maintitle3</th>
                        <th>maindescription3</th>
                        <th>maintitle4</th> 
                        <th>maindescription4</th>
                        <th>maintitle5</th>
                        <th>maindescription5</th> 
                        <th>maintitle6</th>      
                        <th>maindescription6</th>                                                      
                        <th>photo_2</th>
                        <th>photo_3</th>
                        <th>photo_4</th>
                        <th>photo_5</th>
                        <th>photo_6</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (  $data as  $key=>  $items )
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $items->title }}</td>
                        <td>{{ $items->description }}</td>
                        <td>{{ $items->maintitle }}</td>
                        <td>{{ $items->maindescription }}</td>
                        <td>{{ $items->maintitle2 }}</td>
                        <td>{{ $items->maindescription2 }}</td>
                        <td>{{ $items->maintitle3 }}</td>
                        <td>{{ $items->maindescription3 }}</td>
                        <td>{{ $items->maintitle4 }}</td>
                        <td>{{ $items->maindescription4 }}</td>
                        <td>{{ $items->maintitle5 }}</td>
                        <td>{{ $items->maindescription5 }}</td>
                        <td>{{ $items->maintitle6 }}</td>
                        <td>{{ $items->maindescription6 }}</td>
                       
                        <td>
                            <img style="height: 80px;" src="{{ asset('uploads/technology') }}/{{ $items->photo_2 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img style="height: 80px;" src="{{ asset('uploads/technology') }}/{{ $items->photo_3 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img style="height: 80px;" src="{{ asset('uploads/technology') }}/{{ $items->photo_4 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img style="height: 80px;" src="{{ asset('uploads/technology') }}/{{ $items->photo_5 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img style="height: 80px;" src="{{ asset('uploads/technology') }}/{{ $items->photo_6 }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td>
                            <img style="height: 80px;" src="{{ asset('uploads/technology') }}/{{ $items->photo }}" class="img-fluid" alt="Responsive image">
                        </td>
                        <td class="d-flex">
                            <a href="{{ route('techonology.edit',$items->id) }}" class="btn btn-info btn-sm mx-1"><i class="fa fa-edit"style="font-size:23px; text-align:center;color:white;"></i></a>
                            <a href="{{ route('techonology.techonologydelete',$items->id) }}" id="delete" class="btn btn-danger btn-sm "><i class="fa fa-trash"style="font-size:23px; text-align:center;color:white;"></i></a>
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
