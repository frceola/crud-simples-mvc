<?php

    namespace Controller;

    use \Model\SalvarModel;

    class IndexController 
    {
        public function index($resposta)
        {
            $file = "View/ListarView.php";
            include_once "View/IndexView.php";
        }

        public function incluir($dados)
        {
            $model = new SalvarModel;
            $model->insert($dados);

            header('location: index.php?resposta=incluido');
        }

        public function formulario($id)
        {
            if($id != '')
            {
                $model = new SalvarModel;
                $dados = $model->getDados(intval($id));

                $login         = $dados->login;
                $senha         = $dados->senha;
                $nome_completo = $dados->nome_completo;

                $acao = 'alterar';
            }
            else
            {
                $login         = '';
                $senha         = '';
                $nome_completo = '';

                $acao = 'incluir';
            }

            $file = "View/FormView.php";
            include_once "View/IndexView.php";
        }

        public function alterar($dados)
        {
            $model = new SalvarModel;
            $model->update($dados);

            header('Location: index.php?resposta=alterado');
        }

        public function excluir($id)
        {
            $model = new SalvarModel;
            $model->delete($id);
            
            header('Location: index.php?resposta=excluido');
        }

        public function pesquisar($pesquisa)
        {
            $model = new SalvarModel;
            $r = $model->Get_pesquisa($pesquisa);

            $file = "View/PesquisaView.php";
            include_once "View/IndexView.php";
        }
    }