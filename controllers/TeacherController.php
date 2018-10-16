<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\TeacherModel;

class TeacherController extends Controller
{
    public function actionIndex($id)
    {
        $model = new TeacherModel();
        $name = $model->getName($id);
        $content = $model->getContent($id);
        return $this->render('index', [
            'name' => $name,
            'content' => $content
        ]);
    }

    public function actionArticle($id, $page = 0){
        $name = [
            'Классный руководитель',
            'Родительские собрания',
            'План работы',
            'Новости класса'
        ];
        $model = new TeacherModel();
        $article = $model->getArticle($id, $page);
        return $this->render('article', [
            'name' => $id,
            'article' => $article,
        ]);
    }

    public function actionSingle($id, $who){
        $model = new TeacherModel();
        $article = $model->getSingleArticle($id, $who);
        return $this->render('single_post', [
            'name' => 'test',
            'article' => $article,
        ]);
    }
}
