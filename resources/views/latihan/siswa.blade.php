<!DOCTYPE html>
<html>
<head>
<title>Data</title>
</head>
<body>
<center>

<table border="10">
<tr class="bg-info">
<th>ID</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
</tr>

<?php 
$no = 1;
?>

</tr>
<th>{{$no++}}</th>
<th>{{$siswa->nama}}</th>
<th>{{$siswa->alamat}}</th>
<th>{{$siswa->jk}}</th>
</tr>


</table>
</center>
</body>
</html>