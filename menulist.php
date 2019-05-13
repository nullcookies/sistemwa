<?php 
include 'config.php';

$sql="SELECT * FROM tb_dtuser WHERE namauser LIKE '%$q%'";
		$query=mysqli_query($conn, $sql);
?>
    <div class="container">
        <center><h1>Menu list</h1></center>
        <br>
        <div class="panel panel-primary">
                <div class="panel-heading">Panel Auto Massage WA V 0.1 <input type="text" name="q" value="<?php echo $q?>" placeholder="Search User..." style="margin-left: 60%;color: black;">&nbsp;<button style="color:black;">Search</button></div>
        <table class="table table-bordered" align="center">
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Nomor Telfon</th>
                <th>Tanggal User Terdaftar</th>
                <th>Alamat</th>
                <th>Status User</th>
                <th>Pesan</th>
                <th>status pesan</th>
                <th>Jadwal Pengiriman</th>
                <th>Aksi</th>
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
                <a href="index.php?ID=<?php echo $row['iduser']?>" style="text-decoration: none;"><span class="label label-warning">Edit</span></a><br><br>
                <a href="index.php?m=pesan&ID=<?php echo $row['iduser']?>" style="text-decoration: none;"><span class="label label-danger">Pesan</span></a><br><br>
                <a href="proseshapuspost.php?ID=<?php echo $row['iduser']?>" onclick="return confirm('Yakin Hapus Data ???')" style="text-decoration: none;"><span class="label label-primary">Hapus</span></a>
            </tr>
            <?php }
            ?> 
        </table>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
