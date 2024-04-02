<?php
include "./components/header.php";
include "./components/topnavbar.php";

    $id = $_GET['id'];
    $select_query = "SELECT * FROM application_form WHERE id='$id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $email = $row['email'];
            $phone = $row['phone'];
            $age = $row['age'];
            $gender = $row['gender'];
            $address = $row['address'];
            $healthCondition = $row['healthCondition'];
            $reasonForCondition = $row['reasonForCondition'];
            $stateOfOrigin = $row['stateOfOrigin'];
            $occupation = $row['occupation'];
            $performanceType = $row['performanceType'];
            $stageName = $row['stageName'];
            $hobbies = $row['hobbies'];
            $talentCategory = $row['talentCategory'];
            $parentsFullName = $row['parentsFullName'];
            $parentEmail = $row['parentEmail'];
            $parentPhone = $row['parentPhone'];
            $parentAddress = $row['parentAddress'];
            $proofOfPayment = $row['proofOfPayment'];
            $accountNumber = $row['accountNumber'];
            $accountName = $row['accountName'];
            $bankName = $row['bankName'];
            $amount = $row['amount'];
            $transaction_ref = $row['transaction_ref'];
            $payment_method = $row['payment_method'];
            $regNumber = $row['regNumber'];
        }
    }
?>

        <div class="container-fluid page-body-wrapper">

            <?php include "./components/side-navbar.php"; ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row grid-margin">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="display-4 text-primary font-weight-bold"><?php echo $firstName; ?> <?php echo $lastName; ?></h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <div class="text-center mb-10 mt-5">
                                        <div class="mb-3">
                                            <img alt="" src="https://naijatalentbattle.ng/<?php echo $proofOfPayment; ?>" class="img-responsive img-xl rounded-circle">
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-md-3 col-4 mx-auto d-flex justify-content-center mt-3 bg-light-primary px-1 py-2 wallet-border">
                                            <div>
                                                <span class="fs-6">Reg No.</span> <span class="fw-bold"><?php echo $regNumber; ?> </span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="container mt-10 mb-10">
                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Full Name</span>
                                                <h5 class="mt-2"><?php echo $firstName; ?> <?php echo $lastName; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Email</span>
                                                    <h5 class="mt-2"><?php echo $email; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Phone Number</span>
                                                <h6 class="mt-2"><?php echo $phone; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Age</span>
                                                    <h6 class="mt-2"><?php echo $age; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Gender</span>
                                                <h6 class="mt-2"><?php echo $gender; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Residential Address</span>
                                                    <h6 class="mt-2"><?php echo $address; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Any Health Condition?</span>
                                                <h6 class="mt-2"><?php echo $healthCondition; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Occupation</span>
                                                    <h6 class="mt-2"><?php echo $occupation; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">State of Origin</span>
                                                <h6 class="mt-2"><?php echo $stateOfOrigin; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Performance Type</span>
                                                    <h6 class="mt-2"><?php echo $performanceType; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Stage Name</span>
                                                <h6 class="mt-2"><?php echo $stageName; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Hobbies</span>
                                                    <h6 class="mt-2"><?php echo $hobbies; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Talent Category</span>
                                                <h6 class="mt-2"><?php echo $talentCategory; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Indicate Health Condition</span>
                                                    <h6 class="mt-2"><?php if(!$reasonForCondition){echo 'NIL';}else{ echo $reasonForCondition;} ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Parent/Guardian Full Name</span>
                                                <h6 class="mt-2"><?php echo $parentsFullName; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Parent/Guardian Email</span>
                                                    <h6 class="mt-2"><?php echo $parentEmail; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold"> Parent/Guardian Phone Number</span>
                                                <h6 class="mt-2"><?php echo $parentPhone; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Parent/Guardian Residential Address</span>
                                                    <h6 class="mt-2"><?php echo $parentAddress; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Transaction Reference</span>
                                                <h6 class="mt-2"><?php echo $transaction_ref; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Bank Name</span>
                                                    <h6 class="mt-2"><?php echo $bankName; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Account Name</span>
                                                <h6 class="mt-2"><?php echo $accountName; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Account Number</span>
                                                    <h6 class="mt-2"><?php echo $accountNumber; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt-4 no-print mb-10">
                                        <div class="text-center mx-auto">
                                            <button href="?id=<? echo $meal_id; ?>" class="btn btn-danger"> Delete Application </button>             
                                            <button class="btn btn-primary" onclick="history.back()"> Go back</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            


<?php include "./components/footer.php"; ?>