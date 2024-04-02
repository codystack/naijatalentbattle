<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/delete.php"; 
?>

        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>

            <div class="main-panel"> 
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="display-4 text-primary font-weight-bold">Applications</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <?php
                                            if (isset($_SESSION['error_message'])) {
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php
                                                        echo $_SESSION['error_message'];
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['error_message']);
                                            }
                                        ?>
                                        <?php
                                            if (isset($_SESSION['success_message'])) {
                                                ?>
                                                <div class="alert alert-success" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php echo $_SESSION['success_message']; ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['success_message']);
                                            }
                                        ?>
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                  <tr>
                                                        <th class="font-weight-bold">S/N</th>
                                                        <th class="font-weight-bold">Name</th>
                                                        <th class="font-weight-bold">Phone</th>
                                                        <th class="font-weight-bold">REG Number</th>
                                                        <th class="font-weight-bold">Payment Method</th>
                                                        <th class="font-weight-bold">Application Date</th>
                                                        <th class="font-weight-bold text-right">Action</th>
                                                  </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $u_id = 1;
                                                    $select_query = "SELECT * FROM application_form ORDER BY dateCreated ASC";
                                                    $result = mysqli_query($conn, $select_query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $id = $row['id'];
                                                            $firstName = $row['firstName'];
                                                            $lastName = $row['lastName'];
                                                            $phone = $row['phone'];
                                                            $regNumber = $row['regNumber'];
                                                            $payment_method = $row['payment_method'];
                                                            $dateCreated = $row['dateCreated'];
                                                            $date = strtotime($dateCreated);
                                                                $phone = $row['phone'];
                                                                switch ($status) {
                                                                    case "Inactive";
                                                                        $class  = 'bg-warning';
                                                                        $text = 'text-black';
                                                                        break;
                                                                    case "Active";
                                                                        $class  = 'bg-success';
                                                                        $text = 'text-black';
                                                                        break;
                                                                    default:
                                                                        $class  = '';
                                                                }
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $u_id; ?></td>
                                                        <td><?php echo $firstName; ?> <?php echo $lastName ?></td>
                                                        <td><?php echo $phone; ?></td>
                                                        <td><?php echo $regNumber; ?></td>
                                                        <td><?php echo $payment_method; ?></td>
                                                        <td><?php echo date('j F Y', $date); ?></td>
                                                        <td class="text-right">
                                                            <a href="view-application?id=<?php echo $id; ?>" class='btn btn-dark' style="padding: 0.5rem 1rem;">View</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $u_id++;
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
                </div>



<?php 
include "./components/delete-modals.php";
include "./components/footer.php"; 
?>