<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

<?php 

if(isset($_POST['contact'])){
    $contact_email = $_POST['contact_email'];
    $contact_message = $_POST['contact_message'];

    $query = "INSERT INTO contact(contact_email, contact_message) ";
    $query .= "VALUES('{$contact_email}', '{$contact_message}' ) ";
    $contact_message_query = mysqli_query($connection, $query);

    confirmQuery($contact_message_query);

    $message = "Thank you, we've received your message. We'll be in touch shortly.";

    // Only to be used in a real enivornment OR may be able to test with fake sendmail https://www.glob.com.au/sendmail/
    // $to = "mocoding86@gmail.com";
    // $header = "From: " . $_POST['contact_email'];
    // mail($to,$contact_message,$header);

} else {
    $message = "";
}


?>

<!-- Hero Section -->
<section>
    <div class="bg-img">
        <div class="pt-custom-contact">
            <div class="contact-white-bg pt-3">
                <h1 class="display-6 text-center">Contact Us</h1>
                <form class="p-3" action="" method="POST">

                    <p class="text-center"><?php echo $message; ?></hp>

                    <div class="form-group">
                        <input type="email" name="contact_email" class="form-control" placeholder="Email*" required>
                    </div>

                    <div class="form-group">
                        <textarea name="contact_message" class="form-control" placeholder="Write your message*" rows="4" required></textarea>
                    </div>

                    <div class="input-group pt-1">
                        <button class="btn btn-info btn-lg btn-block" name="contact" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<?php include "includes/footer.php" ?>