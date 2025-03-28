Instruções e ferramentas utilizadas
LARAVEL versão 12.3.0
PHP 8.4.0
MYSQL/XAMPP v.3.3.0 porta 3306
usuário root sem  senha 

Instruções para configurações do banco de dados
nome do banco autogestao 
padrão uff8mb4_unico_ci
No repositório do https://github.com/pabloeduardogimenez/TestePratico,
existe uma pasta com o nome backup database com o arquivo
o autogestor.sql com o  scripts de criação do banco de dados 
<br>
Configurações no arquivo .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=autogestao
DB_USERNAME=root
DB_PASSWORD=
<br>

Instruções para projetos
para subir o servidor utilizei o comando a abaixo 
php -d variables_order=GPCS artisan serve
