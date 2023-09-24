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


