<?php

$conn = mysqli_connect("h2cwrn74535xdazj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "n9vogak9ayip1yr2",
  "x7vbydainteyeo9o","vu7f0ed5g13cgqee");
// $conn = mysqli_connect("localhost", "root", "", "crud");

$sql = "CREATE TABLE login(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(70) NOT NULL,
    role VARCHAR(70) NOT NULL
)";
$result=mysqli_query($conn,$sql) or die("Bad Create: $sql");

$sql = "CREATE TABLE recipes(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    price INT NOT NULL,
    chef_id INT NOT NULL
)";
$result=mysqli_query($conn,$sql) or die("Bad Create: $sql");
