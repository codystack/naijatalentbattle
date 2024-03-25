<?php
    @include("components/header.php");
?>
      <main class="position-relative">
         <div class="pattern-square"></div>
         <!--Pageheader start-->
         <section class="py-5 py-lg-8">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                     <div class="text-center">
                        <a href="index.html"><img src="assets/images/logo/brand-icon.svg" alt="brand" class="mb-3" /></a>
                        <h1 class="mb-1">Create Account</h1>
                        <p class="mb-0">Sign up now and get free account instant.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Pageheader end-->
         <!--Sign up start-->
         <section>
            <div class="container">
               <div class="row justify-content-center mb-6">
                  <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                     <div class="card shadow-sm mb-3">
                        <div class="card-body">
                           <form class="needs-validation mb-6" novalidate>
                              <div class="mb-3">
                                 <label for="signupFullnameInput" class="form-label">Full Name</label>
                                 <input type="text" class="form-control" id="signupFullnameInput" required />
                                 <div class="invalid-feedback">Please enter full name</div>
                              </div>

                              <div class="mb-3">
                                 <label for="signupEmailInput" class="form-label">
                                    Email
                                    <span class="text-danger">*</span>
                                 </label>
                                 <input type="email" class="form-control" id="signupEmailInput" required />
                                 <div class="invalid-feedback">Please enter email.</div>
                              </div>
                              <div class="mb-3">
                                 <label for="formSignUpPassword" class="form-label">Password</label>
                                 <div class="password-field position-relative">
                                    <input type="password" class="form-control fakePassword" id="formSignUpPassword" required />
                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                    <div class="invalid-feedback">Please enter password.</div>
                                 </div>
                              </div>
                              <div class="mb-3">
                                 <label for="formSignUpConfirmPassword" class="form-label">Confirm Password</label>
                                 <div class="password-field position-relative">
                                    <input type="password" class="form-control fakePassword" id="formSignUpConfirmPassword" required />
                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                    <div class="invalid-feedback">Please enter password.</div>
                                 </div>
                              </div>
                              <div class="mb-3">
                                 <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="signupCheckTextCheckbox" />
                                       <label class="form-check-label ms-2" for="signupCheckTextCheckbox">
                                          <a href="#">Terms of Use</a>
                                          &
                                          <a href="#">Privacy Policy</a>
                                       </label>
                                    </div>
                                 </div>
                              </div>

                              <div class="d-grid">
                                 <button class="btn btn-primary" type="submit">Sign Up</button>
                              </div>
                           </form>
                        </div>
                     </div>

                     <span>
                        Already have an account?
                        <a href="login" class="text-primary">Sign in here.</a>
                     </span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="text-center">
                        <div class="small mb-5 mb-lg-0 text-body-dark">
                            © <script>document.write(new Date().getFullYear());</script> Naija Talent Battle&reg;. All rights reserved
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!-- Libs JS -->
      <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
      <script src="assets/libs/headhesive/dist/headhesive.min.js"></script>

      <!-- Theme JS -->
      <script src="assets/js/theme.min.js"></script>

      <script src="assets/js/vendors/password.js"></script>
   </body>
</html>
