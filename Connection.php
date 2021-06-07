<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_internship";
//Connection Function
$connection = mysqli_connect($host, $username, $password, $dbname);
$q = mysqli_query($connection, 
        "insert into tbl_user(user_name,user_gender,user_mobile) values('Sahil','male','2507')")
        or die("Error". mysqli_error($connection));
if ($q)
{
    echo "<script>alert('Record Added');</script>";
}

 
