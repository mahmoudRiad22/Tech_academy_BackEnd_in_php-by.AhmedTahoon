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