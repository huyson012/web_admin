<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'formCreateUser',    
    'htmlOptions'=>array('class'=>'well', 'name'=>'formCreateUser'),
));
echo $form->errorSummary($loginForm);
echo $form->textFieldRow($model, 'username', array('class'=>'span3'));
echo $form->passwordFieldRow($model,'password', array('class'=>'span3'));
echo $form->checkboxRow($model, 'status');
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
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>Yii::t('lang','Save')));
$this->endWidget(); 
 ?>

