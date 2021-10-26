<h1>Atlas Escolar</h1>

<h3>Sobre o sistema</h3>

<h4>É uma CRUD para gerenciamento de instituições de ensino. Atlas Escolar foi desenvolvido para organizar e flexibilizar o controle de cadastro de instituições de ensino e estudantes.</h4>

![Turmas](https://user-images.githubusercontent.com/89282274/138792500-d0769257-a67b-4c12-82fb-7eafa662e3b5.PNG)

<h4>O sistema também conta com endpoints API.
 <p>http://localhost/api/escolas</p>
 <p>http://localhost/api/alunos</p>
 <p>http://localhost/api/turmas</p>
 <p>http://localhost/api/alunos_turma (Alunos Matrículados)</p>
 
 <h4>Utilizando as APIs, utilizando 'Escolas', como exemplo<h4>
    <p>Inserindo informações: http://localhost/api/escolas, método 'POST', campos:(Nome e Endereço)
    <p>Para acessar todas as informações: http://localhost/api/escolas</p>
    <p>Para procurar por um cadastro específico: http://localhost/api/escolas/{id}</p>  
    <p>Para atualizar um cadastro: http://localhost/api/escolas/{id}, método 'PUT'</p>
    <p>Para excluir um registro: http://localhost/api/escolas/{id}, método 'DELETE'<p> 

![API](https://user-images.githubusercontent.com/89282274/138790352-1142b00a-f747-453f-8ef8-b29b2b5a6100.PNG)

<h4>Inicializando o projeto</h4>

<p>
- MySQL
</p>
<p>
  - Laravel 8  
</p>
<p>
   - PHP: ^7.3
 </p>
 
 <h4>
    Após clonar o repositório, acesse o diretório do projeto, crie uma base de dados "controle-escolas" e utilize os seguintes comandos:
</h4>
<p>- <code>composer update</code></p>
<p>- <code>npm install</code></p>
<p>- <code>php artisan migrate</code></p>

 <h4>Realize o seu cadastro para acessar o sistema e logo na tela inicial terá um tutorial explicando de forma simplificada como utilizar o sistema.</h4>

     <h4>Utilizar o comando "php artisan db:seed", no terminal caso precise de alguns registros previamente cadastrados</code></h4>
 
 
 
 
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
