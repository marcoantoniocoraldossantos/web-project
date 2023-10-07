Projeto de Criação Web com Apache, PHP e Informações Dinâmicas

Este projeto demonstra a configuração de um servidor Apache, a habilitação do PHP e a criação de uma página web com informações dinâmicas, incluindo geolocalização e detalhes do navegador.
Instalação do Apache e Habilitação do PHP

Instalação do Apache:

    sudo apt update
    sudo apt install apache2

Habilitação do PHP:

    sudo apt install php libapache2-mod-php

Em seguida, reinicie o Apache:

    sudo systemctl restart apache2

Criação da Página PHP com Informações Dinâmicas

Clonar o Repositório:

Clone este repositório para obter os arquivos necessários:

    git clone <URL_DO_REPOSITORIO>

Acessar o Diretório:

Navegue até o diretório do projeto:

    cd nome_do_projeto

Abrir o Arquivo PHP:

Edite o arquivo index.php no seu editor de código preferido. Este arquivo contém o código PHP e JavaScript para exibir informações dinâmicas na página.

Executar o Projeto:

Coloque os arquivos no diretório do seu servidor web. Se você seguiu as instruções de instalação, o diretório padrão será /var/www/html. Para isso, você pode copiar os arquivos para este diretório:

    sudo cp index.php /var/www/html/

Agora, você pode acessar a página no seu navegador em http://localhost/.

Informações Dinâmicas

A página PHP exibe informações dinâmicas, incluindo:

    IP do Cliente
    Data Atual
    Hora Atual
    Navegador Utilizado
    Idioma do Navegador
    Resolução da Tela
    Tipo de Dispositivo (Desktop ou Mobile)
    Sistema Operacional do Cliente
    Tipo de Conexão (Se disponível)
