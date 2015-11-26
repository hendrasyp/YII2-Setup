<?php

namespace backend\modules\configurations\regional\controllers;

use Yii;
use common\models\Mtcountries;
use common\models\MtcountriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

class CountriesController extends Controller
{
    public $pageName = 'Countries';
    public $singularPage = 'Country';

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
		public function actionDeleteall()
		{
			$request = Yii::$app->request;
			if ($request->isPost)
			{
				$postID = Yii::$app->request->post('row_id');
				foreach ($postID as $rowId)
				{
					$model=$this->findModel($rowId);
					$model->country_updated=date("Y-m-d");
					$model->country_status='INACTIVE';
					$model->save();
				}
				return $this->redirect(['index']);
				//Yii::$app->session->setFlash('warning', 'Sukses');
        //return $this->redirect(['index']);
				
			}
		}
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
     * Lists all Mtcountries models.
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

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Mtcountries();

        if ($model->load(Yii::$app->request->post())) {
            $model->country_created=$model->country_updated = date('Y-m-d');
            $model->country_status='ACTIVE';
            $model->country_name=strtoupper(strtolower($model->country_name));
            $model->save();
						Yii::$app->session->setFlash('success', 'Sukses');
            return $this->redirect(['index']);
            //return $this->redirect(['view', 'id' => $model->country_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
					$model->country_updated=date("Y-m-d");
					$model->country_name=strtoupper(strtolower($model->country_name));
					if ($model->country_status=='ACTIVE')
					{
						Yii::$app->session->setFlash('success', 'Sukses');
					}
					else
					{
						Yii::$app->session->setFlash('warning', 'Dihapus');
					}
					$model->save();
					Yii::$app->session->setFlash('success', "Success text");
          return $this->redirect(['index']);
        } else {
          return $this->render('update', [
						'model' => $model,
          ]);
        }
    }
		
		public function actionRestore($id)
    {
			$request = Yii::$app->request;
			if ($request->isGet)
			{
				$model=$this->findModel($id);
				$model->country_updated=date("Y-m-d");
				$model->country_status='ACTIVE';
				Yii::$app->session->setFlash('success', 'di Restore');
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

    public function actionDelete($id)
    {
			$request = Yii::$app->request;
			if ($request->isPost)
			{
				$model=$this->findModel($id);
				$model->country_updated=date("Y-m-d");
				$model->country_status='INACTIVE';
				Yii::$app->session->setFlash('warning', 'di Hapus');
				$model->save();
			}else{
				die('cheating huh ?');
			}
        //$this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Mtcountries::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
