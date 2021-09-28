<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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

    <h3>Tambah siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        Nama siswa :
        <input type="text" name="nama_siswa" value="" class="form-control">
        Tanggal lahir :
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Gender :
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki Laki</option>
            <option value="P">Perempuan</option>
        </select>
        Kelas : 
        <select name="ID_kelas" class="form-control">
            <option></option>
            <?php 
            include "Koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['ID_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        Jurusan : 
        <select name="id_jurusan" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_jurusan=mysqli_query($conn,"select * from jurusan");
            while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
                echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['jurusan'].'</option>';    
            }
            ?>
            </select>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control"><br>
        <input type="Submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>