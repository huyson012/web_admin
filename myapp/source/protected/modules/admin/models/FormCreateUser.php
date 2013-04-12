<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormCreateUser
 *
 * @author Administrator
 */
class FormCreateUser extends CFormModel {
    public $username = NULL;
    public $password = NULL;
    public function __construct($aryForm) {
        parent::__construct($aryForm);
        $this->username = $aryForm['username'];
        $this->password = $aryForm['password'];
        
    }
     public function rules() {
        return array(
            array('username, password', 'required'),           
        );
    }
}

?>
