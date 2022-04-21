<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Include CSS-->
    @include('employee.partials.styles')
    @stack('styles')
    {{-- dynamic title --}}
    <title>NetCoden - @yield('title')</title>
</head>

<body>
    <div class="user-panel">
        <div class="bg-cover"></div>
        <div class="container-md">
            <div class="row">
                {{-- fixed sidebar --}}
                @include('employee.partials.sidebar')
                {{-- right section --}}
                <div class="col-md-8">
                    {{-- applied loader before content --}}
                    <div class="loader-wrapper" id="loader-wrapperX">
                        <span class="loader"><span class="loader-inner"></span></span>
                    </div>
                    <div class="user-details">
                        {{-- fixed header --}}
                        @include('employee.partials.header')
                        {{-- dynamic content --}}
                        @yield('content')
                    </div>
                </div>
                {{-- end right section --}}
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    @include('employee.partials.scripts')
    @stack('scripts')
    {{-- linked ckeditor to use on any page --}}
    @yield('ckeditor')
    @yield('confirmDialog')
    @include('sweetalert::alert')
</body>
<script>
    /* jquery method for loader applied on each dynamic content */
    $(window).on("load", function() {
        $(".loader-wrapper").fadeOut("slow");
    });
</script>

</html>
