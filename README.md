Fellini Dois

Este repositório contém o código-fonte do site institucional Fellini, desenvolvido em PHP, HTML, CSS e JavaScript.
O sistema inclui tanto o site público quanto uma área administrativa, permitindo gerenciar conteúdos como banners, clientes, depoimentos e projetos.

🚀 Funcionalidades

Site Institucional

Página inicial com banner dinâmico

Seções de história, visão e serviços

Projetos: residencial, empresarial e 3D

Página de contato com formulário integrado a PHP Mailer

Administração

Gerenciamento de clientes

Cadastro e edição de depoimentos

Controle de funcionários

Upload de imagens e conteúdos

Outros Recursos

Layout responsivo (CSS + media queries)

Carrossel de imagens com Slick.js

Modularização de conteúdo em conteudo/

Sistema de envio de e-mails (mailer/)

📂 Estrutura do Projeto
fellinidois/
├── admin/                # Painel administrativo
│   ├── clientes/         # Gestão de clientes
│   ├── depoimentos/      # Gestão de depoimentos
│   ├── funcionarios/     # Gestão de funcionários
│   └── css/              # Estilos da área admin
├── conteudo/             # Blocos de conteúdo incluídos via PHP
├── css/                  # Estilos principais do site
├── js/                   # Scripts (slick.js e funções extras)
├── img/                  # Imagens utilizadas no site
├── mailer/               # Configuração de envio de e-mails
├── fonts/                # Fontes utilizadas
├── index.php             # Página inicial dinâmica
├── index.html            # Versão estática inicial (possível protótipo)
├── home.php              # Página de apresentação (visão e serviços)
├── historia.php          # Página "Nossa História"
├── contato.php           # Página de contato
└── projeto*.php          # Páginas de projetos

🛠️ Tecnologias Utilizadas

Frontend: HTML5, CSS3, JavaScript (Slick.js, jQuery)

Backend: PHP 7+

Banco de Dados: MySQL (estruturas sugeridas para clientes, depoimentos, funcionários, etc.)

Outros: PHP Mailer para envio de formulários

📦 Pré-requisitos

Antes de rodar o projeto, é necessário ter instalado:

XAMPP ou WAMP
 (Apache + PHP + MySQL)

Git (opcional, para versionamento)

▶️ Como Executar

Clone o repositório ou extraia os arquivos no diretório do servidor local:

git clone https://github.com/seu-repo/fellinidois.git


ou mova a pasta fellinidois para:

C:/xampp/htdocs/


Inicie o Apache e MySQL no XAMPP/WAMP.

Acesse o site no navegador:

http://localhost/fellinidois


Para acessar a área administrativa:

http://localhost/fellinidois/admin

🤝 Contribuição

Faça um fork do projeto

Crie uma branch para sua feature (git checkout -b feature/nova-feature)

Commit suas mudanças (git commit -m 'Adicionando nova feature')

Faça push para a branch (git push origin feature/nova-feature)

Abra um Pull Request
