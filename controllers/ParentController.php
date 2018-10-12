<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ParentModel;

class ParentController extends Controller
{
    public function actionIndex($id)
    {
        $model = new ParentModel();
        $name = $model->getName($id);
        $content = $model->getContent($id);
        return $this->render('index', [
            'name' => $name,
            'content' => $content
        ]);
    }
}
