<?php
    require_once "./auth/registration.php";
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <link rel="stylesheet" href="assets/fonts/css/boxicons.min.css" />

        <link rel="stylesheet" href="assets/css/style.css" />

        <title>Register :: Naija Talent Battle&reg;</title>
        
    </head>

    <body>

      <main>

         <!--Pageheader start-->
         <div class="position-relative h-100">
            <div class="container d-flex flex-wrap justify-content-center align-items-center vh-100 w-lg-50 position-lg-absolute">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        <div class="w-100 align-self-end col-12">
                            <div class="text-center mb-6">
                                <a href="./"><img src="assets/images/ntb-logo.svg" alt="brand" width="100" class="mb-1 mt-2" /></a>
                                <h3 class="mb-1">Bank Transfer Registration</h3>
                                <p class="mb-0"><span class="text-danger fw-bold">NOTE:</span> For Crew Entry, personal and parents details of the leader should be used for the registration.</p>
                            </div>

                            <div class="container mt-5">
                                <div class="progress px-1" style="height: 3px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="step-container d-flex justify-content-between">
                                    <div class="step-circle" onclick="displayStep(1)">1</div>
                                    <div class="step-circle" onclick="displayStep(2)">2</div>
                                    <div class="step-circle" onclick="displayStep(3)">3</div>
                                </div>

                                <form class="g-3 needs-validation mb-6" novalidate id="multi-step-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">

                                    <div class="step step-1">

                                        <div class="row">
                                            <div class="col-md-6 mb-3" style="display: none">
                                                <label for="signupFirstNameInput" class="form-label">
                                                    Amount
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="amount" name="amount" value="3000" required />
                                                <div class="invalid-feedback">Please enter amount.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupFirstNameInput" class="form-label">
                                                    First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John" required />
                                                <div class="invalid-feedback">Please enter first name.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupLastNameInput" class="form-label">
                                                    Last Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe"  required />
                                                <div class="invalid-feedback">Please enter last name.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupEmailInput" class="form-label">
                                                    Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required />
                                                <div class="invalid-feedback">Please enter email.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupPhoneInput" class="form-label">
                                                    Phone Number
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="08012345678" required />
                                                <div class="invalid-feedback">Please enter phone number.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupAgeInput" class="form-label">
                                                    Age
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control" id="age" name="age" placeholder="25" required />
                                                <div class="invalid-feedback">Please enter age.</div>
                                            </div>
                                        
                                            <div class="col-md-6 mb-3">
                                                <label for="signupGenderInput" class="form-label">
                                                    Gender
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="gender" name="gender" required>
                                                    <option selected disabled value="">Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <div class="invalid-feedback">Please select gender</div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="signupAddressInput" class="form-label">
                                                    Residential Address
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="25 Ademola Adetokunbo, VI, Lagos"  required />
                                                <div class="invalid-feedback">Please enter address.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupHealthConditionInput" class="form-label">
                                                    Any Health Condition?
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="healthCondition" name="healthCondition" required>
                                                    <option selected disabled value="">Health Condition</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <div class="invalid-feedback">Please select health condition</div>
                                            </div>

                                            <div class="col-md-6 mb-5">
                                                <label for="signupConditionInput" class="form-label">
                                                    If Yes, Indicate
                                                </label>
                                                <input type="text" class="form-control" id="reasonForCondition" name="reasonForCondition" placeholder="Deaf" />
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-dark next-step">Next <i class="bi bi-arrow-right"></i></button>
                                    </div>

                                    <div class="step step-2">

                                        <div class="row">

                                            <div class="col-md-6 mb-3">
                                                <label for="signupStateOfOriginInput" class="form-label">
                                                    State of Origin
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="stateOfOrigin" name="stateOfOrigin" required>
                                                    <option selected disabled value="">Select State of Origin</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                                    <option value="Anambra">Anambra</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Borno">Borno</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="Abuja">FCT - Abuja</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nasarawa">Nasarawa</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Zamfara">Zamfara</option>
                                                </select>
                                                <div class="invalid-feedback">Please select state of origin</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupOccupationInput" class="form-label">
                                                    Occupation
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Dancer"  required />
                                                <div class="invalid-feedback">Please enter occupation.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupPerformanceTypeInput" class="form-label">
                                                    Performance Type
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="performanceType" name="performanceType" required>
                                                    <option selected disabled value="">Performance Type</option>
                                                    <option value="Solo">Solo</option>
                                                    <option value="Group">Group(maximum crew of 4)</option>
                                                </select>
                                                <div class="invalid-feedback">Please select performance type</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupStageNameInput" class="form-label">
                                                    Stage Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="stageName" name="stageName" placeholder="Marvin Gaye"  required />
                                                <div class="invalid-feedback">Please enter stage name.</div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="signupHobbiesInput" class="form-label">
                                                    Hobbies
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <textarea class="form-control" id="hobbies" name="hobbies" placeholder="Dancing, Cooking...." rows="4" required></textarea>
                                                <div class="invalid-feedback">Please enter your hobbies</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupTalentCategoryInput" class="form-label">
                                                    Talent Category
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select" id="talentCategory" name="talentCategory" required>
                                                    <option selected disabled value="">Talent Category</option>
                                                    <option value="Dance">Dance</option>
                                                    <option value="Singing">Singing</option>
                                                    <option value="Comedy">Comedy</option>
                                                    <option value="Acting">Acting</option>
                                                    <option value="Contortion">Contortion</option>
                                                    <option value="Spoken Words">Spoken Words</option>
                                                    <option value="Creative Arts">Creative Arts</option>
                                                    <option value="Magic">Magic</option>
                                                </select>
                                                <div class="invalid-feedback">Please select talent category</div>
                                            </div>

                                            <div class="col-md-6 mb-5">
                                                <label for="signupParentFullNameInput" class="form-label">
                                                    Parent/Guardian Full Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="parentsFullName" name="parentsFullName" placeholder="Jane Doe" required />
                                                <div class="invalid-feedback">Please enter  parent/guardian full name.</div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-dark prev-step"><i class="bi bi-arrow-left"></i> Previous</button>
                                        <button type="button" class="btn btn-dark next-step">Next <i class="bi bi-arrow-right"></i></button>
                                    </div>

                                    <div class="step step-3">

                                        <div class="row">

                                            <div class="col-md-6 mb-3">
                                                <label for="signupParentEmailInput" class="form-label">
                                                    Parent/Guardian Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" class="form-control" id="parentEmail" name="parentEmail" placeholder="example@gmail.com" required />
                                                <div class="invalid-feedback">Please enter parent/guardian email.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="signupParentPhoneInput" class="form-label">
                                                    Parent/Guardian Phone Number
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="tel" class="form-control" id="parentPhone" name="parentPhone" placeholder="08012345678" required />
                                                <div class="invalid-feedback">Please enter parent/guardian phone number.</div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="signupAddressInput" class="form-label">
                                                    Parent/Guardian Residential Address
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="parentAddress" name="parentAddress" placeholder="25 Ademola Adetokunbo, VI, Lagos"  required />
                                                <div class="invalid-feedback">Please enter parent/guardian address.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="proofOfPayment">
                                                    Upload Quote Photograph
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" required class="form-control" name="proofOfPayment" required id="proofOfPayment">
                                                <div class="invalid-feedback">Please upload proof of payment.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="bankNameInput" class="form-label">
                                                    Bank Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="bankName" name="bankName" placeholder="United Bank of Africa" required />
                                                <div class="invalid-feedback">Please enter bank name.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="accountNameInput" class="form-label">
                                                    Account Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="accountName" name="accountName" placeholder="Emeka Kayode" required />
                                                <div class="invalid-feedback">Please enter account name.</div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="aacountNumberInput" class="form-label">
                                                    Account Number
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="aacountNumber" name="accountNumber" placeholder="2178005104" required />
                                                <div class="invalid-feedback">Please enter account number.</div>
                                            </div>

                                            <div class="mb-5">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label class="form-check-label ms-2 fs-6" for="blockCheck">
                                                        By continuing, you agree to our
                                                        <a href="terms" class="text-danger">Terms and Conditions</a>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <button type="button" class="btn btn-dark prev-step"><i class="bi bi-arrow-left"></i> Previous</button>
                                        <button type="submit" name="reg_btn" class="button btn btn-danger" onclick="this.classList.toggle('button--loading')"><span class="button__text">Complete Registration</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-fixed top-0 end-0 w-50 h-100 d-none d-xl-block vh-100" style="background-image: url(assets/images/loginbg.jpg); background-position: center; background-repeat: no-repeat; background-size: cover"></div>
         </div>
         
      </main>

        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
        <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="assets/libs/headhesive/dist/headhesive.min.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/theme.min.js"></script>
        <script src="assets/js/script.js"></script>


      <?php
        if (isset($_SESSION['success_message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['success_message_title']; ?>",
                    text: "<?php echo $_SESSION['success_message']; ?>",
                    icon: "success",
                    buttons: false,
                    timer: 4000
                }).then(function() {
                    window.location = "regSuccess";
                });
            </script>
            <?php
            unset($_SESSION['success_message']);
        }
    ?>

    <?php
        if (isset($_SESSION['message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['message_title']; ?>",
                    text: "<?php echo $_SESSION['message']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 3000
                }).then(function() {
                    window.location = "./";
                });
            </script>
            <?php
            unset($_SESSION['message']);
        }
    ?>

    <?php
        if (isset($_SESSION['user_message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['user_message_title']; ?>",
                    text: "<?php echo $_SESSION['user_message']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 5000
                }).then(function() {
                    window.location = "portal";
                });
            </script>
            <?php
            unset($_SESSION['user_message']);
        }
    ?>

   </body>
</html>
