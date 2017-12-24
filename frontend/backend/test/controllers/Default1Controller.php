<?php

namespace frontend\backend\test\controllers;

use yii\web\Controller;

class Default1Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
