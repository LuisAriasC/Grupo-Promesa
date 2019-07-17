<?php header('Content-Type: text/html; charset=utf-8');
include("DBConnection.php");
$dbcon->set_charset('utf8');

  const Type = array(
    'Fundación',
    'Empresa',
    'Universidad',
    'Escuela',
    'Vivienda',
    'Otro'
  );


  function activado($post){
    if ($post != NULL) {
      return true;
    }else {
      return false;
    }
  }

  function parseLine($line){
    return $line . '<br />';
  }

  $info = activado($_POST["sharePermission"]);



  $fn = $_POST["name"];
  $em = $_POST["email"];
  $sn = $_POST["entityName"];
  $ro = $_POST["role"];
  $ad = $_POST["address"];
  $pho = $_POST["phone"];
  $ext = $_POST["extention"];
  $stypes= Type[intval($_POST["inputType"])];
  $fo = $_POST["programHow"];

  $query = 'CALL addEntity("'.$fn.'", "'.$em.'", "'.$sn.'", "'.$ro.'", "'.$ad.'", "'.$pho.'", "'.$ext.'", "'.$stypes.'", "'.$fo.'")';
  $result = mysqli_query($dbcon, $query);
    mysqli_close($dbcon);
    header("Location: http://grupopromesa.mx");
    die();

?>
