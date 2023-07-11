<h1>App de postagem e edição de Notícias</h1>
<p>Meu primeiro projeto Laravel:</p>
<p>Crud simples utilizando Laravel e Bootstrap :computer:</p>

## Instalação do Projeto 

1 - Primeiramente, você precisará instalar uma cópia do repositório na sua máquina:
    
    git clone https://github.com/AlyssonDev0/Laravel-News-.git
    
2 - Abra o diretório:
     
     cd Laravel-News-
     
3 - Faça a instalação do composer:

    composer install
    
4 - Gere o arquivo `.env`:

    cp .env.example .env
    
5 - Gere a chave da aplicação:

    php artisan key:generate

6 - Configure suas credenciais de banco de dados no arquivo `.env`:
    Altere os parametros(DB_USERNAME, DB_PASSWORD) com o usuário e senha do seu servidor de banco de dados.
    Então, crie um banco de dados e altere o parametro (DB_DATABASE) com o nome do banco criado. 

7 - Faça a migração das tabelas para o banco:

    php artisan migrate

8 - Inicie o servidor de desenvolvimento:

    php artisan serve

9 - Agora basta acessar o endereço local no seu navegador, que por padrão é: 

    http://127.0.0.1:8000

<h3>Aproveite! :smiley:</h3>

## Screenshots

![Página Inicial](/screenshots/home.png)
![Gerenciar Categorias](/screenshots/categorias.png)



