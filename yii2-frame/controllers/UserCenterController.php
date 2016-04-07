<?php

namespace app\controllers;
use Yii;
//use app\models\YiiShops;
class UserCenterController extends \yii\web\Controller
{
    public $layout = '/main.tpl';
    public $enableCsrfValidation = false;   //csrf 禁用
    private $session;
    private $userOpen = [];   //开放权限，不做验证
//    const EVENT_LOGOUT = 'logout';

    public function init ()     // 初始化
    {
        $this->session = Yii::$app->session;
        $this->userOpen = [];
//        Event::on(UserCenterController::className(), UserCenterController::EVENT_LOGOUT, function ($event) {
//        });
    }

    public function beforeAction($action){
        if ( in_array($action->id, $this->userOpen) )
            return parent::beforeAction($action);    //返回action 继续执行

        $userId = $this->session['user_id'];
        if ( !$userId ){
            return $this->redirect('index.php?r=user', 301);
        }
//        print_r($action);
        return parent::beforeAction($action);    //返回action 继续执行
    }

    public function actionIndex()
    {
        $userId = $this->session['user_id'];
//        if ( !$userId ){
//            return $this->redirect('index.php?r=user', 301);
//        }
        print_r('session user_id:'.$this->session['user_id']);
        $query = new \yii\db\Query();
        $user = $query
            ->select(['user_id', 'user_name', 'pwd'])
            ->from('yii_users')
            ->where(['user_id' => $userId])
            ->one();

        return $this->render('index.tpl', ['user'=>$user]);
    }

    public function actionShops(){
        $userId = $this->session['user_id'];
        $query = new \yii\db\Query();
        $shops = $query
            ->select([])
            ->from('yii_shops')
            ->where(['user_id' => $userId])
            ->all();
        foreach ( $shops as $k=>$v ){
            $img = explode(',', $shops[$k]['auth_img']);
            $shops[$k]['checkImg'] = $img[0];
            $shops[$k]['authImg'] = $img[1];
        }
        return $this->render('shops.tpl', ['myshops'=>$shops]);
    }

    public function actionApplyShop(){
        return $this->render('apply-shop.tpl');
    }

    public function actionAjaxSubmitApply(){
        $request = Yii::$app->request;
        $shopName = htmlspecialchars(trim($request->post('shop_name','')));
        $corporation = htmlspecialchars(trim($request->post('corporation','')));
        $mobile = trim($request->post('mobile',''));


        $res = ['res'=>false];
        $shopExist = \app\models\YiiShops::findOne(['shop_name'=>$shopName, 'is_check'=>1]);
        if ( $shopExist ){
            $res['info'] = '店铺名已存在';
            die(json_encode($res));
        }

        $auth_img = $_FILES['auth_img'];
        $auth_img_other = $_FILES['auth_img_other'];

        $checkRes = $this->checkImage($auth_img);
        if ( !$checkRes['res'] ){
            $res['info'] = $checkRes['info'];
            die(json_encode($res));
        }
        $imgType = explode('.',$auth_img['name']);
        $authFile = 'authimg/'.$this->session['user_id'].time().'check.'.$imgType[count($imgType)-1];
        if( !copy($auth_img['tmp_name'], $authFile)){
            $res['info'] = '图片check移动失败';
            die(json_encode($res));
        }

        $otherFile = '';
        if ( $auth_img_other['tmp_name'] ){
            $checkRes = $this->checkImage($auth_img_other);
            if ( !$checkRes['res'] ){
                $res['info'] = $checkRes['info'];
                die(json_encode($res));
            }
            $imgType = explode('.',$auth_img_other['name']);
            $otherFile = 'authimg/'.$this->session['user_id'].time().'auth.'.$imgType[count($imgType)-1];
            if( !copy($auth_img_other['tmp_name'], $otherFile)){
                $res['info'] = '图片auth移动失败';
                die(json_encode($res));
            }
        }

        $shop = new \app\models\YiiShops();
        $shop->shop_name = $shopName;
        $shop->corporation = $corporation;
        $shop->mobile = $mobile;
        $shop->user_id = $this->session['user_id'];
        $shop->auth_img = $authFile.','.$otherFile;
        $shop->save();

        $res['res'] = true;
        die(json_encode($res));
    }

    private function checkImage($image){
        $type = ['image/jpeg', 'image/gif', 'image/png'];
        $res = ['res'=>false];
        $maxSize = 1024 * 500;  // 500kB
        if ( !in_array($image['type'], $type) ){
            $res['info'] = '图片类型';
            return $res;
        }

        if ( $image['size'] > $maxSize ){
            $res['info'] = '图片太大';
            return $res;
        }

        $res['res'] = true;
        return $res;
    }

    public function actionLogout(){
        $this->session->remove('user_id');
        return $this->redirect('index.php?r=user', 301);
    }
}
