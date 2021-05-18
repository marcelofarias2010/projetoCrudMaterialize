<?php
require __DIR__ . "/include/header.php";

include __DIR__ . './classes/ClassCrud.php';
?>

<table class="responsive-table centered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
    </thead>
    <!-- Estrutura de loop -->
    <?php
    $Crud = new ClassCrud();
    $Select = $Crud->selectDB("*", "myguests", "order by id desc", array());

    while ($Fetch = $Select->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $Fetch['firstname']; ?></td>
                <td><?php echo $Fetch['lastname']; ?></td>
                <td><?php echo $Fetch['email']; ?></td>
                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>">
                        <i class="small material-icons">search</i>
                    </a>  
                    <a href="<?php echo "cadastrar.php?id={$Fetch['id']}"; ?>">
                        <i class="small material-icons">edit</i>
                    </a>  
                    <a class="Deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['id']}"; ?>">
                        <i class="small material-icons">delete</i>
                    </a>  
                </td>
            </tr>

        </tbody>
<?php } ?>
</table>

<?php
require __DIR__ . "/include/footer.php";
?>