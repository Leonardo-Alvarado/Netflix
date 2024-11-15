<?php

use app\models\Series;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\SeriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Series');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="series-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Series'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idSerie',
            'titulo',
            'portada',
            'sipnosis',
            'anio',
            //'duracion',
            //'fk_director',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Series $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idSerie' => $model->idSerie]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
