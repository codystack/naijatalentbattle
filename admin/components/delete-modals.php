    <!-- Meal Delete Modal Start-->
    <div class="modal fade" id="mealDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this meal?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-meal">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-meal" name="delete_meal_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Meal Delete Modal End-->



    <!-- User Delete Modal Start-->
    <div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this user?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-user">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-user" name="delete_user_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- User Delete Modal End-->