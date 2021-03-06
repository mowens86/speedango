<footer class="bg-dark text-center p-3">
    <div class="row p-3">
        <div class="col">
            <p class="text-white m-auto">Movie Data Powered By:</p>
            <a href="https://www.themoviedb.org/" target="_blank">
                <img class="align-self-center moviedb-logo" src="./assets/moviedb.svg" alt="The Movie DB" title="The Movie DB">
            </a>
        </div>
    </div>

    <?php 

if(isset($_SESSION['username'])) {
    
    echo "<a class='link-color' href='search.php'>Browse Movies</a>
    <span class='text-white'> | </span>";

    echo "<a class='link-color' href='about.php'>About Us</a>
    <span class='text-white'> | </span>";

    echo "<a class='link-color' href='contact.php'>Contact Us</a>
    <span class='text-white'> | </span>"; 
          
    echo "<a class='link-color' href='logout.php'>Logout</a>";

} else {

    echo "<a class='link-color' href='register.php'>Register</a>
    <span class='text-white'> | </span>";
         
    echo "<a class='link-color' href='login.php'>Login</a>
    <span class='text-white'> | </span>";
        
    echo "<a class='link-color' href='about.php'>About Us</a>
    <span class='text-white'> | </span>";

    echo "<a class='link-color' href='contact.php'>Contact Us</a>";     
}

?>

    <p class="white-txt p-2 m-0"><strong>© <?php echo date("Y"); ?> SPEEDANGO. All Rights Reserved.</strong></p>
</footer>

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