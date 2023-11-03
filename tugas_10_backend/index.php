<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-[#767bbb]">
    <div class="h-screen flex gap-5 items-center justify-center">
    <div class="flex flex-col gap-5 py-5 px-5 bg-[#14213d] rounded-[1rem]">
    <div class="text-lg font-bold">
        <h3 class="text-[#fca311]" >Pendaftaran Siswa Baru</h3>
        <h1 class="text-[#e5e5e5]">SMK Coding</h1>
    </div>
    <div class="flex flex-col gap-2">
        <h4 class="text-sm font-medium text-white">Menu:</h4>
        <nav>
            <ul>
                <li class="text-sm text-slate-300 font-semibold hover:text-[#fca311] transition duration-300 ease-in-out"><a href="form-daftar.php">Daftar Baru</a></li>
                <li class="text-sm text-slate-300 font-semibold hover:text-[#fca311] transition duration-300 ease-in-out"><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
    </div>
    <?php if(isset($_GET['status'])): ?>
    <p class="text-sm text-green-500 font-semibold">
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</div>
</div>

    </body>
</html>