<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Series $model */

$this->title = Yii::t('app', 'Create Series');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Series'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="series-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
