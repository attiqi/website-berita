<?php
	ob_start();
	include 'connect.php';
	$sql = "SELECT * FROM konten JOIN artikel ON konten.id = artikel.konten_id";
	$datas = $koneksi_server->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
    <?php
      include 'connect.php';
      $id = $_GET['id'];
      $ambildata = mysqli_query($koneksi_server, "SELECT*FROM konten LEFT JOIN artikel ON konten.id = artikel.konten_id WHERE konten.id");
      $show = mysqli_fetch_array($ambildata);
    ?>
	<center>
	<h3 class="text-center">BERITA</h3>
	</center>
	<center>
		<h1><?php echo $show['nama']?></h1>
		<p><?php echo $show['isi']?></p>
	</center>
</body>
</html>
<?php
	require 'mpdf/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf([
		'mode' => 'utf-8',
		'format' => 'A4',
		'margin_top' => 25,
		'margin_bottom' => 25,
		'margin_left' => 25,
		'margin_right' => 25
	]);	

	$html = ob_get_contents();

	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));

	$content = $mpdf->Output("cetak.pdf", "D");
?>