<?php

namespace app\module\controllers;
use yii\web\Controller;
use app\module\model\Foo;
use yii\base\Event;
use yii\helpers\Url;
/**
 * Default controller for the `demo` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionIndex()
    {
        $this->assign('data', 42342);
        $this->display();
        return $this->render('index');
    }

    public function actionEvent(){
        $foo = new Foo();
        Event::on(Foo::className(), Foo::EVENT_HELLO, [new Foo(), 'handle'],'312weq');
//        $foo->on(Foo::EVENT_HELLO, [$foo,'handle'],'43wererw');
        echo Url::toRoute(['site/index', 'event'=>'add','id'=>12, '#'=>'title']);
        $foo->trigger(Foo::EVENT_HELLO);

        $connection = \Yii::$app->db;
        print_r($connection);
//        Event::trigger(Foo::className(), Foo::EVENT_HELLO);
    }
    public function handle($event){
        print_r(' '.$event->name);
//            print_r($event->sender);
//        print_r(' --'.$event->data);
    }

}
