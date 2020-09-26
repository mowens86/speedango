<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php 
// Input $_SESSION info that checks for a session, if null then they shouldn't be able to use this page until a login is created

if(isset($_SESSION['username'])) {
    echo "
    <!-- Movie Browser Section -->
    <section class='bg-black'>
        <div class='container'>
            <h1 class='text-center text-white custom-pt-6'>Movie Browser</h1>
            <form id='movieSearchBar' class='row p-5'>

                <div class='input-group mb-3'>
                    <input type='text' class='form-control' name='movie' placeholder='Search by movie title...'
                        aria-label='Seach movie' aria-describedby='basic-addon2'>
                    <div class='input-group-append'>
                        <button class='btn btn-danger' type='submit'>Search</button>
                    </div>
                </div>
            </form>
    </section>
    <!-- End Movie Browser Section -->
    
    ";

} else {
    header("Location: continue.php");
}

// if(isset($_GET['movie'])){
    
// }

?>



<!-- Movie Genre Section -->
<section class="bg-black">
    <div class="container">
        <h1 class="text-center text-white pt-2">Browse By Genre</h1>
        <div id="movieGenre" class="row p-5">
        
        </div>

</section>
<!-- End Movie Genre Section -->

<script type="module" src="js/movie.js"></script>
<?php include "includes/footer.php" ?>