<?php

namespace app\controllers;

use app\models\Series;
use app\models\SeriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SeriesController implements the CRUD actions for Series model.
 */
class SeriesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Series models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SeriesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Series model.
     * @param int $idSerie Id Serie
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idSerie)
    {
        return $this->render('view', [
            'model' => $this->findModel($idSerie),
        ]);
    }

    /**
     * Creates a new Series model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Series();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idSerie' => $model->idSerie]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Series model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idSerie Id Serie
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idSerie)
    {
        $model = $this->findModel($idSerie);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idSerie' => $model->idSerie]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Series model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idSerie Id Serie
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idSerie)
    {
        $this->findModel($idSerie)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Series model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idSerie Id Serie
     * @return Series the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idSerie)
    {
        if (($model = Series::findOne(['idSerie' => $idSerie])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
