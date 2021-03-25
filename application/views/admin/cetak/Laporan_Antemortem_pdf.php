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
    

<h3><center>Laporan Data Pemeriksaan Antemortem RPH Gandus</center></h3>
<table style="border-collapse: collapse; width:100%; margin-top: 5px;">
  <tr>
    <th style="border:1px solid">No Pemeriksaan Antemortem</th>
    <th style="border:1px solid">No Telinga</th>
    <th style="border:1px solid">Atasnama</th>
    <th style="border:1px solid">Tanggal Masuk</th>
    <th style="border:1px solid">Mata</th>
    <th style="border:1px solid">Hidung</th>
    <th style="border:1px solid"> Mulut</th>
    <th style="border:1px solid"> Selaput Lendir</th>
    <th style="border:1px solid">Kebersihan Sapi</th>
    <th style="border:1px solid"> Gizi</th>
    <th style="border:1px solid"> Kulit</th>
    <th style="border:1px solid"> Bulu</th>
    <th style="border:1px solid"> Anus</th>
    <th style="border:1px solid">Keadaan sapi</th>
    <th style="border:1px solid">Tanggal Pemeriksaan Antemortem</th>
    <th style="border:1px solid">Status</th>
  </tr>
  <?php foreach($sapi as $sapi_data) :?>
  <tr>
    <th style="border:1px solid"><?= $sapi_data['id_antemortem'];?></th>
    <th style="border:1px solid"><?= $sapi_data['no_telinga'];?></th>
    <th style="border:1px solid"><?= $sapi_data['username'];?></th>
    <th style="border:1px solid"><?= $sapi_data['tanggal_masuk'];?></th>
    <th style="border:1px solid"><?= $sapi_data['mata'];?></th>
    <th style="border:1px solid"><?= $sapi_data['hidung'];?></th>
    <th style="border:1px solid"><?= $sapi_data['mulut'];?></th>
    <th style="border:1px solid"><?= $sapi_data['selaput_lendir'];?></th>
    <th style="border:1px solid"><?= $sapi_data['kebersihan_sapi'];?></th>
    <th style="border:1px solid"><?= $sapi_data['gizi'];?></th>
    <th style="border:1px solid"><?= $sapi_data['kulit'];?></th>
    <th style="border:1px solid"><?= $sapi_data['bulu'];?></th>
    <th style="border:1px solid"><?= $sapi_data['Anus'];?></th>
    <th style="border:1px solid"><?= $sapi_data['keadaan_sapi'];?></th>
    <th style="border:1px solid"><?= $sapi_data['tanggal_pemeriksaan'];?></th>
    <th style="border:1px solid"><?= $sapi_data['status'];?></th>
   
  </tr>
<?php endforeach; ?>
</table>

<h4>Palembang, <?php echo date('d-M-Y');?> </h4>
  <br><br><br><br>

 <h4>Mengetahui,<br><u><?= $params = $_SESSION['name'];?></u> <br>NIP. <?= $params = $_SESSION['userid'];?></h4>
</body></html>