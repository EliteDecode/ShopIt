<?php


class Product{
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
    public function insert($table, $data){
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


    //Select All from database

    public function selectAll($table, $conditions=[]){
        $sql = "SELECT * FROM `$table` ";   
        
        if (empty($conditions)) {
            // //preparing a prepared statement

                $stmt = mysqli_stmt_init($this->db->conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        }else{

            $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i===0) {
            $sql = $sql . " WHERE $key =?";
            }else{
                $sql = $sql . " AND $key = ?" ;
            }
            $i++;
        }

       
        $stmt = $this->executeQuery($sql, $conditions);
        $result = $stmt ->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
        } 


    }


    //update function
  public function update($table,$id, $data){

     
        $sql = "UPDATE `$table` SET ";
        $i = 0;
        foreach ($data as $key => $value) {
          if ($i===0) {
             $sql = $sql . " $key =?";
          }else{
              $sql = $sql . ", $key = ?";
          }
          $i++;
        }
        $sql = $sql . " WHERE id=? ";
        $data['id'] = $id;
        $stmt = $this-> executeQuery($sql,$data);
    
        return $stmt -> affected_rows;
    
    }



    //delete function

    public function delete($table,$id){

      
        $sql = "DELETE FROM `$table` WHERE id = ? ";
        $stmt = $this->executeQuery($sql,['id' => $id]);
    
        return $stmt -> affected_rows;
    
    }


      //new arrivals
    public  function newArrival($table, $start , $limit){
        $sql = "SELECT * FROM `$table`  ORDER BY DateReg DESC LIMIT $start, $limit ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($this->db->conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }

       //Trending
    public  function trending($table, $start , $limit){
        $sql = "SELECT * FROM `$table`  ORDER BY Price DESC  LIMIT $start, $limit";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($this->db->conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }


            //Best Selling
    public  function bestselling($table, $start , $limit){
        $sql = "SELECT * FROM `$table`  ORDER BY Quantity DESC LIMIT $start, $limit ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($this->db->conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }


      
            //Best Selling
    public  function randselect($table){
        $sql = "SELECT * FROM `$table`  ORDER BY rand() LIMIT 1 ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($this->db->conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }

       
            //Best Deals
    public  function bestDeals($table, $start , $limit){
        $sql = "SELECT * FROM `$table`  ORDER BY Price ASC LIMIT $start, $limit ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($this->db->conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }


      //select one
     public function selectOne($table, $conditions){
        $sql = "SELECT * FROM `$table` ";   
    
            $i = 0;
          foreach ($conditions as $key => $value) {
            if ($i===0) {
               $sql = $sql . " WHERE $key =?";
            }else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
          }
    
          $sql = $sql . " LIMIT 1";
          $stmt = $this->executeQuery($sql,$conditions);
          $result = $stmt ->get_result()->fetch_assoc();
          return $result;
         
    }


    public function selectPageCondition($table, $b_id, $start, $limit){

   
      $sql = "SELECT * FROM `$table` WHERE Buyers_id = '$b_id' ORDER BY DateReg DESC LIMIT $start, $limit ";   
      
    
            // //preparing a prepared statement
              $stmt = mysqli_stmt_init($this->db->conn);
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $result = $stmt ->get_result();
              $records = $result->fetch_all(MYSQLI_ASSOC);
              return $records;
              mysqli_stmt_close($stmt);
      
    }


    
//5. Search Function

public function search($term, $start,$limit){
  $match = "%" . $term . "%";

  global $conn;

   $sql = "SELECT * FROM products WHERE Name LIKE ? OR Brand LIKE ? LIMIT $start, $limit";

   $conditions = [
     'Name' => $match,
     'Brand' => $match
   ];

  $stmt = $this->executeQuery($sql,$conditions);
  $result = $stmt ->get_result()->fetch_all(MYSQLI_ASSOC);
  return $result;
}



public function selectOdd($table, $conditions){


  $sql = "SELECT * FROM `$table` ";   

      $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i===0) {
         $sql = $sql . " WHERE $key =?";
      }else{
          $sql = $sql . " AND $key != ?";
      }
      $i++;
    }

    $sql = $sql . " LIMIT 1";
    $stmt = $this->executeQuery($sql,$conditions);
    $result = $stmt ->get_result()->fetch_assoc();
    return $result;
   
}

}