@extends('homepages.base')
@section('content')
    <div class="container">
        <div class="row">
            <h2>All Companie</h2>
            {{-- <div class="col-lg-12">
                <div class="row"> --}}
                    @foreach ($companie as $item)
                    <div class="col-lg-4 mt-3">
                        <div class="card bg-danger py-4 px-2">
                            {{-- <div class="card-body"> --}}
                                <h4 class="text-truncate text-dark">Companie name:<span class="text-white"> {{$item->name}}</span></h4>
                                <h4 class="text-dark">Total Employes:<span class="text-white"> {{$item->employee_count}}</span></h4>
                            </div>
                        </div>
                    {{-- </div> --}}
                    @endforeach
                {{-- </div>
            </div> --}}
        </div>
    </div>
@endsection