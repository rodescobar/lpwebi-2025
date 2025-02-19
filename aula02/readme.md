# Aula 02

## O que é um servidor WEB
- Um **servidor web** é um software que atende solicitações de clientes (navegadores) para acessar páginas web. Ele entrega o conteúdo solicitado, como HTML, CSS, JavaScript, imagens, etc., através do protocolo HTTP/HTTPS.

## O que é Apache e ISS
- **Apache**: Um servidor web de código aberto amplamente utilizado que serve páginas web para os usuários. Ele é multiplataforma e pode ser executado em diversos sistemas operacionais, incluindo Linux, Windows e macOS.
- **ISS (Internet Information Services)**: Um servidor web da Microsoft usado para hospedar sites e outros conteúdos na web. Ele é específico para sistemas operacionais Windows e integrado com outras tecnologias da Microsoft.

## Qual a diferença entre os dois
- **Apache** é multiplataforma e amplamente utilizado em servidores Linux.
- **ISS** é específico para sistemas operacionais Windows e integrado com outras tecnologias da Microsoft.

## O que é XAMPP
- **XAMPP**: Um pacote de software livre que inclui Apache, MySQL, PHP e Perl, facilitando a instalação de um servidor web local.

## Explique o Mysql, PHP e Apache existente dentro do xampp
- **MySQL**: Um sistema de gerenciamento de banco de dados relacional.
- **PHP**: Uma linguagem de script do lado do servidor usada para desenvolver páginas web dinâmicas.
- **Apache**: O servidor web que serve as páginas web para os usuários.

## Qual a diferença para o Wamp
- **WAMP**: Similar ao XAMPP, mas específico para Windows e inclui Apache, MySQL e PHP.

## Para que serve a pasta htdocs
- **htdocs**: A pasta raiz do servidor Apache onde os arquivos do site são armazenados.

## Como acessa o servidor
- Acesse o servidor digitando `http://localhost` no navegador.

## O que é o arquivo httpd.conf
- **httpd.conf**: O arquivo de configuração principal do servidor Apache. Ele contém várias diretivas que controlam o comportamento do servidor, como portas de escuta, diretórios raiz, permissões de acesso, e muito mais.

## Como alterar portas no arquivo httpd.conf e testar depois
- Abra o arquivo `httpd.conf` e altere a linha `Listen 80` para `Listen [nova_porta]`.
- Reinicie o Apache e acesse `http://localhost:[nova_porta]` para testar.

## Porque devo colocar o arquivo principal como index, e como faço para alterar
- **index**: O arquivo padrão que o servidor procura ao acessar um diretório.
- Para alterar, modifique a linha `DirectoryIndex index.html` no `httpd.conf` para o nome do novo arquivo principal.

## Portas
- As portas são um conceito importante em redes de computadores. Elas são usadas para identificar aplicativos e serviços em um computador. Cada aplicativo ou serviço é atribuído a uma porta exclusiva. Quando um computador recebe uma solicitação de conexão, ele verifica a porta de destino da solicitação para determinar qual aplicativo ou serviço deve lidar com a solicitação. As portas são importantes porque permitem que vários aplicativos e serviços sejam executados em um único computador.
- Para configurar o Apache para receber solicitações nas portas 80 e 8080, você precisará editar o arquivo `httpd.conf`:
  ```
  Listen 80 
  Listen 8080

  ServerName localhost:80
  ServerName localhost:8080
  ```

## Virtual Host
- Um **Virtual Host** é um recurso do servidor web Apache que permite que você hospede vários sites em um único servidor. Cada site é hospedado em um diretório diferente e pode ter seu próprio nome de domínio, endereço IP e configurações personalizadas. Isso é útil para desenvolvedores web que desejam testar seus sites localmente antes de implantá-los em um servidor remoto.
- Para configurar um Virtual Host no Apache, você precisará editar o arquivo de configuração do Apache, que geralmente é encontrado na pasta de instalação do Apache. O arquivo de configuração é geralmente chamado de `httpd.conf`. Você precisará adicionar as seguintes linhas ao arquivo de configuração:
  ```
  <VirtualHost *:80>
      DocumentRoot "c:/xampp/htdocs/seusite"
  </VirtualHost>
  
   <VirtualHost *:8080>
      DocumentRoot "c:/xampp/htdocs/outro_site"
  </VirtualHost>
  ```