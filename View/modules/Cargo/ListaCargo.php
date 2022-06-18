<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Cargos</title>
</head>
<body>
<table>
        <tr>
            <th>ID</th>
            <th>Cargo</th>
        </tr>

        <?php foreach($model->rows as $item):  ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->cargo?></td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>