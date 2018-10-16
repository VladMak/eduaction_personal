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


    /*
    --------------------
    Наши достижения - как портфолио
    Фильмы о спорте - как новости, только видео, ссылки на ютюб

    Расписание как таблица

    Дни рождения просто страница и текст
    ------------------------
    Классный руководитель, родительские собрания, план работы, уроки, ФГОС материалы это можно сделать как статьи с возможностью прикрепления файлов
    */
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
