<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {

        // echo 'ทดสอบที่ใหญ่สุด 1';
        $a = 3;
        $b = 5;
        $sum = $a + $b;

        return $this->render('test1', ['sum' => $sum]);
    }
    public function actionTest2($name=null,$lname=null) {

        // echo 'ทดสอบที่ใหญ่สุด 1';
        $info = "Your ท่านชื่อ $name  $lname";

        return $this->render('test2', ['info' => $info]);
    }
}
