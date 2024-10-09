<?php
$connection = mysqli_connect("localhost","root","","db_perpustakaan");
// check connection 
 if ($connection) {
    echo "";
 } else {
    echo "Failed to connect to the database";
 }
?>