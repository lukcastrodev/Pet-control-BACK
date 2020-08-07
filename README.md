## Pet control API
Api desenvolvida em PHP(Laravel) para gerenciar e criar dados de pets,  clientes e usuários do sistema.

##  Tecnologias utilizadas
- PHP 7.2.5
- Laravel 7.0
- Mysql
- Composer
- Windows 10 64 Bits
- Postman

## Clonando o projeto

1. Já com o ambiente configurado com os itens citados acima, clone o repositório para seu local de preferência.

2. Vá para o diretório em que o projeto foi clonado, crie uma cópia do arquivo **.env.example** e renomeie a cópia para **.env**.

3. Abra o arquivo renomeado e ajuste as configurações de conexão com a Database de acordo com suas.

4. Abra o Terminal e vá até o diretório clonado. Dentro da pasta clonada, execute o comando **composer install** e espere instalar as dependências do projeto.

5. Com as dependências baixadas, execute o comando **php artisan key:generate** que irá gerar uma chave para sua aplicação.

6. Com as dependências baixadas, a chave gerada e o banco configurado, execute **php artisan migrate**, para adicionar as tabelas ao banco.

7. Execute **php artisan serve** para iniciar o projeto.

## Endpoints

##### GET
- localhost:8000/api/clientes
- localhost:8000/api/usuarios
- localhost:8000/api/pets

##### GET BY ID
- localhost:8000/api/clientes/{id}
- localhost:8000/api/usuarios/{id}
- localhost:8000/api/pets/{id}

##### POST
- localhost:8000/api/clientes
- localhost:8000/api/usuarios
- localhost:8000/api/pets

###### PATCH(PUT)
- localhost:8000/api/clientes/{id}
- localhost:8000/api/usuarios/{id}
- localhost:8000/api/pets/{id}

##### DELETE
- localhost:8000/api/clientes/{id}
- localhost:8000/api/usuarios/{id}
- localhost:8000/api/pets/{id}

Utilizar endpoints no postman para efetuar os testes ou crie uma página frontend para o gerenciamento dos dados.
