Instruções e ferramentas utilizadas
<br> LARAVEL versão 12.3.0
<br> PHP 8.4.0
<br> MYSQL/XAMPP v.3.3.0 porta 3306
<br> usuário root sem  senha 
<br>
Instruções para configurações do banco de dados
nome do banco autogestao 
padrão uff8mb4_unico_ci
<br>
No repositório do https://github.com/pabloeduardogimenez/TestePratico,
existe uma pasta com o nome backup database com o arquivo
o autogestor.sql com o  scripts de criação do banco de dados 
<br>
<br> Configurações no arquivo .env 
<br> DB_CONNECTION=mysql
<br> DB_HOST=127.0.0.1
<br> DB_PORT=3306
<br> DB_DATABASE=autogestor
<br> DB_USERNAME=root
<br> DB_PASSWORD=
<br>
Instruções para projetos
<br>
para subir o servidor utilizei o comando a abaixo 
php -d variables_order=GPCS artisan serve
<br>
projetos esta porta 8000 
<br>http://127.0.0.1:8000/
<br>
<br> O banco de dados possuir dois usuários administradores
<br> Usuários admin
<br> e-mail de acesso: 
<br> admin@admin
<br> Senha admin

<br> Usuários superadmin
<br> e-mail de acesso: 
<br> superadmin@superadmin
<br> Senha : superadmin






