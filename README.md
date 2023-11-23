# Controle-de-Funcionarios
CRUD de RH web feito com HTML, PHP, JS, CSS.

Criado por: Paulo Brezolin, Felipe Sales, Gabriel Andrade, Igor Souza, Lucas Ferraz, Jorsan e Jonathan Goncalves

24/10 -> Criado styleListagem.css e iniciado a pagina listagem_funcionarios.html.

# Criar-tabela

CREATE DATABASE controlefuncionarios

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    cargo VARCHAR(100),
    salario DECIMAL(10, 2),
    data_admissao DATE,
    obs TEXT,
    faltas INT
);

# COMO EXECUTAR
Requisitos: PHP, MySQL, XAMPP

1- Baixar os arquivos como zip.

2- Extrair os arquivos.

3- Pegar os códigos SQL acima e executar em um servidor local

4- Copiar a pasta para "...\xampp\htdocs" que fica onde o XAMPP (ou outro servidor) foi instalado.

5- Inicializar o servidor XAMPP (ou outro servidor).

6- Abrir os arquivos as pastas pelo local host.
