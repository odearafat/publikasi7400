<?php

namespace app\controllers;

use Yii;
use app\models\MasterPublikasi;
use app\models\MasterPegawai;
use app\models\TransaksiPublikasi;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

/**
 * MasterPublikasiController implements the CRUD actions for MasterPublikasi model.
 */
class MasterPublikasiController extends Controller
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

            'access'=>[
               'class'=>AccessControl::className(),
               'rules'=>[
                   [
                       'actions'=>[
                           'index',
                           'create',
                           'update',
                           'delete',
                           'view'
                       ],
                       'allow'=>true,
                       'matchCallback'=>function(){
                           return (
                               Yii::$app->user->identity->role=='Admin'
                           );
                       }
                   ],
               ],
           ],
        ];


    }

    /**
     * Lists all MasterPublikasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MasterPublikasi::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MasterPublikasi model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionView($id)
    {
        $model=MasterPublikasi::findOne($id);
        $namaPegawai=MasterPegawai::findOne($model->id_penyusun);
        //$namaPegawai=$model->nama;
        //$this->

        return $this->render('view', [
            'model' => $this->findModel($id),
            'namaPegawai'=>$namaPegawai->nama
       ]);
    }

    public function actionHistori($id)
    {
        $model=MasterPublikasi::findOne($id);
        $namaPegawai=MasterPegawai::findOne($model->id_penyusun);
        //$namaPegawai=$model->nama;
        //$this->

        return $this->render('view-histori', [
            'model' => $this->findModel($id),
            'namaPegawai'=>$namaPegawai->nama
       ]);
    }

    /**
     * Creates a new MasterPublikasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
      $model = new MasterPublikasi();

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id_publikasi]);
      }

      return $this->render('create', [
          'model' => $model,
      ]);
    }

    /**
     * Updates an existing MasterPublikasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_publikasi]);
        }

        return $this->render('update',
        [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterPublikasi model.
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
     * Finds the MasterPublikasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MasterPublikasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    protected function findModel($id)
    {
        if (($model = MasterPublikasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionLink($id)
    {
       echo  Url::to(['transaksi-publikasi/create&id='.$id]);
    }
}
