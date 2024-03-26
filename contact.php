<?php
$page = "Contact";
@include("./components/header.php");
@include("./components/navbar-opt.php");
?>

    <main>
        
        <div class="pattern-square"></div>
        
        <section class="py-5 py-lg-8">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                     <h1 class="mb-3">Contact us</h1>
                     <p class="mb-0">Thank you for visiting Naija Talent Battle. If you have a question or require assistance, kindly submit your inquiry using the form below. A dedicated member of our team will strive to respond promptly and efficiently to address your needs.</p>
                  </div>
               </div>
            </div>
         </section>
         

         <section class="mb-xl-9 mb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                     <div class="row g-xl-7 gy-5">
                        <div class="col-md-7 col-12">
                           <div class="card shadow-sm">
                              <div class="card-body">
                                 <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-lg-6 col-md-12">
                                       <label for="contactFirstNameInput" class="form-label">
                                          First Name
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="text" class="form-control" id="contactFirstNameInput" required />
                                       <div class="invalid-feedback">Please enter firstname.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                       <label for="contactLastNameInput" class="form-label">
                                          Last Name
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="text" class="form-control" id="contactLastNameInput" required />
                                       <div class="invalid-feedback">Please enter lastname.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                       <label for="contactEmailInput" class="form-label">
                                          Email
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="email" class="form-control" id="contactEmailInput" required />
                                       <div class="invalid-feedback">Please enter email.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                       <label for="contactPhoneInput" class="form-label">
                                          Phone
                                          <span class="text-danger">*</span>
                                       </label>
                                       <input type="tel" class="form-control" id="contactPhoneInput" required />
                                       <div class="invalid-feedback">Please enter phone.</div>
                                    </div>
                                    <div class="col-md-12">
                                       <label for="contactTextarea" class="form-label">Message</label>
                                       <textarea class="form-control" id="contactTextarea" placeholder="Write to us" rows="4" required></textarea>
                                       <div class="invalid-feedback">Please enter a message.</div>
                                    </div>
                                    <div class="d-grid">
                                       <button class="btn btn-black" type="submit">Send</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-5 col-12">
                           <div class="mb-7">
                              <div class="icon-shape bg-danger bg-opacity-10 rounded icon-md mb-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope text-danger" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                 </svg>
                              </div>
                              <div>
                                 <h4>Email us</h4>
                                 <p class="mb-0">
                                    You can email us directly, and we promise you a prompt response.
                                    <a href="mailto:naijatalentbattle@gmail.com" class="text-danger">naijatalentbattle@gmail.com</a>
                                 </p>
                              </div>
                           </div>
                           <div class="mb-7">
                              <div class="icon-shape bg-danger bg-opacity-10 rounded icon-md mb-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots text-danger" viewBox="0 0 16 16">
                                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    <path
                                       d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                 </svg>
                              </div>
                              <div>
                                 <h4>Call us</h4>
                                 <p class="mb-0">
                                    Talk to one of our customer care executives.<br>
                                    <a href="tel:+2347049066720" class="text-danger">+234 704 906 6720</a> or <a href="tel:+2349056900411" class="text-danger">+234 905 690 0411</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <?php @include("./components/cta.php"); ?>
         
    </main>

<?php @include("./components/footer.php"); ?>