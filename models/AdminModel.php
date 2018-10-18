<?php

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class AdminModel extends ActiveRecord implements IdentityInterface{
	public static function tableName()
	{
		return 'admin';
	}

	public static function findIdentity($id){
		return static::findOne($id);
	}

	public static function findIdentityByAccessToken($token, $type = null){
		return static::findOne(['access_token' => $token]);
	}

	public function getId(){
		return $this->id;
	}

	public function getAuthKey(){
		return $this->auth_key;
	}

	public function validateAuthKey($authKey){
		return $this->getAuthKey() === $authKey;
	}

	
}