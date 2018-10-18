<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\ParentContent;
use app\models\ParentArticle;

class ParentModel extends Model
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
        $page = ParentContent::find()->all();
        for($i = 0; $i < count($page); $i++){
            if($i == $id){
                return $page[$i];
            }
        }
    }

    public function getArticle($name, $page){
        $model = ParentArticle::find()->where(['who' => $name])->all();
        $new_model = [];
        if(count($model) > 10){
            for($i = ($page + 1) * 10 - 10; $i < ($page + 1) * 10; $i++){
                if(isset($model[$i])){
                    array_push($new_model, $model[$i]);
                }
            }
        }else{
            $new_model = $model;
        }
        return $new_model;
    }

    public function getSingleArticle($id, $who){
        $model = ParentArticle::find()->where(['who' => $who, 'id' => $id])->all();
        
        return $model;
    }
}
