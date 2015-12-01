<?php

namespace backend\modules\configurations\regional\controllers;

use Yii;
use common\models\Mtprovinces;
use common\models\MtprovincesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;

/**
 * ProvincesController implements the CRUD actions for Mtprovinces model.
 */
class ProvincesController extends Controller
{
	public $pageName = 'Countries';
  public $singularPage = 'Country';
  
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
     * Lists all Mtprovinces models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MtprovincesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
		public function actionList($id)
    {
			$provinces = Mtprovinces::find()
				->where(['province_country_id'=>$id])
				->all();
			if (sizeof($provinces)>0)
			{
					echo '<option value="">SELECT PROVINCE</option>';
				foreach ($provinces as $province)
				{
					echo '<option value="'.$province->province_id.'">'.$province->province_name.'</option>';
				}
			}
			else
			{
					echo '<option value="">-</option>';
				
			}
    }
    /**
     * Displays a single Mtprovinces model.
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
     * Creates a new Mtprovinces model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
			if (Yii::$app->user->can('create-countries'))
			{
				$model = new Mtprovinces();

        if ($model->load(Yii::$app->request->post())) {
					$model->province_created = date('Y-m-d h:i:s');
					$model->province_status = 'ACTIVE';
					$model->province_updated = date('Y-m-d h:i:s');
					$model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
			}
			else
			{
				throw new ForbiddenHttpException; 
			}
        
    }

    /**
     * Updates an existing Mtprovinces model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
					$model->province_created = date('Y-m-d h:i:s');
					$model->province_updated = date('Y-m-d h:i:s');
					$model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Mtprovinces model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mtprovinces model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Mtprovinces the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mtprovinces::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
