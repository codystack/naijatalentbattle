<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>
        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="mb-3 mb-lg-0">
                                <h1 class="mb-2 h2 font-weight-bold">Hey <?php echo $_SESSION['first_name']; ?>,</h1>
                                <h5 class="text-dark mt-0 lead" id="greet"></h5>
                            </div>
                        </div>
                    </div>
                    <?php include "./components/analytics.php";?>

                    <div class="row grid-margin">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3 d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="card-title text-primary">Latest Applications</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <a href="applications" class="btn btn-sm btn-dark d-none d-sm-inline-flex"> <span class="pe-2">View all</span><span> <i class="bi bi-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th class="font-weight-bold">S/N</th>
                                                    <th class="font-weight-bold">Name</th>
                                                    <th class="font-weight-bold">Amount</th>
                                                    <th class="font-weight-bold">REG Number</th>
                                                    <th class="font-weight-bold">Payment Method</th>
                                                    <th class="text-right font-weight-bold">Application Date</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                                $dash_id = 1;
                                                $select_query = "SELECT * FROM application_form ORDER BY dateCreated DESC LIMIT 10";
                                                    $result = mysqli_query($conn, $select_query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $id = $row['id'];
                                                            $firstName = $row['firstName'];
                                                            $lastName = $row['lastName'];
                                                            $amount = $row['amount'];
                                                            $regNumber = $row['regNumber'];
                                                            $payment_method = $row['payment_method'];
                                                            $dateCreated = $row['dateCreated'];
                                                            $date = strtotime($dateCreated);
                                                ?>
                                                <tr>
                                                    <td><?php echo $dash_id; ?></td>
                                                    <td><?php echo $firstName; ?> <?php echo $lastName; ?></td>
                                                    <td>₦<?php echo number_format($amount, 0, '.', ','); ?></td>
                                                    <td><?php echo $regNumber; ?></td>
                                                    <td><?php echo $payment_method; ?></td>
                                                    <td class="text-right"><?php echo date('j F Y', $date); ?></td>
                                                </tr>
                                                <?php
                                                $dash_id++;
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php include "./components/footer.php"; ?>