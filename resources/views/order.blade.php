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
            <form action="{{ action('SaleController@index') }}" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName">
                    <div id="emailHelp" class="form-text">optional</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName">
                    <div id="emailHelp" class="form-text">optional</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity">         
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">City</label>
                    <input type="text" class="form-control" id="city">                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Province/State</label>
                    <input type="text" class="form-control" id="provState">         
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Country</label>
                    <input type="text" class="form-control" id="country">                   
                </div>               
                <button type="submit" class="btn btn-danger">Pay me later</button>
            </form>
        </div>
        
      
        <div class="container-fluid fixed-bottom mb-2 bg-danger color-white">
            <p class="fs-4 text-center" style="color:white">Jamie McKeown</p>
        </div>
       
        

    </body>
</html>
