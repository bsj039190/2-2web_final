<?php session_start();
$conn = mysqli_connect("localhost", "root", "");
$conn->set_charset("utf8");
function mq($sql) { global $conn; return $conn->query($sql); }
?>