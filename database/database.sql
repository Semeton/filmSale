CREATE DATABASE filmSale;

CREATE TABLE `users` (
  `id` BIGINT(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone` INT(11) NOT NULL,
  `date_of_birth` VARCHAR(255) NOT NULL, 
  `age` INT(11) NOT NULL, 
  `address` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `genre` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `genre` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `products` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT(11) FOREIGN KEY REFERENCES users(id),
  `genre_id` INT(11) FOREIGN KEY REFERENCES genre(id),
  `product_name` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `quantity` BIGINT(20) NOT NULL,
  `price` DECIMAL NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart_items` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;