<?php
   $page = "Home";
	@include("components/header.php");
	@include("components/navbar.php");
?>
      <main>
         
         <section class="jarallax py-9 hero-agency vh-100" data-jarallax data-speed="0.4">
            <img class="jarallax-img" src="assets/images/hero.jpg" alt="background" />
            <div class="position-absolute start-0 end-0">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-5 col-lg-7 col-12" data-cue="zoomIn">
                        <div class="text-center text-lg-start">
                           <div class="mb-4 text-white-stable">
                              <small class="text-uppercase ls-lg">The stakes are raised!</small>
                              <h1 class="mb-3 mt-3 display-3 text-white-stable">Who will rise to the challenge?</h1>
                              <p class="lead mb-0">This season offers a bigger star prize, but only one can claim it. Will you be the champion?</p>
                           </div>

                           <a href="register" class="btn btn-danger">Register Now</a>
                           <a href="register" class="btn btn-outline-white">Vote</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>


         <!--Modern tech start-->
         <section class="py-xl-9 py-5 bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
                     <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                        <small class="text-uppercase ls-md fw-semibold">modern tech stack</small>
                        <h2 class="my-3">Building the web</h2>
                        <p class="mb-0 text-body">
                           We work with cutting-edge technologies designed to solve your product requirements. Focus on finding solutions for your business needs while we handle the technical aspect.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="my-xl-9 my-5">
            <div class="container">
               <div class="row g-4">
                  <div class="col-xl-5 col-lg-6 col-12" data-cue="slideInLeft">
                     <div class="mb-4">
                        <small class="text-uppercase ls-md fw-semibold">who we are</small>
                        <h2 class="h1 mt-4 mb-3">Believes in the power of creative strategy.</h2>
                        <p class="mb-3">We are a web design and development agency. We specialise in bridging the gap between our clients and their goals.</p>
                        <p class="mb-0">Consequat mauris nunc congue nisi vitae suscipit tellus mauris a. Amet mattis vulputate enim nulla aliquet porttitor lacus.</p>
                     </div>

                     <a href="about.html" class="icon-link icon-link-hover">
                        More about us
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                           <path
                              fill-rule="evenodd"
                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                     </a>
                  </div>
                  <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                     <div class="row g-4" data-cues="slideInUp" data-delay="1000">
                        <div class="col-lg-6 col-md-6 col-12">
                           <a href="#!">
                              <div
                                 class="rounded-3 card-lift"
                                 style="background-image: url(assets/images/about-img/about-grid-img-2.jpg); background-repeat: no-repeat; height: 386px; background-size: cover"></div>
                           </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                           <a href="#!">
                              <div
                                 class="mb-4 rounded-3 card-lift"
                                 style="background-image: url(assets/images/about-img-1.jpeg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                           </a>
                           <a href="#!">
                              <div
                                 class="mb-2 rounded-3 card-lift"
                                 style="background-image: url(assets/images/about-img-2.jpeg); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Who we are end-->
         
         <?php 
            @include("./components/logos.php"); 
            @include("./components/cta.php"); 
         ?>

      </main>

<?php @include("./components/footer.php"); ?>