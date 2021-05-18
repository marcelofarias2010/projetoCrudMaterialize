<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location:entrar.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela Inicial</title>
    </head>
    <body>
        <?php
        require __DIR__ . "/include/header.php";
        ?>

        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="imagens/psg1.jpg" width="250" height="250"></a>
            <a class="carousel-item" href="#two!"><img src="imagens/psg2.jpg" width="250" height="250"></a>
            <a class="carousel-item" href="#three!"><img src="imagens/psg3.jpg" width="250" height="250"></a>
            <a class="carousel-item" href="#four!"><img src="imagens/psg4.jpg" width="250" height="250"></a>
            <a class="carousel-item" href="#five!"><img src="imagens/psg5.jpg" width="250" height="250"></a>
        </div>
        <?php
        require __DIR__ . "/include/footer.php";
        ?>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var elems = document.querySelectorAll('.carousel');
                var instances = M.Carousel.init(elems, options);
            });

            // Or with jQuery

            $(document).ready(function () {
                $('.carousel').carousel();
            });</script>
    </body>
</html>
