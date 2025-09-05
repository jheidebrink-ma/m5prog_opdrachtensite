CREATE TABLE Category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE CutleryItem (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    material VARCHAR(50),
    price DECIMAL(6,2),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES Category(id)
);


insert into Category  (id,name) values (1,'knife');


insert into CutleryItem  (id,name,material,price,category_id) 
values (1,'excellent meat cutter','steel',9.99,1); 