<?php

include_once "../../models/Product.php";


class Users extends Product
{
    public $conn;
    public $table = "users";

    public function __construct($db)
    {
        parent::__construct($db);
    }



    //GET Computer
    public function read()
    {
        //Query
        $query = "SELECT
        username,
        id,
        passwd,
        e_mail
        FROM
        " . $this->table . "
        ORDER BY
        id ASC";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();


        return $stmt;
    }

    public function create()
    {

        $query = "INSERT INTO " . $this->table . "
        SET
            username = :username,
            passwd = :passwd,
            e_mail = :e_mail";

        $stmt = $this->conn->prepare($query);

        // Clean it up
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->passwd = htmlspecialchars(strip_tags($this->passwd));
        $this->e_mail = htmlspecialchars(strip_tags($this->e_mail));

        //Bind data
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":passwd", $this->passwd);
        $stmt->bindParam(":e_mail", $this->e_mail);

        //execute
        if ($stmt->execute()) {
            return true;
        };

        printf("Error: %s.\n", $stmt->error);
    }

    public function delete()
    {

        $query = "DELETE FROM " . $this->table . " WHERE username = :username ";

        $stmt = $this->conn->prepare($query);

        $this->username = htmlspecialchars($this->username);

        $stmt->bindParam(":username", $this->username);

        if ($stmt->execute()) {
            return true;
        };

        printf("Error: %s.\n", $stmt->error);

        return false;
    }
    public function get_single()
    {

        $query = "SELECT * FROM " . $this->table . " WHERE username = :username";

        $stmt = $this->conn->prepare($query);

        $this->username = htmlspecialchars($this->username);

        $stmt->bindParam(":username", $this->username);

        $stmt->execute();

        return $stmt;
    }
}
