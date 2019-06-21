<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPublikasi */

$this->title = $model->nama_publikasi;
$this->params['breadcrumbs'][] = ['label' => 'Master Publikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-publikasi-view">

    <h1><?php echo Html::encode($this->title) ?></h1>
 <?php //print_r($transaksi);?>
    <p>
        <?php //echo  Html::a('Update', ['update', 'id' => $model->id_publikasi], ['class' => 'btn btn-primary']) ?>
        <?php //echo Html::a('Delete', ['delete', 'id' => $model->id_publikasi], [
            //'class' => 'btn btn-danger',
            //'data' => [
            //    'confirm' => 'Are you sure you want to delete this item?',
            //    'method' => 'post',
          //  ],
        //]) ?>
    </p>
    <ul class="timeline">
            <!-- timeline time label -->

            <?php
            $html="";

            //print_r($transaksi);
             foreach($transaksi as $key=>$item){
               $html=$html.'<li class="time-label">
                                <span class="bg-aqua">'
                                    .$key.
                                '</span>
                            </li>';
               foreach($item as $row){
                //HTML tanggal

                  //HTML untuk keterangan Jadwal Kegiatan
                  if($row['jenis_trx']==0){
                      $html=$html.'<li>
                                      <i class="fa fa-calendar-check-o bg-red"></i>
                                          <div class="timeline-item">
                                          <h3 class="timeline-header no-border">'.$row['pegawai'].'</h3>
                                      </div>
                                    </li>';
                  }elseif ($row['jenis_trx']==1) {
                    // code...
                    //$deleteLink=Url::to(['transaksi-publikasi/delete', 'id'=>$row['id_transaksi']]);
                    //$editLink=Url::to(['transaksi-publikasi/edit', 'id'=>$row['id_transaksi']]);
                    //$downloadLink=Url::to(['transaksi-publikasi/download', 'id'=>$row['id_transaksi']]);


                    $html=$html.'<li>
                      <i class="fa fa-cloud-upload bg-blue"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i>'.$row['tanggal_real'].'</span>

                        <h3 class="timeline-header"><a href="#">'.$row['pegawai'].'</a> Upload Berkas Publikasi</h3>
                        <div class="timeline-body">'.$row['catatan'].'
                        </div>
                        <div class="timeline-footer">

                          <a href="'.Url::toRoute(['transaksi-publikasi/download', 'id' => $row['id_transaksi']]).'" class="btn btn-success btn-sm">Download</a>
                          <a href="'.Url::toRoute(['transaksi-publikasi/delete', 'id' => $row['id_transaksi']]).'" class="btn btn-danger btn-xs">Hapus</a>
                          <a href="'.Url::toRoute(['transaksi-publikasi/update', 'id' => $row['id_transaksi']]).'" class="btn btn-warning btn-xs">Edit</a>
                        </div>
                      </div>
                    </li>';
                  }
                  else{
                    $html=$html.'<li>
                                    <i class="fa fa-cloud-download bg-yellow"></i>
                                        <div class="timeline-item">
                                        <h3 class="timeline-header no-border">'.$row['pegawai'].' Download File</h3>
                                    </div>
                                  </li>';
                  }
                }



            };
            echo $html;
            ?>

            <!-- /.timeline-label -->
            <!-- timeline item -->
            <!--
            <li>
              <i class="fa fa-cloud-upload bg-blue"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Read more</a>
                  <a class="btn btn-danger btn-xs">Delete</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <!--
            <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
            </li>
            <li>
              <i class="fa fa-cloud-download bg-red"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
              </div>
            </li>

            <!-- END timeline item -->
            <!-- timeline item -->
            <!--
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                <div class="timeline-body">
                  Take me to your leader!
                  Switzerland is small and neutral!
                  We are more like Germany, ambitious and misunderstood!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->

            <!--
            <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <!--
            <li>
              <i class="fa fa-camera bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                <div class="timeline-body">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <!--
            <li>
              <i class="fa fa-video-camera bg-maroon"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>

                <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                <div class="timeline-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
                <div class="timeline-footer">
                  <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>


  </div>
