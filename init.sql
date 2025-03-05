CREATE DATABASE IF NOT EXISTS pizza;
USE pizza;

CREATE TABLE pizzas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    base_price INT
);

CREATE TABLE sauces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    price INT
);

INSERT INTO pizzas (name, base_price) VALUES ('pepperoni', 300), ('hawaiian', 350);
INSERT INTO sauces (name, price) VALUES ('cheese', 50), ('bbq', 60);