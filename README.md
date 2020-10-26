
## Teste Cadastro de contatos eSocial

Instruções para rodar o teste:

1 - Clonar o projeto
```
git clone https://github.com/LeonardoVales/teste-esocialo.git teste_esocial
```
2 - Rodar o composer para instalar as dependências
```
composer install
```
3 - Renomeie o arquivo .env.example para .env
4 - Crie um banco de dados (aqui eu usei mysql).
5 - Após criar o banco de dados, configure a conexão com o banco no arquivo .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
6 - Executar a migration da tabela de contatos
```
php artisan migrate
```
7 - Criar o link simbólico para o upload de arquivo. 
```
php artisan storage:link
```
8 - Configuração do envio de email. Aqui eu usei o próprio gmail para fazer o envio de email.
Caso for utilizar o gmail, algumas configurações devem ser feitas.
[Este link ensina a fazer essas configuras: (https://medium.com/graymatrix/using-gmail-smtp-server-to-send-email-in-laravel-91c0800f9662)]
Eu já deixei mais ou menos configurado no arquivo .env o envio de email.
Só precisa colocar o email e a senha do app da conta do gmail.
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=seu_email_do_gmail
MAIL_PASSWORD=sua_senha_app_do_gmail
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=seu_email_do_gmail
MAIL_FROM_NAME="${APP_NAME}"
```
10 - O projeto pode ser executado apenas com o php artisan serve, ou em algum servidor como o apache.
11 - Se caso der o erro "No application encryption key has been specified.", basta rodar o comando abaixo
```
php artisan key:generate
```
