<?php

namespace app\controllers;

use app\models\PeliculaHasGenero;
use app\models\PeliculaHasGeneroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PeliculaHasGeneroController implements the CRUD actions for PeliculaHasGenero model.
 */
class PeliculaHasGeneroController extends Controller
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
     * Lists all PeliculaHasGenero models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PeliculaHasGeneroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PeliculaHasGenero model.
     * @param int $idpelicula_has_genero Idpelicula Has Genero
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idpelicula_has_genero)
    {
        return $this->render('view', [
            'model' => $this->findModel($idpelicula_has_genero),
        ]);
    }

    /**
     * Creates a new PeliculaHasGenero model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PeliculaHasGenero();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idpelicula_has_genero' => $model->idpelicula_has_genero]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PeliculaHasGenero model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idpelicula_has_genero Idpelicula Has Genero
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idpelicula_has_genero)
    {
        $model = $this->findModel($idpelicula_has_genero);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idpelicula_has_genero' => $model->idpelicula_has_genero]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PeliculaHasGenero model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idpelicula_has_genero Idpelicula Has Genero
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idpelicula_has_genero)
    {
        $this->findModel($idpelicula_has_genero)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PeliculaHasGenero model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idpelicula_has_genero Idpelicula Has Genero
     * @return PeliculaHasGenero the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idpelicula_has_genero)
    {
        if (($model = PeliculaHasGenero::findOne(['idpelicula_has_genero' => $idpelicula_has_genero])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
