<?php 
class ProductController extends Controller{
    //inside your extended controller
        public function getViewPath()
        {
            $actionId = Yii::app()->controller->getId();
            
            return Yii::app()->getViewPath()."\\views\\".$actionId;
            
        }
    public function actionIndex(){
        $this->render('index');
    }
}