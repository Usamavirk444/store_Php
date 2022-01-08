<?php
session_start();
$conn=mysqli_connect('localhost','root','','store_php');
if ($conn) {
    echo 'connected';
}
?>