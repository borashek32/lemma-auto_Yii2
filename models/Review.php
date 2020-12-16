<?php

namespace app\models;

use Yii;


class Review extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'review';
    }


    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name', 'review'], 'required'],
            [['name', 'review'], 'string'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'name' => 'Name',
            'review' => 'Review',
        ];
    }
}
