<?php $this->renderPartial('/admin/menu'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="content">

<div class="container">

<div class="row">

<div class="span12">

<div class="title">
  <h3>Editar Nosotros</h3></div>

<div class="span12">
                              <div class="cwell">
                                 <!-- Contact form -->
                                 <h5>Editando: Texto de Nosotros Historia</h5>
                                    <div class="form">
                                         
                                        <div class="form-horizontal">

                                        <?php $form=$this->beginWidget('CActiveForm', array(
                                          'id'=>'contenido-form',
                                          'enableAjaxValidation'=>false,
                                          'action'=>Yii::app()->request->baseUrl."/index.php/contenido/update/2"
                                        )); ?>

                                            <?php echo $form->errorSummary($modelHistoria); ?>
                                          <div class="control-group">

                                            <div class="controls">

                                            <?php echo $form->labelEx($modelHistoria,'contenido'); ?>
                                            <?php echo $form->textArea($modelHistoria,'contenido',array('rows'=>15,'id'=>'txt_home')); ?>
                                            <?php echo $form->error($modelHistoria,'contenido'); ?>
                                          </div> 
                                           <h5>Editando: Texto de Nosotros Nosotros</h5>

                                            <div class="controls">
                                               <label>Nosotros</label>
                                               <textarea name="Contenido[nosotros]"><?php echo $modelNosotros->contenido; ?></textarea>
                                            </div>


                                            <h5>Editando: Texto de Nosotros Misión</h5>

                                            <div class="controls">
                                               <label>Misión</label>
                                               <textarea name="Contenido[mision]"><?php echo $modelMision->contenido; ?></textarea>
                                            </div>

                                            <h5>Editando: Texto de Nosotros Visión</h5>

                                             <div class="controls">
                                                   <label>Visión</label>
                                                   <textarea name="Contenido[vision]"><?php echo $modelVision->contenido; ?></textarea>
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
