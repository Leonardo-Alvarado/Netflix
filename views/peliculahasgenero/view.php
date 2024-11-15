<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PeliculaHasGenero $model */

$this->title = $model->idpelicula_has_genero;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pelicula Has Generos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pelicula-has-genero-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idpelicula_has_genero' => $model->idpelicula_has_genero], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idpelicula_has_genero' => $model->idpelicula_has_genero], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idpelicula_has_genero',
            'fk_idSerie',
            'fk_categoria',
        ],
    ]) ?>

</div>
