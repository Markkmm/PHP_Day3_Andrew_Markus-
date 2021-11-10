
DROP DATABASE IF EXISTS restaurant;
CREATE DATABASE restaurant DEFAULT CHARSET UTF8;

CREATE TABLE dishes(
    dishID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    image varchar(128) NOT NULL,
    dishName varchar(55) NOT NULL,
    price decimal (4,2) NOT NULL,
    description varchar(128)
);
INSERT INTO dishes (image, dishName, price, description) 
VALUES ('img/salad.jpg', 'Carrots, Leaves and Herbs', 6.50, 'Simple fresh delicious and nutritious');
INSERT INTO dishes (image, dishName, price, description) 
VALUES ('img/burger.jpg', "Swingin' Vegan Squareburger", 6.50, 'Simple fresh delicious and nutritious');
INSERT INTO dishes (image, dishName, price, description) 
VALUES ('img/maki.jpg', 'Spring-Summer Maki Platter', 12.60, 'Simple fresh delicious and nutritious');
INSERT INTO dishes (image, dishName, price, description) 
VALUES ('img/bruschetta.jpg', 'Bruschetta senza Panchetta', 7.50, 'Simple fresh delicious and nutritious');
INSERT INTO dishes (image, dishName, price, description) 
VALUES ('img/superSalad.jpg', 'Superfood Salad', 11.20, 'Simple fresh delicious and nutritious');