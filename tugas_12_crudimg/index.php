<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
  <h1 class="text-3xl font-bold mb-4">Data Siswa</h1>
  <a href="form_simpan.php" class="bg-blue-500 text-white py-2 px-4 rounded inline-block mb-4">Tambah Data</a><br><br>
  <table class="w-full border-collapse border" >
    <tr class="bg-gray-200">
      <th class="py-2 px-4 border">Foto</th>
      <th class="py-2 px-4 border">NIS</th>
      <th class="py-2 px-4 border">Nama</th>
      <th class="py-2 px-4 border">Jenis Kelamin</th>
      <th class="py-2 px-4 border">Telepon</th>
      <th class="py-2 px-4 border">Alamat</th>
      <th class="py-2 px-4 border" colspan="2">Aksi</th>
    </tr>
    <?php
    // Load file koneksi.php
    include "koneksi.php";
    // Buat query untuk menampilkan semua data siswa
    $sql = $pdo->prepare("SELECT * FROM siswa");
    $sql->execute(); // Eksekusi querynya
    while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
      echo "<tr class='border'>";
      echo "<td class='py-2 px-4 border'><img src='images/".$data['foto']."' class='w-16 h-16 object-cover'></td>";
      echo "<td class='py-2 px-4 border'>".$data['nis']."</td>";
      echo "<td class='py-2 px-4 border'>".$data['nama']."</td>";
      echo "<td class='py-2 px-4 border'>".$data['jenis_kelamin']."</td>";
      echo "<td class='py-2 px-4 border'>".$data['telp']."</td>";
      echo "<td class='py-2 px-4 border'>".$data['alamat']."</td>";
      echo "<td class='py-2 px-4 border'><a href='form_ubah.php?id=".$data['id']."' class='text-blue-500'>Ubah</a></td>";
      echo "<td class='py-2 px-4 border'><a href='proses_hapus.php?id=".$data['id']."' class='text-red-500'>Hapus</a></td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>
