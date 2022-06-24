![Badge](https://img.shields.io/static/v1?label=status&message=concluido&color=green&style=flat&logo=GITHUB)

# :memo: Desafio em PHP
O objetivo é desenvolver um sistema de gerenciamento de funcionários.
Esse sistema será composto de um cadastro de funcionários e cadastro de cargos utilizando o padrão de projetos o modelo MVC.

## :books: Funcionalidades
È possivel efetuar um <b>CRUD</b> nas seguintes tabelas no <b>MySQL</b> integrado ao <b>PHP</b>
* Cadastrar
* Consultar
* Atualizar
* Deletar

<b>OBS:</b> Na lista de consulta do funcionario é possivel vê se o funcionario é aniversariante do mês, e o funcionario não pode ser excluido se estiver vinculado a um cargo

`FUNCIONARIO`

| Coluna          |  
| :-------------  |
| id              |  
| nome            |
| sobrenome       |    
| data_nascimento |  
| cargo           | 
| salario         | 

`CARGO`

| Coluna          |  
| :-------------  |
| id              |  
| descricao       |



## :hammer_and_pick: Construído Com
 |Soft        |wares                                                                                                                               |           
 |   --------------------------------------------------------------------------------------------------------------------------: | :-------------- |
 |<img src="https://user-images.githubusercontent.com/75760299/174597770-7a8a6dde-5450-4efc-a625-807de7971690.png" width="50px;">| PHP             |
 |<img src="https://user-images.githubusercontent.com/75760299/174598939-ca47b110-29d6-4a63-8cff-e8620611c6b2.png" width="50px;">| Visual Code     |         
 |<img src="https://user-images.githubusercontent.com/75760299/174596368-409f4c7f-a9e9-443f-ad0f-091aad3ca8be.png" width="50px;">| MySQL Workbeach |     

## :rocket: Rodando o projeto
*Para rodar o repositório é necessário* 

Clonar o mesmo, dar o seguinte comando:
* <b>Utilizando o git bash</b>
```
git clone https://github.com/dev-washington/employee-management.git
```

Instalar o PHP através do seguinte link:
* <b>URL</b>
```
https://www.php.net/downloads.php
```

Instalar o MySQL Workbeach através do seguinte link:
* <b>URL</b>
```
https://dev.mysql.com/downloads/installer/
```

Adicionar caminho onde o software está instalado PHP e MySQL, nas variavéis de ambiente:
* <b>PATH</b>
```
C:\exemplo\php
C:\exemplo\MySQL-Server\bin
```

>Reinicie o computador

Habilitar as extensões do PDO
* <b>MySQL e dr</b>
```
Acesse a pasta do php onde foi extraido procure por um arquivo php.ini-development renomei esse arquivo para php.ini
depois abra o arquivo php.ini no bloco de notas e procure por extension_dr e remova o ; que esta na frente do texto,
depois procure pelo arquivo pdo_MySQL tbm remova o ; da frente e salve as alterações e feche o arquivo fazendo isso 
vc está descomnetando a extensão MySQL e dr e tornando-las ativas.
```

Extrair os arquivos zipados do banco de dados: 
* <b>MySQL</b>
[Script.SQL-Diagram.zip](https://github.com/dev-washington/employee-management/files/8937083/Script.SQL-Diagram.zip)
```
Dentro da pasta contém o arquivo sql execute o arquivo no MySql Workbeach para criar o DB na sua máquina 
```

Rodar o Projeto:
* <b>No PHP</b>
```
Abra a pasta do projeto onde foi clonado no visual code depois dentro do visual code aperte CTRL+" para abrir o terminal 
do VS code e execute o seguinte comando: php -S localhost:8000
```

## :soon: Implementação futura
Novas tabelas como a de endereço, login entre outras ainda a serem discutidas

## :man_technologist: Desenvolvedor
<table>
  <tr>
    <td align="center">
        <img src="https://user-images.githubusercontent.com/75760299/174518958-40bd6d4f-58d5-41ab-bcf0-8ee76ec9f7bc.jpg" width="100px;" alt="Foto do Dev no GitHub"/><br>
        <sub>
          <b>Washington Jose</b>
        </sub>
      </a>
    </td>
  </tr>
</table>

## 📄 Licença
* [MIT](https://choosealicense.com/licenses/mit/)

## :clinking_glasses: Agradecimentos
Muito feliz em poder ter participado desse aprendizado em Backend e Frontend utilizando o modelo MVC aprendi muito sobre o padrao de projeto e orientação a objetos integrado ao PHP com MySQL
*Obrigado* :sunglasses:

<table>
  <tr>
    <td align="center">
        <img src="https://user-images.githubusercontent.com/75760299/174574943-3a9d9ed1-d20a-4993-af5e-8c939fa41af7.jpg" width="100px;" alt="Foto do Avaliador no GitHub"/><br>
        <sub>
          <b>Francisco Amorim</b>
        </sub>
      </a>
    </td>
  </tr>
</table> 