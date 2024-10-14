<?php

    include_once "autoload.php";

    $resposta = ($_GET['resposta']) ?? ''; 
    $acao     = ($_GET['acao'])     ?? '';

    use \Controller\IndexController;

    $ctrl = new IndexController;

    if(strtolower($acao) == 'pesquisar')
    {
        $pesquisa = ($_POST['pesquisa']) ?? '';
        $ctrl->pesquisar($pesquisa);
    }
    elseif(strtolower($acao) == 'form_create')
    {
        $ctrl->formulario('');
    }
    elseif(strtolower($acao) == 'form_update')
    {   
        $ctrl->formulario($_GET['id']);
    }
    elseif(strtolower($acao) == 'incluir')
    {
        $ctrl->incluir($_POST);
    }
    elseif(strtolower($acao) == 'alterar')
    {
        $ctrl->alterar($_POST);
    }
    elseif(strtolower($acao) == 'excluir')
    {
        $ctrl->excluir($_GET['id']);
    }
    else
    {
        $ctrl->index($resposta);
    }

    