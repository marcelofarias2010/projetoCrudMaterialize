<?php
$resultado = "";
?>
<html>
    <head>
        <title>Tela de Login</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            html,
            body {
                height: 100%;
            }
            html {
                display: table;
                margin: auto;
            }
            body {
                display: table-cell;
                vertical-align: middle;
                background: #4ECDC4;
            }

            #login-page {
                width: 500px;
            }

            .card {
                /*      position: absolute;
                     left: 50%;
                     top: 50%;
                     -moz-transform: translate(-50%, -50%)
                     -webkit-transform: translate(-50%, -50%)
                     -ms-transform: translate(-50%, -50%)
                     -o-transform: translate(-50%, -50%)
                     transform: translate(-50%, -50%); */
            }
        </style>
    </head>
    <body>
        <div id="login-page" class="row">
            <div class="col s12 z-depth-6 card-panel">
                <form class="login-form" name="frmEntrar" id="frmEntrar" method="post">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail_outline</i>
                            <input class="validate" id="txtUsuario" type="email">
                            <label for="txtUsuario" data-error="wrong" data-success="right">
                                <span id="spValidaUsuario"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="txtSenha" type="password">
                            <label for="txtSenha">
                                <span class="spValidaSenha"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">          
                        <div class="input-field col s12 m12 l12  login-text">
                            <input type="checkbox" id="remember-me" />
                            <label for="remember-me">Remember me</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" value="Login" name="btnSubmit" id="btnSubmit" class="btn waves-effect waves-light col s12">

                        </div>
                    </div>       
                    <div class="row">
                        <div class="grid-100 coluna">
                            <span id="spResultado"><?= $resultado; ?></span>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
        <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
        <script>
            $("#frmEntrar").submit(function (event) {
                if (Validar()) {
                    Autenticar();
                }
                event.preventDefault();
            });

            function Validar() {
                var erros = 0;
                $("#spResultado").text("");
                $("#spResultado").css("color", "red");

                if ($("#txtUsuario").val().length < 7) {
                    $("#spResultado").html("<span class='spErro'>Usuário inválido. (min. 7 caracteres)</span>");
                    erros++;
                } else {
                    if ($("#txtSenha").val().length < 7) {
                        $("#spResultado").html("<span class='spErro'>Senha inválida. (min. 7 caracteres)</span>");
                        erros++;
                    }
                }

                if (erros == 0) {
                    return true;
                } else {
                    return false;
                }
            }


            function Autenticar() {
                var obj = {
                    txtUsuario: $("#txtUsuario").val(),
                    txtSenha: $("#txtSenha").val()
                };

                console.log(obj);

                $.ajax({
                    url: "Action/UsuarioAction.php?req=1",
                    type: "POST",
                    dataType: "text",
                    data: obj,
                    beforeSend: function () {
                        $("#spResultado").text("Autenticando...");
                        $("#spResultado").css("color", "blue");
                    },
                    success: function (retorno) {
                        console.log(retorno);
                        if (retorno == "ok") {
                            $("#spResultado").css("color", "green");
                            $("#spResultado").html("<span class='spSucesso'>Redirecionado...</span>");
                            location.href = "index.php";
                        } else {
                            $("#spResultado").html("<span class='spErro'>Usuário ou senha inválido</span>");
                        }
                    },
                    error: function (erro) {
                        console.log(erro);
                    }
                });
            }
        </script>
    </body>
</html>
