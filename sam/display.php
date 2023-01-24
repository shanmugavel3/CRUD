<?php

 $conn = mysqli_connect('localhost','root','','learn');
 $id = $_REQUEST['id'];


 $query = "SELECT *   FROM  details WHERE id= '$id'";

 $result = mysqli_query($conn,$query);

 $array = array();
 foreach($result as $val){
  $array[] = $val;
 
 }


// // 
$encode = json_encode($array);
echo $encode;


?>