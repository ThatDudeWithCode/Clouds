<?php include 'Includes/header.php'; ?>
    <form class="form-signin" action="login.php" method="post">

        <div class="card">

            <div class="card-body">

                <img class="mb-4" src="assets/images/Logo.png" alt="" width="72">

                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                <div class="form-group">
                    <label for="log_email" class="sr-only">Email Address</label>
                    <input type="email" name="log_email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="log_password" class="sr-only">Password</label>
                    <input type="password" name="log_password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="login_button" class="btn btn-lg btn-primary btn-block" value="Login">
                </div>

            </div>

        </div>

    </form>
<?php include 'Includes/footer.php'; ?>