<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi CRUD dengan PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data" class="max-w-md bg-white p-6 rounded-md shadow-md">
    <h1 class="text-3xl font-bold mb-4">Tambah Data Siswa</h1>
    <table class="w-full mb-4">
      <tr>
        <td class="py-2">NIS</td>
        <td><input type="text" name="nis" class="px-4 py-2 w-full border rounded-md"></td>
      </tr>
      <tr>
        <td class="py-2">Nama</td>
        <td><input type="text" name="nama" class="px-4 py-2 w-full border rounded-md"></td>
      </tr>
      <tr>
        <td class="py-2">Jenis Kelamin</td>
        <td>
          <label class="inline-flex items-center">
            <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-radio h-5 w-5 text-blue-600">
            <span class="ml-2">Laki-laki</span>
          </label>
          <label class="inline-flex items-center ml-6">
            <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-radio h-5 w-5 text-pink-600">
            <span class="ml-2">Perempuan</span>
          </label>
        </td>
      </tr>
      <tr>
        <td class="py-2">Telepon</td>
        <td><input type="text" name="telp" class="px-4 py-2 w-full border rounded-md"></td>
      </tr>
      <tr>
        <td class="py-2">Alamat</td>
        <td><textarea name="alamat" class="px-4 py-2 w-full border rounded-md"></textarea></td>
      </tr>
      <tr>
        <td class="py-2">Foto</td>
        <td><input type="file" name="foto" class="px-4 py-2 w-full border rounded-md"></td>
      </tr>
      </table>
  
  <hr class="my-4">

  <div class="flex justify-end">
    <input type="submit" value="Simpan" class="bg-blue-500 text-white py-2 px-4 rounded">
    <a href="index.php" class="inline-block ml-4"><input type="button" value="Batal" class="bg-gray-500 text-white py-2 px-4 rounded"></a>
  </div>
</form>
</body>
</html>
