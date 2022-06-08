@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route("employee.update",$employee)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <div class="mb-3">
                             <label for="">First Name</label>
                             <input type="text" name="first_name" value="{{$employee->first_name}}" class="form-control">
                             @error('first_name')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Last Name</label>
                             <input type="text" name="last_name" value="{{$employee->last_name}}" class="form-control">
                             @error('last_name')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Email</label>
                             <input type="email" name="email" value="{{$employee->email}}" class="form-control">
                             @error('email')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Phone</label>
                             <input type="text" name="phone" value="{{$employee->phone}}" class="form-control">
                             @error('phone')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Companie Name</label>
                             <select name="companie_id" class="form-select">
                                 <option value="{{$employee->companie_id}}">{{$employee->companie->name}}</option>
                                 @foreach ($companie as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                 @endforeach
                             </select>
                             @error('companie_id')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <input type="submit" class="btn btn-success w-100">
                         </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection