<?php

namespace app\controllers;

use Yii;
use app\models\Inventaris;
use app\models\InventarisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * InventarisController implements the CRUD actions for Inventaris model.
 */
class InventarisController extends Controller
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
     * Lists all Inventaris models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InventarisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Inventaris model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Inventaris model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Inventaris();

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'foto');
            $imgName = 'invt_'.str_replace(['.'], [''], microtime(true)) . '.'.$image->getExtension();
            $model->foto = $imgName;
            $model->save();
            $image->saveAs(Yii::getAlias('@webroot').'/uploads/inventaris/'.$imgName);
            return $this->redirect(['view','id' => $model->id_inventaris]);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Inventaris model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->load(yii::$app->request->post());

        if (Yii::$app->request->isPost) {
            $foto = UploadedFile::getInstance($model, 'foto');
            if (!empty($foto)) {
                $image_name = $foto->name;
                $model->image = $image_name;

            }
        }
        if ($model->validate()&& $model->save()) {
            if (!empty($foto)) {
                $foto->saveAs('uploads/inventaris/'.$image_name);

            }
           return $this->redirect(['view', 'id' => $model->id_inventaris]);
        }


        //if ($model->load(Yii::$app->request->post()) 
          //  &&  $model->save()) {
     
        
            return $this->render('update', [
                'model' => $model,
            ]);
        
    }

    /**
     * Deletes an existing Inventaris model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    
    {
        $model=$this->findModel($id);
        //print_r(Url::to('@webroot/uploads/inventaris/' . $model->foto));die();
        try {
            unlink(Url::to('@webroot/uploads/inventaris/' . $model->foto)); 
        } catch (\Exception $exception){}
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Inventaris model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Inventaris the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Inventaris::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
