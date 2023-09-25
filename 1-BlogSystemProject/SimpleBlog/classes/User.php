<?php

class User
{
    private $PDO;

    public function __construct(PDO $pdo)
    {
            $this->PDO = $pdo;
    }

    public function Register($username, $password, $email)
    {
        $errors = array();
        // echo "we called register".'<br>';
        //validate the data 1st
        if(empty($username))
            {$errors = "pleasae enter a username."; 
            echo "username error";}
        if(empty($password))
            {$errors = "please enter a password.";
            echo "apssword error";}
        if(empty($email))
            {$errors = "please enter an email";
            echo "email error";}

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {$errors = "please enter a valid email";
            echo "email validation error";}
        

        
        //CHECK IF THE DATA GIVEN ALREADY EXIST
        $statment = $this->PDO->prepare
        ("SELECT COUNT(*) FROM users WHERE username = :username OR email = :email");
        
        $statment->execute(array(':username' => $username, ':email' => $email));
    
        $count = $statment->fetchColumn();
                // echo $count.'<br>';
                // print_r($errors); echo '<br>';
        if($count > 0)
        {
            $errors = "Username or Email already registered";
        } 
        else
        {
            if(empty($errors))
            {   
                // echo "we going to add teh data to the database";
                //add the data to the database
                //1-hash the password
                $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                echo $hashed_password;
                //2- prepare the query
                $statment = $this->PDO->prepare
                (   "INSERT INTO users (username, email, password) 
                    VALUES (:username, :email, :password)");
                //3- Excute the query
                $statment->execute
                (array(':username' => $username,
                        ':email'=>$email,
                        ':password' =>$hashed_password));

                return (true);
            }
            else
            {
                // echo "the error array is not empty";
                return ($errors);
            }
        }

    /************************************************/
        //testing
        // echo $username."  ". $password ."   ". $email;
        // return ("recieved");
    }
}


?>