<?php
include './classes/ClassCrud.php';
//editar dados
if (isset($_GET['id'])) {
    $Acao = "Editar";
    $crud = new ClassCrud();
    $Select = $crud->selectDB("*", "myguests", "where id=?", array($_GET['id']));
    $Fetch = $Select->fetch(PDO::FETCH_ASSOC);
    $Id = $Fetch['id'];
    $Nome = $Fetch['firstname'];
    $Sobrenome = $Fetch['lastname'];
    $Email = $Fetch['email'];
}
//cadastro novo
else {
    $Acao = "Cadastrar";
    $Id = 0;
    $Nome = "";
    $Sobrenome = "";
    $Email = "";
}
?>
<style>
    .Resultado{
        display: none;
        float: left;
        border: 2px solid #00ff0d;
        background: #d8ffd5;
        padding: 15px;
        width: 70%;
        text-align: center;
        margin: 20px 15% 10px 15%;
        /*background: green;*/
    }
</style>
<div class="Resultado"></div>

<div class="row">
    <form method="post" action="Controllers/ControllerCadastro.php" enctype="multipart/form-data">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
        <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Nome" name="nome" type="text" required value="<?php echo $Nome ?>">
                <label for="nome">Primeiro nome</label>
            </div>
            <div class="input-field col s6">
                <input name="sobrenome" type="text" required value="<?php echo $Sobrenome ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input name="email" type="email" required value="<?php echo $Email ?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">archive</i>
                <input type="file" name="fileToUpload" required>                
            </div>            
        </div>
        <div class="col s6">
            <input class="btn waves-effect waves-light" type="submit" name="submit" value="<?php echo $Acao ?>">

        </div>
    </form>
</div>
