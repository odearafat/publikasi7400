<?php

namespace app\controllers;

use Yii;
use app\models\MasterCetak;
use app\models\MasterPublikasi;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MasterCetakController implements the CRUD actions for MasterCetak model.
 */
class MasterCetakController extends Controller
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
     * Lists all MasterCetak models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MasterCetak::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterCetak model.
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
     * Creates a new MasterCetak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MasterCetak();

        //if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if ($model->load(Yii::$app->request->post()) ) {
            $file_publikasi = UploadedFile::getInstance($model, 'file_publikasi');
            $file_cover = UploadedFile::getInstance($model, 'file_cover');
            $id_publikasi= Yii::$app->request->post('id_publikasi');

            if (!(empty($file_publikasi)||empty($file_cover))) {

                //$namaPublikasi='publikasi'.date('YmdHis');
                //$namaCover='cover'. date('YmdHis');

                $namaPublikasi='publikasi'.date('YmdHis').'.'. $file_publikasi->extension;
                $namaCover='cover'. date('YmdHis').'.'. $file_cover->extension;

                $file_publikasi->saveAs(Yii::getAlias('@app/web').'/file/file_publikasi/'.$namaPublikasi);
                $file_cover->saveAs(Yii::getAlias('@app/web').'/file/file_cover/'.$namaCover);
                $model->file_publikasi =$namaPublikasi;
                $model->file_cover =$namaCover;
                $model->id_publikasi= $model->id_publikasi;
                $model->id_uploader=Yii::$app->user->identity->id;;
                $model->save(FALSE);
                //return $this->redirect('index.php?r=master-publikasi/histori&id='.$id);
                return $this->redirect(['view', 'id' => $model->id_cetak]);
            }
            //return $this->redirect(['view', 'id' => $model->id_cetak]);

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterCetak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_cetak]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterCetak model.
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
     * Finds the MasterCetak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MasterCetak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MasterCetak::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
