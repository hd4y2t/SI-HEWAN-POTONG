<!DOCTYPE html>
<html><head>

  
    <title>Laporan Data Sapi</title>
    
    
</head><body>
<center>
<table>
  <tr>
    <td><img src="assets/Palembang.png" width="60" height="60"></td>
    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
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


<h3><center>Laporan Data Sapi RPH Gandus</center></h3>
<table style="border-collapse: collapse; width:100%; margin-top: 5px;">
  <tr>
    <th style="border:1px solid">Nomor Telinga</th>
    <th style="border:1px solid">Ras</th>
    <th style="border:1px solid">Berat</th>
    <th style="border:1px solid">Gender</th>
    <th style="border:1px solid">Atas Nama</th>
    <th style="border:1px solid">Tanggal masuk</th>
  </tr>
  <?php foreach($sapi as $sapi_data) :?>
  <tr>
    <th style="border:1px solid"><?= $sapi_data['no_telinga'];?></th>
    <th style="border:1px solid"><?= $sapi_data['ras'];?></th>
    <th style="border:1px solid"><?= $sapi_data['berat'];?></th>
    <th style="border:1px solid"><?= $sapi_data['gender'];?></th>
    <th style="border:1px solid"><?= $sapi_data['username'];?></th>
    <th style="border:1px solid"><?= $sapi_data['tanggal_masuk'];?></th>
   
  </tr><br>
<?php endforeach; ?>
</table>


<h4>Palembang, <?php echo date('d-M-Y');?> </h4>
  <br><br><br><br>

 <h4>Mengetahui,<br><u><?= $params = $_SESSION['name'];?></u> <br>NIP. <?= $params = $_SESSION['userid'];?></h4>

</body></html>
