CREATE DATABASE IF NOT EXISTS vulnerable_app;
USE vulnerable_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100)
);

CREATE TABLE sensitive_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    data TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO users (username, password, email) VALUES 
('admin', 'admin123', 'admin@vulnerable.com'),
('user', 'user123', 'user@vulnerable.com');

INSERT INTO sensitive_data (user_id, data) VALUES 
(1, 'Poufne dane administratora'),
(2, 'Poufne dane użytkownika');