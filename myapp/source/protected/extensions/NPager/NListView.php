<?php

$theme = Yii::app()->getTheme()->getName();
if($theme=='bootstrap'){
    Yii::import('application.extensions.bootstrap.widgets.TbGridView');
    include 'NGridView_TbGridView.php';
}else{
    Yii::import('zii.widgets.grid.CGridView');
    include 'NGridView_CGridView.php';
}


Yii::import('ext.NPager.NPager');



?>
