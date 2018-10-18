<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class TableController extends Controller
{
    public function actionTable($id)
    {
        return $this->render('index');
    }
}
