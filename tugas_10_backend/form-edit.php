<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-[#767bbb]">
<div class="h-screen flex gap-5 items-center justify-center">
<div class="flex flex-col gap-5 py-5 px-5 bg-[#14213d] rounded-[1rem]">

<h3 class="text-lg font-bold text-[#fca311]">Formulir Perubahan Data Siswa</h3>


    <form action="proses-edit.php" method="POST">

    <fieldset class="flex flex-col gap-5">

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label class="text-sm font-normal text-white"><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label class="text-sm font-normal text-white"><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="agama">Agama: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
        </p>
        <div class="px-5 py-2 bg-[#fca311] w-[35%] cursor-pointer rounded-md transition duration-300 ease-in-out hover:bg-[#fca211bb]">
            <input type="submit" value="Simpan" name="simpan" />
        </div>

        </fieldset>


    </form>
    </div>
    </div>

    </body>
</html>