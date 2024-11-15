<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelicula_has_genero".
 *
 * @property int $idpelicula_has_genero
 * @property int|null $fk_idSerie
 * @property int|null $fk_categoria
 *
 * @property PeliculaHasGenero $fkIdSerie
 * @property PeliculaHasGenero[] $peliculaHasGeneros
 */
class PeliculaHasGenero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelicula_has_genero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_idSerie', 'fk_categoria'], 'integer'],
            [['fk_idSerie'], 'exist', 'skipOnError' => true, 'targetClass' => PeliculaHasGenero::class, 'targetAttribute' => ['fk_idSerie' => 'idpelicula_has_genero']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idpelicula_has_genero' => 'Idpelicula Has Genero',
            'fk_idSerie' => 'Fk Id Serie',
            'fk_categoria' => 'Fk Categoria',
        ];
    }

    /**
     * Gets query for [[FkIdSerie]].
     *
     * @return \yii\db\ActiveQuery|PeliculaHasGeneroQuery
     */
    public function getFkIdSerie()
    {
        return $this->hasOne(PeliculaHasGenero::class, ['idpelicula_has_genero' => 'fk_idSerie']);
    }

    /**
     * Gets query for [[PeliculaHasGeneros]].
     *
     * @return \yii\db\ActiveQuery|PeliculaHasGeneroQuery
     */
    public function getPeliculaHasGeneros()
    {
        return $this->hasMany(PeliculaHasGenero::class, ['fk_idSerie' => 'idpelicula_has_genero']);
    }

    /**
     * {@inheritdoc}
     * @return PeliculaHasGeneroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PeliculaHasGeneroQuery(get_called_class());
    }
}
