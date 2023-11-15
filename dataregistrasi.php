<html>
<head>
            <title>TUGAS 06</title>
</head>
<body >
<tr>
    <h1>Data Registrasi<h1></td>
</tr>
<table width="500" border="2">
<?php
error_reporting(0);
$nama=$_POST['nama'];
$NIS=$_POST['NIS'];
$name=$_POST['name'];
$addr=$_POST['addr'];
$Alamat=$_POST['Alamat'];
$pob=$_POST['pob'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$edu=$_POST['edu'];
?>
    <td>Nama</td><td><?php echo $nama; ?></td>
</tr>
    <td>NIS</td><td><?php echo $NIS; ?></td>
</tr>
    <td>Agama</td><td><?php echo $name; ?></td>
</tr>
    <td>Alamat</td><td><?php echo $Alamat; ?></td>
</tr>
    <td>Tempat Lahir</td><td><?php echo $addr; ?></td>
</tr>
    <td>Tanggal Lahir</td><td><?php echo $dob; ?></td>
</tr>
    <td>Jenis Kelamin</td><td><?php echo $gender; ?></td></tr>
    <td>jenis Mahasiswa</td><td><?php echo $edu; ?></td>
    
</table>
</h1>
<a href="tugas form.php">Back to Home</a>
</body>
</html> 