<?php 
//include('masukPermohonan.php');
include("filemaker.php");


$fm = new filemaker("Temuduga", "10.41.51.11", "zaharlim", "jakijipang");

$layout = $fm->getLayout('Maklumat Calon');
$pusattemuduga = $layout->getValueList('Pusat Temuduga');
//$kursusdipohon = $layout->getValueList('Kursus');
$pusatpengajian = $layout->getValueList("Pusat Pengajian");
$sesi =$layout->getValueList("SESI KEMASUKAN");
//$status =$layout->getValueList("STATUS TEMUDUGA");
//$kodkursus = $layout->getValueList('KOD KURSUS');

//include("conn/file.php");
/*if (isset($_POST['action']) and $_POST['action'] == 'hantar') { 
/*$no_kp = $_POST["no_kp"];
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
$emel = $_POST["emel"];*/

if (isset($_POST['action']) and $_POST['action'] == 'hantar') { 
$request=$fm->newAddCommand('Maklumat Calon');
$request->setField('NOKP', $_POST['no_kp']);
//$request->setField('NOKP_LAIN', $_POST['nokp_lain']);
$request->setField('KURSUS_DIPOHON', $_POST['kursus']);
$request->setField('NAMA', $_POST['nama']); 
$request->setField('TARIKH_LAHIR', $_POST['tlahir']);
$request->setField('TEMPAT_LAHIR', $_POST['tmptlahir']);
$request->setField('JANTINA', $_POST['jantina']);
$request->setField('AGAMA', $_POST['agama']);
$request->setField('STATUS', $_POST['status']);
$request->setField('BANGSA', $_POST['bangsa']);
$request->setField('WARGANEGARA', $_POST['warga']);

$request->setField('ALAMAT_SURAT_MENYURAT', $_POST['alamat_surat']);
$request->setField('NO_TEL_PELAJAR', $_POST['tel_bimbit']);
$request->setField('EMAIL', $_POST['emel']);
//$request->setField('KECACATAN', $oku);
$request->setField('BM', $_POST['bm']);
$request->setField('SEJARAH', $_POST['sejarah']);
$request->setField('TAHUNSPM', $_POST['tahun_spm']);
$request->setField('KELAYAKAN', $_POST['tahap']);
$request->setField('KOD_KURSUS', $_POST['kod']);
$request->setField('PUSAT_TEMUDUGA', $_POST['pusat']);
$request->setField('PUSAT_PENGAJIAN', $_POST['kampus']);
$request->setField('TEMPAT_PENGAJIAN', $_POST['institut']);
$request->setField('NAMA_NOSS', $_POST['noss']);
$request->setField('MAJIKAN', $_POST['majikan']);
$request->setField('PENGALAMAN', $_POST['pengalaman']);
$request->setField('KATEGORI_CALON', 'CIAST');


/*$request->setField('SESI_KEMASUKAN', $_POST['sesi']);
$request->setField('TEMPAT_PENGAJIAN', $_POST['tempat_pengajian']);
$request->setField('KELAYAKAN', $_POST['tahap']);
$request->setField('BIDANG_KEMAHIRAN', $_POST['bidang']);
$request->setField('TAHUNSPM', $_POST['spm']); 

$request->setField('BM', $_POST['bm']);
$request->setField('SEJARAH', $_POST['sejarah']);*/

$request->execute();
print_r($_POST);
}
/*mysql_select_db($database_file, $file);

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

//$result = mysql_query($insertSQL, $file) or die(mysql_error());
//if($result)
//  echo "OK";*/




?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Permohonan VTO</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body style="background:#ffffe5">
<div class="container-fluid " id="container" >
	<form  action="" method="post">
		<fieldset >
			<legend><label class="form label">Maklumat Diri</label></legend>
            
            <div class="form-group">
                <label for="no_kp">1. *NO. KAD PENGENALAN (12 aksara)</label>
                <input type="input" class="form-control must" id="no_kp" name="no_kp" placeholder="No. Kad Pengenalan" maxlength="12">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-info" id="periksa" >Semak No. Kad Pengenalan</button>
            </div>
            
			<!-- Modal -->
        	<div class="modal fade" id="myModal" role="dialog">
            	<div class="modal-dialog">
	                <!-- Modal content-->
                  	<div class="modal-content">
                    	<div class="modal-header">
                      		<button type="button" class="close" data-dismiss="modal">&times;</button>
                      		<h4 class="modal-title">Status Permohonan</h4>
                    	</div>
                    	<div class="modal-body">
                      		<p>Permohonan anda telah wujud dalam sistem. Adakah anda ingin memohon semula?</p>
                    	</div>
                    	<div class="modal-footer">
                      	<button type="button" class="btn btn-primary" id="reapply">Mohon semula</button>
                        <button type="button" class="btn btn-default" id="batal" data-dismiss="modal">Batal permohonan dan tutup</button>
                        <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Tutup</button>
                        
                    	</div>
                	</div>
                  
            	</div>
			</div>
            
            <div class="form-group">
                <label for="nama">2. *NAMA(Seperti didalam kad pengenalan)</label>
                <input type="input" class="form-control must" id="nama" name="nama" placeholder="Nama">
            </div>
            
            <div class="form-group">
              <label for="tarikh_lahir">3. *TARIKH LAHIR (dd-mm-yyyy)</label>
              <input type="input" class="form-control must" id="tarikh_lahir" name="tlahir" placeholder="Tarikh Lahir" readonly>
            </div>
            
			<div class="form-group">
				<label for="tempat_lahir">4. *TEMPAT LAHIR</label>
              	<select name="tmptlahir" id="tempat_lahir" class="form-control must">
                      <option value="">--Sila Pilih--</option>
                      <option value="JOHOR">Johor</option>
                      <option value="KEDAH">Kedah</option>
                      <option value="KELANTAN">Kelantan</option>
                      <option value="MELAKA">Melaka</option>
                      <option value="NEGERI SEMBILAN">Negeri Sembilan</option>
                      <option value="PAHANG">Pahang</option>
                      <option value="PERLIS">Perlis</option>
                      <option value="PERAK">Perak</option>
                      <option value="PULAU PINANG">Pulau Pinang</option>
                      <option value="SABAH">Sabah</option>
                      <option value="SARAWAK">Sarawak</option>
                      <option value="SELANGOR">Selangor</option>
                      <option value="TERENGGANU">Terengganu</option>
                      <option value="W.PERSEKUTUAN KUALA LUMPUR">W.Persekutuan Kuala Lumpur</option>
                      <option value="W.PERSEKUTUAN LABUAN">W.Persekutuan Labuan</option>
                      <option value="W.PERSEKUTUAN PUTRAJAYA">W.Persekutuan Putrajaya</option>
                      <option value="LUAR NEGERI">Luar Negeri</option>
            	</select>
            </div>
            
            <!--<div class="form-group">
              	<label for="umur">5. *Umur</label>
              	<select name="umur" id="umur" class="form-control must">
                      <option value="">--Sila Pilih--</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
         		</select>
           </div>-->
           <div class="form-group">
           		<label for="jantina">5. *JANTINA</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="jantina" id="jantina1" value="L">
                                Lelaki
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="jantina" id="jantina2" value="P">
                                Perempuan
                        </label>
               		</div>
           </div>
           
           <div class="form-group">
           		<label for="agama">6. *AGAMA</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="agama" id="agama0" value="Islam">
                                Islam
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="agama" id="agama1" value="Buddha">
                                Buddha
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="agama" id="agama2" value="Hindu">
                                Hindu
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="agama" id="agama3" value="Kristian">
                                Kristian
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="agama" id="agama4" value="Lain">
                                Lain-lain / Sila nyatakan
                                <input type="text" class="form-control" id="agama5" >
                        </label>
               		</div>
           </div>
           
            <div class="form-group">
           		<label for="status">8. *STATUS</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="status" id="status0" value="BUJANG">
                                Bujang
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="status" id="status1" value="BERKAHWIN">
                                Kahwin
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="status" id="status2" value="DUDA">
                                Duda
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="status" id="status3" value="JANDA">
                                Janda
                        </label>

               		</div>
           </div>
           
           <div class="form-group">
           		<label for="Bangsa">9. *BANGSA</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="bangsa" id="bangsa0" value="Melayu">
                                Melayu
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="bangsa" id="bangsa1" value="Cina">
                                Cina
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="bangsa" id="bangsa2" value="India">
                                India
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="bangsa" id="bangsa3" value="Lain">
                                Lain-lain / Sila nyatakan
                                <input type="text" class="form-control" id="bangsa4" >
                        </label>
               		</div>
           </div>
           
           <div class="form-group">
           		<label for="warga">10. *WARGANEGARA</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="warga" id="warga0" value="WARGANEGARA">
                                Warganegara
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="warga" id="warga1" value="BUKAN WARGANEGAARA">
                                Bukan Warganegara
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="warga" id="warga2" value="PENDUDUK TETAP">
                                Penduduk Tetap
                        </label>

               		</div>
           </div>
           
           <div class="form-group">
           		<label for="oku">11. *KECACATAN: Adakah anda mempunyai sebarang kecacatan/OKU:</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="oku" id="oku0" value="YA">
                                Ya
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="oku" id="oku1" value="TIDAK">
                                Tidak
                        </label>
                        <br>
                        <label>
                                Jika Ya Sila Nyatakan:
                                <input type="text" class="form-control" id="oku2" >
                        </label>

               		</div>
           </div>
            
        </fieldset>
        <div class="divider"></div>
        <fieldset>
        	<legend><label class="form label">Maklumat Kursus</label></legend>
            <div class="form-group">
                <label for="sesi"> *SESI KEMASUKAN</label>
                <select name="sesi" id="sesi" class="form-control must">
                    <option value="">--Sila Pilih--</option>
                    <?php foreach($sesi as $value){ ?>
                  <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                  <?php } ?>
                    
               </select>
           </div>
             <div class="form-group">
           		<label for="warga">12. *PILIHAN KURSUS (*Rujuk pada iklan yang ditawarkan di akhbar / online)</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="kursus" id="kursus0" value="VTO">
                                VTO
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="kursus" id="kursus1" value="DLPV">
                                DLPV
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="kursus" id="kursus2" value="SKM">
                                SKM3+VTO
                        </label>
                        <br><br>
                        <select name="kod" id="vto" class="form-control select-course"> 
                              <option value="">--Sila Pilih--</option>
                              <option value="I-031-3-SIJIL PENGAJAR VOKASIONAL(I-031-3 : PLV)" >I-031-3:SIJIL PENGAJAR VOKASIONAL</option>
                     	</select>
                        <select name="kod" id="dlpv" class="form-control select-course">
                        	<option value="">--Sila Pilih--</option>
                            <option value="IT-020-5:2013 (TEKNOLOGI KOMPUTER SISTEM)"  >IT-020-5:2013 (TEKNOLOGI KOMPUTER SISTEM)</option>
                            <option value="IT-030-5:2013 (TEKNOLOGI KOMPUTER RANGKAIAN)"  >IT-030-5:2013 (TEKNOLOGI KOMPUTER RANGKAIAN)</option>
                            <option value="MC-030-5:2014 (TEKNOLOGI PENGELUARAN)" >MC-030-5:2014 (TEKNOLOGI PENGELUARAN)</option>
                            <option value="MC-024-5:2012(TEKNOLOGI KIMPALAN)" >MC-024-5:2012 (TEKNOLOGI KIMPALAN)</option>
                            <option value="MC-091-5:2013(TEKNOLOGI MEKATRONIK)" >MC-091-5:2013 (TEKNOLOGI MEKATRONIK)</option>
                            <option value="TP-300-5(TEKNOLOGI AUTOMOTIF)"  >TP-300-5 (TEKNOLOGI AUTOMOTIF)</option>
                            <option value="EE-021-5:2012 (TEKNOLOGI ELEKTRONIK)"  >EE-021-5:2012 (TEKNOLOGI ELEKTRONIK)</option>
                     	</select>
                        <select name="kod" id="skm" class="form-control select-course">
                        	<option value="">--Sila Pilih--</option>
                            <option value="MC-026-3:2012(TEKNOLOGI KIMPALAN)"   >MC-026-3:2012 (TEKNOLOGI KIMPALAN)</option>
                            <option value="H-176-3 (TEKNOLOGI MEKATRONIK)" >H-176-3 (TEKNOLOGI MEKATRONIK)</option>
                            <option value="TP-300-3:2013 (TEKNOLOGI AUTOMOTIF)" >TP-300-3:2013 (TEKNOLOGI AUTOMOTIF)</option>
                            <option value="EE-021-3:2012 (TEKNOLOGI ELEKTRONIK)" >EE-021-3:2012 (TEKNOLOGI ELEKTRONIK)</option>
                     	</select>

               		</div>
           </div>
           
           <div class="form-group">
              	<label for="pusat">13. *PUSAT TEMUDUGA</label>
              	<select name="pusat" id="pusat" class="form-control must">
                    <option value="">--Sila Pilih--</option>
                    <?php foreach($pusattemuduga as $value){ ?>
                  <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                  <?php } ?>
                    <!--<option value="CIAST" >CIAST</option>
                    <option value="ADTEC BINTULU" >ADTEC BINTULU</option>
                    <option value="ADTEC TAIPING" >ADTEC TAIPING</option>
                    <option value="ILP SANDAKAN" >ILP SANDAKAN</option>
                    <option value="ILP SELANDAR" >ILP SELANDAR</option>
                    <option value="JPK W.SELATAN" >JPK W.SELATAN</option>
                    <option value="JPK W.UTARA" >JPK W.UTARA</option>
                    <option value="JPK W.TIMUR" >JPK W.TIMUR</option>
                    <option value="JPK W.SABAH" >JPK W.SABAH</option>
                    <option value="JPK W.SARAWAK" >JPK W.SARAWAK</option>-->
         		   </select>
           </div>
           
           <div class="form-group">
              	<label for="kampus">14. *PUSAT PENGAJIAN</label>
              	<select name="kampus" id="kampus" class="form-control must">
                    <option value="">--Sila Pilih--</option>
                    <?php foreach($pusatpengajian as $value){ ?>
                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                    <?php } ?>
                    <!--<option value="CIAST"  >CIAST</option>
                    <option value="ADTEC BINTULU"  >ADTEC BINTULU</option>
                    <option value="ADTEC TAIPING"  >ADTEC TAIPING</option>
                    <option value="ILP SANDAKAN"  >ILP SANDAKAN</option>
                    <option value="ILP MARANG"  >ILP MARANG</option>
                    <option value="ILP SELANDAR"  >ILP SELANDAR</option>
                    <option value="AITC KUCHING"  >AITC KUCHING</option>
                    <option value="KOLEJ YAYASAN SABAH"  >KOLEJ YAYASAN SABAH</option>-->
         		</select>
           </div>
        </fieldset>
        <div class="divider"></div>
        <fieldset>
        	<legend><label class="form label">Maklumat Akademik</label></legend>
            <div class="form-group">
                <label for="tahun_spm">15-a. *Tahun Peperiksaan SPM</label>
                <input type="input" class="form-control must" id="tahun_spm" name="tahun_spm" maxlength="4" placeholder="0000">
            </div>
            <div class="form-group">
              	<label for="bm">15-b. *Keputusan Bahasa Malaysia</label>
              	<select name="bm" id="bm" class="form-control must">
                    <option value="">--Sila Pilih--</option>
                    <option value="A" >A</option>
                    <option value="B" >B</option>
                    <option value="C" >C</option>
                    <option value="D" >D</option>
                    <option value="E" >E</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" >9</option>
         		</select>
           	</div>
             <div class="form-group">
              	<label for="sejarah">15-c. *Sejarah</label>
              	<select name="sejarah" id="sejarah" class="form-control must">
                    <option value="">--Sila Pilih--</option>
                    <option value="A" >A</option>
                    <option value="B" >B</option>
                    <option value="C" >C</option>
                    <option value="D" >D</option>
                    <option value="E" >E</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" >9</option>
         		</select>
           	</div>
            <div class="form-group">
           		<label for="kelayakan">16. *KELAYAKAN TERTINGGI</label>
               		<div class="radio">
                        <label>
                            <input type="radio" name="kelayakan" id="kelayakan0" value="0">
                                Ijazah/Diploma/Sijil
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="kelayakan" id="kelayakan1" value="1">
                                SKM
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="kelayakan" id="kelayakan2" value="2">
                                Suruhanjaya Tenaga
                        </label>
                        <br>&nbsp;
                		<input type="text" class="form-control" id="akademik" placeholder="Ijazah/Diploma/Sijil">
                        <input type="text" class="form-control" id="kod_tenaga" placeholder="Kod Suruhanjaya Tenaga">
                        <select name="tahap" id="tahap" class="form-control">
                            <option value="">--Sila Pilih Tahap NOSS--</option>
                            <option value="SKM2" >Dua (2)</option>
                            <option value="SKM3" >Tiga (3)</option>
                            <option value="SKM4" >Empat (4)</option>
                            <option value="SKM5" >Lima (5)</option>
         				</select>
                        <br>
                        <select name="noss" id="noss" class="form-control">
                            <option value="">--Sila Pilih Kod / Nama NOSS--</option>
                            <option value="A-010-1:PEMBUAT PERABOT" > A-010-1:PEMBUAT PERABOT</option>
                            <option value="A-010-2:PEMBUAT PERABOT KANAN" > A-010-2:PEMBUAT PERABOT KANAN</option>
                            <option value="A-010-3:PENYELIA PEMBUAT PERABOT" > A-010-3:PENYELIA PEMBUAT PERABOT</option>
                            <option value="A-020-1:JURUBINA BANGUNAN BERASASKAN KAYU" > A-020-1:JURUBINA BANGUNAN BERASASKAN KAYU</option>
                            <option value="A-020-2:JURUBINA BANGUNAN BERASASKAN KAYU" > A-020-2:JURUBINA BANGUNAN BERASASKAN KAYU</option>
                            <option value="A-020-3:JURUTEKNIK BINAAN BANGUNAN BERASASKAN KAYU" > A-020-3:JURUTEKNIK BINAAN BANGUNAN BERASASKAN KAYU</option>
                            <option value="A-021-3:JURUMESIN KAYU" > A-021-3:JURUMESIN KAYU</option>
                            <option value="A-030-1:PEMBUAT ALAS" > A-030-1:PEMBUAT ALAS</option>
                            <option value="A-030-2:PEMBUAT ALAS KANAN" > A-030-2:PEMBUAT ALAS KANAN</option>
                            <option value="A-030-3:PENYELIA PEMBUATAN ALAS" > A-030-3:PENYELIA PEMBUATAN ALAS</option>
                            <option value="AA-010-2:KERANI AKAUN" > AA-010-2:KERANI AKAUN</option>
                            <option value="AA-010-3:PENYELIA AKAUN" > AA-010-3:PENYELIA AKAUN</option>
                            <option value="AB-010-1:PEMBANTU PENGGUBAH BUNGA" > AB-010-1:PEMBANTU PENGGUBAH BUNGA</option>
                            <option value="AB-010-2:PENGGUBAH BUNGA" > AB-010-2:PENGGUBAH BUNGA</option>
                            <option value="AB-010-3:PENYELIA PENGGUBAH BUNGA" > AB-010-3:PENYELIA PENGGUBAH BUNGA</option>
                            <option value="AC-010-1:OPERATOR KOMPOSIT" > AC-010-1:OPERATOR KOMPOSIT</option>
                            <option value="AC-010-2:OPERATOR KOMPOSIT SENIOR" > AC-010-2:OPERATOR KOMPOSIT SENIOR</option>
                            <option value="AC-010-3:JURUTEKNIK KOMPOSIT" > AC-010-3:JURUTEKNIK KOMPOSIT</option>
                            <option value="ACD1:ACMV DUCTING" > ACD1:ACMV DUCTING</option>
                            <option value="ACD2:ACMV DUCTING" > ACD2:ACMV DUCTING</option>
                            <option value="ACE1:ACMV ELECTRICAL" > ACE1:ACMV ELECTRICAL</option>
                            <option value="ACE2:ACMV ELECTRICAL" > ACE2:ACMV ELECTRICAL</option>
                            <option value="ACP1:ACMV PIPING" > ACP1:ACMV PIPING</option>
                            <option value="ACP2:ACMV PIPING INSTALLER" > ACP2:ACMV PIPING INSTALLER</option>
                            <option value="ACP3:ACMV SUPERVISOR (HEAVY COMMERCIAL" > ACP3:ACMV SUPERVISOR (HEAVY COMMERCIAL</option>
                            <option value="ACT1:ACMV ASSISTANT TECHNICIAN" > ACT1:ACMV ASSISTANT TECHNICIAN</option>
                            <option value="ACT2:ACMV TECHNICIAN" > ACT2:ACMV TECHNICIAN</option>
                            <option value="ACT3:ACMV MAINTENANCE" > ACT3:ACMV MAINTENANCE</option>
                            <option value="ACT4:ACMV MAINTENACE EXECUTIVE" > ACT4:ACMV MAINTENACE EXECUTIVE</option>
                            <option value="ACT5:ACMV MAINTENANCE MANAGER" > ACT5:ACMV MAINTENANCE MANAGER</option>
                            <option value="ACV1:ACMV ASSISTANT INSTALLER" > ACV1:ACMV ASSISTANT INSTALLER</option>
                            <option value="ACV2:ACMV INSTALLER" > ACV2:ACMV INSTALLER</option>
                            <option value="ACV3:ACMV SUPERVISOR" > ACV3:ACMV SUPERVISOR</option>
                            <option value="ACV4:ACMV PROJECT EXECUTIVE" > ACV4:ACMV PROJECT EXECUTIVE</option>
                            <option value="ACV5:ACMV PROJECT MANAGER" > ACV5:ACMV PROJECT MANAGER</option>
                            <option value="AF-010-1:PEKERJA AM TANAMAN" > AF-010-1:PEKERJA AM TANAMAN</option>
                            <option value="AF-010-2:JURUTEKNIK TANAMAN" > AF-010-2:JURUTEKNIK TANAMAN</option>
                            <option value="AF-010-3:PENYELIA TANAMAN" > AF-010-3:PENYELIA TANAMAN</option>
                            <option value="AF-010-4:PENOLONG PEGAWAI TEKNOLOGI (FERTIGASI)" > AF-010-4:PENOLONG PEGAWAI TEKNOLOGI (FERTIGASI)</option>
                            <option value="AF-010-5:PEGAWAI TEKNOLOGI (FERTIGASI)" > AF-010-5:PEGAWAI TEKNOLOGI (FERTIGASI)</option>
                            <option value="AF-020-1:KRU MAHIR TEKNOLOGI PERIKANAN TANGKAPAN" > AF-020-1:KRU MAHIR TEKNOLOGI PERIKANAN TANGKAPAN</option>
                            <option value="AF-020-2:PEMBANTU NAKHODA TEKNOLOGI PERIKANAN TANGKAPAN" > AF-020-2:PEMBANTU NAKHODA TEKNOLOGI PERIKANAN TANGKAPAN</option>
                            <option value="AF-020-3:NAKHODA TEKNOLOGI PERIKANAN TANGKAPAN PESISIR" > AF-020-3:NAKHODA TEKNOLOGI PERIKANAN TANGKAPAN PESISIR</option>
                            <option value="AF-030-2:JURUTEKNIK RENDAH AKUAKULTUR" > AF-030-2:JURUTEKNIK RENDAH AKUAKULTUR</option>
                            <option value="AF-030-3:JURUTEKNIK AKUAKULTUR (MARIN)" > AF-030-3:JURUTEKNIK AKUAKULTUR (MARIN)</option>
                            <option value="AF-040-1:STABLEHAND" > AF-040-1:STABLEHAND</option>
                            <option value="AF-040-2:SENIOR STABLEHAND" > AF-040-2:SENIOR STABLEHAND</option>
                            <option value="AF-040-3:STABLE SUPERVISOR" > AF-040-3:STABLE SUPERVISOR</option>
                            <option value="AF-051-1:PEKERJA AM LADANG PADI" > AF-051-1:PEKERJA AM LADANG PADI</option>
                            <option value="AF-051-2:PEKERJA KANAN LADANG PADI" > AF-051-2:PEKERJA KANAN LADANG PADI</option>
                            <option value="AF-051-3:PENYELIA LADANG PADI" > AF-051-3:PENYELIA LADANG PADI</option>
                            <option value="AF-052-1:PEKERJA AM KILANG PADI" > AF-052-1:PEKERJA AM KILANG PADI</option>
                            <option value="AF-052-2:OPERATOR KILANG PADI" > AF-052-2:OPERATOR KILANG PADI</option>
                            <option value="AF-052-3:PENYELIA KILANG PADI" > AF-052-3:PENYELIA KILANG PADI</option>
                            <option value="AF-070-2:ABBATOIR WORKER" > AF-070-2:ABBATOIR WORKER</option>
                            <option value="AF-070-3:ABBATOIR SUPERVISOR" > AF-070-3:ABBATOIR SUPERVISOR</option>
                            <option value="AF-090-2:PEMBANTU JAMINAN MUTU" > AF-090-2:PEMBANTU JAMINAN MUTU</option>
                            <option value="AF-090-3:PENYELIA JAMINAN MUTU" > AF-090-3:PENYELIA JAMINAN MUTU</option>
                            <option value="AM-010-1:JUNIOR CONTEMPORARY MUSICIAN" > AM-010-1:JUNIOR CONTEMPORARY MUSICIAN</option>
                            <option value="AM-010-2:CONTEMPORARY MUSICIAN" > AM-010-2:CONTEMPORARY MUSICIAN</option>
                            <option value="AM-010-3:SENIOR CONTEMPORARY MUSICIAN" > AM-010-3:SENIOR CONTEMPORARY MUSICIAN</option>
                            <option value="ARB03:PENYELIA SENIBINA & BANGUNAN" > ARB03:PENYELIA SENIBINA & BANGUNAN</option>
                            <option value="ARB04:PENGURUS SENIBINA & BANGUNAN" > ARB04:PENGURUS SENIBINA & BANGUNAN</option>
                            <option value="AT01:AUTOMOTIF MEKATRONIK" > AT01:AUTOMOTIF MEKATRONIK</option>
                            <option value="AT02:PEMASANGAN KENDERAAN" > AT02:PEMASANGAN KENDERAAN</option>
                            <option value="AT03:AUTOMOTIF KENDERAAN GAS ASLI (NGV)" > AT03:AUTOMOTIF KENDERAAN GAS ASLI (NGV)</option>
                            <option value="AT04:PEMERIKSA KENDERAAN" > AT04:PEMERIKSA KENDERAAN</option>
                            <option value="AT05:OPERASI PEMBAIKAN BADAN AUTOMOTIF KEMALANGAN" > AT05:OPERASI PEMBAIKAN BADAN AUTOMOTIF KEMALANGAN</option>
                            <option value="AT06:OPERASI MENGECAT AUTOMOTIF KEMALANGAN" > AT06:OPERASI MENGECAT AUTOMOTIF KEMALANGAN</option>
                            <option value="AT07:OPERASI ALAT GANTI AUTOMOTIF" > AT07:OPERASI ALAT GANTI AUTOMOTIF</option>
                            <option value="AT08:PENGURUSAN BENGKEL PELANGGARAN AUTOMOTIF" > AT08:PENGURUSAN BENGKEL PELANGGARAN AUTOMOTIF</option>
                            <option value="AT09:ESTIMATOR KEROSAKAN AUTOMOTIF" > AT09:ESTIMATOR KEROSAKAN AUTOMOTIF</option>
                            <option value="AT11:JUALAN AUTOMOTIF" > AT11:JUALAN AUTOMOTIF</option>
                            <option value="AT12:OPERASI GEGAS AUTOMOTIF" > AT12:OPERASI GEGAS AUTOMOTIF</option>
                            <option value="AT13:PENGURUSAN BENGKEL GEGAS AUTOMOTIF" > AT13:PENGURUSAN BENGKEL GEGAS AUTOMOTIF</option>
                            <option value="B-010-1:JURUBINA BANGUNAN" > B-010-1:JURUBINA BANGUNAN</option>
                            <option value="B-010-2:JURUBINA BANGUNAN" > B-010-2:JURUBINA BANGUNAN</option>
                            <option value="B-010-3:PENYELIA BINAAN BANGUNAN" > B-010-3:PENYELIA BINAAN BANGUNAN</option>
                            <option value="B-020-1:JURUKERJA PAIP" > B-020-1:JURUKERJA PAIP</option>
                            <option value="B-020-2:JURUKERJA PAIP" > B-020-2:JURUKERJA PAIP</option>
                            <option value="B-020-3:JURUTEKNIK KERJA PAIP" > B-020-3:JURUTEKNIK KERJA PAIP</option>
                            <option value="B-031-1:JURUGEGAS GAS KELAS I" > B-031-1:JURUGEGAS GAS KELAS I</option>
                            <option value="B-031-2:JURUGEGAS GAS KELAS II" > B-031-2:JURUGEGAS GAS KELAS II</option>
                            <option value="B-031-3:JURUGEGAS GAS KELAS III" > B-031-3:JURUGEGAS GAS KELAS III</option>
                            <option value="B-040-1:PELUKIS PELAN KEJURUTERAAN AWAM DAN STRUKTUR" > B-040-1:PELUKIS PELAN KEJURUTERAAN AWAM DAN STRUKTUR</option>
                            <option value="B-040-2:PELUKIS PELAN KEJURUTERAAN AWAM DAN STRUKTUR" > B-040-2:PELUKIS PELAN KEJURUTERAAN AWAM DAN STRUKTUR</option>
                            <option value="B-040-3:PELUKIS PELAN KANAN KEJURUTERAAN AWAM DAN STRUKTUR" > B-040-3:PELUKIS PELAN KANAN KEJURUTERAAN AWAM DAN STRUKTUR</option>
                            <option value="B-050-1:PELUKIS PELAN SENIBINA" > B-050-1:PELUKIS PELAN SENIBINA</option>
                            <option value="B-050-2:PELUKIS PELAN SENIBINA" > B-050-2:PELUKIS PELAN SENIBINA</option>
                            <option value="B-050-3:PELUKIS PELAN KANAN SENIBINA" > B-050-3:PELUKIS PELAN KANAN SENIBINA</option>
                            <option value="B-060-1:JURUPERANCAH(TUBULAR)" > B-060-1:JURUPERANCAH(TUBULAR)</option>
                            <option value="B-060-2:JURUPERANCAH(TUBULAR)" > B-060-2:JURUPERANCAH(TUBULAR)</option>
                            <option value="B-060-3:PENYELIA PERANCAH (TUBULAR)" > B-060-3:PENYELIA PERANCAH (TUBULAR)</option>
                            <option value="B-061-1:JURUPERANCAH (PREFABRICATED)" > B-061-1:JURUPERANCAH (PREFABRICATED)</option>
                            <option value="B-061-2:JURUPERANCAH (PREFABRICATED)" > B-061-2:JURUPERANCAH (PREFABRICATED)</option>
                            <option value="B-061-3:PENYELIA PERANCAH (PREFABRICATED)" > B-061-3:PENYELIA PERANCAH (PREFABRICATED)</option>
                            <option value="B-063-3:PENYELIA KESELAMATAN DAN KESIHATAN TAPAK BINAAN" > B-063-3:PENYELIA KESELAMATAN DAN KESIHATAN TAPAK BINAAN</option>
                            <option value="B-070-4:SUPERINTENDAN PERANCAH" > B-070-4:SUPERINTENDAN PERANCAH</option>
                            <option value="B-070-5:PENGURUS PERANCAH" > B-070-5:PENGURUS PERANCAH</option>
                            <option value="B-080-2:JURU KACA" > B-080-2:JURU KACA</option>
                            <option value="B-080-3:PENYELIA JURU KACA" > B-080-3:PENYELIA JURU KACA</option>
                            <option value="B-081-1:PEMOTONG KACA BERWARNA" > B-081-1:PEMOTONG KACA BERWARNA</option>
                            <option value="B-090-1:FABRIKATOR KERANGKA ALUMINIUM" > B-090-1:FABRIKATOR KERANGKA ALUMINIUM</option>
                            <option value="B-090-2:PEMASANG KERANGKA ALUMINIUM" > B-090-2:PEMASANG KERANGKA ALUMINIUM</option>
                            <option value="B-090-3:PENYELIA KERJA KERANGKA ALUMINIUM" > B-090-3:PENYELIA KERJA KERANGKA ALUMINIUM</option>
                            <option value="B-100-3:PENYELIA AWAM & STRUKTUR" > B-100-3:PENYELIA AWAM & STRUKTUR</option>
                            <option value="B-100-4:PENGURUS BINAAN AWAM DAN STRUKTUR" > B-100-4:PENGURUS BINAAN AWAM DAN STRUKTUR</option>
                            <option value="B-110-1:DRYWALL PARTITION ASSISTANT INSTALLER" > B-110-1:DRYWALL PARTITION ASSISTANT INSTALLER</option>
                            <option value="B-110-2:DRYWALL PARTITION  INSTALLER" > B-110-2:DRYWALL PARTITION  INSTALLER</option>
                            <option value="B-110-3:DRYWALL PARTITION SUPERVISOR" > B-110-3:DRYWALL PARTITION SUPERVISOR</option>
                            <option value="B-111-1:DRYWALL CLEAN ROOM ASSISTANT INSTALLER" > B-111-1:DRYWALL CLEAN ROOM ASSISTANT INSTALLER</option>
                            <option value="B-111-2:DRYWALL CLEAN ROOM INSTALLER" > B-111-2:DRYWALL CLEAN ROOM INSTALLER</option>
                            <option value="B-111-3:DRYWALL CLEAN ROOM ASSISTANT SUPERVISOR" > B-111-3:DRYWALL CLEAN ROOM ASSISTANT SUPERVISOR</option>
                            <option value="B-112-1:DEMOUNTABLE CEILING ASSISTANT INSTALLER" > B-112-1:DEMOUNTABLE CEILING ASSISTANT INSTALLER</option>
                            <option value="B-112-2:DEMOUNTABLE CEILING INSTALLER" > B-112-2:DEMOUNTABLE CEILING INSTALLER</option>
                            <option value="B-113-1:FIXED CEILING ASSISTANT INSTALLER" > B-113-1:FIXED CEILING ASSISTANT INSTALLER</option>
                            <option value="B-113-2:FIXED CEILING  INSTALLER" > B-113-2:FIXED CEILING  INSTALLER</option>
                            <option value="B-114-3:CEILING SUPERVISOR" > B-114-3:CEILING SUPERVISOR</option>
                            <option value="B-115-4:DRYWALL & CEILING PROJECT EXECUTIVE" > B-115-4:DRYWALL & CEILING PROJECT EXECUTIVE</option>
                            <option value="B-115-5:DRYWALL & CEILING PROJECT MANAGER" > B-115-5:DRYWALL & CEILING PROJECT MANAGER</option>
                            <option value="B-120-1:PEREKA DALAMAN RENDAH" > B-120-1:PEREKA DALAMAN RENDAH</option>
                            <option value="B-120-2:PEREKA DALAMAN" > B-120-2:PEREKA DALAMAN</option>
                            <option value="B-120-3:PEREKA DALAMAN KANAN" > B-120-3:PEREKA DALAMAN KANAN</option>
                            <option value="B-130-1:BUILDING DECORATIVE PAINTER L01" > B-130-1:BUILDING DECORATIVE PAINTER L01</option>
                            <option value="B-130-2:BUILDING DECORATIVE PAINTER L02" > B-130-2:BUILDING DECORATIVE PAINTER L02</option>
                            <option value="B-132-4:BUILDING PAINTING PROJECT COORDINATOR" > B-132-4:BUILDING PAINTING PROJECT COORDINATOR</option>
                            <option value="B-132-5:BUILDING PAINTING MANAGER" > B-132-5:BUILDING PAINTING MANAGER</option>
                            <option value="B-140-2:HYDRAULIC EXCAVATOR 0PERATOR" > B-140-2:HYDRAULIC EXCAVATOR 0PERATOR</option>
                            <option value="B-142-2:WHEEL LOADER 0PERATOR" > B-142-2:WHEEL LOADER 0PERATOR</option>
                            <option value="B-143-2:TRACK DOZER OPERATOR" > B-143-2:TRACK DOZER OPERATOR</option>
                            <option value="B-170-1:BUILDING OPERATION & MAINTENANCE ASSISTANT TECHNICIAN" > B-170-1:BUILDING OPERATION & MAINTENANCE ASSISTANT TECHNICIAN</option>
                            <option value="B-170-2:BUILDING OPERATION & MAINTENANCE TECHNICIAN" > B-170-2:BUILDING OPERATION & MAINTENANCE TECHNICIAN</option>
                            <option value="B-170-3:BUILDING OPERATION & MAINTENANCE SUPERVISOR" > B-170-3:BUILDING OPERATION & MAINTENANCE SUPERVISOR</option>
                            <option value="BBR1:BAR BENDER" > BBR1:BAR BENDER</option>
                            <option value="BBR2:BAR BENDER" > BBR2:BAR BENDER</option>
                            <option value="BC-010-1:CARPENTER (FORMWORK)" > BC-010-1:CARPENTER (FORMWORK)</option>
                            <option value="BC-010-2:CARPENTER (FORMWORK)" > BC-010-2:CARPENTER (FORMWORK)</option>
                            <option value="BC-010-3:STRUCTURAL SUPERVISOR" > BC-010-3:STRUCTURAL SUPERVISOR</option>
                            <option value="BC-011-1:CARPENTER (CONCRETE)" > BC-011-1:CARPENTER (CONCRETE)</option>
                            <option value="BC-011-2:CARPENTER (CONCRETE)" > BC-011-2:CARPENTER (CONCRETE)</option>
                            <option value="BC-020-3:MASONRY SUPERVISOR" > BC-020-3:MASONRY SUPERVISOR</option>
                            <option value="BC-030-1:SYSTEM FORMWORK INSTALLER" > BC-030-1:SYSTEM FORMWORK INSTALLER</option>
                            <option value="BC-030-2:SYSTEM FORMWORK FOREMAN" > BC-030-2:SYSTEM FORMWORK FOREMAN</option>
                            <option value="BC-030-3:SYSTEM FORMWORK SUPERVISOR" > BC-030-3:SYSTEM FORMWORK SUPERVISOR</option>
                            <option value="BC-041-1:ACMV ASSISTANT TECHNICIAN" > BC-041-1:ACMV ASSISTANT TECHNICIAN</option>
                            <option value="BC-041-2:ACMV TECHNICIAN" > BC-041-2:ACMV TECHNICIAN</option>
                            <option value="BC-041-3:ACMV MAINTENANCE SUPERVISOR" > BC-041-3:ACMV MAINTENANCE SUPERVISOR</option>
                            <option value="BC-042-1:ACMV ELECTRICAL ASSISTANT INSTALLER" > BC-042-1:ACMV ELECTRICAL ASSISTANT INSTALLER</option>
                            <option value="BC-042-2:ACMV ELECTRICAL INSTALLER" > BC-042-2:ACMV ELECTRICAL INSTALLER</option>
                            <option value="BC-042-3:ACMV ELECTRICAL SUPERVISOR" > BC-042-3:ACMV ELECTRICAL SUPERVISOR</option>
                            <option value="BC-051-1:PLANT PIPE FITTER I" > BC-051-1:PLANT PIPE FITTER I</option>
                            <option value="BC-051-2:PLANT PIPE FITTER II" > BC-051-2:PLANT PIPE FITTER II</option>
                            <option value="BC-051-3:PLANT PIPE FITTER SUPERVISOR" > BC-051-3:PLANT PIPE FITTER SUPERVISOR</option>
                            <option value="BC-052-1:PIPELINE FITTER I" > BC-052-1:PIPELINE FITTER I</option>
                            <option value="BC-052-2:PIPELINE FITTER II" > BC-052-2:PIPELINE FITTER II</option>
                            <option value="BC-052-3:PIPELINE SUPERVISOR" > BC-052-3:PIPELINE SUPERVISOR</option>
                            <option value="BC-360-1:ROOF TRUSS INSTALLER (TIMBER)" > BC-360-1:ROOF TRUSS INSTALLER (TIMBER)</option>
                            <option value="BC-360-2:ROOF TRUSS INSTALLER (TIMBER)" > BC-360-2:ROOF TRUSS INSTALLER (TIMBER)</option>
                            <option value="BC-370-1:ROOF TRUSS INSTALLER (LIGHT GAUGE STEEL)" > BC-370-1:ROOF TRUSS INSTALLER (LIGHT GAUGE STEEL)</option>
                            <option value="BC-370-2:ROOF TRUSS INSTALLER (LIGHT GAUGE STEEL)" > BC-370-2:ROOF TRUSS INSTALLER (LIGHT GAUGE STEEL)</option>
                            <option value="BC-380-3:ROOF TRUSS SUPERVISOR" > BC-380-3:ROOF TRUSS SUPERVISOR</option>
                            <option value="BHL2:BACKHOE LOADER 0PERATOR" > BHL2:BACKHOE LOADER 0PERATOR</option>
                            <option value="BKP2:BACK PUSHER OPERATOR" > BKP2:BACK PUSHER OPERATOR</option>
                            <option value="BLK1:LIGHTWEIGHT BLOCKWALL INSTALLER" > BLK1:LIGHTWEIGHT BLOCKWALL INSTALLER</option>
                            <option value="BLK2:LIGHTWEIGHT BLOCKWALL INSTALLER" > BLK2:LIGHTWEIGHT BLOCKWALL INSTALLER</option>
                            <option value="BLK3:LIGHTWEIGHT BLOCKWALL SUPERVISOR" > BLK3:LIGHTWEIGHT BLOCKWALL SUPERVISOR</option>
                            <option value="BOM1:BUILDING OPERATION & MAINTENANCE ASSISTANT TECHNICIAN" > BOM1:BUILDING OPERATION & MAINTENANCE ASSISTANT TECHNICIAN</option>
                            <option value="BOM2:BUILDING OPERATION & MAINTENANCE TECHNICIAN" > BOM2:BUILDING OPERATION & MAINTENANCE TECHNICIAN</option>
                            <option value="BOM3:BUILDING OPERATION & MAINTENANCE SUPERVISOR" > BOM3:BUILDING OPERATION & MAINTENANCE SUPERVISOR</option>
                            <option value="BRL1:BRICKLAYER" > BRL1:BRICKLAYER</option>
                            <option value="BRL2:BRICKLAYER" > BRL2:BRICKLAYER</option>
                            <option value="BT-010-2:BIOINFORMATICS ASSISTANT PROGRAMMER" > BT-010-2:BIOINFORMATICS ASSISTANT PROGRAMMER</option>
                            <option value="BT-010-3:BIOINFORMATICS PROGRAMMER" > BT-010-3:BIOINFORMATICS PROGRAMMER</option>
                            <option value="BT-020-2:GENERAL BIOTECHNOLOGY LABORATORY TECHNICIAN" > BT-020-2:GENERAL BIOTECHNOLOGY LABORATORY TECHNICIAN</option>
                            <option value="BT-020-3:SENIOR GENERAL BIOTECHNOLOGY LABORATORY TECHNICIAN" > BT-020-3:SENIOR GENERAL BIOTECHNOLOGY LABORATORY TECHNICIAN</option>
                            <option value="BT-021-2:CULTURE LABORATORY TECHNICIAN" > BT-021-2:CULTURE LABORATORY TECHNICIAN</option>
                            <option value="BT-021-3:CULTURE LABORATORY SENIOR  TECHNICIAN" > BT-021-3:CULTURE LABORATORY SENIOR  TECHNICIAN</option>
                            <option value="BT-022-2:ANALYTICAL LABORATORY TECHNICIAN" > BT-022-2:ANALYTICAL LABORATORY TECHNICIAN</option>
                            <option value="BT-022-3:ANALYTICAL LABORATORY SENIOR TECHNICIAN" > BT-022-3:ANALYTICAL LABORATORY SENIOR TECHNICIAN</option>
                            <option value="BT-030-3:BIOTECHNOLOGY INSTRUMENTATION SENIOR TECHNICIAN" > BT-030-3:BIOTECHNOLOGY INSTRUMENTATION SENIOR TECHNICIAN</option>
                            <option value="BT-030-4:BIOTECHNOLOGY LABORATORY INSTRUMENTATION ASSISTANT MANAGER" > BT-030-4:BIOTECHNOLOGY LABORATORY INSTRUMENTATION ASSISTANT MANAGER</option>
                            <option value="BT-030-5:BIOTECHNOLOGY LABORATORY INSTRUMENTATION  MANAGER" > BT-030-5:BIOTECHNOLOGY LABORATORY INSTRUMENTATION  MANAGER</option>
                            <option value="BT-041-1:BIOPRPROCESS MACHINE OPERATOR" > BT-041-1:BIOPRPROCESS MACHINE OPERATOR</option>
                            <option value="BT-041-2:BIOPROCESS PLANT ASSISTANT" > BT-041-2:BIOPROCESS PLANT ASSISTANT</option>
                            <option value="BT-041-3:BIOPROCESS SUPERVISOR" > BT-041-3:BIOPROCESS SUPERVISOR</option>
                            <option value="BT-042-1:HERBAL PROCESS MACHINE OPERATOR" > BT-042-1:HERBAL PROCESS MACHINE OPERATOR</option>
                            <option value="BT-042-2:HERBAL PROCESS PLANT ASSISTANT" > BT-042-2:HERBAL PROCESS PLANT ASSISTANT</option>
                            <option value="BT-042-3:HERBAL PROCESS SUPERVISOR" > BT-042-3:HERBAL PROCESS SUPERVISOR</option>
                            <option value="C-010-1:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-DOMESTIK" > C-010-1:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-DOMESTIK</option>
                            <option value="C-010-2:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-DOMESTIK" > C-010-2:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-DOMESTIK</option>
                            <option value="C-010-3:JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-DOMESTIK" > C-010-3:JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-DOMESTIK</option>
                            <option value="C-011-1:ACMV ASSISTANT INSTALLER" > C-011-1:ACMV ASSISTANT INSTALLER</option>
                            <option value="C-011-2:ACMV INSTALLER" > C-011-2:ACMV INSTALLER</option>
                            <option value="C-011-3:ACMV SUPERVISOR" > C-011-3:ACMV SUPERVISOR</option>
                            <option value="C-020-1:JURUELEKTRIK (PENDAWAIAN)" > C-020-1:JURUELEKTRIK (PENDAWAIAN)</option>
                            <option value="C-020-2:JURUELEKTRIK (PENDAWAIAN)" > C-020-2:JURUELEKTRIK (PENDAWAIAN)</option>
                            <option value="C-030-1:PENJAGA JENTERA ELEKTRIK VOLTAN RENDAH" > C-030-1:PENJAGA JENTERA ELEKTRIK VOLTAN RENDAH</option>
                            <option value="C-030-2:PENJAGA JENTERA ELEKTRIK VOLTAN RENDAH" > C-030-2:PENJAGA JENTERA ELEKTRIK VOLTAN RENDAH</option>
                            <option value="C-030-3:PENJAGA JENTERA ELEKTRIK VOLTAN RENDAH" > C-030-3:PENJAGA JENTERA ELEKTRIK VOLTAN RENDAH</option>
                            <option value="C-040-1:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-KOMERSIL" > C-040-1:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-KOMERSIL</option>
                            <option value="C-040-2:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-KOMERSIL" > C-040-2:MEKANIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-KOMERSIL</option>
                            <option value="C-040-3:JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-KOMERSIL" > C-040-3:JURUTEKNIK PENYEJUKBEKUAN DAN PENYAMANAN UDARA-KOMERSIL</option>
                            <option value="C-040-4:PEMBANTU JURUTERA PENYAMANAN UDARA, PENYEJUKBEKUAN DAN PENGALIHAN UDARA MEKANIKAL" > C-040-4:PEMBANTU JURUTERA PENYAMANAN UDARA, PENYEJUKBEKUAN DAN PENGALIHAN UDARA MEKANIKAL</option>
                            <option value="C-040-5:JURUTERA PENYAMANAN UDARA, PENYEJUKBEKUAN DAN PENGALIHAN UDARA MEKANIKAL" > C-040-5:JURUTERA PENYAMANAN UDARA, PENYEJUKBEKUAN DAN PENGALIHAN UDARA MEKANIKAL</option>
                            <option value="C-041-1:ACMV PIPING" > C-041-1:ACMV PIPING</option>
                            <option value="C-041-2:ACMV PIPING INSTALLER" > C-041-2:ACMV PIPING INSTALLER</option>
                            <option value="C-050-1:JURUTEKNIK ELEKTRIK RENDAH" > C-050-1:JURUTEKNIK ELEKTRIK RENDAH</option>
                            <option value="C-050-2:JURUTEKNIK ELEKTRIK" > C-050-2:JURUTEKNIK ELEKTRIK</option>
                            <option value="C-050-3:JURUTEKNIK ELEKTRIK KANAN" > C-050-3:JURUTEKNIK ELEKTRIK KANAN</option>
                            <option value="C-051-1:JURUTEKNIK ELEKTRIK RENDAH" > C-051-1:JURUTEKNIK ELEKTRIK RENDAH</option>
                            <option value="C-051-2:JURUTEKNIK ELEKTRIK" > C-051-2:JURUTEKNIK ELEKTRIK</option>
                            <option value="C-051-3:JURUTEKNIK ELEKTRIK KANAN" > C-051-3:JURUTEKNIK ELEKTRIK KANAN</option>
                            <option value="C-051-4:PEMBANTU JURUTERA ELEKTRIK" > C-051-4:PEMBANTU JURUTERA ELEKTRIK</option>
                            <option value="C-051-5:JURUTERA ELEKTRIK" > C-051-5:JURUTERA ELEKTRIK</option>
                            <option value="C-060-1:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL" > C-060-1:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL</option>
                            <option value="C-060-2:JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL" > C-060-2:JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL</option>
                            <option value="C-060-3:JURUTEKNIK KANAN ALATAN KEPERSISAN ELEKTRIKAL" > C-060-3:JURUTEKNIK KANAN ALATAN KEPERSISAN ELEKTRIKAL</option>
                            <option value="CM-010-2:INDUSTRIAL INSTRUMENTATION & CONTROL TECHNICIAN" > CM-010-2:INDUSTRIAL INSTRUMENTATION & CONTROL TECHNICIAN</option>
                            <option value="CM-010-3:INDUSTRIAL INSTRUMENTATION & CONTROL SENIOR TECHNICIAN" > CM-010-3:INDUSTRIAL INSTRUMENTATION & CONTROL SENIOR TECHNICIAN</option>
                            <option value="CM-010-4:INDUSTRIAL INSTRUMENTATION & CONTROL TECHNOLOGIST" > CM-010-4:INDUSTRIAL INSTRUMENTATION & CONTROL TECHNOLOGIST</option>
                            <option value="CM-010-5:INDUSTRIAL INSTRUMENTATION & CONTROL SENIOR TECHNOLOGIST" > CM-010-5:INDUSTRIAL INSTRUMENTATION & CONTROL SENIOR TECHNOLOGIST</option>
                            <option value="CM-020-2:WATER DISTRIBUTION INSTRUMENTATION TECHNICIAN" > CM-020-2:WATER DISTRIBUTION INSTRUMENTATION TECHNICIAN</option>
                            <option value="CM-020-3:WATER DISTRIBUTION INSTRUMENTATION SENIOR TECHNICIAN" > CM-020-3:WATER DISTRIBUTION INSTRUMENTATION SENIOR TECHNICIAN</option>
                            <option value="CM-020-4:WATER DISTRIBUTION INSTRUMENTATION EXECUTIVE" > CM-020-4:WATER DISTRIBUTION INSTRUMENTATION EXECUTIVE</option>
                            <option value="CM-020-5:WATER DISTRIBUTION INSTRUMENTATION MANAGER" > CM-020-5:WATER DISTRIBUTION INSTRUMENTATION MANAGER</option>
                            <option value="CM-030-4:PEMBANTU TEKNOLOGIS KAWALAN PROSES" > CM-030-4:PEMBANTU TEKNOLOGIS KAWALAN PROSES</option>
                            <option value="CM-030-5:TEKNOLOGIS KAWALAN PROSES" > CM-030-5:TEKNOLOGIS KAWALAN PROSES</option>
                            <option value="CMC2:MOBILE CRANE (CRAWLER) 0PERATOR" > CMC2:MOBILE CRANE (CRAWLER) 0PERATOR</option>
                            <option value="CMM3:MOBILE CRANE SUPERVISOR" > CMM3:MOBILE CRANE SUPERVISOR</option>
                            <option value="CMM4:CRANE SUPERINTENDENT" > CMM4:CRANE SUPERINTENDENT</option>
                            <option value="CMM5:CRANE OPERATION MANAGER" > CMM5:CRANE OPERATION MANAGER</option>
                            <option value="CMW2:MOBILE CRANE (WHEEL) 0PERATOR" > CMW2:MOBILE CRANE (WHEEL) 0PERATOR</option>
                            <option value="CN01:PEMBINAAN LANSKAP" > CN01:PEMBINAAN LANSKAP</option>
                            <option value="COM1:CRANE SIGNALMAN" > COM1:CRANE SIGNALMAN</option>
                            <option value="CRG1:RIGGER" > CRG1:RIGGER</option>
                            <option value="CRG2:RIGGER" > CRG2:RIGGER</option>
                            <option value="CRG3:RIGGER SUPERVISOR" > CRG3:RIGGER SUPERVISOR</option>
                            <option value="CRG4:RIGGING SUPERINTENDENT" > CRG4:RIGGING SUPERINTENDENT</option>
                            <option value="CSH3:PENYELIA KESELAMATAN DAN KESIHATAN TAPAK BINAAN" > CSH3:PENYELIA KESELAMATAN DAN KESIHATAN TAPAK BINAAN</option>
                            <option value="CSL1:SELF LOADING CRANE 0PERATOR" > CSL1:SELF LOADING CRANE 0PERATOR</option>
                            <option value="CTE2:TOWER CRANE ERECTOR" > CTE2:TOWER CRANE ERECTOR</option>
                            <option value="CTE3:TOWER CRANE ERECTION SUPERVISOR" > CTE3:TOWER CRANE ERECTION SUPERVISOR</option>
                            <option value="CTO2:TOWER CRANE 0PERATOR" > CTO2:TOWER CRANE 0PERATOR</option>
                            <option value="CTO3:TOWER CRANE SUPERVISOR" > CTO3:TOWER CRANE SUPERVISOR</option>
                            <option value="CVS3:PENYELIA AWAM & STRUKTUR" > CVS3:PENYELIA AWAM & STRUKTUR</option>
                            <option value="CVS4:PENGURUS BINAAN AWAM DAN STRUKTUR" > CVS4:PENGURUS BINAAN AWAM DAN STRUKTUR</option>
                            <option value="D-020-2:PEMBANTU JURUTEKNIK SENGGARAAN RADAR" > D-020-2:PEMBANTU JURUTEKNIK SENGGARAAN RADAR</option>
                            <option value="D-020-3:JURUTEKNIK SENGGARAAN RADAR" > D-020-3:JURUTEKNIK SENGGARAAN RADAR</option>
                            <option value="D-030-1:OPERATOR PERHUBUNGAN (ELEKTRONIK)" > D-030-1:OPERATOR PERHUBUNGAN (ELEKTRONIK)</option>
                            <option value="D-030-2:OPERATOR PERHUBUNGAN (ELEKTRONIK)" > D-030-2:OPERATOR PERHUBUNGAN (ELEKTRONIK)</option>
                            <option value="D-030-3:PERSONEL PERHUBUNGAN (ELEKTRONIK)" > D-030-3:PERSONEL PERHUBUNGAN (ELEKTRONIK)</option>
                            <option value="D-041-2:PEMBANTU JURUTEKNIK SISTEM KOMPUTER" > D-041-2:PEMBANTU JURUTEKNIK SISTEM KOMPUTER</option>
                            <option value="D-041-3:JURUTEKNIK SISTEM KOMPUTER" > D-041-3:JURUTEKNIK SISTEM KOMPUTER</option>
                            <option value="D-041-4:PEMBANTU EKSEKUTIF SISTEM KOMPUTER" > D-041-4:PEMBANTU EKSEKUTIF SISTEM KOMPUTER</option>
                            <option value="D-041-5:EKSEKUTIF SISTEM KOMPUTER" > D-041-5:EKSEKUTIF SISTEM KOMPUTER</option>
                            <option value="D-051-2:PEMBANTU JURUTEKNIK RANGKAIAN KOMPUTER" > D-051-2:PEMBANTU JURUTEKNIK RANGKAIAN KOMPUTER</option>
                            <option value="D-051-3:JURUTEKNIK RANGKAIAN KOMPUTER" > D-051-3:JURUTEKNIK RANGKAIAN KOMPUTER</option>
                            <option value="D-051-4:PEMBANTU JURUTERA RANGKAIAN" > D-051-4:PEMBANTU JURUTERA RANGKAIAN</option>
                            <option value="D-051-5:JURUTERA RANGKAIAN" > D-051-5:JURUTERA RANGKAIAN</option>
                            <option value="D-060-2:PEMBANTU TADBIR SISTEM MAKLUMAT" > D-060-2:PEMBANTU TADBIR SISTEM MAKLUMAT</option>
                            <option value="D-060-3:PENYELIA PEMBANTU TADBIR SISTEM MAKLUMAT" > D-060-3:PENYELIA PEMBANTU TADBIR SISTEM MAKLUMAT</option>
                            <option value="D-060-4:EKSEKUTIF SISTEM MAKLUMAT" > D-060-4:EKSEKUTIF SISTEM MAKLUMAT</option>
                            <option value="D-060-5:PENGURUS SISTEM MAKLUMAT" > D-060-5:PENGURUS SISTEM MAKLUMAT</option>
                            <option value="D-070-4:PEMBANGUNAN APLIKASI-PENGATURCARA ANALISIS" > D-070-4:PEMBANGUNAN APLIKASI-PENGATURCARA ANALISIS</option>
                            <option value="D-070-5:PEMBANGUNAN APLIKASI-JURUANALISA SISTEM" > D-070-5:PEMBANGUNAN APLIKASI-JURUANALISA SISTEM</option>
                            <option value="D-080-2:ARTIS MULTIMEDIA-PENGARANGAN" > D-080-2:ARTIS MULTIMEDIA-PENGARANGAN</option>
                            <option value="D-080-3:PEREKABENTUK MULTIMEDIA-PENGARANGAN" > D-080-3:PEREKABENTUK MULTIMEDIA-PENGARANGAN</option>
                            <option value="D-090-2:ARTIS MULTIMEDIA-VIDEO" > D-090-2:ARTIS MULTIMEDIA-VIDEO</option>
                            <option value="D-090-3:PEREKABENTUK MULTIMEDIA - VIDEO" > D-090-3:PEREKABENTUK MULTIMEDIA - VIDEO</option>
                            <option value="D-100-2:ARTIS MULTIMEDIA-AUDIO" > D-100-2:ARTIS MULTIMEDIA-AUDIO</option>
                            <option value="D-100-3:PEREKABENTUK MULTIMEDIA - AUDIO" > D-100-3:PEREKABENTUK MULTIMEDIA - AUDIO</option>
                            <option value="D-110-2:ARTIS MULTIMEDIA-ANIMATOR" > D-110-2:ARTIS MULTIMEDIA-ANIMATOR</option>
                            <option value="D-111-2:ARTIS MULTIMEDIA-VISUAL" > D-111-2:ARTIS MULTIMEDIA-VISUAL</option>
                            <option value="D-112-3:PEREKABENTUK MULTIMEDIA- ANIMASI & VISUAL" > D-112-3:PEREKABENTUK MULTIMEDIA- ANIMASI & VISUAL</option>
                            <option value="D-120-4:PENGURUS KREATIF MULTIMEDIA" > D-120-4:PENGURUS KREATIF MULTIMEDIA</option>
                            <option value="D-120-5:PENGARAH KREATIF MULTIMEDIA" > D-120-5:PENGARAH KREATIF MULTIMEDIA</option>
                            <option value="D-200-3:WIRELESS TELECOMMUNICATION TECHNICIAN" > D-200-3:WIRELESS TELECOMMUNICATION TECHNICIAN</option>
                            <option value="D-210-2:PEMBANTU JURUTEKNIK TELEKOMUNIKASI-PEMASANGAN" > D-210-2:PEMBANTU JURUTEKNIK TELEKOMUNIKASI-PEMASANGAN</option>
                            <option value="D-210-3:JURUTEKNIK TELEKOMUNIKASI-PEMASANGAN" > D-210-3:JURUTEKNIK TELEKOMUNIKASI-PEMASANGAN</option>
                            <option value="D-211-2:PEMBANTU JURUTEKNIK TELEKOMUNIKASI-PENYENGGARAAN" > D-211-2:PEMBANTU JURUTEKNIK TELEKOMUNIKASI-PENYENGGARAAN</option>
                            <option value="D-211-3:JURUTEKNIK TELEKOMUNIKASI-PENYENGGARAAN (TELECOMMUNICATION TECHNICIAN-MAINTENANCE)" > D-211-3:JURUTEKNIK TELEKOMUNIKASI-PENYENGGARAAN (TELECOMMUNICATION TECHNICIAN-MAINTENANCE)</option>
                            <option value="D-214-3:JURUTEKNIK TELEKOMUNIKASI- OPERASI PENGSUISAN" > D-214-3:JURUTEKNIK TELEKOMUNIKASI- OPERASI PENGSUISAN</option>
                            <option value="D-214-4:PENOLONG JURUTERA TELEKOMUNIKASI-OPERASI PENGSUISAN" > D-214-4:PENOLONG JURUTERA TELEKOMUNIKASI-OPERASI PENGSUISAN</option>
                            <option value="D-214-5:JURUTERA TELEKOMUNIKASI- OPERASI PENGSUISAN" > D-214-5:JURUTERA TELEKOMUNIKASI- OPERASI PENGSUISAN</option>
                            <option value="D-215-4:PENOLONG JURUTERA TELEKOMUNIKASI-OPERASI RANGKAIAN PERHUBUNGAN PELANGGAN" > D-215-4:PENOLONG JURUTERA TELEKOMUNIKASI-OPERASI RANGKAIAN PERHUBUNGAN PELANGGAN</option>
                            <option value="D-215-5:JURUTERA TELEKOMUNIKASI-OPERASI RANGKAIAN PERHUBUNGAN PELANGGAN" > D-215-5:JURUTERA TELEKOMUNIKASI-OPERASI RANGKAIAN PERHUBUNGAN PELANGGAN</option>
                            <option value="D-217-3:JURUTEKNIK TELEKOMUNIKASI-OPERASI PENGSUISAN" > D-217-3:JURUTEKNIK TELEKOMUNIKASI-OPERASI PENGSUISAN</option>
                            <option value="D-217-4:PENOLONG JURUTERA TELEKOMUNIKASI-OPERASI PENGSUISAN" > D-217-4:PENOLONG JURUTERA TELEKOMUNIKASI-OPERASI PENGSUISAN</option>
                            <option value="D-217-5:JURUTERA TELEKOMUNIKASI-OPERASI PENGSUISAN" > D-217-5:JURUTERA TELEKOMUNIKASI-OPERASI PENGSUISAN</option>
                            <option value="D-400-2:PENOLONG JURUTEKNIK FIBER OPTIK -TELEKOMUNIKASI" > D-400-2:PENOLONG JURUTEKNIK FIBER OPTIK -TELEKOMUNIKASI</option>
                            <option value="D-400-3:JURUTEKNIK FIBER OPTIK - TELEKOMUNIKASI" > D-400-3:JURUTEKNIK FIBER OPTIK - TELEKOMUNIKASI</option>
                            <option value="D-400-4:EKSEKUTIF TEKNIK FIBER OPTIK" > D-400-4:EKSEKUTIF TEKNIK FIBER OPTIK</option>
                            <option value="D-400-5:JURUTERA FIBER OPTIK" > D-400-5:JURUTERA FIBER OPTIK</option>
                            <option value="D-500-2:PEMASANG SISTEM PERKABELAN BERSTRUKTUR" > D-500-2:PEMASANG SISTEM PERKABELAN BERSTRUKTUR</option>
                            <option value="D-500-3:JURUTEKNIK PEMASANG SISTEM PERKABELAN BERSTRUKTUR" > D-500-3:JURUTEKNIK PEMASANG SISTEM PERKABELAN BERSTRUKTUR</option>
                            <option value="DCF1:FIXED CEILING ASSISTANT INSTALLER" > DCF1:FIXED CEILING ASSISTANT INSTALLER</option>
                            <option value="DCF2:FIXED CEILING  INSTALLER" > DCF2:FIXED CEILING  INSTALLER</option>
                            <option value="DCG1:DEMOUNTABLE CEILING ASSISTANT INSTALLER" > DCG1:DEMOUNTABLE CEILING ASSISTANT INSTALLER</option>
                            <option value="DCG2:DEMOUNTABLE CEILING INSTALLER" > DCG2:DEMOUNTABLE CEILING INSTALLER</option>
                            <option value="DCG3:CEILING SUPERVISOR" > DCG3:CEILING SUPERVISOR</option>
                            <option value="DS-011-2:ARMOURER" > DS-011-2:ARMOURER</option>
                            <option value="DS-011-3:SENIOR ARMOURER" > DS-011-3:SENIOR ARMOURER</option>
                            <option value="DWC1:DRYWALL CLEAN ROOM ASSISTANT INSTALLER" > DWC1:DRYWALL CLEAN ROOM ASSISTANT INSTALLER</option>
                            <option value="DWC2:DRYWALL CLEAN ROOM INSTALLER" > DWC2:DRYWALL CLEAN ROOM INSTALLER</option>
                            <option value="DWC3:DRYWALL CLEAN ROOM ASSISTANT SUPERVISOR" > DWC3:DRYWALL CLEAN ROOM ASSISTANT SUPERVISOR</option>
                            <option value="DWC4:DRYWALL & CEILING PROJECT EXECUTIVE" > DWC4:DRYWALL & CEILING PROJECT EXECUTIVE</option>
                            <option value="DWC5:DRYWALL & CEILING PROJECT MANAGER" > DWC5:DRYWALL & CEILING PROJECT MANAGER</option>
                            <option value="DWP1:DRYWALL PARTITION ASSISTANT INSTALLER" > DWP1:DRYWALL PARTITION ASSISTANT INSTALLER</option>
                            <option value="DWP2:DRYWALL PARTITION  INSTALLER" > DWP2:DRYWALL PARTITION  INSTALLER</option>
                            <option value="DWP3:DRYWALL PARTITION SUPERVISOR" > DWP3:DRYWALL PARTITION SUPERVISOR</option>
                            <option value="DZT2:TRACK DOZER OPERATOR" > DZT2:TRACK DOZER OPERATOR</option>
                            <option value="E-010-1:JURUTEKNIK RENDAH ELEKTRONIK INDUSTRI - PERALATAN" > E-010-1:JURUTEKNIK RENDAH ELEKTRONIK INDUSTRI - PERALATAN</option>
                            <option value="E-010-2:JURUTEKNIK ELEKTRONIK INDUSTRI - PERALATAN" > E-010-2:JURUTEKNIK ELEKTRONIK INDUSTRI - PERALATAN</option>
                            <option value="E-010-3:JURUTEKNIK KANAN ELEKTRONIK INDUSTRI - PERALATAN" > E-010-3:JURUTEKNIK KANAN ELEKTRONIK INDUSTRI - PERALATAN</option>
                            <option value="E-011-1:JURUTEKNIK RENDAH ELEKTRONIK INDUSTRI - PERALATAN" > E-011-1:JURUTEKNIK RENDAH ELEKTRONIK INDUSTRI - PERALATAN</option>
                            <option value="E-011-2:JURUTEKNIK ELEKTRONIK INDUSTRI - PERALATAN" > E-011-2:JURUTEKNIK ELEKTRONIK INDUSTRI - PERALATAN</option>
                            <option value="E-011-3:JURUTEKNIK KANAN ELEKTRONIK INDUSTRI - PERALATAN" > E-011-3:JURUTEKNIK KANAN ELEKTRONIK INDUSTRI - PERALATAN</option>
                            <option value="E-030-4:PEMBANTU JURUTERA ELEKTRONIK INDUSTRI" > E-030-4:PEMBANTU JURUTERA ELEKTRONIK INDUSTRI</option>
                            <option value="E-030-5:JURUTERA ELEKTRONIK INDUSTRI" > E-030-5:JURUTERA ELEKTRONIK INDUSTRI</option>
                            <option value="EE-010-1:ELECTRONIC AUDIO VISUAL JUNIOR TECHNICIAN" > EE-010-1:ELECTRONIC AUDIO VISUAL JUNIOR TECHNICIAN</option>
                            <option value="EE-010-2:ELECTRONIC AUDIO VISUAL TECHNICIAN" > EE-010-2:ELECTRONIC AUDIO VISUAL TECHNICIAN</option>
                            <option value="EE-010-3:ELECTRONIC AUDIO VISUAL SENIOR TECHNICIAN" > EE-010-3:ELECTRONIC AUDIO VISUAL SENIOR TECHNICIAN</option>
                            <option value="EE-010-4:ELECTRONIC AUDIO VISUAL TECHNOLOGY EXECUTIVE" > EE-010-4:ELECTRONIC AUDIO VISUAL TECHNOLOGY EXECUTIVE</option>
                            <option value="EE-010-5:ELECTRONIC AUDIO VISUAL TECHNOLOGY SENIOR EXECUTIVE" > EE-010-5:ELECTRONIC AUDIO VISUAL TECHNOLOGY SENIOR EXECUTIVE</option>
                            <option value="EE-020-1:SEMICONDUCTOR PRODUCTION OPERATOR" > EE-020-1:SEMICONDUCTOR PRODUCTION OPERATOR</option>
                            <option value="EE-020-2:ASSISTANT SEMICONDUCTOR TECHNICIAN" > EE-020-2:ASSISTANT SEMICONDUCTOR TECHNICIAN</option>
                            <option value="EE-020-3:SEMICONDUCTOR TECHNICIAN" > EE-020-3:SEMICONDUCTOR TECHNICIAN</option>
                            <option value="EE-030-2:TELECOMMUNICATION ASSISTANT TECHNICIAN" > EE-030-2:TELECOMMUNICATION ASSISTANT TECHNICIAN</option>
                            <option value="EE-030-3:TELECOMMUNICATION TECHNICIAN" > EE-030-3:TELECOMMUNICATION TECHNICIAN</option>
                            <option value="EE-030-4:TELECOMMUNICATION OFFICER(TECHNICAL)" > EE-030-4:TELECOMMUNICATION OFFICER(TECHNICAL)</option>
                            <option value="EE-030-5:TELECOMMUNICATION SENIOR OFFICER(TECHNICAL)" > EE-030-5:TELECOMMUNICATION SENIOR OFFICER(TECHNICAL)</option>
                            <option value="EE-031-2:TELECOMMUNICATION OPERATOR (OPERATION)" > EE-031-2:TELECOMMUNICATION OPERATOR (OPERATION)</option>
                            <option value="EE-031-3:TELECOMMUNICATION SUPERVISOR (OPERATION)" > EE-031-3:TELECOMMUNICATION SUPERVISOR (OPERATION)</option>
                            <option value="EE-031-4:TELECOMMUNICATION OFFICER(OPERATION)" > EE-031-4:TELECOMMUNICATION OFFICER(OPERATION)</option>
                            <option value="EE-031-5:TELECOMMUNICATION SENIOR OFFICER(OPERATION)" > EE-031-5:TELECOMMUNICATION SENIOR OFFICER(OPERATION)</option>
                            <option value="EE-032-2:TECHNICIAN (3G SWITCHING)" > EE-032-2:TECHNICIAN (3G SWITCHING)</option>
                            <option value="EE-032-3:SENIOR TECHNICIAN (3G SWITCHING)" > EE-032-3:SENIOR TECHNICIAN (3G SWITCHING)</option>
                            <option value="EE-033-2:RADIO ACCESS NETWORK TECHNICIAN" > EE-033-2:RADIO ACCESS NETWORK TECHNICIAN</option>
                            <option value="EE-033-3:RADIO ACCESS NETWORK SENIOR TECHNICIAN" > EE-033-3:RADIO ACCESS NETWORK SENIOR TECHNICIAN</option>
                            <option value="EE-033-4:RADIO ACCESS NETWORK ASSISTANT TECHNICAL EXECUTIVE" > EE-033-4:RADIO ACCESS NETWORK ASSISTANT TECHNICAL EXECUTIVE</option>
                            <option value="EE-033-5:RADIO ACCESS NETWORK TECHNICAL EXECUTIVE" > EE-033-5:RADIO ACCESS NETWORK TECHNICAL EXECUTIVE</option>
                            <option value="EE-040-2:JURUTEKNIK FREKUENSI RADIO TANPA WAYAR" > EE-040-2:JURUTEKNIK FREKUENSI RADIO TANPA WAYAR</option>
                            <option value="EE-040-3:JURUTEKNIK KANAN FREKUENSI RADIO TANPA WAYAR" > EE-040-3:JURUTEKNIK KANAN FREKUENSI RADIO TANPA WAYAR</option>
                            <option value="EE-050-2:BUFFER STORAGE TECHNICIAN" > EE-050-2:BUFFER STORAGE TECHNICIAN</option>
                            <option value="EE-050-3:BUFFER STORAGE SENIOR TECHNICIAN" > EE-050-3:BUFFER STORAGE SENIOR TECHNICIAN</option>
                            <option value="EE-060-2:EMBEDDED SYSTEM TECHNICIAN (DESIGN)" > EE-060-2:EMBEDDED SYSTEM TECHNICIAN (DESIGN)</option>
                            <option value="EE-060-3:EMBEDDED SYSTEM SENIOR TECHNICIAN (DESIGN)" > EE-060-3:EMBEDDED SYSTEM SENIOR TECHNICIAN (DESIGN)</option>
                            <option value="EE-070-2:OPTICAL ELECTRONIC DISPLAY TECHNICIAN (DESIGN)" > EE-070-2:OPTICAL ELECTRONIC DISPLAY TECHNICIAN (DESIGN)</option>
                            <option value="EE-070-3:OPTICAL ELECTRONIC DISPLAY SENIOR TECHNICIAN (DESIGN)" > EE-070-3:OPTICAL ELECTRONIC DISPLAY SENIOR TECHNICIAN (DESIGN)</option>
                            <option value="EE-080-2:ELECTROMAGNETIC INTERFERENCE/ELECTROMAGNETIC  COMPATIBILITY(EMI/EMC) TECHNICIAN (DESIGN)" > EE-080-2:ELECTROMAGNETIC INTERFERENCE/ELECTROMAGNETIC  COMPATIBILITY(EMI/EMC) TECHNICIAN (DESIGN)</option>
                            <option value="EE-080-3:ELECTROMAGNETIC INTERFERENCE/ELECTROMAGNETIC  COMPATIBILITY(EMI/EMC) SENIOR TECHNICIAN (DESIGN)" > EE-080-3:ELECTROMAGNETIC INTERFERENCE/ELECTROMAGNETIC  COMPATIBILITY(EMI/EMC) SENIOR TECHNICIAN (DESIGN)</option>
                            <option value="EE-090-2:INTERFACE TECHNICIAN" > EE-090-2:INTERFACE TECHNICIAN</option>
                            <option value="EE-090-3:INTERFACE SENIOR TECHNICIAN" > EE-090-3:INTERFACE SENIOR TECHNICIAN</option>
                            <option value="EE-100-2:CONSUMER ELECTRONIC POWER MANAGEMENT TECHNICIAN(DESIGN)" > EE-100-2:CONSUMER ELECTRONIC POWER MANAGEMENT TECHNICIAN(DESIGN)</option>
                            <option value="EE-100-3:CONSUMER ELECTRONIC POWER MANAGEMENT SENIOR TECHNICIAN(DESIGN)" > EE-100-3:CONSUMER ELECTRONIC POWER MANAGEMENT SENIOR TECHNICIAN(DESIGN)</option>
                            <option value="EE-102-3:SENSOR TECHNOLOGY SENIOR TECHNICIAN" > EE-102-3:SENSOR TECHNOLOGY SENIOR TECHNICIAN</option>
                            <option value="EE-103-3:PROGRAM LOGIC SENIOR TECHNICIAN" > EE-103-3:PROGRAM LOGIC SENIOR TECHNICIAN</option>
                            <option value="EE-104-2:DIGITAL SIGNAL PROCESSING TECHNICIAN" > EE-104-2:DIGITAL SIGNAL PROCESSING TECHNICIAN</option>
                            <option value="EE-104-3:DIGITAL SIGNAL PROCESSING SENIOR TECHNICIAN (DESIGN)" > EE-104-3:DIGITAL SIGNAL PROCESSING SENIOR TECHNICIAN (DESIGN)</option>
                            <option value="EE-105-2:NETWORK TECHNICIAN (DESIGN)" > EE-105-2:NETWORK TECHNICIAN (DESIGN)</option>
                            <option value="EE-105-3:NETWORK SENIOR TECHNICIAN (DESIGN)" > EE-105-3:NETWORK SENIOR TECHNICIAN (DESIGN)</option>
                            <option value="EE-110-2:SECURITY TECHNICIAN (DESIGN)" > EE-110-2:SECURITY TECHNICIAN (DESIGN)</option>
                            <option value="EE-110-3:SECURITY SENIOR TECHNICIAN (DESIGN)" > EE-110-3:SECURITY SENIOR TECHNICIAN (DESIGN)</option>
                            <option value="EE-112-4:ELECTRONICS SYSTEM DESIGN SPECIALIST" > EE-112-4:ELECTRONICS SYSTEM DESIGN SPECIALIST</option>
                            <option value="EE-112-5:ELECTRONICS SYSTEM DESIGN SENIOR SPECIALIST" > EE-112-5:ELECTRONICS SYSTEM DESIGN SENIOR SPECIALIST</option>
                            <option value="EE-113-4:INTEGRATED CIRCUIT DESIGN SPECIALIST" > EE-113-4:INTEGRATED CIRCUIT DESIGN SPECIALIST</option>
                            <option value="EE-113-5:INTEGRATED CIRCUIT DESIGN SENIOR" > EE-113-5:INTEGRATED CIRCUIT DESIGN SENIOR</option>
                            <option value="EE-120-2:SOUND TECHNICIAN -PRODUCTION" > EE-120-2:SOUND TECHNICIAN -PRODUCTION</option>
                            <option value="EE-120-3:SOUND SUPERVISOR" > EE-120-3:SOUND SUPERVISOR</option>
                            <option value="EE-120-4:CONSUMER ELECTRONIC DESIGN ASSISTANT SPECIALIST" > EE-120-4:CONSUMER ELECTRONIC DESIGN ASSISTANT SPECIALIST</option>
                            <option value="EE-120-5:CONSUMER ELECTRONIC DESIGN SPECIALIST" > EE-120-5:CONSUMER ELECTRONIC DESIGN SPECIALIST</option>
                            <option value="EE-121-2:DUBBING MIXER-POST PRODUCTION" > EE-121-2:DUBBING MIXER-POST PRODUCTION</option>
                            <option value="EE-121-3:SOUND EDITOR-POST PRODUCTION" > EE-121-3:SOUND EDITOR-POST PRODUCTION</option>
                            <option value="EE-130-1:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL" > EE-130-1:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL</option>
                            <option value="EE-130-2:JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL" > EE-130-2:JURUTEKNIK ALATAN KEPERSISAN ELEKTRIKAL</option>
                            <option value="EE-130-3:JURUTEKNIK KANAN ALATAN KEPERSISAN ELEKTRIKAL" > EE-130-3:JURUTEKNIK KANAN ALATAN KEPERSISAN ELEKTRIKAL</option>
                            <option value="EE-200-2:PEMBANTU JURUTEKNIK SENGGARAAN RADAR" > EE-200-2:PEMBANTU JURUTEKNIK SENGGARAAN RADAR</option>
                            <option value="EE-200-3:JURUTEKNIK SENGGARAAN RADAR" > EE-200-3:JURUTEKNIK SENGGARAAN RADAR</option>
                            <option value="EE-220-2:LIGHTING ASSISTANT" > EE-220-2:LIGHTING ASSISTANT</option>
                            <option value="EE-220-3:LIGHTING TECHNICIAN" > EE-220-3:LIGHTING TECHNICIAN</option>
                            <option value="EE-220-4:SENIOR LIGHTING TECHNICIAN" > EE-220-4:SENIOR LIGHTING TECHNICIAN</option>
                            <option value="EE-220-5:GAFFER" > EE-220-5:GAFFER</option>
                            <option value="EE-300-2:PENCANTUM KABEL VOLTAN RENDAH" > EE-300-2:PENCANTUM KABEL VOLTAN RENDAH</option>
                            <option value="EE-300-3:PENCANTUM KABEL VOLTAN TINGGI" > EE-300-3:PENCANTUM KABEL VOLTAN TINGGI</option>
                            <option value="EE-310-2:JURUELEKTRIK (PENDAWAIAN)" > EE-310-2:JURUELEKTRIK (PENDAWAIAN)</option>
                            <option value="EE-310-3:JURUELEKTRIK KANAN (PENDAWAIAN)" > EE-310-3:JURUELEKTRIK KANAN (PENDAWAIAN)</option>
                            <option value="EL01:PENDAWAIAN ELEKTRIK DOMESTIK DAN KOMERSIAL RINGAN" > EL01:PENDAWAIAN ELEKTRIK DOMESTIK DAN KOMERSIAL RINGAN</option>
                            <option value="EL02:PENYEJUKBEKUAN DAN PENYAMANAN UDARA DOMESTIK DAN KOMERSIAL RINGAN" > EL02:PENYEJUKBEKUAN DAN PENYAMANAN UDARA DOMESTIK DAN KOMERSIAL RINGAN</option>
                            <option value="ET-010-4:PENYELIDIK ISLAM - MU'TABAR" > ET-010-4:PENYELIDIK ISLAM - MU'TABAR</option>
                            <option value="ET-010-5:PENYELIDIK ISLAM - MU'TABAR KANAN" > ET-010-5:PENYELIDIK ISLAM - MU'TABAR KANAN</option>
                            <option value="ET-010-6:PENYELIDIK ISLAM PAKAR (AL-KHABIR)" > ET-010-6:PENYELIDIK ISLAM PAKAR (AL-KHABIR)</option>
                            <option value="EV01:PENGURUSAN BAHAN BUANGAN" > EV01:PENGURUSAN BAHAN BUANGAN</option>
                            <option value="EV02:KAWALAN PENCEMARAN UDARA (BAGFILTER)" > EV02:KAWALAN PENCEMARAN UDARA (BAGFILTER)</option>
                            <option value="EV03:SISTEM RAWATAN KUMBAHAN" > EV03:SISTEM RAWATAN KUMBAHAN</option>
                            <option value="EXH2:HYDRAULIC EXCAVATOR 0PERATOR" > EXH2:HYDRAULIC EXCAVATOR 0PERATOR</option>
                            <option value="F-010-1:JURUTEKNIK PRA-CETAK" > F-010-1:JURUTEKNIK PRA-CETAK</option>
                            <option value="F-010-2:JURUTEKNIK KANAN PRA-CETAK" > F-010-2:JURUTEKNIK KANAN PRA-CETAK</option>
                            <option value="F-010-3:PENYELIA PRA-CETAK" > F-010-3:PENYELIA PRA-CETAK</option>
                            <option value="F-020-1:JURUCETAK LITHOGRAPHIC" > F-020-1:JURUCETAK LITHOGRAPHIC</option>
                            <option value="F-020-2:JURUCETAK LITHOGRAPHIC KANAN" > F-020-2:JURUCETAK LITHOGRAPHIC KANAN</option>
                            <option value="F-020-3:PENYELIA PERCETAKAN LITHOGRAPHIC" > F-020-3:PENYELIA PERCETAKAN LITHOGRAPHIC</option>
                            <option value="F-022-1:JURUCETAK LITHOGRAPHIC" > F-022-1:JURUCETAK LITHOGRAPHIC</option>
                            <option value="F-022-2:JURUCETAK LITHOGRAPHIC KANAN" > F-022-2:JURUCETAK LITHOGRAPHIC KANAN</option>
                            <option value="F-022-3:PENYELIA PERCETAKAN LITHOGRAPHIC" > F-022-3:PENYELIA PERCETAKAN LITHOGRAPHIC</option>
                            <option value="F-030-1:ARTIS DTP" > F-030-1:ARTIS DTP</option>
                            <option value="F-030-2:PEREKA GRAFIK" > F-030-2:PEREKA GRAFIK</option>
                            <option value="F-030-3:EKSEKUTIF REKAAN GRAFIK" > F-030-3:EKSEKUTIF REKAAN GRAFIK</option>
                            <option value="F-031-1:ARTIS DTP" > F-031-1:ARTIS DTP</option>
                            <option value="F-031-2:PEREKA GRAFIK" > F-031-2:PEREKA GRAFIK</option>
                            <option value="F-031-3:EKSEKUTIF REKAAN GRAFIK" > F-031-3:EKSEKUTIF REKAAN GRAFIK</option>
                            <option value="F-040-1:OPERATOR `POST-PRESS`" > F-040-1:OPERATOR `POST-PRESS`</option>
                            <option value="F-040-2:OPERATOR `POST-PRESS` KANAN" > F-040-2:OPERATOR `POST-PRESS` KANAN</option>
                            <option value="F-040-3:PENYELIA `POST-PRESS`" > F-040-3:PENYELIA `POST-PRESS`</option>
                            <option value="F-050-1:JURUTEKNIK PERCETAKAN (MEKANIKAL)" > F-050-1:JURUTEKNIK PERCETAKAN (MEKANIKAL)</option>
                            <option value="F-050-2:JURUTEKNIK PERCETAKAN (MEKANIKAL)" > F-050-2:JURUTEKNIK PERCETAKAN (MEKANIKAL)</option>
                            <option value="F-050-3:JURUTEKNIK PERCETAKAN (MEKANIKAL)" > F-050-3:JURUTEKNIK PERCETAKAN (MEKANIKAL)</option>
                            <option value="F-060-2:JURUTEKNIK PERCETAKAN (ELEKTRIK/ELEKTRONIK)" > F-060-2:JURUTEKNIK PERCETAKAN (ELEKTRIK/ELEKTRONIK)</option>
                            <option value="F-060-3:PENYELIA PERCETAKAN (ELEKTRIK/ELEKTRONIK)" > F-060-3:PENYELIA PERCETAKAN (ELEKTRIK/ELEKTRONIK)</option>
                            <option value="F-070-2:DIGITAL PRINTING OPERATOR" > F-070-2:DIGITAL PRINTING OPERATOR</option>
                            <option value="F-070-3:DIGITAL PRINTING SUPERVISOR" > F-070-3:DIGITAL PRINTING SUPERVISOR</option>
                            <option value="F-080-4:PENOLONG PENGURUS PENGELUARAN PERCETAKAN" > F-080-4:PENOLONG PENGURUS PENGELUARAN PERCETAKAN</option>
                            <option value="F-080-5:PENGURUS PENGELUARAN PERCETAKAN" > F-080-5:PENGURUS PENGELUARAN PERCETAKAN</option>
                            <option value="F-090-2:DIGITAL PRINTING OPERATOR (NIP)" > F-090-2:DIGITAL PRINTING OPERATOR (NIP)</option>
                            <option value="F-090-3:DIGITAL PRINTING SUPERVISOR (NIP)" > F-090-3:DIGITAL PRINTING SUPERVISOR (NIP)</option>
                            <option value="F-100-1:CORRUGATED FLEXOGRAPHIC PRESSMAN" > F-100-1:CORRUGATED FLEXOGRAPHIC PRESSMAN</option>
                            <option value="F-100-2:CORRUGATED FLEXOGRAPHIC SENIOR PRESSMAN" > F-100-2:CORRUGATED FLEXOGRAPHIC SENIOR PRESSMAN</option>
                            <option value="F-100-3:CORRUGATED FLEXOGRAPHIC SUPERVISOR" > F-100-3:CORRUGATED FLEXOGRAPHIC SUPERVISOR</option>
                            <option value="FB-010-2:KERANI AUDIT" > FB-010-2:KERANI AUDIT</option>
                            <option value="FB-010-3:PEMBANTU AUDIT" > FB-010-3:PEMBANTU AUDIT</option>
                            <option value="FB-011-1:PEMBANTU DOKUMENTASI PENGHANTARAN" > FB-011-1:PEMBANTU DOKUMENTASI PENGHANTARAN</option>
                            <option value="FB-011-2:PENYELARAS OPERASI PENGHANTARAN" > FB-011-2:PENYELARAS OPERASI PENGHANTARAN</option>
                            <option value="FB-011-3:PENYELIA OPERASI PENGHANTARAN" > FB-011-3:PENYELIA OPERASI PENGHANTARAN</option>
                            <option value="FB-011-4:EKSEKUTIF OPERASI PENGHANTARAN" > FB-011-4:EKSEKUTIF OPERASI PENGHANTARAN</option>
                            <option value="FB-011-5:PENGURUS OPERASI PENGHANTARAN" > FB-011-5:PENGURUS OPERASI PENGHANTARAN</option>
                            <option value="FB-012-1:STOREHAND" > FB-012-1:STOREHAND</option>
                            <option value="FB-012-2:STOREKEEPER" > FB-012-2:STOREKEEPER</option>
                            <option value="FB-012-3:STORE SUPERVISOR" > FB-012-3:STORE SUPERVISOR</option>
                            <option value="FB-013-2:FLEET DRIVER" > FB-013-2:FLEET DRIVER</option>
                            <option value="FB-013-3:FLEET SUPERVISOR" > FB-013-3:FLEET SUPERVISOR</option>
                            <option value="FB-015-1:LOGISTIC ASSISTANT TECHNICIAN" > FB-015-1:LOGISTIC ASSISTANT TECHNICIAN</option>
                            <option value="FB-015-2:LOGISTIC TECHNICIAN" > FB-015-2:LOGISTIC TECHNICIAN</option>
                            <option value="FB-015-3:LOGISTIC SUPERVISOR" > FB-015-3:LOGISTIC SUPERVISOR</option>
                            <option value="FB-020-2:ASSISTANT ACCOUNT RELATIONSHIP OFFICER" > FB-020-2:ASSISTANT ACCOUNT RELATIONSHIP OFFICER</option>
                            <option value="FB-020-3:ACCOUNT RELATIONSHIP OFFICER" > FB-020-3:ACCOUNT RELATIONSHIP OFFICER</option>
                            <option value="FB-021-2:COMMERCIAL & RETAIL BANKING CLERK" > FB-021-2:COMMERCIAL & RETAIL BANKING CLERK</option>
                            <option value="FB-021-3:COMMERCIAL & RETAIL BANKING OFFICER" > FB-021-3:COMMERCIAL & RETAIL BANKING OFFICER</option>
                            <option value="FB-030-1:CREDIT PROCESSING CLERK" > FB-030-1:CREDIT PROCESSING CLERK</option>
                            <option value="FB-030-2:ASSISTANT CREDIT ANALYST" > FB-030-2:ASSISTANT CREDIT ANALYST</option>
                            <option value="FB-030-3:CREDIT ANALYST" > FB-030-3:CREDIT ANALYST</option>
                            <option value="FB-040-1:CREDIT ADMINISTRATION CLERK" > FB-040-1:CREDIT ADMINISTRATION CLERK</option>
                            <option value="FB-040-2:ASSISTANT CREDIT ADMINISTRATION CLERK" > FB-040-2:ASSISTANT CREDIT ADMINISTRATION CLERK</option>
                            <option value="FB-040-3:CREDIT ADMINISTRATION OFFICER" > FB-040-3:CREDIT ADMINISTRATION OFFICER</option>
                            <option value="FB-050-3:INTERNAL AUDIT ASSISTANT" > FB-050-3:INTERNAL AUDIT ASSISTANT</option>
                            <option value="FB-060-2:MOTOR VEHICLE ADJUSTER" > FB-060-2:MOTOR VEHICLE ADJUSTER</option>
                            <option value="FB-060-3:SENIOR MOTOR VEHICLE ADJUSTER" > FB-060-3:SENIOR MOTOR VEHICLE ADJUSTER</option>
                            <option value="FB-070-1:HUMAN RESOURCE JUNIOR ASSISTANT" > FB-070-1:HUMAN RESOURCE JUNIOR ASSISTANT</option>
                            <option value="FB-070-2:HUMAN RESOURCE ASSISTANT" > FB-070-2:HUMAN RESOURCE ASSISTANT</option>
                            <option value="FB-070-3:HUMAN RESOURCE SUPERVISOR" > FB-070-3:HUMAN RESOURCE SUPERVISOR</option>
                            <option value="FB-071-4:STAFFING EXECUTIVE" > FB-071-4:STAFFING EXECUTIVE</option>
                            <option value="FB-071-5:STAFFING MANAGER" > FB-071-5:STAFFING MANAGER</option>
                            <option value="FB-072-4:SALARY ADMIN EXECUTIVE" > FB-072-4:SALARY ADMIN EXECUTIVE</option>
                            <option value="FB-072-5:COMPENSATION MANAGER" > FB-072-5:COMPENSATION MANAGER</option>
                            <option value="FPE1:FIRE PROTECTION INSTALLER (ELECTRICAL) LEVEL 1" > FPE1:FIRE PROTECTION INSTALLER (ELECTRICAL) LEVEL 1</option>
                            <option value="FPE2:FIRE PROTECTION INSTALLER (ELECTRICAL) LEVEL 2" > FPE2:FIRE PROTECTION INSTALLER (ELECTRICAL) LEVEL 2</option>
                            <option value="FPE3:FIRE PROTECTION ACTIVE SUPERVISOR" > FPE3:FIRE PROTECTION ACTIVE SUPERVISOR</option>
                            <option value="FPE4:FIRE PROTECTION EXECUTIVE" > FPE4:FIRE PROTECTION EXECUTIVE</option>
                            <option value="FPE5:FIRE PROTECTION MANAGER" > FPE5:FIRE PROTECTION MANAGER</option>
                            <option value="FPM1:FIRE PROTECTION INSTALLER (MECHANICAL) LEVEL 1" > FPM1:FIRE PROTECTION INSTALLER (MECHANICAL) LEVEL 1</option>
                            <option value="FPM2:FIRE PROTECTION INSTALLER (MECHANICAL) LEVEL 2" > FPM2:FIRE PROTECTION INSTALLER (MECHANICAL) LEVEL 2</option>
                            <option value="FPP1:FIRE PROTECTION PASSIVE LEVEL 1" > FPP1:FIRE PROTECTION PASSIVE LEVEL 1</option>
                            <option value="FPP2:FIRE PROTECTION PASSIVE APPLICATOR" > FPP2:FIRE PROTECTION PASSIVE APPLICATOR</option>
                            <option value="FPP3:FIRE PROTECTION PASSIVE SUPERVISOR" > FPP3:FIRE PROTECTION PASSIVE SUPERVISOR</option>
                            <option value="FPS1:FIRE PROTECTION MAINTENANCE ASSISTANT" > FPS1:FIRE PROTECTION MAINTENANCE ASSISTANT</option>
                            <option value="FPS2:FIRE PROTECTION MAINTENANCE ASSISTANT" > FPS2:FIRE PROTECTION MAINTENANCE ASSISTANT</option>
                            <option value="FPS3:FIRE PROTECTION MAINTENANCE SUPERVISOR" > FPS3:FIRE PROTECTION MAINTENANCE SUPERVISOR</option>
                            <option value="FPS4:FIRE PROTECTION MAINTENANCE EXECUTIVE" > FPS4:FIRE PROTECTION MAINTENANCE EXECUTIVE</option>
                            <option value="FPS5:FIRE PROTECTION MAINTENANCE MANAGER" > FPS5:FIRE PROTECTION MAINTENANCE MANAGER</option>
                            <option value="FRL2:FORKLIFT OPERATOR" > FRL2:FORKLIFT OPERATOR</option>
                            <option value="FWA 1:FABRIKATOR KERANGKA ALUMINIUM" > FWA 1:FABRIKATOR KERANGKA ALUMINIUM</option>
                            <option value="FWA 2:PEMASANG KERANGKA ALUMINIUM" > FWA 2:PEMASANG KERANGKA ALUMINIUM</option>
                            <option value="FWA 3:PENYELIA KERJA KERANGKA ALUMINIUM" > FWA 3:PENYELIA KERJA KERANGKA ALUMINIUM</option>
                            <option value="G-060-1:JURUFOUNDRI" > G-060-1:JURUFOUNDRI</option>
                            <option value="G-060-2:JURUFOUNDRI KANAN" > G-060-2:JURUFOUNDRI KANAN</option>
                            <option value="G-070-3:JURUTEKNIK FOUNDRI" > G-070-3:JURUTEKNIK FOUNDRI</option>
                            <option value="G-070-4:EKSEKUTIF FOUNDRI" > G-070-4:EKSEKUTIF FOUNDRI</option>
                            <option value="G-070-5:PENGURUS FOUNDRI" > G-070-5:PENGURUS FOUNDRI</option>
                            <option value="G-080-3:JURUTEKNIK FOUNDRI (PEMBUAT ACUAN & TERAS)" > G-080-3:JURUTEKNIK FOUNDRI (PEMBUAT ACUAN & TERAS)</option>
                            <option value="G-090-3:JURUTEKNIK FOUNDRI (PEMBUATAN CORAK)" > G-090-3:JURUTEKNIK FOUNDRI (PEMBUATAN CORAK)</option>
                            <option value="G-100-1:OPERATOR PENGELUARAN (PEMBUATAN KELULI)" > G-100-1:OPERATOR PENGELUARAN (PEMBUATAN KELULI)</option>
                            <option value="G-100-2:OPERATOR PENGELUARAN KANAN (PEMBUATAN KELULI)" > G-100-2:OPERATOR PENGELUARAN KANAN (PEMBUATAN KELULI)</option>
                            <option value="G-100-3:JURUTEKNIK FOUNDRI (TUANGAN ACUAN)" > G-100-3:JURUTEKNIK FOUNDRI (TUANGAN ACUAN)</option>
                            <option value="G-110-3:JURUTEKNIK PENGENDALIAN BAHAN (PEMBUATAN KELULI)" > G-110-3:JURUTEKNIK PENGENDALIAN BAHAN (PEMBUATAN KELULI)</option>
                            <option value="G-110-4:EKSEKUTIF PEMBUATAN KELULI" > G-110-4:EKSEKUTIF PEMBUATAN KELULI</option>
                            <option value="G-110-5:PENGURUS PEMBUATAN KELULI" > G-110-5:PENGURUS PEMBUATAN KELULI</option>
                            <option value="G-111-3:JURUTEKNIK LEBUR (PEMBUATAN KELULI)" > G-111-3:JURUTEKNIK LEBUR (PEMBUATAN KELULI)</option>
                            <option value="G-112-3:JURUTEKNIK TUANGAN (PEMBUATAN KELULI)" > G-112-3:JURUTEKNIK TUANGAN (PEMBUATAN KELULI)</option>
                            <option value="G-113-3:JURUTEKNIK GULUNGAN (PEMBUATAN KELULI)" > G-113-3:JURUTEKNIK GULUNGAN (PEMBUATAN KELULI)</option>
                            <option value="GLS1:PEMOTONG KACA" > GLS1:PEMOTONG KACA</option>
                            <option value="GLZ1:PEMOTONG KACA BERWARNA" > GLZ1:PEMOTONG KACA BERWARNA</option>
                            <option value="GLZ2:JURU KACA" > GLZ2:JURU KACA</option>
                            <option value="GLZ3:PENYELIA JURU KACA" > GLZ3:PENYELIA JURU KACA</option>
                            <option value="GRM2:MOTOR GRADER OPERATOR" > GRM2:MOTOR GRADER OPERATOR</option>
                            <option value="H-010-2:PEMESIN AM(OPERASI LARIK)" > H-010-2:PEMESIN AM(OPERASI LARIK)</option>
                            <option value="H-010-3:PEMESIN (OPERASI LARIK)" > H-010-3:PEMESIN (OPERASI LARIK)</option>
                            <option value="H-011-1:PEMESIN AM" > H-011-1:PEMESIN AM</option>
                            <option value="H-011-2:PEMESIN AM(OPERASI KISAR)" > H-011-2:PEMESIN AM(OPERASI KISAR)</option>
                            <option value="H-011-3:PEMESIN (OPERASI KISAR)" > H-011-3:PEMESIN (OPERASI KISAR)</option>
                            <option value="H-012-2:PEMESIN AM (OPERASI CANAI)" > H-012-2:PEMESIN AM (OPERASI CANAI)</option>
                            <option value="H-012-3:PEMESIN  (OPERASI CANAI)" > H-012-3:PEMESIN  (OPERASI CANAI)</option>
                            <option value="H-014-2:PEMESIN AM(OPERASI LARIK)" > H-014-2:PEMESIN AM(OPERASI LARIK)</option>
                            <option value="H-014-3:PEMESIN (OPERASI LARIK)" > H-014-3:PEMESIN (OPERASI LARIK)</option>
                            <option value="H-015-2:PEMESIN AM(OPERASI KISAR)" > H-015-2:PEMESIN AM(OPERASI KISAR)</option>
                            <option value="H-015-3:PEMESIN (OPERASI KISAR)" > H-015-3:PEMESIN (OPERASI KISAR)</option>
                            <option value="H-016-2:PEMESIN AM (OPERASI CANAI)" > H-016-2:PEMESIN AM (OPERASI CANAI)</option>
                            <option value="H-016-3:PEMESIN  (OPERASI CANAI)" > H-016-3:PEMESIN  (OPERASI CANAI)</option>
                            <option value="H-017-1:PEMESIN AM" > H-017-1:PEMESIN AM</option>
                            <option value="H-021-2:JURUKIMPAL LOGAM TANPA FERUS" > H-021-2:JURUKIMPAL LOGAM TANPA FERUS</option>
                            <option value="H-021-3:JURUTEKNIK KIMPALAN LOGAM TANPA FERUS" > H-021-3:JURUTEKNIK KIMPALAN LOGAM TANPA FERUS</option>
                            <option value="H-022-1:JURUKIMPAL GAS" > H-022-1:JURUKIMPAL GAS</option>
                            <option value="H-022-2:JURUKIMPAL GAS" > H-022-2:JURUKIMPAL GAS</option>
                            <option value="H-022-3:JURUTEKNIK KIMPALAN GAS" > H-022-3:JURUTEKNIK KIMPALAN GAS</option>
                            <option value="H-023-4:PEMBANTU JURUTERA KIMPALAN ( FABRIKASI)" > H-023-4:PEMBANTU JURUTERA KIMPALAN ( FABRIKASI)</option>
                            <option value="H-023-5:JURUTERA KIMPALAN ( FABRIKASI)" > H-023-5:JURUTERA KIMPALAN ( FABRIKASI)</option>
                            <option value="H-024-1:JURUKIMPAL ARKA LOGAM BERPERISAI (KELULI KARBON)" > H-024-1:JURUKIMPAL ARKA LOGAM BERPERISAI (KELULI KARBON)</option>
                            <option value="H-024-2:JURUKIMPAL ARKA LOGAM BERPERISAI (KELULI KARBON & KELULI TAHAN KARAT)" > H-024-2:JURUKIMPAL ARKA LOGAM BERPERISAI (KELULI KARBON & KELULI TAHAN KARAT)</option>
                            <option value="H-024-3:JURUTEKNIK KIMPALAN ARKA LOGAM BERPERISAI(KELULI KARBON & KELULI TAHAN KARAT)" > H-024-3:JURUTEKNIK KIMPALAN ARKA LOGAM BERPERISAI(KELULI KARBON & KELULI TAHAN KARAT)</option>
                            <option value="H-025-2:JURUKIMPAL ARKA TUNGSTEN GAS(KELULI KARBON & KELULI TAHAN KARAT)" > H-025-2:JURUKIMPAL ARKA TUNGSTEN GAS(KELULI KARBON & KELULI TAHAN KARAT)</option>
                            <option value="H-025-3:JURUTEKNIK KIMPALAN ARKA TUNGSTEN GAS (KELULI KARBON & KELULI TAHAN KARAT & ALUMINIUM)" > H-025-3:JURUTEKNIK KIMPALAN ARKA TUNGSTEN GAS (KELULI KARBON & KELULI TAHAN KARAT & ALUMINIUM)</option>
                            <option value="H-026-3:JURUTEKNIK KIMPALAN ARKA TUNGSTEN GAS & ARKA LOGAM BERPERISAI(KELULI KARBON & KELULI TAHAN KARAT)" > H-026-3:JURUTEKNIK KIMPALAN ARKA TUNGSTEN GAS & ARKA LOGAM BERPERISAI(KELULI KARBON & KELULI TAHAN KARAT)</option>
                            <option value="H-027-2:JURUKIMPAL ARKA LOGAM GAS (KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)" > H-027-2:JURUKIMPAL ARKA LOGAM GAS (KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)</option>
                            <option value="H-027-3:JURUTEKNIK KIMPALAN ARKALOGAM GAS(KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)" > H-027-3:JURUTEKNIK KIMPALAN ARKALOGAM GAS(KELULI KARBON, KELULI TAHAN KARAT & ALUMINIUM)</option>
                            <option value="H-028-3:JURUTEKNIK KIMPALAN ARKA BERTERASKAN FLUKS (KELULI KARBON)" > H-028-3:JURUTEKNIK KIMPALAN ARKA BERTERASKAN FLUKS (KELULI KARBON)</option>
                            <option value="H-029-2:OPERATOR KIMPALAN ARKA TERBENAM (KELULI KARBON)" > H-029-2:OPERATOR KIMPALAN ARKA TERBENAM (KELULI KARBON)</option>
                            <option value="H-029-3:JURUTEKNIK KIMPALAN ARKA TERBENAM (KELULI KARBON)" > H-029-3:JURUTEKNIK KIMPALAN ARKA TERBENAM (KELULI KARBON)</option>
                            <option value="H-030-2:MEKANIK PERSENJATAAN" > H-030-2:MEKANIK PERSENJATAAN</option>
                            <option value="H-030-3:JURUTEKNIK PERSENJATAAN" > H-030-3:JURUTEKNIK PERSENJATAAN</option>
                            <option value="H-040-1:JURURADIOGRAF INDUSTRI-BINAAN BERKIMPALAN" > H-040-1:JURURADIOGRAF INDUSTRI-BINAAN BERKIMPALAN</option>
                            <option value="H-040-2:JURURADIOGRAF INDUSTRI-BINAAN BERKIMPALAN" > H-040-2:JURURADIOGRAF INDUSTRI-BINAAN BERKIMPALAN</option>
                            <option value="H-040-3:JURURADIOGRAF INDUSTRI- BINAAN BERKIMPALAN" > H-040-3:JURURADIOGRAF INDUSTRI- BINAAN BERKIMPALAN</option>
                            <option value="H-041-2:PENTAFSIR RADIOGRAF-BINAAN BERKIMPALAN" > H-041-2:PENTAFSIR RADIOGRAF-BINAAN BERKIMPALAN</option>
                            <option value="H-042-2:PENTAFSIR RADIOGRAF-TUANGAN DAN TEMPAAN" > H-042-2:PENTAFSIR RADIOGRAF-TUANGAN DAN TEMPAAN</option>
                            <option value="H-050-1:PELUKIS PELAN KEJURUTERAAN MEKANIKAL" > H-050-1:PELUKIS PELAN KEJURUTERAAN MEKANIKAL</option>
                            <option value="H-050-2:PELUKIS PELAN KEJURUTERAAN MEKANIKAL" > H-050-2:PELUKIS PELAN KEJURUTERAAN MEKANIKAL</option>
                            <option value="H-050-4:PENOLONG JURUTERA PEMBUATAN-CAD / CAM" > H-050-4:PENOLONG JURUTERA PEMBUATAN-CAD / CAM</option>
                            <option value="H-050-5:JURUTERA PEMBUATAN-CAD / CAM" > H-050-5:JURUTERA PEMBUATAN-CAD / CAM</option>
                            <option value="H-051-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL" > H-051-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL</option>
                            <option value="H-052-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL-MINYAK & GAS" > H-052-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL-MINYAK & GAS</option>
                            <option value="H-060-1:PEMERIKSA KIMPALAN" > H-060-1:PEMERIKSA KIMPALAN</option>
                            <option value="H-060-2:PEMERIKSA KIMPALAN" > H-060-2:PEMERIKSA KIMPALAN</option>
                            <option value="H-060-3:PEMERIKSA KIMPALAN KANAN" > H-060-3:PEMERIKSA KIMPALAN KANAN</option>
                            <option value="H-070-1:JURUBENTUK KEPINGAN LOGAM" > H-070-1:JURUBENTUK KEPINGAN LOGAM</option>
                            <option value="H-070-2:JURUBENTUK KEPINGAN LOGAM" > H-070-2:JURUBENTUK KEPINGAN LOGAM</option>
                            <option value="H-070-3:JURUTEKNIK KEPINGAN LOGAM" > H-070-3:JURUTEKNIK KEPINGAN LOGAM</option>
                            <option value="H-080-1:PENGUJI ARUS PUSAR" > H-080-1:PENGUJI ARUS PUSAR</option>
                            <option value="H-080-2:PENGUJI ARUS PUSAR" > H-080-2:PENGUJI ARUS PUSAR</option>
                            <option value="H-080-3:PENGUJI ARUS PUSAR" > H-080-3:PENGUJI ARUS PUSAR</option>
                            <option value="H-093-4:PEREKA DAI KERJA TEKAN" > H-093-4:PEREKA DAI KERJA TEKAN</option>
                            <option value="H-094-4:PEREKA ACUAN PLASTIK" > H-094-4:PEREKA ACUAN PLASTIK</option>
                            <option value="H-095-4:PEMBANTU JURUTERA PERALATAN" > H-095-4:PEMBANTU JURUTERA PERALATAN</option>
                            <option value="H-095-5:JURUTERA PERALATAN" > H-095-5:JURUTERA PERALATAN</option>
                            <option value="H-100-1:MEKANIK INDUSTRI" > H-100-1:MEKANIK INDUSTRI</option>
                            <option value="H-100-2:MEKANIK INDUSTRI" > H-100-2:MEKANIK INDUSTRI</option>
                            <option value="H-100-3:MEKANIK INDUSTRI" > H-100-3:MEKANIK INDUSTRI</option>
                            <option value="H-100-4:PEMBANTU JURUTERA PEMBINAAN DAN PENYELENGGARAAN MESIN" > H-100-4:PEMBANTU JURUTERA PEMBINAAN DAN PENYELENGGARAAN MESIN</option>
                            <option value="H-100-5:JURUTERA PEMBINAAN DAN PENYELENGGARAAN INDUSTRI" > H-100-5:JURUTERA PEMBINAAN DAN PENYELENGGARAAN INDUSTRI</option>
                            <option value="H-120-1:PENGUJI ULTRASONIK-BINAAN BERKIMPALAN" > H-120-1:PENGUJI ULTRASONIK-BINAAN BERKIMPALAN</option>
                            <option value="H-120-2:PENGUJI ULTRASONIK-BINAAN BERKIMPALAN" > H-120-2:PENGUJI ULTRASONIK-BINAAN BERKIMPALAN</option>
                            <option value="H-120-3:PENGUJI ULTRASONIK-BINAAN BERKIMPALAN" > H-120-3:PENGUJI ULTRASONIK-BINAAN BERKIMPALAN</option>
                            <option value="H-140-1:PENGUJI PENEMBUS CECAIR-BINAAN BERKIMPALAN" > H-140-1:PENGUJI PENEMBUS CECAIR-BINAAN BERKIMPALAN</option>
                            <option value="H-140-2:PENGUJI PENEMBUS CECAIR BINAAN BERKIMPALAN" > H-140-2:PENGUJI PENEMBUS CECAIR BINAAN BERKIMPALAN</option>
                            <option value="H-140-3:PENGUJI PENEMBUS CECAIR-BINAAN BERKIMPALAN" > H-140-3:PENGUJI PENEMBUS CECAIR-BINAAN BERKIMPALAN</option>
                            <option value="H-150-1:PENGUJIAN ZARAH MAGNET-BINAAN  BERKIMPALAN" > H-150-1:PENGUJIAN ZARAH MAGNET-BINAAN  BERKIMPALAN</option>
                            <option value="H-150-2:PENGUJIAN ZARAH MAGNET-BINAAN BERKIMPALAN" > H-150-2:PENGUJIAN ZARAH MAGNET-BINAAN BERKIMPALAN</option>
                            <option value="H-150-3:PENGUJIAN ZARAH MAGNET-BINAAN BERKIMPALAN" > H-150-3:PENGUJIAN ZARAH MAGNET-BINAAN BERKIMPALAN</option>
                            <option value="H-160-2:PEMBANTU JURUTEKNIK PENYELENGGARAAN INDUSTRI BERAT" > H-160-2:PEMBANTU JURUTEKNIK PENYELENGGARAAN INDUSTRI BERAT</option>
                            <option value="H-160-3:JURUTEKNIK PENYELENGGARAAN INDUSTRI BERAT" > H-160-3:JURUTEKNIK PENYELENGGARAAN INDUSTRI BERAT</option>
                            <option value="H-170-2:JURUTEKNIK AUTOMASI" > H-170-2:JURUTEKNIK AUTOMASI</option>
                            <option value="H-170-3:JURUTEKNIK AUTOMASI SENIOR" > H-170-3:JURUTEKNIK AUTOMASI SENIOR</option>
                            <option value="H-175-4:PEMBANTU JURUTERA MEKATRONIK" > H-175-4:PEMBANTU JURUTERA MEKATRONIK</option>
                            <option value="H-175-5:JURUTERA MEKATRONIK" > H-175-5:JURUTERA MEKATRONIK</option>
                            <option value="H-176-2:JURUTEKNIK AUTOMASI" > H-176-2:JURUTEKNIK AUTOMASI</option>
                            <option value="H-176-3:JURUTEKNIK AUTOMASI SENIOR" > H-176-3:JURUTEKNIK AUTOMASI SENIOR</option>
                            <option value="H-176-4:PEMBANTU JURUTERA AUTOMASI PERINDUSTRIAN" > H-176-4:PEMBANTU JURUTERA AUTOMASI PERINDUSTRIAN</option>
                            <option value="H-176-5:JURUTERA AUTOMASI PERINDUSTRIAN" > H-176-5:JURUTERA AUTOMASI PERINDUSTRIAN</option>
                            <option value="H-180-1:PENYADUR ELEKTRIK" > H-180-1:PENYADUR ELEKTRIK</option>
                            <option value="H-180-2:PENYADUR ELEKTRIK" > H-180-2:PENYADUR ELEKTRIK</option>
                            <option value="H-180-3:JURUTEKNIK ELEKTROPENYADURAN" > H-180-3:JURUTEKNIK ELEKTROPENYADURAN</option>
                            <option value="H-190-1*:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL" > H-190-1*:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL</option>
                            <option value="H-190-2*:JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL" > H-190-2*:JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL</option>
                            <option value="H-190-3*:JURUTEKNIK KANAN ALATAN KEPERSISAN MEKANIKAL" > H-190-3*:JURUTEKNIK KANAN ALATAN KEPERSISAN MEKANIKAL</option>
                            <option value="H-200-1:FABRIKATOR & PEMASANG STRUKTUR KELULI" > H-200-1:FABRIKATOR & PEMASANG STRUKTUR KELULI</option>
                            <option value="H-200-2:FABRIKATOR & PEMASANG STRUKTUR KELULI" > H-200-2:FABRIKATOR & PEMASANG STRUKTUR KELULI</option>
                            <option value="H-200-3:JURUTEKNIK FABRIKASI & MEMASANG STRUKTUR KELULI" > H-200-3:JURUTEKNIK FABRIKASI & MEMASANG STRUKTUR KELULI</option>
                            <option value="H-210-1:PENYELENGGARA DANDANG JURUGEGAS I" > H-210-1:PENYELENGGARA DANDANG JURUGEGAS I</option>
                            <option value="H-210-2:PENYELENGGARA DANDANG JURUGEGAS II" > H-210-2:PENYELENGGARA DANDANG JURUGEGAS II</option>
                            <option value="H-210-3:PENYELIA PENYELENGGARA DANDANG" > H-210-3:PENYELIA PENYELENGGARA DANDANG</option>
                            <option value="H-300-3:JURUTEKNIK KANAN INSTRUMENTASI PERINDUSTRIAN & KAWALAN" > H-300-3:JURUTEKNIK KANAN INSTRUMENTASI PERINDUSTRIAN & KAWALAN</option>
                            <option value="H-301-1:JURUTEKNIK RENDAH JAMINAN KUALITI" > H-301-1:JURUTEKNIK RENDAH JAMINAN KUALITI</option>
                            <option value="H-301-2:JURUTEKNIK JAMINAN KUALITI" > H-301-2:JURUTEKNIK JAMINAN KUALITI</option>
                            <option value="H-301-3:JURUTEKNIK KANAN JAMINAN KUALITI" > H-301-3:JURUTEKNIK KANAN JAMINAN KUALITI</option>
                            <option value="H-301-4:PENOLONG JURUTERA JAMINAN KUALITI (PEMBUATAN)" > H-301-4:PENOLONG JURUTERA JAMINAN KUALITI (PEMBUATAN)</option>
                            <option value="H-301-5:JURUTERA JAMINAN KUALITI (PEMBUATAN)" > H-301-5:JURUTERA JAMINAN KUALITI (PEMBUATAN)</option>
                            <option value="H-302-2:JURUTEKNIK REKABENTUK PRODUK INDUSTRI" > H-302-2:JURUTEKNIK REKABENTUK PRODUK INDUSTRI</option>
                            <option value="H-302-3:JURUTEKNIK KANAN REKABENTUK PRODUK INDUSTRI" > H-302-3:JURUTEKNIK KANAN REKABENTUK PRODUK INDUSTRI</option>
                            <option value="H-312-2:JURUTEKNIK REKABENTUK PRODUK INDUSTRI" > H-312-2:JURUTEKNIK REKABENTUK PRODUK INDUSTRI</option>
                            <option value="H-312-3:JURUTEKNIK KANAN REKABENTUK PRODUK INDUSTRI" > H-312-3:JURUTEKNIK KANAN REKABENTUK PRODUK INDUSTRI</option>
                            <option value="HL01:HOTEL KULINARI (K-SLDN)" > HL01:HOTEL KULINARI (K-SLDN)</option>
                            <option value="HT-010-1:PRAMUSAJI" > HT-010-1:PRAMUSAJI</option>
                            <option value="HT-010-2:KAPTAN MAKANAN & MINUMAN" > HT-010-2:KAPTAN MAKANAN & MINUMAN</option>
                            <option value="HT-010-3:PENYELIA MAKANAN & MINUMAN" > HT-010-3:PENYELIA MAKANAN & MINUMAN</option>
                            <option value="HT-010-4:PENGURUS BAHAGIAN MAKANAN & MINUMAN" > HT-010-4:PENGURUS BAHAGIAN MAKANAN & MINUMAN</option>
                            <option value="HT-010-5:PENGURUS MAKANAN & MINUMAN" > HT-010-5:PENGURUS MAKANAN & MINUMAN</option>
                            <option value="HT-011-2:JUNIOR BUTCHER" > HT-011-2:JUNIOR BUTCHER</option>
                            <option value="HT-011-3:SENIOR BUTCHER" > HT-011-3:SENIOR BUTCHER</option>
                            <option value="HT-020-2:HERITAGE CITY GUIDE" > HT-020-2:HERITAGE CITY GUIDE</option>
                            <option value="HT-021-2:PEMANDU PELANCONG ALAM SEMULAJADI SETEMPAT" > HT-021-2:PEMANDU PELANCONG ALAM SEMULAJADI SETEMPAT</option>
                            <option value="HT-022-1:KERANI OPERASI PELANCONG KELUAR NEGERI" > HT-022-1:KERANI OPERASI PELANCONG KELUAR NEGERI</option>
                            <option value="HT-022-2:PENYELARAS OPERASI PELANCONG KELUAR NEGERI" > HT-022-2:PENYELARAS OPERASI PELANCONG KELUAR NEGERI</option>
                            <option value="HT-022-3:PENYELIA OPERASI PELANCONG KELUAR NEGERI" > HT-022-3:PENYELIA OPERASI PELANCONG KELUAR NEGERI</option>
                            <option value="HT-023-3:PEMANDU PELANCONG" > HT-023-3:PEMANDU PELANCONG</option>
                            <option value="HT-024-3:KETUA ROMBONGAN PELANCONG" > HT-024-3:KETUA ROMBONGAN PELANCONG</option>
                            <option value="HT-025-3:PEMANDU PELANCONG ALAM SEMULAJADI" > HT-025-3:PEMANDU PELANCONG ALAM SEMULAJADI</option>
                            <option value="HT-030-2:INDIAN RESTAURANT OPERATIONS ASSISTANT" > HT-030-2:INDIAN RESTAURANT OPERATIONS ASSISTANT</option>
                            <option value="HT-030-3:INDIAN RESTAURANT BANDHARI" > HT-030-3:INDIAN RESTAURANT BANDHARI</option>
                            <option value="HT-040-2:HOMESTAY OPERATOR" > HT-040-2:HOMESTAY OPERATOR</option>
                            <option value="HT-040-3:HOMESTAY  COORDINATOR" > HT-040-3:HOMESTAY  COORDINATOR</option>
                            <option value="HT-050-1:CHAMBERMAID" > HT-050-1:CHAMBERMAID</option>
                            <option value="HT-050-2:SENIOR CHAMBERMAID" > HT-050-2:SENIOR CHAMBERMAID</option>
                            <option value="HT-050-3:HOUSEKEEPING SUPERVISOR" > HT-050-3:HOUSEKEEPING SUPERVISOR</option>
                            <option value="HT-051-1:ATENDAN KAWASAN AWAM" > HT-051-1:ATENDAN KAWASAN AWAM</option>
                            <option value="HT-051-2:SENIOR PUBLIC ATTENDANT" > HT-051-2:SENIOR PUBLIC ATTENDANT</option>
                            <option value="HT-051-3:PUBLIC AREA SUPERVISOR" > HT-051-3:PUBLIC AREA SUPERVISOR</option>
                            <option value="HT-052-2:LINEN MAID" > HT-052-2:LINEN MAID</option>
                            <option value="HT-052-3:LINEN SUPERVISOR" > HT-052-3:LINEN SUPERVISOR</option>
                            <option value="HT-060-1:TOURISM TRANSPORTATION CLERK" > HT-060-1:TOURISM TRANSPORTATION CLERK</option>
                            <option value="HT-060-2:TOURISM TRANSPORTATION COORDINATOR" > HT-060-2:TOURISM TRANSPORTATION COORDINATOR</option>
                            <option value="HT-060-3:TOURISM TRANSPORTATION SUPERVISOR" > HT-060-3:TOURISM TRANSPORTATION SUPERVISOR</option>
                            <option value="HT-061-2:PEMANDU KENDERAAN PELANCONG" > HT-061-2:PEMANDU KENDERAAN PELANCONG</option>
                            <option value="HT-070-1:HYGIENE SENIOR OPERATOR" > HT-070-1:HYGIENE SENIOR OPERATOR</option>
                            <option value="HT-070-2:HYGIENE SENIOR OPERATOR" > HT-070-2:HYGIENE SENIOR OPERATOR</option>
                            <option value="HT-070-3:HYGIENE SUPERVISOR" > HT-070-3:HYGIENE SUPERVISOR</option>
                            <option value="HT-080-2:(SALES & MARKETING CLERK-CRUISE LINER)" > HT-080-2:(SALES & MARKETING CLERK-CRUISE LINER)</option>
                            <option value="HT-080-3:(ASSISTANT SALES & MARKETING EXECUTIVE-CRUISE LINER)" > HT-080-3:(ASSISTANT SALES & MARKETING EXECUTIVE-CRUISE LINER)</option>
                            <option value="HT-080-4:(SALES & MARKETING EXECUTIVE -CRUISE LINER)" > HT-080-4:(SALES & MARKETING EXECUTIVE -CRUISE LINER)</option>
                            <option value="HT-080-5:(ASSISTANT SALES & MARKETING -CRUISE LINER)" > HT-080-5:(ASSISTANT SALES & MARKETING -CRUISE LINER)</option>
                            <option value="HT-081-1:KEDI" > HT-081-1:KEDI</option>
                            <option value="HT-081-2:KEDI KANAN" > HT-081-2:KEDI KANAN</option>
                            <option value="HT-081-3:KETUA KEDI" > HT-081-3:KETUA KEDI</option>
                            <option value="HT-090-4:PENOLONG PENGURUS PENDANDAN RAMBUT" > HT-090-4:PENOLONG PENGURUS PENDANDAN RAMBUT</option>
                            <option value="HT-090-5:PENGURUS PENDANDAN RAMBUT" > HT-090-5:PENGURUS PENDANDAN RAMBUT</option>
                            <option value="HT-091-2:BARBER" > HT-091-2:BARBER</option>
                            <option value="HT-101-1:KERANI TEMPAHAN DAN TIKETAN" > HT-101-1:KERANI TEMPAHAN DAN TIKETAN</option>
                            <option value="HT-101-2:PENYELARAS TEMPAHAN DAN TIKETAN" > HT-101-2:PENYELARAS TEMPAHAN DAN TIKETAN</option>
                            <option value="HT-101-3:PENYELIA TEMPAHAN DAN TIKETAN" > HT-101-3:PENYELIA TEMPAHAN DAN TIKETAN</option>
                            <option value="HT-102-1:KERANI OPERASI PELANCONG DALAM NEGERI" > HT-102-1:KERANI OPERASI PELANCONG DALAM NEGERI</option>
                            <option value="HT-102-2:PENYELARAS OPERASI PELANCONG DALAM NEGERI" > HT-102-2:PENYELARAS OPERASI PELANCONG DALAM NEGERI</option>
                            <option value="HT-102-3:PENYELIA OPERASI PELANCONG DALAM NEGERI" > HT-102-3:PENYELIA OPERASI PELANCONG DALAM NEGERI</option>
                            <option value="HT-200-1:MICE CLERK" > HT-200-1:MICE CLERK</option>
                            <option value="HT-200-2:MICE COORDINATOR" > HT-200-2:MICE COORDINATOR</option>
                            <option value="HT-200-3:MICE SUPERVISOR" > HT-200-3:MICE SUPERVISOR</option>
                            <option value="HT-300-1:JUNIOR GROOM" > HT-300-1:JUNIOR GROOM</option>
                            <option value="HT-300-2:SENIOR GROOM" > HT-300-2:SENIOR GROOM</option>
                            <option value="HT-300-3:SENIOR EQUINE ADMINISTRATOR" > HT-300-3:SENIOR EQUINE ADMINISTRATOR</option>
                            <option value="I-031-3:PEGAWAI LATIHAN VOKASIONAL" > I-031-3:PEGAWAI LATIHAN VOKASIONAL</option>
                            <option value="I-031-4:EKSEKUTIF LATIHAN VOKASIONAL" > I-031-4:EKSEKUTIF LATIHAN VOKASIONAL</option>
                            <option value="I-031-5:PENGURUS LATIHAN VOKASIONAL" > I-031-5:PENGURUS LATIHAN VOKASIONAL</option>
                            <option value="ID-010-1:ORNAMENTAL METAL MAKER" > ID-010-1:ORNAMENTAL METAL MAKER</option>
                            <option value="ID-010-2:ORNAMENTAL METAL SENIOR MAKER" > ID-010-2:ORNAMENTAL METAL SENIOR MAKER</option>
                            <option value="ID-010-3:ORNAMENTAL METAL MAKING SUPERVISOR" > ID-010-3:ORNAMENTAL METAL MAKING SUPERVISOR</option>
                            <option value="ID-020-1:DOORS AND WINDOWS MAKER" > ID-020-1:DOORS AND WINDOWS MAKER</option>
                            <option value="ID-020-2:DOORS AND WINDOWS SENIOR MAKER" > ID-020-2:DOORS AND WINDOWS SENIOR MAKER</option>
                            <option value="ID-020-3:DOORS AND WINDOWS MAKING SUPERVISOR" > ID-020-3:DOORS AND WINDOWS MAKING SUPERVISOR</option>
                            <option value="ID-021-1:DECORATIVE CEILINGS INSTALLER" > ID-021-1:DECORATIVE CEILINGS INSTALLER</option>
                            <option value="ID-021-2:DECORATIVE CEILINGS SENIOR INSTALLER" > ID-021-2:DECORATIVE CEILINGS SENIOR INSTALLER</option>
                            <option value="ID-021-3:DECORATIVE CEILINGS INSTALLATION SUPERVISOR" > ID-021-3:DECORATIVE CEILINGS INSTALLATION SUPERVISOR</option>
                            <option value="ID-030-2:DOORS AND WINDOWS DESIGNING JUNIOR ARTIST" > ID-030-2:DOORS AND WINDOWS DESIGNING JUNIOR ARTIST</option>
                            <option value="ID-030-3:DOORS AND WINDOWS DESIGNING TECHNICIAN" > ID-030-3:DOORS AND WINDOWS DESIGNING TECHNICIAN</option>
                            <option value="IE01:PROSES AUTOMASI" > IE01:PROSES AUTOMASI</option>
                            <option value="IT-010-2:PEMBANGUNAN APLIKASI-PENGATURCARA" > IT-010-2:PEMBANGUNAN APLIKASI-PENGATURCARA</option>
                            <option value="IT-010-3:PEMBANGUNAN APLIKASI-PENGATURCARA UTAMA" > IT-010-3:PEMBANGUNAN APLIKASI-PENGATURCARA UTAMA</option>
                            <option value="IT-020-2:PEMBANTU JURUTEKNIK SISTEM KOMPUTER" > IT-020-2:PEMBANTU JURUTEKNIK SISTEM KOMPUTER</option>
                            <option value="IT-020-3:JURUTEKNIK SISTEM KOMPUTER" > IT-020-3:JURUTEKNIK SISTEM KOMPUTER</option>
                            <option value="IT-020-4:PEMBANTU EKSEKUTIF SISTEM KOMPUTER" > IT-020-4:PEMBANTU EKSEKUTIF SISTEM KOMPUTER</option>
                            <option value="IT-020-5:EKSEKUTIF SISTEM KOMPUTER" > IT-020-5:EKSEKUTIF SISTEM KOMPUTER</option>
                            <option value="IT-030-2:PEMBANTU JURUTEKNIK RANGKAIAN KOMPUTER" > IT-030-2:PEMBANTU JURUTEKNIK RANGKAIAN KOMPUTER</option>
                            <option value="IT-030-3:JURUTEKNIK RANGKAIAN KOMPUTER" > IT-030-3:JURUTEKNIK RANGKAIAN KOMPUTER</option>
                            <option value="IT-040-2:ARTIS MULTIMEDIA-ANIMATOR" > IT-040-2:ARTIS MULTIMEDIA-ANIMATOR</option>
                            <option value="IT-050-2:ARTIS MULTIMEDIA-VISUAL" > IT-050-2:ARTIS MULTIMEDIA-VISUAL</option>
                            <option value="IT-060-3:PEREKABENTUK MULTIMEDIA-ANIMASI & VISUAL" > IT-060-3:PEREKABENTUK MULTIMEDIA-ANIMASI & VISUAL</option>
                            <option value="IT-070-2:ARTIS MULTIMEDIA-PENGARANGAN" > IT-070-2:ARTIS MULTIMEDIA-PENGARANGAN</option>
                            <option value="IT-070-3:PEREKABENTUK MULTIMEDIA - PENGARANGAN" > IT-070-3:PEREKABENTUK MULTIMEDIA - PENGARANGAN</option>
                            <option value="IT-080-2:PEMBANTU TADBIR SISTEM MAKLUMAT" > IT-080-2:PEMBANTU TADBIR SISTEM MAKLUMAT</option>
                            <option value="IT-080-3:PENYELIA PEMBANTU TADBIR SISTEM MAKLUMAT" > IT-080-3:PENYELIA PEMBANTU TADBIR SISTEM MAKLUMAT</option>
                            <option value="IT-090-5:ICT SYSTEM SECURITY TECHNOLOGIST" > IT-090-5:ICT SYSTEM SECURITY TECHNOLOGIST</option>
                            <option value="IT-090-6:ICT SYSTEM SECURITY PRINCIPLE TECHNOLOGIST" > IT-090-6:ICT SYSTEM SECURITY PRINCIPLE TECHNOLOGIST</option>
                            <option value="IT-090-7:ICT SYSTEM SECURITY SPECIALIST" > IT-090-7:ICT SYSTEM SECURITY SPECIALIST</option>
                            <option value="J-010-1:PLASTIC INJECTION MOULDING PRODUCTION JUNIOR TECHNICIAN" > J-010-1:PLASTIC INJECTION MOULDING PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="J-010-2:PLASTIC INJECTION MOULDING PRODUCTION TECHNICIAN" > J-010-2:PLASTIC INJECTION MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="J-010-3:PLASTIC INJECTION MOULDING PRODUCTION SENIOR TECHNICIAN" > J-010-3:PLASTIC INJECTION MOULDING PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="J-011-1:PLASTIC EXTRUSION PRODUCTION JUNIOR TECHNICIAN" > J-011-1:PLASTIC EXTRUSION PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="J-011-2:PLASTIC EXTRUSION PRODUCTION TECHNICIAN" > J-011-2:PLASTIC EXTRUSION PRODUCTION TECHNICIAN</option>
                            <option value="J-011-3:PLASTIC EXTRUSION PRODUCTION SENIOR TECHNICIAN" > J-011-3:PLASTIC EXTRUSION PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="J-012-1:PLASTIC ROTATIONAL MOULDING PRODUCTION JUNIOR TECHNICIAN" > J-012-1:PLASTIC ROTATIONAL MOULDING PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="J-012-2:PLASTIC ROTATIONAL MOULDING PRODUCTION TECHNICIAN" > J-012-2:PLASTIC ROTATIONAL MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="J-012-3:PLASTIC ROTATIONAL MOULDING PRODUCTION SENIOR TECHNICIAN" > J-012-3:PLASTIC ROTATIONAL MOULDING PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="J-013-1:PLASTIC COMPRESSION MOULDING PRODUCTION JUNIOR TECHNICIAN (THERMOSET)" > J-013-1:PLASTIC COMPRESSION MOULDING PRODUCTION JUNIOR TECHNICIAN (THERMOSET)</option>
                            <option value="J-013-2:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN" > J-013-2:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="J-013-3:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN" > J-013-3:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="J-014-1:PLASTIC BLOW MOULDING PRODUCTION JUNIOR TECHNICIAN" > J-014-1:PLASTIC BLOW MOULDING PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="J-014-2:PLASTIC BLOW MOULDING PRODUCTION TECHNICIAN" > J-014-2:PLASTIC BLOW MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="J-014-3:PLASTIC BLOW MOULDING PRODUCTION SENIOR TECHNICIAN" > J-014-3:PLASTIC BLOW MOULDING PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="J-020-4:PLASTIC PRODUCTION ASSISTANT MANAGER (THERMOPLASTIC)" > J-020-4:PLASTIC PRODUCTION ASSISTANT MANAGER (THERMOPLASTIC)</option>
                            <option value="J-020-5:PLASTIC PRODUCTION MANAGER (THERMOPLASTIC)" > J-020-5:PLASTIC PRODUCTION MANAGER (THERMOPLASTIC)</option>
                            <option value="K-011-1:PEMBUAT PAKAIAN WANITA" > K-011-1:PEMBUAT PAKAIAN WANITA</option>
                            <option value="K-011-2:PEMBUAT PAKAIAN WANITA KANAN" > K-011-2:PEMBUAT PAKAIAN WANITA KANAN</option>
                            <option value="K-011-3:PENYELIA PEMBUAT PAKAIAN WANITA" > K-011-3:PENYELIA PEMBUAT PAKAIAN WANITA</option>
                            <option value="K-012-1:PEMBUAT PAKAIAN WANITA" > K-012-1:PEMBUAT PAKAIAN WANITA</option>
                            <option value="K-012-2:PEMBUAT PAKAIAN WANITA KANAN" > K-012-2:PEMBUAT PAKAIAN WANITA KANAN</option>
                            <option value="K-012-3:PENYELIA PEMBUAT PAKAIAN WANITA" > K-012-3:PENYELIA PEMBUAT PAKAIAN WANITA</option>
                            <option value="K-022-4:EKSEKUTIF FESYEN DAN PAKAIAN" > K-022-4:EKSEKUTIF FESYEN DAN PAKAIAN</option>
                            <option value="K-022-5:PENGURUS FESYEN DAN PAKAIAN" > K-022-5:PENGURUS FESYEN DAN PAKAIAN</option>
                            <option value="K-030-1:INDUSTRIAL SEWING MACHINE TECHNICIAN" > K-030-1:INDUSTRIAL SEWING MACHINE TECHNICIAN</option>
                            <option value="K-030-2:INDUSTRIAL SEWING MACHINE SENIOR TECHNICIAN" > K-030-2:INDUSTRIAL SEWING MACHINE SENIOR TECHNICIAN</option>
                            <option value="K-030-3:INDUSTRIAL SEWING MACHINE SUPERVISOR" > K-030-3:INDUSTRIAL SEWING MACHINE SUPERVISOR</option>
                            <option value="K-040-1:OPERATOR MESIN JAHITAN INDUSTRI (INDUSTRIAL SEWING MACHINE OPERATOR)" > K-040-1:OPERATOR MESIN JAHITAN INDUSTRI (INDUSTRIAL SEWING MACHINE OPERATOR)</option>
                            <option value="K-040-2:OPERATOR KANAN MESIN JAHITAN INDUSTRI (INDUSTRIAL SEWING MACHINE SENIOR OPERATOR)" > K-040-2:OPERATOR KANAN MESIN JAHITAN INDUSTRI (INDUSTRIAL SEWING MACHINE SENIOR OPERATOR)</option>
                            <option value="K-040-3:PENYELIA JAHITAN INDUSTRI (INDUSTRIAL SEWING SUPERVISOR)" > K-040-3:PENYELIA JAHITAN INDUSTRI (INDUSTRIAL SEWING SUPERVISOR)</option>
                            <option value="K-050-2:PENYELIA MAKMAL TEKSTIL" > K-050-2:PENYELIA MAKMAL TEKSTIL</option>
                            <option value="K-050-3:PENYELIA MAKMAL TEKSTIL" > K-050-3:PENYELIA MAKMAL TEKSTIL</option>
                            <option value="K-060-2:PENYELIA PEMOTONG INDUSTRI-TEKSTIL (INDUSTRIAL CUTTING 0PERATOR- TEXTILE)" > K-060-2:PENYELIA PEMOTONG INDUSTRI-TEKSTIL (INDUSTRIAL CUTTING 0PERATOR- TEXTILE)</option>
                            <option value="K-060-3:PENYELIA PEMOTONG INDUSTRI-TEKSTIL (INDUSTRIAL CUTTING SUPERVISOR- TEXTILE)" > K-060-3:PENYELIA PEMOTONG INDUSTRI-TEKSTIL (INDUSTRIAL CUTTING SUPERVISOR- TEXTILE)</option>
                            <option value="K-070-1:APPAREL FINISHING OPERATOR" > K-070-1:APPAREL FINISHING OPERATOR</option>
                            <option value="K-070-2:APPAREL FINISHING SENIOR OPERATOR" > K-070-2:APPAREL FINISHING SENIOR OPERATOR</option>
                            <option value="K-070-3:APPAREL FINISHING SUPERVISOR" > K-070-3:APPAREL FINISHING SUPERVISOR</option>
                            <option value="L-010-1:KERANI TEMPAHAN DAN TIKETAN" > L-010-1:KERANI TEMPAHAN DAN TIKETAN</option>
                            <option value="L-010-2:KERANI TEMPAHAN DAN TIKETAN" > L-010-2:KERANI TEMPAHAN DAN TIKETAN</option>
                            <option value="L-010-3:PENYELIA TEMPAHAN DAN TIKETAN" > L-010-3:PENYELIA TEMPAHAN DAN TIKETAN</option>
                            <option value="L-020-1:KERANI OPERASI PELANCONG DALAM NEGERI" > L-020-1:KERANI OPERASI PELANCONG DALAM NEGERI</option>
                            <option value="L-020-2:PENYELARAS OPERASI PELANCONG DALAM NEGERI" > L-020-2:PENYELARAS OPERASI PELANCONG DALAM NEGERI</option>
                            <option value="L-020-3:PENYELIA OPERASI PELANCONG DALAM NEGERI" > L-020-3:PENYELIA OPERASI PELANCONG DALAM NEGERI</option>
                            <option value="L-030-3:PEMANDU PELANCONG" > L-030-3:PEMANDU PELANCONG</option>
                            <option value="L-040-1:PEMBANTU PENYEDIA MAKANAN" > L-040-1:PEMBANTU PENYEDIA MAKANAN</option>
                            <option value="L-040-2:PENYEDIA MAKANAN" > L-040-2:PENYEDIA MAKANAN</option>
                            <option value="L-040-3:PENYELIA/KETUA SEKSYEN PENYEDIAAN MAKANAN" > L-040-3:PENYELIA/KETUA SEKSYEN PENYEDIAAN MAKANAN</option>
                            <option value="L-040-4:PENOLONG EKSEKUTIF PENYEDIA MAKANAN" > L-040-4:PENOLONG EKSEKUTIF PENYEDIA MAKANAN</option>
                            <option value="L-040-5:EKSEKUTIF PENYEDIA MAKANAN" > L-040-5:EKSEKUTIF PENYEDIA MAKANAN</option>
                            <option value="L-041-1:PEMBANTU PENYEDIA MAKANAN" > L-041-1:PEMBANTU PENYEDIA MAKANAN</option>
                            <option value="L-041-2:PENYEDIA MAKANAN" > L-041-2:PENYEDIA MAKANAN</option>
                            <option value="L-041-3:PENYELIA/KETUA SEKSYEN PENYEDIAAN MAKANAN" > L-041-3:PENYELIA/KETUA SEKSYEN PENYEDIAAN MAKANAN</option>
                            <option value="L-050-1:PRAMUSAJI" > L-050-1:PRAMUSAJI</option>
                            <option value="L-050-2:KAPTAN MAKANAN & MINUMAN" > L-050-2:KAPTAN MAKANAN & MINUMAN</option>
                            <option value="L-050-3:PENYELIA MAKANAN & MINUMAN" > L-050-3:PENYELIA MAKANAN & MINUMAN</option>
                            <option value="L-050-4:PENGURUS BAHAGIAN MAKANAN & MINUMAN" > L-050-4:PENGURUS BAHAGIAN MAKANAN & MINUMAN</option>
                            <option value="L-050-5:PENGURUS MAKANAN & MINUMAN" > L-050-5:PENGURUS MAKANAN & MINUMAN</option>
                            <option value="L-070-3:KETUA ROMBONGAN PELANCONG" > L-070-3:KETUA ROMBONGAN PELANCONG</option>
                            <option value="L-080-2:PEMANDU KENDERAAN PELANCONG" > L-080-2:PEMANDU KENDERAAN PELANCONG</option>
                            <option value="L-090-1:TOURISM TRANSPORTATION CLERK" > L-090-1:TOURISM TRANSPORTATION CLERK</option>
                            <option value="L-090-2:TOURISM TRANSPORTATION COORDINATOR" > L-090-2:TOURISM TRANSPORTATION COORDINATOR</option>
                            <option value="L-090-3:TOURISM TRANSPORTATION SUPERVISOR" > L-090-3:TOURISM TRANSPORTATION SUPERVISOR</option>
                            <option value="L-100-1:PEMBANTU PENYEDIA ROTI" > L-100-1:PEMBANTU PENYEDIA ROTI</option>
                            <option value="L-100-2:PENYEDIA ROTI" > L-100-2:PENYEDIA ROTI</option>
                            <option value="L-100-3:KETUA PENYEDIA ROTI" > L-100-3:KETUA PENYEDIA ROTI</option>
                            <option value="L-110-1:PEMBANTU PENYEDIA PASTRI" > L-110-1:PEMBANTU PENYEDIA PASTRI</option>
                            <option value="L-110-2:PENYEDIA PASTRI" > L-110-2:PENYEDIA PASTRI</option>
                            <option value="L-110-3:KETUA SEKSYEN PENYEDIA PASTRI" > L-110-3:KETUA SEKSYEN PENYEDIA PASTRI</option>
                            <option value="L-120-1:CHAMBERMAID" > L-120-1:CHAMBERMAID</option>
                            <option value="L-120-2:SENIOR CHAMBERMAID" > L-120-2:SENIOR CHAMBERMAID</option>
                            <option value="L-120-3:HOUSEKEEPING SUPERVISOR" > L-120-3:HOUSEKEEPING SUPERVISOR</option>
                            <option value="L-121-1:ATENDAN KAWASAN AWAM" > L-121-1:ATENDAN KAWASAN AWAM</option>
                            <option value="L-121-2:SENIOR PUBLIC ATTENDANT" > L-121-2:SENIOR PUBLIC ATTENDANT</option>
                            <option value="L-121-3:PUBLIC AREA SUPERVISOR" > L-121-3:PUBLIC AREA SUPERVISOR</option>
                            <option value="L-122-2:LINEN MAID" > L-122-2:LINEN MAID</option>
                            <option value="L-140-1:KERANI KONVENSYEN" > L-140-1:KERANI KONVENSYEN</option>
                            <option value="L-140-2:PENYELARAS KONVENSYEN" > L-140-2:PENYELARAS KONVENSYEN</option>
                            <option value="L-140-3:PENYELIA KONVENSYEN" > L-140-3:PENYELIA KONVENSYEN</option>
                            <option value="L-150-3:LINEN SUPERVISOR" > L-150-3:LINEN SUPERVISOR</option>
                            <option value="L-150-4:PENOLONG PENGEMASAN" > L-150-4:PENOLONG PENGEMASAN</option>
                            <option value="L-150-5:EKSEKUTIF PENGEMASAN" > L-150-5:EKSEKUTIF PENGEMASAN</option>
                            <option value="L-160-2:PEMBANTU KAUNTER HADAPAN" > L-160-2:PEMBANTU KAUNTER HADAPAN</option>
                            <option value="L-160-3:PENYELIA KAUNTER HADAPAN" > L-160-3:PENYELIA KAUNTER HADAPAN</option>
                            <option value="L-160-4:PENGURUS BERTUGAS KAUNTER HADAPAN" > L-160-4:PENGURUS BERTUGAS KAUNTER HADAPAN</option>
                            <option value="L-160-5:PENGURUS KAUNTER HADAPAN" > L-160-5:PENGURUS KAUNTER HADAPAN</option>
                            <option value="L-170-1:PEMBANTU PENYEWAAN KERETAN" > L-170-1:PEMBANTU PENYEWAAN KERETAN</option>
                            <option value="L-170-2:PEGAWAI OPERASI PENYEWAAN KERETA" > L-170-2:PEGAWAI OPERASI PENYEWAAN KERETA</option>
                            <option value="L-170-3:PENYELIA STESEN PENYEWAAN KERETA" > L-170-3:PENYELIA STESEN PENYEWAAN KERETA</option>
                            <option value="L-170-4:PENGURUS STESEN PENYEWAAN KERETA" > L-170-4:PENGURUS STESEN PENYEWAAN KERETA</option>
                            <option value="L-170-5:PENGURUS OPERASI PENYEWAAN KERETA" > L-170-5:PENGURUS OPERASI PENYEWAAN KERETA</option>
                            <option value="L-180-1:KERANI JUALAN (PENGEMBARAAN)" > L-180-1:KERANI JUALAN (PENGEMBARAAN)</option>
                            <option value="L-180-2:PENYELARAS JUALAN (PENGEMBARAAN" > L-180-2:PENYELARAS JUALAN (PENGEMBARAAN</option>
                            <option value="L-180-3:PENYELIA JUALAN (PENGEMBARAAN)" > L-180-3:PENYELIA JUALAN (PENGEMBARAAN)</option>
                            <option value="L-180-4:EKSEKUTIF JUALAN (PENGEMBARAAN)" > L-180-4:EKSEKUTIF JUALAN (PENGEMBARAAN)</option>
                            <option value="L-180-5:PENGURUS JUALAN (PENGEMBARAAN)" > L-180-5:PENGURUS JUALAN (PENGEMBARAAN)</option>
                            <option value="L-190-1:ATENDAN TAMAN AIR" > L-190-1:ATENDAN TAMAN AIR</option>
                            <option value="L-190-2:PENOLONG PENYELIA TAMAN AIR" > L-190-2:PENOLONG PENYELIA TAMAN AIR</option>
                            <option value="L-190-3:PENYELIA TAMAN AIR" > L-190-3:PENYELIA TAMAN AIR</option>
                            <option value="L-191-1:ATENDAN TAMAN KERING" > L-191-1:ATENDAN TAMAN KERING</option>
                            <option value="L-191-2:PENOLONG PENYELIA TAMAN KERING" > L-191-2:PENOLONG PENYELIA TAMAN KERING</option>
                            <option value="L-191-3:PENYELIA TAMAN KERING" > L-191-3:PENYELIA TAMAN KERING</option>
                            <option value="L-200-4:EKSEKUTIF OPERASI TAMAN TEMA" > L-200-4:EKSEKUTIF OPERASI TAMAN TEMA</option>
                            <option value="L-200-5:PENGURUS OPERASI TAMAN TEMA" > L-200-5:PENGURUS OPERASI TAMAN TEMA</option>
                            <option value="L-201-3:PEMANDU PELANCONG ALAM SEMULAJADI" > L-201-3:PEMANDU PELANCONG ALAM SEMULAJADI</option>
                            <option value="L-203-1:CONCIERGE BELL SERVICE" > L-203-1:CONCIERGE BELL SERVICE</option>
                            <option value="L-203-2:CONCIERGE COORDINATOR" > L-203-2:CONCIERGE COORDINATOR</option>
                            <option value="L-203-3:CONCIERCE SUPERVISOR" > L-203-3:CONCIERCE SUPERVISOR</option>
                            <option value="L-203-4:CHEF CONCIERGE" > L-203-4:CHEF CONCIERGE</option>
                            <option value="LE-010-1:LANDSCAPE CONSTRUCTION ATTENDANT" > LE-010-1:LANDSCAPE CONSTRUCTION ATTENDANT</option>
                            <option value="LE-010-2:LANDSCAPE CONSTRUCTION COORDINATOR" > LE-010-2:LANDSCAPE CONSTRUCTION COORDINATOR</option>
                            <option value="LE-010-3:LANDSCAPE CONSTRUCTION SUPERVISOR" > LE-010-3:LANDSCAPE CONSTRUCTION SUPERVISOR</option>
                            <option value="LIF1:LIFT INSTALLER" > LIF1:LIFT INSTALLER</option>
                            <option value="LIF2:LIFT INSTALLER" > LIF2:LIFT INSTALLER</option>
                            <option value="LIF3:LIFT INSTALLATION SUPERVISOR" > LIF3:LIFT INSTALLATION SUPERVISOR</option>
                            <option value="LIF4:LIFT INSTALLATION ASSISTANT MANAGER" > LIF4:LIFT INSTALLATION ASSISTANT MANAGER</option>
                            <option value="LIF5:LIFT INSTALLATION MANAGER" > LIF5:LIFT INSTALLATION MANAGER</option>
                            <option value="LIT2:LIFT TESTER" > LIT2:LIFT TESTER</option>
                            <option value="LIT3:LIFT TESTING SUPERVISOR" > LIT3:LIFT TESTING SUPERVISOR</option>
                            <option value="LSC01:LANDSCAPE CONSTRUCTION ATTENDANT" > LSC01:LANDSCAPE CONSTRUCTION ATTENDANT</option>
                            <option value="LSC02:LANDSCAPE CONSTRUCTION COORDINATOR" > LSC02:LANDSCAPE CONSTRUCTION COORDINATOR</option>
                            <option value="LSC03:LANDSCAPE CONSTRUCTION SUPERVISOR" > LSC03:LANDSCAPE CONSTRUCTION SUPERVISOR</option>
                            <option value="LWH2:WHEEL LOADER 0PERATOR" > LWH2:WHEEL LOADER 0PERATOR</option>
                            <option value="LWP1:LIGHTWEIGHT PANEL INSTALLER" > LWP1:LIGHTWEIGHT PANEL INSTALLER</option>
                            <option value="LWP2:LIGHTWEIGHT PANEL INSTALLER" > LWP2:LIGHTWEIGHT PANEL INSTALLER</option>
                            <option value="LWP3:LIGHTWEIGHT PANEL SUPERVISOR" > LWP3:LIGHTWEIGHT PANEL SUPERVISOR</option>
                            <option value="M-020-1:PEMBANTU DOKUMENTASI PENGHANTARAN" > M-020-1:PEMBANTU DOKUMENTASI PENGHANTARAN</option>
                            <option value="M-020-2:PENYELARAS OPERASI PENGHANTARAN" > M-020-2:PENYELARAS OPERASI PENGHANTARAN</option>
                            <option value="M-020-3:PENYELIA OPERASI PENGHANTARAN" > M-020-3:PENYELIA OPERASI PENGHANTARAN</option>
                            <option value="M-020-4:EKSEKUTIF OPERASI PENGHANTARAN" > M-020-4:EKSEKUTIF OPERASI PENGHANTARAN</option>
                            <option value="M-020-5:PENGURUS OPERASI PENGHANTARAN" > M-020-5:PENGURUS OPERASI PENGHANTARAN</option>
                            <option value="M-030-2:MOTOR UNDERWRITING CLERK" > M-030-2:MOTOR UNDERWRITING CLERK</option>
                            <option value="M-030-3:MOTOR UNDERWRITING EXECUTIVE" > M-030-3:MOTOR UNDERWRITING EXECUTIVE</option>
                            <option value="M-031-2:FIRE UNDERWRITING CLERK" > M-031-2:FIRE UNDERWRITING CLERK</option>
                            <option value="M-031-3:FIRE UNDERWRITING EXECUTIVE" > M-031-3:FIRE UNDERWRITING EXECUTIVE</option>
                            <option value="M-032-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - PERSONAL (HEALTH INSURANCE)" > M-032-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - PERSONAL (HEALTH INSURANCE)</option>
                            <option value="M-032-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - PERSONAL(HEALTH INSURANCE)" > M-032-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - PERSONAL(HEALTH INSURANCE)</option>
                            <option value="M-033-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - PERSONAL (PERSONAL ACCIDENT)" > M-033-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - PERSONAL (PERSONAL ACCIDENT)</option>
                            <option value="M-033-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - PERSONAL (PERSONAL ACCIDENT)" > M-033-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - PERSONAL (PERSONAL ACCIDENT)</option>
                            <option value="M-034-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (PRODUCT LIABILITY INSURANCE)" > M-034-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (PRODUCT LIABILITY INSURANCE)</option>
                            <option value="M-034-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - LIABILITY (PRODUCT LIABILITY INSURANCE)" > M-034-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - LIABILITY (PRODUCT LIABILITY INSURANCE)</option>
                            <option value="M-035-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (PUBLIC LIABILITY / CGL)" > M-035-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (PUBLIC LIABILITY / CGL)</option>
                            <option value="M-035-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - LIABILITY (PUBLIC LIABILITY / CGL)" > M-035-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - LIABILITY (PUBLIC LIABILITY / CGL)</option>
                            <option value="M-036-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (PROFESSIONAL INDEMNITY INSURANCE)" > M-036-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (PROFESSIONAL INDEMNITY INSURANCE)</option>
                            <option value="M-036-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE -LIABILITY (PROFESSIONAL INDEMNITY INSURANCE)" > M-036-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE -LIABILITY (PROFESSIONAL INDEMNITY INSURANCE)</option>
                            <option value="M-037-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (DIRECTORS AND OFFICERS LIABILITY INSURANCE)" > M-037-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - LIABILITY (DIRECTORS AND OFFICERS LIABILITY INSURANCE)</option>
                            <option value="M-037-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - LIABILITY (DIRECTORS AND OFFICERS LIABILITY INSURANCE)" > M-037-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE - LIABILITY (DIRECTORS AND OFFICERS LIABILITY INSURANCE)</option>
                            <option value="M-038-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK GENERAL ACCIDENT (WORKMENS COMPENSATION / EL)" > M-038-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK GENERAL ACCIDENT (WORKMENS COMPENSATION / EL)</option>
                            <option value="M-038-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT(WORKMENS COMPENSATION/EL)" > M-038-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT(WORKMENS COMPENSATION/EL)</option>
                            <option value="M-039-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (PLATE GLASS)" > M-039-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (PLATE GLASS)</option>
                            <option value="M-039-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (PLATE GLASS)" > M-039-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (PLATE GLASS)</option>
                            <option value="M-040-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (BURGLARY INSURANCE)" > M-040-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (BURGLARY INSURANCE)</option>
                            <option value="M-040-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (BURGLARY INSURANCE)" > M-040-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (BURGLARY INSURANCE)</option>
                            <option value="M-041-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - GENERAL ACCIDENT (ALL RISKS (PERSONNAL EFFECTS)" > M-041-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK - GENERAL ACCIDENT (ALL RISKS (PERSONNAL EFFECTS)</option>
                            <option value="M-041-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE -GENERAL ACCIDENT (ALL RISKS (PERSONNAL EFFECTS)" > M-041-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE -GENERAL ACCIDENT (ALL RISKS (PERSONNAL EFFECTS)</option>
                            <option value="M-042-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK GENERAL ACCIDENT (MONEY INSURANCE)" > M-042-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK GENERAL ACCIDENT (MONEY INSURANCE)</option>
                            <option value="M-042-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (MONEY INSURANCE)" > M-042-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (MONEY INSURANCE)</option>
                            <option value="M-043-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (FIDELITY GUARANTEE)" > M-043-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (FIDELITY GUARANTEE)</option>
                            <option value="M-043-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (FIDELITY GUARANTEE)" > M-043-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (FIDELITY GUARANTEE)</option>
                            <option value="M-044-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (EQUIPMENT ALL RISKS INSURANCE)" > M-044-2:MISCELLANEOUS ACCIDENT UNDERWRITING CLERK-GENERAL ACCIDENT (EQUIPMENT ALL RISKS INSURANCE)</option>
                            <option value="M-044-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (EQUIPMENT ALL RISKS INSURANCE)" > M-044-3:MISCELLANEOUS ACCIDENT UNDERWRITING EXECUTIVE-GENERAL ACCIDENT (EQUIPMENT ALL RISKS INSURANCE)</option>
                            <option value="M-045-2:MARINE CARGO UNDERWRITING CLERK" > M-045-2:MARINE CARGO UNDERWRITING CLERK</option>
                            <option value="M-045-3:MARINE CARGO UNDERWRITING EXECUTIVE" > M-045-3:MARINE CARGO UNDERWRITING EXECUTIVE</option>
                            <option value="M-046-2:ENGINEERING INSURANCE UNDERWRITING CLERK" > M-046-2:ENGINEERING INSURANCE UNDERWRITING CLERK</option>
                            <option value="M-046-3:ENGINEERING INSURANCE UNDERWRITING EXECUTIVE" > M-046-3:ENGINEERING INSURANCE UNDERWRITING EXECUTIVE</option>
                            <option value="M-047-2:KERANI INSURAN HAYAT" > M-047-2:KERANI INSURAN HAYAT</option>
                            <option value="M-047-3:EKSEKUTIF INSURAN HAYAT" > M-047-3:EKSEKUTIF INSURAN HAYAT</option>
                            <option value="M-050-1:KERANI" > M-050-1:KERANI</option>
                            <option value="M-050-2:PEMBANTU PENTADBIRAN" > M-050-2:PEMBANTU PENTADBIRAN</option>
                            <option value="M-050-3:PENTADBIR ELEKTRONIK" > M-050-3:PENTADBIR ELEKTRONIK</option>
                            <option value="M-052-1:SETIAUSAHA RENDAH" > M-052-1:SETIAUSAHA RENDAH</option>
                            <option value="M-052-2:SETIAUSAHA" > M-052-2:SETIAUSAHA</option>
                            <option value="M-052-3:SETIAUSAHA KORPORAT EKSEKUTIF" > M-052-3:SETIAUSAHA KORPORAT EKSEKUTIF</option>
                            <option value="M-053-1:KERANI RENDAH GUAMAN" > M-053-1:KERANI RENDAH GUAMAN</option>
                            <option value="M-053-2:KERANI GUAMAN" > M-053-2:KERANI GUAMAN</option>
                            <option value="M-053-3:KETUA KERANI GUAMAN" > M-053-3:KETUA KERANI GUAMAN</option>
                            <option value="MC-010-1:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL" > MC-010-1:PEMBANTU JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL</option>
                            <option value="MC-010-2:JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL" > MC-010-2:JURUTEKNIK ALATAN KEPERSISAN MEKANIKAL</option>
                            <option value="MC-010-3:JURUTEKNIK KANAN ALATAN KEPERSISAN MEKANIKAL" > MC-010-3:JURUTEKNIK KANAN ALATAN KEPERSISAN MEKANIKAL</option>
                            <option value="MC-010-4:MECHANICAL PRECISION INSTRUMENT ASSISTANT TECHNOLOGIST" > MC-010-4:MECHANICAL PRECISION INSTRUMENT ASSISTANT TECHNOLOGIST</option>
                            <option value="MC-010-5:MECHANICAL PRECISION INSTRUMENT TECHNOLOGIST" > MC-010-5:MECHANICAL PRECISION INSTRUMENT TECHNOLOGIST</option>
                            <option value="MC-011-2:WATCH TECHNICIAN" > MC-011-2:WATCH TECHNICIAN</option>
                            <option value="MC-011-3:WATCH MAKER" > MC-011-3:WATCH MAKER</option>
                            <option value="MC-020-4:(ROBOTIC TECHNOLOGIST)" > MC-020-4:(ROBOTIC TECHNOLOGIST)</option>
                            <option value="MC-020-5:(ROBOTIC SENIOR TECHNOLOGIST)" > MC-020-5:(ROBOTIC SENIOR TECHNOLOGIST)</option>
                            <option value="MC-030-2:PEMBUAT PERKAKASAN-ACUAN SUNTIKAN PLASTIK" > MC-030-2:PEMBUAT PERKAKASAN-ACUAN SUNTIKAN PLASTIK</option>
                            <option value="MC-030-3:PEMBUAT PERKAKASAN KANAN-ACUAN SUNTIKAN PLASTIK" > MC-030-3:PEMBUAT PERKAKASAN KANAN-ACUAN SUNTIKAN PLASTIK</option>
                            <option value="MC-031-2:TOOLMAKER-METAL STAMPING DIE" > MC-031-2:TOOLMAKER-METAL STAMPING DIE</option>
                            <option value="MC-031-3:SENIOR TOOLMAKER-METAL STAMPING DIE" > MC-031-3:SENIOR TOOLMAKER-METAL STAMPING DIE</option>
                            <option value="MC-032-2:COMPUTER NUMERICAL CONTROL (CNC) MACHINIST" > MC-032-2:COMPUTER NUMERICAL CONTROL (CNC) MACHINIST</option>
                            <option value="MC-032-3:COMPUTER NUMERICAL CONTROL (CNC) MACHINING TECHNICIAN" > MC-032-3:COMPUTER NUMERICAL CONTROL (CNC) MACHINING TECHNICIAN</option>
                            <option value="MC-040-4:ASSISTANT INDUSTRIAL PRODUCT DESIGNER" > MC-040-4:ASSISTANT INDUSTRIAL PRODUCT DESIGNER</option>
                            <option value="MC-040-5:INDUSTRIAL PRODUCT DESIGNER" > MC-040-5:INDUSTRIAL PRODUCT DESIGNER</option>
                            <option value="MC-050-1:PEMESIN AM" > MC-050-1:PEMESIN AM</option>
                            <option value="MC-050-2:PEMESIN" > MC-050-2:PEMESIN</option>
                            <option value="MC-050-3:PEMESIN KANAN" > MC-050-3:PEMESIN KANAN</option>
                            <option value="MC-050-4:EKSEKUTIF PEMBUATAN (CAD/CAM)" > MC-050-4:EKSEKUTIF PEMBUATAN (CAD/CAM)</option>
                            <option value="MC-050-5:SPESIALIS PEMBUATAN (CAD/CAM)" > MC-050-5:SPESIALIS PEMBUATAN (CAD/CAM)</option>
                            <option value="MC-061-1:UNDERWATER ULTRASONIC TESTER (UWUT)" > MC-061-1:UNDERWATER ULTRASONIC TESTER (UWUT)</option>
                            <option value="MC-061-2:UNDERWATER ULTRASONIC TESTER (UWUT)" > MC-061-2:UNDERWATER ULTRASONIC TESTER (UWUT)</option>
                            <option value="MC-061-3:UNDERWATER ULTRASONIC TESTER (UWUT)" > MC-061-3:UNDERWATER ULTRASONIC TESTER (UWUT)</option>
                            <option value="MC-062-1:AEROSPACE ULTRASONIC TESTER (UT)" > MC-062-1:AEROSPACE ULTRASONIC TESTER (UT)</option>
                            <option value="MC-062-2:AEROSPACE ULTRASONIC TESTER (UT)" > MC-062-2:AEROSPACE ULTRASONIC TESTER (UT)</option>
                            <option value="MC-062-3:AEROSPACE ULTRASONIC TESTER (UT)" > MC-062-3:AEROSPACE ULTRASONIC TESTER (UT)</option>
                            <option value="MC-070-1:JURUFOUNDRI" > MC-070-1:JURUFOUNDRI</option>
                            <option value="MC-070-2:JURUFOUNDRI KANAN" > MC-070-2:JURUFOUNDRI KANAN</option>
                            <option value="MC-070-3:JURUTEKNIK FOUNDRI" > MC-070-3:JURUTEKNIK FOUNDRI</option>
                            <option value="MC-080-2:PELUKIS PELAN KEJURUTERAAN MEKANIKAL" > MC-080-2:PELUKIS PELAN KEJURUTERAAN MEKANIKAL</option>
                            <option value="MC-081-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL" > MC-081-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL</option>
                            <option value="MC-082-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL-MINYAK & GAS" > MC-082-3:PELUKIS PELAN KANAN KEJURUTERAAN MEKANIKAL-MINYAK & GAS</option>
                            <option value="MCE03:PENYELIA MEKANIKAL & ELEKTRIKAL" > MCE03:PENYELIA MEKANIKAL & ELEKTRIKAL</option>
                            <option value="MCE04:PENGURUS MEKANIKAL & ELEKTRIKAL" > MCE04:PENGURUS MEKANIKAL & ELEKTRIKAL</option>
                            <option value="MP-010-2:CHILD CARE PROVIDER" > MP-010-2:CHILD CARE PROVIDER</option>
                            <option value="MP-010-3:PENJAGA KANAN KANAK-KANAK" > MP-010-3:PENJAGA KANAN KANAK-KANAK</option>
                            <option value="MP-010-4:PENYELIA PUSAT JAGAAN" > MP-010-4:PENYELIA PUSAT JAGAAN</option>
                            <option value="MP-010-5:PENGURUS PUSAT JAGAAN" > MP-010-5:PENGURUS PUSAT JAGAAN</option>
                            <option value="MP-011-1:EMERGENCY MEDICAL TECHNICIAN FIRST RESPONDER (EMT-FR)" > MP-011-1:EMERGENCY MEDICAL TECHNICIAN FIRST RESPONDER (EMT-FR)</option>
                            <option value="MP-011-2:EMERGENCY MEDICAL TECHNICIAN BASIC (EMT-B)" > MP-011-2:EMERGENCY MEDICAL TECHNICIAN BASIC (EMT-B)</option>
                            <option value="MP-011-3:EMERGENCY MEDICAL TECHNICIAN INTERMEDIATE (EMT-I)" > MP-011-3:EMERGENCY MEDICAL TECHNICIAN INTERMEDIATE (EMT-I)</option>
                            <option value="MP-020-1:ATENDAN HOSPITAL (HOSPITAL ATTENDANT" > MP-020-1:ATENDAN HOSPITAL (HOSPITAL ATTENDANT</option>
                            <option value="MP-020-2:JURURAWAT MASYARAKAT (COMMUNITY NURSE)" > MP-020-2:JURURAWAT MASYARAKAT (COMMUNITY NURSE)</option>
                            <option value="MP-020-3:JURURAWAT (STAFF NURSE)" > MP-020-3:JURURAWAT (STAFF NURSE)</option>
                            <option value="MP-030-1:CRYSTAL THERAPIST" > MP-030-1:CRYSTAL THERAPIST</option>
                            <option value="MP-030-2:SENIOR CRYSTAL THERAPIST" > MP-030-2:SENIOR CRYSTAL THERAPIST</option>
                            <option value="MP-030-3:CRYSTAL HEALER" > MP-030-3:CRYSTAL HEALER</option>
                            <option value="MP-041-3:JURUTEKNIK PROSTETIK" > MP-041-3:JURUTEKNIK PROSTETIK</option>
                            <option value="MP-041-4:TEKNOLOGIS PROSTETIK" > MP-041-4:TEKNOLOGIS PROSTETIK</option>
                            <option value="MP-041-5:PROSTETIS" > MP-041-5:PROSTETIS</option>
                            <option value="MP-042-4:TEKNOLOGIS ORTOTIK" > MP-042-4:TEKNOLOGIS ORTOTIK</option>
                            <option value="MP-042-5:ORTOTIS" > MP-042-5:ORTOTIS</option>
                            <option value="MR01:PEMASANGAN BOT" > MR01:PEMASANGAN BOT</option>
                            <option value="MR02:PEMBINA BOT GENTIAN KACA" > MR02:PEMBINA BOT GENTIAN KACA</option>
                            <option value="MR03:OPERASI RATING ENJIN MARIN" > MR03:OPERASI RATING ENJIN MARIN</option>
                            <option value="MR04:OPERASI RATING DEK MARIN" > MR04:OPERASI RATING DEK MARIN</option>
                            <option value="MTC2:COLD METAL OPERATOR" > MTC2:COLD METAL OPERATOR</option>
                            <option value="N-010-1:JURUKECANTIKAN" > N-010-1:JURUKECANTIKAN</option>
                            <option value="N-010-2:JURUESTETIK" > N-010-2:JURUESTETIK</option>
                            <option value="N-010-3:JURUTERAPI ESTETIK" > N-010-3:JURUTERAPI ESTETIK</option>
                            <option value="N-011-1:JURUKECANTIKAN" > N-011-1:JURUKECANTIKAN</option>
                            <option value="N-011-2:JURUESTETIK" > N-011-2:JURUESTETIK</option>
                            <option value="N-011-3:JURUTERAPI ESTETIK" > N-011-3:JURUTERAPI ESTETIK</option>
                            <option value="N-011-4:PENOLONG PENGURUS ESTETIK" > N-011-4:PENOLONG PENGURUS ESTETIK</option>
                            <option value="N-011-5:PENGURUS ESTETIK" > N-011-5:PENGURUS ESTETIK</option>
                            <option value="N-012-2:MANUAL LYMPH DRAINAGE" > N-012-2:MANUAL LYMPH DRAINAGE</option>
                            <option value="N-013-2:REFLEXOLOGIST" > N-013-2:REFLEXOLOGIST</option>
                            <option value="N-014-2:AROMATHERAPIST" > N-014-2:AROMATHERAPIST</option>
                            <option value="N-015-2:JURU URUT" > N-015-2:JURU URUT</option>
                            <option value="N-021-1:PENDANDAN RAMBUT MUDA" > N-021-1:PENDANDAN RAMBUT MUDA</option>
                            <option value="N-021-2:PENDANDAN RAMBUT" > N-021-2:PENDANDAN RAMBUT</option>
                            <option value="N-021-3:PENDANDAN RAMBUT KANAN" > N-021-3:PENDANDAN RAMBUT KANAN</option>
                            <option value="N-021-4:PENOLONG PENGURUS PENDANDAN RAMBUT" > N-021-4:PENOLONG PENGURUS PENDANDAN RAMBUT</option>
                            <option value="N-021-5:PENGURUS PENDANDAN RAMBUT" > N-021-5:PENGURUS PENDANDAN RAMBUT</option>
                            <option value="N-022-1:PENDANDAN RAMBUT MUDA" > N-022-1:PENDANDAN RAMBUT MUDA</option>
                            <option value="N-022-2:PENDANDAN RAMBUT" > N-022-2:PENDANDAN RAMBUT</option>
                            <option value="N-022-3:PENDANDAN RAMBUT KANAN" > N-022-3:PENDANDAN RAMBUT KANAN</option>
                            <option value="N-030-1:JUNIOR SPA THERAPIST" > N-030-1:JUNIOR SPA THERAPIST</option>
                            <option value="N-030-2:SENIOR SPA THERAPIST" > N-030-2:SENIOR SPA THERAPIST</option>
                            <option value="N-030-3:SPA SUPERVISOR" > N-030-3:SPA SUPERVISOR</option>
                            <option value="N-040-2:DOMESTIC WORKER" > N-040-2:DOMESTIC WORKER</option>
                            <option value="OT-010-2:MEKANIK PERSENJATAAN" > OT-010-2:MEKANIK PERSENJATAAN</option>
                            <option value="OT-010-3:JURUTEKNIK PERSENJATAAN" > OT-010-3:JURUTEKNIK PERSENJATAAN</option>
                            <option value="OT-011-4:ASSISTANT TELECOMMUNICATION OPERATIONAL MANAGER-LOGISTIC" > OT-011-4:ASSISTANT TELECOMMUNICATION OPERATIONAL MANAGER-LOGISTIC</option>
                            <option value="OT-011-5:TELECOMMUNICATION OPERATIONAL MANAGER-LOGISTIC" > OT-011-5:TELECOMMUNICATION OPERATIONAL MANAGER-LOGISTIC</option>
                            <option value="OT-012-1:PORT SECURITY PERSONNEL" > OT-012-1:PORT SECURITY PERSONNEL</option>
                            <option value="OT-012-2:PORT SECURITY ASSISTANT" > OT-012-2:PORT SECURITY ASSISTANT</option>
                            <option value="OT-012-3:PORT SECURITY SUPERVISOR" > OT-012-3:PORT SECURITY SUPERVISOR</option>
                            <option value="OT-012-4:PORT SECURITY EXECUTIVE" > OT-012-4:PORT SECURITY EXECUTIVE</option>
                            <option value="OT-012-5:PORT SECURITY MANAGER" > OT-012-5:PORT SECURITY MANAGER</option>
                            <option value="OT-020-4:ASSISTANT SECURITY OPERATION MANAGER" > OT-020-4:ASSISTANT SECURITY OPERATION MANAGER</option>
                            <option value="OT-020-5:SECURITY OPERATION MANAGER" > OT-020-5:SECURITY OPERATION MANAGER</option>
                            <option value="OT-030-2:COMMUNITY SERVICE WORKER" > OT-030-2:COMMUNITY SERVICE WORKER</option>
                            <option value="OT-030-3:COMMUNITY SERVICE SUPERVISOR" > OT-030-3:COMMUNITY SERVICE SUPERVISOR</option>
                            <option value="OT-030-4:COMMUNITY SERVICE EXECUTIVE" > OT-030-4:COMMUNITY SERVICE EXECUTIVE</option>
                            <option value="OT-030-5:COMMUNITY SERVICE MANAGER" > OT-030-5:COMMUNITY SERVICE MANAGER</option>
                            <option value="OT-031-1:CARER (PERSONS WITH DISABILITIES)" > OT-031-1:CARER (PERSONS WITH DISABILITIES)</option>
                            <option value="OT-031-2:SENIOR CARER (PERSONS WITH DISABILITIES)" > OT-031-2:SENIOR CARER (PERSONS WITH DISABILITIES)</option>
                            <option value="OT-031-3:CARER SUPERVISOR (PERSONS WITH DISABILITIES)" > OT-031-3:CARER SUPERVISOR (PERSONS WITH DISABILITIES)</option>
                            <option value="OT-032-1:CARER (ELDERLY)" > OT-032-1:CARER (ELDERLY)</option>
                            <option value="OT-032-2:SENIOR CARER (ELDERLY)" > OT-032-2:SENIOR CARER (ELDERLY)</option>
                            <option value="OT-032-3:CARE SUPERVISOR (ELDERLY)" > OT-032-3:CARE SUPERVISOR (ELDERLY)</option>
                            <option value="OT-033-2:CARER (AFTER SCHOOL)" > OT-033-2:CARER (AFTER SCHOOL)</option>
                            <option value="OT-033-3:SENIOR CARER (AFTER SCHOOL)" > OT-033-3:SENIOR CARER (AFTER SCHOOL)</option>
                            <option value="P-010-1:MEKANIK KENDERAAN MOTOR" > P-010-1:MEKANIK KENDERAAN MOTOR</option>
                            <option value="P-010-2:MEKANIK KENDERAAN  MOTOR" > P-010-2:MEKANIK KENDERAAN  MOTOR</option>
                            <option value="P-010-3:JURUTEKNIK KENDERAAN MOTOR" > P-010-3:JURUTEKNIK KENDERAAN MOTOR</option>
                            <option value="P-020-1:MEKANIK KELENGKAPAN TOLAK TANAH" > P-020-1:MEKANIK KELENGKAPAN TOLAK TANAH</option>
                            <option value="P-020-2:MEKANIK KELENGKAPAN TOLAK TANAH" > P-020-2:MEKANIK KELENGKAPAN TOLAK TANAH</option>
                            <option value="P-020-3:JURUTEKNIK KELENGKAPAN TOLAK TANAH" > P-020-3:JURUTEKNIK KELENGKAPAN TOLAK TANAH</option>
                            <option value="P-030-1:MEKANIK KENDERAAN PERDAGANGAN" > P-030-1:MEKANIK KENDERAAN PERDAGANGAN</option>
                            <option value="P-030-2:MEKANIK KENDERAAN PERDAGANGAN" > P-030-2:MEKANIK KENDERAAN PERDAGANGAN</option>
                            <option value="P-030-3:JURUTEKNIK KENDERAAN PERDAGANGAN" > P-030-3:JURUTEKNIK KENDERAAN PERDAGANGAN</option>
                            <option value="P-040-1:MEKANIK JENTERA PERTANIAN" > P-040-1:MEKANIK JENTERA PERTANIAN</option>
                            <option value="P-040-2:MEKANIK JENTERA PERTANIAN" > P-040-2:MEKANIK JENTERA PERTANIAN</option>
                            <option value="P-040-3:JURUTEKNIK JENTERA PERTANIAN" > P-040-3:JURUTEKNIK JENTERA PERTANIAN</option>
                            <option value="P-050-1:PENYEMBUR CAT AUTOMOTIF" > P-050-1:PENYEMBUR CAT AUTOMOTIF</option>
                            <option value="P-050-2:PENYEMBUR CAT KANAN AUTOMOTIF" > P-050-2:PENYEMBUR CAT KANAN AUTOMOTIF</option>
                            <option value="P-050-3:JURUTEKNIK PENYEMBURAN CAT AUTOMOTIF" > P-050-3:JURUTEKNIK PENYEMBURAN CAT AUTOMOTIF</option>
                            <option value="P-060-1:JURUTEKNIK MOTOSIKAL" > P-060-1:JURUTEKNIK MOTOSIKAL</option>
                            <option value="P-060-2:JURUTEKNIK MOTOSIKAL KANAN" > P-060-2:JURUTEKNIK MOTOSIKAL KANAN</option>
                            <option value="P-060-3:PENYELIA JURUTEKNIK MOTOSIKAL" > P-060-3:PENYELIA JURUTEKNIK MOTOSIKAL</option>
                            <option value="P-071-1:AUTOMOBILE PAINTING OPERATOR" > P-071-1:AUTOMOBILE PAINTING OPERATOR</option>
                            <option value="P-071-2:AUTOMOBILE PAINT SPRAYER" > P-071-2:AUTOMOBILE PAINT SPRAYER</option>
                            <option value="P-072-1:TRIM & FINAL LINE ASSEMBLER" > P-072-1:TRIM & FINAL LINE ASSEMBLER</option>
                            <option value="P-072-2:TRIM & FINAL LINE RECTIFIER" > P-072-2:TRIM & FINAL LINE RECTIFIER</option>
                            <option value="P-073-2:PEMASANG ENJIN AUTOMOBIL" > P-073-2:PEMASANG ENJIN AUTOMOBIL</option>
                            <option value="P-074-1:AUTOMOBILE BODY ASSEMBLER" > P-074-1:AUTOMOBILE BODY ASSEMBLER</option>
                            <option value="P-074-2:AUTOMOBILE METAL FINISHER" > P-074-2:AUTOMOBILE METAL FINISHER</option>
                            <option value="P-075-3:AUTOMOBILE ASSEMBLY SUPERVISOR" > P-075-3:AUTOMOBILE ASSEMBLY SUPERVISOR</option>
                            <option value="P-080-4:EKSEKUTIF AUTOMOTIF" > P-080-4:EKSEKUTIF AUTOMOTIF</option>
                            <option value="P-080-5:PENGURUS AUTOMOTIF" > P-080-5:PENGURUS AUTOMOTIF</option>
                            <option value="P-090-1:PENGETUK PANEL KENDERAAN RENDAH" > P-090-1:PENGETUK PANEL KENDERAAN RENDAH</option>
                            <option value="P-090-2:PENGETUK PANEL KENDERAAN" > P-090-2:PENGETUK PANEL KENDERAAN</option>
                            <option value="P-090-3:PENYELIA PENGETUK PANEL KENDERAAN" > P-090-3:PENYELIA PENGETUK PANEL KENDERAAN</option>
                            <option value="P-091-1:PENGETUK PANEL KENDERAAN RENDAH" > P-091-1:PENGETUK PANEL KENDERAAN RENDAH</option>
                            <option value="P-091-2:PENGETUK PANEL KENDERAAN" > P-091-2:PENGETUK PANEL KENDERAAN</option>
                            <option value="P-091-3:PENYELIA PENGETUK PANEL KENDERAAN" > P-091-3:PENYELIA PENGETUK PANEL KENDERAAN</option>
                            <option value="P-092-1:PEMASANG AKSESORI AUTOMATIF" > P-092-1:PEMASANG AKSESORI AUTOMATIF</option>
                            <option value="P-092-2:PEMASANG AKSESORI KANAN AUTOMATIF" > P-092-2:PEMASANG AKSESORI KANAN AUTOMATIF</option>
                            <option value="P-092-3:PENYELIA AKSESORI AUTOMATIF" > P-092-3:PENYELIA AKSESORI AUTOMATIF</option>
                            <option value="P-093-1:FABRIKATOR (WELDING) MOTOSIKAL" > P-093-1:FABRIKATOR (WELDING) MOTOSIKAL</option>
                            <option value="P-093-2:FABRIKATOR KANAN (WELDING) MOTOSIKAL" > P-093-2:FABRIKATOR KANAN (WELDING) MOTOSIKAL</option>
                            <option value="P-093-3:PENYELIA FABRIKATOR (WELDING) MOTOSIKAL" > P-093-3:PENYELIA FABRIKATOR (WELDING) MOTOSIKAL</option>
                            <option value="P-100-1:JURUBENTUK KERANGKA BADAN" > P-100-1:JURUBENTUK KERANGKA BADAN</option>
                            <option value="P-100-2:PEMASANG KERANGKA BADAN" > P-100-2:PEMASANG KERANGKA BADAN</option>
                            <option value="P-100-3:PENYELIA KERANGKA BADAN" > P-100-3:PENYELIA KERANGKA BADAN</option>
                            <option value="P-101-1:OPERATOR PERAPIAN BADAN KENDERAAN PENUMPANG" > P-101-1:OPERATOR PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                            <option value="P-101-2:OPERATOR KANAN PERAPIAN BADAN KENDERAAN PENUMPANG" > P-101-2:OPERATOR KANAN PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                            <option value="P-101-3:PENYELIA PERAPIAN BADAN KENDERAAN PENUMPANG" > P-101-3:PENYELIA PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                            <option value="P-110-1:PEMASANG BADAN MOTOSIKAL" > P-110-1:PEMASANG BADAN MOTOSIKAL</option>
                            <option value="P-110-2:PEMASANG BADAN MOTOSIKAL KANAN" > P-110-2:PEMASANG BADAN MOTOSIKAL KANAN</option>
                            <option value="P-110-3:PENYELIA PEMASANGAN BADAN MOTOSIKAL" > P-110-3:PENYELIA PEMASANGAN BADAN MOTOSIKAL</option>
                            <option value="P-111-1:PEMASANG ENJIN MOTOSIKAL" > P-111-1:PEMASANG ENJIN MOTOSIKAL</option>
                            <option value="P-111-2:PEMASANG ENJIN MOTOSIKAL KANAN" > P-111-2:PEMASANG ENJIN MOTOSIKAL KANAN</option>
                            <option value="P-111-3:PENYELIA PEMASANGAN ENJIN MOTOSIKAL" > P-111-3:PENYELIA PEMASANGAN ENJIN MOTOSIKAL</option>
                            <option value="P-112-2:INSPEKTOR AKHIR MOTOSIKAL" > P-112-2:INSPEKTOR AKHIR MOTOSIKAL</option>
                            <option value="P-112-3:PENYELIA PEMASANGAN AKHIR MOTOSIKAL" > P-112-3:PENYELIA PEMASANGAN AKHIR MOTOSIKAL</option>
                            <option value="P-113-1:OPERATOR MENYADUR MOTOSIKAL" > P-113-1:OPERATOR MENYADUR MOTOSIKAL</option>
                            <option value="P-113-2:OPERATOR MENYADUR MOTOSIKAL KANAN" > P-113-2:OPERATOR MENYADUR MOTOSIKAL KANAN</option>
                            <option value="P-113-3:PENYELIA MENYADUR MOTOSIKAL" > P-113-3:PENYELIA MENYADUR MOTOSIKAL</option>
                            <option value="P-114-1:OPERATOR MENGECAT MOTOSIKA" > P-114-1:OPERATOR MENGECAT MOTOSIKA</option>
                            <option value="P-114-2:OPERATOR MENGECAT MOTOSIKAL KANAN" > P-114-2:OPERATOR MENGECAT MOTOSIKAL KANAN</option>
                            <option value="P-114-3:PENYELIA MENGECAT MOTOSIKAL" > P-114-3:PENYELIA MENGECAT MOTOSIKAL</option>
                            <option value="P-115-1:MEKANIK KENDERAAN MOTOR" > P-115-1:MEKANIK KENDERAAN MOTOR</option>
                            <option value="P-115-2:MEKANIK KENDERAAN  MOTOR" > P-115-2:MEKANIK KENDERAAN  MOTOR</option>
                            <option value="P-115-3:JURUTEKNIK KENDERAAN MOTOR" > P-115-3:JURUTEKNIK KENDERAAN MOTOR</option>
                            <option value="P-116-2:PEMASANG SISTEM GAS ASLI KENDERAAN" > P-116-2:PEMASANG SISTEM GAS ASLI KENDERAAN</option>
                            <option value="P-117-3:PENYELIA SERVIS TAYAR" > P-117-3:PENYELIA SERVIS TAYAR</option>
                            <option value="P-118-1:JURUTEKNIK MOTOSIKAL" > P-118-1:JURUTEKNIK MOTOSIKAL</option>
                            <option value="P-118-2:JURUTEKNIK MOTOSIKAL KANAN" > P-118-2:JURUTEKNIK MOTOSIKAL KANAN</option>
                            <option value="P-118-3:PENYELIA JURUTEKNIK MOTOSIKAL" > P-118-3:PENYELIA JURUTEKNIK MOTOSIKAL</option>
                            <option value="P-119-1:JURUTEKNIK AUTOMOTIF" > P-119-1:JURUTEKNIK AUTOMOTIF</option>
                            <option value="P-120-2:JURUTEKNIK PENYAMANAN UDARA AUTOMOTIF" > P-120-2:JURUTEKNIK PENYAMANAN UDARA AUTOMOTIF</option>
                            <option value="P-130-2:JURUTEKNIK AUTOMOTIF SERVIS TAYAR" > P-130-2:JURUTEKNIK AUTOMOTIF SERVIS TAYAR</option>
                            <option value="P-200-1:PEMANDU KENDERAAN PERDAGANGAN" > P-200-1:PEMANDU KENDERAAN PERDAGANGAN</option>
                            <option value="P-200-2:PEMBANTU PENGUATKUASA" > P-200-2:PEMBANTU PENGUATKUASA</option>
                            <option value="P-200-3:PENYELIA OPERASI PENGANGKUTAN PERDAGANGAN" > P-200-3:PENYELIA OPERASI PENGANGKUTAN PERDAGANGAN</option>
                            <option value="P-200-4:EKSEKUTIF OPERASI PENGANGKUTAN PERDAGANGAN" > P-200-4:EKSEKUTIF OPERASI PENGANGKUTAN PERDAGANGAN</option>
                            <option value="P-200-5:PENGURUS OPERASI PENGANGKUTAN PERDAGANGAN" > P-200-5:PENGURUS OPERASI PENGANGKUTAN PERDAGANGAN</option>
                            <option value="P-201-2:PEMBANTU PERKHIDMATAN PELANGGAN" > P-201-2:PEMBANTU PERKHIDMATAN PELANGGAN</option>
                            <option value="P-210-2:COMMERCIAL VEHICLE DRIVER" > P-210-2:COMMERCIAL VEHICLE DRIVER</option>
                            <option value="PC01:OPERASI LOJI" > PC01:OPERASI LOJI</option>
                            <option value="PC02:DRAFTING PERPAIPAN" > PC02:DRAFTING PERPAIPAN</option>
                            <option value="PC03:DRAFTING STRUKTUR LUAR PANTAI" > PC03:DRAFTING STRUKTUR LUAR PANTAI</option>
                            <option value="PC04:DRAFTING INSTRUMENTASI DAN KAWALAN" > PC04:DRAFTING INSTRUMENTASI DAN KAWALAN</option>
                            <option value="PC05:RIGGERS & ROUSTABOUT" > PC05:RIGGERS & ROUSTABOUT</option>
                            <option value="PCC1:PRECAST CONCRETE INSTALLER (BUILDING)" > PCC1:PRECAST CONCRETE INSTALLER (BUILDING)</option>
                            <option value="PCC2:PRECAST CONCRETE INSTALLER (BUILDING)" > PCC2:PRECAST CONCRETE INSTALLER (BUILDING)</option>
                            <option value="PCC3:PRECAST CONCRETE SUPERVISOR (BUILDING)" > PCC3:PRECAST CONCRETE SUPERVISOR (BUILDING)</option>
                            <option value="PG-010-1:PLASTIC EXTRUSION PRODUCTION JUNIOR TECHNICIAN" > PG-010-1:PLASTIC EXTRUSION PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="PG-010-2:PLASTIC EXTRUSION PRODUCTION TECHNICIAN" > PG-010-2:PLASTIC EXTRUSION PRODUCTION TECHNICIAN</option>
                            <option value="PG-010-3:PLASTIC EXTRUSION PRODUCTION SENIOR TECHNICIAN" > PG-010-3:PLASTIC EXTRUSION PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="PG-020-1:PLASTIC ROTATIONAL MOULDING PRODUCTION JUNIOR TECHNICIAN" > PG-020-1:PLASTIC ROTATIONAL MOULDING PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="PG-020-2:PLASTIC ROTATIONAL MOULDING PRODUCTION TECHNICIAN" > PG-020-2:PLASTIC ROTATIONAL MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="PG-020-3:PLASTIC ROTATIONAL MOULDING PRODUCTION SENIOR TECHNICIAN" > PG-020-3:PLASTIC ROTATIONAL MOULDING PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="PG-030-1:PLASTIC INJECTION MOULDING PRODUCTION JUNIOR TECHNICIAN" > PG-030-1:PLASTIC INJECTION MOULDING PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="PG-030-2:PLASTIC INJECTION MOULDING PRODUCTION TECHNICIAN" > PG-030-2:PLASTIC INJECTION MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="PG-030-3:PLASTIC INJECTION MOULDING PRODUCTION SENIOR TECHNICIAN" > PG-030-3:PLASTIC INJECTION MOULDING PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="PG-040-1:PLASTIC BLOW MOULDING PRODUCTION JUNIOR TECHNICIAN" > PG-040-1:PLASTIC BLOW MOULDING PRODUCTION JUNIOR TECHNICIAN</option>
                            <option value="PG-040-2:PLASTIC BLOW MOULDING PRODUCTION TECHNICIAN" > PG-040-2:PLASTIC BLOW MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="PG-040-3:PLASTIC BLOW MOULDING PRODUCTION SENIOR TECHNICIAN" > PG-040-3:PLASTIC BLOW MOULDING PRODUCTION SENIOR TECHNICIAN</option>
                            <option value="PG-050-1:PLASTIC INJECTION MOULDING JUNIOR TECHNICIAN (THERMOSET)" > PG-050-1:PLASTIC INJECTION MOULDING JUNIOR TECHNICIAN (THERMOSET)</option>
                            <option value="PG-050-2:PLASTIC INJECTION MOULDING TECHNICIAN (THERMOSET)" > PG-050-2:PLASTIC INJECTION MOULDING TECHNICIAN (THERMOSET)</option>
                            <option value="PG-050-3:PLASTIC INJECTION MOULDING SENIOR TECHNICIAN (THERMOSET)" > PG-050-3:PLASTIC INJECTION MOULDING SENIOR TECHNICIAN (THERMOSET)</option>
                            <option value="PG-060-1:PLASTIC COMPRESSION MOULDING PRODUCTION JUNIOR TECHNICIAN (THERMOSET)" > PG-060-1:PLASTIC COMPRESSION MOULDING PRODUCTION JUNIOR TECHNICIAN (THERMOSET)</option>
                            <option value="PG-060-2:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN" > PG-060-2:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="PG-060-3:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN" > PG-060-3:PLASTIC COMPRESSION MOULDING PRODUCTION TECHNICIAN</option>
                            <option value="PG-070-4:PLASTIC PRODUCTION ASSISTANT MANAGER (THERMOPLASTIC)" > PG-070-4:PLASTIC PRODUCTION ASSISTANT MANAGER (THERMOPLASTIC)</option>
                            <option value="PG-070-5:PLASTIC PRODUCTION MANAGER (THERMOPLASTIC)" > PG-070-5:PLASTIC PRODUCTION MANAGER (THERMOPLASTIC)</option>
                            <option value="PG-080-4:PLASTIC PRODUCTION ASSISTANT MANAGER (THERMOSET)" > PG-080-4:PLASTIC PRODUCTION ASSISTANT MANAGER (THERMOSET)</option>
                            <option value="PG-080-5:PLASTIC PRODUCTION MANAGER (THERMOSET)" > PG-080-5:PLASTIC PRODUCTION MANAGER (THERMOSET)</option>
                            <option value="PG-090-2:JURUTEKNIK PENGELUARAN PLASTIK-OPP FILEM" > PG-090-2:JURUTEKNIK PENGELUARAN PLASTIK-OPP FILEM</option>
                            <option value="PG-090-3:PENYELIA PENGELUARAN PLASTIK-OPP FILEM" > PG-090-3:PENYELIA PENGELUARAN PLASTIK-OPP FILEM</option>
                            <option value="PH-010-1:ASSISTANT PHOTOGRAPHER" > PH-010-1:ASSISTANT PHOTOGRAPHER</option>
                            <option value="PH-010-2:PHOTOGRAPHER" > PH-010-2:PHOTOGRAPHER</option>
                            <option value="PH-010-3:SENIOR PHOTOGRAPHER" > PH-010-3:SENIOR PHOTOGRAPHER</option>
                            <option value="PLB1:BORED PILE OPERATOR" > PLB1:BORED PILE OPERATOR</option>
                            <option value="PLD1:DRIVEN PILE OPERATOR" > PLD1:DRIVEN PILE OPERATOR</option>
                            <option value="PLJ1:JACKED IN PILE 0PERATOR" > PLJ1:JACKED IN PILE 0PERATOR</option>
                            <option value="PLM1:MICRO PILE OPERATOR" > PLM1:MICRO PILE OPERATOR</option>
                            <option value="PLR1:PLASTERER" > PLR1:PLASTERER</option>
                            <option value="PLR2:PLASTERER" > PLR2:PLASTERER</option>
                            <option value="PLS2:PILING SITE FOREMAN" > PLS2:PILING SITE FOREMAN</option>
                            <option value="PLS3:PILING SITE SUPERVISOR" > PLS3:PILING SITE SUPERVISOR</option>
                            <option value="PLS4:PILING SITE MANAGER" > PLS4:PILING SITE MANAGER</option>
                            <option value="PLS5:PILING PROJECT MANAGER" > PLS5:PILING PROJECT MANAGER</option>
                            <option value="PNS1:PLUMBING & SANITARY FITTER" > PNS1:PLUMBING & SANITARY FITTER</option>
                            <option value="PNS2:PLUMBING & SANITARY PLUMBER" > PNS2:PLUMBING & SANITARY PLUMBER</option>
                            <option value="PNS3:PLUMBING & SANITARY SUPERVISOR" > PNS3:PLUMBING & SANITARY SUPERVISOR</option>
                            <option value="PP-001-4:EKSEKUTIF KORPORAT" > PP-001-4:EKSEKUTIF KORPORAT</option>
                            <option value="PP-001-5:PENGURUS KORPORAT" > PP-001-5:PENGURUS KORPORAT</option>
                            <option value="PR-010-1:JURUTEKNIK PRA-CETAK" > PR-010-1:JURUTEKNIK PRA-CETAK</option>
                            <option value="PR-010-2:JURUTEKNIK KANAN PRA-CETAK" > PR-010-2:JURUTEKNIK KANAN PRA-CETAK</option>
                            <option value="PR-010-3:PENYELIA PRA-CETAK" > PR-010-3:PENYELIA PRA-CETAK</option>
                            <option value="PR-020-4:PENOLONG PENGURUS PENGELUARAN PERCETAKAN" > PR-020-4:PENOLONG PENGURUS PENGELUARAN PERCETAKAN</option>
                            <option value="PR-020-5:PENGURUS PENGELUARAN PERCETAKAN" > PR-020-5:PENGURUS PENGELUARAN PERCETAKAN</option>
                            <option value="PR-021-1:JURUTEKNIK POST-PRESS" > PR-021-1:JURUTEKNIK POST-PRESS</option>
                            <option value="PR-021-2:JURUTEKNIK KANAN POST-PRESS" > PR-021-2:JURUTEKNIK KANAN POST-PRESS</option>
                            <option value="PR-021-3:PENYELIA POST-PRESS" > PR-021-3:PENYELIA POST-PRESS</option>
                            <option value="PR-022-1:NARROW WEB PRINTING PRESSMAN" > PR-022-1:NARROW WEB PRINTING PRESSMAN</option>
                            <option value="PR-022-2:SENIOR NARROW WEB PRINTING PRESSMAN" > PR-022-2:SENIOR NARROW WEB PRINTING PRESSMAN</option>
                            <option value="PR-022-3:NARROW WEB PRINTING SUPERVISOR" > PR-022-3:NARROW WEB PRINTING SUPERVISOR</option>
                            <option value="PR01:TEKNOLOGI PERCETAKAN" > PR01:TEKNOLOGI PERCETAKAN</option>
                            <option value="PS01:DANDANAN RAMBUT" > PS01:DANDANAN RAMBUT</option>
                            <option value="PT01:PEMBUATAN PERKAKASAN (ACUAN & DIE)" > PT01:PEMBUATAN PERKAKASAN (ACUAN & DIE)</option>
                            <option value="PT02:PEMBUATAN PERKAKASAN (ACUAN & DIE)- KATEGORI BESAR" > PT02:PEMBUATAN PERKAKASAN (ACUAN & DIE)- KATEGORI BESAR</option>
                            <option value="PT03:PENUANGAN ACUAN TEKANAN" > PT03:PENUANGAN ACUAN TEKANAN</option>
                            <option value="PTC1:BUILDING ARCHITECTURAL COATING APPLICATOR L01" > PTC1:BUILDING ARCHITECTURAL COATING APPLICATOR L01</option>
                            <option value="PTC2:BUILDING ARCHITECTURAL COATING APPLICATOR L02" > PTC2:BUILDING ARCHITECTURAL COATING APPLICATOR L02</option>
                            <option value="PTD1:BUILDING DECORATIVE PAINTER L01" > PTD1:BUILDING DECORATIVE PAINTER L01</option>
                            <option value="PTD2:BUILDING DECORATIVE PAINTER L02" > PTD2:BUILDING DECORATIVE PAINTER L02</option>
                            <option value="PTD4:BUILDING PAINTING PROJECT COORDINATOR" > PTD4:BUILDING PAINTING PROJECT COORDINATOR</option>
                            <option value="PTD5:BUILDING PAINTING MANAGER" > PTD5:BUILDING PAINTING MANAGER</option>
                            <option value="PUC2:CONCRETE PUMP OPERATOR" > PUC2:CONCRETE PUMP OPERATOR</option>
                            <option value="PVR2:PAVER OPERATOR" > PVR2:PAVER OPERATOR</option>
                            <option value="PWR1:WATER RETICULATION PIPE INSTALLER" > PWR1:WATER RETICULATION PIPE INSTALLER</option>
                            <option value="PWR2:WATER RETICULATION PLUMBER" > PWR2:WATER RETICULATION PLUMBER</option>
                            <option value="PWR3:WATER RETICULATION SUPERVISOR" > PWR3:WATER RETICULATION SUPERVISOR</option>
                            <option value="Q-010-3*:AIRCRAFT MECHANIC (MECHANICAL)-AEROPLANE 1 PISTON" > Q-010-3*:AIRCRAFT MECHANIC (MECHANICAL)-AEROPLANE 1 PISTON</option>
                            <option value="Q-020-3*:MEKANIK PESAWAT (MEKANIKAL)-KAPAL TERBANG 1 TURBIN" > Q-020-3*:MEKANIK PESAWAT (MEKANIKAL)-KAPAL TERBANG 1 TURBIN</option>
                            <option value="Q-030-3*:MEKANIK PESAWAT (MEKANIKAL)-KAPAL TERBANG II TURBIN" > Q-030-3*:MEKANIK PESAWAT (MEKANIKAL)-KAPAL TERBANG II TURBIN</option>
                            <option value="Q-040-3*:MEKANIK PESAWAT (AVIONIK) KAPAL TERBANG" > Q-040-3*:MEKANIK PESAWAT (AVIONIK) KAPAL TERBANG</option>
                            <option value="Q-050-3*:MEKANIK PESAWAT (AVIONIK) KAPAL TERBANG ROTORKRAF" > Q-050-3*:MEKANIK PESAWAT (AVIONIK) KAPAL TERBANG ROTORKRAF</option>
                            <option value="Q-060-3*:MEKANIK PESAWAT : PEMBAIKAN STRUKTUR LOGAM" > Q-060-3*:MEKANIK PESAWAT : PEMBAIKAN STRUKTUR LOGAM</option>
                            <option value="Q-061-1*:MEKANIK PESAWAT -KELENGKAPAN BANTUAN DARAT (MEKANIKAL)" > Q-061-1*:MEKANIK PESAWAT -KELENGKAPAN BANTUAN DARAT (MEKANIKAL)</option>
                            <option value="Q-061-2*:MEKANIK PESAWAT -KELENGKAPAN BANTUAN DARAT (MEKANIKAL)" > Q-061-2*:MEKANIK PESAWAT -KELENGKAPAN BANTUAN DARAT (MEKANIKAL)</option>
                            <option value="Q-061-3*:JURUTEKNIK PESAWAT -KELENGKAPAN BANTUAN DARAT (MEKANIKAL)" > Q-061-3*:JURUTEKNIK PESAWAT -KELENGKAPAN BANTUAN DARAT (MEKANIKAL)</option>
                            <option value="Q-062-1*:MEKANIK PESAWAT - KELENGKAPAN BANTUAN DARAT (AVIONIK)" > Q-062-1*:MEKANIK PESAWAT - KELENGKAPAN BANTUAN DARAT (AVIONIK)</option>
                            <option value="Q-062-2*:MEKANIK PESAWAT - KELENGKAPAN BANTUAN DARAT (AVIONIK)" > Q-062-2*:MEKANIK PESAWAT - KELENGKAPAN BANTUAN DARAT (AVIONIK)</option>
                            <option value="Q-062-3*:JURUTEKNIK PESAWAT -KELENGKAPAN BANTUAN DARAT (AVIONIK)" > Q-062-3*:JURUTEKNIK PESAWAT -KELENGKAPAN BANTUAN DARAT (AVIONIK)</option>
                            <option value="Q-070-3*:MEKANIK PESAWAT (MEKANIKAL)-HELIKOPTER TURBIN" > Q-070-3*:MEKANIK PESAWAT (MEKANIKAL)-HELIKOPTER TURBIN</option>
                            <option value="R-010-1:MEKANIK MARIN" > R-010-1:MEKANIK MARIN</option>
                            <option value="R-030-2*:JURUELEKTRIK MARIN" > R-030-2*:JURUELEKTRIK MARIN</option>
                            <option value="R-030-3*:JURUELEKTRIK KANAN MARIN" > R-030-3*:JURUELEKTRIK KANAN MARIN</option>
                            <option value="R-060-1*:FIBERGLASS HULL AND  SUPERSTRUCTURE BUILDER" > R-060-1*:FIBERGLASS HULL AND  SUPERSTRUCTURE BUILDER</option>
                            <option value="R-060-2*:SENIOR FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER" > R-060-2*:SENIOR FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER</option>
                            <option value="R-060-3*:FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER SUPERVISOR" > R-060-3*:FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER SUPERVISOR</option>
                            <option value="RB-010-1:SMR OPERATOR" > RB-010-1:SMR OPERATOR</option>
                            <option value="RB-010-2:SMR LINE LEADER" > RB-010-2:SMR LINE LEADER</option>
                            <option value="RB-010-3:SMR SUPERVISOR" > RB-010-3:SMR SUPERVISOR</option>
                            <option value="RB-011-3:DRY RUBBER CONTENT(DRC) LABORATORY SUPERVISOR" > RB-011-3:DRY RUBBER CONTENT(DRC) LABORATORY SUPERVISOR</option>
                            <option value="RB-012-1:EFFLUENT PLANT OPERATOR" > RB-012-1:EFFLUENT PLANT OPERATOR</option>
                            <option value="RB-012-2:EFFLUENT PLANT TECHNICIAN" > RB-012-2:EFFLUENT PLANT TECHNICIAN</option>
                            <option value="RB-012-3:EFFLUENT PLANT SUPERVISOR" > RB-012-3:EFFLUENT PLANT SUPERVISOR</option>
                            <option value="RB-013-1:LATEX COMPOUNDER" > RB-013-1:LATEX COMPOUNDER</option>
                            <option value="RB-013-2:LATEX COMPOUNDING LEADER" > RB-013-2:LATEX COMPOUNDING LEADER</option>
                            <option value="RB-013-3:LATEX COMPOUNDING SUPERVISOR" > RB-013-3:LATEX COMPOUNDING SUPERVISOR</option>
                            <option value="RB-013-4:LATEX COMPOUNDING EXECUTIVE" > RB-013-4:LATEX COMPOUNDING EXECUTIVE</option>
                            <option value="RB-013-5:LATEX COMPOUNDING MANAGER" > RB-013-5:LATEX COMPOUNDING MANAGER</option>
                            <option value="RB-014-2:RUBBER QUALITY ASSURANCE INSPECTOR" > RB-014-2:RUBBER QUALITY ASSURANCE INSPECTOR</option>
                            <option value="RB-014-3:RUBBER QUALITY ASSURANCE SUPERVISOR" > RB-014-3:RUBBER QUALITY ASSURANCE SUPERVISOR</option>
                            <option value="RB-014-4:RUBBER QUALITY ASSURANCE EXECUTIVE" > RB-014-4:RUBBER QUALITY ASSURANCE EXECUTIVE</option>
                            <option value="RB-014-5:RUBBER QUALITY ASSURANCE MANAGER" > RB-014-5:RUBBER QUALITY ASSURANCE MANAGER</option>
                            <option value="RB-015-2:MANDORE-RUBBER PLANTATION" > RB-015-2:MANDORE-RUBBER PLANTATION</option>
                            <option value="RB-015-3:ESTATE CONDUCTOR" > RB-015-3:ESTATE CONDUCTOR</option>
                            <option value="RB-020-1:DIPPING LINEMAN" > RB-020-1:DIPPING LINEMAN</option>
                            <option value="RB-020-2:DIPPING LINE LEADER" > RB-020-2:DIPPING LINE LEADER</option>
                            <option value="RB-020-3:DIPPING LINE SUPERVISOR" > RB-020-3:DIPPING LINE SUPERVISOR</option>
                            <option value="RB-030-1:WASTE WATER TREATMENT OPERATOR" > RB-030-1:WASTE WATER TREATMENT OPERATOR</option>
                            <option value="RB-030-2:WASTE WATER TREATMENT TECHNICIAN" > RB-030-2:WASTE WATER TREATMENT TECHNICIAN</option>
                            <option value="RB-030-3:WASTE WATER TREATMENT SUPERVISOR" > RB-030-3:WASTE WATER TREATMENT SUPERVISOR</option>
                            <option value="RB-040-1:FITTER" > RB-040-1:FITTER</option>
                            <option value="RB-040-2:DISTRIBUTION TECHNICIAN" > RB-040-2:DISTRIBUTION TECHNICIAN</option>
                            <option value="RB-040-3:DISTRIBUTION SENIOR TECHNICIAN" > RB-040-3:DISTRIBUTION SENIOR TECHNICIAN</option>
                            <option value="RB-040-4:WATER OPERATION SUPERINTENDENT" > RB-040-4:WATER OPERATION SUPERINTENDENT</option>
                            <option value="RB-040-5:WATER OPERATION EXECUTIVE" > RB-040-5:WATER OPERATION EXECUTIVE</option>
                            <option value="RB-040-6:WATER OPERATION MANAGER" > RB-040-6:WATER OPERATION MANAGER</option>
                            <option value="RB-050-1:PEMBUAT PERABOT" > RB-050-1:PEMBUAT PERABOT</option>
                            <option value="RB-050-2:PEMBUAT PERABOT KANAN" > RB-050-2:PEMBUAT PERABOT KANAN</option>
                            <option value="RB-050-3:PENYELIA PEMBUAT PERABOT" > RB-050-3:PENYELIA PEMBUAT PERABOT</option>
                            <option value="RB-051-1:INTERIOR WOOD WORK CARPENTER" > RB-051-1:INTERIOR WOOD WORK CARPENTER</option>
                            <option value="RB-051-2:INTERIOR WOOD WORK SENIOR CARPENTER" > RB-051-2:INTERIOR WOOD WORK SENIOR CARPENTER</option>
                            <option value="RB-051-3:INTERIOR WOOD WORK SENIOR CARPENTER SUPERVISOR" > RB-051-3:INTERIOR WOOD WORK SENIOR CARPENTER SUPERVISOR</option>
                            <option value="RB-052-1:PEMBUAT ALAS" > RB-052-1:PEMBUAT ALAS</option>
                            <option value="RB-052-2:PEMBUAT ALAS KANAN" > RB-052-2:PEMBUAT ALAS KANAN</option>
                            <option value="RB-052-3:PENYELIA PEMBUATAN ALAS" > RB-052-3:PENYELIA PEMBUATAN ALAS</option>
                            <option value="RB-060-1:WATER TREATMENT PLANT OPERATOR" > RB-060-1:WATER TREATMENT PLANT OPERATOR</option>
                            <option value="RB-060-2:WATER TREATMENT PLANT TECHNICIAN" > RB-060-2:WATER TREATMENT PLANT TECHNICIAN</option>
                            <option value="RB-060-3:WATER TREATMENT PLANT SENIOR TECHNICIAN" > RB-060-3:WATER TREATMENT PLANT SENIOR TECHNICIAN</option>
                            <option value="RLC2:COMPACTOR ROLLER OPERATOR" > RLC2:COMPACTOR ROLLER OPERATOR</option>
                            <option value="RPT2:PNEUMATIC TYRE ROLLER OPERATOR" > RPT2:PNEUMATIC TYRE ROLLER OPERATOR</option>
                            <option value="RW01:PEMBINAAN LANDASAN KERETAPI (KIMPALAN REL)" > RW01:PEMBINAAN LANDASAN KERETAPI (KIMPALAN REL)</option>
                            <option value="S-010-2*:WEAVER SONGKET & DASTER" > S-010-2*:WEAVER SONGKET & DASTER</option>
                            <option value="S-010-3*:SENIOR WEAVER SONGKET & DASTER" > S-010-3*:SENIOR WEAVER SONGKET & DASTER</option>
                            <option value="S-011-2*:SENIOR PUA WEAVER" > S-011-2*:SENIOR PUA WEAVER</option>
                            <option value="S-011-3*:PUA WEAVING SUPERVISOR" > S-011-3*:PUA WEAVING SUPERVISOR</option>
                            <option value="S-012-1*:TAPESTRY WEAVER" > S-012-1*:TAPESTRY WEAVER</option>
                            <option value="S-012-2*:SENIOR TAPESTRY WEAVER" > S-012-2*:SENIOR TAPESTRY WEAVER</option>
                            <option value="S-012-3*:TAPESTRY WEAVING SUPERVISOR" > S-012-3*:TAPESTRY WEAVING SUPERVISOR</option>
                            <option value="S-013-1*:JURUBATIK LUKIS" > S-013-1*:JURUBATIK LUKIS</option>
                            <option value="S-013-2*:JURUBATIK LUKIS KANAN" > S-013-2*:JURUBATIK LUKIS KANAN</option>
                            <option value="S-013-3*:PENYELIA BATIK LUKIS" > S-013-3*:PENYELIA BATIK LUKIS</option>
                            <option value="S-014-1*:JURUBATIK TERAP" > S-014-1*:JURUBATIK TERAP</option>
                            <option value="S-014-2*:JURUBATIK TERAP KANAN" > S-014-2*:JURUBATIK TERAP KANAN</option>
                            <option value="S-014-3*:PENYELIA BATIK TERAP" > S-014-3*:PENYELIA BATIK TERAP</option>
                            <option value="S-015-1*:JURUBATIK SKRIN" > S-015-1*:JURUBATIK SKRIN</option>
                            <option value="S-015-2*:JURUBATIK SKRIN KANAN" > S-015-2*:JURUBATIK SKRIN KANAN</option>
                            <option value="S-015-3*:PENYELIA BATIK SKRIN" > S-015-3*:PENYELIA BATIK SKRIN</option>
                            <option value="S-016-4*:EKSEKUTIF PENGELUARAN BATIK" > S-016-4*:EKSEKUTIF PENGELUARAN BATIK</option>
                            <option value="S-017-4*:WEAVING INDUSTRY EXECUTIVE" > S-017-4*:WEAVING INDUSTRY EXECUTIVE</option>
                            <option value="S-017-5*:WEAVING INDUSTRY MANAGER" > S-017-5*:WEAVING INDUSTRY MANAGER</option>
                            <option value="S-018-4*:PEREKA BATIK" > S-018-4*:PEREKA BATIK</option>
                            <option value="S-018-5*:PENGURUS PENGELUARAN BATIK" > S-018-5*:PENGURUS PENGELUARAN BATIK</option>
                            <option value="S-019-4*:WEAVING DESIGNER" > S-019-4*:WEAVING DESIGNER</option>
                            <option value="S-020-1:JURU UKIR KAYU" > S-020-1:JURU UKIR KAYU</option>
                            <option value="S-020-2:JURU UKIR KAYU KANAN" > S-020-2:JURU UKIR KAYU KANAN</option>
                            <option value="S-020-3:PENYELIA UKIRAN KAYU" > S-020-3:PENYELIA UKIRAN KAYU</option>
                            <option value="S-021-1:JURUKRAF BARANGAN KASAR LOGAM" > S-021-1:JURUKRAF BARANGAN KASAR LOGAM</option>
                            <option value="S-021-2:JURUKRAF BARANGAN KASAR LOGAM KANAN" > S-021-2:JURUKRAF BARANGAN KASAR LOGAM KANAN</option>
                            <option value="S-021-3:PENYELIA UKIRAN BARANGAN KASAR LOGAM" > S-021-3:PENYELIA UKIRAN BARANGAN KASAR LOGAM</option>
                            <option value="S-022-1:JURUKRAF BARANGAN KEMAS" > S-022-1:JURUKRAF BARANGAN KEMAS</option>
                            <option value="S-022-2:JURUKRAF BARANGAN KEMAS KANAN" > S-022-2:JURUKRAF BARANGAN KEMAS KANAN</option>
                            <option value="S-022-3:PENYELIA BARANGAN KEMAS" > S-022-3:PENYELIA BARANGAN KEMAS</option>
                            <option value="S-023-1:OPERATOR PENGELUARAN SERAMIK-SLIP CASTING" > S-023-1:OPERATOR PENGELUARAN SERAMIK-SLIP CASTING</option>
                            <option value="S-023-2:PEMBANTU PENYELIA PENGELUARAN SERAMIK-SLIP CASTING" > S-023-2:PEMBANTU PENYELIA PENGELUARAN SERAMIK-SLIP CASTING</option>
                            <option value="S-023-3:PENYELIA PENGELUARAN SERAMIK-SLIP CASTING" > S-023-3:PENYELIA PENGELUARAN SERAMIK-SLIP CASTING</option>
                            <option value="S-024-1:OPERATOR PENGELUARAN SERAMIK-POWDER PRESS" > S-024-1:OPERATOR PENGELUARAN SERAMIK-POWDER PRESS</option>
                            <option value="S-024-2:PEMBANTU PENYELIA PENGELUARAN SERAMIK -POWDER PRESS" > S-024-2:PEMBANTU PENYELIA PENGELUARAN SERAMIK -POWDER PRESS</option>
                            <option value="S-024-3:PENYELIA PENGELUARAN SERAMIK-POWDER PRESS" > S-024-3:PENYELIA PENGELUARAN SERAMIK-POWDER PRESS</option>
                            <option value="S-025-1:OPERATOR PENGELUARAN SERAMIK -PLASTIC FORMING" > S-025-1:OPERATOR PENGELUARAN SERAMIK -PLASTIC FORMING</option>
                            <option value="S-025-2:PEMBANTU PENYELIA PENGELUARAN SERAMIK-PLASTIC FORMING" > S-025-2:PEMBANTU PENYELIA PENGELUARAN SERAMIK-PLASTIC FORMING</option>
                            <option value="S-025-3:PENYELIA PENGELUARAN SERAMIK-PLASTIC FORMING" > S-025-3:PENYELIA PENGELUARAN SERAMIK-PLASTIC FORMING</option>
                            <option value="S-026-1:OPERATOR PENGELUARAN SERAMIK TERMAJU" > S-026-1:OPERATOR PENGELUARAN SERAMIK TERMAJU</option>
                            <option value="S-026-2:OPERATOR KANAN PENGELUARAN SERAMIK TERMAJU" > S-026-2:OPERATOR KANAN PENGELUARAN SERAMIK TERMAJU</option>
                            <option value="S-026-3:PENYELIA PENGELUARAN SERAMIK TERMAJU" > S-026-3:PENYELIA PENGELUARAN SERAMIK TERMAJU</option>
                            <option value="S-030-2:JURUTEKNIK OPERASI KAWALAN PROSES" > S-030-2:JURUTEKNIK OPERASI KAWALAN PROSES</option>
                            <option value="S-030-3:PENYELIA OPERASI KAWALAN PROSES" > S-030-3:PENYELIA OPERASI KAWALAN PROSES</option>
                            <option value="SCF1:SCAFFOLD ERECTOR" > SCF1:SCAFFOLD ERECTOR</option>
                            <option value="SCF2:SCAFFOLD ERECTOR" > SCF2:SCAFFOLD ERECTOR</option>
                            <option value="SCF3:SCAFFOLD SUPERVISOR" > SCF3:SCAFFOLD SUPERVISOR</option>
                            <option value="SCF4:SCAFFOLD INSPECTOR" > SCF4:SCAFFOLD INSPECTOR</option>
                            <option value="SCF5:SCAFFOLD MANAGER" > SCF5:SCAFFOLD MANAGER</option>
                            <option value="SCR2:SCRAPER 0PERATOR" > SCR2:SCRAPER 0PERATOR</option>
                            <option value="SF01:FABRIKASI LOGAM" > SF01:FABRIKASI LOGAM</option>
                            <option value="SID1:SITE INVESTIGATION DRILLER ASSISTANT" > SID1:SITE INVESTIGATION DRILLER ASSISTANT</option>
                            <option value="SID2:SITE INVESTIGATION DRILLER" > SID2:SITE INVESTIGATION DRILLER</option>
                            <option value="SID3:SITE INVESTIGATION DRILLER SUPERVISOR" > SID3:SITE INVESTIGATION DRILLER SUPERVISOR</option>
                            <option value="SS-010-1:SECURITY ASSISTANT" > SS-010-1:SECURITY ASSISTANT</option>
                            <option value="SS-011-2:ARMED SECURITY OFFICER" > SS-011-2:ARMED SECURITY OFFICER</option>
                            <option value="SS-012-2:SECURITY OFFICER" > SS-012-2:SECURITY OFFICER</option>
                            <option value="SS-013-3:SECURITY SUPERVISOR" > SS-013-3:SECURITY SUPERVISOR</option>
                            <option value="SS-014-3:BODYGUARD (CLOSE PROTECTION OFFICER)" > SS-014-3:BODYGUARD (CLOSE PROTECTION OFFICER)</option>
                            <option value="SS-020-2:CASH IN TRANSIT (CIT) OFFICER" > SS-020-2:CASH IN TRANSIT (CIT) OFFICER</option>
                            <option value="SS-020-3:CASH IN TRANSIT (CIT) SUPERVISOR" > SS-020-3:CASH IN TRANSIT (CIT) SUPERVISOR</option>
                            <option value="SS-030-2:DOG UNIT  SECURITY OFFICER (K9)" > SS-030-2:DOG UNIT  SECURITY OFFICER (K9)</option>
                            <option value="SS-030-3:DOG UNIT SECURITY SUPERVISOR (K9)" > SS-030-3:DOG UNIT SECURITY SUPERVISOR (K9)</option>
                            <option value="SS-040-2:CENTRAL MONITORING SYSTEM (CMS) SECURITY OFFICER" > SS-040-2:CENTRAL MONITORING SYSTEM (CMS) SECURITY OFFICER</option>
                            <option value="SS-041-2:CONTROL MONITORING SYSTEM (CMS) SECURITY RESPONSE OFFICER" > SS-041-2:CONTROL MONITORING SYSTEM (CMS) SECURITY RESPONSE OFFICER</option>
                            <option value="SS-042-3:CONTROL MONITORING SYSTEM SECURITY SUPERVISOR" > SS-042-3:CONTROL MONITORING SYSTEM SECURITY SUPERVISOR</option>
                            <option value="SS-050-2:ELECTRONIC SECURITY SYSTEM ASSISTANT TECHNICIAN" > SS-050-2:ELECTRONIC SECURITY SYSTEM ASSISTANT TECHNICIAN</option>
                            <option value="SS-050-3:ELECTRONIC SECURITY SYSTEM TECHNICIAN" > SS-050-3:ELECTRONIC SECURITY SYSTEM TECHNICIAN</option>
                            <option value="SS-060-2:DETECTIVES" > SS-060-2:DETECTIVES</option>
                            <option value="SS-060-3:INVESTIGATION DETECTIVES" > SS-060-3:INVESTIGATION DETECTIVES</option>
                            <option value="SS-070-2:PEWTER PATTERN AND MOULD" > SS-070-2:PEWTER PATTERN AND MOULD</option>
                            <option value="SS-070-3:PEWTER DESIGNER" > SS-070-3:PEWTER DESIGNER</option>
                            <option value="SS-080-1:JURUBATIK TERAP" > SS-080-1:JURUBATIK TERAP</option>
                            <option value="SS-080-2:JURUBATIK TERAP KANAN" > SS-080-2:JURUBATIK TERAP KANAN</option>
                            <option value="SS-080-3:PENYELIA BATIK TERAP" > SS-080-3:PENYELIA BATIK TERAP</option>
                            <option value="SS-090-1:JURUBATIK SKRIN" > SS-090-1:JURUBATIK SKRIN</option>
                            <option value="SS-090-2:JURUBATIK SKRIN KANAN" > SS-090-2:JURUBATIK SKRIN KANAN</option>
                            <option value="SS-090-3:PENYELIA BATIK SKRIN" > SS-090-3:PENYELIA BATIK SKRIN</option>
                            <option value="SS-100-1:JURUBATIK LUKIS" > SS-100-1:JURUBATIK LUKIS</option>
                            <option value="SS-100-2:JURUBATIK LUKIS KANAN" > SS-100-2:JURUBATIK LUKIS KANAN</option>
                            <option value="SS-100-3:PENYELIA BATIK LUKIS" > SS-100-3:PENYELIA BATIK LUKIS</option>
                            <option value="SS-101-1:JUNIOR RATTAN CRAFTER" > SS-101-1:JUNIOR RATTAN CRAFTER</option>
                            <option value="SS-101-2:RATTAN CRAFTER" > SS-101-2:RATTAN CRAFTER</option>
                            <option value="SS-101-3:SENIOR RATTAN CRAFTER" > SS-101-3:SENIOR RATTAN CRAFTER</option>
                            <option value="SS-110-4:EKSEKUTIF PENGELUARAN BATIK" > SS-110-4:EKSEKUTIF PENGELUARAN BATIK</option>
                            <option value="SS-120-4:PEREKA BATIK" > SS-120-4:PEREKA BATIK</option>
                            <option value="SS-130-5:PENGURUS PENGELUARAN BATIK" > SS-130-5:PENGURUS PENGELUARAN BATIK</option>
                            <option value="SS-140-1:TAPESTRY WEAVER" > SS-140-1:TAPESTRY WEAVER</option>
                            <option value="SS-140-2:SENIOR TAPESTRY WEAVER" > SS-140-2:SENIOR TAPESTRY WEAVER</option>
                            <option value="SS-140-3:TAPESTRY WEAVING SUPERVISOR" > SS-140-3:TAPESTRY WEAVING SUPERVISOR</option>
                            <option value="SS-140-4:WEAVING DESIGNER" > SS-140-4:WEAVING DESIGNER</option>
                            <option value="SS-141-2:SENIOR PUA WEAVER" > SS-141-2:SENIOR PUA WEAVER</option>
                            <option value="SS-141-3:PUA WEAVING SUPERVISOR" > SS-141-3:PUA WEAVING SUPERVISOR</option>
                            <option value="SS-142-1:WEAVER SONGKET & DASTER" > SS-142-1:WEAVER SONGKET & DASTER</option>
                            <option value="SS-142-2:SENIOR WEAVER SONGKET & DASTER" > SS-142-2:SENIOR WEAVER SONGKET & DASTER</option>
                            <option value="SS-142-3:SENIOR WEAVER SONGKET & DASTER" > SS-142-3:SENIOR WEAVER SONGKET & DASTER</option>
                            <option value="SS-142-4:WEAVING INDUSTRY EXECUTIVE" > SS-142-4:WEAVING INDUSTRY EXECUTIVE</option>
                            <option value="SS-142-5:WEAVING INDUSTRY MANAGER" > SS-142-5:WEAVING INDUSTRY MANAGER</option>
                            <option value="SS-201-1:ASSISTANT SILVER CRAFTMAN" > SS-201-1:ASSISTANT SILVER CRAFTMAN</option>
                            <option value="SS-201-2:SILVER CRAFTMAN" > SS-201-2:SILVER CRAFTMAN</option>
                            <option value="SS-201-3:SENIOR SILVER CRAFTMAN" > SS-201-3:SENIOR SILVER CRAFTMAN</option>
                            <option value="SS-202-1:ASSISTANT MOULD SOUVENIR MAKER" > SS-202-1:ASSISTANT MOULD SOUVENIR MAKER</option>
                            <option value="SS-202-2:SOUVENIR MOULD MAKER" > SS-202-2:SOUVENIR MOULD MAKER</option>
                            <option value="SS-202-3:SENIOR SOUVENIR MOULD MAKER" > SS-202-3:SENIOR SOUVENIR MOULD MAKER</option>
                            <option value="SSL2:SKID STEER LOADER OPERATOR" > SSL2:SKID STEER LOADER OPERATOR</option>
                            <option value="SWD1:SEWER INSTALLER" > SWD1:SEWER INSTALLER</option>
                            <option value="SWD2:SEWER FITTER" > SWD2:SEWER FITTER</option>
                            <option value="SWD3:SEWERAGE CIVIL AND STRUCTURE SUPERVISOR" > SWD3:SEWERAGE CIVIL AND STRUCTURE SUPERVISOR</option>
                            <option value="SWD4:SEWERAGE C & S MANAGER" > SWD4:SEWERAGE C & S MANAGER</option>
                            <option value="SWD5:SEWERAGE CONSTRUCTION MANAGER" > SWD5:SEWERAGE CONSTRUCTION MANAGER</option>
                            <option value="SWM1:SEWERAGE M & E INSTALLER" > SWM1:SEWERAGE M & E INSTALLER</option>
                            <option value="SWM2:SEWERAGE M & E FITTER" > SWM2:SEWERAGE M & E FITTER</option>
                            <option value="SWM3:SEWERAGE M & E SUPERVISOR" > SWM3:SEWERAGE M & E SUPERVISOR</option>
                            <option value="SWM4:SEWERAGE M & E MANAGER" > SWM4:SEWERAGE M & E MANAGER</option>
                            <option value="T-010:PENYELIAAN" > T-010:PENYELIAAN</option>
                            <option value="TA-010-1:TAILOR" > TA-010-1:TAILOR</option>
                            <option value="TA-010-2:SENIOR TAILOR" > TA-010-2:SENIOR TAILOR</option>
                            <option value="TA-010-3:TAILOR SUPERVISOR" > TA-010-3:TAILOR SUPERVISOR</option>
                            <option value="TA-012-1:CREATIVE SEWING MAKER" > TA-012-1:CREATIVE SEWING MAKER</option>
                            <option value="TA-012-2:CREATIVE SEWING SENIOR MAKER" > TA-012-2:CREATIVE SEWING SENIOR MAKER</option>
                            <option value="TA-012-3:CREATIVE SEWING SUPERVISOR" > TA-012-3:CREATIVE SEWING SUPERVISOR</option>
                            <option value="TCM2:TELESCOPIC MATERIAL HANDLER" > TCM2:TELESCOPIC MATERIAL HANDLER</option>
                            <option value="TLR1:TILER" > TLR1:TILER</option>
                            <option value="TLR2:TILER" > TLR2:TILER</option>
                            <option value="TP-010-1:MOTORCYCLE PAINTING OPERATOR" > TP-010-1:MOTORCYCLE PAINTING OPERATOR</option>
                            <option value="TP-010-2:MOTORCYCLE PAINTING SENIOR OPERATOR" > TP-010-2:MOTORCYCLE PAINTING SENIOR OPERATOR</option>
                            <option value="TP-010-3:MOTORCYCLE PAINTING SUPERVISOR" > TP-010-3:MOTORCYCLE PAINTING SUPERVISOR</option>
                            <option value="TP-020-2:JURUELEKTRIK MARIN" > TP-020-2:JURUELEKTRIK MARIN</option>
                            <option value="TP-020-3:JURUELEKTRIK KANAN MARIN" > TP-020-3:JURUELEKTRIK KANAN MARIN</option>
                            <option value="TP-021-1:MEKANIK MUDA MARIN(MEKANIKAL)" > TP-021-1:MEKANIK MUDA MARIN(MEKANIKAL)</option>
                            <option value="TP-021-2:MEKANIK MARIN (MEKANIKAL)" > TP-021-2:MEKANIK MARIN (MEKANIKAL)</option>
                            <option value="TP-021-3:JURUTEKNIK MARIN (MEKANIKAL)" > TP-021-3:JURUTEKNIK MARIN (MEKANIKAL)</option>
                            <option value="TP-022-1:FIBERGLASS HULL AND  SUPERSTRUCTURE BUILDER" > TP-022-1:FIBERGLASS HULL AND  SUPERSTRUCTURE BUILDER</option>
                            <option value="TP-022-2:SENIOR FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER" > TP-022-2:SENIOR FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER</option>
                            <option value="TP-022-3:FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER SUPERVISOR" > TP-022-3:FIBERGLASS HULL AND SUPERSTRUCTURE BUILDER SUPERVISOR</option>
                            <option value="TP-023-2:MARINE ELECTRONIC" > TP-023-2:MARINE ELECTRONIC</option>
                            <option value="TP-023-3:MARINE ELECTRONIC" > TP-023-3:MARINE ELECTRONIC</option>
                            <option value="TP-024-2:MARINE HULL TECHNICIAN" > TP-024-2:MARINE HULL TECHNICIAN</option>
                            <option value="TP-024-3:MARINE HULL SENIOR TECHNICIAN" > TP-024-3:MARINE HULL SENIOR TECHNICIAN</option>
                            <option value="TP-030-1:JURUBENTUK KERANGKA BADAN" > TP-030-1:JURUBENTUK KERANGKA BADAN</option>
                            <option value="TP-030-2:PEMASANG KERANGKA BADAN" > TP-030-2:PEMASANG KERANGKA BADAN</option>
                            <option value="TP-030-3:PENYELIA KERANGKA BADAN" > TP-030-3:PENYELIA KERANGKA BADAN</option>
                            <option value="TP-031-1:OPERATOR PERAPIAN BADAN KENDERAAN PENUMPANG" > TP-031-1:OPERATOR PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                            <option value="TP-031-2:OPERATOR KANAN PERAPIAN BADAN KENDERAAN PENUMPANG" > TP-031-2:OPERATOR KANAN PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                            <option value="TP-031-3:PENYELIA PERAPIAN BADAN KENDERAAN PENUMPANG" > TP-031-3:PENYELIA PERAPIAN BADAN KENDERAAN PENUMPANG</option>
                            <option value="TP-040-1:JUNIOR AIRCRAFT INTERIOR MAINTENANCE TECHNICIAN" > TP-040-1:JUNIOR AIRCRAFT INTERIOR MAINTENANCE TECHNICIAN</option>
                            <option value="TP-040-2:AIRCRAFT INTERIOR MAINTENANCE TECHNICIAN" > TP-040-2:AIRCRAFT INTERIOR MAINTENANCE TECHNICIAN</option>
                            <option value="TP-040-3:SENIOR AIRCRAFT INTERIOR MAINTENANCE TECHNICIAN" > TP-040-3:SENIOR AIRCRAFT INTERIOR MAINTENANCE TECHNICIAN</option>
                            <option value="TP-051-3:AIRCRAFT GROUND SUPPORT EQUIPMENT (GSE) TECHNICIAN" > TP-051-3:AIRCRAFT GROUND SUPPORT EQUIPMENT (GSE) TECHNICIAN</option>
                            <option value="TP-060-4:AIRCRAFT TECHNICIAN (MECHANICAL)" > TP-060-4:AIRCRAFT TECHNICIAN (MECHANICAL)</option>
                            <option value="TP-061-5:AIRFRAME LAE(AEROPLANE 1)" > TP-061-5:AIRFRAME LAE(AEROPLANE 1)</option>
                            <option value="TP-062-5:AIRFRAME LAE (AEROPLANE II)" > TP-062-5:AIRFRAME LAE (AEROPLANE II)</option>
                            <option value="TP-063-5:ENGINE LAE (PROP & TURBINE)" > TP-063-5:ENGINE LAE (PROP & TURBINE)</option>
                            <option value="TP-064-5:ENGINE LAE (PISTON)" > TP-064-5:ENGINE LAE (PISTON)</option>
                            <option value="TP-070-4:AIRCRAFT TECHNICIAN (AVIONIC)" > TP-070-4:AIRCRAFT TECHNICIAN (AVIONIC)</option>
                            <option value="TP-071-5:AVIONIC LAE (ELECTRICAL)" > TP-071-5:AVIONIC LAE (ELECTRICAL)</option>
                            <option value="TP-072-5:AVIONIC LAE (INSTRUMENT)" > TP-072-5:AVIONIC LAE (INSTRUMENT)</option>
                            <option value="TP-080-1:PEMBUAT PEMBUATAN BOT TRADISIONAL DUYUNG" > TP-080-1:PEMBUAT PEMBUATAN BOT TRADISIONAL DUYUNG</option>
                            <option value="TP-080-2:PENGURUS PEMBUAT PEMBUATAN BOT TRADISIONAL DUYUNG" > TP-080-2:PENGURUS PEMBUAT PEMBUATAN BOT TRADISIONAL DUYUNG</option>
                            <option value="TP-080-3:PENYELIA PEMBUAT PEMBUATAN BOT TRADISIONAL DUYUNG" > TP-080-3:PENYELIA PEMBUAT PEMBUATAN BOT TRADISIONAL DUYUNG</option>
                            <option value="TP-090-1:ENGINE RATING" > TP-090-1:ENGINE RATING</option>
                            <option value="TP-090-2:WATCH KEEPING" > TP-090-2:WATCH KEEPING</option>
                            <option value="TP-090-3:ABLE SEAFARER ENGINE" > TP-090-3:ABLE SEAFARER ENGINE</option>
                            <option value="TP-090-4:WATCH KEEPING ENGINEER OF 750KW OR MORE ON NEAR COASTAL TRADE VOYAGE" > TP-090-4:WATCH KEEPING ENGINEER OF 750KW OR MORE ON NEAR COASTAL TRADE VOYAGE</option>
                            <option value="TP-090-5:SECOND ENGINEER OFFICER OF 3000KW OR MORE ON NEAR COASTAL TRADE VOYAGE" > TP-090-5:SECOND ENGINEER OFFICER OF 3000KW OR MORE ON NEAR COASTAL TRADE VOYAGE</option>
                            <option value="TP-100-1:MEKANIK KELENGKAPAN TOLAK TANAH" > TP-100-1:MEKANIK KELENGKAPAN TOLAK TANAH</option>
                            <option value="TP-100-2:JURUTEKNIK KELENGKAPAN TOLAK TANAH" > TP-100-2:JURUTEKNIK KELENGKAPAN TOLAK TANAH</option>
                            <option value="TP-100-3:JURUTEKNIK KANAN KELENGKAPAN TOLAK TANAH" > TP-100-3:JURUTEKNIK KANAN KELENGKAPAN TOLAK TANAH</option>
                            <option value="TP-110-3:PENASIHAT TUNTUTAN KENDERAAN KEMALANGAN" > TP-110-3:PENASIHAT TUNTUTAN KENDERAAN KEMALANGAN</option>
                            <option value="TP-300-2:JURUTEKNIK KENDERAAN MOTOR" > TP-300-2:JURUTEKNIK KENDERAAN MOTOR</option>
                            <option value="TP-300-3:JURUTEKNIK KANAN KENDERAAN MOTOR" > TP-300-3:JURUTEKNIK KANAN KENDERAAN MOTOR</option>
                            <option value="TP-310-4:AUTOMOTIVE ELECTRICAL TECHNOLOGIST" > TP-310-4:AUTOMOTIVE ELECTRICAL TECHNOLOGIST</option>
                            <option value="TP-310-5:AUTOMOTIVE ELECTRICAL TECHNOLOGIST" > TP-310-5:AUTOMOTIVE ELECTRICAL TECHNOLOGIST</option>
                            <option value="TP-410-1:AUTOMOBILE TRIM & FINAL LINE OPERATOR" > TP-410-1:AUTOMOBILE TRIM & FINAL LINE OPERATOR</option>
                            <option value="TP-410-2:AUTOMOBILE TRIM & FINAL LINE SENIOR OPERATOR" > TP-410-2:AUTOMOBILE TRIM & FINAL LINE SENIOR OPERATOR</option>
                            <option value="TP-410-3:AUTOMOBILE TRIM & FINAL LINE SUPERVISOR" > TP-410-3:AUTOMOBILE TRIM & FINAL LINE SUPERVISOR</option>
                            <option value="TP-410-4:AUTOMOTIVE ASSEMBLY EXECUTIVE" > TP-410-4:AUTOMOTIVE ASSEMBLY EXECUTIVE</option>
                            <option value="TP-410-5:AUTOMOTIVE ASSEMBLY MANAGER" > TP-410-5:AUTOMOTIVE ASSEMBLY MANAGER</option>
                            <option value="TP-411-1:AUTOMOBILE BODY ASSEMBLY OPERATOR" > TP-411-1:AUTOMOBILE BODY ASSEMBLY OPERATOR</option>
                            <option value="TP-411-2:AUTOMOBILE BODY ASSEMBLY SENIOR OPERATOR" > TP-411-2:AUTOMOBILE BODY ASSEMBLY SENIOR OPERATOR</option>
                            <option value="TP-411-3:AUTOMOBILE BODY ASSEMBLY SUPERVISOR" > TP-411-3:AUTOMOBILE BODY ASSEMBLY SUPERVISOR</option>
                            <option value="TP-412-1:AUTOMOBILE PAINTING OPERATOR" > TP-412-1:AUTOMOBILE PAINTING OPERATOR</option>
                            <option value="TP-412-2:AUTOMOBILE PAINTING SENIOR OPERATOR" > TP-412-2:AUTOMOBILE PAINTING SENIOR OPERATOR</option>
                            <option value="TP-412-3:AUTOMOBILE PAINTING SUPERVISOR" > TP-412-3:AUTOMOBILE PAINTING SUPERVISOR</option>
                            <option value="TP-413-1:RECOVERY OPERATOR" > TP-413-1:RECOVERY OPERATOR</option>
                            <option value="TP-413-2:RECOVERY TECHNICIAN" > TP-413-2:RECOVERY TECHNICIAN</option>
                            <option value="TP-413-3:RECOVERY SUPERVISOR" > TP-413-3:RECOVERY SUPERVISOR</option>
                            <option value="TP-500-1:FABRIKATOR (KIMPALAN) MOTOSIKAL" > TP-500-1:FABRIKATOR (KIMPALAN) MOTOSIKAL</option>
                            <option value="TP-500-2:FABRIKATOR KANAN (KIMPALAN) MOTOSIKAL" > TP-500-2:FABRIKATOR KANAN (KIMPALAN) MOTOSIKAL</option>
                            <option value="TP-500-3:PENYELIA FABRIKATOR (KIMPALAN) MOTOSIKAL" > TP-500-3:PENYELIA FABRIKATOR (KIMPALAN) MOTOSIKAL</option>
                            <option value="TP-510-1:OPERATOR PEMASANG BADAN MOTOSIKAL" > TP-510-1:OPERATOR PEMASANG BADAN MOTOSIKAL</option>
                            <option value="TP-510-2:OPERATOR KANAN PEMASANG BADAN MOTOSIKAL" > TP-510-2:OPERATOR KANAN PEMASANG BADAN MOTOSIKAL</option>
                            <option value="TP-510-3:PENYELIA PEMASANGAN BADAN MOTOSIKAL" > TP-510-3:PENYELIA PEMASANGAN BADAN MOTOSIKAL</option>
                            <option value="TP-511-1:OPERATOR MENYADUR MOTOSIKAL" > TP-511-1:OPERATOR MENYADUR MOTOSIKAL</option>
                            <option value="TP-511-2:OPERATOR KANAN MENYADUR MOTOSIKAL" > TP-511-2:OPERATOR KANAN MENYADUR MOTOSIKAL</option>
                            <option value="TP-511-3:PENYELIA MENYADUR MOTOSIKAL" > TP-511-3:PENYELIA MENYADUR MOTOSIKAL</option>
                            <option value="TP-512-1:OPERATOR PEMASANGAN ENJIN MOTOSIKAL" > TP-512-1:OPERATOR PEMASANGAN ENJIN MOTOSIKAL</option>
                            <option value="TP-512-2:OPERATOR KANAN PEMASANGAN ENJIN MOTOSIKAL" > TP-512-2:OPERATOR KANAN PEMASANGAN ENJIN MOTOSIKAL</option>
                            <option value="TP-512-3:PENYELIA PEMASANGAN ENJIN MOTOSIKAL" > TP-512-3:PENYELIA PEMASANGAN ENJIN MOTOSIKAL</option>
                            <option value="TP-513-2:INSPEKTOR AKHIR MOTOSIKAL" > TP-513-2:INSPEKTOR AKHIR MOTOSIKAL</option>
                            <option value="TP-513-3:PENYELIA AKHIR MOTOSIKAL" > TP-513-3:PENYELIA AKHIR MOTOSIKAL</option>
                            <option value="TP-600-1:MEKANIK JENTERA PERTANIAN" > TP-600-1:MEKANIK JENTERA PERTANIAN</option>
                            <option value="TP-600-2:JURUTEKNIK JENTERA PERTANIAN" > TP-600-2:JURUTEKNIK JENTERA PERTANIAN</option>
                            <option value="TP-600-3:JURUTEKNIK KANAN JENTERA PERTANIAN" > TP-600-3:JURUTEKNIK KANAN JENTERA PERTANIAN</option>
                            <option value="TRH2:OFF HIGHWAY TRUCK 0PERATOR" > TRH2:OFF HIGHWAY TRUCK 0PERATOR</option>
                            <option value="U-010-3:PEMANDU SELAM SKUBA REKREASI" > U-010-3:PEMANDU SELAM SKUBA REKREASI</option>
                            <option value="U-010-4:EKSEKUTIF OPERASI SELAM SKUBA REKREASI" > U-010-4:EKSEKUTIF OPERASI SELAM SKUBA REKREASI</option>
                            <option value="U-010-5:PENGURUS OPERASI SELAM SKUBA REKREASI" > U-010-5:PENGURUS OPERASI SELAM SKUBA REKREASI</option>
                            <option value="U-020-3:KETUA SELAM SKUBA REKREASI" > U-020-3:KETUA SELAM SKUBA REKREASI</option>
                            <option value="U-020-4:JURULATIH SELAM SKUBA REKREASI" > U-020-4:JURULATIH SELAM SKUBA REKREASI</option>
                            <option value="U-020-5:PENGAJAR JURULATIH SELAM SKUBA REKREASI" > U-020-5:PENGAJAR JURULATIH SELAM SKUBA REKREASI</option>
                            <option value="U-021-2:PENYELAM GAS CAMPURAN" > U-021-2:PENYELAM GAS CAMPURAN</option>
                            <option value="U-021-3:PENYELIA SELAMAN GAS CAMPURAN" > U-021-3:PENYELIA SELAMAN GAS CAMPURAN</option>
                            <option value="U-022-2:PENYELAM TEPU" > U-022-2:PENYELAM TEPU</option>
                            <option value="U-022-3:PENYELIA SELAMAN TEPU" > U-022-3:PENYELIA SELAMAN TEPU</option>
                            <option value="U-023-2:PENYELAM UDARA BEKALAN PERMUKAAN" > U-023-2:PENYELAM UDARA BEKALAN PERMUKAAN</option>
                            <option value="U-023-3:PENYELIA SELAMAN UDARA BEKALAN PERMUKAAN" > U-023-3:PENYELIA SELAMAN UDARA BEKALAN PERMUKAAN</option>
                            <option value="V-020-3:PEMBANTU UKUR TANAH (KEJURUTERAAN)" > V-020-3:PEMBANTU UKUR TANAH (KEJURUTERAAN)</option>
                            <option value="V-020-4:PEMBANTU UKUR TANAH KANAN" > V-020-4:PEMBANTU UKUR TANAH KANAN</option>
                            <option value="V-020-5:PENGURUS UKUR TANAH" > V-020-5:PENGURUS UKUR TANAH</option>
                            <option value="W-010-2:OPERATOR TERMINAL (FRONT END LOADER & REACH STACKER)" > W-010-2:OPERATOR TERMINAL (FRONT END LOADER & REACH STACKER)</option>
                            <option value="W-011-3:OPERATOR TERMINAL KANAN (GANTRY CRANE)" > W-011-3:OPERATOR TERMINAL KANAN (GANTRY CRANE)</option>
                            <option value="W-012-3:OPERATOR TERMINAL KANAN (RUBBER TYRED GANTRY CRANE)" > W-012-3:OPERATOR TERMINAL KANAN (RUBBER TYRED GANTRY CRANE)</option>
                            <option value="Y-010-1:PEKERJA VETERINAR" > Y-010-1:PEKERJA VETERINAR</option>
                            <option value="Y-010-2:PEMBANTU RENDAH VETERINAR" > Y-010-2:PEMBANTU RENDAH VETERINAR</option>
                            <option value="Y-010-3:PEMBANTU VETERINAR" > Y-010-3:PEMBANTU VETERINAR</option>
                            <option value="Y-010-4:PENOLONG PENGURUS VETERINAR" > Y-010-4:PENOLONG PENGURUS VETERINAR</option>
                            <option value="Y-010-5:PENGURUS VETERINAR" > Y-010-5:PENGURUS VETERINAR</option>
                            <option value="Y-011-1:PEKERJA LADANG TERNAKAN POLTRI" > Y-011-1:PEKERJA LADANG TERNAKAN POLTRI</option>
                            <option value="Y-011-2:JURUTEKNIK RENDAH LADANG POLTRI" > Y-011-2:JURUTEKNIK RENDAH LADANG POLTRI</option>
                            <option value="Y-011-3:JURUTEKNIK LADANG POLTRI" > Y-011-3:JURUTEKNIK LADANG POLTRI</option>
                            <option value="Y-011-4:PENOLONG PENGURUS LADANG POLTRI" > Y-011-4:PENOLONG PENGURUS LADANG POLTRI</option>
                            <option value="Y-011-5:PENGURUS LADANG POLTRI" > Y-011-5:PENGURUS LADANG POLTRI</option>
                            <option value="Y-012-1:PEKERJA LADANG RUMINAN" > Y-012-1:PEKERJA LADANG RUMINAN</option>
                            <option value="Y-012-2:PEMBANTU LADANG RUMINAN" > Y-012-2:PEMBANTU LADANG RUMINAN</option>
                            <option value="Y-012-3:PENYELIA LADANG RUMINAN" > Y-012-3:PENYELIA LADANG RUMINAN</option>
                            <option value="Y-012-4:PENOLONG PENGURUS LADANG RUMINAN" > Y-012-4:PENOLONG PENGURUS LADANG RUMINAN</option>
                            <option value="Y-012-5:PENGURUS LADANG RUMINAN" > Y-012-5:PENGURUS LADANG RUMINAN</option>
                            <option value="Y-020-1:PEMBANTU PERIKANAN" > Y-020-1:PEMBANTU PERIKANAN</option>
                            <option value="Y-020-2:JURUTEKNIK RENDAH PERIKANAN" > Y-020-2:JURUTEKNIK RENDAH PERIKANAN</option>
                            <option value="Y-020-3:JURUTEKNIK PERIKANAN" > Y-020-3:JURUTEKNIK PERIKANAN</option>
                            <option value="Y-021-4:EKSEKUTIF AKUAKULTUR" > Y-021-4:EKSEKUTIF AKUAKULTUR</option>
                            <option value="Y-021-5:PENGURUS AKUAKULTUR" > Y-021-5:PENGURUS AKUAKULTUR</option>
                            <option value="Y-022-3:JURUTEKNIK AKUAKULTUR (IKAN)" > Y-022-3:JURUTEKNIK AKUAKULTUR (IKAN)</option>
                            <option value="Y-024-3:JURUTEKNIK AKUAKULTUR (MOLUSKA)" > Y-024-3:JURUTEKNIK AKUAKULTUR (MOLUSKA)</option>
                            <option value="Y-030-1:MANDUR" > Y-030-1:MANDUR</option>
                            <option value="Y-030-2:KONDUKTOR LADANG" > Y-030-2:KONDUKTOR LADANG</option>
                            <option value="Y-030-3:KONDUKTOR LADANG KANAN" > Y-030-3:KONDUKTOR LADANG KANAN</option>
                            <option value="Y-030-4:PENOLONG PENGURUS LADANG KELAPA SAWIT" > Y-030-4:PENOLONG PENGURUS LADANG KELAPA SAWIT</option>
                            <option value="Y-030-5:PENGURUS LADANG KELAPA SAWIT" > Y-030-5:PENGURUS LADANG KELAPA SAWIT</option>
                            <option value="Y-031-1:OPERATOR PENGELUARAN (KILANG MINYAK SAWIT)" > Y-031-1:OPERATOR PENGELUARAN (KILANG MINYAK SAWIT)</option>
                            <option value="Y-031-4:PENOLONG PENGURUS KILANG (KILANG MINYAK SAWIT)" > Y-031-4:PENOLONG PENGURUS KILANG (KILANG MINYAK SAWIT)</option>
                            <option value="Y-031-5:PENGURUS KILANG (KILANG MINYAK SAWIT)" > Y-031-5:PENGURUS KILANG (KILANG MINYAK SAWIT)</option>
                            <option value="Y-032-2:PEMBANTU JURUTEKNIK PENGELUARAN (KILANG MINYAK SAWIT)" > Y-032-2:PEMBANTU JURUTEKNIK PENGELUARAN (KILANG MINYAK SAWIT)</option>
                            <option value="Y-032-3:JURUTEKNIK PENGELUARAN (KILANG MINYAK SAWIT)" > Y-032-3:JURUTEKNIK PENGELUARAN (KILANG MINYAK SAWIT)</option>
                            <option value="Y-033-2:PEMBANTU JURUTEKNIK PENYENGGARAAN (KILANG MINYAK SAWIT)" > Y-033-2:PEMBANTU JURUTEKNIK PENYENGGARAAN (KILANG MINYAK SAWIT)</option>
                            <option value="Y-033-3:JURUTEKNIK PENYENGGARAAN (KILANG MINYAK SAWIT)" > Y-033-3:JURUTEKNIK PENYENGGARAAN (KILANG MINYAK SAWIT)</option>
                            <option value="Y-040-1:OPERATOR PENGELUARAN PEMPROSESAN MAKANAN" > Y-040-1:OPERATOR PENGELUARAN PEMPROSESAN MAKANAN</option>
                            <option value="Y-040-2:OPERATOR PENGELUARAN KANAN PEMPROSESAN MAKANAN" > Y-040-2:OPERATOR PENGELUARAN KANAN PEMPROSESAN MAKANAN</option>
                            <option value="Y-040-3:PENYELIA PENGELUARAN PEMPROSESAN MAKANAN" > Y-040-3:PENYELIA PENGELUARAN PEMPROSESAN MAKANAN</option>
                            <option value="Y-040-4:PENOLONG PENGURUS PENGELUARAN-PEMPROSESAN MAKANAN" > Y-040-4:PENOLONG PENGURUS PENGELUARAN-PEMPROSESAN MAKANAN</option>
                            <option value="Y-040-5:PENGURUS PENGELUARAN-PEMPROSESAN MAKANAN" > Y-040-5:PENGURUS PENGELUARAN-PEMPROSESAN MAKANAN</option>
                            <option value="Y-050-1:PEKERJA LADANG PERTANIAN" > Y-050-1:PEKERJA LADANG PERTANIAN</option>
                            <option value="Y-050-3:JURUTEKNIK PERTANIAN" > Y-050-3:JURUTEKNIK PERTANIAN</option>
                            <option value="Y-050-4:EKSEKUTIF PERTANIAN" > Y-050-4:EKSEKUTIF PERTANIAN</option>
                            <option value="Y-050-5:PENGURUS LADANG PERTANIAN" > Y-050-5:PENGURUS LADANG PERTANIAN</option>
                            <option value="Y-051-2:JURUTEKNIK PERTANIAN RENDAH (SAYUR- SAYURAN)" > Y-051-2:JURUTEKNIK PERTANIAN RENDAH (SAYUR- SAYURAN)</option>
                            <option value="Y-052-2:JURUTEKNIK PERTANIAN RENDAH (BUAH-BUAHAN)" > Y-052-2:JURUTEKNIK PERTANIAN RENDAH (BUAH-BUAHAN)</option>
                            <option value="Y-053-2:JURUTEKNIK PERTANIAN RENDAH (TANAMAN HIASAN)" > Y-053-2:JURUTEKNIK PERTANIAN RENDAH (TANAMAN HIASAN)</option>
                            <option value="Y-060-4:EKSEKUTIF PENYELIDIKAN DAN PEMBANGUNAN (AKTIVITI-AKTIVITI INDUSTRI BERKAITAN PERTANIAN)" > Y-060-4:EKSEKUTIF PENYELIDIKAN DAN PEMBANGUNAN (AKTIVITI-AKTIVITI INDUSTRI BERKAITAN PERTANIAN)</option>
                            <option value="Y-060-5:PENGURUS PENYELIDIKAN DAN PEMBANGUNAN (AKTIVITI-AKTIVITI INDUSTRI BERKAITAN PERTANIAN)" > Y-060-5:PENGURUS PENYELIDIKAN DAN PEMBANGUNAN (AKTIVITI-AKTIVITI INDUSTRI BERKAITAN PERTANIAN)</option>
                            <option value="Y-070-2:WAKIL JUALAN (PENGEDARAN MAKANAN)" > Y-070-2:WAKIL JUALAN (PENGEDARAN MAKANAN)</option>
                            <option value="Y-070-3:PENYELIA JUALAN (PENGEDARAN MAKANAN)" > Y-070-3:PENYELIA JUALAN (PENGEDARAN MAKANAN)</option>
                            <option value="Y-070-4:EKSEKUTIF JUALAN-PENGEDARAN MAKANAN" > Y-070-4:EKSEKUTIF JUALAN-PENGEDARAN MAKANAN</option>
                            <option value="Y-070-5:PENGURUS JUALAN-PENGEDARAN MAKANAN" > Y-070-5:PENGURUS JUALAN-PENGEDARAN MAKANAN</option>
                            <option value="Y-080-2:PEMBANTU GUDANG (PENGEDARAN MAKANAN)" > Y-080-2:PEMBANTU GUDANG (PENGEDARAN MAKANAN)</option>
                            <option value="Y-080-3:PENYELIA GUDANG (PENGEDARAN MAKANAN)" > Y-080-3:PENYELIA GUDANG (PENGEDARAN MAKANAN)</option>
                            <option value="Y-090-2:WAKIL PEMASARAN-PENGEDARAN MAKANAN" > Y-090-2:WAKIL PEMASARAN-PENGEDARAN MAKANAN</option>
                            <option value="Y-090-3:PENYELIA PEMASARAN-PENGEDARAN MAKANAN" > Y-090-3:PENYELIA PEMASARAN-PENGEDARAN MAKANAN</option>
                            <option value="Y-090-4:PENOLONG PENGURUS PEMASARAN-PENGEDARAN MAKANAN" > Y-090-4:PENOLONG PENGURUS PEMASARAN-PENGEDARAN MAKANAN</option>
                            <option value="Y-090-5:PENGURUS-PENGEDARAN MAKANAN" > Y-090-5:PENGURUS-PENGEDARAN MAKANAN</option>
                            <option value="Y-100-1:OPERATOR MEKANISASI PERLADANGAN SAWIT GRED 2" > Y-100-1:OPERATOR MEKANISASI PERLADANGAN SAWIT GRED 2</option>
                            <option value="Y-100-2:OPERATOR MEKANISASI PERLADANGAN SAWIT GRED 1" > Y-100-2:OPERATOR MEKANISASI PERLADANGAN SAWIT GRED 1</option>
                            <option value="Y-100-3:PENYELIA MEKANISASI PERLADANGAN SAWIT" > Y-100-3:PENYELIA MEKANISASI PERLADANGAN SAWIT</option>
                            <option value="Z-009-1:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS TAHAP 3" > Z-009-1:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS TAHAP 3</option>
                            <option value="Z-009-2:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS" > Z-009-2:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS</option>
                            <option value="Z-009-3:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS TAHAP 2" > Z-009-3:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS TAHAP 2</option>
                            <option value="Z-009-4:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS TAHAP 4 DAN KEATAS" > Z-009-4:KEMAHIRAN TERAS YANG PERLU DILAKSANAKAN BERSAMA NOSS TAHAP 4 DAN KEATAS</option>
         				</select>

               		</div>
           	</div>
            <div class="form-group">
                <label for="institut">17. *TEMPAT PENGAJIAN</label>
                <input type="input" class="form-control must" id="institut" name="institut" placeholder="Tempat Pengajian">
            </div>
            <!--<div class="form-group">
                <label for="alamat_tetap">18-a. *ALAMAT TETAP (No. Rumah, Jalan, Poskod, Taman/Kampung, Bandar dan Negeri)</label>
                <textarea class="form-control must" id="alamat_tetap" rows="3"></textarea>
            </div>-->
            <div class="form-group">
                <label for="alamat_surat">18. *ALAMAT SURAT MENYURAT(No. Rumah, Jalan, Poskod, Taman/Kampung, Bandar dan Negeri)</label>
                <textarea class="form-control must" id="alamat_surat" rows="3" name="alamat_surat"></textarea>
            </div>
            <div class="form-group">
                <label for="Telefon">19. *TELEFON</label>
                <input type="input" class="form-control" id="tel_rumah" placeholder="Telefon Rumah">
                <br>
                <input type="input" class="form-control" id="tel_pejabat" placeholder="Telefon Pejabat">
                <br>
                <input type="input" class="form-control" id="tel_bimbit" name="tel_bimbit" placeholder="Telefon Bimbit">
            </div>
            <div class="form-group">
                <label for="emel">20. *EMAIL</label>
                <input type="input" class="form-control must" id="emel" placeholder="emel" name="emel">   
            </div>
          <div class="form divider"></div>
          <legend><label class="form label">Pengalaman</label></legend>    
         
                
        <div class="form-group">
                <label for="majikan">NAMA MAJIKAN</label>
                <textarea class="form-control must" id="majikan" rows="3" name="majikan"></textarea>
        </div>
        <div class="form-group">
                <label for="pengalaman">PENGALAMAN KERJA</label>
                <textarea class="form-control must" id="pengalaman" rows="3" name="pengalaman"></textarea>
        </div>
        <div class="form divider"></div>
        <fieldset>
        	<legend><label class="form label">Akuan Permohonan</label></legend>
  			<div class="checkbox">

				<label>
                	<input type="checkbox" class="akuan" value="">
                	Saya mengaku bahawa semua kenyataan yang diberikan di atas adalah benar.
              	</label>
            </div>
            <div class="checkbox">
				<label>
                	<input type="checkbox" class="akuan" value="">
                	Saya memahami bahawa permohonan yang mengandungi maklumat palsu dan tidak lengkap adalah berhak untuk ditolak.
              	</label>
            </div>
            <div class="form-group">
		    	<button type="submit" class="btn btn-primary" id="hantar" name="action" value="hantar" disabled>Hantar Permohonan</button>
				<button type="button" class="btn btn-default" id="batal">Batal</button>
            </div>

        </fieldset>
	</form>

</div>
</body>
</html>
