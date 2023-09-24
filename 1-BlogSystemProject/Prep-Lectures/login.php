<!DOCTYPE html>
<hmtl lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>  
    <body>
        <h1>welcome to LOGIN Page</h1>
        <?php
            $name = "mahmoud";
            $user_name = "Mahmoud Riad22";
            $Email = "mahmoudriad027@gmail.com";
            $phone = "0403338803";
            $about = urlencode("Iam still learing stuff about this php things");
            $newtag = urlencode(htmlspecialchars("<MAHMOUD>"));
        ?>
        <form
        action="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/contact.php
        ?name=<?=$name?>&username=<?=$user_name?>&email=<?=$Email?>&
        phone=<?=$phone?>&about=<?=$about?>&newtag=<?=$newtag?>" 
        method="POST">
            <label>Name: </label>
            <input name="name" type="text" placeholder="your name">
            <br><br>
            <label>Password: </label>
            <input name="password" type="text" placeholder="password">
            <button type="submit">Login</button>

        </form>
    </body>
    </hmtl>


