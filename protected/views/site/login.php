
<!-- Header Starts -->
<header>
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="logo">
          <h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png"></h1>
          <div class="hmeta"></div>
        </div>
      </div>
      <div class="span12"><h3>PANEL DE ADMINISTRACIÓN</h3></div>
    </div>
  </div>
</header>

<!-- Navigation bar starts -->
          <div class="navbar">
           <div class="navbar-inner">
             <div class="container">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span>Menu</span>
               </a>
               <div class="nav-collapse collapse">
                <!-- <ul class="nav">
                   <li><a href="#">Inicio</a></li>
                   
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Productos<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Nuevo Producto</a></li>
                        <li><a href="#">Editar Producto</a></li>
                        <li><a href="#">Consultar Productos</a></li>
                      </ul>
                   </li>                   
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Líneas<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Nueva Línea (Categoría)</a></li>
                        <li><a href="#">Editar Línea</a></li>
                        <li><a href="#">Consultar Lñineas</a></li>
                      </ul>
                   </li>
                   <li><a href="#">Adm. Inicio</a></li>
                   <li><a href="#">Adm. Slider</a></li>
                   <li><a href="#">Adm. Nosotros</a></li>
                   <li><a href="#">Salir</a></li>
                 </ul> -->
               </div>
              </div>
           </div>
         </div>

<!-- Navigation bar ends -->

<div class="content">
  <div class="container"> 
    
    
    
    
    
    <!-- Hero Unit -->
    
    <div class="row">

<div class="span6">
                              <div class="cwell">
                                 <!-- Contact form -->
                                    <h5>Entrar al CMS</h5>
                                    <div class="form">
                                      <!-- Contact form (not working)-->
                                      

                                      <div class="form-horizontal">
                                       
                                    <?php $form=$this->beginWidget('CActiveForm', array(
                                      'id'=>'login-form',
                                      'enableClientValidation'=>true,
                                      'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                      ),
                                    )); ?>

                                          <!-- Name -->
                                          <div class="control-group">
                                            
                                                <?php echo $form->labelEx($model,'username',array('class'=>'control-label')); ?>

                                            
                                            <div class="controls">
                                                  <?php echo $form->textField($model,'username',array('class'=>'input-medium','id'=>'user')); ?>
                                                  <?php echo $form->error($model,'username'); ?>

                                            </div>
                                          

                                          </div>
                                          <!-- Email -->
                                        <div class="control-group">
                                          <?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>                                            
                                          <div class="controls">

                                              <?php echo $form->passwordField($model,'password',array('class'=>'input-medium')); ?>
                                              <?php echo $form->error($model,'password'); ?>
                                            </div>
                                          </div>
                                          <!-- Website --><!-- Comment --><!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                                <?php echo CHtml::submitButton('Login',array('class'=>'btn')); ?>

                                           
                                        </div>
                                      

                                          <?php $this->endWidget(); ?>


                                      </div>
                                    </div>


                                 </div>
                           </div>


    </div>
    
    <!-- Hero Ends -->

    
    <!-- Testimonial starts --><!-- Testimonial ends -->
    
    <div class="border"></div>
    
    <!-- Product & links starts --><!-- Product & links ends --> 
    
  </div>
</div>












