<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>
    <?php $this->widget('application.extensions.jui.EJqueryUiInclude', array('theme'=>'humanity')); ?> 

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_when'); ?>		
                  
        <?php
        $this->widget('application.extensions.jui.EDatePicker',
              array(
                    'model'=>$model,
                    'name'=>'User[created_when]',
                    'id'=>'created_when',                    
                    'value'=>date('Y-m-d'),                    
                    'htmlOptions'=>array('size'=>10)
                   )
             );
        ?>
		<?php echo $form->error($model,'created_when'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login'); ?>
		<?php echo $form->textField($model,'last_login'); ?>
		<?php echo $form->error($model,'last_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>      
        
        <?php 
        $this->widget('application.extensions.TheCKEditor.theCKEditorWidget',array(
	'model'=>$model,				# Data-Model (form model)
	'attribute'=>'content',			# Attribute in the Data-Model
	'height'=>'400px',
	'width'=>'100%',
	'toolbarSet'=>'Basic', 			# EXISTING(!) Toolbar (see: ckeditor.js)
	'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
									# Path to ckeditor.php
	'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
									# Relative Path to the Editor (from Web-Root)
	'css' => Yii::app()->baseUrl.'/css/index.css',
									# Additional Parameters
        ) ); 
        ?>
        

        
</div><!-- form -->
<?php $this->endWidget(); ?>