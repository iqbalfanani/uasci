<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
</head>
<body><br><br><br>


  <div class="container">
    <div class="jumbotron">
      <?php echo form_open('Pesan/jadwal'); ?>
      <center><h2>Cetak Bukti</h2><br>
        <table border="0" >
          <?php foreach ($murid as $key => $val){ ?>
          <tr>
            <td>Nama</td>
            <td style="padding-left: 10px"><?php echo $val['nama_murid'] ?></td>
          </tr>
          <tr>
            <td>Kelas</td>
            <td style="padding-left: 10px"><?php echo $val['nama_kelas'] ?></td>
          </tr>
          <tr>
            <td>Mata Pelajaran</td>
            <td style="padding-left: 10px"><?php echo $val['nama_mapel'] ?></td>
          </tr>
          <tr>
            <td>Ruang</td>
            <td style="padding-left: 10px"><?php echo $val['no_ruang'] ?></td>
          </tr>
          <tr><td></td><td></td></tr>
        <?php } ?>
        </table><br>
        <a href="<?php echo site_url(); ?>/pesan/dompdf" type="button" class="btn btn-danger">Print Bukti</a>
      </center>
    </div>
  </div>
  <?php echo form_close(); ?>
</div>
</div>
</body>
</html>