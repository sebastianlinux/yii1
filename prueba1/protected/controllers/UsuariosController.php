<?php

class UsuariosController extends Controller{

	public function actionIndex(){
		/*$model = new Usuarios();
		$model->email="test@prueba.com";
		$model->clave="[s{}]/&#!";
		$model->ciudad="Medellín";
		$model->save();
		*/
		$usuarios = Usuarios::model()->findAll();
		$this->render('index',["usuarios"=>$usuarios]);
	}

	public function actionCreate(){

		$model = new Usuarios();
		if(isset($_POST['Usuarios'])){
			/*var_dump($_POST);
			Yii::app()->end();*/
			$model->attributes = $_POST['Usuarios'];
			/*$model->email = $_POST['Usuarios']['email'];
			$model->clave = $_POST['Usuarios']['clave'];
			$model->ciudad = $_POST['Usuarios']['ciudad'];*/
			if($model->save()){
				echo "guardado exitoso";
				$this->redirect(["index"]);
			}else{
			}
		}

		$this->render('create',["model"=>$model]);
	}

	public function actionUpdate($id)
	{
		$model = Usuarios::model()->findByPk($id);
		if(isset($_POST['Usuarios'])){
			$model->attributes = $_POST['Usuarios'];
			if($model->save()){
				$this->redirect(["index"]);
			}
		}
		$this->render('update',["model"=>$model]);
	}

	public function actionDelete($id){
		$model = Usuarios::model()->deleteByPk($id);
		$this->redirect(["index"]);
	}

}