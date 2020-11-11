<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<div class="container mt-3">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="my-auto">Update Data Dosen</span>
      </div>
      <?php
        include("../../config/koneksi.php");
        $query = "SELECT * FROM `dosen` WHERE id_dosen = '".$_GET['id']."'";
        $result = $koneksi->query($query);
        while($data = mysqli_fetch_row($result))
        {
      ?>
      <div class="card-body">
        <!-- <form action="" method="post"> -->
          <div class="row">
            <div class="col-md-6">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" value='<?php echo $data[1]?>'>
            </div>
            <div class="col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" value='<?php echo $data[3]?>'>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-6">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $data[2]?></textarea>
            </div>
          </div>
          <?php
        }
        ?>
          <div class="row mt-2">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary updatedosen" value="Simpan">
            </div>
          </div>
        <!-- </form> -->
        
      </div>
    </div>
  </div>
  
</div>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="../js/mdtimepicker.js"></script>
<script type="text/javascript" src="../../js/index.js"></script>
</body>
</html>