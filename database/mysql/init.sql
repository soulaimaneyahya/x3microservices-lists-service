-- Container init // container // starts for the first time and // the database is created.
-- if not exists
-- create database if not exists
CREATE DATABASE IF NOT EXISTS x3microservices_lists_service_database;

-- create user if not exists
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';

-- grant all privileges to the user
GRANT ALL PRIVILEGES ON *.* TO 'user'@'%' WITH GRANT OPTION;

-- flush privileges
FLUSH PRIVILEGES;
