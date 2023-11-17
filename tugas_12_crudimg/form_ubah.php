<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-md shadow-md max-w-md w-full">
        <h1 class="text-3xl font-bold mb-4">Ubah Data Siswa</h1>
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
        <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            <table class="w-full mb-4">
                <tr>
                    <td class="py-2">NIS</td>
                    <td><input class="border border-gray-400 p-2 w-full" type="text" name="nis"
                            value="<?php echo $data['nis']; ?>"></td>
                </tr>
                <tr>
                    <td class="py-2">Nama</td>
                    <td><input class="border border-gray-400 p-2 w-full" type="text" name="nama"
                            value="<?php echo $data['nama']; ?>"></td>
                </tr>
                <tr>
                    <td class="py-2">Jenis Kelamin</td>
                    <td>
                        <?php
                        if ($data['jenis_kelamin'] == "Laki-laki") {
                            echo "<input class='mr-2' type='radio' name='jenis_kelamin' value='Laki-laki' checked='checked'> Laki-laki";
                            echo "<input class='ml-2' type='radio' name='jenis_kelamin' value='Perempuan'> Perempuan";
                        } else {
                            echo "<input class='mr-2' type='radio' name='jenis_kelamin' value='Laki-laki'> Laki-laki";
                            echo "<input class='ml-2' type='radio' name='jenis_kelamin' value='Perempuan' checked='checked'> Perempuan";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="py-2">Telepon</td>
                    <td><input class="border border-gray-400 p-2 w-full" type="text" name="telp"
                            value="<?php echo $data['telp']; ?>"></td>
                </tr>
                <tr>
                    <td class="py-2">Alamat</td>
                    <td><textarea class="border border-gray-400 p-2 w-full" name="alamat"
                            rows="3"><?php echo $data['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td class="py-2">Foto</td>
                    <td>
                        <input class="border border-gray-400 p-2 w-full" type="file" name="foto">
                    </td>
                </tr>
            </table>
            <hr>
            <div class="flex justify-between">
                <input class="bg-blue-500 text-white py-2 px-4 rounded cursor-pointer" type="submit" value="Ubah">
                <a href="index.php"><input class="bg-gray-400 text-white py-2 px-4 rounded cursor-pointer"
                        type="button" value="Batal"></a>
            </div>
        </form>
    </div>
</body>

</html>
