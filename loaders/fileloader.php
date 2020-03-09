<?php
require "../variables.php";


function loadFile(){

    $path = ROOT. DIRECTORY_SEPARATOR . "data_files" . DIRECTORY_SEPARATOR . "data.php";

    //var_dump($path);
    ##### ПЕРЕВІРЯЄМО, ЧИ ФАЙЛ ІСНУЄ #####
    if(file_exists($path)) {

        ##### ЗАПИСУЄМО ФАЙЛ В СТРОКУ #####
        $string = file_get_contents($path);
        var_dump($string);
        return $string;
    } else {
        echo "something wrong";
    }


}

//var_dump($path);
loadFile();


### not working ###
/*function loadFile($file){
    $dataFiles = $_SERVER['DOCUMENT_ROOT'].'/data_files';
    if(is_uploaded_file($file["tmp_name"]))
    {
        move_uploaded_file($file["tmp_name"], "$dataFiles/".$file["name"]);
        var_dump($file);
    } else {
        echo("Помилка завантаження файлу");
    }
}*/
