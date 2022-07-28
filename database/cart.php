<?php

class Cart {
   public $db;

   public function __construct(dbcontroller $db)
   {
       if (!isset($db->conn)) {
         return null;
       }else{
          $this->db = $db;
       }
   }


   //Execute query function
   public function executeQuery($sql, $data){
    $stmt = $this->db->conn -> prepare($sql);
    $values = array_values($data);// this filters the array and brings out the keys
    $types = str_repeat('s', count($values));//This counts the types 'ss'
    $stmt -> bind_param( $types, ...$values );// '...' use to list content of an array
    $stmt ->execute();
    
    return $stmt;
}

   
   //Insert into database function
   public function insert_cart($table, $data){
    $sql = "INSERT INTO `$table` SET ";
    $i = 0;
    foreach ($data as $key => $value) {
      if ($i===0) {
         $sql = $sql . " $key =?";
      }else{
          $sql = $sql . ", $key = ?";
      }
      $i++;
    }

    $stmt = $this->executeQuery($sql,$data);
    $id = $stmt->insert_id;
    return $id;
}

public function concat(){
  $sql = "SELECT CONCAT (Name, '(', Item_Qty, ')') AS Items FROM cart";

  $stmt = $this->db->conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  $items = array();
  while($row = $result->fetch_assoc()
  ){
      $items[]=$row['Items'];
  }
  $allItems = implode(", ", $items);
  return $allItems;
}







}