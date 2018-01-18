/* USUARIOS ================================================== */

DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id int(11) NOT NULL,
  nome varchar(200) NOT NULL,
  email varchar(200) NOT NULL,
  senha varchar(100) NOT NULL,  
  permissao varchar(50) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

ALTER TABLE users
  ADD PRIMARY KEY (id);
  
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
/* PRODUTOS ================================================== */

DROP TABLE IF EXISTS products;

CREATE TABLE products (
  id int(11) NOT NULL,
  keyid varchar(25) NOT NULL,
  descricao varchar(255) NOT NULL,
  estoque decimal(18,6) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

ALTER TABLE products
  ADD PRIMARY KEY (id);
  
ALTER TABLE products
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;