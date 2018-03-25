<?php

namespace frontend\backend\account\controllers;

use Yii;
use frontend\backend\account\models\DompetRekening;
use frontend\backend\account\models\DompetRekeningSearch;
use frontend\backend\account\models\DompetRekeningImage;
use frontend\backend\account\models\DompetRekeningImageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DompetRekeningController implements the CRUD actions for DompetRekening model.
 */
class DompetRekeningController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DompetRekening models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DompetRekeningSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DompetRekening model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DompetRekening model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DompetRekening();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DompetRekening model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DompetRekening model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionPending($id)
    {
        $model = $this->findModel($id);
        $model->STATUS = 1;
        $model->save();
        return $this->redirect(['index']);
    }
    public function actionSuccess($id)
    {
        $model = $this->findModel($id);
        $model->STATUS = 2;
        $model->save();
        return $this->redirect(['index']);
    }
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->STATUS = 3;
        $model->save();
        return $this->redirect(['index']);
    }
    /**
     * Finds the DompetRekening model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return DompetRekening the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DompetRekening::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
