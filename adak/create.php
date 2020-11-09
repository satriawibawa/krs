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
        <span class="my-auto">Tambah Data Mata Kuliah</span>
      </div>
      <div class="card-body">
        <!-- <form action="" method="post"> -->
          <div class="row">
            <div class="col-md-6">
              <label for="kd_mk">Kd Mata Kuliah</label>
              <input type="text" class="form-control" name="kdmatkul" id="kdmatkul">
            </div>
            <div class="col-md-6">
              <label for="nama_mk">Nama Mata Kuliah</label>
              <input type="text" class="form-control" name="nmmatkul" id="nmmatkul">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="sks">Sks</label>
              <input type="number" class="form-control" name="sks" id="sks">
            </div>
            <div class="col-md-6">
              <label for="ruangan">Ruangan</label>
              <input type="text" class="form-control" name="ruangan" id="ruangan">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="kelas">Kelas</label>
              <input type="text" class="form-control" name="kelas" id="kelas">
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
                  include("../config/koneksi.php");
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
              <input type="text" class="form-control" name="jam" id="jam">
            </p>
            </div>
          </div>
          
          <div class="row mt-2">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary matkul" name="" value="Simpan">
            </div>
          </div>
        <!-- </form> -->
      </div>
    </div>
  </div>
  
</div>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="../js/mdtimepicker.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>