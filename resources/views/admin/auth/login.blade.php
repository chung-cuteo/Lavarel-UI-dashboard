@extends('layouts.auth')

<main class="bg-light">
  <section class="form-auth vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center form-bg-image">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <div class="text-center text-md-center mb-6 mt-md-0">
              <h1 class="mb-3 h3">Login</h1>
              <p>You can see Demo version with<br>
                email: <strong>demo@gmail.com</strong> <br>
                pass: <strong>demo@gmail.com</strong>
              </p>
            </div>
            <form action="{{route('handle-login') }}" class="mt-6" method="POST">
              <div class="form-group mb-6">
                <label for="email">Your Email</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1"><i class="fs-6 bi bi-envelope-fill"></i></span>
                  <input type="email" name="email" class="form-control" placeholder="example@company.com" id="email" autofocus>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group mb-6">
                  <label for="password">Your Password</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="pass" placeholder="Password" class="form-control" id="password">
                  </div>
                </div>

                <div class="d-flex justify-content-between align-items-top mb-6">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="remember">
                    <label class="form-check-label mb-0" for="remember">
                      Remember me
                    </label>
                  </div>
                  <div><a href="{{ route('forgot-password') }}" class="small text-right">Lost
                      password?</a></div>
                </div>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
              @csrf
            </form>

            <div class="d-flex justify-content-center align-items-center mt-6">
              <span class="fw-normal">
                Not registered?
                <a href="{{ route('register') }}" class="fw-bold">Create account</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
