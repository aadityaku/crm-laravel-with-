@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route("employee.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                         <div class="mb-3">
                             <label for="">First Name</label>
                             <input type="text" name="first_name" value="{{old("first_name")}}" class="form-control">
                             @error('first_name')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Last Name</label>
                             <input type="text" name="last_name" value="{{old("last_name")}}" class="form-control">
                             @error('last_name')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Email</label>
                             <input type="email" name="email" value="{{old("email")}}" class="form-control">
                             @error('email')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Phone</label>
                             <input type="text" name="phone" value="{{old("phone")}}" class="form-control">
                             @error('phone')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Companie Name</label>
                             <select name="companie_id" class="form-select">
                                 <option value="">--Select--</option>
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