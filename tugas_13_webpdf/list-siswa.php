<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <header class="text-4xl font-bold text-center mb-8">
        <h1>Data Siswa</h1>
    </header>

    <div class="mb-8">
        <nav class="flex justify-between">
            <a href="index.php" class="text-blue-500 hover:underline"><< Back</a>
            <a href="form_simpan.php" class="bg-green-500 text-white py-2 px-4 rounded-full hover:bg-green-700 transition duration-300">[+] Tambah</a>
        </nav>
    </div>

    <div class="mb-8">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">Foto</th>
                    <th class="p-2">NRP</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Jenis Kelamin</th>
                    <th class="p-2">No Telp</th>
                    <th class="p-2">Alamat</th>
                    <th class="p-2">Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include "koneksi.php";
                $sql = $pdo->prepare("SELECT * FROM siswa");
                $sql->execute();

                while($data = $sql->fetch()){
                    echo "<tr class='border border-gray-300'>";
                    echo "<td class='p-2'><img src='images/".$data['foto']."' width='100' height='100'></td>";
                    echo "<td class='p-2'>".$data['nis']."</td>";
                    echo "<td class='p-2'>".$data['nama']."</td>";
                    echo "<td class='p-2'>".$data['jenis_kelamin']."</td>";
                    echo "<td class='p-2'>".$data['telp']."</td>";
                    echo "<td class='p-2'>".$data['alamat']."</td>";

                    echo "<td class='p-2'>";
                    echo "<a href='form_ubah.php?id=".$data['id']."' class='text-blue-500 hover:underline mr-2'>Edit</a>";
                    echo "<a href='proses_hapus.php?id=".$data['id']."' class='text-red-500 hover:underline'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <a href="report.php" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700 transition duration-300">Download PDF</a>

</body>
</html>
