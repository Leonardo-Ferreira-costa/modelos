<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Checando se щ uma imagem real ou fake.
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Checando se o arquivo jс existe.
if (file_exists($target_file)) {
	
function pegaExtensao($arquivo){
  $ext = explode('.',$arquivo);
  $ext = array_reverse($ext);
  return ".".$ext[0]; 
}
function pegaSomenteNome($arquivo){
  $nome = pathinfo($arquivo);
  return $nome['filename'];
}
function nomeAleatorio($arquivo){
  $extensao    = pegaExtensao($arquivo);
  $somenteNome = pegaSomenteNome($arquivo);
  $rand	       = rand(0, 99999);
  //ou
  //$rand = sha1($somenteNome.time());
  return $somenteNome.$rand.$extensao;
}


$target_file = $target_dir . nomeAleatorio($_FILES["fileToUpload"]["name"]);

  echo "Foi gerado um novo nome.";
  
  echo '<br>'.$target_file;
  $uploadOk = 1;
}

// Checando o tamanho do arquivo.
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Verificando extesѕes de arquivos permitidas.
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Verificando se o marcado $uploadOk foi setado para 0 (falha no processo de verificaчуo).
if ($uploadOk == 0) {
  echo "Desculpe, seu arquivo nуo foi carregado.";
// Se tudo estiver ok o arquivo serс carregado.
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi carregado com sucesso.";
  } else {
    echo "Desculpe, encontramos um erro ao carregar o seu arquivo.";
  }
}
?>