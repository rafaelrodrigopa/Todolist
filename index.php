<?php
    $acao = 'recuperaTarefasPendentes';
    require_once 'tarefa_controller.php';

    //echo '<pre>';
    //print_r($tarefas);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super ToDo</title>

    <link rel="stylesheet" href="css/estilo.css">

    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navback">
        <div class="container">
            <a href="#" class="navbar-brand text-white" id="">
                <img src="img/todo.svg" alt="todo" width="35" height="35" class="d-inline-block align-top">
                Super ToDo
            </a>
        </div>
    </nav>

    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item active">
                        <a href="index.php" class="" id="">Tarefas pendentes</a>
                    </li>
                    <li class="list-group-item">
                        <a href="novaTarefa.php" class="" id="">Criar nova tarefa</a>
                    </li>
                    <li class="list-group-item">
                        <a href="todasTarefas.php" class="" id="">Listar tarefas</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Tarefas pendentes</h4>
                            <hr />
                                <?php foreach($tarefas as $index => $tarefa) { ?>

                                    <div class="row mb-3 d-flex align-items-center tarefa">
                                        <div class="col-sm-9">
                                            <?= $tarefa->tarefa ?>
                                        </div>
                                        <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                            <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                            <i class="fas fa-edit fa-lg text-info"></i>
                                            <i class="fas fa-check-square fa-lg text-success"></i>
                                        </div>
                                    </div>

                                <?php } ?>

                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>