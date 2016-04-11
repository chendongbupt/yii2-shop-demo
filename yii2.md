### 环境依赖
* Yii 2.0 需要 PHP 5.4.0 或以上版本支持
* 支持php7

### Composer安装
* 下载并安装 Composer-Setup.exe
* 更新Composer `composer self-update`
*  composer global require "fxp/composer-asset-plugin:~1.1.1"
*   composer create-project --prefer-dist yiisoft/yii2-app-basic basic

### 目录结构
	basic/                  应用根目录
    composer.json       Composer 配置文件, 描述包信息
    config/             包含应用配置及其它配置
        console.php     控制台应用配置信息
        web.php         Web 应用配置信息
    commands/           包含控制台命令类
    controllers/        包含控制器类
    models/             包含模型类
    runtime/            包含 Yii 在运行时生成的文件，例如日志和缓存文件
    vendor/             包含已经安装的 Composer 包，包括 Yii 框架自身
    views/              包含视图文件
    //modules           可以设置模块
    web/                Web 应用根目录，包含 Web 入口文件
        assets/         包含 Yii 发布的资源文件（javascript 和 css）
        // js css img   可以设置文件目录
        index.php       应用入口文件
    yii                 Yii 控制台命令执行脚本

### gii
hostname/gii
可以直接访问 gii, 生成 module controller models ==初始化文件

### MVC
#### Models
数据模型，可用于数据的建立和逻辑运算， models/ 目录下，可以分为 AR(active record) 和 运算模型两种。

* AR 提供了一个面向对象的接口， 用以访问数据库中的数据。一个 AR 类关联一张数据表， 每个 AR 对象对应表中的一行，对象的属性（即 AR 的特性Attribute）映射到数据行的对应列 
* 运算模型，承担业务逻辑的部分运算，解耦

用gii 生成AR models，可以关联表字段，表结构变化后，AR models 也需要变化

#### Controllers
驼峰命名，对应了控制器 ID

* UserController.php -> user
* UserCenterController.php -> user-center

* 默认命名空间为 app]controllers;如果有多级目录，如backend/shop-manaer,namespace app\controllers\backend;  命名空间也要变化

* use 全局引入class， yii\base\*,是yii2框架基础类，文件地址为vendor/yiisoft/yii2/* 。
app\* 类， app是指安装地址。

* 默认action为index,可以设置$defaultAction 进行改变。
* 通用方法 变量初始化 `public function init(){}`，action前置和后置方法 `public function beforeAction($action){}` `public function afterAction($action)｛｝` 。
* 方法驼峰命名， actionIndex -> index， actionIndexTest -> index-test
* public $enableCsrfValidation = false  csrf防范关闭， 采用的<meta _csrf> === <hidden _csrf>，采用了yii2-smarty 模板， 关闭csrf；否则提交表单会被阻止
* render() renderPartial() 展现视图
* $layout 为默认layouts/main.php为公共视图
* 命名会与module的id 冲突， 与web/ 下的文件夹名称冲突

#### Views
* 文件目录对应controller ID及命名空间，文件名由render()确定
* {include ''} {include 'app/views/*'} yii2-smarty的引用模版方法
* 默认的layouts为公共模版目录
* render(file) 方法将文件file返回结果为content，需要在$layout(main.php->main.tpl) 中输出， `<mainid="main" class="container">
    {$content}
</main>`
* renderPartial 则是直接渲染file文件

### 执行过程
路由 解析 url, 默认 为 index.php?r=module/ctrl/act&param

* index.php
* 整个app目录是一个默认的module，可以默认不写module。如果配置中有module，跳转到module中执行
* 寻找controller id, 如果controllers/ 下有多级目录，目录名不能和已有的module 命名冲突
* 最后在controlle中寻找action id
* 由于module参数很多时候默认不写， action id 默认为index，所以访问链接为r=ctrl/ ，根目录为web/， 会先查找web/ 下的文件夹， 注意和ctrl 命名冲突

### 请求与响应
#### 请求	

	$request = Yii::$app->request;

	$get = $request->get(); 
	// 等价于: $get = $_GET;
	
	$id = $request->get('id');   
	// 等价于: $id = isset($_GET['id']) ? $_GET['id'] : null;
	
	$id = $request->get('id', 1);   
	// 等价于: $id = isset($_GET['id']) ? $_GET['id'] : 1;
	
	$post = $request->post(); 
	// 等价于: $post = $_POST;
	
	$name = $request->post('name');   
	// 等价于: $name = isset($_POST['name']) ? $_POST['name'] : null;
	
	$name = $request->post('name', '');   
	// 等价于: $name = isset($_POST['name']) ? $_POST['name'] : '';

* 可以直接用$_GET  $_POST 
* 封装了一个 request， 方便测试用例编写 
* 客户端信息 
	* $userHost = Yii::$app->request->userHost;
	* $userIP = Yii::$app->request->userIP;
* HTTP头信息 URLs信息

#### 响应

	$response = Yii::$app->response;
	$response->format = \yii\web\Response::FORMAT_JSON;
	$response->data = ['message' => 'hello world'];

也封装了一个response，多种返回类型 

	yii\web\Response::FORMAT_HTML: 通过 yii\web\HtmlResponseFormatter 来实现.
	yii\web\Response::FORMAT_XML: 通过 yii\web\XmlResponseFormatter来实现.
	yii\web\Response::FORMAT_JSON: 通过 yii\web\JsonResponseFormatter来实现.
	yii\web\Response::FORMAT_JSONP: 通过 yii\web\JsonResponseFormatter来实现.

### Sessions Cookies

#### session
	$session = Yii::$app->session;

	// 检查session是否开启 
	if ($session->isActive) ...
	
	// 开启session
	$session->open();
	
	// 关闭session
	$session->close();
	
	// 销毁session中所有已注册的数据
	$session->destroy();
	//多次调用yii\web\Session::open() 和yii\web\Session::close() 方法并不会产生错误， 因为方法内部会先检查session是否已经开启。

	$session = Yii::$app->session;

	// 获取session中的变量值，以下用法是相同的：
	$language = $session->get('language');
	$language = $session['language'];
	$language = isset($_SESSION['language']) ? $_SESSION['language'] : null;
	
	// 设置一个session变量，以下用法是相同的：
	$session->set('language', 'en-US');
	$session['language'] = 'en-US';
	$_SESSION['language'] = 'en-US';
	
	// 删除一个session变量，以下用法是相同的：
	$session->remove('language');
	unset($session['language']);
	unset($_SESSION['language']);

#### cookie
	// 从 "request"组件中获取cookie集合(yii\web\CookieCollection)
	$cookies = Yii::$app->request->cookies;
	
	// 获取名为 "language" cookie 的值，如果不存在，返回默认值"en"
	$language = $cookies->getValue('language', 'en');
	
	// 另一种方式获取名为 "language" cookie 的值
	if (($cookie = $cookies->get('language')) !== null) {
	    $language = $cookie->value;
	}
	
	// 可将 $cookies当作数组使用
	if (isset($cookies['language'])) {
	    $language = $cookies['language']->value;
	}
	
	// 判断是否存在名为"language" 的 cookie
	if ($cookies->has('language')) ...
	if (isset($cookies['language'])) ...

### 数据库
#### 数据库访问 (DAO)
	$connection = new \yii\db\Connection([
    'dsn' => $dsn,
     'username' => $username,
     'password' => $password,
	]);
	$connection->open();

	返回多行
	$command = $connection->createCommand('SELECT * FROM post');
	$posts = $command->queryAll();
	返回单行：
	$command = $connection->createCommand('SELECT * FROM post WHERE id=1');
	$post = $command->queryOne();
	查询多行单值：
	$command = $connection->createCommand('SELECT title FROM post');
	$titles = $command->queryColumn();
	查询标量值/计算值：
	$command = $connection->createCommand('SELECT COUNT(*) FROM post');
	$postCount = $command->queryScalar();
	
	// insert,update,delete 需要调用execute
	$command = $connection->createCommand('UPDATE post SET status=1 WHERE id=1');
	$command->execute();
	$connection->createCommand()->batchInsert('user', ['name', 'age'], [
	    ['Tom', 30],
	    ['Jane', 20],
	    ['Linda', 25],
	])->execute();
	
	// UPDATE
	$connection->createCommand()->update('user', ['status' => 1], 'age > 30')->execute();
	
	// DELETE
	$connection->createCommand()->delete('user', 'status = 0')->execute();

* 提供事务支持， 复制与读写分离， 修改模式

#### 查询构建器
只用于查询

	$rows = (new \yii\db\Query())
    ->select(['id', 'email'])
    ->from('user')
    ->where(['last_name' => 'Smith'])
    ->limit(10)
    ->all();

子查询

	$subQuery = (new Query())->select('id')->from('user')->where('status=1');

	// SELECT * FROM (SELECT `id` FROM `user` WHERE status=1) u 
	$query->from(['u' => $subQuery]);

操作符

* >, <=, 或者其他包含两个操作数的合法 DB 操作符: 第一个操作数必须为字段的名称， 而第二个操作数则应为一个值。例如，['>', 'age', 10] 将会生成 age>10。
* and: 操作数会被 AND 关键字串联起来。例如，['and', 'id=1', 'id=2'] 将会生成 id=1 AND id=2。如果操作数是一个数组，它也会按上述规则转换成 字符串。例如，['and', 'type=1', ['or', 'id=1', 'id=2']] 将会生成 type=1 AND (id=1 OR id=2)。
* $query->leftJoin('post', 'post.user_id = user.id');

查询结果

	yii\db\Query::all(): 将返回一个由行组成的数组，每一行是一个由名称和值构成的关联数组（译者注：省略键的数组称为索引数组）。
	yii\db\Query::one(): 返回结果集的第一行。
	yii\db\Query::column(): 返回结果集的第一列。
	yii\db\Query::scalar(): 返回结果集的第一行第一列的标量值。
	yii\db\Query::exists(): 返回一个表示该查询是否包结果集的值。
	yii\db\Query::count(): 返回 COUNT 查询的结果。

#### Active Record
	$customer = new Customer();
	$customer->name = 'Qiang';
	$customer->save();  // 一行新数据插入 customer 表

* 声明class， 需要继承use yii\db\ActiveRecord;
* yii\db\ActiveRecord::find()
yii\db\ActiveRecord::findBySql()
* findOne 和 findAll()
* 默认返回对象，asArray()返回数组
*	 yii\db\ActiveRecord::save()
	  yii\db\ActiveRecord::insert()
	yii\db\ActiveRecord::update()
	yii\db\ActiveRecord::delete()
	
	yii\db\ActiveRecord::updateCounters()
	yii\db\ActiveRecord::updateAll()
	yii\db\ActiveRecord::updateAllCounters()
	yii\db\ActiveRecord::deleteAll()

### 配置
	'modules' => [
       // 模块设置 id => class
        'demo' => 'app\module\demo\Demo',
        'admin'=> 'app\module\admin\Admin'
    ],
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'KdsIbTIrv6kIPFMV6tRfyk9JrPXe4nDB',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
       'urlManager' => [
           'enablePrettyUrl' => true,    //启动美化
           'showScriptName' => false,   //禁用index.php
           'rules' => [
                "<controller:backend/shop-manaer>/<action:detail>/<shop_id:\d+>"=>"<controller>/<action>",
               "<controller:backend/shop-manaer>/<action:check>/<is_check:-?\d>/<shop_id:\d+>"=>"<controller>/<action>",
               "<controller:backend/shop-manaer>/<action:auth>/<is_auth:-?\d>/<shop_id:\d+>"=>"<controller>/<action>",
               "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",

           ]
       ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'tpl' => [      //yii2-smarty模板
                    'class' => 'yii\smarty\ViewRenderer',
                    //'cachePath' => '@runtime/Smarty/cache',
                ],
            ]
        ],

#### urlManager
	'enablePrettyUrl' => true,    //启动美化
    'showScriptName' => false,   //禁用index.php
       'rules' => [
            "<controller:backend/shop-manaer>/<action:detail>/<shop_id:\d+>"=>"<controller>/<action>",
           "<controller:backend/shop-manaer>/<action:check>/<is_check:-?\d>/<shop_id:\d+>"=>"<controller>/<action>",
           "<controller:backend/shop-manaer>/<action:auth>/<is_auth:-?\d>/<shop_id:\d+>"=>"<controller>/<action>",
           "<controller:\w+>/<action:\w+>"=>"<controller>/<action>",

* restful 风格， 简洁可自定义
* 可隐藏文件路径，自定义调整路径
* apache htaccess 不一样，启用后，不能用默认r=ctrl/act方法访问