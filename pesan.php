<?php
    $id=$_GET['ID'];
?>
<html>
    <form method="post" action="pesan_input.php?ID=<?php echo $id?>">
        <label>Masukkan Pesan Anda</label>
        <textarea name="isipesan" class="form form-control"></textarea>

        <button class="btn btn-primary" formaction="pesan_input.php?ID=<?php echo $id?>">Submit</button></a>
    </form>
</html>