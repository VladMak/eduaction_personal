<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\PortfolioModel;

class PortfolioController extends Controller
{
    public function actionPortfolio($name)
    {
    	$model = new PortfolioModel();
    	$model->getPhoto($name);
    	$path = '';
    	list($photos, $path) = $model->getPhoto($name);
    	//echo $test;
        return $this->render('portfolio', [
            'name' => $name,
            'path' => $path,
            'photos' => $photos
        ]);
    }

}
