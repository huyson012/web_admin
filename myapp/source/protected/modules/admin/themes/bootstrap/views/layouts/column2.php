<?php /* @var $this Controller */

?>
<?php $this->beginContent(); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
            
	<?php
                $menu = array(
                            array('label' => 'Create User','url' => array("user/create")),
                            array('label' => 'List User','url' => array("user/index")),
                           );
                
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>