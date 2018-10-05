<?php 

session_start();
include 'konek.php';
$nim = $_SESSION['idd'];
$que = mysqli_query($conn,"SELECT * FROM t_jurnal1 WHERE  NIM = '$nim'");
if ($arr=mysqli_fetch_array($que)) {
	$name=$arr['Nama'];
	$nm=$arr['NIM'];	
	$emm=$arr['email'];	
	$tgl=$arr['tgl_lahir'];	
	$jenisk=$arr['jk'];	
	$jrs=$arr['jurusan'];	
	$fkl=$arr['fakultas'];		

}else{echo "GAGAL";}
?>
<form method="post">
<table>
	<tr>
		<td>Nama :</td>
		<td><?php echo $name."<br>"; ?></td>
	</tr>
	<tr>
		<td>NIM :</td>
		<td><?php echo $nm."<br>"; ?></td>
	</tr>
	<tr>
		<td>Tanggal lahir :</td>
		<td><?php echo $tgl."<br>"; ?></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><?php echo $emm."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jenis kelamin :</td>
		<td><?php echo $jenisk."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jurusan :</td>
		<td><?php echo $jrs."<br>"; ?></td>
	</tr>
	<tr>
		<td>fakultas :</td>
		<td><?php echo $fkl."<br>"; ?></td>
	</tr>

	<tr>
		<td><input type="submit" name="keluar" value="Input baru"></td>
	</tr>
</table>
	
</form>
<?php 
if (isset($_POST['keluar'])) {
	session_destroy();
	header("Location:index.php");
}
 ?>