<?php

namespace Models;


class Table
{
    public function drawTopBorder($borderLength){
        echo "|";
        $i = 0;
        while($i < $borderLength){
            echo "=";
            $i++;
            if($i == $borderLength) {
                echo "|\n|";
            }
        }
    }

    public function  drawInnerBorder($borderLength){
        echo "\n|";
        $i = 0;
        while($i < $borderLength){
            echo "-";
            $i++;
            if($i == $borderLength) {
                echo "|\n|";
            }
        }
    }

    public function drawBottomBorder($borderLength){
        echo "|";
        $i = 0;
        while($i < $borderLength){
            echo "=";
            $i++;
            if($i == $borderLength) {
                echo "|\n";
            }
        }
    }

    public function drawTableHeader($columnNamesArray){
        foreach ($columnNamesArray as $columnName){
            echo " $columnName |";
        }
    }

    public function drawTableRows(){
        //TODO: method to draw values in rows of table

    }


    

}