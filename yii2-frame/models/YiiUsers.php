<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii_users".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property integer $user_group
 * @property string $pwd
 * @property string $mobile
 * @property string $email
 */
class YiiUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'pwd'], 'required'],
//            [['user_group'], 'integer'],
            [['user_name'], 'string', 'max' => 16],
            [['pwd'], 'string', 'max' => 64],
            [['mobile'], 'string', 'max' => 11],
            [['email'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_group' => 'User Group',
            'pwd' => 'Pwd',
            'mobile' => 'Mobile',
            'email' => 'Email',
        ];
    }
}
