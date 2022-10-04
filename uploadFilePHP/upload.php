<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 

// Checando se é uma imagem real ou fake.
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

// Checando o tamanho do arquivo.
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Verificando exteção de arquivos permitidas.
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Gerando novo nome para o arquivo.
$new_name = md5(uniqid("")).".".$imageFileType;
$target_file = $target_dir . $new_name;
//file_name será usado no insert do banco.
$file_name = explode("/",$target_file);

echo $target_file;

// Verificando se o marcado $uploadOk foi setado para 0 (falha no processo de verificação).
if ($uploadOk == 0) {
  echo "Desculpe, seu arquivo não foi carregado.";
// Se tudo estiver ok o arquivo será carregado.
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi carregado com sucesso.";
  } else {
    echo "Desculpe, encontramos um erro ao carregar o seu arquivo.";
  }
}
?>