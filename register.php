<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<?php 

if(isset($_POST['register'])){
    $user_email = $_POST['user_email'];
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];

    $query = "INSERT INTO users(user_email, username, user_password) ";
    $query .= "VALUES('{$user_email}', '{$username}', '{$user_password}' ) ";
    $create_user_query = mysqli_query($connection, $query);

    confirmQuery($create_user_query);

    $message = "Succesffuly registered!";
} else {
    $message = "";
}

?>

<!-- Login Section -->
<section>
    <div class="bg-img">
        <div class="pt-custom-register">
            <div class="register-white-bg pt-3">
                <h1 class="display-5 text-center">Register</h1>
                <form class="p-3" action="" method="POST">

                <p class="text-center"><?php echo $message; ?></p>

                <div class="form-group">
                        <input type="email" name="user_email" class="form-control" placeholder="Email*" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username*">
                    </div>

                    <div class="input-group">
                        <input type="password" name="user_password" class="form-control" placeholder="Password*">
                    </div>

                    <div class="input-group pt-3">
                        <button class="btn btn-info btn-lg btn-block" name="register" type="submit">Submit</button>
                    </div>

                    
                    <div class="input-group">
                        <p class="m-auto pt-2">Already a member? <a href="login.php" class="link-color">Login</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Login Section -->

<?php include "includes/footer.php" ?>