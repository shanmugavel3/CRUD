<?php
$conn = mysqli_connect('localhost','root','','learn');
  $file= file_get_contents('php://input');
  $xml = json_decode($file);
  $id = $xml->id;
  $name =$xml->name;
  $phone =$xml->phone;

// echo $id; 
// echo $name; 
// echo $phone; 


  $query ="UPDATE details SET name= '$name',phone='$phone' WHERE id= '$id'";

  $result = mysqli_query($conn,$query);
?>