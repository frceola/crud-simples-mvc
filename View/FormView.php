<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-5 mb-4">Formulário</h1>
        </div>    
        <form action="index.php?acao=<?= $acao ?>" method="post">
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome Completo:</label>
                <input type="text" name="nome_completo" id="nome_completo" class="form-control" value="<?= $nome_completo ?>">
            </div>
            <div class="mb-3">
                <label for="Login" class="form-label">Login:</label>
                <input type="text" name="login" id="login" class="form-control" value="<?= $login ?>">
            </div>
            <div class="mb-3">
                <label for="Senha">Senha: </label>
                <input type="password" name="senha" id="senha" class="form-control" value="<?= $senha ?>">
            </div>

            <input type="hidden" name="id" id="id" value="<?= $id ?>">

            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>