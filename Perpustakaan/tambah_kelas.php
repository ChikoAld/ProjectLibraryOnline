<DOCTYPE! html>
<head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <img src="Pustel.png" height="40px" weight="40px">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
            </li>
        </ul>
    </nav>
    <br>

    <h3>Tambah Kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        Nama Kelas:
        <input type="text" name="Nama_Kelas" value="" class="form-control">
        Kelompok :
        <input type="text" name="Kelompok" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
        <input type="submit" name="edit" value="Edit Kelas" class="btn btn-primary">
    </form>

    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></script>
</body>
</html>