<?php

namespace Models;

include "./variables.php";

class Data
{
    public $input_data;

    /**
     * @return mixed
     */
    public function inputData()
    {
        $input = include "data_files/data.php";
        return $input;
    }

    /**
     * @return mixed
     */
    public function loadData($input_data)
    {
        if (!empty($input_data)) {

            ### IT IS WORKING ###
            if (is_array($input_data)) {

                $data = $input_data;

            } else {
                echo "Input data is not found";
            }

            return $data;
        }

    }


    public function getUniqueKeys($data){
        ##### ПЕРЕБИРАЄМО  МАСИВИ З УСІМА КЛЮЧАМИ ТА ЗАПИСУЄМО КЛЮЧІ В ОДИН ГЛОБАЛЬНИЙ МАСИВ #####

        $allKeys = array();

        foreach ($data as $key => $partData){
            foreach ($partData as $key => $value){
                if(!empty($key)) {
                    array_push($allKeys, $key);
                }
            }
        }

        ##### ВИБИРАЄМО З ГЛОБАЛЬНОГО МАСИВУ $allKeys УНІКАЛЬНІ ЗНАЧЕННЯ ТА ЗАПИСУЄМО ЇХ У МАСИВ $arrayKeysUnique #####
        $keysUnique = array();
        $keysUnique = array_unique($allKeys);


        ##### СОРТУЄМО АСОЦІАТИВНИЙ МАСИВ $arrayKeysUnique ТА СТВОРЮЄМО МАСИВ, В ЯКОМУ КЛЮЧІ ДОРІВНЮЮТЬ ЗНАЧЕННЯМ #####
        sort($keysUnique, SORT_STRING);
        $keysUnique = array_combine($keysUnique, $keysUnique);

        return $keysUnique;

    }
}
