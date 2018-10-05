<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nimm"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="namaa"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="emaill" placeholder="example@gmail.com"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="datee"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="Laki-Laki">laki-laki <br>
				<input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td><select name="op1">
				<option>---PILIH---</option>
				<option value="Manajemen informatika">Manajemen informatika</option>
				<option value="MBTI">MBTI</option>
				<option value="Teknik komputer">Teknik komputer</option>
				<option value="Teknik informatika">Teknik informatika</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select name="op2">
				<option>---PILIH---</option>
				<option value="FIT">FIT</option>
				<option value="FKB">FKB</option>
				<option value="FTE">FTE</option>
				<option value="FEB">FEB</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="send" value="submit"></td>
		</tr>
	</table>
</form>

<?php 
include 'konek.php';

if (isset($_POST['send'])) {
	
	if (strlen($_POST['nimm'])==10 && $_POST['nimm']!="" && is_numeric($_POST['nimm'])) {
	$id = $_POST['nimm'];	
	}else{
		echo "NIM kurang"."<br>";
	}

	if (strlen($_POST['namaa'])>20 || $_POST['namaa']=="") {
		echo "Nama anda tidak valid"."<br>";
	}else{
		$nam = $_POST['namaa'];
	}

	if (!strpos($_POST['emaill'], "@")||!strpos($_POST['emaill'], ".com")) {
		echo "Email anda tidak sesuai"."<br>";
	}else{
		$ema = $_POST['emaill'];
	}

	$tgl = $_POST['datee'];
	$drp1 = $_POST['op1'];
	$drp2 = $_POST['op2'];
	if (isset($_POST['jk'])) {
		$rad = $_POST['jk'];	
	}
	
	

	if (isset($id) && isset($nam) && isset($ema)&& isset($tgl)&& isset($drp1)&& isset($drp2)&& isset($rad)) {
		session_start();
		$_SESSION['idd'] = $id;		
		$que = mysqli_query($conn,"INSERT INTO t_jurnal1(NIM, Nama, email, tgl_lahir, jk, jurusan, fakultas) VALUES ('$id','$nam','$ema','$tgl','$rad','$drp1','$drp2')");
		$quer = mysqli_query($conn,"SELECT * FROM t_jurnal1 ");
		$arr=mysqli_fetch_array($quer);
	if (isset($que)) {
		echo "DATA TERSIMPAN";
		header("Location:view.php");
		}else{
			echo "DATA TIDAK TERSIMPAN";
		}
	}
	
}



	
 

 ?>