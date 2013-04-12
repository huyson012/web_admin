<?php
    
    // $gridColumns
    $gridColumns = array(   
    array('name' => 'id', 'header' => '#', 'htmlOptions' => array('style' => 'width: 60px;')),
    array('name' => 'username', 'header' => 'Username'),
    array('name' => 'password', 'header' => 'Password'),
    array('name' => 'content', 'header' => 'Content'),    
     array(
            'header'=>"Edit",
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{view}{update}{delete}',                                                
            )    
);    
    $this->widget('application.extensions.NPager.NGridView', array(
    'type'=>'bordered hover',
    'dataProvider'=>$dataProvider,
    'columns'=>$gridColumns,

    ));    