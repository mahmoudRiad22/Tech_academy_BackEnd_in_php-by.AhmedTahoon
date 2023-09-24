<?php
$_GET['id'] = 2;
$_GET['name'] = "mahmoud";
$_GET['email'] = "makofenris@gmail.com";
$_GET['phone'] = "01147557761";

            $name = "mahmoud";
            $user_name = "Mahmoud Riad22";
            $Email = "mahmoudriad027@gmail.com";
            $phone = "0403338803";
            $about = urlencode("Iam still learing stuff about this php things");
            $newtag = urlencode(htmlspecialchars("<MAHMOUD>"));

?>  
<!DOCTYPE html>
<hmtl lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>  
    <body>
        <h1>Welcome to the HOME page</h1>
        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/login.php">
            <b><h1>LOGIN</h1></b></a>

        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/contact.php
        ?name=<?=$name?>&username=<?=$user_name?>&email=<?=$Email?>&
        phone=<?=$phone?>&about=<?=$about?>&newtag=<?=$newtag?>">
            <h1>Contact</h1></a>

        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/session.php">
            <h1>Session</h1></a>
        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/header.php">
            <h1>Download</h1></a>

        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/cookies.php">
            <h1>cookies</h1></a>
    </body>
    </hmtl>