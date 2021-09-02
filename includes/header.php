<?php
include_once "includes/session.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/styles.css?v=<?php echo time(); ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="icon" type="image/svg+xml" href="public/favicon.svg" />
    <title>Presence | <?php echo $title; ?></title>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="/">Presence</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($title == "Home") echo "active disabled" ?>" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($title == "Registration Form") echo "active disabled" ?>" href="/registrationform.php">Registration Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($title == "Submissions") echo "active disabled" ?>" href="/submissions.php">Submissions</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <?php
                        if (!isset($_SESSION["user_id"])) {
                        ?>
                            <a href="/login.php" class="btn btn-success <?php if ($title == "Login") echo "active disabled" ?>" type="button">Login</a>
                        <?php
                        } else {
                        ?>
                            <span class="text-light mx-4">Hello, <?php echo $_SESSION["username"], "!" ?> </span>
                            <a href="/logout.php" class="btn btn-danger" type="button">Logout</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
        </nav>
    </header>