<div>
    <form class="mt-5" action="" method="post">
        <div>
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" placeholder="Masukkan NIM" name="nim_mahasiswa" type="number" required>
        </div>
        <div>
            <label class="form-label" for="mahasiswa">Nama Mahasiswa</label>
            <input class="form-control" placeholder="Masukkan Nama" name="mahasiswa" type="text" required>
        </div>
        <div>
            <label class="form-label" for="alamat">Alamat</label>
            <input class="form-control bg-warning" placeholder="Masukkan Alamat" name="alamat" type="text" required>
        </div>
        <div class="mt-3">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $nim = $_POST['nim_mahasiswa'];
        $mahasiswa = $_POST['mahasiswa'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO mahasiswa VALUES (NULL,'$nim','$mahasiswa','$alamat')";

        $db->runQuery($sql);
        header("location:?f=mahasiswa&&m=select");
    }

?>