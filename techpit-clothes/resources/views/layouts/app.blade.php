<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
    <head>
        <title>@yield('title') | {{ config('app.name','Laravel')}}</title>
        <!-- Fonts -->
        <link rel="stylesheet"  href="{{asset('/css/app.css')}}">
    </head>
    <body>
      <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ route('product.index')}}">
            {{config('app.name', 'Laravel')}}</a>
            <a class="fas fa-shopping-cart" href="{{ route('cart.index')}}"></a>
          </div>
        </nav>
        @yield('content')
    </body>
</html>
