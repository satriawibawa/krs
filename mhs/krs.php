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
        <span class="my-auto">KRS</span>
      </div>
      <div class="card-body">
        <div id="accordion">
          <div class="card">
            <!-- <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Semester 1
                </button>
              </h5>
            </div> -->
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Semester</th>
                      <th>Kd Matakuliah</th>
                      <th>Nama Matakuliah</th>
                      <th>Sks</th>
                      <th>Nama Dosen</th>
                      <th>Kelas</th>
                      <th>Ruangan</th>
                      <th>Hari</th>
                      <th>Jam</th>
                      <!-- <th>Action</th> -->
                    </tr>
                  </thead>
                  <!-- <tbody>
                    <tr>
                      <td>1</td>
                      <td>Pemerograman Web</td>
                      <td>2 SKS</td>
                      <td>Femi Dwi Astuti</td>
                      <td>TI4</td>
                      <td>S31</td>
                      <td>Senin</td>
                      <td>10:15</td>
                      <td>
                        <input type="checkbox" name="" id="">
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Pemerograman Web</td>
                      <td>2 SKS</td>
                      <td>Femi Dwi Astuti</td>
                      <td>TI4</td>
                      <td>S31</td>
                      <td>Senin</td>
                      <td>10:15</td>
                      <td>
                        <input type="checkbox" name="" id="">
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Pemerograman Web</td>
                      <td>2 SKS</td>
                      <td>Femi Dwi Astuti</td>
                      <td>TI4</td>
                      <td>S31</td>
                      <td>Senin</td>
                      <td>10:15</td>
                      <td>
                        <input type="checkbox" name="" id="">
                      </td>
                    </tr>
                  </tbody> -->
                  <?php
              include("../config/koneksi.php");
              $no=0;
              $queryJoin = "SELECT matkul.kd_matkul,matkul.nama_matkul,matkul.sks,matkul.kelas,matkul.ruangan,matkul.hari,matkul.jam,matkul.semester,dosen.nama,matkul.id_matkul FROM dosen INNER JOIN matkul ON dosen.id_dosen=matkul.id_dosen ORDER BY semester ASC";
              $result = $koneksi->query($queryJoin);
              while($data = mysqli_fetch_row($result))
              {
              $no++;
            ?>
            <tbody>
              <tr>
              <?php
                echo '<td><input type="checkbox" name="" id=""> '.$no.'</td>';
                echo "<td align=center>$data[7]</td>";
                echo "<td align=center>$data[0]</td>";
                echo "<td align=center>$data[1]</td>";
                echo "<td align=center>$data[2]</td>";
                echo "<td align=center>$data[8]</td>";
                echo "<td align=center>$data[3]</td>";
                echo "<td align=center>$data[4]</td>";
                echo "<td align=center>$data[5]</td>";
                echo "<td align=center>$data[6]</td>";
              ?>
                </td>
              </tr>
            </tbody>
            <?php
            
          }
          ?>
                <!-- </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Semester 2
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
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
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Pemerograman Web</td>
                      <td>2 SKS</td>
                      <td>Femi Dwi Astuti</td>
                      <td>TI4</td>
                      <td>S31</td>
                      <td>Senin</td>
                      <td>10:15</td>
                      <td>
                        <input type="checkbox" name="" id="">
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Pemerograman Web</td>
                      <td>2 SKS</td>
                      <td>Femi Dwi Astuti</td>
                      <td>TI4</td>
                      <td>S31</td>
                      <td>Senin</td>
                      <td>10:15</td>
                      <td>
                        <input type="checkbox" name="" id="">
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Pemerograman Web</td>
                      <td>2 SKS</td>
                      <td>Femi Dwi Astuti</td>
                      <td>TI4</td>
                      <td>S31</td>
                      <td>Senin</td>
                      <td>10:15</td>
                      <td>
                        <input type="checkbox" name="" id="">
                      </td>
                    </tr>
                  </tbody>
                </table> -->
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary" name="" value="Simpan">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<script src="../assets/bootstrap/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>