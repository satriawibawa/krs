<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="card w-50">
      <div class="card-body">
          <h4 class="card-title text-center mb-4">Register</h4>
          <div class="dropdown-divider"></div>
          <!-- membuat form login -->
          <!-- <form class="my-4" action="" method="post"> -->
              <!-- membuat form user login -->
              <div class="form-group">
                  <label for="role">Role</label>
                  <select class="form-control" name="role" id="role">
                    <option value="adak">Adak</option>
                    <option value="dosen">Dosen</option>
                    <option value="mhs">Mahasiswa</option>
                  </select>
              </div>
              <div class="form-group classnim">

              </div>
              <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" required autofocus>
              </div>
              <div class="form-group">
                  <label for="nama">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="email" name="email" required autofocus>
              </div>
              <div class="form-group classjurusan">

              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" required autofocus>
              </div>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Username" name="username" required autofocus>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
              </div>
              <div class="dropdown-divider my-4"></div>
              <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary w-50 register" name="submit" value="submit">Register</button>
              </div>
              <p>
                sudah punya akun ? <a href="index.php">login</a>
              </p>
          <!-- </form> -->
      </div>
    </div>
  </div>
</div>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>