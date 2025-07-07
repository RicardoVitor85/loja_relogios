# Loja de Relógios Online

Este é um projeto simples de loja online de relógios desenvolvido em PHP, com gestão de carrinho, login, registo, área administrativa e integração de pagamento via **PayPal Sandbox**.

---

## Funcionalidades

- Página de login e registo de utilizadores com Bootstrap
- Gestão de sessão e carrinho de compras simples
- Visualização do carrinho com resumo dos produtos e total
- Finalização da compra com botão de pagamento PayPal em ambiente sandbox
- Área administrativa para gerir produtos (a implementar)
- Design responsivo e elegante usando Bootstrap
- Código estruturado em pastas: `views`, `api`, `assets` (para CSS, scripts, imagens)

---

## Estrutura do Projeto

/24198_Loja/
│
├── /api/ # Scripts PHP para backend (ex: auth.php, db.php, etc)
├── /views/ # Páginas front-end (login.php, registo.php, carrinho.php, checkout.php, areaadmin.php)
├── /assets/
│ └── styles.css # CSS personalizado + Bootstrap incluído via CDN
├── /partials/
│ ├── header.php # Cabeçalho comum (navbar, links CSS, etc)
│ └── footer.php # Rodapé comum
└── README.md # Este ficheiro

yaml
Copiar
Editar

---

## Tecnologias Usadas

- PHP 7+
- MySQL / MariaDB (base de dados)
- Bootstrap 5 (estilos)
- PayPal JavaScript SDK (integração pagamento sandbox)

---

## Instalação e Configuração

1. Clona este repositório para o teu servidor local ou remoto.

```bash
git clone https://github.com/teuusuario/24198_Loja.git
Configura a base de dados MySQL:

Cria a base de dados loja_relogios

Importa as tabelas (utilizadores, produtos, carrinho) com os scripts SQL fornecidos

Ajusta o ficheiro api/db.php com as tuas credenciais de acesso à base de dados.

Configura o PayPal Sandbox:

Cria uma conta em PayPal Developer

Cria uma app sandbox e obtém o Client ID

Substitui o placeholder SEU_CLIENT_ID_SANDBOX em views/checkout.php pelo teu Client ID sandbox

Inicia o servidor local (ex: XAMPP, MAMP, LAMP)

Acede via browser ao projeto, por exemplo: http://localhost/24198_Loja/views/login.php

Utilização
Regista uma conta nova ou faz login

Explora os produtos (futura implementação)

Adiciona produtos ao carrinho (futura implementação)

Vai ao carrinho para ver os produtos selecionados

Finaliza a compra com o botão PayPal Sandbox

Recebe confirmação do pagamento

Contribuição
Este projeto é para fins educativos. Fica à vontade para sugerir melhorias ou reportar issues.
