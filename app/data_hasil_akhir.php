<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="nav-icon fas fa-signal"></i> Hasil Akhir Perankingan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Nilai Yi</th>
                    <th>Rank</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Ambil semua kriteria dan hitung pembaginya
                    $kriteria = [];
                    $qKriteria = mysqli_query($koneksi, "SELECT * FROM tb_kriteria ORDER BY kode_kriteria ASC");
                    while ($row = mysqli_fetch_array($qKriteria)) {
                        $id_kriteria = $row['id1'];
                        $bobot = $row['bobot_kriteria'];

                        // Hitung pembagi (akar jumlah kuadrat nilai_sub)
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

                        $row['pembagi'] = sqrt($totalKuadrat);
                        $kriteria[] = $row;
                    }
                    $alternatifData = [];

                    // Ambil semua data Yi dulu ke array
                    $qAlternatif = mysqli_query($koneksi, "SELECT * FROM tb_alternatif ORDER BY id3 ASC");
                    while ($alt = mysqli_fetch_array($qAlternatif)) {
                        $total_max = 0;
                        $total_min = 0;

                        foreach ($kriteria as $k) {
                            $id_kriteria = $k['id1'];
                            $bobot = $k['bobot_kriteria'];
                            $pembagi = $k['pembagi'];
                            $sifat = strtolower($k['jenis_kriteria']);

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

                            $nilai_ternormalisasi = ($pembagi != 0) ? $nilai / $pembagi : 0;
                            $nilai_terbobot = round($nilai_ternormalisasi * $bobot, 4);

                            if ($sifat == 'benefit') {
                                $total_max += $nilai_terbobot;
                            } else {
                                $total_min += $nilai_terbobot;
                            }
                        }

                        $yi = round($total_max - $total_min, 4);
                        $alternatifData[] = [
                            'nama' => $alt['nama_alternatif'],
                            'yi' => $yi
                        ];
                    }

                    // Urutkan berdasarkan nilai Yi secara descending
                    usort($alternatifData, function ($a, $b) {
                        return $b['yi'] <=> $a['yi'];
                    });

                    // Tampilkan hasil ranking
                    foreach ($alternatifData as $index => $data) {
                        $rank = $index + 1;
                        $highlight = ($rank == 1) ? 'style="background-color: #d4edda; font-weight: bold;"' : '';
                    
                        echo "<tr $highlight>";
                        echo "<td>$rank</td>";
                        echo "<td>{$data['nama']}</td>";
                        echo "<td>{$data['yi']}</td>";
                        echo "<td><strong>$rank</strong></td>";
                        echo "</tr>";
                    }                    
                    ?>
                    </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Nilai Yi</th>
                    <th>Rank</th>
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