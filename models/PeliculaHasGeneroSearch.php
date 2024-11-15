<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PeliculaHasGenero;

/**
 * PeliculaHasGeneroSearch represents the model behind the search form of `app\models\PeliculaHasGenero`.
 */
class PeliculaHasGeneroSearch extends PeliculaHasGenero
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpelicula_has_genero', 'fk_idSerie', 'fk_categoria'], 'integer'],
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
        $query = PeliculaHasGenero::find();

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
            'idpelicula_has_genero' => $this->idpelicula_has_genero,
            'fk_idSerie' => $this->fk_idSerie,
            'fk_categoria' => $this->fk_categoria,
        ]);

        return $dataProvider;
    }
}
