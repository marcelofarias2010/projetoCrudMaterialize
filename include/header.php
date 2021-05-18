<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Crud com php e Mysql</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
</head>
<body>
    <div class="white-text text-darken-2">
        <div class="card-panel teal lighten-2 center-align">
            <h1>Crud de PhP com Mysql</h1>
            <p>Curso de programação 2021</p>
        </div>
    </div>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <a href="#" data-activates="menu-mobile" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastrar.php">Cadastrar usuário</a></li>
                <li><a href="selecao.php">Listar Usuário</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
            <ul class="side-nav" id="menu-mobile">
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastrar.php">Cadastrar usuário</a></li>
                <li><a href="selecao.php">Listar Usuário</a></li>             
                <li><a href="logout.php">Sair</a></li>   
            </ul>
        </div>
    </nav>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function () {
            $(".button-collapse").sideNav();
        });
    </script>

