<?php
/***********ONLY THE FIRST HEADER WILL BE EXCUTED************/
/***so Uncomment the code u want to test*******/


// this will produce an error page in your brower
// header("HTTP/1.1 404 Not Found");

// this code will create prompt to download a png file
header('Content-Type: application/png');
header('Content-Disposition: attachment; filename="downloaded_pp.png"');
readfile('profilePicture.png');

//this code will prompt u to downlaod a txt file
// header('Content-Type: application/text');
// header('Content-Disposition: attachment; filename="downloaded.txt"');
// readfile('plan.txt');


//this code will redirect u to the given url
// header("Location: https://www.php.net/manual/en/function.header.php");


//I have no Examples about the Json header

?>
