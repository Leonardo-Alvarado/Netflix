<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TipoSerie $model */

$this->title = Yii::t('app', 'Update Tipo Serie: {name}', [
    'name' => $model->idcategoria,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipo Series'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcategoria, 'url' => ['view', 'idcategoria' => $model->idcategoria]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tipo-serie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
