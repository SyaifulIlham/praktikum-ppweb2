<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
     <h2>Selamat Datang di perpustakaan kayashii</h2>
        <div class="card">
    <div class="card-body">
    <form action="kunjungan.php" method = "post">
  <div class="form-group row">
    <label for="nama_kita" class="col-4 col-form-label">nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama_kita" name="nama_kita" placeholder="masukan nama lengkap mu" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="email aktif" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="keperluan" class="col-4 col-form-label">keperluan</label> 
    <div class="col-8">
      <textarea id="keperluan" name="keperluan" cols="40" rows="4" class="form-control" aria-describedby="keperluanHelpBlock"></textarea> 
      <span id="keperluanHelpBlock" class="form-text text-muted">tuliskan keperluan mu</span>
    </div>
  </div> 
  <div class="form-group row ">
    <div class="offset-4 col-8">
      <input id="submit" name="submit" type="submit" class="btn btn-danger">
    </div>
  </div>
</form>
    </div>
        </div>
    </div>
</body>
</html>
<?php
 
?>