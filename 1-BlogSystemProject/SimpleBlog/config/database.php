<?php
// to be able to connect to a database u need to provide the 
//information about this database and connect to it
// to be able to connect to the database we use somethign called PDO

//DATABASE INFO
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Ec=XsyCyGPsSW5Fc_tcJH4eZE+mcyhd38=w3');
define('DB_NAME', 'simpleblog');

//connect using PDO
// also using try and catch to prevent the errors from stoping the whole thing

try
{
    $dsn_info = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;

    $PDO = new PDO($dsn_info, DB_USER, DB_PASSWORD);   
}
catch(PDOException $exception)
{
    echo $exception;
}

?>