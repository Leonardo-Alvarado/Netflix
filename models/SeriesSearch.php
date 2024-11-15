<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Series;

/**
 * SeriesSearch represents the model behind the search form of `app\models\Series`.
 */
class SeriesSearch extends Series
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idSerie', 'anio', 'fk_director'], 'integer'],
            [['titulo', 'portada', 'sipnosis', 'duracion'], 'safe'],
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
        $query = Series::find();

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
        $query->andFilterWhere([
            'idSerie' => $this->idSerie,
            'anio' => $this->anio,
            'fk_director' => $this->fk_director,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'portada', $this->portada])
            ->andFilterWhere(['like', 'sipnosis', $this->sipnosis])
            ->andFilterWhere(['like', 'duracion', $this->duracion]);

        return $dataProvider;
    }
}
