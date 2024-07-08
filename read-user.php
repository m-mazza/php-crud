<?php include('inc/header.php'); ?>

<div class="container">
    <div class="row no-gutters d-flex justify-content-center">
        <div class="col-12 my-5">
            <h4 class="mb-3 text-uppercase text-center">usuários cadastrados</h4>
            <ul class="list-group list-group-flush">
                    <?php 
    
                    $sqlLista = "SELECT * FROM users";
                    $resultLista = $conexao->query($sqlLista);
                    if ($resultLista->num_rows > 0) {
                        while($row = $resultLista->fetch_assoc()) {
                        ?>
                        <li class="list-group-item">
                            <div class="p-1">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col-10">
                                        <p class="m-0"><strong>Nome:</strong> <?php echo$row["nome"]?> | <strong>E-mail:</strong> <?php echo$row["email"]?> | <strong>Telefone:</strong> <?php echo$row["telefone"]?></p>
                                    </div>
                                    <div class="col-2 d-flex justify-content-between aling-items-center">
                                        <a href="update-user?id=<?php echo$row['id']?>" class="btn btn-sm btn-primary">editar</a>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="submitInfo(<?php echo$row['id']?>)">excluir</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                        }
                    } else {?>
                        <li class="list-group-item">
                            <div class="p-1">
                                <p class="m-0 text-center">Não há usuários cadastrados</p>
                            </div>
                        </li>
                   <?php 
                   };

                ?>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
                <a href="./" class="mt-3 mx-2 d-block">página inicial</a>
                <a href="create-user" class="mt-3 mx-2 d-block">cadastro de usuários</a>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php');?>