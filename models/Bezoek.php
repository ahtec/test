<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bezoek".
 *
 * @property string $naam
 * @property string $adres
 * @property string $plaats
 * @property string $klacht
 */
class Bezoek extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bezoek';
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
            'naam' => 'Naam',
            'adres' => 'Adres',
            'plaats' => 'Plaats',
            'klacht' => 'Klacht',
        ];
    }
}
