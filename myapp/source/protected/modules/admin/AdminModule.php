<?php

class AdminModule extends CWebModule {

    public function init() {
        // this method is called when the module is being created
        // you may place code here to customize the module or the application
        // import the module-level models and components
        $this->setImport(array(
            'admin.models.*',
            'admin.components.*',
        ));

        $basePath = $this->getBasePath().'\\themes';
        // set path theme
        Yii::app()->themeManager->setBasePath($basePath);
        // set theme
        Yii::app()->setTheme('bootstrap');
        // get path view of theme
        $basePathView = Yii::app()->themeManager->getTheme('bootstrap')->basePath;
        // set path view
        Yii::app()->setViewPath($basePathView);
        // set layout 
        $this->setLayoutPath($basePathView . "\\views");
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {

            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        }
        else
            return false;
    }

}
