<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Funcionarios</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Data de Nascimento</th>
            <th>Cargo</th>
            <th>Salario</th>
        </tr>

        <?php foreach($model->rows as $item):  ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->nome?></td>
            <td><?=$item->sobrenome?></td>
            <td><?=$item->data_nascimento?></td>
            <td><?=$item->cargo?></td>
            <td><?=$item->salario?></td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>