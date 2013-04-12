<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />        
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.class.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home','icon'=>'home', 'url'=>array('/admin')),
                array('label'=>'Setting','icon'=>'cog', 'url'=>array('/admin/setting')),
                array('label'=>'User','icon'=>'user', 'url'=>array('/admin/user')),
                array('label'=>'Content', 'url'=>array('/admin/content')),                
                array('label'=>'Product', 'url'=>array('/admin/product')),
                array('label'=>'Logout','icon'=>'off', 'url'=>array('/admin/default/logout')),
                
            ),
        ),
    ),
)); ?>

<div class="container" id="page">	
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
