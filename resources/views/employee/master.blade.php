<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    @include('employee.partials.styles')
    @stack('styles')
    <title>NetCoden - @yield('title')</title>
  </head>
  <body>
    <div class="user-panel">
      <div class="bg-cover"></div>
        <div class="container-md">
            <div class="row">
              <!-- ============== Start Left Sidebar =================-->
              @include('employee.partials.sidebar')
              <!-- ============== End Left Sidebar =================-->

              <!-- ============== Start Right Section =================-->
              <div class="col-md-8">
                  <div class="loader-wrapper" id="loader-wrapperX">
                        <span class="loader"><span class="loader-inner"></span></span>
                    </div>
                  {{-- <div class="test-loader">

                  </div> --}}
                <div class="user-details">

                    <!-- Start Top Section -->
                    @include('employee.partials.header')
                    <!-- End Top Section -->

                    <!-- Start Main Section -->
                    @yield('content')

                    <!-- End Main Section -->
                </div>
            </div>
              <!-- ============== End Right Section =================-->
            </div>
        </div>
    </div>

   <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  @include('employee.partials.scripts')
  @stack('scripts')
  {{-- <div class="loader-wrapper" id="loader-wrapperX"> --}}
    {{-- <span class="loader"><span class="loader-inner"></span></span> --}}
  {{-- </div> --}}

  </body>
  <script>
    // $( "#loader-wrapperX" ).load(function() {
    //     $('.loader').fadeOut(250);
    // });
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    });
    // setTimeout(function () {
    //   document.getElementById("loader-wrapperX").style = "display: none";
    // }, 700);
    // $(document).ready( function() {
    //     $('.loader-wrapper').delay(500).fadeOut();
    // });

  </script>
</html>
