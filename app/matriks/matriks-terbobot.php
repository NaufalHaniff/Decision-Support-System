<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="nav-icon fas fa-calculator"></i> Matriks Normalisasi Terbobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="matriks_terbobot" class="table table-bordered table-striped">
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
                    // Ambil semua kriteria
                    $kriteria = [];
                    $pembagi = []; // Untuk menyimpan akar dari total kuadrat tiap kriteria

                    $qKriteria = mysqli_query($koneksi, "SELECT * FROM tb_kriteria ORDER BY kode_kriteria ASC");
                    while ($row = mysqli_fetch_array($qKriteria)) {
                        $id_kriteria = $row['id1'];
                        $bobot = $row['bobot_kriteria'];

                        // Hitung pembagi (akar dari jumlah kuadrat)
                        $q = mysqli_query($koneksi, "
                            SELECT tb_sub.nilai_sub 
                            FROM tb_penilaian 
                            JOIN tb_sub ON tb_penilaian.id_sub = tb_sub.id2 
                            WHERE tb_sub.id_kriteria = '$id_kriteria'
                        ");
                        $totalKuadrat = 0;
                        while ($d = mysqli_fetch_array($q)) {
                            $totalKuadrat += pow($d['nilai_sub'], 2);
                        }

                        $pembagi[$id_kriteria] = sqrt($totalKuadrat);
                        $row['pembagi'] = $pembagi[$id_kriteria];
                        $kriteria[] = $row;
                    }
                    ?>
                    <?php
                    $no = 1;
                    $qAlternatif = mysqli_query($koneksi, "SELECT * FROM tb_alternatif ORDER BY id3 ASC");
                    while ($alt = mysqli_fetch_array($qAlternatif)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>{$alt['nama_alternatif']}</td>";

                        foreach ($kriteria as $k) {
                            $id_kriteria = $k['id1'];
                            $bobot = $k['bobot_kriteria'];
                            $pembagi = $k['pembagi'];

                            // Ambil nilai_sub
                            $qNilai = mysqli_query($koneksi, "
                                SELECT tb_sub.nilai_sub 
                                FROM tb_penilaian 
                                JOIN tb_sub ON tb_penilaian.id_sub = tb_sub.id2 
                                WHERE tb_penilaian.id_alternatif = '{$alt['id3']}' 
                                AND tb_sub.id_kriteria = '$id_kriteria'
                            ");

                            $nilai = 0;
                            if ($n = mysqli_fetch_array($qNilai)) {
                                $nilai = $n['nilai_sub'];
                            }

                            // Normalisasi
                            $nilai_ternormalisasi = ($pembagi != 0) ? $nilai / $pembagi : 0;

                            // Kali bobot
                            $nilai_terbobot = round($nilai_ternormalisasi * $bobot, 4);

                            echo "<td>$nilai_terbobot</td>";
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