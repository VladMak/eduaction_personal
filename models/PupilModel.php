<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\PupilContent;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class PupilModel extends Model
{
    public function getName($id = 0){
        $title = $this->getPages($id)['title'];
        return $title;
    }

    public function getContent($id = 0){
        $content = $this->getPages($id)['content'];
        $content = explode('\n', $content);
        return $content;
    }

    public function getPages($id = 0){
        $page = PupilContent::find()->all();
        for($i = 0; $i < count($page); $i++){
            if($i == $id){
                return $page[$i];
            }
        }
    }
}
