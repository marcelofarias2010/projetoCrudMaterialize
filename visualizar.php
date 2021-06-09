<?php
include './include/header.php';
include './classes/ClassCrud.php';
?>
<div class="container">
    <?php
    $Crud = new ClassCrud();
    $IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

    $BFetch = $Crud->selectDB("*", "myguests", "where id=?", array($IdUser));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Dados do Usuário</h1>
    <img src="Controllers/<?php echo $Fetch['imagem'] ?>" width="100" height="100" title="foto">
    <hr>
    <div class="flow-text">
        <strong>Nome:</strong> <?php echo $Fetch['firstname']; ?><br>
        <strong>Sobrenome:</strong> <?php echo $Fetch['lastname']; ?><br>
        <strong>E-mail:</strong> <?php echo $Fetch['email']; ?><br>
    </div>

</div>

<?php
include './include/footer.php';
?>


