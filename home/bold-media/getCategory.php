<?php

// Use to fetch product data
class Category {
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->db)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'content'){

        //$result = $this->db->db->query("SELECT * FROM {$table}");
		$result = mysqli_query($this->db->db,"select * from {$table}");
        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getCategory($category = null, $table= 'content'){
        if (isset($category)){
            $result = $this->db->db->query("SELECT * FROM {$table} WHERE category = {$category} and is_delete = N");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

}?>
