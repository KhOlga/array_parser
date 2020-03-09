<?php

use Models\Data;
use Models\Table;

require "Models/Data.php";
require "Models/Table.php";

//$file = "data.csv";
$file = "draw_data.txt";
$openfile = fopen($file, "w") or die("Unable to open file!");
fclose($openfile);
file_put_contents($file, "");


$input = Data::inputData();
$inputArray = Data::loadData($input);

$arrayKeysUnique = Data::getUniqueKeys($inputArray);
//print_r($arrayKeysUnique);

Table::drawTopBorder(86);

Table::drawTableHeader($arrayKeysUnique);

Table::drawInnerBorder(86);



##### ПЕРЕБИРАЄМО МАСИВ $inputArray З УСІМА ЗНАЧЕННЯМИ ТА ВИБИРАЄМО МАСИВИ $partArray, ЯКІ МІСТЯТЬ ЗНАЧЕННЯ КОНКРЕТНОЇ ВИБОРКИ #####
$row_number = count($inputArray);
$c = count($inputArray);

$tmpAr = array();

foreach($inputArray as $item => $partInputArray)
{
    #######################################################################################################
    $lenght = 0;
    //$maxElementArray = strlen(current($partInputArray));


    foreach($partInputArray as $value){

        $len = strlen($value);

        if($len > 0){
            array_push($tmpAr, $len);
        } else {
            array_push($tmpAr, 0);
        }

    }


    #######################################################################################################
    $c--;
    //echo $c;


    $data = "";
    $q = 0;
    foreach($arrayKeysUnique as $keyUnique => $val)
    {
        $q++;
        $dataChunk = "";
        foreach($partInputArray as $keyPartInputArray => $valuePartInputArray)
        {
            if($keyUnique == $keyPartInputArray)
            {
                $dataChunk = $valuePartInputArray;
                break;
            }
        }

        $data .= $dataChunk ;

        $size = count($arrayKeysUnique);

        if($q != $size)
        {
            //echo "q=" . $q;
            $data .= "|";
        }
    }
    $data .= "|\n";

        if($c != 0){
            echo $data . "\n|";
        } else {
           echo $data . "\n";
        }

}

Table::drawBottomBorder(86);


//print_r($tmpAr);
rsort($tmpAr);
//print_r($tmpAr);


//echo current($tmpAr) * 5 + (5 + 1) . "\n";