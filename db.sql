CREATE DATABASE rentacardb;

USE rentacardb;

CREATE TABLE clients (
    username varchar(255) NOT NULL,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL
);

CREATE TABLE messages(
    name varchar(255) NOT NULL,
    phone_number varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    subject varchar(255) NOT NULL,
    message varchar(255) NOT NULL
)
