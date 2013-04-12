<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginFormAdmin extends CFormModel {

    public $username;
    public $password;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function __construct($username,$password) {
        $this->username = $username;
        $this->password = $password;
    }
    public function rules() {
        return array(
//            array('username, password', 'required'),
//            array('password', 'authenticate'),
        );
    }
  
    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params) {
        if (!$this->hasErrors()) {  // we only want to authenticate when no input errors
            $identity = new UserIndentity($this->username, $this->password);
            $identity->authenticate();
            
            switch ($identity->errorCode) {
                case UserIndentity::ERROR_NONE:
                    Yii::app()->user->login($identity);                    
                    break;
                case UserIndentity::ERROR_USERNAME_INVALID:
                    $this->addError('username', Yii::t('lang','username_is_incorrect'));
                    break;
                default: // UserIdentity::ERROR_PASSWORD_INVALID
                    $this->addError('password', Yii::t('lang','password_is_incorrect'));
                    break;
            }
        }
        return !$identity->errorCode;
    }

}
