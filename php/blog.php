<?php
include 'php/header.php';
include 'php/blog_menu.php';
include 'php/login.php';
include 'php/slider.php';
include 'php/about.php';
include 'php/speakers.php';
include 'php/schedule.php';
include 'php/venue.php';
include 'php/hotels.php';
include 'php/gallery.php';
include 'php/sponsors.php';
include 'php/faq.php';
include 'php/subscription.php';
include 'php/buy_tickets.php';
include 'contact.php';
include 'php/footer.php';
include 'php/js_files.php';
?>

<section class="main-container">
        <?php
            if (isset($_SESSION['u_id'])) {
                echo "you are logged in";
            }
        ?>
</section>