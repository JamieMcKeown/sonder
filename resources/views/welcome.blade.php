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
        <div class="container-fluid" style="padding-top:20%">
            <div class="card m-auto" style="width: 55%">
                <img src="/img/fbBack.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Sonder Tonic</h5>
                    <p class="card-text">The most delicious mix of Sangria and Tonic Water</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
      
        <div class="container-fluid fixed-bottom mb-2 bg-danger color-white">
            <p class="fs-4 text-center" style="color:white">Jamie McKeown</p>
        </div>
       
        

    </body>
</html>
