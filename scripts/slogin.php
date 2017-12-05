<?php

@mysql_connect("127.0.0.1", "root", "") or die("Erro");
mysql_select_db('BANCO');

$a = $_POST['access'];

$u = htmlspecialchars(strip_tags($_POST['user']));
$p = htmlspecialchars(strip_tags($_POST['password']));

$refresh = '<meta http-equiv="refresh" content="1; url=../Login.html" />';
$redirect = '<meta http-equiv="refresh" content="1; url=../Menu.html" />';

if ($a!='')
{
  $search = mysql_query("SELECT * FROM usuario WHERE usuario='$u' and senha='$p' LIMIT 1");    
  if (mysql_num_rows($search)==1)
  {
    session_start();
    $_SESSION['usuario'] = $u;
    $line = mysql_fetch_array($search);
    echo '<script type="text/javascript">alert("Usuário '.$line['usuario'].' logado.")</script>';
    exit ($redirect);    
  } else {
    echo '<script type="text/javascript">alert("Usuario ou senha incorretos")</script>';
    exit ($refresh);    
  }
}
?>

