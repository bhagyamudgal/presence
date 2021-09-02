<?php
$title = "Registration Form";
require_once "includes/header.php";
require_once "db/conn.php";
?>

<!-- Begin page content -->
<main role="main" class="container-md registrationform-main">
    <h1 class="my-5">Registration Form</h1>

    <div class="container-md px-0">
        <form action="success.php" method="post" id="registration-form">
            <div class="mb-3 w-60">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control form-control-md" id="firstname" name="firstname" placeholder="Your First Name" required>

            </div>
            <div class="mb-3 w-60">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control form-control-md" id="lastname" name="lastname" placeholder="Your Last Name" required>
            </div>
            <div class="mb-3 w-60">
                <label for="dateofbirth" class="form-label">Date Of Birth</label>
                <input type="date" class="form-control form-control-md" id="dateofbirth" name="dateofbirth" placeholder="dd-mm-yyyy" required>
            </div>
            <div class="mb-3 w-60">
                <label for="email" class="form-label">Email</label>
                <input class="form-control form-control-md" id="email" name="email" type="email" placeholder="Your Email" required>
                <small class="text-muted">We never share your email with anyone else.</small>
            </div>
            <div class="mb-3 w-60">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input class="form-control form-control-md" id="mobile" name="mobile" type="text" placeholder="Your Mobile Number" required>
                <small class="text-muted">We never share your mobile number with anyone else.</small>
            </div>
            <button type="submit" class="btn btn-success" id="registration-form-submit-btn" name="registration-form-submit-btn">Submit</button>
        </form>
    </div>
</main>

<?php
require_once "includes/footer.php";
?>