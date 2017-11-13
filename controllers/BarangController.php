<?php

namespace app\controllers;

use Yii;
use app\models\Barang;
use app\models\BarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BarangController implements the CRUD actions for Barang model.
 */
class BarangController extends Controller
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
     * Lists all Barang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BarangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Barang model.
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
     * Creates a new Barang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Barang();

        if (Yii::$app->request->isPost) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            
            if ($model->foto) {
                $model->foto->saveAs(Yii::getAlias('@webroot').'/uploads/'. $model->foto->baseName . '.' . $model->foto->extension);
                $path = $model->foto->baseName . '.' . $model->foto->extension;
                $model->load(Yii::$app->request->post());
                $model->foto = $path;
            }else{
                $model->load(Yii::$app->request->post());
                $model->foto = 'no-foto.png';
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id_barang]);
            }else{
                print_r($model->getErrors());die();
            };            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Barang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_barang]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Barang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Barang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Barang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Barang::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    // public function actionUpload($foto)
    // {
    //     $model = new Demo;
    //     if (!empty($_POST)) {
    //         $model->attachment = $_POST['Demo']['attachment'];
    //         $file = \yii\web\UploadedFile::getInstanceByName($model, 'attachment');
    //         var_dump($file);

    //         // You can then do the following
    //         if ($model->save()) {
    //             $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
    //         }
    //         // its better if you relegate such a code to your model class
    //     }
    //     return $this->render('upload', ['model'=>$model]);
    // }


}
