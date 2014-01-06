<?php

class LineasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','Busqueda','Sublineas'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
		
	}




	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Lineas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lineas']))
		{
			$filename=uniqid().'.jpg';
			$_FILES['Lineas']['name']['imagen']=$filename;
            $model->imagen=CUploadedFile::getInstance($model,'imagen');
            $filepath= Yii::app()->basePath.'/../lineasImages/'.$filename;
			$model->attributes=$_POST['Lineas'];

			if($model->save()){
		        $model->imagen->saveAs($filepath);
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lineas']))
		{
			 if( $_FILES['Lineas']['name']['imagen'] !=null){
               
               $filename=$model->imagen;
               
               if($model->imagen!=null)
	               if(file_exists(Yii::app()->basePath.'/../lineasImages/'.$filename)){   
		                    unlink(Yii::app()->basePath.'/../lineasImages/'.$filename);	
		            }

						$filename=uniqid().'.jpg';
			            $_FILES['Lineas']['name']['imagen']=$filename;
                        $model->imagen=CUploadedFile::getInstance($model,'imagen');
                        $filepath= Yii::app()->basePath.'/../lineasImages/'.$filename;
			            $model->attributes=$_POST['Lineas'];
						
						if($model->save()){
					        $model->imagen->saveAs($filepath);
							$this->redirect(array('view','id'=>$model->id));
						}	
	           
              

			}else{
			     $model->attributes=$_POST['Lineas'];

                if($model->save()){
			       $this->redirect(array('view','id'=>$model->id));
			    }
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

       if(isset($_GET['Lineas']['s'])){
		     $s=$_GET['Lineas']['s'];
		     $dataProvider=new CActiveDataProvider('Lineas',array('criteria'=>array('condition'=>' descripcion LIKE "%'.$s.'%" OR clave LIKE "%'.$s.'%"','order'=>'id DESC')));
			 	 
			 $this->render('index',array(
				'dataProvider'=>$dataProvider,
			));

	    }else{

			$dataProvider=new CActiveDataProvider('Lineas',array(
							'pagination' => array('pageSize' => 8) ));
					$this->render('index',array(
						'dataProvider'=>$dataProvider,
		            ));

	    }


		

		
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Lineas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Lineas']))
			$model->attributes=$_GET['Lineas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}



	public function actionBusqueda(){

        if(isset($_POST['Lineas']['s'])){
		     $s=$_POST['Lineas']['s'];
		     $dataProvider=new CActiveDataProvider('Lineas',array('criteria'=>array('condition'=>' descripcion LIKE "%'.$s.'%" OR clave LIKE "%'.$s.'%"','order'=>'id DESC')));
			 

			 
			 $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
			    )); 

	    }
	}

	public function actionSublineas(){

         $modeSublineas=Sublineas::model()->findAll(array('condition'=>'linea_id='.$_POST['Lineas']['id']));
         $json=array();
         $Sublineas=CHtml::tag('option',array('value'=>''),CHtml::encode('Sublineas'),true);
         foreach ($modeSublineas as $key => $value) {
             $Sublineas.=CHtml::tag('option',array('value'=>$value->id),CHtml::encode($value->descripcion),true);
         }
         $json['Sublineas']=$Sublineas;
         echo json_encode($json);

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Lineas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lineas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
