<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class PostSearch extends Post
{
    public $text;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['date', 'img', 'category', 'title', 'text'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Post::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'defaultPageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => 'DESC',
                ],
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}