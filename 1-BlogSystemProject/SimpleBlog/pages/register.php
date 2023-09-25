<?php

//includes
include('../includes/header.php');

//requires
require_once('../classes/User.php');
require_once('../config/database.php');


if($_POST && isset($_POST['register']))
{
    
    $user = new User($PDO);

    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);

    $result = $user->Register($username, $password, $email);

    if($result === true)
    {
        // echo "user has been added to database";
        header('Location: ./login.php');
        exit;
    }
    else
    {
        // echo "something is wrong";
    }

/************************************************/
    //testing area
    // print_r($_POST);
    // echo $result;
}


?>

<h1>Rigester</h1>
<?php if (isset($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors as $element): ?>
                <li><?= $element?></li>
                <?php endforeach?>
        </ul>
    </div>
<?php endif?> 

<form method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary mt-2">Register</button>
                    </form>


<?php 
include('../includes/footer.php');  
?>