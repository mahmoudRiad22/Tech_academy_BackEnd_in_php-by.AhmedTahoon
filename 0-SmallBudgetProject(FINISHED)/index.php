<?php	
//echo "the project is connected and working fine	";

// SetUp the Paths for all project directories

$ProjectPath =  __DIR__.DIRECTORY_SEPARATOR;
//echo $ProjectPath.'</br>';

define ('FUNCTIONS_PATH', $ProjectPath."Functions" .DIRECTORY_SEPARATOR);
//echo FUNCTIONS_PATH.'</br>';

define('TRANSACTIONS_PATH', $ProjectPath."Transactions".DIRECTORY_SEPARATOR);
//echo TRANSACTIONS_PATH.'</br>';

define('VIEW_PATH', $ProjectPath."View".DIRECTORY_SEPARATOR);
//echo VIEW_PATH.'</br>';


require FUNCTIONS_PATH.'Functions.php';


// this var hold the path to all the files in the transaction FOLDER
$FitchedFiles = GetAllTransactionFiles(TRANSACTIONS_PATH); 

// test what u got
// print_r($FitchedFiles);

$ALLTransactiosnArray=[]; //an array to hold all transaction from all files
foreach($FitchedFiles as $file)
{
    $tempArray = ReadSingleFile($file);
    // everytime it reads a new file
    //it add it to the last version of all transaction array
   $ALLTransactiosnArray = array_merge($ALLTransactiosnArray,$tempArray);
}

$totals = CalculateTotals($ALLTransactiosnArray);

// apply the html file to appear on the page
require VIEW_PATH.'trasnsactios.php';





?>