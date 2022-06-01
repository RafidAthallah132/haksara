<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')

    {{-- Reminder sedikit perubahan design dari template dari sini --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="page-header-fixed">

    @include('partials.analytics')

   

    <div class="clearfix"></div>
    <div>
    @include('partials.header')
    </div>
    <div class="page-container">

        @if(Auth::user()->isAdmin())
        <div class="page-sidebar-wrapper">
            @include('partials.sidebar')
        </div>
        

        <div class="page-content-wrapper">
            <div class="page-content">

                @if (isset($siteTitle))
                    <h3 class="page-title">
                        {{ $siteTitle }}
                    </h3>
                @endif

                <div class="row">
                    <div class="col-md-12">

                        @if (Session::has('message'))
                            <div class="note note-info">
                                <p>{{ Session::get('message') }}</p>
                            </div>
                        @endif
                        @if ($errors->count() > 0)
                            <div class="note note-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @endif
                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-to-top" style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
    <button type="submit">Logout</button>
    {!! Form::close() !!}

    @include('partials.javascripts')
</body>

</html>
