<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @section('map')
        
    @show
    <title>Crm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a href="" class="navbar-brand">Crm | Administrator</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" value="Logout" class="btn btn-dark">
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row border-top-3">
            <div class="col-lg-2 gx-0 ">
               <div class="list-group list-group-flush">
                    <a href="{{ route('home') }}" class="list-group-item list-group-item-action @php echo Route::current()->getName() == "home"?"bg-primary text-white ":"bg-dark  text-white"; @endphp border-0 fs-5 py-3  ">Dashboard</a>
                    <a href="{{ route('companie.index')}}" class="list-group-item list-group-item-action @php echo Route::current()->getName() == "companie.index"?"bg-primary text-white ":"bg-dark  text-white"; @endphp border-0 fs-5 py-3  ">Manage All Companie</a>
                    <a href="{{ route('employee.index')}}" class="list-group-item list-group-item-action @php echo Route::current()->getName() == "employee.index"?"bg-primary text-white ":"bg-dark  text-white"; @endphp border-0 fs-5 py-3  ">Manage All Employees</a>
                    <a href="{{ route('stripe.payment')}}" class="list-group-item list-group-item-action @php echo Route::current()->getName() == "stripe.payment"?"bg-primary text-white ":"bg-dark  text-white"; @endphp border-0 fs-5 py-3  ">Manage Payment</a>
                    <a href="{{ route('distance')}}" class="list-group-item list-group-item-action @php echo Route::current()->getName() == "distance"?"bg-primary text-white ":"bg-dark  text-white"; @endphp border-0 fs-5 py-3  ">Manage Distance</a>
                    
                    
               </div>
            </div>
            <div class="col-lg-10 mt-3 gx-4">
                @section('content')
                    
                @show
            </div>
        </div>
    </div>
    @section('js')
        
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>