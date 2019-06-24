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
                           'index','create',
                           'update','delete',
                           'view','histori'
                       ],
                       'roles' => ['@'],
                       'allow'=>true,
                       //'matchCallback' => function ($rule, $action) {
                        //  return $this->redirect('index.php?r=site/login');
                      //  }
                       'matchCallback'=>function(){
                         /*if ( Yii::$app->user->isGuest ){
                            return Yii::$app->getResponse()->redirect(array(Url::to(['site/login'],302)));
                          }*/

                          return (
                               Yii::$app->user->identity->role=='Admin'


                           );
                       },
                       'denyCallback' => function ($rule, $action) {
                              echo "sadasdsa";
                            },
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
      //Select Transaksi
        $transaksi=TransaksiPublikasi::find()
                  ->where(['id_publikasi'=>$id])
                  ->orderBy('time_transaksi')
                  ->asArray()
                  ->all();

                  //print_r($transaksi);

        //Select Publikasi
        $publikasi=MasterPublikasi::find()
                  ->where(['id_publikasi'=>$id])
                  ->asArray()
                  ->all();

                  //print_r($publikasi);

        //Membuat Array untuk transaksi
        $transaksiPublikasi=Array();
        foreach($transaksi as $row){
          $pegawai=MasterPegawai::findOne($row['niplama']);
            $transaksiPublikasi[]=Array(
                "tanggal"=>date_format(date_create($row['time_transaksi']),"Y-m-d"),
                "tanggal_real"=>date_format(date_create($row['time_transaksi']),"Y-m-d H:i:s"),
                "catatan"=>$row['catatan'],
                "jenis_trx"=>$row['jenis_transaksi'],
                "link_download"=>$row['file_address'],
                "pegawai"=>$pegawai->nama,
                "id_transaksi"=>$row['id_transaksi']
              );
              //array_push($transaksiPublikasi,$itemTransaction);
        }

        //Membuat Array Jadwal Publikasi ARC BPS
        array_push($transaksiPublikasi,
          Array("tanggal"=>date_format(date_create($publikasi[0]['tgl_rilis']),"Y-m-d"), "tanggal_real"=>date_format(date_create($publikasi[0]['tgl_rilis']),"Y-m-d H:i:s"),
              "catatan"=>'', "jenis_trx"=>0, "link_download"=>'',"pegawai"=>'Jadwal Rilis Publikasi'));
        array_push($transaksiPublikasi,
          Array("tanggal"=>date_format(date_create($publikasi[0]['tgl_periksa_bidang']),"Y-m-d"), "tanggal_real"=>date_format(date_create($publikasi[0]['tgl_periksa_bidang']),"Y-m-d H:i:s"),
              "catatan"=>'', "jenis_trx"=>0, "link_download"=>'',"pegawai"=>'Jadwal Publikasi Diperiksa Bidang'
            ));
        array_push($transaksiPublikasi,
          Array("tanggal"=>date_format(date_create($publikasi[0]['tgl_periksa_ipds']),"Y-m-d") , "tanggal_real"=>date_format(date_create($publikasi[0]['tgl_periksa_ipds']),"Y-m-d H:i:s"),
          "catatan"=>'', "jenis_trx"=>0, "link_download"=>'',"pegawai"=>'Jadwal Publikasi Diedit Bidang IPDS'
            ));
        array_push($transaksiPublikasi,
            Array("tanggal"=>date_format(date_create($publikasi[0]['tgl_upload']),"Y-m-d"), "tanggal_real"=>date_format(date_create($publikasi[0]['tgl_upload']),"Y-m-d H:i:s"),
            "catatan"=>'', "jenis_trx"=>0, "link_download"=>'',"pegawai"=>'Deadline Upload Publikasi'
              ));


          //Sorting Tanggal
          foreach ($transaksiPublikasi as $key => $row) {
                $tanggal[$key]  = $row['tanggal_real'];
              }
          $tanggal2  = array_column($transaksiPublikasi, 'tanggal');
          array_multisort($tanggal2, SORT_ASC, $transaksiPublikasi );

          //Pengelompokan tanggal_real
          $transaksiPublikasiGroup = array();
          foreach ($transaksiPublikasi as $element) {
              $transaksiPublikasiGroup[$element['tanggal']][] = $element;
          }

        //print_r($transaksiPublikasiGroup);

        //$namaPegawai=MasterPegawai::findOne($model->id_penyusun);
        //$namaPegawai=$model->nama;
        //$this->

        //printr($transaksi);
        return $this->render('view-histori', [
            'model' => $this->findModel($id),
            'transaksi'=>$transaksiPublikasiGroup
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
