<?php

class DefaultController extends Controller {

    public function actionIndex() {
        // Login a user with the provided username and password.       
       if(Yii::app()->user->getId()){           
           $this->render('index');           
       }else{
           $this->redirect(Yii::app()->getBaseUrl().'/index.php/admin/auth');
       }
    }
    public function actionLogin(){
        
    }
    public function actionLogout(){
      // Logout the current user
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->getBaseUrl().'/index.php/admin/auth');
    }
    public function getViewPath() {
        $actionId = Yii::app()->controller->getId();
        return Yii::app()->getViewPath() . "\\views\\" . $actionId;
    }

}