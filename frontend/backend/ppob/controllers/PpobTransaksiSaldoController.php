<?php

namespace frontend\backend\ppob\controllers;

use Yii;
use frontend\backend\ppob\models\PpobTransaksiSaldo;
use frontend\backend\ppob\models\PpobTransaksiSaldoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PpobTransaksiSaldoController implements the CRUD actions for PpobTransaksiSaldo model.
 */
class PpobTransaksiSaldoController extends Controller
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
     * Lists all PpobTransaksiSaldo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PpobTransaksiSaldoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PpobTransaksiSaldo model.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID, $STORE_ID, $TRANS_DATE)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $STORE_ID, $TRANS_DATE),
        ]);
    }

    /**
     * Creates a new PpobTransaksiSaldo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PpobTransaksiSaldo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'STORE_ID' => $model->STORE_ID, 'TRANS_DATE' => $model->TRANS_DATE]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PpobTransaksiSaldo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID, $STORE_ID, $TRANS_DATE)
    {
        $model = $this->findModel($ID, $STORE_ID, $TRANS_DATE);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'STORE_ID' => $model->STORE_ID, 'TRANS_DATE' => $model->TRANS_DATE]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PpobTransaksiSaldo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID, $STORE_ID, $TRANS_DATE)
    {
        $this->findModel($ID, $STORE_ID, $TRANS_DATE)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PpobTransaksiSaldo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $ID
     * @param string $STORE_ID
     * @param string $TRANS_DATE
     * @return PpobTransaksiSaldo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $STORE_ID, $TRANS_DATE)
    {
        if (($model = PpobTransaksiSaldo::findOne(['ID' => $ID, 'STORE_ID' => $STORE_ID, 'TRANS_DATE' => $TRANS_DATE])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
