<?php
$title = "Edit Details";
require_once "includes/header.php";
require_once "includes/authcheck.php";
require_once "db/conn.php";

if (!isset($_GET["id"])) {

    header("Location: /submissions.php");
} else {
    $id = $_GET["id"];
    $results =  $crud->viewAttendee($id);

?>

    <!-- Begin page content -->
    <main role="main" class="container-md registrationform-main">
        <h1 class="my-5">Edit Record</h1>

        <div class="container-md px-0">
            <form action="/editsuccess.php" method="post" id="registration-form">
                <input type="hidden" id="attendee_id" name="attendee_id" placeholder="Your First Name" value="<?php echo $results["attendee_id"]; ?>">
                <div class="mb-3 w-60">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control form-control-md" id="firstname" name="firstname" placeholder="Your First Name" value="<?php echo $results["firstname"]; ?>" required>

                </div>
                <div class="mb-3 w-60">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control form-control-md" id="lastname" name="lastname" placeholder="Your Last Name" value="<?php echo $results["lastname"]; ?>" required>
                </div>
                <div class=" mb-3 w-60">
                    <label for="dateofbirth" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control form-control-md" id="dateofbirth" name="dateofbirth" placeholder="dd-mm-yyyy" value="<?php echo $results["dateofbirth"]; ?>" required>
                </div>
                <div class=" mb-3 w-60">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control form-control-md" id="email" name="email" type="email" placeholder="Your Email" value="<?php echo $results["email"]; ?>" required>
                    <small class="text-muted">We never share your email with anyone else.</small>
                </div>
                <div class="mb-3 w-60">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input class="form-control form-control-md" id="mobile" name="mobile" type="text" placeholder="Your Mobile Number" value="<?php echo $results["mobile"]; ?>" required>
                    <small class="text-muted">We never share your mobile number with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-primary" id="registration-form-back-btn" name="registration-form-back-btn">Back To Submissions</button>
                <button type="submit" class="btn btn-success" id="registration-form-submit-btn" name="registration-form-submit-btn">Save Changes</button>
            </form>
        </div>
    </main>

<?php } ?>
<script src="/presence/scripts/registrationform.js?v=<?php echo time(); ?>"></script>

<?php
require_once "includes/footer.php";
?>