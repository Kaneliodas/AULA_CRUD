<?php 
include("config.php");

$id = $_GET['id'];
$sql = mysqli_prepare($link,$sql);
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

header("Location: index.php");
?>
