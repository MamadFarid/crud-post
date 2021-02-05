<?php
include("connection.php");

$title = $_POST['title'];
$content = $_POST['content'];

$query = "INSERT INTO post (title, content) VALUES ('$title', '$content')";
$conn->query($query);
header("Location: ../view/index.php");