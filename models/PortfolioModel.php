<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;

class PortfolioModel extends Model
{
    public function getPhoto($name){
        $portDir = [
            'Портфолио' => 'main',
            'Обо мне' => 'about',
            'Наши достижения' => 'nashi_dostig',
            'Портфолио класса' => 'portfolio_klassa'
        ];
        $masDir = scandir(Url::to('images\portfolio'));
        
        foreach ($masDir as $key => $value) {
            foreach ($portDir as $key1 => $value1) {
                if($value === $value1){
                    if($key1 === $name){
                        //echo Url::to("images\portfolio\\" . $value1 );
                        return array(scandir(Url::to("images\portfolio\\" . $value1 )), Url::to("images\portfolio\\" . $value1 ));
                    }
                }
            }
        }

    }
}
