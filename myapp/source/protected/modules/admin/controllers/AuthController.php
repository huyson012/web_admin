<?php

class AuthController extends Controller {

    public $layout = '//layouts/login';

    public function actionIndex() {

        $model = new User;
        
        // Login a user with the provided username and password.
        if (isset($_POST['User'])) {
            
            $user = $_POST['User'];
            
            $loginForm = new LoginFormAdmin($user['username'], $user['password']);
            $attribute['username'] = $user['username'];
            $attribute['password'] = $user['password'];
            $params = array();
            
            if ($loginForm->authenticate($attribute, $params)) {
                
                $this->redirect(Yii::app()->getBaseUrl() . '/index.php/admin');
            }            
        }else{
            $loginForm = array();
        }
        
        $this->render('index', array(
            'model' => $model,
            'loginForm' =>$loginForm
        ));
    }

    public function getViewPath() {
        $actionId = Yii::app()->controller->getId();
        return Yii::app()->getViewPath() . "\\views\\" . $actionId;
    }

}
