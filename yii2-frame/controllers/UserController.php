<?php
/**
 * Created by PhpStorm.
 * User: cd
 * Date: 16-3-31
 * Time: 下午3:27
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\YiiUsers;

class UserController extends Controller {
    public $defaultAction = 'login';
    public $layout = '/main.tpl';
    public $enableCsrfValidation = false;   //csrf 禁用

    public function actionLogin(){
        if ( Yii::$app->session['user_id'] > 0 ) return $this->redirect('index.php?r=user-center', 301);
        return $this->render('login.tpl');
    }

    public function actionReg(){
        if ( Yii::$app->session['user_id'] > 0 ) return $this->redirect('index.php?r=user-center', 301);
        return $this->render('reg.tpl');
    }

    public function actionAjaxReg(){
        $request = Yii::$app->request;
        $username = $request->post('username', '');
        $pwd = $request->post('pwd', '');
        $confirmPwd = $request->post('confirmPwd', '');

        $res = ['res'=>false];
        if ( !preg_match("/[0-9a-zA-Z]{7}/" ,$username) ){
            $res['info'] = "用户名";
            die (json_encode($res));
        }

        if ( !preg_match("/[0-9a-zA-Z]{7}/" ,$pwd) ){
            $res['info'] = "密码";
            die (json_encode($res));
        }

        if ( $pwd !== $confirmPwd ){
            $res['info'] = "确认密码";
            die (json_encode($res));
        }

        if ( !$this->regSql($username, $pwd) ){
            $res['info'] = '用户已注册';
            die ( json_encode($res) );
        }

        $res['res'] = true;
        $res['username'] = $username;
        $res['pwd'] = $pwd;

        $session = Yii::$app->session;
        $session['user_id'] = Yii::$app->db->getLastInsertID();;
        die (json_encode($res));
    }

    public function actionAjaxLogin(){
        $request = Yii::$app->request;
        $username = $request->post('username', '');
        $pwd = $request->post('pwd', '');
        $res = ['res'=>false];
        $user = YiiUsers::findOne(['user_name'=>$username, 'pwd'=>md5($pwd)]);
        if ( $user ){
            $res['res'] = true;
        }
        $session = Yii::$app->session;
        $session['user_id'] = $user->user_id;
        die(json_encode($res));
    }


    private function regSql($username, $pwd){
//        $query = new \yii\db\Query();
        $isExist = YiiUsers::find()->where(['user_name' => $username])->exists();
//        print_r($isExist);
//        $isExist = $query
//            ->select(['user_id'])
//            ->from('yii_users')
//            ->where(['user_name' => $username])
//            ->exists();
//
        if ( $isExist ){
            return false;
        }

        $users = new YiiUsers();
        $users->user_name = $username;
        $users->pwd = md5($pwd);
        $users->save();
        return true;
    }

//    public function actionLogout(){
//        $session = Yii::$app->session;
//    }

} 