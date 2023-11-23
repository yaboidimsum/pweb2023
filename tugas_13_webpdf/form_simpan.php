<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">

    <header class="text-4xl font-bold text-center mb-8">
        <h1>Tambah Data Siswa</h1>
    </header>

    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <form action="proses_simpan.php" method="POST" enctype="multipart/form-data">

            <fieldset>

            <div class="mb-4">
                <label for="nis" class="block text-sm font-semibold text-gray-600">NIS:</label>
                <input type="text" name="nis" maxlength="50" class="w-full px-3 py-2 border rounded-md" placeholder="NIS..." />
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold text-gray-600">Nama:</label>
                <input type="text" name="nama" maxlength="50" class="w-full px-3 py-2 border rounded-md" placeholder="Nama lengkap..." />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-600">Jenis Kelamin:</label>
                <label class="inline-block mr-4">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" class="mr-2"> Laki-laki
                </label>
                <label class="inline-block">
                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="mr-2"> Perempuan
                </label>
            </div>

            <div class="mb-4">
                <label for="telp" class="block text-sm font-semibold text-gray-600">Nomor Telepon:</label>
                <input type="text" name="telp" maxlength="50" class="w-full px-3 py-2 border rounded-md" placeholder="Telp..." />
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-sm font-semibold text-gray-600">Alamat:</label>
                <textarea name="alamat" id="alamat" class="w-full px-3 py-2 border rounded-md" rows="4"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-600">Foto:</label>
                <input type="file" name="foto" class="w-full px-3 py-2 border rounded-md" />
            </div>

            <div class="flex items-center">
                <input type="submit" value="Simpan" name="simpan" class="bg-blue-500 text-white py-2 px-4 rounded-md mr-2 hover:bg-blue-700 transition duration-300">
                <a href="list-siswa.php" class="text-blue-500 hover:underline">Batal</a>
            </div>

            </fieldset>

        </form>
    </div>

</body>
</html>
