# CineTI
Projeto de sistema web para o gerenciamento e compra de sessões de ingressos para cinema feito em Laravel 5.6!

## Instruções
Atenção: Necessário ter instalado em sua máquina o Composer!

### 1.Importar banco de dados
Crie um database chamado cineti e execute o arquivo cinetiEstrutura.sql para importar a estrutura do banco de dados. Este arquivo já contém alguns exemplos.Os filmes não terão imagens.

### 1.Configurar seu arquivo .env
No repositório já há um um arquivo .env de exemplo com as configurações usadas por mim, caso suas configurações de banco de dados sejam diferentes será necessário alterar tanto no arquivo .env quanto em cineti/config/database.php.

### 2.Obter dependências
Para gerar a pasta "vendor", abra o prompt de comando, vá até a raiz do projeto e execute "composer update --no-scripts" (pode levar algum tempo).

### 3.Gerar APP_KEY
Para gerar uma APP_KEY nova vá até a raiz do projeto e execute "php artisan key:generate". Este comando já insere a nova APP_KEY no arquivo .env.

### 4.Criar storage link
Para que as imagens possam ser acessadas, é necessário criar um symbolic link entre public/storage e storage/app/public. Para isso basta utilizar o comando "php artisan storage:link"

### 5.Iniciar servidor
Agora é só executar o comando "php artisan serve" na raiz do projeto.

### 6.Divirta-se
A aplicação já está rodando e pronta para ser modificada :)

Obs: Caso utilize o XAMPP para o MySQL/Apache, mude a porta do Apache para 8080.

## Algumas regras de negócio

### Filmes != Sessões
Para um filme aparecer para o usuário comum, é necessário que este filme esteja cadastrado em alguma sessão. Já o usuário admin pode visualizar todos os filmes cadastrados.

### Assentos predefinidos
Ao criar uma sala, são automaticamente criados 80 assentos em um layout de 5x16. 

### Filmes em destaque
Para aparecer na tela inicial do sistema, um filme tem que ter ao menos uma sessão em que ele está cadastrado e ter o atributo "destaque" definido como verdadeiro.

## TODO
 - Meio de adicionar usuário admin
 - Envio de segunda via por e-mail
 - Oferecer mais formas de pagamento
 - Bulk insert na criação dos assentos
 - Layout customizável de assentos
 - Testes automatizados
