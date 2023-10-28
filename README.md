# Controle-de-Funcionarios
CRUD de RH web feito com HTML, PHP, JS, CSS.

24/10 -> Criado styleListagem.css e iniciado a pagina listagem_funcionarios.html.

# Criar-tabela

create database controlefuncionario

CREATE TABLE Funcionarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(255) NOT NULL,
    CPF CHAR(11) UNIQUE NOT NULL,
    Cargo VARCHAR(100),
    Salario DECIMAL(10, 2),
    Data_Admissao DATE,
    OBS TEXT
);

