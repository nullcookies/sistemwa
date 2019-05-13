<?php 
include 'config.php';

$sql="SELECT * FROM tb_dtuser";
		$query=mysqli_query($conn, $sql);
?>
    <div class="container">
        <center><h1>Menu list</h1></center>
        <br>
        <div class="panel panel-primary">
                <div class="panel-heading">Panel Auto Massage WA V 0.1</div>
        <table class="table table-bordered" align="center">
            <tr>
                <td>No</td>
                <td>Nama User</td>
                <td>Nomor Telfon</td>
                <td>Tanggal User Terdaftar</td>
                <td>Alamat</td>
                <td>Status User</td>
                <td>Pesan</td>
                <td>status pesan</td>
                <td>Jadwal Pengiriman</td>
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
                <td></td>
                <td></td>
                <td align="left">
                <a href="index.php?ID=<?php echo $row['iduser']?>" style="text-decoration: none;"><span class="label label-warning glyphicon-pencil">Edit</span></a><br><br>
                <a href="index.php?m=pesan&ID=<?php echo $row['iduser']?>" style="text-decoration: none;"><span class="label label-primary glyphicon-phone-alt">Pesan</span></a><br><br>
                <a href="proseshapuspost.php?ID=<?php echo $row['iduser']?>" onclick="return confirm('Yakin Hapus Data ???')" style="text-decoration: none;"><span class="label label-danger glyphicon-trash">Hapus</span></a>
            </tr>
            <?php }
            ?> 
        </table>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
