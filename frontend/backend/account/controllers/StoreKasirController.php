<?php

namespace frontend\backend\account\controllers;

use Yii;
use frontend\backend\account\models\StoreKasir;
use frontend\backend\account\models\StoreKasirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StoreKasirController implements the CRUD actions for StoreKasir model.
 */
class StoreKasirController extends Controller
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
     * Lists all StoreKasir models.
     * @return mixed
     */
    public function actionIndex()
    {
        $paramCari='';
        //PencarianIndex
		$modelPeriode = new \yii\base\DynamicModel([
			'OWNER','STORE_ID'
		]);		
		$modelPeriode->addRule(['OWNER','STORE_ID'], 'required')
         ->addRule(['OWNER','STORE_ID'], 'safe');		
         if ($modelPeriode->load(Yii::$app->request->get())) {
            $hsl = \Yii::$app->request->get();	
            $paramCari=$hsl['DynamicModel']['OWNER'];
			$paramCari2=$hsl['DynamicModel']['STORE_ID'];
		};					
        //PUBLIC PARAMS	
		$cari=['ACCESS_GROUP'=>$paramCari,'STORE_ID'=>$paramCari2];	
        $searchModel = new StoreKasirSearch($cari);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (!empty($paramCari)) {
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'paramCari'=>$paramCari
            ]);	
        } else {
            Yii::$app->session->setFlash('error', "Anda belum memilih Owner");
            return $this->redirect(['/account/container-store']);
        }
        
        
    }
    public function actionPencarianIndex(){
		$modelPeriode = new \yii\base\DynamicModel([
			'OWNER','STORE_ID'
		]);		
		$modelPeriode->addRule(['OWNER','STORE_ID'], 'required')
         ->addRule(['OWNER','STORE_ID'], 'safe');
		$data = Yii::$app->db->createCommand("select username,ACCESS_GROUP,b.ACCESS_ID,CONCAT(NM_DEPAN,NM_BELAKANG,NM_TENGAH)as NAMA from user as a INNER JOIN user_profile as b on a.ACCESS_GROUP=b.ACCESS_ID WHERE ACCESS_LEVEL = 'OWNER' ")->queryAll();
        // print_r($data);die();
        if (!$modelPeriode->load(Yii::$app->request->post())) {
			return $this->renderAjax('form_cari',[
                'modelPeriode' => $modelPeriode,
                'data'=>$data
			]);
		}
    }
    public function actionStore() {
        $out = [];
            if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
                if ($parents != null) {
                    $id = $parents[0];
                    $model = Store::find()->asArray()->where(['ACCESS_GROUP'=>$id])->all();														
                                                            
                    foreach ($model as $key => $value) {
                       $out[] = ['id'=>$value['STORE_ID'],'name'=> $value['STORE_NM']];
                    } 
                    echo json_encode(['output'=>$out, 'selected'=>'']);
                    return;
               }
           }
           echo Json::encode(['output'=>'', 'selected'=>'']);
       }
    /**
     * Displays a single StoreKasir model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new StoreKasir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StoreKasir();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->KASIR_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StoreKasir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->KASIR_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StoreKasir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StoreKasir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return StoreKasir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StoreKasir::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
