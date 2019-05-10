<?php
include 'config.php';
$id=$_GET['ID'];
$pesan=$_POST['isipesan'];

$sql = "UPDATE tb_dtuser SET pesan='$pesan' WHERE iduser='$id'";
$query = mysqli_query($conn, $sql);

echo "<script>location.href = 'index.php?m=menulist'</script>"
?>