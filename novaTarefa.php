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

    <?php
                if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1){ 
            ?>
                <div class="bg-primary pt-2 text-white d-flex justify-content-center">
                    <h5>Tarefa cadastrada com sucesso!</h5>
                </div>
            <?php 
              }
            ?>

    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="index.php" class="" id="">Tarefas pendentes</a>
                    </li>
                    <li class="list-group-item active">
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

                            <form method="POST" action="tarefa_controller.php?acao=inserir">
                                <div class="form-group">
                                    <label for="">Tarefa a ser criada</label>
                                    <input class="form-control" type="text" name="tarefa" placeholder="Exemplo: Comprar pão">
                                </div>
                                <button class="btn-block btn-save">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>