

CREATE TABLE `categories` (
  `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE `products` (
  `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
  FOREIGN KEY fk_category(category_id)
   REFERENCES categories(id)
   ON UPDATE CASCADE
   ON DELETE RESTRICT
) ENGINE=InnoDB;

INSERT INTO categories (id,name)
VALUES (1, 'Peralatan Mandi')
,(2, 'Mie Instan')
,(3, 'Olahan Daging');

INSERT INTO products (id,name, category_id)
VALUES (1, 'Sampo', 1)
,(2, 'Sikat Gigi', 1)
,(3, 'Indomi', 2)
,(4, 'Mie Sedap', 2)
,(5, 'Nuget', 3);

SELECT categories.name as category_name, products.name as product_name
FROM categories, products
WHERE categories.id = products.category_id