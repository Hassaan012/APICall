<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "CallAPI";

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

$fetch_data = "SELECT * FROM API ORDER BY id";
$result = mysqli_query($conn,$fetch_data);
if(mysqli_num_rows ($result) > 0){
    while($rows = mysqli_fetch_assoc($result)){
        $output = "id:". $rows["id"]. " name:". $rows["name"]. " location:". $rows["location"]. " contact:". $rows["contact"]; 
        $myjson = json_encode($output);
        echo $myjson;      
         ?>
         </br>
         <?php
    }
}
 
?>