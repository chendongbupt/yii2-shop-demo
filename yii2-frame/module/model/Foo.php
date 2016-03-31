<?php
namespace app\module\model;

use Yii;
use yii\base\Model;

class Foo extends Model{
    const EVENT_HELLO = 'hello';
    public function handle($event){
        print_r(' '.$event->name);
//            print_r($event->sender);
        print_r(' --'.$event->data);
    }
}

?>