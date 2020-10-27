<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<div class="container mt-3">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="my-auto">Jadwal Kuliah</span>
      </div>
      <div class="card-body">
        <div class="row justify-content-center align-items-center">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kd Matakuliah</th>
                <th>Sks</th>
                <th>Nama Dosen</th>
                <th>Kelas</th>
                <th>Ruangan</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php
              session_start();
              include("../config/koneksi.php");
              $no=0;
              $queryJoin = "SELECT kd_matkul,nama_matkul,sks,kelas,ruangan,hari,jam,nama FROM matkul INNER JOIN dosen ON matkul.id_dosen=dosen.id_dosen WHERE username = '" . $_SESSION['username'] . "'";
              $result1 = $koneksi->query($queryJoin);
              while($data1 = mysqli_fetch_row($result1))
              {
                $no++;
            ?>
            <tbody>
              <tr>
                <!-- <td>1</td>
                <td>Pemerograman Web</td>
                <td>2 SKS</td>
                <td>Femi Dwi Astuti</td>
                <td>TI4</td>
                <td>S31</td>
                <td>Senin</td>
                <td>10:15</td>
                <td>
                  <a href="" class="btn btn-success">Cetak</a>
                </td> -->
                <?php
                echo "<td align=center>$no</td>";
                echo "<td align=center>$data1[0]</td>";
                echo "<td align=center>$data1[2]</td>";
                echo "<td align=center>$data1[7]</td>";
                echo "<td align=center>$data1[3]</td>";
                echo "<td align=center>$data1[4]</td>";
                echo "<td align=center>$data1[5]</td>";
                echo "<td align=center>$data1[6]</td>";
                echo '<td align=center><a href="" class="btn btn-success">Cetak</a></td>
                '
                ?>
              </tr>
            </tbody>
            <?php
              }
              // }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
  
</div>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>