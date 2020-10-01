
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">
        <img class="logo" src="./assets/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav justify-content-center">

            <?php 

                if(isset($_SESSION['username'])) {
                    
                    echo "<li class='nav-item active'>
                            <a class='nav-link' href='search.php'>Browse Movies</a>
                         </li>";

                    echo "<li class='nav-item'>
                            <a class='nav-link' href='#'>About Us</a>
                          </li>";

                    echo "<li class='nav-item'>
                            <a class='nav-link' href='#'>Contact Us</a>
                          </li>"; 
                          
                    echo "<li class='nav-item'>
                            <a class='nav-link' href='logout.php'>Logout</a>
                          </li>";       
                } else {

                    echo "<li class='nav-item active'>
                            <a class='nav-link' href='register.php'>Register <span class='sr-only'>(current)</span></a>
                         </li>";
                         
                    echo "<li class='nav-item'>
                            <a class='nav-link' href='login.php'>Login <span class='sr-only'>(current)</span></a>
                        </li>";
                        
                    echo "<li class='nav-item'>
                            <a class='nav-link' href='#'>About Us</a>
                         </li>";

                    echo "<li class='nav-item'>
                            <a class='nav-link' href='#'>Contact Us</a>
                         </li>";     
                }

            ?>

        </ul>
    </div>
</nav>
<!-- End Navigation -->