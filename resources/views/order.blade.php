<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sonder Beverage</title>

          <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>


    <body>
        <!-- header -->
        <nav class="navbar  bg-danger">
            <div class="container-fluid justify-content-center">
                <span class="navbar-brand mb-0 fs-2" style="color:white">Sonder</span>
            </div>
        </nav>

        <!-- main -->
        <div class="container" style="padding-top:100px">
            <form action="order" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" >
                    <div  class="form-text">optional</div>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" >
                    <div  class="form-text">optional</div>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" value="1" class="form-control" id="quantity" name="quantity">         
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>                   
                </div>
                <div class="mb-3">
                    <label for="prov_state" class="form-label">Province/State</label>
                    <input type="text" class="form-control" id="provState" name="provState" required>         
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>                   
                </div>               
                

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-danger">Pay me later</button>             
                    <a class="btn btn-danger" href="{{ url('/') }}" role="button">Home</a>                   
                </div>
            </form>
        </div>
        
      
        <div class="container-fluid fixed-bottom mb-2 bg-danger color-white">
            <p class="fs-4 text-center" style="color:white">Jamie McKeown</p>
        </div>
       
        

    </body>
</html>
