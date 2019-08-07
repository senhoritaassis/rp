<?php

function visualizar () {
    $meusDados = array();
    $meusDados["nome"] = "Macnífico";
    $meusDados["preco"] = "24,00";
    $meusDados["descricao"] = "Um delicioso sanduíche que te fará sair da dieta";
    
    exibir("produtos/visualizar", $meusDados);
}


function adicionar () {
    if (ehPost()) {
        $nome=$_POST["nome"];
        $preco=$_POST["preco"];
        $descricao=$_POST["descricao"];  
        
        redirecionar("usuario/index");
    }else {
        exibir("usuario/formulario");
    }
}