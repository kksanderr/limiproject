-- kreiranje baze
CREATE DATABASE IF NOT EXISTS limibloger
CHARACTER SET = utf8 COLLATE = utf8_general_ci;
USE limibloger;

-- tabela users
CREATE TABLE IF NOT EXISTS users (
  id int unsigned NOT NULL AUTO_INCREMENT,
  username varchar(60) COLLATE utf8_general_ci NOT NULL,
  email varchar(80) COLLATE utf8_general_ci NOT NULL,
  password varchar(64) COLLATE utf8_general_ci NOT NULL,
  role enum('user', 'bloger', 'admin') NOT NULL DEFAULT 'user',
  created_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT = 1;

-- tabela categories
CREATE TABLE IF NOT EXISTS categories (
  id int unsigned NOT NULL AUTO_INCREMENT,
  title varchar(60) COLLATE utf8_general_ci NOT NULL,
  description varchar(255) COLLATE utf8_general_ci NULL DEFAULT '-',
  created_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT = 1;

-- tabela posts
CREATE TABLE IF NOT EXISTS posts (
  id int unsigned NOT NULL AUTO_INCREMENT,
  title varchar(60) COLLATE utf8_general_ci NOT NULL,
  body text COLLATE utf8_general_ci NULL,
  img varchar(80) COLLATE utf8_general_ci NOT NULL,
  category_id int unsigned NOT NULL,
  created_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT = 1;

-- tabela subscriptions
CREATE TABLE IF NOT EXISTS subscriptions (
  id int unsigned NOT NULL AUTO_INCREMENT,
  email varchar(80) COLLATE utf8_general_ci NOT NULL,
  created_at DATETIME NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB
DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT = 1;
