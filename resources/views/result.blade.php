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
        <div class="container justify-content-center" style="padding-top:100px">          
                <p class="fs-2">Confirmation</p>
                <p class="fs-4"> First name : {{ $data['firstName'] }}</p>
                <p class="fs-4">Last name : {{ $data['lastName'] }}</p>
                <p class="fs-4">Quantity : {{ $data['quantity'] }}</p>
                <p class="fs-4">City : {{ $data['city'] }}</p>
                <p class="fs-4">Province/State : {{ $data['provState'] }}</p>
                <p class="fs-4">Country : {{ $data['country'] }}</p>  
        </div>
      
        <div class="container-fluid fixed-bottom mb-2 bg-danger color-white">
            <p class="fs-4 text-center" style="color:white">Jamie McKeown</p>
        </div>
       
        

    </body>
</html>