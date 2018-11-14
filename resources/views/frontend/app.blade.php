<!DOCTYPE html>
<html lang="es" dir="ltr">
@include('frontend/parts/head')
      <body>
@include('frontend/parts/header')
      </body>
      @yield('content')
@include('frontend/parts/footer')
@include('frontend/parts/scripts')
</html>
