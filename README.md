Quando ultilizar a estrutura MVC primeiro fazer as seguintes modificações:

- Alterar a ultima linha do arquivos .htaccess para nome do banco de dados ultilizados.

- Alterar as informações do banco de dados no arquivo config.php.

- Quando enviar para um servidor alterar o arquivo environment.php

- Quando criar arquivo no model colocar namespace Models e use \Core\Model

-Para puxar uma class usar EX: use \ Models\Usuarios ou puxar na variavel EX: $usuario = new \Models\Usuarios();