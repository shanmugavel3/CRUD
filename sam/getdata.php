<?php

 $conn = mysqli_connect('localhost','root','','learn');


 $query = "SELECT *   FROM  details";

 $result = mysqli_query($conn,$query);
  $array = array();
 foreach($result as  $val){
    
     $array[] = $val;

 }

 $encode = json_encode($array);
 echo $encode;

?>