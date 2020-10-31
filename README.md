## Instruções para testes
Com as instruções abaixo você poderá baixar e realizar testes locais na sua máquina.

### 1° - Clonando o repositório
Para clona o repositório basta usar o seguinte comando `git clone` e a url do projeto
que está no github.

Execute em seu terminal do linux ou windows o seguinte comando:<br>
* `git clone https://github.com/davddaniel/blog_laravel.git`

### 2° - Configurando o laravel
Após clonar o projeto é necessário fazer algumas cofigurações para que possa executar
localmente. No raiz do projeto exite um arquivo chamado `.env.exemple`, basta duplicar
esse arquivo e retirar o `.exemple` deixando apenas `.env`.

* Antes - `.env.exemple`
* Depois - `.env`

Depois de renomear o `.env.exemple`, entre nesse arquivo e ajuste as configurações de banco
de dados.

Essas são as configurações que vem por padrão.

~~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
~~~~

Na opção `DB_DATABASE=laravel`, retire o laravel e coloque o nome do banco desejado.
Nesse projeto o no do banco utilizado foi `blog`.

Em `DB_USERNAME=root` troque o nome `root` por o nome de usuário do seu banco de dados
e em `DB_PASSWORD=` coloque a senha do seu banco de dados caso ele possua alguma.

### 3° - Gerando o APP_KEY
Toda aplicação laravel por padrão quando é clonada é vem sem o `APP_KEY` que fica dentro
do arquivo `.env`, para gerar um novo basta usar o seguite comando:

* `php artisan key:generate`

Com isso seu ambiente já está configurado para rodar em seu ambiente local e para testar
basta executar o comando `php artisan serve` para que o laravel inicie um servidor interno
para que o pojeto seja acessado pelo browser.
