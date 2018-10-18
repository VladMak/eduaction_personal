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
            'Наши достижения' => 'nashi_dostig'
        ];
        $masDir = scandir(Url::to('images\portfolio'));
        echo '<pre>+';
        echo Url::to("images\portfolio\\" . $masDir[$portDir[$name]] );
        echo '+</pre>';
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

        if($name === 'Портфолио'){
            echo Url::to("images\portfolio\\" . $masDir[2] );
            return array (scandir(Url::to("images\portfolio\\" . $masDir[2] )), Url::to("images\portfolio\\" . $masDir[2] ));
        }else if($name === 'Наши достижения'){
            //echo $masDir[3];
            return array (scandir(Url::to("images\portfolio\\" . $masDir[3] )), Url::to("images\portfolio\\" . $masDir[3] ));
        }else if($name === 'Обо мне'){
            return array (scandir(Url::to("images\portfolio\\" . $masDir[4] )), Url::to("images\portfolio\\" . $masDir[4] ));
        }
    }
}
