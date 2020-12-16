<?php

namespace app\models;

use Yii;


class Autopart extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'autopart';
    }

    public function rules()
    {
        return [
            [['code', 'name', 'price', 'delivery_time'], 'required'],
            [['code', 'price', 'delivery_time'], 'integer'],
            [['name'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'price' => 'Price',
            'delivery_time' => 'Delivery Time',
        ];
    }
}
