# 🏠 Casa Smart Shop

### Plataforma de conteúdo e recomendações sobre Casa Inteligente e Automação Residencial

[![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=for-the-badge\&logo=php\&logoColor=white)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge\&logo=laravel\&logoColor=white)](https://laravel.com/)
[![Filament](https://img.shields.io/badge/Filament-3-FDAE4B?style=for-the-badge\&logo=laravel\&logoColor=white)](https://filamentphp.com/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?style=for-the-badge\&logo=tailwindcss\&logoColor=white)](https://tailwindcss.com/)
[![Vite](https://img.shields.io/badge/Vite-7-646CFF?style=for-the-badge\&logo=vite\&logoColor=white)](https://vitejs.dev/)
[![Pest](https://img.shields.io/badge/Pest-Testing-7C3AED?style=for-the-badge\&logo=pest\&logoColor=white)](https://pestphp.com/)


> Projeto full-stack desenvolvido com Laravel para publicação e gerenciamento de conteúdo sobre automação residencial, dispositivos inteligentes e tecnologia para casas conectadas.

🌐 **Aplicação:** https://casasmartshop.com.br/
💻 **Código-fonte:** https://github.com/Maiquera/casasmartshop

## 📸 Demonstração

### Tela Inicial (Desktop)
<img width="1440" height="900" alt="Screenshot from 2026-09-08 23-28-10" src="https://github.com/user-attachments/assets/7a3a5380-1e6a-4238-9e1c-456b20abe563" />


<details>
  <summary>📱 Ver versão Mobile e outros fluxos</summary>
  
  ### Layout Responsivo
<img width="362" height="780" alt="Screenshot from 2026-09-08 23-29-35" src="https://github.com/user-attachments/assets/b072a161-15ee-4090-ac15-f56db9117d2e" />


  ### Painel do Usuário
<img width="1440" height="900" alt="Screenshot from 2026-09-08 23-31-16" src="https://github.com/user-attachments/assets/4c166576-cc9b-4db5-b912-12bcf9b46e17" />

</details>
---

## 📌 Sobre o projeto

O **Casa Smart Shop** é uma aplicação web desenvolvida do zero utilizando o ecossistema **PHP/Laravel**.

O projeto foi criado com uma necessidade real em mente: disponibilizar conteúdos, análises, comparativos e recomendações de produtos relacionados a **casa inteligente e automação residencial**, mantendo uma estrutura preparada para crescimento.

Mais do que um site de conteúdo, o projeto foi utilizado como laboratório para aplicar conceitos de desenvolvimento web em uma aplicação real, incluindo:

* arquitetura MVC;
* persistência de dados;
* relacionamentos entre entidades;
* CRUD;
* painel administrativo;
* gerenciamento de conteúdo;
* autenticação e autorização;
* SEO técnico;
* desenvolvimento responsivo;
* organização de código;
* testes automatizados;
* build e gerenciamento de assets;
* versionamento com Git.

---

## 🎯 Objetivos do projeto

O desenvolvimento do Casa Smart Shop tem três objetivos principais:

### 1. Produto real

Construir e manter uma plataforma funcional publicada na internet, com conteúdo real e usuários reais.

### 2. Aplicação prática de Laravel

Utilizar o framework em um projeto completo, indo além de exemplos isolados e explorando recursos utilizados no desenvolvimento profissional.

### 3. Portfólio

Demonstrar na prática conhecimentos em **PHP, Laravel, banco de dados, frontend, Git, testes e desenvolvimento de aplicações web**.

---

# ✨ Principais funcionalidades

## 📝 Sistema de conteúdo

A aplicação possui uma estrutura para criação e gerenciamento de conteúdos, permitindo organizar os artigos publicados no site.

Entre os recursos estão:

* criação de artigos;
* edição de artigos;
* categorias;
* status de publicação;
* datas de publicação;
* conteúdo formatado;
* imagens;
* URLs amigáveis;
* organização do conteúdo;
* relacionamento entre posts e categorias.

---

## 🗂️ Categorias

Os conteúdos são organizados através de categorias, facilitando tanto a navegação dos usuários quanto a estrutura de SEO da aplicação.

Exemplos de categorias do projeto:

* 💡 Iluminação Inteligente
* 🔐 Segurança Inteligente
* 🏠 Casa Inteligente
* 🤖 Robôs Limpadores
* 🗣️ Assistentes Virtuais
* 📚 Guias e Tutoriais

---

## 🎛️ Painel administrativo

O gerenciamento da aplicação é realizado através de um painel administrativo desenvolvido com **Filament**.

O painel permite administrar os principais recursos da aplicação sem necessidade de editar diretamente o banco de dados.

### Recursos

* gerenciamento de posts;
* gerenciamento de categorias;
* gerenciamento de e-mails inscritos na Newsletter
* formulários administrativos;
* tabelas;
* filtros;
* ações;
* editor de conteúdo;
* gerenciamento estruturado dos dados.

O editor de conteúdo utiliza **TipTap através do pacote Filament Tiptap Editor**.

---

# 🧱 Arquitetura

O projeto utiliza a arquitetura padrão do Laravel, mantendo a separação entre responsabilidades da aplicação.

```text
casasmartshop/
│
├── app/
│   ├── Filament/
│   │   └── Resources/
│   │
│   ├── Http/
│   │   └── Controllers/
│   │
│   ├── Models/
│   │
│   └── Providers/
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── public/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── storage/
│
├── tests/
│
├── artisan
├── composer.json
├── package.json
├── vite.config.js
└── README.md
```

---

# 🛠️ Stack tecnológica

## Backend

| Tecnologia          | Utilização                             |
| ------------------- | -------------------------------------- |
| **PHP 8.3+**        | Linguagem principal                    |
| **Laravel 13**      | Framework backend                      |
| **Eloquent ORM**    | Persistência e relacionamento de dados |
| **Blade**           | Renderização das páginas               |
| **Laravel Artisan** | CLI e automação                        |
| **Laravel Tinker**  | Interação com a aplicação              |

## Administração

| Tecnologia     | Utilização              |
| -------------- | ----------------------- |
| **Filament 3** | Painel administrativo   |
| **Livewire**   | Componentes interativos |
| **TipTap**     | Editor de conteúdo      |

## Frontend

| Tecnologia         | Utilização                       |
| ------------------ | -------------------------------- |
| **HTML5**          | Estrutura                        |
| **Tailwind CSS 4** | Estilização                      |
| **JavaScript**     | Interações                       |
| **Vite**           | Build e desenvolvimento frontend |

## Qualidade

| Tecnologia       | Utilização                 |
| ---------------- | -------------------------- |
| **Pest**         | Testes automatizados       |
| **Laravel Pint** | Padronização de código     |
| **Git**          | Controle de versão         |
| **GitHub**       | Hospedagem e versionamento |

A stack declarada no projeto inclui PHP 8.3, Laravel 13, Filament 3, TipTap, Pest e Laravel Pint.

---

# 🔎 SEO e performance

Como o projeto também funciona como uma aplicação de conteúdo, SEO foi considerado desde a arquitetura da aplicação.

Entre as práticas implementadas estão:

* URLs amigáveis;
* títulos e meta descriptions;
* canonical URLs;
* Open Graph;
* hierarquia semântica de headings;
* links internos;
* categorias;
* sitemap;
* estrutura de conteúdo orientada à intenção de busca;
* páginas responsivas;
* otimização de imagens;
* preocupação com Core Web Vitals.

O projeto também utiliza uma arquitetura que permite administrar o conteúdo sem alterar diretamente os templates da aplicação.

---

# 🧠 O que este projeto demonstra

Este projeto representa principalmente a aplicação prática dos seguintes conhecimentos:

### Backend

* PHP moderno;
* Laravel;
* MVC;
* Controllers;
* Models;
* Eloquent;
* migrations;
* relacionamentos;
* validação;
* rotas;
* CRUD;
* autenticação;
* autorização.

### Frontend

* Blade;
* HTML semântico;
* Tailwind CSS;
* JavaScript;
* responsividade;
* componentes reutilizáveis;
* Vite.

### Banco de dados

* modelagem relacional;
* migrations;
* seeders;
* relacionamentos Eloquent;
* consultas utilizando ORM.

### Engenharia de software

* Git;
* GitHub;
* organização de projeto;
* padronização de código;
* ambiente de desenvolvimento;
* separação de responsabilidades.

### Produto

Além do desenvolvimento técnico, o projeto envolve:

* SEO;
* arquitetura de informação;
* UX;
* produção de conteúdo;
* análise de intenção de busca;
* performance;
* manutenção de uma aplicação publicada.

---

# 📈 Próximos passos

O projeto continua em evolução.

Algumas melhorias planejadas:

* [ ] adicionar testes;
* [ ] melhorar cobertura de testes de funcionalidades críticas;
* [ ] otimizar ainda mais performance;
* [ ] adicionar sistema de tags;
* [ ] evoluir o sistema de gerenciamento de conteúdo;
* [ ] implementar melhorias adicionais de acessibilidade;
* [ ] adicionar automações de publicação;
* [ ] implementar monitoramento e métricas;
* [ ] evoluir a infraestrutura de deploy.

---

# 💼 Por que este projeto faz parte do meu portfólio?

O Casa Smart Shop foi desenvolvido para demonstrar a capacidade de transformar uma ideia em uma **aplicação web funcional e publicada**, passando por diferentes etapas do desenvolvimento.

O projeto envolve desde a modelagem e persistência dos dados até a construção da interface pública e do painel administrativo.

> **A proposta não é apenas demonstrar conhecimento de sintaxe PHP ou Laravel, mas demonstrar a capacidade de utilizar essas tecnologias para resolver um problema real.**

---

# 👨‍💻 Sobre o desenvolvedor

**Maicol Menezes**

Desenvolvedor em formação com foco em **PHP, Laravel e desenvolvimento web**, construindo projetos reais para aprimorar conhecimentos em backend, frontend, bancos de dados, testes e arquitetura de aplicações.

Tenho interesse especialmente em oportunidades como:

**PHP Developer • Laravel Developer • Backend Developer • Full Stack Developer**

### Conecte-se comigo

💻 **GitHub**
https://github.com/Maiquera

💼 **LinkedIn**
https://www.linkedin.com/in/maicol-menezes/

🌐 **Projeto online**
https://casasmartshop.com.br/
