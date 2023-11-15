<html>
<head>
    <title>Form Registrasi</title>
</head>
    <h1>Form Registrasi Mahasiswa Baru</h1>
<form action="dataregistrasi.php" method="POST">
    <br>Isi data dibawah ini :</br>
<table border="0" width="500">
    <tr><td>Nama</td>
    <td></td>
<td><input type="text" name="nama" size="22"placeholder="Masukan Nama"></td> 
</tr></td>
<tr><td>NIS</td>
<td> </td>
<td><input type="text" name="NIS" size="22"placeholder="Masukan NIS"></td>
</tr></td>
<tr><td>Agama</td>
<td> </td>
    <td><select name="name">
<option value="-Pilih-">
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Katolik">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
<option value="Khonghucu">khonghucu</option>
<option value="aliran kepercayaan">aliran kepercayaan</option>
</tr></td>
</select>
    <tr><td>Alamat</td>
<td> </td>
<td><textarea name="Alamat" rows="5" cols="45"placeholder="Masukan Alamat"></textarea></td>
</tr></td>
    <tr><td>Tempat Lahir</td>
<td> </td>
<td><input type="text"name="addr" size="22"placeholder="Masukan Tempat Lahir"></td>
</tr></td>
    <tr><td>Tanggal Lahir</td>
<td> </td>
<td><input type="text"name="dob" size="22"placeholder="Masukan Tanggal Lahir"></td>
</tr></td>
    <tr><td>Jenis Kelamin</td>
<td> </td>
    <td><input type="radio"name="gender" value="Laki-Laki">Laki-Laki <input type="radio"name="gender" value="Perempuan">Perempuan</td>
    <tr><td>Jenis Mahasiswa</td>
<td> </td>
    <td><select name="edu">
<option value="-Pilih-"">
<option value="UBSI">UBSI</option>
<option value="BUKAN UBSI">BUKAN UBSI</option>

</select>
<tr><td><input type="submit" value="Submit">   <input type="reset" value="Cancel"></td></tr>
</body>
</html>