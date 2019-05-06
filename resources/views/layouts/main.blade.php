<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.header')
</head>
<body>
    @include('layouts.menu')

    @yield('contenido')

    @include('layouts.footer')

    <!-- Bact to top -->
    <div class="back-top">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>

    @include('layouts.scripts')

</body>