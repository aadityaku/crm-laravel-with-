@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route("companie.create")}}" class="btn btn-primary float-left">Add Companie</a>
                <table class="table ">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Websites</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($companie as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->websites}}</td>
                            <td><img src="{{ asset("image/".$item->logo)}}" class="" style="width:30%; height:30px;object-fit: cover;"></td>
                            <td>
                                <a href="{{ route('companie.show',$item)}}" class="btn btn-warning">View</a>
                                <a href="{{ route('companie.edit',$item)}}" class="btn btn-success">Edit</a>
                                <form action="{{route('companie.destroy',$item)}}" method="post" class="d-inline">
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