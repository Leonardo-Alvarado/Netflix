<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Series $model */

$this->title = Yii::t('app', 'Update Series: {name}', [
    'name' => $model->idSerie,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Series'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSerie, 'url' => ['view', 'idSerie' => $model->idSerie]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="series-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
