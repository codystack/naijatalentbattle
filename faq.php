<?php
$page = "FAQ";
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
                            <small class="text-uppercase ls-md fw-semibold">FAQ</small>
                            <h1 class="mb-3 mt-3">Frequently asked questions</h1>
                            <p class="mb-0 px-lg-6">
                                Have a different question and can’t find the answer you’re looking for? <br>Reach out to our support team by <a href="mailto:naijatalentbattle@gmail.com" class="text-danger">sending us an email</a> and we’ll get back to your.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-lg-7 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <div class="accordion" id="accordionExample">

                        <div class="border-top p-3">
                           <h2 class="h5 mb-0">
                              <a
                                 href="#!"
                                 class="text-reset d-flex justify-content-between align-items-center"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapseOneAccount"
                                 aria-expanded="false"
                                 aria-controls="collapseOneAccount">
                                 Are there any age restrictions?
                                 <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                              </a>
                           </h2>
                           <div id="collapseOneAccount" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="mt-3">No. it’s open to all age grades</div>
                           </div>
                        </div>

                        <div class="border-top p-3">
                           <h2 class="h5 mb-0">
                              <a
                                 href="#!"
                                 class="text-reset d-flex justify-content-between align-items-center"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwoAccount"
                                 aria-expanded="false"
                                 aria-controls="collapseTwoAccount">
                                 Is it just for Actors, Singers and Dancers?
                                 <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                              </a>
                           </h2>
                           <div id="collapseTwoAccount" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="mt-3">
                                No. it’s open to all Talent Categories.
                              </div>
                           </div>
                        </div>

                        <div class="border-top p-3">
                           <h2 class="h5 mb-0">
                              <a
                                 href="#!"
                                 class="text-reset d-flex justify-content-between align-items-center"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapseThreeAccount"
                                 aria-expanded="false"
                                 aria-controls="collapseThreeAccount">
                                 Must I be in Delta state to register?
                                 <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                              </a>
                           </h2>
                           <div id="collapseThreeAccount" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="mt-3">
                                No. Naija Talent Battle is a National talent contest and it’s open to all ethnicities in Nigeria.
                              </div>
                           </div>
                        </div>

                        <div class="border-top p-3">
                           <h2 class="h5 mb-0">
                              <a
                                 href="#!"
                                 class="text-reset d-flex justify-content-between align-items-center"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapseFourAccount"
                                 aria-expanded="false"
                                 aria-controls="collapseFourAccount">
                                 Will there be a voting category into the competition?
                                 <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                              </a>
                           </h2>
                           <div id="collapseFourAccount" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="mt-3">
                                Yes. There’s a voting segment into the competition as part of contestants task.
                              </div>
                           </div>
                        </div>

                        <div class="border-top p-3">
                           <h2 class="h5 mb-0">
                              <a
                                 href="#!"
                                 class="text-reset d-flex justify-content-between align-items-center"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapseFiveAccount"
                                 aria-expanded="false"
                                 aria-controls="collapseFiveAccount">
                                 Are we going to camp?
                                 <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                              </a>
                           </h2>
                           <div id="collapseFiveAccount" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="mt-3">
                                Yes. A free accommodation has been provided by NTB team in the host city (Asaba), for contestants final pre-camp activities prior to the grand finale.
                              </div>
                           </div>
                        </div>

                        <div class="border-top p-3">
                           <h2 class="h5 mb-0">
                              <a
                                 href="#!"
                                 class="text-reset d-flex justify-content-between align-items-center"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapseSixAccount"
                                 aria-expanded="false"
                                 aria-controls="collapseSixAccount">
                                 Can a crew register?
                                 <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                              </a>
                           </h2>
                           <div id="collapseSixAccount" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="mt-3">
                                Yes. The competition is opened to both individual and Crew/group acts, with a maximum of 4 members in the Crew/Group.
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
        </section>

        <?php 
            @include("./components/cta.php"); 
        ?>
    </main>


<?php @include("./components/footer.php"); ?>