Create table tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_usuario INT NOT NULL,
    CONSTRAINT fk_usuario_tarefa
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
    ON DELETE CASCADE
);


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);



INSERT INTO usuarios (nome, email, senha)
VALUES (
    'João',
    'joao@gmail.com',
    '$2y$10$/LOjHnJysPuFYA.9j7tqDuZP7ZD2mUodPN5LjO3bxHBdQYZqZ7HOG'
);
INSERT INTO usuarios (nome, email, senha)
VALUES (
    'Gabriel',
    'gabriel@gmail.com',
    '$2y$10$/LOjHnJysPuFYA.9j7tqDuZP7ZD2mUodPN5LjO3bxHBdQYZqZ7HOG'
);


php -r "echo password_hash('123456', PASSWORD_DEFAULT), PHP_EOL;