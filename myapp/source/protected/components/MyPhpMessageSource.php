<?php

class MyPhpMessageSource extends CPhpMessageSource {

    public function init() {
        parent::init();
        $this->basePath = Yiibase::getPathOfAlias('application.messages');
    }
}