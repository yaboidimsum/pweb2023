<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-[#767bbb]">
<div class="h-screen flex gap-5 items-center justify-center">
<div class="flex flex-col gap-5 py-5 px-5 bg-[#14213d] rounded-[1rem]">
        <h3 class="text-lg font-bold text-[#fca311]">Siswa yang sudah mendaftar</h3>

    <div class="px-5 py-2 bg-[#fca311] w-[25%] cursor-pointer text-semibold rounded-md transition duration-300 ease-in-out hover:bg-[#fca211bb]">
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </div>

    <br>

    <table border="1">
    <thead>
        <tr class="text-slate-400">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td class='text-slate-400' >".$siswa['id']."</td>";
            echo "<td class='text-[#fca311]'>".$siswa['nama']."</td>";
            echo "<td class='text-white'>".$siswa['alamat']."</td>";
            echo "<td class='text-[#fca311]'>".$siswa['jenis_kelamin']."</td>";
            echo "<td class='text-white'>".$siswa['agama']."</td>";
            echo "<td class='text-[#fca311]'>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a class='text-yellow-500' href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a class='text-red-500' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p class='font-semibold text-white'>Total: <span class="font-semibold text-[#fca311]"><?php echo mysqli_num_rows($query) ?></span></p>
    </div>
</div>
    </body>
</html>