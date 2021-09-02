<?php
    require_once"db/conn.php";
    require_once "includes/authcheck.php";

    if(!$_GET["id"]){
        header("Location: /submissions.php");
    }
    else
    {
        $id=$_GET["id"];
       
        $isSuccess = $crud->deleteAttendee($id);

        if($isSuccess)
        {
            header("Location: /submissions.php");
        }
        else{
            echo "There was an error. Sorry for the inconvenience.";
        }
    }
