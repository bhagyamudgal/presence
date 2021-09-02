<?php
$title = "Login";
require_once "includes/header.php";
require_once "db/conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = strtolower(trim($_POST["username"]));
    $password = $_POST["password"];
    $hash_password = md5($password);

    $result = $user->getUser($username, $hash_password);

    if (!$result) {
        echo "<div class='alert alert-danger'>Username or Password is incorrect! Please try again.</div>";
    } else {
        $_SESSION["username"] = $username;
        $_SESSION["user_id"] = $result["user_id"];
        header("Location: submissions.php");
    }
}

?>

<!-- Begin page content -->
<main role="main" class="container-md login-main">
    <h1 class="mt-5 text-center">Login</h1>
    <div class="muted text-center text-primary mb-5">Note: You must login to view Submissions.</div>

    <div class="container-md px-0">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="login-form">
            <div class="mb-3 w-60">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control form-control-md" id="username" name="username" placeholder="Your Username" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>" required>

            </div>
            <div class="mb-3 w-60">
                <label for="password" class="form-label">Last Name</label>
                <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Your Password" required>
            </div>

            <button type="submit" value="Login" class="btn btn-success" id="login-form-submit-btn" name="login-form-submit-btn">Login</button>
        </form>
    </div>
</main>

<?php
require_once "includes/footer.php";
?>