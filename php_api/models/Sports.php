<?php

include_once "../../models/Product.php";


class Sports extends Product
{
    public $conn;
    public $table = "sports";

    public function __construct($db)
    {
        parent::__construct($db);
    }



    //GET Sports
    public function read()
    {
        //Query
        $query = "SELECT
        name,
        id,
        price,
        quantity,
        image_path,
        sku
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
            name = :name,
            price = :price,
            quantity = :quantity,
            image_path = :image_path,
            sku = :sku";

        $stmt = $this->conn->prepare($query);

        // Clean it up
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->quantity = htmlspecialchars(strip_tags($this->quantity));
        $this->image_path = htmlspecialchars(strip_tags($this->image_path));
        $this->sku = htmlspecialchars(strip_tags($this->sku));

        //Bind data
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":quantity", $this->quantity);
        $stmt->bindParam(":image_path", $this->image_path);
        $stmt->bindParam(":sku", $this->sku);

        //execute
        if ($stmt->execute()) {
            return true;
        };

        printf("Error: %s.\n", $stmt->error);
    }

    public function delete()
    {

        $query = "DELETE FROM " . $this->table . " WHERE sku = :sku ";

        $stmt = $this->conn->prepare($query);

        $this->sku = htmlspecialchars($this->sku);

        $stmt->bindParam(":sku", $this->sku);

        if ($stmt->execute()) {
            return true;
        };

        printf("Error: %s.\n", $stmt->error);

        return false;
    }

    public function get_single()
    {

        $query = "SELECT * FROM " . $this->table . " WHERE sku = :sku";

        $stmt = $this->conn->prepare($query);

        $this->sku = htmlspecialchars($this->sku);

        $stmt->bindParam(":sku", $this->sku);

        $stmt->execute();

        return $stmt;
    }
}
