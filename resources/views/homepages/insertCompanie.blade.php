@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route("companie.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                         <div class="mb-3">
                             <label for="">Companie Name</label>
                             <input type="text" name="name" value="{{old("name")}}" class="form-control">
                             @error('name')
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
                             <label for="">Websites</label>
                             <input type="text" name="websites" value="{{old("websites")}}" class="form-control">
                             @error('websites')
                                 <p class="small text-danger">{{$message}}</p>
                             @enderror
                         </div>
                         <div class="mb-3">
                             <label for="">Logo</label>
                             <input type="file" name="logo" value="{{old("logo")}}" class="form-control">
                             @error('logo')
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