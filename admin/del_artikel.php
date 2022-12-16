    <?php
    	include '../connect.php';
    	$id= $_GET['id'];
        if (isset($_GET['id'])) {
        mysqli_query($koneksi_server,"delete from artikel where id='$_GET[id]'");
        echo "<meta http-equiv=refresh content=2;URL='artikel.php'>";
      }
    ?>