<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="eng">
<head>
    <title>Edit Nilai Mahasiswa</title>
</head>
<body>
    <h1>Edit Nilai Mahasiswa</h1>
    <a href="index.php">Kembali</a>
    <form action="process.php" method="post">
        <label>NIM</label>
        <br>
        <input type="text" name="nim" value="<?php echo $data->nim ?>">
        <br>
         <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
         <label>UTS</label>
        <br>
        <input type="number" name="uts" value="<?php echo  $data->uts ?>">
        <br>
         <label>UAS</label>
        <br>
        <input type="number" name="uas" value="<?php echo $data->uas ?>">
        <br>
         <label>Tugas</label>
        <br>
        <input type="number" name="tugas" value="<?php echo $data->tugas ?>">
        <br><br>
        <button type="submit" name="submit_edit">submit</button>
    </form>
</body>
<html>
