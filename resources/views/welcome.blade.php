<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Zdravstvena ustanova</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('partials.header')

        <main role="main">
          <div class="container">
            <section class="jumbotron text-center">
              <div class="container">
                <h1 class="jumbotron-heading">Dobrodosli!</h1>
                <p class="lead text-muted">Za administraciju doktora i pacijenata se ulogujte.</p>
                <p>
                  @auth
                    <a href="{{ route('home') }}" class="btn btn-primary my-2">Administracija</a>
                  @else
                    <a href="{{ route('login') }}" class="btn btn-primary my-2">Uloguj se!</a>
                  @endauth
                </p>
              </div>
            </section>
          </div>
        </main>

        @include('partials.footer')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
