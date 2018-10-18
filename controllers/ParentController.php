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

    public function actionPage($name){
        $content = "test";
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
    }

    public function actionArticle($id, $page = 0){
        $name = [
            'Классный руководитель',
            'Родительские собрания',
            'План работы',
            'Новости класса'
        ];
        $model = new ParentModel();
        $article = $model->getArticle($id, $page);
        return $this->render('article', [
            'name' => $id,
            'article' => $article,
        ]);
    }

    public function actionSingle($id, $who){
        $model = new ParentModel();
        $article = $model->getSingleArticle($id, $who);
        return $this->render('single_post', [
            'name' => 'test',
            'article' => $article,
        ]);
    }
}
