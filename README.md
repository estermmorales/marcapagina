# readtrackr

Este projeto é uma aplicação web desenvolvida em CodeIgniter para gerenciamento de livros. Ele oferece recursos básicos para adicionar, editar, excluir e visualizar informações sobre livros, incluindo título, autor, gênero, status de leitura, páginas atuais, páginas totais, porcentagem de leitura, etc.

![readtrackr](https://i.imgur.com/Q68gEj3.png)

## Funcionalidades Principais

- Adicionar novos livros ao banco de dados;
- Editar informações existentes de livros;
- Excluir livros do banco de dados;
- Visualizar lista de livros com detalhes;
- Calcular automaticamente a porcentagem de leitura com base nas páginas atuais e totais.

### Tecnologias Utilizadas

- CodeIgniter 4
- MySQL
- Tailwind CSS

#### Instalação

1. Clone este repositório
2. Execute composer install para instalar as dependências;
3. Configure o arquivo .env com as informações do seu banco de dados;
4. Execute as migrações para criar as tabelas do banco de dados: php spark migrate;
5. Inicie o servidor embutido: php spark serve.

#### Licença

Este projeto está licenciado sob a [Licença MIT](https://github.com/estermmorales/readtrackr?tab=MIT-1-ov-file).
