<?php include('inc/header.php'); ?>

<div class="main-container">
    <div class="container">
        <div class="row no-gutters d-flex justify-content-center">
            <div class="col-8">
                <h4 class="mb-3 text-uppercase text-center">editar usuário</h4>
                <form action="" method="post">
                    <?php 
                        $Id = $_GET["id"];
                        $sqlUpdate = "SELECT * FROM users where id='$Id'";
                        $resultUpdate = $conexao->query($sqlUpdate);
                        $row = $resultUpdate->fetch_assoc();
                    ?>
                    <div class="row no-gutters">
                        <input type="hidden" id="id" value="<?php echo$row['id']?>">
                        <div class="col-12">
                            <div class="m-1">
                                <input type="text" class="form-control" id="nome" value="<?php echo$row['nome']?>">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <input type="email" class="form-control" id="email" value="<?php echo$row['email']?>">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <input type="text" class="telefone form-control" id="telefone"  value="<?php echo$row['telefone']?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="m-1">
                                <button type="button" class="btn btn-primary w-100" onclick="submitInfo('update')">editar</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="./" class="mt-3 mx-2 d-block">página inicial</a>
                        <a href="read-user" class="mt-3 mx-2 d-block">lista de usuários</a>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</div>

<?php include('inc/footer.php');?>

