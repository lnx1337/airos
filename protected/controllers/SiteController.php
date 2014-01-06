<?php

class SiteController extends Controller
{

	public $layout='//layouts/main';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		
		
		$dataProvider=new CActiveDataProvider('Productos',array('pagination' => array('pageSize' => 12),'criteria'=>array('order'=>'RAND()','limit'=>12)));
       
       
		  $this->render('index',array(
		    	'dataProvider'=>$dataProvider
		  ));


		  
	}


	public function actionProductos(){
		$this->render('productos');
	}

	public function actionNosotros(){


		$dataProvider=new CActiveDataProvider('Productos',array('pagination' => array('pageSize' => 12),'criteria'=>array('order'=>'RAND()','limit'=>1)));
        $modelContenido= Contenido::model()->findAll(array('condition'=>'posiciones_id in (1,2,3,4)'));
		$modelImagesNosotros=ImagenesNosotros::model()->findAll();
		$this->render('nosotros',array('modelContenido'=>$modelContenido,'dataProvider'=>$dataProvider,'modelImagesNosotros'=>$modelImagesNosotros));
	}

	public function actionContacto(){
      $model=new Contacto;
      $modelProductos=Productos::model()->findAll(array('order'=>'descripcion_producto'));


       

		if(isset($_POST['Contacto']))
		{
			$model->attributes=$_POST['Contacto'];
			
			if($model->save()){
                if(isset($_POST['Productos']))
                foreach ($_POST['Productos'] as $key => $value) {
                    $modelProductosHasTblContacto=new ProductosHasTblContacto;
                    $modelProductosHasTblContacto->contacto_id=$model->id;
                    $modelProductosHasTblContacto->producto_id=$value;
                    $modelProductosHasTblContacto->save();
                }
				$this->redirect(array('contacto?sk=1'));

			}	

		}
      
      $this->render('//contacto/create',array('model'=>$model,'modelProductos'=>$modelProductos));

	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}


	

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){

				        $this->redirect(Yii::app()->createUrl('admin/index'));

			}
				//$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}