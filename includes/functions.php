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
            <div class='col-md-4'>
                <div class='card m-2 card-zoom'>
                        <img class='card-img-top' src='//image.tmdb.org/t/p/w440_and_h660_face" . $result['poster_path'] . "' alt='' title='" . $result['original_title'] . "'>
                    <div class='card-body text-center'>
                        <a href='info.php?id=" . $result['id'] . "' class='btn btn-danger btn-sm' data-toggle='tooltip' title='More about " . $result['original_title'] . "'>Movie Info</a>
                    </div>
                </div>
            </div>";
        }
    }
}

function infoGenres($genres) {
    foreach($genres as $genre) {
            echo "
                <span class='badge badge-warning m-1'>" . $genre['name'] . "</span>
            ";
    }
}


?>