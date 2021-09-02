<?php
class crud
{
    // private db object
    private $db;

    // constructor
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insert($fname, $lname, $dob, $email, $mobile)
    {
        try {
            $sql = "INSERT INTO registration_form (firstname, lastname, dateofbirth, email, mobile) VALUES (:fname,:lname,:dob,:email,:mobile)";

            $statement = $this->db->prepare($sql);

            $statement->bindparam(":fname", $fname);
            $statement->bindparam(":lname", $lname);
            $statement->bindparam(":dob", $dob);
            $statement->bindparam(":email", $email);
            $statement->bindparam(":mobile", $mobile);

            $statement->execute();

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function view()
    {
        try {
            $sql = "SELECT * FROM registration_form";

            $result = $this->db->query($sql);

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function viewAttendee($id)
    {
        try {
            $sql = "SELECT * FROM registration_form WHERE attendee_id = :id";

            $statement = $this->db->prepare($sql);

            $statement->bindparam(":id", $id);

            $statement->execute();

            $result = $statement->fetch();

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function editAttendee($id, $fname, $lname, $dob, $email, $mobile)
    {
        try {
            $sql = "UPDATE registration_form SET firstname=:fname, lastname=:lname, dateofbirth=:dob, email=:email, mobile=:mobile WHERE attendee_id=:id";

            $statement = $this->db->prepare($sql);

            $statement->bindparam(":id", $id);
            $statement->bindparam(":fname", $fname);
            $statement->bindparam(":lname", $lname);
            $statement->bindparam(":dob", $dob);
            $statement->bindparam(":email", $email);
            $statement->bindparam(":mobile", $mobile);

            $statement->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function deleteAttendee($id)
    {
        try {
            $sql = "DELETE FROM `registration_form` WHERE `registration_form`.`attendee_id` = :id";

            $statement = $this->db->prepare($sql);

            $statement->bindparam(":id", $id);

            $statement->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

?>