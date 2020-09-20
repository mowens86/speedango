<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<!-- Login Section -->
<section>
    <div class="bg-img">
        <div class="pt-custom-login">
            <div class="login-white-bg pt-3">
                <h1 class="display-5 text-center">Login</h1>
                <form class="p-3" action="" method="POST">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>

                    <div class="input-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="input-group pt-3">
                        <button class="btn btn-info btn-lg btn-block" name="login" type="submit">Submit</button>
                    </div>

                    
                    <div class="input-group">
                        <p class="m-auto pt-2">Not a member? <a href="" class="link-color">Register</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Login Section -->

<?php include "includes/footer.php" ?>