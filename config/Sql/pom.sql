CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
email VARCHAR(255),
phone VARCHAR(255),
mobile VARCHAR(255),
fm_ref INT,
created DATETIME,
updated DATETIME
);

CREATE TABLE customers (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
created DATETIME,
updated DATETIME,
INDEX name (name)
);

CREATE TABLE customers_users (
customer_id INT NOT NULL,
user_id INT NOT NULL,
PRIMARY KEY (customer_id, user_id),
INDEX user_idx (user_id, customer_id),
FOREIGN KEY customer_key(customer_id) REFERENCES customers(id),
FOREIGN KEY user_key(user_id) REFERENCES users(id)
);

CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
fm_ref INT,
customer_id INT NOT NULL,
user_id INT NOT NULL,
title VARCHAR (255) NOT NULL,
description TEXT,
placed DATETIME NOT NULL,
delivery DATETIME NOT NULL,
INDEX fm_ref (fm_ref),
FOREIGN KEY customer_key(customer_id) REFERENCES customers(id),
FOREGIN KEY user_key(user_id) REFERENCES users(id)
);

CREATE TABLE products (
id INT AUTO_INCREMENT PRIMARY KEY,
order_id INT NOT NULL,
title VARCHAR(255) NOT NULL,
description TEXT,
FOREIGN KEY order_key(order_id) REFERENCES orders(id)
)