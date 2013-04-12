<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfigForm
 *
 * @author Administrator
 */
class ConfigForm extends CFormModel {
    //put your code here
    public $adminEmail;
    public $paramName;
 
    public function rules()
    {
        return array(
            array('adminEmail, paramName','required'),
        );
    }
}

?>
