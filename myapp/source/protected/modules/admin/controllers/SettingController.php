<?php

class SettingController extends Controller {

    public function actionIndex() {
        var_dump(Yii::app()->setting->_test);die();
        $file = Yii::app()->getBasePath() . '/config/params.inc';

        $content = file_get_contents($file);

        $arr = unserialize(base64_decode($content));

        $model = new ConfigForm();
        $model->setAttributes($arr);

        if (isset($_POST['ConfigForm'])) {
            $config = array(
                'adminEmail' => $_POST['ConfigForm']['adminEmail'],
                'paramName' => $_POST['ConfigForm']['paramName'],
            );
            $str = base64_encode(serialize($config));
            file_put_contents($file, $str);

            Yii::app()->user->setFlash('config', Yii::t('app', 'Your new options have been saved.'));
            $model->setAttributes($config);
        }

        $this->render('index', array('model' => $model));
    }

    //inside your extended controller
    public function getViewPath() {
        $actionId = Yii::app()->controller->getId();

        return Yii::app()->getViewPath() . "\\views\\" . $actionId;
    }

}

?>