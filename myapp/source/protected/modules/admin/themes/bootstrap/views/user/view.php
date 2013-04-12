<?php
$this->widget('application.extensions.bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
         'id',
        'username',
        'password',
       
        array(               // related city displayed as a link
            'label'=>'content',
            'type'=>'raw',
            'value'=>  nl2br($model->content),
        ),
    ),
));
?>