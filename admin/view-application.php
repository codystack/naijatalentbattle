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
            $phone = $row['ingredients'];
            $instructions = $row['instructions'];
            $notes = $row['notes'];
            $nutrition = $row['nutrition'];
            $short_description = $row['short_description'];
            $long_description = $row['long_description'];
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
                                            <img alt="" src="<?php echo $meal_image; ?>" class="img-responsive img-xl">
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-md-3 col-4 mx-auto d-flex justify-content-center mt-3 bg-light-primary px-1 py-2 wallet-border">
                                            <div>
                                                <span class="fs-6">STATUS:</span>
                                            </div>
                                            &nbsp;
                                            <div style="">
                                                <span class="badge <? echo $class; ?> text-xs <? echo $text; ?>"><?php echo $status; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="container mt-10 mb-10">
                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Full Name</span>
                                                <h5 class="mt-2"><?php echo $title; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Email</span>
                                                    <h5 class="mt-2"><?php echo $meal_code; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Phone Number</span>
                                                <h6 class="mt-2"><?php echo $ingredients; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Age</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Gender</span>
                                                <h6 class="mt-2"><?php echo $notes; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Residential Address</span>
                                                    <h6 class="mt-2"><?php echo $nutrition ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Any Health Condition?</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Occupation</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">State of Origin</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Performance Type</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Stage Name</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Hobbies</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Talent Category</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Parent/Guardian Email</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold"> Parent/Guardian Phone Number</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Parent/Guardian Residential Address</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Proof of Payment</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Bank Name</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Account Name</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Account Number</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6 font-weight-bold">Talent Category</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">Parent/Guardian Email</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 no-print mb-10">
                                        <div class="text-center mx-auto">
                                            <a href="edit-meal?id=<? echo $meal_id; ?>" class="btn btn-primary"> Edit Meal </a>             
                                            <button class="btn btn-danger" onclick="history.back()"> Go back</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            


<?php include "./components/footer.php"; ?>