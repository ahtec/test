<?php

namespace app\models;

use Yii;

class Visitor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visitor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['naam'], 'required'],
            [['naam', 'adres', 'plaats'], 'string', 'max' => 30],
            [['klacht'], 'string', 'max' => 50],
            [['naam'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    // hier  labels aangepast naar engels ivm de vertaling  , gerard doets
    public function attributeLabels()
    {
        return [
            'naam' => Yii::t('app', 'Name'),
            'adres' => Yii::t('app', 'Address'),
            'plaats' => Yii::t('app', 'City'),
            'klacht' => Yii::t('app', 'Complain'),
        ];
    }
}
