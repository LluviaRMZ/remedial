USE remedial;

CREATE TABLE products (
    id INT  PRIMARY KEY,
    name VARCHAR  NULL,
    price DECIMAL NULL
);

INSERT INTO products (name, price) VALUES
('jabon 1', 10.00),
('suavitel 2', 20.50),
('cloro 3', 3.00),
('jabon trastes 4', 10.00),
('pinol 5', 200.00),
('shampu 6', 300.00),
('detergente 7', 100.00),
('jabon foca 8', 200.50),
('suavitel baby 9', 300.00),
('fabuloso 10', 100.00);