-- Clean Up
DROP TABLE IF EXISTS car_brakes;
DROP TABLE IF EXISTS car_tires;
DROP TABLE IF EXISTS car_type;

-- Setup
CREATE TABLE car_type (
    id SERIAL PRIMARY KEY,
    car_make VARCHAR(256) NOT NULL,
    car_model VARCHAR(256) NOT NULL,
    car_year VARCHAR(256) NOT NULL
);

CREATE TABLE car_brakes (
    id SERIAL NOT NULL,
    car_type_id INT NOT NULL REFERENCES car_type(id),
    brake_pad VARCHAR(256)
);

CREATE TABLE car_tires (
    id SERIAL NOT NULL,
    car_type_id INT NOT NULL REFERENCES car_type(id),
    all_season VARCHAR(256),
    winter VARCHAR(256)
);

-- Add Car Type Data

--Toyota
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Toyota', 'Prius', '2020');

--Chevrolet
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Chevrolet', 'Corvette', '2020');

--Ford

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Ford', 'Mustang', '2020');

--Honda

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Honda', 'Civic', '2020');

--Jeep

INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2016');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2017');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2018');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2019');
INSERT INTO car_type (car_make, car_model, car_year)
    VALUES ('Jeep', 'Wrangler', '2020');


-- Add Car Brakes

--Toyota Prius 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (1, 'Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (2, 'Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (3, 'Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (4, 'Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (5, 'Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');


--Chevrolet Corvette 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (6, 'Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (7, 'Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (8, 'Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (9, 'Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (10, 'Front Brake: ACDELCO 84197896 GM Original Equipment');


--Ford Mustang 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (11, 'Front Brake: CENTRIC 10517910 Posi-Quiet');

--Ford Mustang 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (12, 'Front Brake: CENTRIC 10517910 Posi-Quiet');

--Ford Mustang 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (13, 'Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');

--Ford Mustang 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (14, 'Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');

--Ford Mustang 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (15, 'Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');


--Honda Civic 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (16, 'Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (17, 'Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (18, 'Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (19, 'Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (20, 'Front Brake: MONROE CX914 Total Solution Ceramic');


--Jeep Wrangler 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (21, 'Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wrangler 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (22, 'Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wrangler 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (23, 'Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wragler 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (24, 'Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wrangler 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (25, 'Front Brake: MONROE CX1273 Total Solution Ceramic');
