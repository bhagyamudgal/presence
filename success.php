<?php
$title = "Success";
require_once "includes/header.php";
require_once "db/conn.php";
?>

<!-- Begin page content -->
<main role="main" class="container-md success-main">
    <?php
    if (isset($_POST["registration-form-submit-btn"])) {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $dob = $_POST["dateofbirth"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        
        $isSuccess = $crud->insert($fname, $lname, $dob, $email, $mobile);

        if ($isSuccess) {
            echo "<h2 class='mt-5 text-success'>Thanks for filling the form. Your have been registered successfully. Login to view Submissions.</h2>";
        } else {
            echo "<h2 class='mt-5 text-danger'>There was an error. Sorry for the inconvenience.</h2>";
        }
    }
    else{
        header("Location: index.php");
    }
    ?>
</main>

<?php
require_once "includes/footer.php";
?>