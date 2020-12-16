<?php

namespace app\models;

class Post extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['img', 'title', 'quote', 'text'], 'required'],
            [['img', 'title', 'quote', 'text'], 'string'],
            [['category_id'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category',
            'date' => 'Date',
            'img' => 'Img',
            'title' => 'Title',
            'quote' => 'Quote',
            'text' => 'Text',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

}
