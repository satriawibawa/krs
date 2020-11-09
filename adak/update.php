<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="../js/mdtimepicker.css" rel="stylesheet">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<div class="container mt-3">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="my-auto">Update Data Mata Kuliah</span>
      </div>
      <?php
        include("../config/koneksi.php");
        $query = "SELECT * FROM `matkul` WHERE id_matkul = '".$_GET['id']."'";
        $result = $koneksi->query($query);
        while($data = mysqli_fetch_row($result))
        {
      ?>
      <div class="card-body">
        <!-- <form action="" method="post"> -->
          <div class="row">
            <div class="col-md-6">
              <label for="kd_mk">Kd Mata Kuliah</label>
              <input type="text" class="form-control" name="kdmatkul" id="kdmatkul" value='<?php echo $data[1]?>'>
            </div>
            <div class="col-md-6">
              <label for="nama_mk">Nama Mata Kuliah</label>
              <input type="text" class="form-control" name="nmmatkul" id="nmmatkul" value='<?php echo $data[2]?>'>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="sks">Sks</label>
              <input type="text" class="form-control" name="sks" id="sks" value='<?php echo $data[3]?>'>
            </div>
            <div class="col-md-6">
              <label for="ruangan">Ruangan</label>
              <input type="text" class="form-control" name="ruangan" id="ruangan" value='<?php echo $data[4]?>'>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="kelas">Kelas</label>
              <input type="text" class="form-control" name="kelas" id="kelas" value='<?php echo $data[5]?>'>
            </div>
            <div class="col-md-6">
              <label for="hari">Hari</label>
              <select class="form-control" name="hari" id="hari">
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jum'at</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="semester">Semester</label>
              <select class="form-control" name="semester" id="semester">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="dosen">Dosen</label>
              <?php
                  $query = "SELECT * FROM `dosen`";
                  $result = $koneksi->query($query);
                  
                  echo '<select class="form-control" name="idDosen" id="idDosen">';
                  while($dosen = mysqli_fetch_row($result))
                  {

                    echo '<option value=' . $dosen[0] . '>' . $dosen[1] . '</option>';
                }
                  echo '</select>';
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="jam">Jam</label>
              <input type="text" class="form-control" name="jam" id="jam" value='<?php echo $data[7]?>'>
            </div>
          </div>
          <?php
            }
          ?>
          <div class="row mt-2">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary ubah" value="Simpan">
            </div>
          </div>
        <!-- </form> -->
      </div>
    </div>
  </div>
  
</div>
<!-- <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="../js/mdtimepicker.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>