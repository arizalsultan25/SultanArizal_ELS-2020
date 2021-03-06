<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $email
 * @property string $name
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'name', 'password'], 'required'],
            [['email', 'name'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'name' => 'Name',
            'password' => 'Password',
        ];
    }
}
