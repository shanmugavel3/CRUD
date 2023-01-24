<?php


$conn = mysqli_connect('localhost','root','','learn');
  $xml = file_get_contents('php://input');
  $decode = json_decode($xml);
  


//   header("Content-Type: application/xml");
//   $data = $xml->asXML();

//   foreach($xml->children() as $val){
   
  

//   } 
   $name =$decode->name;
   $phone =$decode->phone;
   echo $name;

   $query = "INSERT INTO details (name,phone)VALUES('$name','$phone')";

   $result = mysqli_query($conn,$query);


  ?>