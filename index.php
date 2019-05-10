<?php 
include 'config.php';

$sql="SELECT * FROM tb_dtuser";
		$query=mysqli_query($conn, $sql);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem AMW V 0.1</title>
</head>

<body>
<br><br><br>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">&copy; Rizky Mochtar 2019</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Menu 1</a></li>
            <li><a href="#contact">About</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <center><h1>Selamat Datang</h1></center>
        <br>
        <div class="panel panel-primary">
                <div class="panel-heading">Panel Auto Massage WA V 0.1</div>
                <div class="panel-body">
                    <a href="tambahdata.php" style="text-decoration: none;"><span class="label label-success glyphicon-plus"> Tambah Data</span></a>
                </div>
        <table class="table table-bordered" align="center">
            <tr>
                <td>No</td>
                <td>Nama User</td>
                <td>Nomor Telfon</td>
                <td>Tanggal User Terdaftar</td>
                <td>Alamat</td>
                <td>Status User</td>
                <td>Pesan</td>
                <td>Aksi</td>
            </tr>
            <?php
            $no = 1;
            while($row = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row ['namauser'] ?></th>
                <td><?php echo $row ['nomortelfon'] ?></td>
                <td><?php echo $row ['tgldaftaruser'] ?></td>
                <td><?php echo $row ['alamat'] ?></td>
                <td><?php echo $row ['status'] ?></td>
                <td><?php echo $row ['pesan'] ?></td>
                <td align="center">
                <a href="index.php?ID=<?php echo $row['iduser']?>" style="text-decoration: none;"><span class="label label-warning glyphicon-pencil"> Edit Data</span></a>&nbsp;
                <a href="index.php?ID=<?php echo $row['iduser']?>" style="text-decoration: none;"><span class="label label-primary glyphicon-phone-alt"> Tambah Pesan</span></a>&nbsp;
                <a href="proseshapuspost.php?ID=<?php echo $row['iduser']?>" onclick="return confirm('Yakin Hapus Data ???')" style="text-decoration: none;"><span class="label label-danger glyphicon-trash"> Hapus Data</span></a>
            </tr>
            <?php }
            ?> 
        </table>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>