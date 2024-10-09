<?php
//DB connection
require('../../config/db_connection.php');
//get data from register form

$email = $_POST['email_name'];
$password = $_POST['password_name'];
$enc_password =md5($password);
//query to insert data into user table
$query = "INSERT INTO users (email,password) 
VALUES('$email','$enc_password')";

$result = pg_query($conn, $query);

if($result) {
    echo "Registration susccesful!";
} else {
    echo "Registration failed!";
}

pg_close($conn);

?>