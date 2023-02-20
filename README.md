## PHPWork - CRUD

**PT-BR**  
Um simples projeto de CRUD (Criar, Ler, Atualizar e Deletar) na qual você pode cadastrar um produto, atualizar suas informações
e deletar do sistema caso queira. O projeto foi construido com PHP 8.1 de forma procedural (então me perdoe a bagunça do código),
foi utilizado jQuery e sua biblioteca de validação para formulário (jQuery Validation), além do BootStrap para estilização e o
fontawesome para uso dos icons.

### Como executar?

1. Baixe PHP 8.0+
    1.1 Baixe/Habilite os plugins do mysql no PHP
2. Baixe MySQL
    2.1 Workbench ou Terminal
3. Criar um banco de dados (nome: crud)
4. Criar uma tabela (product) com a seguinte estrutura:  

id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
name VARCHAR(120) NOT NULL,
descriptionProduct VARCHAR(255) NOT NULL
currencyType VARCHAR(3) NOT NULL,
priceProduct FLOAT(5,2) NOT NULL,

Caso realize alguma mudança na estrutura da tabela, lembre-se de atualizar o código também.

**EN**  

A simple CRUD project (Create, Read, Update and Delete) in which you can register a product, update your information
and delete from the system if you want. The project was built with PHP 8.1 procedurally (so forgive me for the code mess),
jQuery and its validation library for the form (jQuery Validation) were used, in addition to BootStrap for styling and the
fontawesome for icons use.

### How to run?

1. Download PHP 8.0+
     1.1 Download/Enable mysql plugins in PHP
2. Download MySQL
     2.1 Workbench or Terminal
3. Create a database (name: crud)
4. Create a table (product) with the following structure:  

If you make any changes to the table structure, remember to update the code as well.
