<?php
$title = "Entry Details";
require_once "includes/header.php";
require_once "includes/authcheck.php";
require_once "db/conn.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = $crud->viewAttendee($id);
?>

    <main role="main" class="container-md view-main">
        <div class="container-md my-5">
            <div class="card text-center mx-auto" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result["firstname"], " ", $result["lastname"]; ?></h5>
                    <p class="card-text">Date of Birth: <?php echo $result["dateofbirth"] ?></p>
                    <p class="card-text">Email: <?php echo $result["email"] ?></p>
                    <p class="card-text">Mobile: <?php echo $result["mobile"] ?></p>
                </div>
            </div>
            <div class="container-md my-2 text-center">
                <a href="submissions.php" type="button" class="btn btn-primary my-3 d-block">Back To Submissions</a>
                <a href="edit.php?id=<?php echo $id; ?>" type="button" class="d-block btn btn-warning my-3">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $id; ?>" type="button" class="d-block btn btn-danger my-3">Delete</a>
            </div>
        </div>

    </main>

<?php
} else {
    header("Location: submissions.php");
}
?>

<?php
require_once "includes/footer.php";
?>