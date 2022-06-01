<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="page-header-fixed">

    {{-- Perubahan sementara - mau hapus yang dirasa tidak penting
    masih tahap try error vvvv --}}

    {{-- @include('partials.analytics') --}}

    {{-- @include('partials.header') --}}
    
    <div style="margin-top: 5%;"></div>

    <div class="container-fluid">
        @yield('content')
    </div>

    <div class="scroll-to-top"
         style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')

</body>
</html>