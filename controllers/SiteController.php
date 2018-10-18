<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SiteModel;
use yii\helpers\Url;
use app\models\PortfolioModel;
use app\models\News;

/*
Добавить даты и подписи к грамотам и фото
Страница Дни рождения переименовать (Фамилия Имя и дата рождения)

*/

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $news = array_slice(News::find()->all(), -10, 10);
        $slider_path = Url::to('images\slider');
        $slider = scandir(Url::to('images\slider'));
        return $this->render('index', [
            'news' => $news,
            'slider_path' => $slider_path,
            'slider' => $slider,
        ]);
    }

    public function actionPhoto()
    {
        $main_nav = new SiteModel();
        $id = 1;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('photo', [
            'name' => $name,
            'content' => $content,
        ]);
    }

   
    public function actionGto()
    {
        $main_nav = new SiteModel();
        $id = 2;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('gto');
    }


    public function actionAbout($name){
        $model = new PortfolioModel();
        list($photos, $path) = $model->getPhoto($name);
        $content = 'Равным образом реализация намеченных плановых заданий представляет собой интересный эксперимент проверки систем массового участия. Равным образом дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки соответствующий условий активизации. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям. ';
        $img = Url::base().'/' . 'images/img/01.jpg';
        return $this->render('about', [
            'name' => 'Обо мне',
            'content' => $content,
            'img' => $img,
            'photos' => $photos,
            'path' => $path,
        ]);
    }
}
