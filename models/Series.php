<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Series".
 *
 * @property int $idSerie
 * @property string $titulo
 * @property string $portada
 * @property string $sipnosis
 * @property int $anio
 * @property string|null $duracion
 * @property int $fk_director
 *
 * @property Actor[] $actors
 * @property Director[] $directors
 */
class Series extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Series';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idSerie', 'titulo', 'portada', 'sipnosis', 'anio', 'fk_director'], 'required'],
            [['idSerie', 'anio', 'fk_director'], 'integer'],
            [['titulo', 'portada', 'sipnosis', 'duracion'], 'string', 'max' => 45],
            [['idSerie'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idSerie' => 'Id Serie',
            'titulo' => 'Titulo',
            'portada' => 'Portada',
            'sipnosis' => 'Sipnosis',
            'anio' => 'Anio',
            'duracion' => 'Duracion',
            'fk_director' => 'Fk Director',
        ];
    }

    /**
     * Gets query for [[Actors]].
     *
     * @return \yii\db\ActiveQuery|ActorQuery
     */
    public function getActors()
    {
        return $this->hasMany(Actor::class, ['Series_idSerie' => 'idSerie']);
    }

    /**
     * Gets query for [[Directors]].
     *
     * @return \yii\db\ActiveQuery|DirectorQuery
     */
    public function getDirectors()
    {
        return $this->hasMany(Director::class, ['Series_idSerie' => 'idSerie']);
    }

    /**
     * {@inheritdoc}
     * @return SeriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SeriesQuery(get_called_class());
    }
}
