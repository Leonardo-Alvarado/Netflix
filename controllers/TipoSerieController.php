<?php

namespace app\controllers;

use app\models\TipoSerie;
use app\models\TipoSerieSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TipoSerieController implements the CRUD actions for TipoSerie model.
 */
class TipoSerieController extends Controller
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
     * Lists all TipoSerie models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TipoSerieSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TipoSerie model.
     * @param int $idcategoria Idcategoria
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idcategoria)
    {
        return $this->render('view', [
            'model' => $this->findModel($idcategoria),
        ]);
    }

    /**
     * Creates a new TipoSerie model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TipoSerie();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idcategoria' => $model->idcategoria]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TipoSerie model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idcategoria Idcategoria
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idcategoria)
    {
        $model = $this->findModel($idcategoria);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcategoria' => $model->idcategoria]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TipoSerie model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idcategoria Idcategoria
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idcategoria)
    {
        $this->findModel($idcategoria)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TipoSerie model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idcategoria Idcategoria
     * @return TipoSerie the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcategoria)
    {
        if (($model = TipoSerie::findOne(['idcategoria' => $idcategoria])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
