<?php
$title = "Home";
require_once "includes/header.php";
?>

<!-- Begin page content -->
<main role="main" class="container-md home-main">
    <img src="./public/banner-home.jpg" class="banner-home mt-4" alt="Banner-Home">
    <h1 class="mt-5">Presence - Registration Tracking System</h1>
    <p class="lead mt-3">Presence is a Registration Tracking System. Users register themselves by filling out the registration form and their entries are recorded in the database which can be seen by the admin.</p>
    <div class="container-md home-btn-group px-0">
        <a href="registrationform.php" type="button" id="home-registration-form-btn" class="btn btn-dark btn-lg mt-3">Registration Form</a>
        <a href="submissions.php" type="button" id="home-submissions-btn" class="btn btn-dark btn-lg mx-sm-3 mt-3">Submissions</a>
    </div>
</main>

<?php
require_once "includes/footer.php";
?>
