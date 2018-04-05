<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bezoek;

/**
 * BezoekSearch represents the model behind the search form of `app\models\Bezoek`.
 */
class BezoekSearch extends Bezoek
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['naam', 'adres', 'plaats', 'klacht'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Bezoek::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'naam', $this->naam])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'plaats', $this->plaats])
            ->andFilterWhere(['like', 'klacht', $this->klacht]);

        return $dataProvider;
    }
}
