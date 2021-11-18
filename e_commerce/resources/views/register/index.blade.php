<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
  </head>
  <body class="d-flex flex-column h-100">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
     @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
   <main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h1 class="h3 mb-3 fw-normal text-center">Registrasion Form</h1>
                            <form action="/register" method="POST">
                                @csrf
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" required value="{{ old('name') }}">
                                    <label for="name">Name</label>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button class="w-100 mt-2 btn btn-lg btn-primary" type="submit">Register</button>
                            </form>
                            <small class="d-block text-center mt-2">Have account? <a href="/login">Login here!!</a></small>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</main>
 <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('toastr/toastr.min.js') }}"></script>
 <script>
    @if(session()->has('success'))
    toastr.success('{{ session('success') }}', 'BERHASIL!');
   @elseif(session()->has('error'))
   toastr.error('{{ session('error') }}', 'GAGAL!');
   @endif
  </script>
</body>
</html>

