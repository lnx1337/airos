<?php

class AdminController extends Controller
{

	public $layout='//layouts/main';

	public function actionIndex()
	{
		$this->render('index');
	}


	public function actionInicio(){

      /* soria/index.php/contenido/update/1 */
	   $model=Contenido::model()->findByPk(1);
	   //print_r($model);
       $this->render('inicio',array('model'=>$model));
	}


	public function actionNosotros(){

	   $modelHistoria=Contenido::model()->findByPk(1);
	   $modelNosotros=$this->loadModel(2);
	   $modelMision=$this->loadModel(3);
	   $modelVision=$this->loadModel(4);
       $this->render('nosotros',array('modelHistoria'=>$modelHistoria,'modelNosotros'=>$modelNosotros,'modelMision'=>$modelMision,'modelVision'=>$modelVision));

	}

	public function loadModel($id)
	{
		$model=Contenido::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}



   public function actionDatos(){

   echo "Datos";

   }


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}