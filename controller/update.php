<?php
include("connection.php");

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$query = "UPDATE post SET title = '$title', content = '$content' WHERE id = '$id'";
mysqli_query($conn, $query);
header("Location: ../view/index.php");