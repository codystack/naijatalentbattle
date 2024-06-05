<?php
    session_start();

    if ($_GET['status'] !== "success") {
        header("location:javascript://history.go(-1)");
    }

    if (!isset($_SESSION['regNumber'])) {
        header('location: ./register');
    }
    if (isset($_GET['close'])) {
        session_destroy();
        unset($_SESSION['regNumber']);
        header("location: ./register");
    }
?>
<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="Naija, Talent, Hunt, Nigeria, Talent Hunt, Battle, 9ja" />
        <meta name="description" content="Naija Talent Battle is a live entertainment and Talent Contest across all creative genres. Naija Talent Battle is Committed to Creating Positive Platform for talent discovery through her annual Talent Competition that is focused in exposing and recruiting young and talented youths into the Entertainment industry in pursuit of their career. Naija Talent Battle is an engine room for Talent Promotion, Education and Empowerment, serving as a pathway to professionalism." />
        <meta name="author" content="Webify" />

        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/favicon.JPG" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.JPG" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.JPG" />
        <link rel="manifest" href="assets/images/site.webmanifest.txt" />
        <link rel="shortcut icon" href="assets/images/favicon.JPG" />
        <meta name="msapplication-TileColor" content="#8b3dff" />

        <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="assets/libs/scrollcue/scrollCue.css" />
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assets/libs/glightbox/dist/css/glightbox.min.css" />
        <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="assets/fonts/css/boxicons.min.css" />

        <link rel="stylesheet" href="assets/css/style.css" />

        <title>Registration Successful :: Naija Talent Battle&reg;</title>

        <style>
            @supports (animation: grow .5s cubic-bezier(.25, .25, .25, 1) forwards) {
                .tick {
                    stroke-opacity: 0;
                    stroke-dasharray: 29px;
                    stroke-dashoffset: 29px;
                    animation: draw .5s cubic-bezier(.25, .25, .25, 1) forwards;
                    animation-delay: .6s
                }

                .circle {
                    fill-opacity: 0;
                    stroke: #219a00;
                    stroke-width: 16px;
                    transform-origin: center;
                    transform: scale(0);
                    animation: grow 1s cubic-bezier(.25, .25, .25, 1.25) forwards;
                }
            }

            @keyframes grow {
                60% {
                    transform: scale(.8);
                    stroke-width: 4px;
                    fill-opacity: 0;
                }
                100% {
                    transform: scale(.9);
                    stroke-width: 8px;
                    fill-opacity: 1;
                    fill: #219a00;
                }
            }

            @keyframes draw {
                0%, 100% { stroke-opacity: 1; }
                100% { stroke-dashoffset: 0; }
            }

        </style>
        
    </head>

    <body class="bg-light">

        <main>
            <div class="position-relative h-100">
                <div class="container d-flex flex-wrap justify-content-center align-items-center vh-100 w-lg-50 position-lg-absolute">
                    <div class="col-lg-10">
                        <div class="row justify-content-center">
                            <div class="w-100 align-self-end col-12">
                                <div class="container mt-5">
                                    <div class="row g-3">
                                        <div class="col">
                                            <div class="text-center mt-20">
                                                <div class="svg-container">
                                                    <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                                        <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                                        <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                                                    </svg>
                                                </div>
                                                <div class="mt-6">
                                                    <h5 class="h2 mb-1 fw-semibold">Registration Successful👏</h5>
                                                    <p class="mb-3">Copy the registration number below and keep it safe.</p>
                                                    <p class="mb-0">Reg No. <span class="fw-bold text-dark"><?php echo $_SESSION['regNumber']; ?></span></p>
                                                    <p class="mb-3 text-danger">Send a screenshot for proof of payment via <br>Whatsapp to +2347049066720 if you registered via bank transfer.</p>
                                                    <form method="get" style="margin-top: 20px">
                                                        <button class="btn btn-md btn-danger mt-5" name="close" type="submit"><i class="bi bi-arrow-left me-2"></i>Go back</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-fixed top-0 end-0 w-50 h-100 d-none d-xl-block vh-100" style="background-image: url(assets/images/loginbg.jpg); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
            </div>
        </main>

        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="assets/libs/headhesive/dist/headhesive.min.js"></script>
        <script src="assets/js/theme.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        <script src="assets/js/vendors/swiper.js"></script>
        <script src="assets/libs/glightbox/dist/js/glightbox.min.js"></script>
        <script src="assets/libs/scrollcue/scrollCue.min.js"></script>
        <script src="assets/js/vendors/scrollcue.js"></script>

    </body>
</html>