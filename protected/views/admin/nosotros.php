<?php $this->renderPartial('/admin/menu'); ?>
<br /><br />
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
                    <?php echo $form->textArea($modelHistoria,'contenido'); ?>
                    <?php echo $form->error($modelHistoria,'contenido'); ?>
                  </div>
                  <div class="controls">
                  <h5>Editando: Texto de Nosotros Nosotros</h5>
                  
                    <label>Nosotros</label>
                    <textarea name="Contenido[nosotros]"><?php echo $modelNosotros->contenido; ?></textarea>
                  </div>
                  <div class="controls">
                  <h5>Editando: Texto de Nosotros Misión</h5>
                  
                    <label>Misión</label>
                    <textarea name="Contenido[mision]"><?php echo $modelMision->contenido; ?></textarea>
                  </div>
                   <div class="controls">
                  <h5>Editando: Texto de Nosotros Visión</h5>
                 
                    <label>Visión</label>
                    <textarea name="Contenido[vision]"><?php echo $modelVision->contenido; ?></textarea>
                  </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Guardar" />
                </div>
                <?php $this->endWidget(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="http://acerossoria.com/airos/index.php/ImagenesNosotros/admin">
        <button>Administrar Imagenes Nosotros</button></a>
    </div>
  
  </div>
</div>
</div>