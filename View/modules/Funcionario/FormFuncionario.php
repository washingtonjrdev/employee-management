<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <style>
        label, input {display: block;}
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Funcionario</legend>
        <form method="post" action="/funcionario/form/save">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text"/>

            <label for="sobrenome">Sobrenome</label>
            <input id="sobrenome" name="sobrenome" type="text"/>

            <label for="data_nascimento">Data de Nascimento</label>
            <input id="data_nascimento" name="data_nascimento" type="date"/>

            <label for="cargo">Cargo</label>
            <input id="cargo" name="cargo" type="text"/>

            <label for="salario">Salario</label>
            <input id="salario" name="salario" type="number"/>
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>