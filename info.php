<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<!-- Movie Info Section -->
<section class="bg-black">
    <div class="container">
        <h1 class="text-center text-white">Browse By Genre</h1>
        <div id="movieInfo" class="row pt-5 pb-5">
            
            <?php 
                if(empty($_GET['id'])){
                    
                    echo "<p class='text-white'>There's no movies</p>";
                } else if(isset($_GET['id'])) {

                    // API Call based on Movie ID from GET superglobal
                    $id = urlencode($_GET['id']);
                    $info_url = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=95560dd40ad749348a5fa29960e0e8ae&language=en-US';
                    $info_json = file_get_contents($info_url);
                    $info_array = json_decode($info_json, true);
                    
                    // Stored API Movie Variables
                    $movie_name = $info_array['original_title'];
                    $movie_overview = $info_array['overview'];
                    $movie_image = $info_array['poster_path'];
                    $movie_release_date = $info_array['release_date'];
                    $movie_runtime = $info_array['runtime'];
                    $movie_genres = $info_array['genres'];
                    $movie_vote_average = $info_array['vote_average'];

                    // OOP PHP
                    class Movie {
                        // Properties
                        private $name;
                        private $overview;
                        private $image;
                        private $release_date;
                        private $runtime;
                        private $vote_average;

                        // Methods
                        public function set_name($name) {
                            $this->name = $name;
                        }

                        public function get_name() {
                            return $this->name;
                        }

                        public function set_overview($overview) {
                            $this->overview = $overview;
                        }

                        public function get_overview() {
                            return $this->overview;
                        }

                        public function set_image($image) {
                            $this->image = $image;
                        }

                        public function get_image() {
                            return $this->image;
                        }

                        public function set_release_date($release_date) {
                            $this->release_date = $release_date;
                        }

                        public function get_release_date() {
                            return $this->release_date;
                        }

                        public function set_runtime($runtime) {
                            $this->runtime = $runtime;
                        }

                        public function get_runtime() {
                            return $this->runtime;
                        }

                        
                        public function set_vote_average($vote_average) {
                            $this->vote_average = $vote_average;
                        }

                        public function get_vote_average() {
                            return $this->vote_average;
                        }

                    }

                    $movie = new Movie();
                    $movie->set_name($movie_name);
                    $movie->set_overview($movie_overview);
                    $movie->set_image($movie_image);
                    $movie->set_release_date($movie_release_date);
                    $movie->set_runtime($movie_runtime);
                    $movie->set_vote_average($movie_vote_average);

                    echo "
                        <div class='col'>
                            <img src='//image.tmdb.org/t/p/w440_and_h660_face" . $movie->get_image() . "' title='" . $movie->get_name() . "'>
                    "?>
                            
                            <div class="inline-block pt-2 pb-2"><?php infoGenres($movie_genres); ?></div>
                        </div>
                            
                    <?php 

                    echo "
                    <div class='col'>
                        <h1 class='text-white'>" . $movie->get_name() . "</h1>
                        <h4 class='text-white'>Overview</h4>
                        <p class='text-white'>" . $movie->get_overview() . "</p>
                        <h6 class='text-white'>Movie Rating: " . $movie->get_vote_average() . "</p>
                        <h6 class='text-white'>Movie Release Date: " . $movie->get_release_date() . "</p>
                        <h6 class='text-white'>Movie Runtime: " . $movie->get_runtime() . " minutes</p>
                        <a class='btn btn-info btn-lg' href='search.php' role='button'>Browse Movies</a>
                    </div>
                    ";
                }
            ?>
    

        </div>

</section>
<!-- End Movie Genre Section -->
<?php include "includes/footer.php" ?>