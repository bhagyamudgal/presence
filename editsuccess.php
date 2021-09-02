<?php
require_once "db/conn.php";
require_once "includes/authcheck.php";

if (isset($_POST["registration-form-submit-btn"])) {

    $id = $_POST["attendee_id"];
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $dob = $_POST["dateofbirth"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    $isSuccess = $crud->editAttendee($id, $fname, $lname, $dob, $email, $mobile);

    if ($isSuccess) {
        header("Location: /submissions.php");
    } else {
        echo "There was an error. Sorry for the inconvenience.";
    }
} else {
    header("Location: /submissions.php");
}

?>