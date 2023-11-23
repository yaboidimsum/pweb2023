<?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute(); // Eksekusi query insert
  $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <header class="text-4xl font-bold text-center mb-8">
        <h1>Formulir Edit Siswa</h1>
    </header>

    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                
                <div class="mb-4">
                    <label for="nis" class="block text-sm font-semibold text-gray-600">NIS:</label>
                    <input type="text" name="nis" maxlength="50" class="w-full px-3 py-2 border rounded-md" placeholder="NIS..." value="<?php echo $data['nis']; ?>"/>
                </div>

                <div class="mb-4">
                    <label for="nama" class="block text-sm font-semibold text-gray-600">Nama:</label>
                    <input type="text" name="nama" maxlength="50" class="w-full px-3 py-2 border rounded-md" placeholder="Nama lengkap..." value="<?php echo $data['nama']; ?>"/>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-600">Jenis Kelamin:</label>
                    <label class="inline-block mr-4">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($data['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?> class="mr-2"> Laki-laki
                    </label>
                    <label class="inline-block">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($data['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?> class="mr-2"> Perempuan
                    </label>
                </div>

                <div class="mb-4">
                    <label for="telp" class="block text-sm font-semibold text-gray-600">Nomor Telepon:</label>
                    <input type="text" name="telp" maxlength="50" class="w-full px-3 py-2 border rounded-md" placeholder="Telp..." value="<?php echo $data['telp']; ?>"/>
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-semibold text-gray-600">Alamat:</label>
                    <textarea name="alamat" id="alamat" class="w-full px-3 py-2 border rounded-md" rows="4"><?php echo $data['alamat']; ?></textarea>
                </div>

                <div class="mb-4">
                    <label for="foto" class="block text-sm font-semibold text-gray-600">Foto:</label>
                    <input type="file" name="foto" class="w-full px-3 py-2 border rounded-md" />
                </div>

                <div class="flex items-center">
                    <input type="submit" value="Ubah" name="ubah" class="bg-blue-500 text-white py-2 px-4 rounded-md mr-2 hover:bg-blue-700 transition duration-300">
                    <a href="list-siswa.php" class="text-blue-500 hover:underline">Batal</a>
                </div>

            </fieldset>
        </form>
    </div>
</body>
</html>
