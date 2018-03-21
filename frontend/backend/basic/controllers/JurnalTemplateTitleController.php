<?php

namespace frontend\backend\basic\controllers;

use Yii;
use frontend\backend\basic\models\JurnalTemplateTitle;
use frontend\backend\basic\models\JurnalTemplateTitleSearch;
use frontend\backend\basic\models\JurnalTemplateReport;
use frontend\backend\basic\models\JurnalTemplateReportSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JurnalTemplateTitleController implements the CRUD actions for JurnalTemplateTitle model.
 */
class JurnalTemplateTitleController extends Controller
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
     * Lists all JurnalTemplateTitle models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel =new JurnalTemplateReportSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        
        $paramCari=Yii::$app->getRequest()->getQueryParam('jurnalreport');
        // print_r($paramCari);die();
        if ($paramCari==''){
            $modelGrp =JurnalTemplateReportSearch::find()->orderBy(['RPT_GROUP__ID'=>SORT_ASC])->one();
            $searchModelGrp = new JurnalTemplateTitleSearch(['RPT_GROUP_ID'=>$modelGrp->RPT_GROUP__ID]);
        }else{
            $searchModelGrp = new JurnalTemplateTitleSearch(['RPT_GROUP_ID'=>$paramCari]);
        }
        
        // $searchModelGrp = new JurnalTemplateTitleSearch();
        $dataProviderGrp = $searchModelGrp->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelGrp' => $searchModelGrp,
            'dataProviderGrp' => $dataProviderGrp,
        ]);
    }

    /**
     * Displays a single JurnalTemplateTitle model.
     * @param string $RPT_TITLE_ID
     * @param string $RPT_GROUP_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($RPT_TITLE_ID, $RPT_GROUP_ID)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($RPT_TITLE_ID, $RPT_GROUP_ID),
        ]);
    }

    /**
     * Creates a new JurnalTemplateTitle model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JurnalTemplateTitle();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/basic/jurnal-template-title']);
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JurnalTemplateTitle model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $RPT_TITLE_ID
     * @param string $RPT_GROUP_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($RPT_TITLE_ID, $RPT_GROUP_ID)
    {
        $model = $this->findModel($RPT_TITLE_ID, $RPT_GROUP_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/basic/jurnal-template-title']);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JurnalTemplateTitle model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $RPT_TITLE_ID
     * @param string $RPT_GROUP_ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($RPT_TITLE_ID, $RPT_GROUP_ID)
    {        
        $model = $this->findModel($RPT_TITLE_ID, $RPT_GROUP_ID);
        $model->STATUS = 3;
        $model->save();
        return $this->redirect(['/basic/jurnal-template-title']);
    }

    /**
     * Finds the JurnalTemplateTitle model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $RPT_TITLE_ID
     * @param string $RPT_GROUP_ID
     * @return JurnalTemplateTitle the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($RPT_TITLE_ID, $RPT_GROUP_ID)
    {
        if (($model = JurnalTemplateTitle::findOne(['RPT_TITLE_ID' => $RPT_TITLE_ID, 'RPT_GROUP_ID' => $RPT_GROUP_ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
