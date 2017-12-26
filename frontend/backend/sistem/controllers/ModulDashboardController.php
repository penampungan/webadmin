<?php

namespace frontend\backend\sistem\controllers;

use Yii;
use frontend\backend\sistem\models\ModulDashboard;
use frontend\backend\sistem\models\ModulDashboardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ModulDashboardController implements the CRUD actions for ModulDashboard model.
 */
class ModulDashboardController extends Controller
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
     * Lists all ModulDashboard models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ModulDashboardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ModulDashboard model.
     * @param integer $ID
     * @param integer $MODUL_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID, $MODUL_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $MODUL_ID),
        ]);
    }

    /**
     * Creates a new ModulDashboard model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ModulDashboard();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'MODUL_ID' => $model->MODUL_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ModulDashboard model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID
     * @param integer $MODUL_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID, $MODUL_ID)
    {
        $model = $this->findModel($ID, $MODUL_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'MODUL_ID' => $model->MODUL_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ModulDashboard model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID
     * @param integer $MODUL_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID, $MODUL_ID)
    {
        $this->findModel($ID, $MODUL_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ModulDashboard model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID
     * @param integer $MODUL_ID
     * @return ModulDashboard the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $MODUL_ID)
    {
        if (($model = ModulDashboard::findOne(['ID' => $ID, 'MODUL_ID' => $MODUL_ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
