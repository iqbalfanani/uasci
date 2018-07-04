<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css-homeAdmin.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GoLas  | Admin Page</a>
        </div>
       

         <ul class="nav navbar-nav navbar-right">
            <li class="active">Welcome, <?php echo $this->session->userdata('logged_in')['username']; ?></a></li>
            <li><a href="<?php echo base_url() ?>index.php/Login/logout">Logout</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container-fluid column-starter">
  <!------------ Panel Class ------------->
    <div class="margin-t-20"></div>
  <div class="row">
      <div class="col-md-3 sidebar">
          <div class="panel">
             <div class="panel-body ">
                <div class="sidebar-nav">
                 <div class="sidebar panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#sidemenu1" class="" aria-expanded="true">Panel <i class="fa fa-angle-down pull-right"></i></a>
                        </h4>
                      </div>
                     <div id="sidemenu1" class="panel-collapse collapse in" aria-expanded="true" style="">
                         <div class="list-group">
                              <a href="<?php echo base_url() ?>index.php/Home/admin" class="list-group-item"><span class="glyphicon glyphicon-dashboard"></span>  Dashboard</a>
                              <a href="<?php echo base_url() ?>index.php/Murid/index" class="list-group-item"><span class="glyphicon glyphicon-stats"></span>  Murid</a>
                              <a href="<?php echo base_url() ?>index.php/Guru/index" class="list-group-item"><span class="glyphicon glyphicon-user"></span>  Guru</a>
                              <a href="<?php echo base_url() ?>index.php/Mapel/index" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>  Mata Pelajaran</a>
                              <a href="<?php echo base_url() ?>index.php/Kelas/index" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>  Kelas</a>
                              <a href="<?php echo base_url() ?>index.php/Ruang/index" class="list-group-item"><span class="glyphicon glyphicon-home"></span>  Ruang</a>
                              <a href="<?php echo base_url() ?>index.php/Detail/index" class="list-group-item"><span class="glyphicon glyphicon-zoom-in"></span>  Detail</a>
                              <a href="<?php echo base_url() ?>index.php/User/index" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>  User</a>
                            </div> 
       
                    </div>
                 </div>   
                </div>
               
                
              </div>

          </div>
      </div>
      <div class="col-md-9">
    <div class="panel panel-default">
      <div class="panel-heading"style="background-color:  #1E8BC3;">
        <h3 class="panel-title">Daftar Guru</h3>
      </div>
      <div class="panel-body">
        <a href="<?php echo base_url() ?>index.php/Guru/insert" class="btn btn-primary my-3">Tambah</a> <br><br>
        <table class="table table-striped table-hover" id="table_id">
          <thead>
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>TTL</th>
            <th>TELP</th>
            <th>JENIS KELAMIN</th>
            <th>MAPEL</th>
            <th>AKSI</th>
          </thead>
          <tbody>
            <?php foreach ($guru_list as $key => $value):?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['nama_guru'] ?></td>
              <td><?php echo $value['alamat'] ?></td>
              <td><?php echo $value['tanggal'] ?></td>
              <td><?php echo $value['telp'] ?></td>
              <td><?php echo $value['jenisKelamin'] ?></td>
              <td><?php echo $value['nama_mapel'] ?></td>
              <td>
          <a href="<?php echo base_url() ?>index.php/Guru/update/<?php echo $value['id'] ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span>
          <a href="<?php echo base_url() ?>index.php/Guru/delete/<?php echo $value['id'] ?>"class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>
              </td>
            </tr>
          <?php endforeach ?>
          </tbody>
        </table>

      </div>
    </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>