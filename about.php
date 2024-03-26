<?php
$page = "About";
@include("./components/header.php");
@include("./components/navbar-opt.php");
?>

    <main>
        <div class="pattern-square"></div>
         
        <section class="py-5 py-lg-8">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                     <div class="text-center">
                        <small class="text-uppercase ls-md fw-semibold">About NTB</small>
                        <h1 class="mb-3 mt-3">Who we are</h1>
                        <p class="mb-0 px-lg-6">
                        Naija Talent Battle is a live entertainment and Talent Contest across all creative genres. Naija Talent Battle is Committed to Creating Positive Platform for talent discovery through her annual Talent Competition that is focused in exposing and recruiting young and talented youths into the Entertainment industry in pursuit of their career. Naija Talent Battle is an engine room for Talent Promotion, Education and Empowerment, serving as a pathway to professionalism.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
        </section>
         
        <section class="mb-7">
            <div class="container">
               <div class="row gy-4">
                  <div class="col-lg-4 col-md-4 col-12">
                     <a href="assets/images/about-img-1.jpeg" class="glightbox rounded-3">
                        <div
                           class="rounded-3 card-lift"
                           style="background-image: url(assets/images/about-img-1.jpeg); background-repeat: no-repeat; height: 350px; background-size: cover"></div>
                     </a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <a href="assets/images/about-img-2.jpeg" class="glightbox rounded-3">
                        <div
                           class="rounded-3 card-lift"
                           style="background-image: url(assets/images/about-img-2.jpeg); background-repeat: no-repeat; height: 350px; background-size: cover"></div>
                     </a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <a href="assets/images/about-img-3.jpeg" class="glightbox rounded-3">
                        <div
                           class="rounded-3 card-lift"
                           style="background-image: url(assets/images/about-img-3.jpeg); background-repeat: no-repeat; height: 350px; background-size: cover"></div>
                     </a>
                  </div>
               </div>
            </div>
        </section>

        <?php 
            @include("./components/logos.php");
            @include("./components/cta.php");
        ?>

    </main>

<?php @include("./components/footer.php"); ?>