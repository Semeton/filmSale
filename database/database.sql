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
  `genre_id` INT(11),
  `product_name` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `quantity` BIGINT(20) NOT NULL,
  `price` DECIMAL NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL,
  FOREIGN KEY (`genre_id`) REFERENCES `genre`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` BIGINT(20),
  `product_id` INT(11),
  `quantity` BIGINT(20) NOT NULL,
  `price` VARCHAR(10, 2) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `orders` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` BIGINT(11),
  `product_id` INT(11),
  `quantity` BIGINT(20) NOT NULL,
  `cart_id` INT(11),
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`),
  FOREIGN KEY (`cart_id`) REFERENCES `cart`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `sales` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_date` DATE NOT NULL,
  `sale` INT(11) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `modified_at` TIMESTAMP NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;