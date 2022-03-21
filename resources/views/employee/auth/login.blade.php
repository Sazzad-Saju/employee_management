<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    @include('employee.partials.styles')

    <title>Login Page</title>
  </head>
  <body>
    <div class="login">
        <div class="container-md">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 col-xl-4 col-md-8 col-sm-8 col-12">
                <h1 class="login-title">Employee Login</h1>
                <div class="login-details">
                  <form action="{{route('employee.dashboard.index')}}" method="GET">
                    @csrf
                    <div class="row mb-3">
                      <div class="col-md-12">
                        <label class="label-title" for="email">Email</label>
                        <div class="search-bar">
                          <input type="email" id="email" placeholder="email@example.com">
                          <i class="fas fa-envelope-open-text"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-12">
                        <label class="label-title" for="password">Password</label>
                        <div class="search-bar">
                          <input type="password" id="password">
                          <i class="far fa-eye"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-md-12">
                        <button class="login-btn">login</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    @include('employee.partials.scripts')

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>