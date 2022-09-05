@extends('layouts.auth')

<main class="bg-light">
   <title>Sign Up page</title>
   <!-- Section -->
   <section class="form-auth vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
     <div class="container">
       <div class="row justify-content-center form-bg-image">
         <div class="col-12 d-flex align-items-center justify-content-center">
           <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
             <div class="text-center text-md-center mb-6 mt-md-0">
               <h1 class="mb-0 h3">Create Account</h1>
             </div>
             <form action="#" method="POST">
               <!-- Form -->
               <div class="form-group mt-6 mb-6">
                 <label for="email">Your Email</label>
                 <div class="input-group">
                   <span class="input-group-text" id="basic-addon1"><i class="fs-6 bi bi-envelope-fill"></i></span>
                   <input id="email" type="email" class="form-control" placeholder="example@company.com" autofocus
                     required>
                 </div>
               </div>
               <!-- End of Form -->
               <div class="form-group">
                 <!-- Form -->
                 <div class="form-group mb-6">
                   <label for="password">Your Password</label>
                   <div class="input-group">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                     <input type="password" placeholder="Password" class="form-control" id="password">
                   </div>
                 </div>
                 <!-- End of Form -->
                 <!-- Form -->
                 <div class="form-group mb-6">
                   <label for="confirm_password">Confirm Password</label>
                   <div class="input-group">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                     <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password">
                   </div>
                 </div>
                 <!-- End of Form -->
                 <div class="form-check mb-6">
                   <input class="form-check-input" type="checkbox" value="" id="terms">
                   <label class="form-check-label fw-normal mb-0" for="terms">
                     I agree to the <a href="#">terms and conditions</a>
                   </label>
                 </div>
               </div>
               <div class="d-grid">
                 <button type="submit" class="btn btn-primary">Sign in</button>
               </div>
               @csrf
             </form>
             <div class="d-flex justify-content-center align-items-center mt-6">
               <span class="fw-normal">
                 Already have an account?
                 <a href="{{ route('login') }}" class="fw-bold">Login here</a>
               </span>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 </main>
