<?php

namespace frontend\backend\account\controllers;

use Yii;
use frontend\backend\account\models\EndUser;
use frontend\backend\account\models\EndUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EndUserController implements the CRUD actions for EndUser model.
 */
class EndUserController extends Controller
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
     * Lists all EndUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EndUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EndUser model.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        return $this->render('view', [
            'model' => $this->findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT),
        ]);
    }

    /**
     * Creates a new EndUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EndUser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CUSTOMER_ID' => $model->CUSTOMER_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EndUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        $model = $this->findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CUSTOMER_ID' => $model->CUSTOMER_ID, 'YEAR_AT' => $model->YEAR_AT, 'MONTH_AT' => $model->MONTH_AT]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EndUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        $this->findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EndUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CUSTOMER_ID
     * @param integer $YEAR_AT
     * @param integer $MONTH_AT
     * @return EndUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CUSTOMER_ID, $YEAR_AT, $MONTH_AT)
    {
        if (($model = EndUser::findOne(['CUSTOMER_ID' => $CUSTOMER_ID, 'YEAR_AT' => $YEAR_AT, 'MONTH_AT' => $MONTH_AT])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
