<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<!-- Hero Section -->
<?php 
if(isset($_SESSION['username'])) {
    echo "
        <section>
            <div class='bg-img'>
                <div class='pt-custom'>
                    <div class='white-bg text-center pt-3'>
                        <h1 class='display-5'>Plan a Flick</h1>
                        <p>Browse, Ratings, & More</p>
                        <a class='btn btn-info btn-lg' href='search.php' role='button'>Browse Movies</a>
                    </div>
                </div>
            </div>
        </section>
    ";

} else {
    echo "
        <section>
            <div class='bg-img'>
                <div class='pt-custom'>
                    <div class='white-bg text-center pt-3'>
                        <h1 class='display-5'>Plan a Flick</h1>
                        <p>Browse, Ratings, & More</p>
                        <a class='btn btn-info btn-lg' href='login.php' role='button'>Login</a>
                        <a class='btn btn-danger btn-lg' href='register.php' role='button'>Register</a>
                    </div>
                </div>
            </div>
        </section>
    ";
}

?>
<!-- End Hero Section -->

<!-- Top Movie Rating Section -->
<section class="bg-black">
    <div class="container">
    <h1 class="text-center text-white pt-5">Today's Most Popular Movies</h1>
        <div id="topMovies" class="row p-5">

        </div>
</section>
<!-- End Top Rating Section -->

<!-- Scripts JS -->
<script src="js/index.js"></script>

<?php include "includes/footer.php" ?>