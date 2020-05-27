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
    VALUES (1, '(Toyota Prius 2016) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (2, '(Toyota Prius 2017) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (3, '(Toyota Prius 2018) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (4, '(Toyota Prius 2019) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');

--Toyota Prius 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (5, '(Toyota Prius 2020) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');


--Chevrolet Corvette 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (6, '(Chevrolet Corvette 2016) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (7, '(Chevrolet Corvette 2017) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (8, '(Chevrolet Corvette 2018) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (9, '(Chevrolet Corvette 2019) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');

--Chevrolet Corvette 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (10, '(Chevrolet Corvette 2020) Front Brake: ACDELCO 84197896 GM Original Equipment');


--Ford Mustang 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (11, '(Ford Mustang 2016) Front Brake: CENTRIC 10517910 Posi-Quiet');

--Ford Mustang 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (12, '(Ford Mustang 2017) Front Brake: CENTRIC 10517910 Posi-Quiet');

--Ford Mustang 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (13, '(Ford Mustang 2018) Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');

--Ford Mustang 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (14, '(Ford Mustang 2019) Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');

--Ford Mustang 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (15, '(Ford Mustang 2020) Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');


--Honda Civic 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (16, '(Honda Civic 2016) Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (17, '(Honda Civic 2017) Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (18, '(Honda Civic 2018) Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (19, '(Honda Civic 2019) Front Brake: MONROE CX914 Total Solution Ceramic');

--Honda Civic 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (20, '(Honda Civic 2020) Front Brake: MONROE CX914 Total Solution Ceramic');


--Jeep Wrangler 2016
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (21, '(Jeep Wrangler 2016) Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wrangler 2017
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (22, '(Jeep Wrangler 2017) Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wrangler 2018
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (23, '(Jeep Wrangler 2018) Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wragler 2019
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (24, '(Jeep Wrangler 2019) Front Brake: MONROE CX1273 Total Solution Ceramic');

--Jeep Wrangler 2020
INSERT INTO car_brakes (car_type_id, brake_pad)
    VALUES (25, '(Jeep Wrangler 2020) Front Brake: MONROE CX1273 Total Solution Ceramic');
