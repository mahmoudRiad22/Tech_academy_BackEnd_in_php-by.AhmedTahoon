<?php
session_start();

$_SESSION['myfavcolor'] = "My Fav Color is: blue!!";
$_SESSION['newmail'] = "My New Email is: makofenris@gmail.com";
$_SESSION['homephone'] = "My Home Phone is: 04033388803";

header("Location: http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/sessionpage.php");
?>