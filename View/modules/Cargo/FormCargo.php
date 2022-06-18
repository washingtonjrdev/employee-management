<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cargo</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Cargo</legend>
        <form method="post" action="/cargo/form/save">
        
            <label for="cargo">Cargo</label>
            <input id="cargo" name="cargo" type="text"/>

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>