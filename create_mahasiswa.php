<!doctype html> 
<html lang="en">  
        <head> 
        <title>Tambah Data Mahasiswa</title> 
        </head>  
    <body> 
    <h1>Tambah</h1> 
    <a href="mahasiswa.php">Kembali</a> 
    <br><br> 
        <form action="process.php" method="post"> 
            <label>ID</label> 
            <br> 
            <input type="text" name="id"> 
            <br> 
            <label>Nama</label> 
            <br> 
            <input type="text" name="nama"> 
            <br> 
            <label>SEMESTER</label> 
            <br> 
            <input type="number" name="semester"> 
            <br> 
            <label>ALAMAT</label> 
            <br> 
            <input type="text" name="alamat"> 
            <br> 
            <label>No TLP</label> 
            <br> 
            <input type="text" name="no_tlp"> 
            <br><br> 
            <button type="submit" name="submit_simpan_mahasiswa">Submit</button> 
            <button type="reset">Reset</button> 
        </form> 
    </body>  
</html> 