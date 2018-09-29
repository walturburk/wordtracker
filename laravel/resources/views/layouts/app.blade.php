<!doctype>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>Static Site - @yield('title')</title>

   @include('partials._stylesheets')

   @yield('stylesheets')

</head>

<body>

    @include('partials._sidebar')


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    @yield('content')
            </div>
        </div>
    </div>



    @include('partials._scripts')

    @yield('scripts')

</body>

</html>
