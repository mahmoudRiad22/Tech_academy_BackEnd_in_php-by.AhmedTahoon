<!DOCTYPE html>
<hmtl lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>  
    <body>
        <h1>Welcome to the Contact page</h1>
        <h2>Your Name is:   <?=$_GET['name']?> </h2>
        <h3>your Username is:  <?=$_GET['username']?></h3>
        <h3>your E-mail is:  <?=$_GET['email']?></h3>
        <h3>your phone is:  <?=$_GET['phone']?></h3>
        <h3>something about you:    <?=$_GET['about']?></h3>
        <h3>here is a special tag: <?=$_GET['newtag']?></h3>
        <h2>Extra INFO: </h2><br><br>
        <?php
        session_start();
        echo $_SESSION['myfavcolor'].'<br>';
        echo $_SESSION['newmail'].'<br>';
        echo $_SESSION['homephone'].'<br>';

        ?>

    </body>
    </hmtl>

<?php 
var_dump($_POST);
echo $_POST['name'];
echo $_POST['password'];

?>    
