#  ![Badge](https://img.shields.io/static/v1?label=status&message=concluido&color=green&style=flat&logo=GITHUB)

# Desafio em PHP
O objetivo é desenvolver um sistema de gerenciamento de funcionários.
Esse sistema será composto de um cadastro de funcionários e cadastro de cargos utilizando o padrão de projetos o modelo MVC.

###  :link: Obtendo a aplicação
Para obter o projeto em sua máquina local
- [x] Utilizando o git bash
```bash
# execute esse comando dentro da pasta onde deseja clonar o projeto
git clone https://github.com/dev-washington/employee-management.git
```

### :round_pushpin: Adicionando itens
Para rodar a aplicação é necessario efetuar alguns passos

-1º Precisa Instalar a versão mais recente do PHP 
```bash
# através desse link abaixo vc encontra o php zipado e precisa extrair em qualquer pasta
https://www.php.net/downloads.php
```
-2º Habilitar o PDO Mysql e a extensao dr
```bash
# acesse o php onde foi extraido procure por um arquivo php.ini-development renomei esse arquivo para php.ini
No php.ini abra no bloco de notas e remova o ; da extensao mysql e da dr
```

-3º Adicionar o php as Variaveis de ambiente
```bash
# Acesse o meu computador va em propriedades e procure variaveis de ambiente e adicione o caminho
# que deve esta assim 
C:\exemplo\php
```

-4º Precisa Instalar a versão mais recente do MySQL 
```bash
# através desse link abaixo vc encontra o  MySQL
https://dev.mysql.com/downloads/installer/
```

-5º Adicionar o MySQL as Variaveis de ambiente
```bash
# Acesse o meu computador va em propriedades e procure variaveis de ambiente e adicione o caminho
# que deve esta assim 
C:\exemplo\server\MySQL\bin
```

-6º Reinicie o computador

-7º Execute o script sql no MySQL
```bash
# Acesse a pasta Sql-Script-Diagram dentro da pasta contém o arquivo sql
# execute o arquivo no MySql workbeach que deve esta assim 
Db-Employee.sql
```

-8º Para rodar o servidor php
```bash
# abra visual code execute esse comando no terminal
php -S localhost:8000
# vai startar o servidor e será possivel navegar pelo sistema
```

##

**Tabelas no MySQL**

`TABELA FUNCIONARIO`

- Contém

| Atributos       |  
| --------------- |  
| nome            |    
| data_nascimento |  
| cargo           | 
|salario          | 


`TABELA CARGO`

- Contém

| Atributos       |  
| --------------- |  
| cargo           |

##

### :hammer_and_pick: Construído Com
 Softwares
* [PHP]               
* [Visual_Code]       
* [MySQL_Workbeach8] 


##

### :man_technologist: Desenvolvedor
*Washington jose*

##

### 📄 Licença
MIT
```bash
# é uma licença permissiva utilizada tanto em software livre quanto em software proprietário
```

##

### :clinking_glasses: Agradecimento
Muito feliz em poder ter participado desse aprendizado em Backend e Frontend com PHP utilizando o modelo MVC aprendi muito sobre o padrao de projeto e orientação a objetos
Obrigado 🤓.
*francisco pereira*
