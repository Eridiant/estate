<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Project;

/**
 * ProjectSearch represents the model behind the search form of `frontend\models\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'show'], 'integer'],
            [['lang', 'name', 'img', 'type', 'country', 'date', 'variant', 'excerpt', 'description'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Project::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        // if (!$this->validate()) {
        //     // uncomment the following line if you do not want to return any records when validation fails
        //     // $query->where('0=1');
        //     return $dataProvider;
        // }

        $query = $query->joinWith("options");

        // grid filtering conditions
        // $query->andFilterWhere([
        //     'id' => $this->id,
        //     'price' => $this->price,
        //     'show' => $this->show,
        // ]);

        $query->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'options.name', $this->options])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'variant', $this->variant])
            ->andFilterWhere(['like', 'excerpt', $this->excerpt])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
