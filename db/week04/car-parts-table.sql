-- Clean Up
DROP TABLE IF EXISTS carType_carBrakes;
DROP TABLE IF EXISTS carBrakes;
DROP TABLE IF EXISTS carType;

-- Setup
CREATE TABLE carType (
    id SERIAL PRIMARY KEY NOT NULL,
    carMake VARCHAR(256) NOT NULL,
    carModel VARCHAR(256) NOT NULL,
    carYear VARCHAR(256) NOT NULL
);

CREATE TABLE carBrakes (
    id SERIAL PRIMARY KEY NOT NULL,
    brakePad VARCHAR(256)
);

CREATE TABLE carType_carBrakes (
    carTypeId int NOT NULL REFERENCES carType(id),
    carBrakesId INT NOT NULL REFERENCES carBrakes(id)
);

-- Add Car Type Data

--Toyota
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Toyota', 'Prius', '2016');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Toyota', 'Prius', '2017');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Toyota', 'Prius', '2018');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Toyota', 'Prius', '2019');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Toyota', 'Prius', '2020');

--Chevrolet
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Chevrolet', 'Corvette', '2016');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Chevrolet', 'Corvette', '2017');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Chevrolet', 'Corvette', '2018');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Chevrolet', 'Corvette', '2019');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Chevrolet', 'Corvette', '2020');

--Ford

INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Ford', 'Mustang', '2016');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Ford', 'Mustang', '2017');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Ford', 'Mustang', '2018');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Ford', 'Mustang', '2019');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Ford', 'Mustang', '2020');

--Honda

INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Honda', 'Civic', '2016');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Honda', 'Civic', '2017');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Honda', 'Civic', '2018');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Honda', 'Civic', '2019');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Honda', 'Civic', '2020');

--Jeep

INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Jeep', 'Wrangler', '2016');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Jeep', 'Wrangler', '2017');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Jeep', 'Wrangler', '2018');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Jeep', 'Wrangler', '2019');
INSERT INTO carType (carMake, carModel, carYear)
    VALUES ('Jeep', 'Wrangler', '2020');


-- Add Car Brakes

--Toyota Prius 2016
INSERT INTO carBrakes (brakePad)
    VALUES ('(Toyota Prius 2016) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (1, 1);

--Toyota Prius 2017
INSERT INTO carBrakes (brakePad)
    VALUES ('(Toyota Prius 2017) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (2, 2);

--Toyota Prius 2018
INSERT INTO carBrakes (brakePad)
    VALUES ('(Toyota Prius 2018) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (3, 3);

--Toyota Prius 2019
INSERT INTO carBrakes (brakePad)
    VALUES ('(Toyota Prius 2019) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (4, 4);

--Toyota Prius 2020
INSERT INTO carBrakes (brakePad)
    VALUES ('(Toyota Prius 2020) Front Brake: DYNAMIC FRICTION 1551118410 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (5, 5);


--Chevrolet Corvette 2016
INSERT INTO carBrakes (brakePad)
    VALUES ('(Chevrolet Corvette 2016) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (6, 6);

--Chevrolet Corvette 2017
INSERT INTO carBrakes (brakePad)
    VALUES ('(Chevrolet Corvette 2017) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (7, 7);

--Chevrolet Corvette 2018
INSERT INTO carBrakes (brakePad)
    VALUES ('(Chevrolet Corvette 2018) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (8, 8);

--Chevrolet Corvette 2019
INSERT INTO carBrakes (brakePad)
    VALUES ('(Chevrolet Corvette 2019) Front Brake: DYNAMIC FRICTION 1553100100 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (9, 9);

--Chevrolet Corvette 2020
INSERT INTO carBrakes (brakePad)
    VALUES ('(Chevrolet Corvette 2020) Front Brake: ACDELCO 84197896 GM Original Equipment');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (10, 10);


--Ford Mustang 2016
INSERT INTO carBrakes (brakePad)
    VALUES ('(Ford Mustang 2016) Front Brake: CENTRIC 10517910 Posi-Quiet');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (11, 11);

--Ford Mustang 2017
INSERT INTO carBrakes (brakePad)
    VALUES ('(Ford Mustang 2017) Front Brake: CENTRIC 10517910 Posi-Quiet');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (12, 12);

--Ford Mustang 2018
INSERT INTO carBrakes (brakePad)
    VALUES ('(Ford Mustang 2018) Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (13, 13);

--Ford Mustang 2019
INSERT INTO carBrakes (brakePad)
    VALUES ('(Ford Mustang 2019) Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (14, 14);

--Ford Mustang 2020
INSERT INTO carBrakes (brakePad)
    VALUES ('(Ford Mustang 2020) Front Brake: DYNAMIC FRICTION 1551178400 5000 Advanced');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (15, 15);


--Honda Civic 2016
INSERT INTO carBrakes (brakePad)
    VALUES ('(Honda Civic 2016) Front Brake: MONROE CX914 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (16, 16);

--Honda Civic 2017
INSERT INTO carBrakes (brakePad)
    VALUES ('(Honda Civic 2017) Front Brake: MONROE CX914 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (17, 17);

--Honda Civic 2018
INSERT INTO carBrakes (brakePad)
    VALUES ('(Honda Civic 2018) Front Brake: MONROE CX914 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (18, 18);

--Honda Civic 2019
INSERT INTO carBrakes (brakePad)
    VALUES ('(Honda Civic 2019) Front Brake: MONROE CX914 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (19, 19);

--Honda Civic 2020
INSERT INTO carBrakes (brakePad)
    VALUES ('(Honda Civic 2020) Front Brake: MONROE CX914 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (20, 20);


--Jeep Wrangler 2016
INSERT INTO carBrakes (brakePad)
    VALUES ('(Jeep Wrangler 2016) Front Brake: MONROE CX1273 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (21, 21);

--Jeep Wrangler 2017
INSERT INTO carBrakes (brakePad)
    VALUES ('(Jeep Wrangler 2017) Front Brake: MONROE CX1273 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (22, 22);

--Jeep Wrangler 2018
INSERT INTO carBrakes (brakePad)
    VALUES ('(Jeep Wrangler 2018) Front Brake: MONROE CX1273 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (23, 23);

--Jeep Wragler 2019
INSERT INTO carBrakes (brakePad)
    VALUES ('(Jeep Wrangler 2019) Front Brake: MONROE CX1273 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (24, 24);

--Jeep Wrangler 2020
INSERT INTO carBrakes (brakePad)
    VALUES ('(Jeep Wrangler 2020) Front Brake: MONROE CX1273 Total Solution Ceramic');
INSERT INTO carType_carBrakes (carTypeId, carBrakesId)
    VALUES (25, 25);
