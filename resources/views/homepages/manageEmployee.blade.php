@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route("employee.create")}}" class="btn btn-primary float-left">Add Employee</a>
                <table class="table ">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Companie</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($employee as $item)
                        <tr>
                            <td>{{$item->first_name}}</td>
                            <td>{{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->companie->name}}</td>
                            <td>{{$item->phone}}</td>
                            
                            <td>
                                <a href="{{ route('employee.show',$item)}}" class="btn btn-warning">View</a>
                                <a href="{{ route('employee.edit',$item)}}" class="btn btn-success">Edit</a>
                                <form action="{{route('employee.destroy',$item)}}" method="post" class="d-inline">
                                    @csrf
                                    @method("delete")
                                    <input type="submit" value="X" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection