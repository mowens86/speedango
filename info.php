<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<!-- Movie Info Section -->
<section class="bg-black">
    <div class="container">
        <h1 class="text-center text-white pt-2">Browse By Genre</h1>
        <div id="movieInfo" class="row p-5">
            
            <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    echo "<p class='text-white'>$id</p>";
                }
            
            
            
            ?>


        </div>

</section>
<!-- End Movie Genre Section -->
<?php include "includes/footer.php" ?>