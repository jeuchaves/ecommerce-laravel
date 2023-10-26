## Sobre o repositório

Estou aprendendo Laravel para fins educacionais e profissionais, visto minha paixão por PHP e a recorrente demanda de profissionais da área somado ao uso de Laravel. Para isso, criei esse primeiro repositório e com o postegar dele estarei criando meu portfólio.

De começo, estou aprendendo através de um curso gratuito no Youtube da **Node Studio Treinamentos.**

## Requisitos da aplicação

- PHP 8.1
- Composer
- Laravel

Rode a aplicação com o comando:
> php artisan serve

## Aulas

### Aula 06

Aprendi sobre alguns comandos do php artisan:
- php artisan serve (rodar a aplicação)
- php artisan list (listar os comandos)
- php artisan help [comando] (apresentar a utilização do comando)
- php artisan down (colocar aplicação em modo de manutenção)
- php artisan up (sair do modo de manutenção)

### Aula 08

Aprendi sobre introdução a rotas no laravel
- Criação de um template 'blade.php' na pasta views
- Rotas no 'routes'

### Aula 09

Aprendi sobre as rotas any e match

### Aula 14

Aprendi sobre a criação de controller, para isso use:

> php artisan make:controller [Nome do controlador]
Por definição, use o nome do controlador no singular somado ao sufixo 'Controller'.
ex: ProdutoController

### Aula 16

> php artisan make:controller [Nome do controlador] --resource (cria um controlador já definido)
> php artisan route:list (lista todas as rotas da aplicação)

### Aula 19

> php artisan migrate (cria todas as migrações)
> php artisan migrate:rollback (volta a um estado anterior as migrações)
> php artisan migrate:status (confere o estado das migrações)

### Aula 20

> php artisan make:migration [nome da migração]
Usando o prefixo 'create_' e o sufixo '_table' as funções virão pronto para uma tabela

### Aula 21

> Schema::rename('nome_antigo', 'nome_novo') em uma migration altera o nome da tabela

### Aula 22

> php artisan migrate:reset (reseta todas as tabelas)
> php artisan migrate:refresh (reseta e reinstala todas as tabelas)

### Aula 23

> composer require doctrine/dbal (poder alterar as colunas do banco de dados)
-- Para essa versão parece que não foi necessário usar esse composer

### Aula 24
> php artisan make:model Produto

### Aula 25

Cria o modelo junto com a migração
> php artisan make:model Categoria --migration

Cria o modelo, migração, controller do tipo resource
> php artisan make:model Categoria --migration --controller --resource
> php artisan make:model Categoria -m -cr
> php artisan make:model Categoria -mcr

### Aula 26

Criar uma semente
> php artisan make:seeder UsersSeeder

Rodar a semente
> php artisan db:seed

### Aula 27

> php artisan make:factory CategoriaFactory

### Aula 28

Criar um migration, factory, seed, controller resource e o model
> php artisan make:model Test -mfscr

### Aula 50

Carrinho de compras
> composer require darryldecode/cart

### Aula 64

Criando os middleware
> php artisan make:middleware CheckEmail
Foi feito um filtro para permitir o login somente se o servidor fosse @gmail.com

## Comentários sobre a aula

Estou na aula 60!

## Avaliação de conhecimento

Nada ainda.
