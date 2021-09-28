<?php
include "header.php";
?>
<h2>Daftar Buku</h2>
<a href="tambah_buku.php" class="mt-1 mb-1 btn btn-primary">+ Tambah Buku</a>
<div class = "row">
    <?php
    include "koneksi.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($dt_buku = mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="Baal.png" class="card-img-top">
              <div class="card-body">
                Nama Buku :
                <p class="card-title"><?=$dt_buku['nama_buku']?></p>
                Penulis :
                <p class="card-text"><?=substr($dt_buku['penulis'], 0,20)?></p>
                Penerbit :
                <p class="card-text"><?=substr($dt_buku['penerbit'], 0,20)?></p>
                Deskripsi :
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
              </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
include "footer.php";
?>