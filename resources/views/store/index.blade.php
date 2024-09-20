
@extends('master')

@section('content')

        <div class="container py-5">
            <div class="row">
                <div class="col-8">
                    
                    <table class="table table-bordered table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Store name</th>
                        <th>Store address</th>
                        <th>Store phone</th>
                        <th>Store email</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>

                      </tr>    
                    @foreach($list as $store => $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->store_name}}</td>
                            <td>{{$data->store_address}}</td>
                            <td>{{$data->store_phone}}</td>
                            <td>{{$data->store_email}}</td>
                            
                            <td><a href="{{ route('store.show',$data->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{ route('store.show',$data->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
                            <td><a href="{{ route('store.destroy',$data->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                    </table>
                    <a href="{{ route('store.create')}}" class="btn btn-success btn-sm mb-3">Add New</a>
                </div>
            </div>
        </div>

@endsection 











   			