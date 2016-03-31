<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;       //use 导入文件
use app\models\EcsAdPosition;
use yii\data\Pagination;    //分页器
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    // site/query-ad
    public function actionQueryAd(){
        $connection = \Yii::$app->db;
//        $command = $connection->createCommand('SELECT ad_name FROM ecs_ad where ad_id > 200 limit 1');
//        $posts = $command->queryOne();
//        print_r($posts);
//        $connection->createCommand()->update('ecs_activity', ['act_status' => 0, 'channel_id'=>'1'], 'id < 30 and act_sort >= 0')->execute();

        $query = new \yii\db\Query();
        $rows = $query
            ->select(['u.user_id as id', 'u.user_name'])
            ->from('ecs_users u')
        ->leftJoin('ecs_order_info  o', /*'u.user_id = o.user_id'*/ ['=', 'u.user_id', 'o.user_id'])
            ->where(['and', ['>','u.user_id' , 1232], ['!=', 'u.email', '']])
            ->limit(10)
        ->distinct()
            ->all();
        print_r(json_encode($rows));

//        foreach ($t=[4,312,54] as $v){
//            $v += 1;
//            print_r($v);
//        }
//        print_r($t);
        die();
        $query = EcsAdPosition::find();

        $pagination = new Pagination([    //分页器
            'defaultPageSize' => 15,
            'totalCount' => $query->count(),
        ]);




        $countries = $query->orderBy('position_id DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
        ->asArray()
            ->all();
//        print_r($countries[0]);
//        die();

        return $this->render('query', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    //
    public function actionEntry(){
        $model = new EntryForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ( strlen($model->name) < 6 )
                return $this->render('entry', ['model' => $model]);

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // 无论是初始化显示还是数据验证错误
            return $this->render('entry', ['model' => $model]);
        }
    }


//  index.php?r=site/say&message=Hello+word
//  链接r=site/say  r表示路由， site表示控制器ID:文件SiteController.php中的类名SiteController
//  say表示操作ID，即actionSay，渲染文件为view下 /site/say.php，即  /控制器ID/操作ID 格式
    public function actionSay($message='hello'){
//        return $this->render('about', ['message' => $message]);  //可以直接渲染某个文件
//        return $this->render('say', ['message'=>$message]);  //数组传参
        return $this->render('say.tpl'); //数组可以用[]代替
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
