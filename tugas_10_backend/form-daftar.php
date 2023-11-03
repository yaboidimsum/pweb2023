<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-[#767bbb]">
    
<div class="h-screen flex gap-5 items-center justify-center">
<div class="flex flex-col gap-5 py-5 px-5 bg-[#14213d] rounded-[1rem]">
        <h3 class="text-lg font-bold text-[#fca311]">Formulir Pendaftaran Siswa Baru</h3>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset class="flex flex-col gap-5">

        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="jenis_kelamin">Jenis Kelamin: </label>
            <label class="text-sm font-normal text-white"><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label class="text-sm font-normal text-white"><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p class="flex flex-col gap-2 ">
            <label class="text-sm font-medium text-white" for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <div class="px-5 py-2 bg-[#fca311] w-[30%] cursor-pointer rounded-md transition duration-300 ease-in-out hover:bg-[#fca211bb]">
            <input class="cursor-pointer" type="submit" value="Daftar" name="daftar" />
        </div>

        </fieldset>

    </form>
</div>    
</div>

    </body>
</html>