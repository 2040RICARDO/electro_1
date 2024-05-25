<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">

  {{ Html::style('assets/css/bootstrap.min.css') }}
  {{ Html::style('assets/css/materialdesignicons.min.css') }}
  {{ Html::style('assets/css/login.css') }}

</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="{{asset('assets/images/6.png')}}" alt="login" class="login-card-img">
          
          </div>
          <div class="col-md-7">
            <div class="card-body">
           
              <p class="login-card-description">LOGIN</p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit"  class="btn btn-block login-btn mb-4"  value="Ingresar">Ingresar</button>
                </form>
                <a href="{{route('welcome')}}" class="forgot-password-link">Principal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  {{ Html::script('assets/js/jquery-3.4.1.min.js') }}
  {{ Html::script('assets/js/popper.min.js') }}
  {{ Html::script('assets/js/bootstrap.min.js') }}

</body>
</html>
