<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
  
<div class="container mt-3">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="my-auto">Daftar Mata Kuliah</span>
      </div>
      <div class="card-body">
        <div class="row justify-content-left align-items-left">
          <a href="create.php" class="btn btn-primary">+ Tambah Data Mata Kuliah</a>
          <a href="dosen/create.php" class="btn btn-primary">+ Tambah Data Dosen</a>
          <a href="dosen/read.php" class="btn btn-primary">+ Lihat Dosen</a>
        </div><br>
        <div class="row justify-content-center align-items-center">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kd Matkul</th>
                <th>Nama Matkul</th>
                <th>Sks</th>
                <th>Ruangan</th>
                <th>Kelas</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Semester</th>
                <th>Dosen</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php
              include("../config/koneksi.php");
              $no=0;
              $queryJoin = "SELECT matkul.kd_matkul,matkul.nama_matkul,matkul.sks,matkul.ruangan,matkul.kelas,matkul.hari,matkul.jam,matkul.semester,dosen.nama,matkul.id_matkul FROM dosen INNER JOIN matkul ON dosen.id_dosen=matkul.id_dosen ORDER BY semester ASC";
              $result = $koneksi->query($queryJoin);
              while($data = mysqli_fetch_row($result))
              {
              $no++;
            ?>
            <tbody>
              <tr>
              <?php
                echo "<td align=center>$no</td>";
                echo "<td align=center>$data[0]</td>";
                echo "<td align=center>$data[1]</td>";
                echo "<td align=center>$data[2]</td>";
                echo "<td align=center>$data[3]</td>";
                echo "<td align=center>$data[4]</td>";
                echo "<td align=center>$data[5]</td>";
                echo "<td align=center>$data[6]</td>";
                echo "<td align=center>$data[7]</td>";
                echo "<td align=center>$data[8]</td>";
                echo '<td align=center><a href="update.php?id='.$data[9].'" class="btn btn-success">Edit</a> |
                  <a href="delete.php?id='.$data[9].'" class="btn btn-danger">Delete</a></td>
                  '
                  ?>
                </td>
              </tr>
            </tbody>
            <?php
            
          }
            // }
            ?>
          </table>
        </div>
        <div class="row justify-content-left align-items-left">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>