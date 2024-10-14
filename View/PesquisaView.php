<table class="table table-hover">
    <thead class="thead">
        <th scope="col">Login</th>
        <th scope="col">Nome Completo</th>
        <th class="text-center" scope="col">Opções</th>
    </thead>
   <tbody>
        <?php while($result = $r->fetch(PDO::FETCH_OBJ)): ?>

            <tr>    
                <td><?= $result->login ?></td>
                <td><?= $result->nome_completo ?></td>
                <td class="text-center">
                    <a href="index.php?acao=form_update&id=<?= $result->id ?>" class="btn btn-warning">Alterar</a>&nbsp;
                    &nbsp;<a href="javascript:excluir(<?= $result->id ?>);" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

        <?php endwhile; ?>
    </tbody>
</table>  