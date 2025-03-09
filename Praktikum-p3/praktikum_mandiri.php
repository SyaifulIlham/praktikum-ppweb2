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
   <div class="card">
   <div class="card card-body">
<center><h2>Form input nilai Mahasiswa</h2></center>
<form action="proses_cari_nilai.php" method="POST">
    <label for="name" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Input nama" type="text" class="form-control">
    </div>
    <label for="name" class="col-4 col-form-label">Nim</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Input nim" type="text" class="form-control">
    </div>
    <label for="name" class="col-4 col-form-label">Rombel</label> 
    <div class="col-8">
      <input id="Rombel" name="Rombel" placeholder="Input rombel" type="text" class="form-control">
    </div>
    <label for="matkul" class="col-4 col-form-label">Mata kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" aria-describedby="matkulHelpBlock">
        <option value="Dasar-Dasar Pemrograman">Dasar Dasar Pemrograman</option>
        <option value="Pemweb">Pemrograman web</option>
        <option value="uiux">User Interface & User Experience</option>
        <option value="BSD">Basis Data</option>
      </select> 
      <span id="matkulHelpBlock" class="form-text text-muted">Isi mata kuliah</span>
    </div>
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Input nilai uts" type="text" class="form-control">
    </div>
    <label for="Uas" class="col-4 col-form-label">Nilai Uas</label> 
    <div class="col-8">
      <input id="Uas" name="Uas" placeholder="Input nilai uas" type="text" class="form-control">
    </div>
    <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum / harian</label> 
    <div class="col-8">
      <input id="praktikum" name="praktikum" placeholder="Isi nilai Praktikum" type="text" class="form-control">
    </div>
    <div class="offset-5 col-8 my-3">
      <input name="proses" type="submit" class="btn btn-primary"></input>
    </div>
  </div>
</form>
</div>
   </div>
  </div>
</body>
</html>