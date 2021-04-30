<?php
require_once __DIR__."/config/db_connect.php";

$student_id = $_POST["id"];


$sql = "DELETE FROM students WHERE id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
