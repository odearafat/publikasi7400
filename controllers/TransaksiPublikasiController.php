<?php

namespace app\controllers;

use Yii;
use app\models\TransaksiPublikasi;
use app\models\TransaksiSearch;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransaksiPublikasiController implements the CRUD actions for TransaksiPublikasi model.
 */
class TransaksiPublikasiController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all TransaksiPublikasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TransaksiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TransaksiPublikasi model.
     * @param integer $id
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
     * Creates a new TransaksiPublikasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {

        $model = new TransaksiPublikasi();

        //if ($model->load(Yii::$app->request->post()) && $model->save()) {
      //     return $this->redirect(['view', 'id' => $model->id_transaksi]);
    //  }

        if ($model->load(Yii::$app->request->post())) {
        //if (Yii::$app->request->isPost) {
        //if ($model->load(Yii::$app->request->post()) && $model->save()){

          //echo 'dsada'; exit();
           $file_address = UploadedFile::getInstance($model, 'file_address');
           if($model->validate()){
             //echo 'test'; exit();
               $model->save();
                if (!empty($file_address)) {
                    $file_address->saveAs(Yii::getAlias('@app/img/') . 'gambar'. date('YmdHis').'.'. $file_address->extension);
                    $model->file_address = 'gambar'. date('YmdHis').'.'. $file_address->extension;
                    $model->id_publikasi=$id;
                    $model->jenis_transaksi=1;
                    $model->niplama=Yii::$app->user->identity->id;;
                    $model->save(FALSE);
               }
           }

               $model->save();
               return $this->redirect(['view', 'id' => $model->id_transaksi]);
          } else {
            /*$model->file_address = UploadedFile::getInstance($model, 'file_address');
            if ($model->upload()) {

                // file is uploaded successfully
                return;
            }
            */

            return $this->render('create', [
               'model' => $model,
           ]);
        }


    }

    public function beforeAction($action)
{
    $this->enableCsrfValidation = true;
    return parent::beforeAction($action);
}

    /**
     * Updates an existing TransaksiPublikasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_transaksi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TransaksiPublikasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TransaksiPublikasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TransaksiPublikasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TransaksiPublikasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
