<?php 
include("../conf/config.php");
$query1 = mysqli_query($koneksi,"SELECT count(id1)AS jmlkrt FROM tb_kriteria");
$view1 = mysqli_fetch_array($query1);
$query2 = mysqli_query($koneksi,"SELECT count(id2)AS jmlsub FROM tb_sub");
$view2 = mysqli_fetch_array($query2);
$query3 = mysqli_query($koneksi,"SELECT count(id3)AS jmlalt FROM tb_alternatif");
$view3 = mysqli_fetch_array($query3);
$query4 = mysqli_query($koneksi,"SELECT count(id4)AS jmlpen FROM tb_penilaian");
$view4 = mysqli_fetch_array($query4);
$query1 = mysqli_query($koneksi,"SELECT count(id1)AS jmlkrt FROM tb_kriteria");
$view1 = mysqli_fetch_array($query1);
$query1 = mysqli_query($koneksi,"SELECT count(id1)AS jmlkrt FROM tb_kriteria");
$view1 = mysqli_fetch_array($query1);
?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $view1['jmlkrt'];?></h3>

                <p><strong>Data Kriteria</strong></p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-cube"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $view2['jmlsub'];?></h3>

                <p><strong>Data Sub Kriteria</strong></p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-cubes"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $view3['jmlalt'];?></h3>

                <p><strong>Data Alternatif</strong></p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-clone"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $view4['jmlpen'];?></h3>

                <p><strong>Data Penilaian</strong></p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-edit"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $view1['jmlkrt'];?></h3>

                <p><strong>Data Perhitungan</strong></p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-calculator"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $view3['jmlalt'];?></h3>

                <p><strong>Data Hasil Akhir</strong></p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-signal"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
