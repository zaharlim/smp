<?php
include("conn/file.php");

$no_kp = $_POST["no_kp"];
$nama = $_POST["nama"];
$tarikh_lahir = $_POST["tarikh_lahir"];
$tempat_lahir = $_POST["tempat_lahir"];
$umur = $_POST["umur"];
$jantina = $_POST["jantina"];
$agama = $_POST["agama5"];
$status = $_POST["status"];
$bangsa = $_POST["bangsa4"];
$warga = $_POST["warga"];
$oku = $_POST["oku"];
$oku_info = $_POST["oku_info"];
//$kursus = $_POST["kursus"];
//////kursus/////
$vto = $_POST["vto"];
$dlpv = $_POST["dlpv"];
$skm = $_POST["skm"];
$kursus = $vto.$dlpv.$skm;
///////////////
$pusat = $_POST["pusat"];
$kampus = $_POST["kampus"];
$tahun_spm = $_POST["tahun_spm"];
$bm = $_POST["bm"];
$sejarah = $_POST["sejarah"];
$kelayakan = $_POST["kelayakan"];
$info_kelayakan = $_POST["info_kelayakan"];
//$tahap = $_POST["tahap"];
//$noss = $_POST["noss"];
$institut = $_POST["institut"];
$tempoh_pengajian = $_POST["tempoh_pengajian"];
$alamat_tetap = $_POST["alamat_tetap"];
$alamat_surat = $_POST["alamat_surat"];
$tel_rumah = $_POST["tel_rumah"];
$tel_pejabat = $_POST["tel_pejabat"];
$tel_bimbit = $_POST["tel_bimbit"];
$emel = $_POST["emel"];




mysql_select_db($database_file, $file);

$insertSQL = sprintf("INSERT INTO temuduga (no_kp, nama, tarikh_lahir, tempat_lahir, umur, jantina, agama, status, bangsa, oku, oku_info, kursus,  pusat_temuduga, kampus, tahun_spm, spm_bm, spm_sejarah, kelayakan_tinggi, sijil, tempat_pengajian, tempoh_pengajian, alamat_tetap, alamat_surat, tel_rumah, tel_pejabat, tel_bimbit, email) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($no_kp, "text"),
                       GetSQLValueString($nama, "text"),
                       GetSQLValueString($tarikh_lahir, "date"),
					   GetSQLValueString($tempat_lahir, "date"),
                       GetSQLValueString($umur, "int"),
					   GetSQLValueString($jantina, "text"),
					   GetSQLValueString($agama, "text"),
					   GetSQLValueString($status, "text"),
					   GetSQLValueString($bangsa, "text"),
					   GetSQLValueString($oku, "int"),
					   GetSQLValueString($oku_info, "text"),
					   GetSQLValueString($kursus, "text"),
					   GetSQLValueString($pusat, "text"),
					   GetSQLValueString($kampus, "text"),
					   GetSQLValueString($tahun_spm, "int"),
					   GetSQLValueString($bm, "text"),
					   GetSQLValueString($sejarah, "text"),
					   GetSQLValueString($kelayakan, "text"),
					   GetSQLValueString($info_kelayakan, "text"), // sijil
					   GetSQLValueString($institut, "text"), // tempat pengajian
					   GetSQLValueString($tempoh_pengajian, "int"),
					   GetSQLValueString($alamat_tetap, "text"),
					   GetSQLValueString($alamat_surat, "text"),
					   GetSQLValueString($tel_rumah, "text"),
					   GetSQLValueString($tel_pejabat, "text"),
					   GetSQLValueString($tel_bimbit, "text"),
					   GetSQLValueString($emel, "text"));

//echo $insertSQL;

$result = mysql_query($insertSQL, $file) or die(mysql_error());
if($result)
	echo "OK";

?>
