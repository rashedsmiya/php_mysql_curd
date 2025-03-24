create database if not exists `ecom` 
default character set utf8mb4 
collate utf8mb4_general_ci;

USE `ecom`;

create table if not exists `categories`(
   `id` bigint(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   `name` varchar(255) NOT NULL UNIQUE,
   `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Active, 0: Inactive',
   `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   `updated_at` timestamp NULL ON UPDATE CURRENT_TIMESTAMP
);

create table if not exists `products`(
   `id` bigint (20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   `category_id` bigint(20) UNSIGNED not null,
   `name` varchar(255) NOT null,
   `image` varchar(255) null, 
   `description` text null, 
   `price` decimal(10, 2) NOT NULL,
   `status` tinyint(1) NOT NULL default 1 COMMENT '1: Active, 0: Inactive',
   `created_at` timestamp not null default CURRENT_TIMESTAMP,
   `updated_at` timestamp null on update CURRENT_TIMESTAMP,
   foreign KEY (`category_id`) references `categories`(`id`) on delete cascade on update cascade;
); 
