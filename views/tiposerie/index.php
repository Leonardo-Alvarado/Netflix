<?php

use app\models\TipoSerie;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TipoSerieSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Tipo Series');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-serie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tipo Serie'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcategoria',
            'nombre',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TipoSerie $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idcategoria' => $model->idcategoria]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
