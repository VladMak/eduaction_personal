<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class AdminController extends Controller
{
    public function behaviors(){
        return[
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    'allow' => true,
                    'actions' => ['login', 'signup'],
                    'roles' => ['?'],
                ],
                [
                    'allow' => true,
                    'actions' => ['logout'],
                    'roles' => ['@'],
                ]
            ]
        ]
    }

    public function actionIndex($id)
    {
       return $this->render();
    }
}
