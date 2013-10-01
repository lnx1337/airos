<div id="form">
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



