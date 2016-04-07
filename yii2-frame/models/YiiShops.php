<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_shops".
 *
 * @property integer $shop_id
 * @property string $shop_name
 * @property string $corporation
 * @property string $mobile
 * @property integer $user_id
 * @property string $auth_img
 * @property integer $is_check
 * @property integer $is_auth
 */
class YiiShops extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_shops';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_name', 'corporation', 'mobile', 'user_id', 'auth_img'], 'required'],
            [['user_id', 'is_check', 'is_auth'], 'integer'],
            [['shop_name'], 'string', 'max' => 64],
            [['corporation'], 'string', 'max' => 32],
            [['mobile'], 'string', 'max' => 11],
            [['auth_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shop_id' => 'Shop ID',
            'shop_name' => 'Shop Name',
            'corporation' => 'Corporation',
            'mobile' => 'Mobile',
            'user_id' => 'User ID',
            'auth_img' => 'Auth Img',
            'is_check' => 'Is Check',
            'is_auth' => 'Is Auth',
        ];
    }
}
