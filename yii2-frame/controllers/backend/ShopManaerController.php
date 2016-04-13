<?php

namespace app\controllers\backend;
use Yii;

class ShopManaerController extends \yii\web\Controller
{
    public $layout = '/main.tpl';
    public $enableCsrfValidation = false;   //csrf 禁用
    private $session;
    private $adminOpen = [];

    public function init ()     // 初始化
    {
        $this->session = Yii::$app->session;
        $this->adminOpen = ['index'];
    }

    public function beforeAction($action){
        if ( in_array($action->id, $this->adminOpen) )      //开放权限的 act id 放行
            return parent::beforeAction($action);    //返回action 继续执行
        $adminId = $this->session['admin_id'];
        if ( !$adminId ){
            return $this->redirect('/backend/shop-manaer', 301);
        }
        return parent::beforeAction($action);    //返回action 继续执行
    }

    public function actionIndex()
    {
        if ( $this->session['admin_id'] > 0 ) return $this->redirect('/backend/shop-manaer/shop', 301);
        return $this->render('index.tpl');
    }

    public function actionShop(){
        $query = new \yii\db\Query();
        $shops = $query
            ->select([])
            ->from('yii_shops')
            ->orderBy('shop_id DESC')
            ->all();
        return $this->render('shop.tpl', ['shops'=>$shops]);
    }

    public function actionDetail(){
        $request = Yii::$app->request;
        $shopId = intval($request->get('shop_id', 0));
        $query = new \yii\db\Query();
        $shop = $query
            ->select([])
            ->from('yii_shops')
            ->where(['shop_id'=>$shopId])
            ->one();

        $img = explode(',', $shop['auth_img']);
        $shop['checkImg'] = $img[0];
        $shop['authImg'] = $img[1];

        return $this->render('detail.tpl', ['shop'=>$shop]);
    }

    public function actionCheck(){
        $request = Yii::$app->request;
        $isCheck = $request->get('is_check');
        $shopId = $request->get('shop_id');
        $shop = \app\models\YiiShops::findOne(['shop_id'=>$shopId]);
        $shop->is_check = $isCheck;
        $shop->save();
        die();
    }

    public function actionAuth(){
        $request = Yii::$app->request;
        $isAuth = $request->get('is_auth');
        $shopId = $request->get('shop_id');
        $shop = \app\models\YiiShops::findOne(['shop_id'=>$shopId]);
        $shop->is_auth = $isAuth;
        $shop->save();
        die();
    }


    public function actionLogin(){
        $request = Yii::$app->request;
        $username = trim($request->post('username', ''));
        $pwd = trim($request->post('pwd', ''));

        if ( $username === 'admin' && $pwd === 'ttest' ){
            $this->session['admin_id'] = 1;
            return $this->redirect('/backend/shop-manaer/shop', 301);
        }
        die('errrrr');
    }

    public function actionLogout(){
        $this->session->remove('admin_id');
        return $this->redirect('/backend/shop-manaer', 301);
    }

}
