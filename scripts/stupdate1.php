<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/logincss.css"/>
		<link rel="shortcut icon" href="images/marsala-tec-favicon.ico?crc=4215889845"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Marsala TEC -- UPDATE SUCESS</title>
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
	$text = $_POST['txt'];
	$sql = "UPDATE textdata SET stTextContent = '$text' WHERE textID=1";

	if ($conn->query($sql) === TRUE) {
		echo "<center><h2>Texto Gravado com sucesso</h2></center>";
		echo $redirect;
	} else {
		echo "<center><h2>Erro ao atualizar Texto:</h2></center>  " . $conn->error;
	}

	$conn->close();
?>
</body>
</html>