## Simples CRUD em PHP + Mysql + Boostrap 5

### Passo a passo para utilizar

* Crie uma tabela no banco Mysql com o script abaixo:

```sql
CREATE TABLE `tb_linguagem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `url_logo` TEXT NULL,
  PRIMARY KEY (`id`));
```

* Altere os dados da conexão Mysql no arquivo src/config.php
```php
define("DB", array(
    'HOST'   => 'localhost',
    'DBNAME' => 'nome_banco',
    'USER'   => 'seu_usuario',
    'PASS'   => 'sua_senha',
));
```

* Baixe o projeto, ele foi construido com composer basta digitar o codigo abaixo:
```
composer install
```
