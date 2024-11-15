<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TipoSerie $model */

$this->title = Yii::t('app', 'Create Tipo Serie');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tipo Series'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-serie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
