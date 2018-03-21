<?php

namespace frontend\backend\basic\controllers;

use Yii;
use frontend\backend\basic\models\JurnalAkun;
use frontend\backend\basic\models\JurnalAkunSearch;
use frontend\backend\basic\models\JurnalKategori;
use frontend\backend\basic\models\JurnalKategoriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JurnalAkunController implements the CRUD actions for JurnalAkun model.
 */
class JurnalAkunController extends Controller
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
    public function beforeAction($action){
        $modulIndentify=4; //OUTLET
       // Check only when the user is logged in.
       // Author piter Novian [ptr.nov@gmail.com].
       if (!Yii::$app->user->isGuest){
           if (Yii::$app->session['userSessionTimeout']< time() ) {
               // timeout
               Yii::$app->user->logout();
               return $this->goHome(); 
           } else {	
               //add Session.
               Yii::$app->session->set('userSessionTimeout', time() + Yii::$app->params['sessionTimeoutSeconds']);
               //check validation [access/url].
               $checkAccess=Yii::$app->getUserOpt->UserMenuPermission($modulIndentify);
               if($checkAccess['modulMenu']['MODUL_STS']==0 OR $checkAccess['ModulPermission']['STATUS']==0){				
                   $this->redirect(array('/site/alert'));
               }else{
                   if($checkAccess['PageViewUrl']==true){						
                       return true;
                   }else{
                       $this->redirect(array('/site/alert'));
                   }					
               }			 
           }
       }else{
           Yii::$app->user->logout();
           return $this->goHome(); 
       }
   }
    /**
     * Lists all JurnalAkun models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JurnalKategoriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       
        $paramCari=Yii::$app->getRequest()->getQueryParam('jurnalKategori');
        // print_r($modelGrp->KTG_CODE);die();
        if ($paramCari==''){
            $modelGrp =JurnalKategoriSearch::find()->orderBy(['KTG_CODE'=>SORT_ASC])->one();
            $searchModelGrp = new JurnalAkunSearch(['KTG_CODE'=>$modelGrp->KTG_CODE]);
        }else{
            $searchModelGrp = new JurnalAkunSearch(['KTG_CODE'=>$paramCari]);
        }
        
        // $searchModelGrp = new JurnalAkunSearch();
        $dataProviderGrp = $searchModelGrp->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelGrp' => $searchModelGrp,
            'dataProviderGrp' => $dataProviderGrp,
        ]);
    }

    /**
     * Displays a single JurnalAkun model.
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
     * Creates a new JurnalAkun model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JurnalAkun();

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['index']);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JurnalAkun model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JurnalAkun model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->STATUS = 3;
        $model->save();
        return $this->redirect(['index']);
    }

    /**
     * Finds the JurnalAkun model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return JurnalAkun the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JurnalAkun::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
