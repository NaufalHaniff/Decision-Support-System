<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cara Penggunaan SPK MOORA</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8fafc;
      color: #333;
      margin: 0;
      padding: 0;
      line-height: 1.8;
    }
    header {
      background-color: #2563eb;
      color: white;
      text-align: center;
      padding: 20px 40px;
    }
    main {
      padding: 40px;
      max-width: 900px;
      margin: auto;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    h2 {
      color: #2563eb;
    }
    section {
      margin-bottom: 30px;
    }
    ul {
      padding-left: 20px;
    }
    footer {
      text-align: center;
      padding: 20px;
      background-color: #e5e7eb;
      font-size: 0.9em;
    }
  </style>
</head>
<body>

<header>
  <h1>Cara Penggunaan Website SPK Metode MOORA</h1>
</header>

<main>

  <section>
    <h2>Langkah-langkah Menggunakan Website SPK</h2>
    <p>Berikut ini adalah panduan umum cara menggunakan sistem penunjang keputusan berbasis web:</p>
    <ul>
      <li><strong>Login:</strong> Masuk ke halaman login dengan memasukkan username dan password Anda.</li>
      <li><strong>Input Data Kriteria:</strong> Tambahkan semua kriteria yang digunakan dalam proses pengambilan keputusan.</li>
      <li><strong>Input Data Alternatif:</strong> Masukkan data alternatif, yaitu pilihan-pilihan yang akan dievaluasi.</li>
      <li><strong>Input Sub Kriteria:</strong> Tambahkan nilai-nilai yang menjelaskan kriteria (misalnya: Sangat Baik = 5, Cukup = 3, dll).</li>
      <li><strong>Input Penilaian:</strong> Masukkan penilaian untuk setiap alternatif berdasarkan kriteria dan sub kriteria yang telah dibuat.</li>
      <li><strong>Lihat Matriks:</strong> Website akan menampilkan Matriks Keputusan, Matriks Normalisasi, dan Matriks Terbobot secara otomatis.</li>
      <li><strong>Hasil Perhitungan:</strong> Sistem akan menghitung nilai Yi dan menampilkan peringkat dari alternatif terbaik hingga terendah.</li>
    </ul>
  </section>

  <section>
    <h2>Langkah-langkah Menggunakan Metode MOORA</h2>
    <p>Metode MOORA digunakan dalam sistem ini untuk menentukan alternatif terbaik. Berikut tahapannya:</p>
    <ul>
      <li><strong>1. Menyusun Matriks Keputusan (X):</strong> Menyusun data nilai dari setiap alternatif berdasarkan kriteria.</li>
      <li><strong>2. Normalisasi Matriks:</strong> Setiap nilai dibagi dengan akar kuadrat dari jumlah kuadrat tiap kolom (kriteria).</li>
      <li><strong>3. Mengalikan Bobot:</strong> Nilai yang telah ternormalisasi dikalikan dengan bobot masing-masing kriteria.</li>
      <li><strong>4. Menghitung Nilai Yi:</strong> Untuk setiap alternatif, jumlahkan nilai dari kriteria "benefit" lalu kurangkan dengan jumlah nilai dari kriteria "cost".</li>
      <li><strong>5. Menentukan Peringkat:</strong> Urutkan nilai Yi dari yang terbesar ke yang terkecil. Nilai tertinggi adalah alternatif terbaik.</li>
    </ul>
  </section>

</main>

<footer>
  &copy; 2025 Panduan Penggunaan SPK MOORA - BYD Indonesia
</footer>

</body>
</html>
