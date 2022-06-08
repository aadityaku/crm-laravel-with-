@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route("companie.create")}}" class="btn btn-primary float-left">Add Companie</a>
                <table class="table ">
                    <tr>
                        <th>Name</th>
                        <td>{{$companie->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$companie->email}}</td>
                    </tr>
                    <tr>
                        <th>Websites</th>
                        <td>{{$companie->websites}}</td>
                    </tr>
                       <tr>
                            <th>Logo</th>
                            <td><img src="{{ asset("image/".$companie->logo)}}" class="" style="width:70%; height:120px;object-fit: cover;"></td>
                            
                        </tr>
                    
                </table>
            </div>
        </div>
    </div>
@endsection