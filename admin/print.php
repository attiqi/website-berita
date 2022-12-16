<?php
	ob_start();
    include '../connect.php';

    
    $sql= "SELECT * FROM konten JOIN artikel ON konten.id = artikel.konten_id";
    $datas = $koneksi_server->query($sql);
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta  name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
<?php 
      session_start();
      include '../connect.php';

    
    $sql= "SELECT * FROM konten JOIN artikel ON konten.id = artikel.konten_id";
    $datas = $koneksi_server->query($sql);
     ?>
	<center>
	<h3 class="text-center">DAFTAR BERITA DARI ADMIN</h3>
	</center>
	<table border = 1 class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Author</th>
                          </tr>
                        </thead>
                        <tbody>
                        	<center>
                            <?php
                            foreach ($datas as $key => $data){
                            echo'
                              <tr>
                                <td>'.($key+1).'</td>
                                <td>'.$data['nama'].'</td>
                                <td>'.$data['isi'].'</td>
                                <td>'.$data['author'].'</td>
                              </tr>
                            ';
                          }
                          ?>
                          </center>
                        </tbody>
        </table>
</body>
</html>

<?php
	require '../mpdf/vendor/autoload.php';

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