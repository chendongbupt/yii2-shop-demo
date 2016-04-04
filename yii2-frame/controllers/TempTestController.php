<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class TempTestController extends Controller
{
    public function actionSay($message='hello'){
        return $this->render('say', ['message'=>$message, 'msg'=>'321t678aefs', 'arr'=>[321,423], 'data'=>'21313']); //数组可以用[]代替
    }

    public function actionIndex(){
    	$this->layout = '/header.tpl';
    	//$this->render('/layouts/header.tpl',['content'=>'33', 'msg'=>'testrewewsdrf']);
        
        //$this->tt = '测试值';
    	//$this->renderPartial('/layouts/header.tpl');
            return $this->renderPartial('index.tpl', ['data'=>'324er', 'footer'=>'footer的值']);
    }
}
?>