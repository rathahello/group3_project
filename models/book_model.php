<?php 
  function model_view(){
    include "connection.php";
    $query = mysqli_query($connection,"SELECT * FROM tbl_book" );
    $result = [];
    if($query && mysqli_num_rows($query) > 0){
      foreach($query as $value){
        $result[] = $value;
      }
    }
    return $result; 
  }

  function model_detail(){
      include "connection.php";
      $id = $_GET['id'];
      $query = mysqli_query($connection, "SELECT * FROM tbl_book WHERE book_id=$id");
      return $query;
  
  }
?>