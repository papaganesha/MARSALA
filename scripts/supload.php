<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Marsala TEC -- UPLOAD FOTO</title>
<link rel="stylesheet" type="text/css" href="css/logincss.css"/>
		<link rel="shortcut icon" href="images/marsala-tec-favicon.ico?crc=4215889845"/>
</head>

<body>
<?php
$s = "127.0.0.1";
	$u = "root";
	$p = "";
	$d = "banco";
	
	$conn = new mysqli($s, $u, $p, $d);
	if ($conn->connect_error) {
		die("Conexao Falhou: " . $conn->connect_error);
	} 
	$redirect = '<meta http-equiv="refresh" content="1; url=../Menu.html" />';
if(isset($_FILES['arc']['name']) && $_FILES["arc"]["error"] == 0)
{
	$arc_tmp = $_FILES['arc']['tmp_name'];
	$nome = $_FILES['arc']['name'];
	$extensao = strrchr($nome, '.');
	$extensao = strtolower($extensao);
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		$novoNome = md5(microtime()) . '.' . $extensao;
		$destino = '../images/' . $novoNome; 
		$path = 'images/' . $novoNome;
		$redirect3332 = '<meta http-equiv="refresh" content="1; url=../Index.php" />';
		$sql = "UPDATE imagedata SET imagePath = '$path' WHERE idpic=1";
		if ($conn->query($sql) === TRUE) {
			
		} else {
			
		}
		if( @move_uploaded_file( $arc_tmp, $destino  ))
		{
			echo "<center><h2>Arquivo salvo com sucesso em : <strong>" . $destino . "</strong></h2></center><br />";
			echo $redirect3332;
		}
		else
			echo "<center><h2>Controle de usuario?</h2></center><br />";
	}
	else
		echo "<center><h2>Apenas imagens \"*.jpg;*.jpeg;*.gif;*.png\"</h2></center><br />";
}
else
{
	echo "<center><h2>Nenhum arquivo enviado</h2></center>";
}


	

	$conn->close();
?>
</body>
</html>