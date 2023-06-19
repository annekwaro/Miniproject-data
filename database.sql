-- Active: 1685438147127@@127.0.0.1@3306@blog_data


DROP TABLE IF EXISTS comments;
DROP TABLE IF EXISTS category_review;
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS review;
-- CREATE DATABASE blog_data;

CREATE TABLE category (
  id int NOT NULL AUTO_INCREMENT,
  title varchar(100) NOT NULL,
  label int DEFAULT NULL,
  description varchar(128) NOT NULL,
  image varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ;
INSERT INTO category (title, label, description, image)
VALUES ('Technology',1,'The future of cars','https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNhcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60'),
('Rangerover',3,'The future of cars','https://images.unsplash.com/photo-1581650107963-3e8c1f48241b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTJ8fGNhcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60'),
('Mercedes',4,'The future of cars','https://images.unsplash.com/photo-1511919884226-fd3cad34687c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTAxfHxjYXJzfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60'),
('Energy',5,'The future of cars', 'https://images.unsplash.com/photo-1603386329225-868f9b1ee6c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fGNhcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60'),
('Energy',6,'The future of cars','https://images.unsplash.com/photo-1588258219511-64eb629cb833?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGNhcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60'),
('Energy',7,'The future of cars','https://images.unsplash.com/photo-1532581140115-3e355d1ed1de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fGNhcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60'),
('Rangerover',3,'The future of cars','https://images.unsplash.com/photo-1581650107963-3e8c1f48241b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTJ8fGNhcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60'),
('Energy',8,'The future of cars','https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fGNhcnN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60');


CREATE TABLE review (
  id int NOT NULL AUTO_INCREMENT,
  title varchar(200) NOT NULL,
  date int NOT NULL,
  description varchar(200) NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ;

CREATE TABLE category_review (
  id_category int DEFAULT NULL,
  id_review int DEFAULT NULL,
  FOREIGN KEY (id_category)  REFERENCES category(id),
  FOREIGN KEY (id_review)  REFERENCES review(id)
  
) ;




INSERT INTO category_review 
VALUES 
(1,5),
(3,4),
(2,1),
(5,7),
(4,6),
(9,2),
(1,4),
(7,2);



CREATE TABLE comments (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(200) NOT NULL,
  description varchar(200) NOT NULL,
  time int NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO comments (name, description, time)
VALUES 
('Technology','The use of solar panels',16),
('Energy','We can recycle',15),
('Women Empowerment','Changing our attitudes',17),
('Politics','The war in Ukraine',18),
('Cars','The use of solar panels',23),
('News','The use of solar panels',6),
('News','The use of solar panels',6),
('Technology','The use of solar panels',9);




INSERT INTO review (title,date, description, name)
VALUES 
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone'),
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone'),
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone'),
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone'),
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone'),
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone'),
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone'),
('Technology Part 1',2006,'The iPhone 14 is good value for money ','Iphone');


