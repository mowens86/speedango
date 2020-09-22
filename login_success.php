<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<!-- Hero Section -->
<section>
    <div class="bg-img">
        <div class="pt-custom">
            <div class="white-bg text-center pt-3">
                <h1 class="display-6">Success!</h1>
                <p>Have fun <?php echo $_SESSION['username']; ?>...</p>
                <a class="btn btn-info btn-lg" href="#" role="button">Browse Movies</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<?php include "includes/footer.php" ?>