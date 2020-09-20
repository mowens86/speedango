<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>



<!-- Hero Section -->
<section>
    <div class="bg-img">
        <div class="pt-custom">
            <div class="white-bg text-center pt-3">
                <h1 class="display-5">Flick A Plan</h1>
                <p>The #1 Movie Rating Website</p>
                <a class="btn btn-info btn-lg" href="#" role="button">Login</a>
                <a class="btn btn-danger btn-lg" href="#" role="button">Register</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Top Movie Rating Section -->
<section class="bg-black">
    <div class="container">
    <h1 class="text-center text-white pt-5">Today's Most Popular Movies</h1>
        <div id="topFiveList" class="row p-5">

        </div>
</section>
<!-- End Top Rating Section -->


<footer class="bg-dark text-center">
    <p class="white-txt p-2 m-0"><strong>© <?php echo date("Y"); ?> SPEEDANGO. All Rights Reserved.</strong></p>
</footer>
<!-- Scripts JS -->
<script src="js/index.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
</body>

</html>