<!DOCTYPE html>
<html><head>
    <title>Laporan Data Sapi</title>

    
</head><body>
    <center>
<table>
  <tr>
    <td><img src="assets/Palembang.png" width="60" height="60"></td>
    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
    <td>
      <center>
        <font size="4">DINAS PERTANIAN DAN KETAHANAN PANGAN</font><br>
        <font size="4">KOTA PALEMBANG</font><br>
        <font size="2"><i>Jalan TP. H, Jl. Sofian Kenawas, Gandus, Kota Palembang-30149</i></font>

      </center>
    </td>
  </tr>

  <hr>
</table>
</center>
    

<h3><center>Laporan Data Pemeriksaan Postmortem RPH Gandus</center></h3>
<table style="border-collapse: collapse; width:100%; margin-top: 5px;">
  <tr>
    <th style="border:1px solid">No Pemeriksaan Postmortem</th>
    <th style="border:1px solid">No Telinga</th>
    <th style="border:1px solid">Tanggal Pemeriksaan Antemortem</th>
    <th style="border:1px solid">Wajah</th>
    <th style="border:1px solid">Limpoglandula</th>
    <th style="border:1px solid"> Jantung</th>
    <th style="border:1px solid"> Paru</th>
    <th style="border:1px solid">Hati</th>
    <th style="border:1px solid"> Limpa</th>
    <th style="border:1px solid"> Usus & Lambung</th>
    <th style="border:1px solid"> Daging</th>
    <th style="border:1px solid"> Tanggal Pemeriksaan</th>
    <th style="border:1px solid">Atas Nama</th>
    
  </tr>
  <?php foreach($sapi as $sapi_data) :?>
  <tr>
    <th style="border:1px solid"><?= $sapi_data['id_postmortem'];?></th>
    <th style="border:1px solid"><?= $sapi_data['no_telinga'];?></th>
    <th style="border:1px solid"><?= $sapi_data['tanggal_pemeriksaan'];?></th>
    <th style="border:1px solid"><?= $sapi_data['wajah'];?></th>
    <th style="border:1px solid"><?= $sapi_data['limpoglandula'];?></th>
    <th style="border:1px solid"><?= $sapi_data['jantung'];?></th>
    <th style="border:1px solid"><?= $sapi_data['paru'];?></th>
    <th style="border:1px solid"><?= $sapi_data['hati'];?></th>
    <th style="border:1px solid"><?= $sapi_data['limpa'];?></th>
    <th style="border:1px solid"><?= $sapi_data['usus_lambung'];?></th>
    <th style="border:1px solid"><?= $sapi_data['daging'];?></th>
    <th style="border:1px solid"><?= $sapi_data['tanggal_postmortem'];?></th>
    <th style="border:1px solid"><?= $sapi_data['username'];?></th>
   
   
  </tr>
<?php endforeach; ?>
</table>
<h4>Palembang, <?php echo date('d-M-Y');?> </h4>
  <br><br><br><br>

 <h4>Mengetahui,<br><u><?= $params = $_SESSION['name'];?></u> <br>NIP. <?= $params = $_SESSION['userid'];?></h4>
</body></html>