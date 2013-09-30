<?php $this->renderPartial('/admin/menu'); ?>

<div class="content">

<div class="container">

<div class="row">

<div class="span12">

<div class="title"><h3>Editar Inicio</h3></div>

<div class="span12">
                              <div class="cwell">
                                 <!-- Contact form -->
                                    <h5>Editando: Texto de Inicio</h5>
                                    <div class="form">
                                         
                                        <div class="form-horizontal">

                                        <?php $form=$this->beginWidget('CActiveForm', array(
                                          'id'=>'contenido-form',
                                          'enableAjaxValidation'=>false,
                                          'action'=>Yii::app()->request->baseUrl."/index.php/contenido/update/1"
                                        )); ?>

                                            <?php echo $form->errorSummary($model); ?>
                                          <div class="control-group">

                                            <div class="controls">

                                            <?php echo $form->labelEx($model,'contenido'); ?>
                                            <?php echo $form->textArea($model,'contenido',array('rows'=>15,'id'=>'txt_home')); ?>
                                            <?php echo $form->error($model,'contenido'); ?>
                                          </div>

                                         </div>
                                          <div class="form-actions">

                                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn')); ?>
                                          </div>
                                        <?php $this->endWidget(); ?>

                                      </div>


                                    </div>
                                 </div>
                           </div>


    </div>


</div>

</div>

</div>

</div>