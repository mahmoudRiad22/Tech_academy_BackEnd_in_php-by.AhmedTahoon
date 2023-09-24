## this is a summary of what i learned in the lectures 22.23,24,25.

#$_GET():

## this is used to access the data send in the url given or redirected to
### the data that is send in the url is passed and accessed using the GET();

### Example of data sent:
```
 <h1>welcome to LOGIN Page</h1>
        <form
        action="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/contact.php
        ?name=mahmoudRiad&
        Username=MahmoudRiad22&
        Email=mahmoudriad027@gmail.com&
        phone=01023258052" 
        method="post">
            <label>Name: </label>
            <input name="name" type="text" placeholder="your name" value="">
            <br><br>
            <label>Password: </label>
            <input type="text" placeholder="your password" value="">
            <button type="submit">Login</button>
```

### Example of How to access them using GET():
```
 <h1>Welcome to the Contact page</h1>
        <h2>Your Name is:   <?=$_GET['name']?> </h2>
        <h3>your Username is:  <?=$_GET['Username']?></h3>
        <h3>your E-mail is:  <?=$_GET['Email']?></h3>
        <h3>your phone is:  <?=$_GET['phone']?></h3>
```
## If you have a string that has space and stuff even tags in it and u want to sent as data:
### then use the function urlencode();
###Example of how u send it
```
<body>
        <h1>welcome to LOGIN Page</h1>
        <?php
            $name = "mahmoud";
            $user_name = "Mahmoud Riad22";
            $Email = "mahmoudriad027@gmail.com";
            $phone = "0403338803";
            $about = urlencode("Iam still learing stuff about this php things");
        ?>
        <form
        action="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/contact.php
        ?name=<?=$name?>&username=<?=$user_name?>&email=<?=$Email?>&phone=<?=$phone?>&about=<?=$about?>" 
        method="post">
            <label>Name: </label>
            <input name="name" type="text" placeholder="your name" value="">
            <br><br>
            <label>Password: </label>
            <input type="text" placeholder="your password" value="">
            <button type="submit">Login</button>

        </form>
    </body>
```

## Now this is how u read it:
```<body>
        <h1>Welcome to the Contact page</h1>
        <h2>Your Name is:   <?=$_GET['name']?> </h2>
        <h3>your Username is:  <?=$_GET['username']?></h3>
        <h3>your E-mail is:  <?=$_GET['email']?></h3>
        <h3>your phone is:  <?=$_GET['phone']?></h3>
        <h3>something about you:    <?=$_GET['about']?></h3>

    </body>
```

## htmlspecialchar():
### this method is used to translate special char in html into a normal string
### then to send it in the urls as a query then access it using $_GET
### u can use somethign like this:
### 1-SEND IT:
```
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
        method="post">
            <label>Name: </label>
            <input name="name" type="text" placeholder="your name" value="">
            <br><br>
            <label>Password: </label>
            <input type="text" placeholder="your password" value="">
            <button type="submit">Login</button>

        </form>
    </body>
```

### 2-READ IT:
```
<body>
        <h1>Welcome to the Contact page</h1>
        <h2>Your Name is:   <?=$_GET['name']?> </h2>
        <h3>your Username is:  <?=$_GET['username']?></h3>
        <h3>your E-mail is:  <?=$_GET['email']?></h3>
        <h3>your phone is:  <?=$_GET['phone']?></h3>
        <h3>something about you:    <?=$_GET['about']?></h3>
        <h3>here is a special tag: <?=$_GET['newtag']?></h3>

    </body>
```
##################################################################################
################# HEADER ##########################
## Headers can be used to produce the following:
- Error
- Download
- Redirect
- Json
```
<?php
/***********ONLY THE FIRST HEADER WILL BE EXCUTED************/
/***so Uncomment the code u want to test*******/


// this will produce an error page in your brower
// header("HTTP/1.1 404 Not Found");

// this code will create prompt to download a png file
// header('Content-Type: application/png');
// header('Content-Disposition: attachment; filename="downloaded_pp.png"');
// readfile('profilePicture.png');

//this code will prompt u to downlaod a txt file
// header('Content-Type: application/text');
// header('Content-Disposition: attachment; filename="downloaded.txt"');
// readfile('plan.txt');


//this code will redirect u to the given url
// header("Location: https://www.php.net/manual/en/function.header.php");


//I have no Examples about the Json header

?>

```
#############################################################################
############################# $_POST ###########################################
### from what i undestand its an array contain the information that the user entered:

#### for example this code will create a page to take a name and a password
#### these info will be saved in the $_POST
```
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
```

#### and this code will acess that info
```

<?php 
var_dump($_POST);
echo $_POST['name'];
echo $_POST['password'];

?>
```
#############################################################################
################################### COOKIE ##################################

### cookies are a file that is created once u open a website
### this file is temp depending on the expiration time set
#### assuming u have a code for the home page as this 
```
<body>
        <h1>Welcome to the HOME page</h1>
        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/login.php">
            <b><h1>LOGIN</h1></b></a>

        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/header.php">
            <h1>Download</h1></a>

        <a href="http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/cookies.php">
            <h1>cookies</h1></a>
    </body>
```

#### then u clicked on cookies and the cookies page that contain this code
```
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cookies</title>
    </head>

    <body>
            <?php
            $info = "last time loggeed in".time();
            $infoArray = array( 'name'=>'Name: mahmoud', 
                                'Email'=>'Email: mahmoudriad027@gmail.com',
                                'phone'=>'phone: 01023258052',
                                'lastLog'=>"LastLog:".time());
                setcookie('Lastlogged', $info, time() + (1*60*60),);
                setcookie('Info', json_encode($infoArray), time()+(1*24*60*60));

                if(isset($_COOKIE['Info']))
                {
                    $value_decoded = json_decode($_COOKIE['Info']);
                    foreach($value_decoded as $element)
                    {
                        echo $element.'<br>';
                    }
                }
        ?>

        <h2><?= $_COOKIE['Lastlogged']?></h2>
        <h2><?= $_COOKIE['Info']?></h2>
    </body>

    </html>
```
#############################################################################
#################################### SESSION ################################
### the session conatin information that can be seen from every page in the project and its terminated once the website is closed

#### to interacte with the data saved in the global variable $_SESSION u MUST 
#### Start a session regardless if u are adding or reading this data
#### to start a session u type
``` session_start();```
#### then after that u either add or access the data
### here is an Example:
```
<?php
//this code will start a session save some data the redirect to a new page where u can access these data

session_start();

$_SESSION['myfavcolor'] = "My Fav Color is: blue!!";
$_SESSION['newmail'] = "My New Email is: makofenris@gmail.com";
$_SESSION['homephone'] = "My Home Phone is: 04033388803";

header("Location: http://localhost/ProjectsRoom/BlogSystem/Prep-Lectures/sessionpage.php");
?>
```
### Acess the data in another page aka file
```
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
```
### or u can access it in another page called contact
```
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

```
#################################################################
## By this we will be done with the pre lectures and tomorrow we will start with the BLOGSYSTEM Project

