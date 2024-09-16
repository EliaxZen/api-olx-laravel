
# 📋 API OLX Laravel

Este repositório contém uma API desenvolvida em Laravel 10, inspirada na plataforma OLX, para gerenciamento de anúncios. A API permite criar, editar, excluir e listar anúncios, além de realizar buscas filtradas por categorias e outros atributos de produtos.

## 🚀 Funcionalidades

- **Gerenciamento de Anúncios**: Criação, edição e remoção de anúncios de produtos.
- **Listagem de Produtos**: Visualize todos os produtos disponíveis com possibilidade de filtragem por categoria, preço e localização.
- **Autenticação de Usuários**: Sistema de login e registro para usuários.
- **Busca Avançada**: Busca de anúncios por diversos critérios (ex: preço, descrição, categoria).
- **Filtro de Anúncios**: Filtragem dinâmica por atributos como categoria, preço e localização.

## 🛠️ Tecnologias Utilizadas

- **Laravel 10** - Framework PHP para construção da API.
- **MySQL** - Banco de dados relacional para persistência de dados dos anúncios.
- **JWT (JSON Web Token)** - Autenticação segura via tokens.

## ⚙️ Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/EliaxZen/api-olx-laravel.git
   ```
2. Instale as dependências do projeto:
   ```bash
   composer install
   ```
3. Configure o arquivo `.env` com as credenciais do banco de dados:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Execute as migrations para criar as tabelas no banco de dados:
   ```bash
   php artisan migrate
   ```
5. Inicie o servidor local:
   ```bash
   php artisan serve
   ```

## 📚 Processo de Desenvolvimento

O desenvolvimento da **API OLX Laravel** seguiu uma abordagem estruturada e foi dividido em várias fases:

### 1. **Mapeamento de Entidades**

### 2. **Diagramação de Tabelas e Relacionamentos**

### 3. **Criação do Projeto**

### 4. **Criação de Tabelas e Migrations**

### 5. **Configuração de Relacionamentos pelo Eloquent**

### 6. **Validação e Autenticação**
   - Implementação de autenticação de usuários com **JWT** para gerenciar sessões seguras.
   - Validação de dados ao criar novos usuários e produtos.

### 7. **Seeders e Testes com Tinker**
   - População inicial do banco de dados com **Estados** e **Categorias** através de Seeders.
   - Utilização do **Laravel Tinker** para realizar testes e simular interações com o sistema.

### 8. **Planejamento de Rotas**

### 9. **EndPoints e Regras de Negócio**
   - Aplicação das regras de negócio, como proteção contra ataques CSRF e validação de inputs de usuário.

## 🤝 Contribuição

Contribuições são bem-vindas! Para mais detalhes, consulte as diretrizes de contribuição no repositório.

## 📧 Contato

Em caso de dúvidas ou sugestões, entre em contato via [galvaoalveseliascode@gmail.com](mailto:galvaoalveseliascode@gmail.com).
