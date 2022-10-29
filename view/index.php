<?php

use Src\Model\Liguagem;

include_once '../vendor/autoload.php';

$obLinguagem = new Liguagem;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <div class="container ">
        <h4 class="mt-3">Cadastro de linguagens de programação</h4>
        <div class="card mt-1 rounded">
            <div class="card-body">
                <div class="row">
                    <!-- Formulario de cadastro -->
                    <div class="col-md-5">
                        <form action="../src/controller/linguagemController.php" method="post">
                            <div class="col">
                                <label>Nome </label>
                                <input type="text" name="nome" class="form-control" required />
                            </div>
                            <div class="col mt-1">
                                <label>URL Logo</label>
                                <input type="text" name="url" class="form-control" required />
                            </div>
                            <div class="col">
                                <button type="submit" name="gravar" class="btn btn-primary mt-4">Gravar</button>
                            </div>
                        </form>
                    </div>
                    <!-- tabela de cadastrados -->
                    <div class="col-md-7">
                        <table class="table table-striped table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>URL Logo</th>
                                    <th>Linguagem</th>
                                    <th class="text-center">Editar/Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //listar dados gravados na tabela
                                foreach ($obLinguagem->BuscarTodos() as $obj) {
                                ?>
                                    <tr>
                                        <!-- ID -->
                                        <td><?=$obj->id?></td>
                                        <td class="align-middle">
                                            <img src="<?=$obj->url_logo?>" class="rounded" alt="Logo" width="60px" height="40px" style="object-fit: contain">
                                        </td>
                                        <!-- Liguagem -->
                                        <td class="align-middle"><?=$obj->nome?></td>
                                        <td class="align-middle text-center">
                                            <!-- Editar -->
                                            <a class="btn" href="#" data-bs-toggle="modal" data-bs-target="#editar-<?=$obj->id?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <!-- Remover -->
                                            <a class="btn" href="../src/controller/linguagemController.php?id=<?=$obj->id?>">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Modal Editar-->
                                    <div class="modal fade" id="editar-<?=$obj->id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="../src/controller/linguagemController.php" method="post">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col">
                                                            <label>Nome </label>
                                                            <input type="text" name="nome" value="<?=$obj->nome?>" class="form-control" required />
                                                        </div>
                                                        <div class="col mt-1">
                                                            <label>URL Logo</label>
                                                            <input type="text" name="url"  value="<?=$obj->url_logo?>" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="id" value="<?=$obj->id?>" />
                                                        <button type="submit" class="btn btn-primary" name="gravar">Gravar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>