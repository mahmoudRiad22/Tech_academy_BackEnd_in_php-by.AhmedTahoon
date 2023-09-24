<!DOCTYPE html>
<hmtl lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>  
    <body>
        <h2>EXTRA INFO: </h2>
        <?php
        session_start();
        echo $_SESSION['myfavcolor'].'<br>';
        echo $_SESSION['newmail'].'<br>';
        echo $_SESSION['homephone'].'<br>';
        ?>
    </body>
    </hmtl>