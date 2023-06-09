<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
      @if (request()->is('admin/login'))
      Login
      @endif
      @if (request()->is('admin/regist'))
      Registrasi
      @endif
      - SanAccount</title>

        <link rel="shortcut icon" href="{{asset('images/snow.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/snow.ico')}}" type="image/png">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              @if (request()->is(
                'admin/login'
              ))
                  
              <form action="/admin/login-proses" method="post">
                @csrf
                @if('unlogin')
                    <span class="text-danger">Silahkan Login Terlebih Dahulu</span>
                @endif
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form1Example13" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                  @error('email')
                  <span class="invalid-feedback d-block">{{$message}}</span>
                    @enderror
                  <label class="form-label" for="form1Example13">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form1Example23" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                  @error('password')
                  <span class="invalid-feedback d-block">{{$message}}</span>
                    @enderror
                  <label class="form-label" for="form1Example23">Password</label>
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  
                  <a href="/admin/regist">Belum Punya Akun?</a>
                </div>
      
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
      
                {{-- <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
      
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                  role="button">
                  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                  role="button">
                  <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> --}}
      
              </form>
              @endif
              @if (request()->is(
                'admin/regist',
                ))
                  
              <form action="/admin/insert-user" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" name="name" id="form1Example13" class="form-control form-control-lg @error('name') is-invalid @enderror" />
                  <input type="number" name="role_id" value="2" id="form1Example13" class="d-none" />
                  @error('name')
                  <span class="invalid-feedback d-block">{{$message}}</span>
                    @enderror
                  <label class="form-label" for="form1Example13">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form1Example13" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                  @error('email')
                  <span class="invalid-feedback d-block">{{$message}}</span>
                    @enderror
                  <label class="form-label" for="form1Example13">Email address</label>
                </div>
                
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form1Example23" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                  @error('password')
                  <span class="invalid-feedback d-block">{{$message}}</span>
                  @enderror
                  <label class="form-label" for="form1Example23">Password</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="file" name="foto" id="form1Example13" class="form-control form-control-lg @error('foto') is-invalid @enderror" />
                  @error('foto')
                  <span class="invalid-feedback d-block">{{$message}}</span>
                    @enderror
                  <label class="form-label" for="form1Example13">Foto</label>
                </div>
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  
                  <a href="/admin/login">Punya Akun?</a>
                </div>
      
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
      
                {{-- <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
      
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                  role="button">
                  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
                <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                  role="button">
                  <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> --}}
      
              </form>
              @endif

            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

     
</body>
</html>