
# O que é um framework ?

Framework é um conjunto de bibliotecas, que abordam funcionalidades, e estruturas, para o desenvolvimento de aplicações, a fim de fornecer soluções para um mesmo domínio de problema, permitindo a reutilização do seu código. Assim, através das diversas linguagens de programação, os Frameworks são criados e identificados pelas metodologias, propósitos, e implementações, aos quais os diversos tipos de aplicações, na maioria orientadas a objetos, poderão reutilizar suas estruturas e códigos.

Um Framework é formado por um conjunto classes implementadas em uma determinada linguagem de programação, que fornece recursos comuns já prontos, validados e testados, os quais podem ser usados para auxiliar o desenvolvimento de software, viabilizando maior eficiência na resolução dos problemas, otimização de recursos, e detecção de erros. Ele fornece um modelo de dados, usados para resolver um problema específico, abstraindo parte do código das soluções que estamos tratando.

Na programação orientada a objetos, especificamente, um Framework é um conjunto de classes e interfaces, com objetivo da reutilização de arquitetura de software, é composto por objetos, pelos mapeamentos das suas responsabilidades, que através de interfaces, com um fluxo de controle definido, possibilitará a interação com aplicações, ou seja é ele quem irá guiar à solução de um domínio específico.

# Comandos Laravel

## composer install
  Instalar dependencias após clonar projeto
## composer create-project laravel/laravel NOME_DO_PROJETO
  Criar projeto laravel
##  php artisan serve
  Iniciar servidor 
## php artisan make:model Flight
  Criar model
##  php artisan make:controller NameController
  Criar controller
##  php artisan make:migration create_flights_table
  Criar arquivo de migration
## php artisan migrate
  Criar tabelas no banco
## php artisan migrate:status
  Checar status das migrações


# Pontos mais importantes do Laravel

## O que são rotas ?
quando digitamos www.testserver.com.br/users, é retornada uma página HTML com os users.

A primeira parte de nossa URL, www.testserver.com.br, define uma máquina única na internet que vai responder a requisição do navegador, retornando uma página HTML. Quem retorna esta página HTML é um software que executa nesta máquina chamado servidor Web, ou web server. Qual página vai ser retornada depende justamente da segunda parte da URL, no caso, users.
## routes->web.php
Aqui ficará todas as rotas nossas. Por exemplo:
Queremos que ao usuario acessar /users na url do navegador nos mostremos 
os usuários do banco para ele

## Rotas POST e GET
Na verdade temos mais tipos de rotas porém neste momento é importante sabermos de 2, POST e GET. De modo bem simples:
POST -> Salvar algo no banco
GET  -> Retornar alguma página

# Estrutura do laravel
Ele usa o MVC. Model, View e Controller

Model -> /app/Models
Controller -> /app/Http/Controllers
View ->  resources/views

Sempre que requisitar uma rota ele vai chamar um controller, esse controller sempre vai retornar uma view no fim, podendo interagir com models antes de mexer na view


# Git 

## Clonando repositório do professor
git clone url_repositório

execute o comando ```git remote -v```

origin  https://github.com/rafaeljordaojardim/project-laravel-aula.git (fetch)
origin  https://github.com/rafaeljordaojardim/project-laravel-aula.git (push)

Ele irá retornar algo parecido com as linhas de cima, isso significa que o "remoto" (origin) está apontado para meu repositório, se quiserem subir no seus, terão que mudar essa "origin" (remoto).

## Como mudar o remoto (origin) no meu repo na minha máquina

git remote set-url origin https://gitlab.com/alunorepo/repo-name.git
essa url acima você irá pegar do seu repositório que criou

git add . -> adicionar arquivos pro commit
git commit -m "mensagem" -> criar mensagem pro pacote 
git push origin main -> mandar pro github
git pull origin main

Não se esqueça do token que aprendemos a criar para logar no github

podemos tambem setar a url da seguinte maneira no qual não precisaremos mais colocar password

git remote set-url origin https://seu_token_aqui@gitlab.com/alunorepo/repo-name.git


Caso queira criar uma nova origin

git remote add new_origin_name [repo-url]

