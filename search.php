<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php 

if(isset($_SESSION['username'])) {
    echo "
    <!-- Movie Browser Section -->
    <section class='bg-black'>
        <div class='container'>
            <h1 class='text-center text-white custom-pt-6'>Movie Browser</h1>
            <form id='movieSearchBar' class='row pt-5 pb-2 m-0' action=''>

                <div class='input-group mb-1'>
                    <input type='text' id='search' class='form-control' name='query' placeholder='Search by movie title...'
                        aria-label='Seach movie' aria-describedby='basic-addon2'>   
                    <div class='input-group-append'>
                        <button class='btn btn-danger' type='submit'>Search</button>
                    </div>
                </div>
            </form>
            <div id='match-list'></div> 
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
    <h1 class='text-center text-white pt-5'>Results...</h1>
            <div id="movieResults" class="row p-5">
                

                <?php
                
                    if(!empty($_GET['query'])) {

                        $query = urlencode($_GET['query']);
                        $search_url = 'https://api.themoviedb.org/3/search/movie?api_key=95560dd40ad749348a5fa29960e0e8ae&language=en-US&query=' . $query . '&page=1&include_adult=false';
                        $search_json = file_get_contents($search_url);
                        $search_array = json_decode($search_json, true);
                        $search_results = $search_array['results'];

                        if(empty($search_results)) {
                            echo "
                                <p class='text-white pt-2 text-center'>Oops we couldn't find any movies. The results were empty. Try re-typing the movie, checking the spelling, or search for another movie. Thank you for using Speedango!</p>";
                        } else {
                            searchResults($search_results);
                        }
                    }
                ?>
                
            </div>
    </div>

</section>
<!-- End Search Results Section -->

<script type="module" src="js/search.js"></script>
<?php include "includes/footer.php" ?>