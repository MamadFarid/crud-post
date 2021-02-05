<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM post WHERE id = '$id'";
$conn->query($query);
header("Location: ../view/index.php");