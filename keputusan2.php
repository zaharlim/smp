<?php
include("filemaker.php");

$fm = new filemaker("Temuduga", "10.41.51.11", "zaharlim", "jakijipang");

//$fm = new FileMaker();
//$fm->setProperty('database', 'Maklumat Pelajar PPK-2015'); 
//$fm->setProperty('username', 'zaharlim'); 
//$fm->setProperty('password', 'jakijipang');
$databases = $fm->listDatabases(); 
print_r($databases);

$databases->getMessage();
exit;
$layouts = $fm->listLayouts();

// If an error is found, return a message and exit.
if (FileMaker::isError($layouts)) {
    printf("Error %s: s\n", $layouts->getCode());
    "<br>";
    printf($layouts->getMessage());
    exit;
}
// Print out layout names
foreach ($layouts as $layout) {
    echo $layout . "<br>";
}


//var_dump($layout);
exit;
$findCommand = $fm->newFindCommand('Maklumat Calon');
$findCommand->addFindCriterion('NO KP', $_GET["nokp"]);
$findCommand->addFindCriterion('PUSAT TEMUDUGA', $_POST["pusat"]);
$findCommand->addFindCriterion('KURSUS DIPOHON', $_POST["kursus"]);
$findCommand->addFindCriterion('KELAYAKAN', $_POST["layak"]);
//$findCommand->addFindCriterion('NO.NDP', 'CSC05115');
//$findCommand->addSortRule('NO.NDP',1, FILEMAKER_SORT_ASCEND);
$result = $findCommand->execute();
if (FileMaker::isError($result)) {
    echo "Error: " . $result->getMessage() . "\n";
    //header('Location:gagal2.php');
    exit;
}
$records = $result->getRecords();
$found = $result->getFoundSetCount();


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="theme.css">

<script src="js/bootstrap.min.js"></script>
<title>SISTEM MAKLUMAT Temuduga</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<u><h1 align="center">Maklumat Temuduga Kemasukan Pelajar</h1></u>

<style>
table, th, td {
    border: 1px solid black;
    border-spacing: 0;


    
}
th, td {
    padding: 10px;
    font-size: 75%;
    font-family: Tahoma, Helvetica;


  
}
th {
    text-align: left;
}
img {
  
  width: 100%;
  

}
</style>
</head>

<body>

<table align="center" style="100%">
<tr bgcolor="#FFCC00">
  <td><span><strong>NAMA</strong></span></td>
  <td><strong>NO. KAD PENGENALAN</strong></td>
  <td><strong>KURSUS DIPOHON</strong></td>
  <td><strong>PUSAT TEMUDUGA</strong></td>
  <td align="center"><strong>TARIKH TEMUDUGA</strong>
  <td><strong>SURAT TAWARAN</strong></td>
  </tr>
<?php

foreach ($records as $record) { ?>
<tr>
  <td><?php echo $record->getField('NAMA'); ?></td>
  <td align="center"><?php echo $record->getField('NO KP'); ?></td>
  <td><?php echo $record->getField('KOD KURSUS'); ?></td>
  <td><?php echo $record->getField('PUSAT TEMUDUGA');?></td>
  <td><?php $tarikh = date_create($record->getField('TARIKH TEMUDUGA')) ;
        echo date_format($tarikh, "d/m/Y"); ?></td>
  <td><a href= "<?php echo $record->getField('TAWARAN TEMUDUGA'); ?>">Surat Temuduga</a></td>
  
</tr>
<?php } ?>
</table>
<br>
<div align="center">
<a href="semaktemuduga.php" class="btn btn-info btn-sm" role="button" >Kembali</a>
</div>
</body>
</html>


