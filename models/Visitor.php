<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visitor".
 *
 * @property string $naam
 * @property string $adres
 * @property string $plaats
 * @property string $klacht
 */
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
    public function attributeLabels()
    {
        return [
            'naam' => Yii::t('app', 'Naam'),
            'adres' => Yii::t('app', 'Adres'),
            'plaats' => Yii::t('app', 'Plaats'),
            'klacht' => Yii::t('app', 'Klacht'),
        ];
    }
}
