<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\TitleContent;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SiteModel extends Model
{
    public $main_navigation = [
        'Портфолио',
        'Фото',
        'ГТО',
        'Классный руководитель',
        'Внеклассная работа',
        'НПБ',
        'Почему мы?',
        'Документы',
        'Техническая поддержка',
        'Политика приватности',
    ];

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
        $page = TitleContent::find()->all();
        return $page[$id];
    }
}
