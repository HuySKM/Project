<?php
class productModel extends Database {
    public $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = self::$connection;
    }
    public function getRows() {
        $data = array();
        $sql = "SELECT * FROM product";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public  function store($data){


        echo '<pre>';
        print_r($data);
        echo '</pre>';

        $sql = "INSERT INTO product (product_name, product_desc,product_slug, product_price, product_price_sell, created)
         VALUES ('". $data['product_name'] ."', '".$data['product_desc']."', '".$data['product_slug']."',".$data['product_price'].",".$data['product_price_sell'].",'".$data['created']."')";
        echo $sql;
        die;

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

    }

}