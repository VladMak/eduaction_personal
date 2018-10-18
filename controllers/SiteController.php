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

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        /*
        Свежие новости: дату добавить
        Новости еще должны раскрываться, попробовать через Vue
        */
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionPortfolio()
    {
        $main_nav = new SiteModel();
        $id = 0;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
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

    /*
    https://www.gto.ru/
    Что такое ГТО
    Что я должен уметь
    Как статьи сделать
    И ещё нормативы по ступеням
    Вот все с этого сайта можно взять
    Кстати этот сайт можно в ссылки затолкать)
    */
    public function actionGto()
    {
        $main_nav = new SiteModel();
        $id = 2;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('gto');
    }

    public function actionClassruk()
    {
        $main_nav = new SiteModel();
        $id = 3;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
    }

    public function actionVneklrab()
    {
        $main_nav = new SiteModel();
        $id = 4;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
    }

    public function actionNpb($id = 'npb')
    {
        $main_nav = new SiteModel();
        $id = 5;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
    }

    public function actionWhy($id = 'why')
    {
        $main_nav = new SiteModel();
        $id = 6;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
    }

    public function actionDoc($id = 'doc')
    {
        $main_nav = new SiteModel();
        $id = 7;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
    }

    public function actionTech($id = 'tech')
    {
        $main_nav = new SiteModel();
        $id = 8;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
    }

    public function actionPolicy($id = 'policy')
    {
        $main_nav = new SiteModel();
        $id = 9;
        $name = $main_nav->getName($id);
        $content = $main_nav->getContent($id);
        return $this->render('page', [
            'name' => $name,
            'content' => $content,
        ]);
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
        ]);
    }
}
