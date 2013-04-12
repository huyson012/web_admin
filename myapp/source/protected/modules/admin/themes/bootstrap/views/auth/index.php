<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'formLogin',    
    'htmlOptions'=>array('class'=>'well', 'name'=>'formLogin'),
));
echo $form->errorSummary($loginForm);
echo $form->textFieldRow($model, 'username', array('class'=>'span3'));
echo $form->passwordFieldRow($model,'password', array('class'=>'span3'));
echo $form->checkboxRow($model, 'status');
$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>Yii::t('lang','login')));
$this->endWidget(); 
 ?>

