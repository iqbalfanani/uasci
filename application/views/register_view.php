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
  <?php echo form_open_multipart('Login/register'); ?>
    <div class="panel panel-default">
      <div class="panel-heading"style="background-color:  #1E8BC3;">
        <center><h3 class="panel-title">Tambah Murid Baru</h3></center>
      </div>
      <div class="panel-body">
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>
        <div class="col-md-5">
        <input id="nama" name="nama_murid" type="text" placeholder="Nama Lengkap Anda" class="form-control input-md" required="">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="alamat">Alamat</label>  
        <div class="col-md-5">
        <input id="alamat" name="alamat" type="text" placeholder="Alamat Anda" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tanggal">Tanggal Lahir</label>  
        <div class="col-md-5">
        <input id="tanggal" name="tanggal" type="date" placeholder="tanggal" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="telp">No Handphone</label>  
        <div class="col-md-5">
        <input id="telp" name="telp" type="text" placeholder="No Handphone Anda" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Multiple Radios (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="gender">Jenis Kelamin</label>
        <div class="col-md-5"> 
          <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="" value="Laki-laki" checked="checked">
            Laki-laki
          </label> 
          <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="" value="Perempuan">
            Perempuan
          </label>
        </div>
        <div class="col-md-12"></div>
      </div>

      <!-- Option -->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Jenjang</label>
        <div class="col-md-5"> 
        <select class="form-control" id="jenjang" name="jenjang">
          <option>------</option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
        </select>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="username">Username</label>  
        <div class="col-md-5">
        <input id="username" name="username" type="text" placeholder="Masukkan username" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password">Password </label>
        <div class="col-md-5">
          <input id="password" name="password" type="password" placeholder="Masukkan Password" class="form-control input-md" required="">
          
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="foto">Foto </label>
        <div class="col-md-5">
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
        
          
        </div>
      </div>
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="confirmation"></label>
        <div class="col-md-5">
          <button id="confirmation" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      
      </div>
    </div>
      <?php echo form_close(); ?>
</div>
</body>
</html>