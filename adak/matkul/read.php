<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>ABCD1234</td>
                <td>Pemerograman Web</td>
                <td>3 SKS</td>
                <td>S32</td>
                <td>TI3</td>
                <td>Senin</td>
                <td>10:00</td>
                <td>
                  <a href="update.php" class="btn btn-success">Edit</a> |
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            </tbody>
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
</body>
</html>