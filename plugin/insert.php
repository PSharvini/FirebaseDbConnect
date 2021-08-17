<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <form action="code.php" method="POST">

                <div class="form-froup">
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                </div>

                <div class="form-froup">
                <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="form-froup">
                <input type="number" name="phoneno" class="form-control" placeholder="Enter phone number">
                </div>

                <div class="form-froup">
                <button type="submit" name="save_push_data" class="btn btn-primary btn block"> Save Data </button>
                </div>
            </form>

        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>