<?php

include('../partials/connect.php');
$category = $_POST['name'];

$sql = "INSERT INTO categories (name) VALUES('$category')";



if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
  header("Location: http://localhost/ebuyPHP/admin/categories.php");
  exit();
?>