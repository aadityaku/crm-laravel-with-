@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route("employee.create")}}" class="btn btn-primary float-left">Add Employee</a>
                <table class="table ">
                    <tr>
                        <th>First Name</th>
                        <td>{{$employee->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{$employee->last_name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$employee->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$employee->phone}}</td>
                    </tr>
                       <tr>
                            <th>Companie</th>
                            <td>{{$employee->companie->name}}</td>
                            
                        </tr>
                    
                </table>
            </div>
        </div>
    </div>
@endsection