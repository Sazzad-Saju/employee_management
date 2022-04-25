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
    <video autoplay muted loop id="myVideo">
      <source src="{{asset('employee/img/video.mp4')}}" type="video/mp4">
    </video>
    <div class="login">
        <div class="container-md">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 col-xl-4 col-md-8 col-sm-8 col-12">
                <h1 class="login-title">Employee Login</h1>
                <div class="login-details">
                  <form action="{{route('employee.login.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                      <div class="col-md-12">
                        <label class="label-title" for="email">Email</label>
                        <div class="search-bar">
                          <input type="email" id="email" placeholder="email@example.com" name="office_email" @error('office_email') style="border: 1px solid #ff0e0e" @enderror value="{{old('office_email')}}">
                          <i class="fas fa-envelope-open-text"></i>
                        </div>
                        {{-- validation error via- toastr --}}
                        @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        @if($error=="These credentials do not match our records.")
                                            {{Toastr::error('Invalid Credential!','User Error')}}
                                        @else
                                            {{ Toastr()->info($error, "Validation Error")}}
                                        @endif
                                    @endforeach
                        @endif
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-12">
                        <label class="label-title" for="password">Password</label>
                        <div class="search-bar">
                          <input type="password" id="password" name="password" placeholder="password" @error('password') style="border: 1px solid #ff0e0e" @enderror>
                          <i class="far fa-eye" onclick="togglePass(event)"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-md-12">
                        <button class="login-btn" type="submit">login</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>

    {{-- include scripts --}}
    @include('employee.partials.scripts')
    {{-- togglePass --}}
    <script>
        var state = false;
        function togglePass(e){
            if(state){
                e.target.style.color='#7a797e'
                e.target.previousElementSibling.setAttribute('type','password');
                state = false;
            }else{
                e.target.style.color='#5887ef'
                e.target.previousElementSibling.setAttribute('type','text');
                state = true;
            }
        }
    </script>
  </body>
</html>
