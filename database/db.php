<?php

include('connect.php');



   //Execute query function
     function executeQuery($sql, $data){
      global $conn;

        $stmt = $conn -> prepare($sql);
        $values = array_values($data);// this filters the array and brings out the keys
        $types = str_repeat('s', count($values));//This counts the types 'ss'
        $stmt -> bind_param( $types, ...$values );// '...' use to list content of an array
        $stmt ->execute();
        
        return $stmt;
    }
   
   //Insert into database function
     function insert($table, $data){
      global $conn;

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
    
        $stmt =executeQuery($sql,$data);
        $id = $stmt->insert_id;
        return $id;
    }


    //Select All from database

     function selectAll($table, $conditions=[]){
      global $conn;
        $sql = "SELECT * FROM `$table` ";   
        
        if (empty($conditions)) {
            // //preparing a prepared statement

                $stmt = mysqli_stmt_init($conn);
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

       
        $stmt =executeQuery($sql, $conditions);
        $result = $stmt ->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
        } 


    }


    //update function
   function update($table,$id, $data){

     
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
        $stmt = executeQuery($sql,$data);
    
        return $stmt -> affected_rows;
    
    }



    //delete function

     function delete($table,$id){
      global $conn;
      
        $sql = "DELETE FROM `$table` WHERE id = ? ";
        $stmt =executeQuery($sql,['id' => $id]);
    
        return $stmt -> affected_rows;
    
    }


      //new arrivals
      function newArrival($table, $start , $limit){
        global $conn;
        $sql = "SELECT * FROM `$table`  ORDER BY DateReg DESC LIMIT $start, $limit ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }

       //Trending
      function trending($table, $start , $limit){
        global $conn;
        $sql = "SELECT * FROM `$table`  ORDER BY Price DESC  LIMIT $start, $limit";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }


            //Best Selling
      function bestselling($table, $start , $limit){
        global $conn;
        $sql = "SELECT * FROM `$table`  ORDER BY Quantity DESC LIMIT $start, $limit ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }


      
            //Best Selling
      function randselect($table){
        global $conn;
        $sql = "SELECT * FROM `$table`  ORDER BY rand() LIMIT 1 ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }

       
            //Best Deals
      function bestDeals($table, $start , $limit){
        global $conn;
        $sql = "SELECT * FROM `$table`  ORDER BY Price ASC LIMIT $start, $limit ";   
              // //preparing a prepared statement
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_execute($stmt);
                $result = $stmt ->get_result();
                $records = $result->fetch_all(MYSQLI_ASSOC);
                return $records;
                mysqli_stmt_close($stmt);
        
      }


      //select one
      function selectOne($table, $conditions){
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
          $stmt =executeQuery($sql,$conditions);
          $result = $stmt ->get_result()->fetch_assoc();
          return $result;
         
    }


     function selectPageCondition($table, $b_id, $start, $limit){
      global $conn;
   
      $sql = "SELECT * FROM `$table` WHERE Buyers_id = '$b_id' ORDER BY DateReg DESC LIMIT $start, $limit ";   
      
    
            // //preparing a prepared statement
              $stmt = mysqli_stmt_init($conn);
              mysqli_stmt_prepare($stmt, $sql);
              mysqli_stmt_execute($stmt);
              $result = $stmt ->get_result();
              $records = $result->fetch_all(MYSQLI_ASSOC);
              return $records;
              mysqli_stmt_close($stmt);
      
    }


    
//5. Search Function

 function search($term, $start,$limit){
  $match = "%" . $term . "%";

  global $conn;

   $sql = "SELECT * FROM products WHERE Name LIKE ? OR Brand LIKE ? LIMIT $start, $limit";

   $conditions = [
     'Name' => $match,
     'Brand' => $match
   ];

  $stmt =executeQuery($sql,$conditions);
  $result = $stmt ->get_result()->fetch_all(MYSQLI_ASSOC);
  return $result;
}



 function selectOdd($table, $conditions){


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
    $stmt =executeQuery($sql,$conditions);
    $result = $stmt ->get_result()->fetch_assoc();
    return $result;
   
}


   //Insert into database function
    function insert_cart($table, $data){
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

    $stmt = executeQuery($sql,$data);
    $id = $stmt->insert_id;
    return $id;
}

 function concat(){

  global $conn;
  $sql = "SELECT CONCAT (Name, '(', Item_Qty, ')') AS Items FROM cart";

  $stmt = $conn->prepare($sql);
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