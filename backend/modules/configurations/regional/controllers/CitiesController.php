<?php

namespace backend\modules\configurations\regional\controllers;

use Yii;
use common\models\Mtcities;
use common\models\MtcitiesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
/**
 * CitiesController implements the CRUD actions for Mtcities model.
 */
class CitiesController extends Controller
{
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
					$model->city_updated=date("Y-m-d");
					$model->city_status='INACTIVE';
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
            'query' => Mtcities::find()->where(['city_status'=>'INACTIVE']),
        ]);
        $searchModel = new MtcitiesSearch();
        return $this->render('trash', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
		
		public function actionRestore($id)
    {
			$request = Yii::$app->request;
			if ($request->isGet)
			{
				$model=$this->findModel($id);
				$model->city_updated=date("Y-m-d");
				$model->city_status='ACTIVE';
				Yii::$app->session->setFlash('success', 'di Restore');
				$model->save();
			}else{
				die('cheating huh ?');
			}
					//$this->findModel($id)->delete();
			$model = Mtcities::find()->where(['city_status'=>'INACTIVE'])->all();
			if (sizeof($model)==0)
			{
				return $this->redirect(['index']);
			}
			else
			{
				return $this->redirect(['trash']);
			}
    }

    public function actionIndex()
    {
        $searchModel = new MtcitiesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mtcities model.
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
     * Creates a new Mtcities model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mtcities();

        if ($model->load(Yii::$app->request->post())) {
						$model->city_created=date("Y-m-d");
						$model->city_updated=date("Y-m-d");
						$model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Mtcities model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
			$model = $this->findModel($id);
			if ($model->load(Yii::$app->request->post())) {
				$model->city_updated=date("Y-m-d");
				$model->save();
				return $this->redirect(['index']);
			} else {
				return $this->render('update', [
					'model' => $model,
				]);
			}
    }

    /**
     * Deletes an existing Mtcities model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
			$request = Yii::$app->request;
		//$model=$this->findModel($id);
		if ($request->isPost)
		{
			$model=$this->findModel($id);
			$model->city_updated=date("Y-m-d");
			$model->city_status='INACTIVE';
			Yii::$app->session->setFlash('warning', 'di Hapus');
			$model->save();
		}else{
				die('cheating huh ?');
		}
		// if($model->load(Yii::$app->request->post()))
		// {
			// $model->city_update=date("Y-m-d");
			// $model->city_status='INACTIVE';
			// $model->save();
		// }
        //$this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mtcities model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Mtcities the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mtcities::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
