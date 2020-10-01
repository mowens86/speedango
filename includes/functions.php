<?php 

function confirmQuery($result) {
    global $connection;
    if(!$result) {
        die("QUERY FAILED! " . mysqli_error($connection));
    }
}

function searchResults($results) {
    foreach ($results as $result) {
        
        if($result['poster_path'] !== null) {
            echo "
            <div class='col-sm-4'>
                <div class='card m-2 card-zoom'>
                        <img class='card-img-top' src='//image.tmdb.org/t/p/w440_and_h660_face" . $result['poster_path'] . "' alt='' title='" . $result['original_title'] . "'>
                    <div class='card-body'>
                        <h6 class='card-title text-center'>" . $result['original_title'] . "</h6>
                    </div>
                </div>
            </div>";
        }
    }
}


?>