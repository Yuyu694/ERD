<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$mahasiswa = mysqli_query($connection, "SELECT nim,nama FROM mahasiswa");
$matkul = mysqli_query($connection, "SELECT kode_matkul,nama_matkul FROM matakuliah");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Nilai</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
            <tr>
                <td>NIM</td>
                <td><input class="form-control" type="char" name="nim"></td>
              </tr>
              <tr>
                <td>Nama Mahasiswa</td>
                <td><input class="form-control" type="char" name="nama"></td>
              </tr>
              <tr>
                <td>Mata Kuliah</td>
                <td>
                  <input class="form-control" name="matkul" id="matkul">
                  </input>
                </td>
              </tr>
              <tr>
              </tr>
              <tr>
                <td>Nilai</td>
                <td><input class="form-control" type="number" name="nilai" max="100"></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>