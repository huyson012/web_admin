<?php

class UserIndentity extends CUserIdentity {

    private $_id = null;

    public function authenticate() {
        
        $record = User::model()->findByAttributes(array('username' => $this->username));
        
        if ($record === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        
        else if ($record->password !== $this->password)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $record->attributes;
            $this->errorCode = self::ERROR_NONE;
        }
        
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}