CREATE DATABASE laboratorio;
USE laboratorio;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50)
);

INSERT INTO usuarios (username, password) VALUES ('admin', 'admin123');
INSERT INTO usuarios (username, password) VALUES ('user', 'password');
