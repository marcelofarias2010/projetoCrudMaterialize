<?php

include '../include/variaveis.php';
include '../classes/ClassCrud.php';
#definindo o diretório que será salvo as fotos
$target_dir = "uploads/";
#obtem o caminho do diretório com o nome do arquivo de imagem
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
#obtem a extenção do arquivo e converte em minuscula
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

# Verifique se o arquivo de imagem é uma imagem real ou falsa
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "Arquivo é uma imagem - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "O Arquivo não é uma imagem.<br>";
        $uploadOk = 0;
    }
}

# Verifique se o arquivo já existe
if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.<br>";
    $uploadOk = 0;
}

# Verifique o tamanho do arquivo maior que 5000kb
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Desculpe, seu arquivo é muito grande.<br>";
    $uploadOk = 0;
}

# Permitir certos formatos de arquivo
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp") {
    echo "Desculpe, somente JPG, JPEG, PNG, WEBP & GIF arquivos são permitidos.<br>";
    $uploadOk = 0;
}

# Verifique se $ uploadOk está definido como 0 por um erro
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi enviado.<br>";

# se tudo estiver ok, tente fazer o upload do arquivo
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {        
        echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi carregado.";
 
    } else {
        echo "Desculpe, ocorreu um erro ao enviar seu arquivo.";
    }
}

$Crud = new ClassCrud();

if ($Acao == "Cadastrar") {
    $Crud->insertDB('myguests', '?,?,?,?,?', array($Id, $Nome, $Sobrenome, $Email,$target_file));
    echo "Cadastro Realizado com Sucesso!";
    header("Location: ../selecao.php");
} else {
    $Crud->updateDB('myguests', 'firstname=?,lastname=?,email=?,imagem=?', 'id=?', array(
        $Nome,
        $Sobrenome,
        $Email,
        $target_file,
        $Id));
    echo "Cadastro Editado com Sucesso!";
    header("Location: ../selecao.php");
}


