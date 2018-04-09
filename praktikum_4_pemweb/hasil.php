<!DOCTYPE html>
<html>
<head>
	<title>HASIL KONVERSI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
	
	// $makulA = $makulB = $makulC = $makulD = $makulE = $sksA = $sksB = $sksC = $sksD = $sksE = $aNilaiA = $aNilaiB = $aNilaiC = $aNilaiD = $aNilaiE = "";

	// $makulAe = $makulBe = $makulCe = $makulDe = $makulEe = $sksAe = $sksBe = $sksCe = $sksDe = $sksEe = $aNilaiAe = $aNilaiBe = $aNilaiCe = $aNilaiDe = $aNilaiEe = "";

	// if($_SERVER["REQUEST_METHOD"] == "POST"){
	// 	if(empty($_POST['makulA'])){
	// 		$makulA = "Nama mata kuliah harus diisi";
	// 	} else{
	// 		$makulA = $_POST['makulA'];
	// 		echo $makulA;
	// 	}
	// }

	@$makulA = $_POST['makulA'];
	@$makulB = $_POST['makulB'];
	@$makulC = $_POST['makulC'];
	@$makulD = $_POST['makulD'];
	@$makulE = $_POST['makulE'];
	@$sksA = $_POST['sksA'];
	@$sksB = $_POST['sksB'];
	@$sksC = $_POST['sksC'];
	@$sksD = $_POST['sksD'];
	@$sksE = $_POST['sksE'];
	@$aNilaiA = $_POST['aNilaiA'];
	@$aNilaiB = $_POST['aNilaiB'];
	@$aNilaiC = $_POST['aNilaiC'];
	@$aNilaiD = $_POST['aNilaiD'];
	@$aNilaiE = $_POST['aNilaiE'];

	$jumsks = $sksA + $sksB + $sksC + $sksD + $sksE;

	function ubahNilai($a){
		if ($a <= 4 && $a > 3.1){
			$bNilaiA = "A";
		} elseif ($a <= 3.1 && $a > 2.7) {
			$bNilaiA = "B";
		} elseif ($a <= 2.7 && $a > 2) {
			$bNilaiA = "C";
		} elseif ($a <= 2 && $a > 1) {
			$bNilaiA = "D";
		} else {
			$bNilaiA = "E";
		}
		return $bNilaiA;
	}

	function hitungIPK(){
		$jumnil = $GLOBALS['aNilaiA']*$GLOBALS['sksA'] + $GLOBALS['aNilaiB']*$GLOBALS['sksB'] + $GLOBALS['aNilaiC']*$GLOBALS['sksC'] + $GLOBALS['aNilaiD']*$GLOBALS['sksD'] + $GLOBALS['aNilaiE']*$GLOBALS['sksE'];
		$ipk = $jumnil / $GLOBALS['jumsks'];
		return $ipk;
	}
?>

<div class="menu">
	<ul>
		<li><img width="120" src="unch.png"></li>
		<li><a href="#">HOME</a></li>
		<li><a href="#">AKADEMIK</a></li>
		<li><a href="#">TENAGA KERJA</a></li>
		<li><a href="#">HALAMAN MAHASISWA</a></li>
	</ul>
</div>
<body>
<div class="content">
	<div class="header">
		<img src="header.jpg" style="margin: 10px 10px;">
	</div>
	<div class="form">
	<form name="inputForm">
		<fieldset>
			<legend align="center"><h2>HASIL KONVERSI NILAI MATA KULIAH</h2></legend>
			<table border="1" align="center" bgcolor="#ced7e5">
				<th width="400px">NAMA MATA KULIAH</th>
				<th width="150px">JUMLAH SKS</th>
				<th width="150px">NILAI DALAM HURUF</th>
				<tr>
					<td align="center"><?php echo $GLOBALS['makulA']; ?></td>
					<td align="center"><?php echo $GLOBALS['sksA'] ?></td>
					<td align="center"><?php echo ubahNilai($GLOBALS['aNilaiA']); ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo $GLOBALS['makulB']; ?></td>
					<td align="center"><?php echo $GLOBALS['sksB'] ?></td>
					<td align="center"><?php echo ubahNilai($GLOBALS['aNilaiB']); ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo $GLOBALS['makulC']; ?></td>
					<td align="center"><?php echo $GLOBALS['sksC'] ?></td>
					<td align="center"><?php echo ubahNilai($GLOBALS['aNilaiC']); ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo $GLOBALS['makulD']; ?></td>
					<td align="center"><?php echo $GLOBALS['sksD'] ?></td>
					<td align="center"><?php echo ubahNilai($GLOBALS['aNilaiD']); ?></td>
				</tr>
				<tr>
					<td align="center"><?php echo $GLOBALS['makulE']; ?></td>
					<td align="center"><?php echo $GLOBALS['sksE'] ?></td>
					<td align="center"><?php echo ubahNilai($GLOBALS['aNilaiE']); ?></td>
				</tr>
			</table>
			<div style="text-align: center; padding-top: 10px">
				Jumlah SKS : <?php echo $GLOBALS['jumsks']; ?> <br>
				Indeks Prestasi Kumulatif : <?php echo hitungIPK(); ?>
			</div>
		</fieldset>
	</form>
</div>
</div>
</body>
</html>