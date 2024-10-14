<script>
    
    $(document).ready(function(){
        pesquisar();
    });

    function excluir(id)
    {
        confirm('Deseja mesmo excluir?');
        document.location = "index.php?acao=excluir&id="+id;
    }

    function pesquisar()
    {
        const pesquisa = $("#pesquisa").val();

        $.ajax({
            url: "index.php?acao=pesquisar",
            method: "POST",
            data: { pesquisa },

            success: (res) => {
                $("#result").html(res);
            },
            error: () => {
                $("#result").html('<b>Erro ao carregar os dados!</b>');
            }
        });
    }

</script>

<h1 class="mt-5 mb-4">Cadastro de Usuários</h1>

<form class="row mt-5 mb-5" action="">
    <div class="col-12">
        <input type="text" name="pesquisa" id="pesquisa" class="form-control" placeholder="Faça sua Pesquisa" oninput="pesquisar();">
    </div>
</form>

<a href="index.php?acao=form_create" class="btn btn-primary btn-block mt-3">Incluir novo Registro</a>

<?php if($resposta == 'incluido'): ?>
    
<div class='alert alert-success'><b>Item incluido com sucesso!</b></div>

<?php elseif($resposta == 'alterado'): ?>    

<div class='alert alert-warning'><b>Item alterado com sucesso!</b></div>

<?php elseif($resposta == 'excluido'): ?>    

<div class='alert alert-danger'><b>Item excluído com sucesso!</b></div>

<?php endif; ?>

<br><br>

<div id="result"></div>

<script>

    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });

</script>