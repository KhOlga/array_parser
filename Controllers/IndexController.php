<?php

namespace Controllers;

use Models\Data;

class IndexController extends BaseController
{
    public function actionIndex()
    {
        $data = new Data();
        $this->render( 'index/index.php', ['data'=>$data]);

    }

    /*public function showData(){
        $input = Data::inputData();
        $inputArray = Data::loadData($input);
    }*/
}