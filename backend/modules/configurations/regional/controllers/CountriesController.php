<?php

namespace backend\modules\configurations\regional\controllers;

use Yii;
use common\models\MtCountries;
use common\models\MtCountriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
/**
 * CountriesController implements the CRUD actions for MtCountries model.
 */
class CountriesController extends Controller
{
	public function init()
	{
		parent::init();
		$this->view->params['moduleName'] = 'Configuration';
		$this->view->params['subModuleName'] = 'Regional';
	}
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

	/**
     * Lists all MtCountries models.
     * @return mixed
     */
    public function actionTrash()
    {
		$dataProvider = new ActiveDataProvider([
			'query' => MtCountries::find()->where(['country_status'=>'INACTIVE']),
		]);
        $searchModel = new MtCountriesSearch();
        return $this->render('trash', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
    /**
     * Lists all MtCountries models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MtCountriesSearch();
		$dataProvider = new ActiveDataProvider([
			'query' => MtCountries::find()->where(['country_status'=>'ACTIVE']),
		]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$dataProvider->pagination->pageSize=5;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MtCountries model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MtCountries model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MtCountries();

        if ($model->load(Yii::$app->request->post())) {
			$model->country_created=$model->country_updated = date('Y-m-d');
			$model->country_status='ACTIVE';
			$model->country_name=strtoupper(strtolower($model->country_name));
			$model->save();
			return $this->redirect(['index']);
			//return $this->redirect(['view', 'id' => $model->country_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MtCountries model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			$model->country_updated=date("Y-m-d");
			$model->country_name=strtoupper(strtolower($model->country_name));
			$model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
	
	/**
     * Deletes an existing MtCountries model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionRestore($id)
    {
		$request = Yii::$app->request;
		if ($request->isGet)
		{
			$model=$this->findModel($id);
			$model->country_updated=date("Y-m-d");
			$model->country_status='ACTIVE';
			$model->save();
		}else{
			die('cheating huh ?');
		}
        //$this->findModel($id)->delete();
		$model = MtCountries::find()->where(['country_status'=>'INACTIVE'])->all();
		if (sizeof($model)==0)
		{
			return $this->redirect(['index']);
		}
		else
		{
			return $this->redirect(['trash']);
		}
    }

    /**
     * Deletes an existing MtCountries model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
		$request = Yii::$app->request;
		if ($request->isPost)
		{
			$model=$this->findModel($id);
			$model->country_updated=date("Y-m-d");
			$model->country_status='INACTIVE';
			$model->save();
		}else{
			die('cheating huh ?');
		}
        //$this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MtCountries model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return MtCountries the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MtCountries::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
