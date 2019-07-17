<?php 
const Type = array(
  'Fundación',
  'Empresa',
  'Universidad',
  'Escuela',
  'Vivienda',
  'Otro'
);


if(isset($_GET['func']) && !empty($_GET['func'])) {
    $function2call = $_GET['func'];
    switch($function2call) {
        case 1 : DBaddEntity();break;
        case 2 : uploadImage();break;
        case 3 : DBaddUser();break;
        case 4 : uploadImagetoDB();break;
    }
}

  
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

function countFolder($dir) {
  	return (count(scandir($dir)) - 2);
}
  

function carousel($dir) {
    $items = countFolder($dir);
    echo "<div class='row owl-carousel clients-carousel'>";
    for ($i = 1; $i <= $items-1; $i++) {
      echo "<div class='column item'>";
      echo "<div class='shadow-effect'>";
      echo "<img src='$dir/$i.png' class='logo-img' alt=''>";
      echo "</div>";
      echo "</div>";  
    }
    echo "</div>";
}

function is_image($path){
  $a = getimagesize($path);
  $image_type = $a[2];
    
  if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
  {
    return true;
  }
  return false;
}

function DBaddEntity() {//Agrega registro a la base de datos.
  include("DBConnection.php");
  $dbcon->set_charset('utf8');
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
//  $query = 'CALL addEntity("'.$fn.'", "'.$em.'", "'.$sn.'", "'.$ro.'", "'.$ad.'", "'.$pho.'", "'.$ext.'", "'.$stypes.'", "'.$fo.'")';
  $query = 'INSERT INTO GrupoPromesaDB.Entity (fullName, email, entityName, role, address, phone, extention, typeOfEntity, programHow) VALUES ("'.$fn.'", "'.$em.'", "'.$sn.'", "'.$ro.'", "'.$ad.'", "'.$pho.'", "'.$ext.'", "'.$stypes.'", "'.$fo.'")';
  $result = mysqli_query($dbcon, $query);
//  if($result){
//    echo "Success";
//  }else {
//    echo "fail";
//    echo "$query";
//  }
  mysqli_close($dbcon);
    header("Location: http://grupopromesa.mx");//PARA PAGINA
//  header("Location: ../index.php");//PARA PRUEBAS LOCALES
  die();
}

function DBaddUser() {
  include("DBConnection.php");
  $dbcon->set_charset('utf8');
  $fullName = $_POST["fname"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $lastname = $_POST["lname"];
  $priviledges = $_POST["priv"];
  $query = 'INSERT INTO users (username, passw, fname, lastname, admin) VALUES ("'.$username.'", "'.$password.'", "'.$fullName.'", "'.$lastname.'", '.$priviledges.')';
  if(mysqli_query($dbcon, $query)){
    echo 'ok';
  }else{
    echo "err";
  }
}

function uploadImage() {//Funcion para subir imagenes a galeria.
  $uid =$_POST['title'];
  $opt =$_POST['opt'];
  $desc =$_POST['description'];
  // file name
  $items = countFolder("../img/galeria/$opt");
  if($items == 0){
    $items = 1;
  }
  $filename = (string)$items;

  // Location
  $location = "../img/galeria/$opt/$filename.jpg";
  $myfile = fopen("../img/galeria/$opt/descripciones/$filename.txt", "w") or die("Unable to open file!");
  $temp = $_POST['title'];
  fwrite($myfile, "$temp\n");
  $temp = $_POST['description'];
  fwrite($myfile, $temp);
  fclose($myfile);
  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
  // Valid image extensions
  $image_ext = array("jpg","png","jpeg","gif");
  $response = 0;
  if(in_array($file_extension,$image_ext)){
    // Upload file
    if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
      $response = $location;
      
    }
  }
  echo "$response";die();
}

function uploadImagetoDB() {//Funcion para subir imagenes a galeria.
  include("DBConnection.php");
  $dbcon->set_charset('utf8');
  $uid =$_POST['title'];
  $opt =$_POST['opt'];
  $desc =$_POST['description'];
  // file name
  $items = countFolder("../img/galeria/$opt");
  if($items == 0){
    $items = 1;
  }
  $filename = $_FILES['file']['name'];
  $path = "../img/galeria";
  $path = $path.'/'.$filename;
  
  if(move_uploaded_file($_FILES['file']['tmp_name'],$path)){
    $path = "img/galeria";
    $path = $path.'/'.$filename;
    $query = 'INSERT INTO images (ruta, titulo, descripcion, tipo) VALUES ("'.$path.'", "'.$uid.'", "'.$desc.'", "'.$opt.'")';
    if(mysqli_query($dbcon, $query)){
      $response = 'ok';
    }else{
      $response = "err";
    }
  }
  echo "$response";die();
}

function niceGallery($topic) {//Funcion para mostrar la galeria en la pagina.
  $dir = "$topic";
  $txtDir = "$topic/descripciones";
  echo "$topic";
  $cont = 0;
  $items = countFolder($dir);
  for ($i = 1; $i < $items; $i++) {
    $file = fopen("$txtDir/$i.txt", "r") or exit("Unable to open file!");
    echo "
    <div class='col-sm-6 col-md-4'>
      <div class='thumbnail'>
        <a class='lightbox' href='$dir/$i.jpg'>
          <img src='$dir/$i.jpg' alt='Park'>
        </a>
        <div class='caption'>";
        while(!feof($file)){
          $temp = fgets($file);
          if($cont == 0){
            $temp = rtrim($temp, "\r\n");
            echo"<h3>'$temp'</h3>";
          }else{
            $temp = rtrim($temp, "\r\n");
            echo"<p>'$temp'</p>";
          }
          $cont++;
        }
        $cont = 0;
        fclose($file);
        echo"
        
        </div>
      </div>
  </div>";
  }
}

function niceGalleryDB($dir) {//Funcion para mostrar la galeria en la pagina.
  include("DBConnection.php");
  $dbcon->set_charset('utf8');
  $query = "SELECT * FROM images";
  if($result = mysqli_query($dbcon, $query)){
    while($row = mysqli_fetch_array($result)){
      echo "
      <div class='col-sm-6 col-md-4'>
        <div class='thumbnail'>
          <a class='lightbox' href='$dir$row[1]'>
            <img src='$dir$row[1]' alt='Park'>
          </a>
          <div class='caption'>
          <h3>$row[2]</h3>
          <p>$row[3]</p>
          </div>
        </div>
    </div>";
    }
  }
}

  


?>
