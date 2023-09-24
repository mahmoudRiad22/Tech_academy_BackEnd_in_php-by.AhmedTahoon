<?php
/* in this file we write all the function that will be used in this project */


//this function takes a path
//it scan the path and record the paths of FILES found only
//if a dir found it sends a msg of it
//return an array contain all the files paths
function GetAllTransactionFiles($MainFolderPath)
{
    //array files holder
    $filesArray = [];
    //iterate for each file in the folder and record it in the array

    foreach(scandir($MainFolderPath) as $FileFound )
    {
        // first check if the FileFound is a Dir or not
        //then if its not then record it in the array

        if(!is_dir($FileFound))
        {   
            //testing Code
            // echo  '</br>'."the Follwing path is a FILE". '</br>' ;
            $filesArray[] = $MainFolderPath.$FileFound;
            // print_r($filesArray) .'</br>'.'</br>';

        }
        else
        {
            //testing code
            // echo '</br>'. "the Follwing path is a FOLDER" .'</br>';
            //$filesArray = $MainFolderPath.$FileFound;
            // print_r($filesArray) .'</br>'.'</br>';
            //echo "this is a folder".$MainFolderPath.$FileFound .'</br>'; 
            //throw new Exception("THIS IS A FOLDER! at " .'</br>' );
               
        }


    }

//return all the files paths as an array
return $filesArray;
}



// takes a path 
// make sure its a file not a dir
//read the file line by line each line is a transaction array
// return an array of all transactions found in the file.
function ReadSingleFile($SingleFilePath)
{
    // chech the file exists or not
    if(file_exists($SingleFilePath))
    {
        //echo $SingleFilePath.'</br>'    ;

        // echo "FILE FOUND !!";
        $TransactionsArray = [];        
        // read the file using the given path
        $OpenedFile = fopen($SingleFilePath,'r');
        // echo "Opened File" . '</br>' . $OpenedFile;
        // read it as a csv file line by line
        while (($Transaction = fgetcsv($OpenedFile)) !== false )
        {
            //testing code
            // print_r ($Transaction);
            if ($Transaction !== null)
                {
                    $TransactionsArray[] = $Transaction; 
                }
        }
        // test what u read
        //continue operation


    }
    else 
    {
        throw NEW Exception("FILE NOT FOUND");
    }

return $TransactionsArray;
}

$Totals = ['TotalIncome' => 0, 'TotalExpense' =>0, 'TotalNet' =>0];

function CalculateTotals($AllTansactions)
{
    global $Totals;
    // calculate the total incomes
    foreach( $AllTansactions as $TransactionLine)
    {
         $TrueValue =str_replace(['$',','],'', $TransactionLine[3]);
        // echo $TrueValue .'</br>';
         $Totals['TotalNet'] += $TrueValue;
        
        if($TrueValue <0)
        {
            $Totals['TotalExpense'] += $TrueValue;
        }

        if($TrueValue >0)
        {
            $Totals['TotalIncome'] += $TrueValue;
        }
        
    }
    // print_r( $Totals);

return $Totals;
}



?>
