<?php 

// Create connection to DB with mysqli_connect
// $conn = mysqli_connect ("hostname, username, password, database name")
$conn = mysqli_connect("db:3306", "root", "root", "products");

//verify connection with mysqli
if(mysqli_connect_errno ()) {
    echo "Database error: ". mysqli_connect_errno ();
    exit();
}

?>