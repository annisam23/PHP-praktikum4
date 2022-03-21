<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      h2{
        text-align:center;
        background-color:grey;
        font-family:arial;
      }
      form{
        margin:10px;
      }
    </style>
  </head>
<body>
  <h2>FORM PENILAIAN MAHASISWA</h2>
<form action="" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="number" name="nim" type="text"  size ="30" class="form-control" placeholder="Masukan NIM anda">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matakuliah" class="custom-select">
        <option value="basis data ">basis data</option>
        <option value="ddp">ddp</option>
        <option value="pw">pw</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai Uts</label> 
    <div class="col-8">
      <input id="text1" name="nilai" value="" size="6" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php 
require_once "class_nilaimahasiswa.php";
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'],$_POST['matakuliah'],$_POST['nilai']);
    $keterangan = $ns->hitungNilai();
    $hasil = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);
    echo "NIM : " .$ns->nim;
    echo "<br>";
    echo "Mata KULIAH : " .$ns->matakuliah;
    echo "<br>";
    echo "Nilai : " .$ns->nilai;
    echo "<br>";
    echo "Status : " .$hasil;
    echo "<br>";
    echo "Grade : " .$hasil2;
}

?>

</body>
</html>