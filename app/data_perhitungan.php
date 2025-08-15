<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="nav-icon fas fa-calculator"></i> Matriks Keputusan (X)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="matriks_x" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    // Ambil semua data kriteria untuk tahu jumlah & kodenya (misalnya C1, C2, dst)
                    $kriteria = [];
                    $qKriteria = mysqli_query($koneksi, "SELECT * FROM tb_kriteria ORDER BY kode_kriteria ASC");
                    while ($row = mysqli_fetch_array($qKriteria)) {
                        $kriteria[] = $row;
                    }

                    // Ambil semua alternatif
                    $no = 1;
                    $qAlternatif = mysqli_query($koneksi, "SELECT * FROM tb_alternatif ORDER BY id3 ASC");
                    while ($alt = mysqli_fetch_array($qAlternatif)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>{$alt['nama_alternatif']}</td>";

                        // Ambil nilai dari masing-masing kriteria untuk alternatif ini
                        foreach ($kriteria as $k) {
                            $id_kriteria = $k['id1'];

                            // Ambil nilai_sub dari tb_penilaian
                            $qNilai = mysqli_query($koneksi, "
                                SELECT tb_sub.nilai_sub 
                                FROM tb_penilaian 
                                JOIN tb_sub ON tb_penilaian.id_sub = tb_sub.id2 
                                WHERE tb_penilaian.id_alternatif = '{$alt['id3']}' 
                                AND tb_sub.id_kriteria = '$id_kriteria'
                            ");

                            $nilai = "-";
                            if ($n = mysqli_fetch_array($qNilai)) {
                                $nilai = $n['nilai_sub'];
                            }

                            echo "<td>$nilai</td>";
                        }

                        echo "</tr>";
                        $no++;
                    }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Kapasitas Baterai (kWh)</th>
                    <th>Jarak Tempuh per Pengisian (km)</th>
                    <th>Konsumsi Energi (kWh/100 km)</th>
                    <th>Waktu Pengisian Penuh (menit)</th>
                    <th>Harga Mobil (Rp)</th>
                    <th>Daya Pengisian (kW)</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<!-- View Matriks Ternormalisasi -->
 <?php include('matriks/matriks-ternormalisasi.php');?>
<!-- End view -->
<!-- View Matriks Normalisasi Terbobot -->
 <?php include('matriks/matriks-terbobot.php');?>
<!-- End View -->
 <!-- View Menghitung Nilai Yi -->
 <?php include('matriks/matriks-yi.php');?>
<!-- End View -->