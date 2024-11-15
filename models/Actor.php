<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $idactor
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $biografia
 * @property int $Series_idSerie
 *
 * @property Series $seriesIdSerie
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Series_idSerie'], 'required'],
            [['Series_idSerie'], 'integer'],
            [['nombre', 'apellido', 'biografia'], 'string', 'max' => 45],
            [['Series_idSerie'], 'exist', 'skipOnError' => true, 'targetClass' => Series::class, 'targetAttribute' => ['Series_idSerie' => 'idSerie']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idactor' => 'Idactor',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'biografia' => 'Biografia',
            'Series_idSerie' => 'Series Id Serie',
        ];
    }

    /**
     * Gets query for [[SeriesIdSerie]].
     *
     * @return \yii\db\ActiveQuery|SeriesQuery
     */
    public function getSeriesIdSerie()
    {
        return $this->hasOne(Series::class, ['idSerie' => 'Series_idSerie']);
    }

    /**
     * {@inheritdoc}
     * @return ActorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActorQuery(get_called_class());
    }
}
