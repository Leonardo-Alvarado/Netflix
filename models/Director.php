<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "director".
 *
 * @property int $iddirector
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $fecha_nacimiento
 * @property int $Series_idSerie
 *
 * @property Series $seriesIdSerie
 */
class Director extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'director';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Series_idSerie'], 'required'],
            [['Series_idSerie'], 'integer'],
            [['nombre', 'apellido', 'fecha_nacimiento'], 'string', 'max' => 45],
            [['Series_idSerie'], 'exist', 'skipOnError' => true, 'targetClass' => Series::class, 'targetAttribute' => ['Series_idSerie' => 'idSerie']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddirector' => 'Iddirector',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'fecha_nacimiento' => 'Fecha Nacimiento',
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
     * @return DirectorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DirectorQuery(get_called_class());
    }
}
