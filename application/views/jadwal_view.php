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
    <div class="panel panel-default">
  <div class="panel-heading"style="background-color:  #1E8BC3;">
    <h3 class="panel-title">List Jadwal Kelas <?php echo $kelas; ?> </h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover" id="table_id">
      <thead>
        <th>Hari</th>
        <th>Jam</th>
        <th>Ruang</th>
        <th>Mapel</th>
        <th>Guru</th>
      </thead>
      <tbody>
        <?php foreach ($jadwal as $key => $value):?>
        <tr>
          <td><?php echo $value['hari'] ?></td>
          <td><?php echo $value['jam'] ?></td>
          <td><?php echo $value['no_ruang'] ?></td>
          <td><?php echo $value['nama_mapel'] ?></td>
          <td><?php echo $value['nama_guru'] ?></td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
    <a href="<?php echo site_url(); ?>/pesan/index" type="button" class="btn btn-danger">Kembali</a>
    <a href="<?php echo site_url('Pesan/kelas/'.$id_kelas) ?>" class="btn btn-success">Pilih</a>
  </div>
</div>
      <?php echo form_close(); ?>
      </div>
</div>
</body>
</html>