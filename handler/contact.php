<?php

include('../partials/connect.php');
$email = $_POST['email'];
$msg=$_POST['msg'];

$sql = "INSERT INTO contacts (email, msg)
VALUES ('$email', '$msg')";


if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
  header("Location: ../contact.php");
  exit();
?>