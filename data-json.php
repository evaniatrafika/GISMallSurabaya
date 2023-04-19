<?php
 header('Content-Type: application/json; charset=utf8');
 //panggil koneksi.php
 include("koneksi.php");

 $sql="SELECT * FROM mapsgis";
 $query=mysqli_query($conn, $sql) or die($conn->error);

 $array=array();
 while($data=mysqli_fetch_assoc($query)) $array[]=$data; 
 
 echo json_encode($array);
?>