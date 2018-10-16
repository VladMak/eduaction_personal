<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class PortfolioController extends Controller
{
    public function actionPortfolio($name)
    {
        return $this->render('portfolio', [
            'name' => $name,
        ]);
    }

}
