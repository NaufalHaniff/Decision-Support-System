<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="nav-icon fas fa-calculator"></i> Menghitung Nilai Yi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabel_yi" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Maximum ( C1 C2 C6)</th>
                    <th>Minimum ( C3 C4 C5)</th>
                    <th>Yi = Max - Min</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $qAlternatif = mysqli_query($koneksi, "SELECT * FROM tb_alternatif ORDER BY id3 ASC");
                    while ($alt = mysqli_fetch_array($qAlternatif)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>{$alt['nama_alternatif']}</td>";

                        $total_max = 0; // Untuk benefit
                        $total_min = 0; // Untuk cost

                        foreach ($kriteria as $k) {
                            $id_kriteria = $k['id1'];
                            $bobot = $k['bobot_kriteria'];
                            $pembagi = $k['pembagi'];
                            $sifat = strtolower($k['jenis_kriteria']); // 'benefit' atau 'cost'

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

                            // Normalisasi dan kali bobot
                            $nilai_ternormalisasi = ($pembagi != 0) ? $nilai / $pembagi : 0;
                            $nilai_terbobot = round($nilai_ternormalisasi * $bobot, 4);

                            // Tambahkan ke max atau min
                            if ($sifat == 'benefit') {
                                $total_max += $nilai_terbobot;
                            } else {
                                $total_min += $nilai_terbobot;
                            }
                        }

                        $yi = round($total_max - $total_min, 4);

                        echo "<td>" . round($total_max, 4) . "</td>";
                        echo "<td>" . round($total_min, 4) . "</td>";
                        echo "<td><strong>$yi</strong></td>";

                        echo "</tr>";
                        $no++;
                    }
                    ?>
                    </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Maximum ( C1 C2 C6)</th>
                    <th>Minimum ( C3 C4 C5)</th>
                    <th>Yi = Max - Min</th>
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