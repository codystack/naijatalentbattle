                    <div class="row">
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-warning text-white text-center card-shadow-primary">
                                <div class="card-body">
                                    <h6 class="font-weight-normal mb-3">Total Applicants</h6>
                                    <?php
                                        $countUsers = mysqli_query($conn, "SELECT id FROM application_form");
                                    echo "<h2 class='mb-0 font-weight-bold'>".number_format(mysqli_num_rows($countUsers), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                                <div class="card-body">
                                    <h6 class="font-weight-normal mb-3">Website Traffic</h6>
                                    <?php
                                       $countTraffic = mysqli_query($conn, "SELECT id FROM traffic");
                                    echo "<h2 class='mb-0 font-weight-bold'>".number_format(mysqli_num_rows($countTraffic), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-info text-white text-center card-shadow-info">
                                <div class="card-body">
                                    <h6 class="font-weight-normal mb-3">Total Revenue</h6>
                                    <?php
                                        $sumTotalRevenue = mysqli_query($conn, "SELECT SUM(amount) AS total_amount FROM application_form");
                                        $row = mysqli_fetch_assoc($sumTotalRevenue);
                                        $sum = $row['total_amount'];
                                         echo "<h2 class='mb-0 font-weight-bold'><span class='smart'> ₦ </span> ".number_format($sum, 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>