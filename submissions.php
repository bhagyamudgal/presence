<?php
$title = "Submissions";
require_once "includes/header.php";
require_once "includes/authcheck.php";
require_once "db/conn.php";

$results = $crud->view();
?>

<!-- Begin page content -->
<main role="main" class="container-md submissions-main">

    <h1 class="my-5">Submissions</h1>

    <div class="table-responsive">
        <table class="table table-hover table-bordered ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <th scope="row"><?php echo $r["attendee_id"]; ?></th>
                        <td><?php echo $r["firstname"]; ?></td>
                        <td><?php echo $r["lastname"]; ?></td>
                        <td class="text-center">
                            <a href="view.php?id=<?php echo $r["attendee_id"]; ?>" type="button" class="btn btn-dark mb-2 mx-1">View</a>
                            <a href="edit.php?id=<?php echo $r["attendee_id"]; ?>" type="button" class="btn btn-warning mb-2 mx-1">Edit</a>
                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $r["attendee_id"]; ?>" type="button" class="btn btn-danger mb-2 mx-1">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</main>

<?php
require_once "includes/footer.php";
?>