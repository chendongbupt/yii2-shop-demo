<?php
namespace app\controllers\democ;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class TempController extends Controller
{
    public function actionSay($message='hello'){
        return $this->render('say', ['message'=>$message, 'msg'=>'321t678aefs', 'arr'=>[321,423], 'data'=>'qwewqsdf']); //数组可以用[]代替
    }

    public function actionIndex(){
        return $this->render('index.tpl');
    }
}
?>