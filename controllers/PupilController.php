<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\PupilModel;

class PupilController extends Controller
{
    public function actionIndex($id)
    {
        $model = new PupilModel();
        $name = $model->getName($id);
        $content = $model->getContent($id);
        return $this->render('index', [
            'name' => $name,
            'content' => $content
        ]);
    }
}
