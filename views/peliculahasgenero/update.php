<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PeliculaHasGenero $model */

$this->title = Yii::t('app', 'Update Pelicula Has Genero: {name}', [
    'name' => $model->idpelicula_has_genero,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pelicula Has Generos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpelicula_has_genero, 'url' => ['view', 'idpelicula_has_genero' => $model->idpelicula_has_genero]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pelicula-has-genero-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
