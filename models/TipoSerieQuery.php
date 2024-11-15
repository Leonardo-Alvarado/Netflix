<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TipoSerie]].
 *
 * @see TipoSerie
 */
class TipoSerieQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TipoSerie[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TipoSerie|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
