<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_serie".
 *
 * @property int $idcategoria
 * @property string|null $nombre
 */
class TipoSerie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_serie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcategoria' => 'Idcategoria',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TipoSerieQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipoSerieQuery(get_called_class());
    }
}
