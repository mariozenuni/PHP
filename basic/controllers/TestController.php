<?php
namespace app\controllers;


use yii\web\Controller;

class TestController extends Controller{

    public function actionServer(){
        echo 'testing logic';
    }
    public function actionTesting(){
        return $this->render('testing');
    }
}

?>