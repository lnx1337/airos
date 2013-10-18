<?php

class ProductosController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view','Linea','otro','sublinea','search','autocom'),
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
		$model=$this->loadModel($id);
		$modelRelacionados=Productos::model()->findAll(array('condition'=>'sublinea_id='.$model->sublinea_id));
		$this->render('view',array('model'=>$model,'modelRelacionados'=>$modelRelacionados));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Productos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Productos']))
		{
		     
	        $filename=uniqid().'.jpg';
			$_FILES['Productos']['name']['imagen']=$filename;
            $model->imagen=CUploadedFile::getInstance($model,'imagen');
            $filepath= Yii::app()->basePath.'/../PrinprodImages/'.$filename;
			$model->attributes=$_POST['Productos'];

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

		if(isset($_POST['Productos']))
		{
			$model->attributes=$_POST['Productos'];
			
          if( $_FILES['Productos']['name']['imagen'] !=null){
               
               $filename=$model->imagen;
               
               if($model->imagen!=null)
               if(file_exists(Yii::app()->basePath.'/../PrinprodImages/'.$filename)){     
	                    unlink(Yii::app()->basePath.'/../PrinprodImages/'.$filename);	
	              }				
						$filename=uniqid().'.jpg';
			            $_FILES['Productos']['name']['imagen']=$filename;
                        $model->imagen=CUploadedFile::getInstance($model,'imagen');
                        $filepath= Yii::app()->basePath.'/../PrinprodImages/'.$filename;
			            $model->attributes=$_POST['Productos'];
						
						if($model->save()){
					        $model->imagen->saveAs($filepath);
							$this->redirect(array('view','id'=>$model->id));
						}	

			}else{

                if($model->save()){
			       $this->redirect(array('view','id'=>$model->id));
			    }
			}



		}

		$this->render('update',array(
			'model'=>$model,
		));
	}


	/*


$model->attributes=$_POST['Cuentas'];

			
			

	*/

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



		if(isset($_GET['Productos']['s'])){

		     $s=$_GET['Productos']['s'];
		     $dataProvider=new CActiveDataProvider('Productos',array('criteria'=>array('condition'=>' descripcion LIKE "%'.$s.'%" OR clave LIKE "%'.$s.'%"','order'=>'id DESC')));
			 
			 $this->render('index',array(
			'dataProvider'=>$dataProvider,

		     ));

		}else{

         $dataProvider=new CActiveDataProvider('Productos',array('pagination' => array('pageSize' => 12),'criteria'=>array('order'=>'descripcion_producto')));

		  $this->render('index',array(
		    	'dataProvider'=>$dataProvider,

		  ));

		}
			 


		
		
	}

    public function actionSublinea($id){


         $dataProvider=new CActiveDataProvider('Productos',array('pagination' => array('pageSize' => 12),'criteria'=>array('order'=>'descripcion_producto','condition'=>'sublinea_id='.$id)));

		  $this->render('index',array(
		    	'dataProvider'=>$dataProvider,

		  ));




   } 





  public function actionLinea($id){
  	
		$dataProvider=new CActiveDataProvider('Productos',array(
						'pagination' => array('pageSize' => 8),
						'criteria'=>array('condition'=>'linea_id="'.$id.'"')));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,

		));
  }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Productos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Productos']))
			$model->attributes=$_GET['Productos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionOtro(){


		print_r($_POST);
	}


    public function actionAutocom(){

        $json=array();
        if(isset($_GET['term'])){
        	
        	$modelAuto= Productos::model()->findAll(array('condition'=>' descripcion_producto LIKE "%'.$_GET['term'].'%"'));

        	foreach ($modelAuto as $key => $value) {
               $json[]=$value->descripcion_producto;
         	}

        	echo json_encode($json);
		 	 
	    }

}


	public function actionSearch(){

        if(isset($_POST['search'])){
		     $s=$_POST['search'];
		     $dataProvider=new CActiveDataProvider('Productos',array('criteria'=>array('condition'=>' descripcion_producto LIKE "%'.$s.'%" OR clave LIKE "%'.$s.'%"','order'=>'id DESC')));
			 $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_viewAll',
             ));
			 
	    }
/*
$s=$_GET['s'];
		     $dataProvider=new CActiveDataProvider('Productos',array('criteria'=>array('condition'=>' descripcion LIKE "%'.$s.'%" OR clave LIKE "%'.$s.'%"','order'=>'id DESC')));
			 $this->render('partial',array('dataProvider'=>$dataProvider),false,true);
			 */

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Productos::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='productos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
