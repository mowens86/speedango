<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php 

if(isset($_SESSION['username'])) {
    echo "
    <!-- Movie Browser Section -->
    <section class='bg-black'>
        <div class='container'>
            <h1 class='text-center text-white custom-pt-6'>Movie Browser</h1>
            <form id='movieSearchBar' class='row p-5' action=''>

                <div class='input-group mb-3'>
                    <input type='text' class='form-control' name='query' placeholder='Search by movie title...'
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

?>

<!-- Search Results Section -->
<section class="bg-black">
    <div class="container">
        <div id="movieResults" class="container text-white">

            <?php
             
            if(!empty($_GET['query'])){
                $query = urlencode($_GET['query']);
                $search_url = 'https://api.themoviedb.org/3/search/movie?api_key=95560dd40ad749348a5fa29960e0e8ae&language=en-US&query=' . $query . '&page=1&include_adult=false';
                $search_json = file_get_contents($search_url);
                $search_array = json_decode($search_json, true);

                echo "<h1 class='text-center text-white'>Results</h1>";
                echo "<p class='text-white'>" . print_r($search_array) . "</p>";
            
            }

            ?>
            
            
        </div>


<!-- End Search Results Section -->

<!-- Movie Genre Section -->
    <div class="container">
        <h1 class="text-center text-white pt-2">Browse By Genre</h1>
        <div id="movieGenre" class="row p-5">
        
        </div>

</section>
<!-- End Movie Genre Section -->

<script type="module" src="js/search.js"></script>
<?php include "includes/footer.php" ?>