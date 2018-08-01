<?php

class Usuarios extends CActiveRecord{


	public function tableName(){
		return 'usuario';
	}

	public function rules(){
		return [
			["email, clave, ciudad","required"]
		];
	}
	public static function model($ClassName=__CLASS__){
		return parent::model($ClassName);
	}


}


