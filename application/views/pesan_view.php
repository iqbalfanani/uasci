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
        <center><h3 class="panel-title">Pesan Kelas</h3></center>
      </div>
      <div class="panel-body">
      <?php echo form_open('Pesan/jadwal'); ?>
      <div class="form-group">
        <label class="col-md-4 control-label" for="fk_id_kelas">Kelas</label>  
        <div class="col-md-5">
        <select name="fk_id_kelas" id="fk_id_kelas" class="form-control">
          <?php foreach ($getRelasiKelas as $value): ?>
            <option value="<?php echo $value['id'] ?>"><?= $value['nama_kelas'] ?></option>
          <?php endforeach ?>
        </select>
          
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="confirmation"></label>
        <div class="col-md-5">
          <button id="confirmation" class="btn btn-primary">Submit</button>
        </div>
      </div>
      <?php echo form_close(); ?>
      </div>
</div>
</body>
</html>