<?php

use app\models\PeliculaHasGenero;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PeliculaHasGeneroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Pelicula Has Generos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelicula-has-genero-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Pelicula Has Genero'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpelicula_has_genero',
            'fk_idSerie',
            'fk_categoria',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PeliculaHasGenero $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idpelicula_has_genero' => $model->idpelicula_has_genero]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
