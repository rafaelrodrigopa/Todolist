<?php

    require "Tarefa.php";
    require "tarefa_service.php";
    require "conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    date_default_timezone_set('America/Sao_Paulo');

	if($acao == 'inserir') {
		$tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $tarefa->__set('data_criacao', date("y-m-d"));

		$conn = new Conexao();
		$tarefaService = new tarefaService(
			$conn,
			$tarefa
		);

		$tarefaService->inserir();
		header('Location:  novaTarefa.php?inclusao=1');
	}
?>