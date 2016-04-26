<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $date_create
 */
class Request extends \yii\db\ActiveRecord
{
    /*
     * const
     */
    const NAME_ADDRESS_EMAIL_MAX_LENGTH = 255;
    const PHONE_MAX_LENGTH = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'email', 'phone', 'date_create'], 'required'],
            [['date_create'], 'safe'],
            [['name', 'address', 'email'], 'string', 'max' => self::NAME_ADDRESS_EMAIL_MAX_LENGTH],
            [['phone'], 'string', 'max' => self::PHONE_MAX_LENGTH],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'date_create' => Yii::t('app', 'Date Create'),
        ];
    }

    /**
     * @inheritdoc
     * @return RequestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RequestQuery(get_called_class());
    }
}
