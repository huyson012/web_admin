<?php
$theme = Yii::app()->getTheme()->getName();
if($theme=='bootstrap'){
    define('classGrid', 'TbGridView');
    Yii::import('application.extensions.bootstrap.widgets.TbGridView');
    include 'NGridView_TbGridView.php';
}else{
    define('classGrid', 'CGridView');
    Yii::import('zii.widgets.grid.CGridView');
    include 'NgridView_CgridView.php';
}

//Yii::import('ext.NPager.NPager');

?>
